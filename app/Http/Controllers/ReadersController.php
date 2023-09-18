<?php

namespace App\Http\Controllers;

use App\Models\Reader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

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
        return redirect()->route('reader.showLoginForm')->with(['message'=>'Registration successful. Please login']);
    }


    public function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email','password');


//dd($data);

        if(Auth::guard('reader')->attempt($credentials)){


            return redirect()->intended('user/dashboard')->with(['message'=>'You are logged in successfully']);

        }

        return "Not working";
     }

    public function logout(){
        Session::flush();
        Auth::guard('reader')->logout();
        return redirect('user/login');

    }

    public function dashboard(){
        if(Auth::guard('reader')->check()){
            return view('news.readerdash');
        }
        return redirect()->route('reader.login');

    }

    public function editProfile(){
    $id =    Auth::guard('reader')->id();

    $reader = Reader::where('id', $id);

    return view('', compact($reader));

    }

    public function updateProfile(Request $request, Reader $reader){
        Auth::guard('reader')->id();
        $reader->email = $request->email;
        if($request->password == ""){
            $reader->save();
        }
        $reader->password = $request->password;

        $reader->update();


    }
}
