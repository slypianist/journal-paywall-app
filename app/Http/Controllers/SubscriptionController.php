<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class SubscriptionController extends Controller
{
    public function newSubscription(Request $request){
        $url = env('PAYSTACK_PAYMENT_URL').'/transaction/initialize';

    $email = Auth::guard('reader')->user()->email;

    $planCode = $request->plan;
    $amount = $request->amount;

   // dd($planCode);

    // Initialize a payment transaction with Paystack
    $transactionResponse = Http::withHeaders([
        'Authorization' => 'Bearer ' . env('PAYSTACK_SECRET_KEY'),
        'Cache-Control' => 'no-cache',
    ])->post($url, [
        'email' => $email,
        'amount' => $amount, // Get plan amount based on the selected plan
        'plan' => $planCode,
    ])->json();

   // dd($transactionResponse);

    // Redirect the user to the Paystack payment gateway
    return redirect()->away($transactionResponse['data']['authorization_url']);

    }

    public function cancelSubscription(){

    }

    public function fetchSubscription(){
       $user = Auth::guard('reader')->user();
       $subscriptions = Subscription::where('status', 'active')
                           ->where('customerEmail', $user->email)
                           ->get();

       return view('reader.subscription', compact('subscriptions'));


    }
}
