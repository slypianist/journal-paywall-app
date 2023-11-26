<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class SubscriptionController extends Controller
{
    public function newSubscription(Request $request){
        $url = env('PAYSTACK_PAYMENT_URL').'/transaction/initialize';

    $email = Auth::guard('reader')->user()->email;

    $planCode = $request->plan;
    $amount = $request->amount;

    // Initialize a payment transaction with Paystack
    $transactionResponse = Http::withHeaders([
        'Authorization' => 'Bearer ' . env('PAYSTACK_SECRET_KEY'),
        'Cache-Control' => 'no-cache',
    ])->post($url, [
        'email' => $email,
        'amount' => $amount,
        'plan' => $planCode,
    ])->json();

    // Redirect the user to the Paystack payment gateway
    return redirect()->away($transactionResponse['data']['authorization_url']);

    }

    public function handlePaymentCallback(Request $request){

        $paymentReference = $request->input('reference');
        $paystackSecretKey = env('PAYSTACK_SECRET_KEY');

        $verificationResponse = Http::withHeaders([
            'Authorization' => 'Bearer ' . $paystackSecretKey,
            'Cache-Control' => 'no-cache',
        ])->get("https://api.paystack.co/transaction/verify/{$paymentReference}");

        $payload = $verificationResponse->json();

        if ($verificationResponse->successful()) {


            Log::warning('Payment verification successful.', ['message' => $payload['message']]);

            // Updating records and perform additional processing as needed.
            $test = [];

            $data['reference'] = $payload['data']['reference'];
            $data['amount ']= $payload['data']['amount'];
            $data['plan'] = $payload['data']['plan_object']['name'];
            $data['email'] = $payload['data']['customer']['email'];



            return view('pages.test', compact('data'))->with('success', 'Payment successful');
        } else {
            // Verification failed; handle the error
            $error = $verificationData['message'] ?? 'Payment verification failed';

            // Handle the error, log it, and respond accordingly

}

    }

    public function cancelSubscription($subscriptionCode){
        $url = env('PAYSTACK_PAYMENT_URL').'/subscription/'.$subscriptionCode;
        $paystackSecretKey = env('PAYSTACK_SECRET_KEY');
        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.$paystackSecretKey,
            'Cache-Control' => 'no-cache'
        ])->get($url);

        $data = $response->json();

        dd($data);

      $token = $data['data']['email_token'];
    }

    public function fetchSubscription(){
       $user = Auth::guard('reader')->user();
       $subscriptions = Subscription::where('status', 'active')
                           ->where('customerEmail', $user->email)
                           ->get();

       return view('reader.subscription', compact('subscriptions'));

    }
}
