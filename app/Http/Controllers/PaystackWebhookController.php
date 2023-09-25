<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class PaystackWebhookController extends Controller
{
    public function handleWebhook(Request $request){


    // Verify the webhook signature to ensure authenticity (as discussed before)
    if ($this->verifyWebhookSignature($request)) {
        $payload = $request->json();
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
                // Handle unrecognized or unsupported events
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

        return response('Webhook received and processed.', 200);

    return response('Unauthorized', 401);
}

private function handleNewInvoice($payload)
{
    // Handle new invoice event
}

private function handleSubscriptionSuccess($payload)
{
    // Handle successful subscription event
}

private function handleSubscriptionCancellation($payload)
{
    // Handle subscription cancellation event
}

private function handleInvoiceUpdate($payload)
{
    // Handle subscription auto-renewal event
}


}
