<?php

namespace App\Http\Controllers;

use App\Models\Reader;
use App\Models\Setting;
use App\Models\Transaction;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ReadersController extends Controller
{
    public function register(Request $request){
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:readers',
            'password' => 'required|min:6|confirmed'
        ]);

        $data = $request->all();
        $data['password'] = Hash::make($data['password']);

        $reader = Reader::create($data);

        if ($reader) {
            // Authenticate the user after successful registration
            if (Auth::guard('reader')->attempt(['email' => $data['email'], 'password' => $request->input('password')])) {
                $intendedUrl = session('intendedURL');

                if ($intendedUrl) {
                    return redirect()->intended($intendedUrl)->with(['message' => 'Login successful']);
                }

                return redirect()->intended(route('home'))->with(['message' => 'Login successful']);
            }
        }

        // If the login attempt fails or encounters an issue
        return back()->with('message', 'An error occurred during login. Please try again.');
    }




    public function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email','password');
        if(Auth::guard('reader')->attempt($credentials)){
            $intendedUrl = session('intendedURL');

            if ($intendedUrl) {
                // Redirect to the intended URL for the latest post attempted

                return redirect()->intended($intendedUrl)->with(['message'=> 'Login successful']);
            }

            return redirect()->intended()->with(['message'=>'Login successful']);

        }

        return back()->with(['message'=>'Invalid username or password']);
     }

    public function logout(){
        Session::flush();
        Auth::guard('reader')->logout();
        return redirect()->route('home');

    }

    public function dashboard(){
        if(Auth::guard('reader')->check()){
            $fname = auth('reader')->user()->first_name;
            $customerEmail = auth('reader')->user()->email;
            $subs = DB::table('subscriptions')
                        ->where('CustomerEmail', $customerEmail)
                        ->where('status', 'active')
                        ->orderByDesc('id')
                        ->get();

            $subTotal = DB::table('subscriptions')
                        ->where('CustomerEmail', $customerEmail)
                        ->where('status', 'active')
                        ->orderByDesc('id')
                        ->count();

            $subDetail = DB::table('subscriptions')
                        ->where('CustomerEmail', $customerEmail)
                        ->where('recipientID', $customerEmail)
                        ->where('status', 'active')
                        ->orderByDesc('id')
                        ->first();


            return view('reader.dashboard', compact('fname', 'subs', 'subTotal', 'subDetail'));
        }
        return redirect()->route('reader.login');

    }

    public function showProfile(){

    $id =    Auth::guard('reader')->id();
    $reader = Reader::find($id);


    $fname =  auth('reader')->user()->first_name;

    return view('reader.profile', compact('fname', 'reader'));

    }

    public function updateProfile(Request $request){

        $rules = [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',

        ];

        if($request->filled('password')){
            $rules['password'] =  'min:6|confirmed';
        }
            $validator = Validator::make($request->all(), $rules);

            if($validator->fails()){
                return back()->withErrors($validator)->withInput();
            }

            $data = $request->all();

        $id =   Auth::guard('reader')->id();
        $reader = Reader::findorFail($id);

        if($request->has('password')){
            $data['password'] = Hash::make($request->password);

        }

        $reader->update($data);

        return back()->with('message', 'Your profile updated successfully');


    }

    public function showSub(){
       $fname =  auth('reader')->user()->first_name;

        $user = Auth::guard('reader')->user();
       $subs = Subscription::where('customerEmail', $user->email)->get();


     return view('reader.subscription', compact('fname', 'subs'));
    }

    public function transactions(){
        $fname =  auth('reader')->user()->first_name;
        $email = auth('reader')->user()->email;

        $transactions = Transaction::where('email', $email)->get();

        return view('reader.transactions', compact('fname', 'transactions'));

    }
}
