<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubscriptionController extends Controller
{
    public function newSubscription(){
    $user = Auth::guard('reader')->user();

    //   auth('reader')->user()->email;
        dd($user->first_name);




    }
}
