<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Mail\GiftSubscriptionEmail;
use App\Mail\PaymentConfirmEmail;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class SubscriptionController extends Controller
{
    /*

    Create a new subscription

    */


    public function newSubscription(Request $request){
        $url = env('PAYSTACK_PAYMENT_URL').'/transaction/initialize';

    $email = Auth::guard('reader')->user()->email;

    $planCode = $request->plan;
    $amount = $request->amount;
    $metadata = [];

    // Initialize a payment transaction with Paystack
    $transactionResponse = $this->initializePayment($email, $amount, $planCode, $metadata, $url);

    // Redirect the user to the Paystack payment gateway
    return redirect()->away($transactionResponse['data']['authorization_url']);

    }

    //Very

    public function handlePaymentCallback(Request $request){

        $paymentReference = $request->input('reference');
        $paystackSecretKey = env('PAYSTACK_SECRET_KEY');

        $verificationResponse = Http::withHeaders([
            'Authorization' => 'Bearer ' . $paystackSecretKey,
            'Cache-Control' => 'no-cache',
        ])->get("https://api.paystack.co/transaction/verify/{$paymentReference}");

        $payload = $verificationResponse->json();

        if ($verificationResponse->successful()) {

            Log::warning('Payment verification successful.', ['payload' => $payload]);

            // Updating records and perform additional processing.

            $data['reference'] = $payload['data']['reference'];
            $data['amount ']= $payload['data']['amount'];
            $data['plan'] = $payload['data']['plan_object']['name'];
            $data['email'] = $payload['data']['customer']['email'];

            if(isset($payload['data']['metadata']) && !empty(['data']['metadata'])){
                $data['repEmail'] = $payload['data']['metadata']['repEmail'];
                $data['senderName'] = $payload['data']['metadata']['senderName'];
                $data['message'] = $payload['data']['metadata']['message'];

                Mail::to($data['repEmail'])->send(new GiftSubscriptionEmail($data));

            }

            Mail::to($data['email'])->send(new PaymentConfirmEmail($data));

            return view('pages.test', compact('data'))->with('success', 'Payment successful');
        } else {
            // Verification failed; handling the error
            $error = $payload['message'] ?? 'Payment verification failed';
            Log::error('Payment verification failed.', ['error' => $error, 'payload' => $payload]);

            return back()->with('error', $error);
}

    }

    /*

    Cancel a subscription.

    */

    public function cancelSubscription($subscriptionCode){
        /* $url = env('PAYSTACK_PAYMENT_URL').'/subscription/'.$subscriptionCode;
        $paystackSecretKey = env('PAYSTACK_SECRET_KEY');
        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.$paystackSecretKey,
            'Cache-Control' => 'no-cache'
        ])->get($url); */

        try {
            $data = $this->getSubscriptionToken($subscriptionCode);
            $paystackSecretKey = env('PAYSTACK_SECRET_KEY');

            if($data){

                $token = $data['data']['email_token'];

             //   dd($token);

                $url = "https://api.paystack.co/subscription/disable";

                try {
                    $Data = Http::withHeaders([
                        'Authorization' => 'Bearer ' . $paystackSecretKey,
                        'Cache-Control' => 'no-cache',
                    ])->post($url, [
                        'code' => $subscriptionCode,
                        'token' => $token,
                    ]);

                    if($Data->successful() ){
                        $response = $Data->json();


                        return back()->with('success', $response['message']);
                    }else{
                        return back()->with('error', 'Subscription already inactive.');
                    }

                } catch (ConnectionException $th) {
                    return back()->with('error', 'Error in network connection.');
                }
            }

        } catch (ConnectionException $th) {
            return back()->with('error', 'An error occurred.');
        }

    }

    /* Fetch all subscriptions */

    public function fetchSubscription(){
       $user = Auth::guard('reader')->user();
       $subscriptions = Subscription::where('status', 'active')
                           ->where('customerEmail', $user->email)
                           ->get();

       return view('reader.subscription', compact('subscriptions'));

    }

    /*

    Handle gift a subscription
    */

    public function handleSubGift(Request $request){
     //   $url = env('PAYSTACK_PAYMENT_URL').'/plan/'.$id;

        try {
            $id = $request->plan_code;

            $repMail = $request->rep_email;
            $email = $request->sender_email;
            $message = $request->message;
            $senderName = $request->sender_name;
            /* $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . env('PAYSTACK_SECRET_KEY'),
                'Cache-Control' => 'no-cache',
            ])->get($url); */

            $plan = $this->getPlanDetails($id);

            if ($plan->successful()) {

               $amount = $plan['data']['amount'];
               $email = $email;
               $metadata = [
                'repEmail'=>$repMail,
                'message'=> $message,
                'senderName' => $senderName
            ];

                // Perform action.

                $url = env('PAYSTACK_PAYMENT_URL').'/transaction/initialize';

                // Initialize a payment transaction with Paystack
                $transactionResponse = $this->initializePayment($email, $amount, $id, $metadata, $url);

                // Redirect the user to the Paystack payment gateway
                return redirect()->away($transactionResponse['data']['authorization_url']);

            } else {
                return back()->with(['error'=> 'Incorrect parameters. Try again']);
            }
        } catch (\Exception $e) {
            return response('An error occurred: ' . $e->getMessage(), 500);
        }

    }



    private function getPlanDetails($planId){
        $url = env('PAYSTACK_PAYMENT_URL').'/plan/'.$planId;

        return Http::withHeaders([
        'Authorization' => 'Bearer ' . env('PAYSTACK_SECRET_KEY'),
        'Cache-Control' => 'no-cache',
        ])->get($url)->json();

    }

    private function initializePayment($email, $amount, $planId, $metadata, $url){

        return Http::withHeaders([
            'Authorization' => 'Bearer ' . env('PAYSTACK_SECRET_KEY'),
            'Cache-Control' => 'no-cache',
        ])->post($url, [
            'email' => $email,
            'amount' => $amount,
            'plan' => $planId,
            'metadata' => $metadata,
        ])->json();

    }

    private function handlePayment($reference){

        $paystackSecretKey = env('PAYSTACK_SECRET_KEY');

        return Http::withHeaders([
            'Authorization' => 'Bearer ' . $paystackSecretKey,
            'Cache-Control' => 'no-cache',
        ])->get("https://api.paystack.co/transaction/verify/{$reference}")->json();

    }

    private function getSubscriptionToken($subscriptionCode){
        $paystackSecretKey = env('PAYSTACK_SECRET_KEY');
        return Http::withHeaders([
            'Authorization' => 'Bearer ' . $paystackSecretKey,
            'Cache-Control' => 'no-cache',
        ])->get("https://api.paystack.co/subscription/{$subscriptionCode}")->json();
    }
}
