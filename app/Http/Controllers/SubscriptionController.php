<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class SubscriptionController extends Controller
{
    public function newSubscription(Request $request){
        $url = env('PAYSTACK_PAYMENT_URL').'transaction/initialize';
    $email = Auth::guard('reader')->user()->email;
    $planCode = $request->plan;
    $amount = $request->amount;

    // Initialize a payment transaction with Paystack
    $transactionResponse = Http::post($url, [
        'email' => $email,
        'amount' => $amount, // Get plan amount based on the selected plan
        'plan' => $planCode,
    ])->json();

    // Redirect the user to the Paystack payment gateway
    return redirect()->away($transactionResponse['data']['authorization_url']);

    }
}
