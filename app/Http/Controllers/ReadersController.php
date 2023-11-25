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
            'email' => 'required|email:unique:readers',
            'password' => 'required|min:6|confirmed'
        ]);

       $data=  $request->all();
       $data['password'] = Hash::make($data['password']);

     //   $check = $this->create($data);
        Reader::create($data);
        return redirect()->route('reader.showLoginForm')->with('message','Registration successful.');
    }


    public function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email','password');


//dd($data);

        if(Auth::guard('reader')->attempt($credentials)){
            return redirect()->route('reader.dashboard')->with(['message'=>'You are logged in successfully']);

        }

        return back()->with(['message'=>'Invalid username or password']);
     }

    public function logout(){
        Session::flush();
        Auth::guard('reader')->logout();
        return redirect()->route('reader.login');

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
   // dd($reader);

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

     //   dd($transactions);

        return view('reader.transactions', compact('fname', 'transactions'));

    }
}
