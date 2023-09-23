<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class PlanController extends Controller
{
    public function create(Request $request){

        $request->validate([
            'name' => 'required',
            'interval' => 'required|string',
            'amount' => 'required|numeric',
            'description' => 'nullable|string'

        ]);


       /*  $url = config('paystack.api_url');

      dd($url); */

        $name = $request->name;
        $interval = $request->interval;
        $amount = $request->amount*100;
        $description = $request->description;

        $fields = [
            'name' => $name,
            'interval' => $interval,
            'amount' => $amount,
            'description' => $description,
        ];

        $url = env('PAYSTACK_PAYMENT_URL').'/plan';



        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('PAYSTACK_SECRET_KEY'),
            'Cache-Control' => 'no-cache',
        ])->post($url, $fields);

        $result = $response->json();
        $result;

        $plan = Plan::create([
            'name' => $result['data']['name'],
            'planCode' => $result['data']['plan_code'],
            'interval' => $result['data']['interval'],
            'amount' => $result['data']['amount'],
            'currency' => $result['data']['currency'],
            'description' => $result['data']['description'],

        ]);

        return response()->json(['message'=> 'plan has been created successfully.', 'plan'=> $plan]);

      //  return redirect()->route('admin')


    }

    public function edit(){

    }

    public function update(){

    }

}
