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

    public function handlePaymentCallback(Request $request){

        $paymentReference = $request->input('reference');
       // $paymentReference = "w7616uiupv"; // Replace with the actual payment reference
        $paystackSecretKey = env('PAYSTACK_SECRET_KEY'); // Replace with your Paystack secret key

        $verificationResponse = Http::withHeaders([
            'Authorization' => 'Bearer ' . $paystackSecretKey,
            'Cache-Control' => 'no-cache',
        ])->get("https://api.paystack.co/transaction/verify/{$paymentReference}");

        $verificationData = $verificationResponse->json();

        dd($verificationData);

        if ($verificationResponse->successful()) {
            // Verification successful; $verificationData contains payment details
            // Update your records and perform additional processing as needed
            // ...
        } else {
            // Verification failed; handle the error
            $error = $verificationData['message'] ?? 'Payment verification failed';
            // Handle the error, log it, and respond accordingly
            // ...
}




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
