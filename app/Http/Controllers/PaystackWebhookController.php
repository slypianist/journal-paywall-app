<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PaystackWebhookController extends Controller
{
    public function handleWebhook(Request $request)
    {
        // Verify the webhook signature to ensure authenticity
        if ($this->verifyWebhookSignature($request)) {
            $payload = $request->all();
            $event = $payload['event']; // Extract the event type

            // Route the processing logic based on the event type
            switch ($event) {
                case 'charge.success':
                    $this->handlePaymentSuccess($payload);
                    break;
                case 'invoice.create':
                    $this->handleNewInvoice($payload);
                    break;
                case 'invoice.update':
                    $this->handleInvoiceUpdate($payload);
                    break;
                case 'subscription.create':
                    $this->handleSubscriptionSuccess($payload);
                    break;
                case 'subscription.not_renew':
                    $this->handleSubscriptionCancellation($payload);
                    break;
                default:
                    // Log unsupported events
                    Log::warning('Unsupported Paystack event', ['event' => $event]);
                    break;
            }

            return response('Webhook received and processed.', 200);
        }

        return response('Unauthorized', 401);
    }

    private function handlePaymentSuccess($payload)
    {

        // Extract relevant data from the $payload
        $amount = $payload['data']['amount'] / 100; // Convert amount to the appropriate currency format
        $paymentReference = $payload['data']['reference'];
        $customerEmail = $payload['data']['customer']['email'];

        // Extract authorization-related data
        $authorizationCode = $payload['data']['authorization']['authorization_code'];
        $cardLast4Digits = $payload['data']['authorization']['last4'];
        $cardType = $payload['data']['authorization']['card_type'];
        $bankName = $payload['data']['authorization']['bank'];

        // Create a new transaction and save it to the database
        $transaction = new Transaction();

        $transaction->amount = $amount;
        $transaction->reference = $paymentReference;
        $transaction->email = $customerEmail;
        $transaction->authCode = $authorizationCode;
        $transaction->cardDetails = $cardLast4Digits;
        $transaction->cardType = $cardType;
        $transaction->bankName = $bankName;

        $transaction->save();

        // Process the payment success event
        // You can update your database, send notifications, etc.
    }

    private function handleNewInvoice($payload)
    {
        Log::info('An invoice has been created for a subscription on your account.');
    }

    private function handleSubscriptionSuccess($payload)
    {

        // Extract Subscription Details.
        $amount = $payload['data']['amount'] / 100; // To convert amount to the appropriate currency format
        $subCode = $payload['data']['subscription_code'];
        $customerEmail = $payload['data']['customer']['email'];
        $status = $payload['data']['status'];
        $nextPayment = $payload['data']['next_payment_date'];

        $dateTime = new \DateTime($nextPayment);
        $ends_at = $dateTime->format('Y-m-d H:i:s');

        // Extract authorization-related data
        $authorizationCode = $payload['data']['authorization']['authorization_code'];
        $cardLast4Digits = $payload['data']['authorization']['last4'];
        $cardType = $payload['data']['authorization']['card_type'];
        $bankName = $payload['data']['authorization']['bank'];

        // Extract Subscription plan-related data.
        $subPlan = $payload['data']['plan']['name'];
        $subPlanCode = $payload['data']['plan']['plan_code'];
        $subPlanInterval = $payload['data']['plan']['interval'];

        // Create a new subscription and save it to the database
        $subscription = new Subscription();

        $subscription->subscriptionCode = $subCode;
        $subscription->authCode = $authorizationCode;
        $subscription->amount = $amount;
        $subscription->status = $status;
        $subscription->ends_at= $ends_at; // Set a valid date here
        $subscription->planName = $subPlan;
        $subscription->planCode = $subPlanCode;
        $subscription->interval = $subPlanInterval;
        $subscription->CustomerEmail = $customerEmail;

        $subscription->save();
    }

    private function handleSubscriptionCancellation($payload)
    {
        Log::info('Subscription is cancelled', ['event' => 'Cancelled']);
    }

    // Handle subscription auto-renewal event

    private function handleInvoiceUpdate($payload)
    {
        Log::info('An invoice has been updated.');
        // Handle subscription auto-renewal event
    }

    // Webhook validation logic

    private function verifyWebhookSignature(Request $request)
    {
        // Compare the secret key in the request header with your Paystack secret key
        $paystackSecretKey = env('PAYSTACK_SECRET_KEY');
        $paystackSignature = $request->header('x-paystack-signature');
        $expectedSignature = hash_hmac('sha512', $request->getContent(), $paystackSecretKey);

        return $paystackSignature === $expectedSignature;
    }
}
