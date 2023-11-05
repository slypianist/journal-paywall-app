<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubscriptionVisibilityMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()){
            $user = auth()->user('reader');

        $hasCustomerSubscription = Subscription::where('CustomerEmail', $user->email)
                                                ->where('recipient', $user->email)
                                                ->where('status', 'active')
                                                ->exists();
        $hasRecipientSubscription = Subscription::where('recipient_email', $user->email)
                                                ->where('status', 'active')
                                                ->exists();

        view()->share('hasCustomerSubscription', $hasCustomerSubscription);
        view()->share('hasRecipientSubscription', $hasRecipientSubscription);

        }

        return $next($request);
    }
}
