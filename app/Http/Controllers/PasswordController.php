<?php

namespace App\Http\Controllers;

use App\Models\Reader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use App\Notifications\ReaderResetPasswordNotification;

class PasswordController extends Controller
{
    public function sendReaderPasswordResetLink(Request $request)
{
    $this->validate($request, ['email' => 'required|email']);

    $reader = Reader::where('email', $request->email)->first();

    if (!$reader) {
        return back()->withErrors(['email' => 'This email is not associated with any account']);
    }

    $response = Password::broker('readers')->sendResetLink(
        $request->only('email')
    );

    if ($response === Password::RESET_LINK_SENT) {
        $reader->notify(new ReaderResetPasswordNotification($response));
        return redirect()->back()->with('status', 'Reset link sent to your email');
    } else {
        return back()->withErrors(['email' => trans($response)]);
        }
    }

    public function showResetForm(Request $request, $token, $email)
    {
        // Pass $token and $email to the password reset view
        return view('news.passwordreset')->with([
            'token' => $token,
            'email' => $email
        ]);
    }


    public function resetPassword(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
            'token' => 'required'
        ]);

        $response = Password::broker('readers')->reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->password = Hash::make($password);
                $user->save();
            }
        );

        if ($response === Password::PASSWORD_RESET) {
            return redirect()->route('login')->with('status', 'Password reset successfully');
        } else {
            return back()->withErrors(['email' => trans($response)]);
        }
    }


}
