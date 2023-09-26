<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;


class PlanController extends Controller
{

    public function index(){
            $user = Auth::user();

                $url = env('PAYSTACK_PAYMENT_URL').'/plan?status=active';

                try {
                    $response = Http::withHeaders([
                        'Authorization' => 'Bearer ' . env('PAYSTACK_SECRET_KEY'),
                        'Cache-Control' => 'no-cache',
                    ])->get($url);

                    if ($response->successful()) {
                        $plans = $response->json();
                        // Pass the $plans data to your view
                        return view('pages.admin.plan', compact('plans', 'user'));
                    } else {
                        return response('Failed to fetch plans from Paystack', 500);
                    }
                } catch (\Exception $e) {
                    return response('An error occurred: ' . $e->getMessage(), 500);
                }



      //

    }


    public function create(){
        $user = Auth::user();
        return view('pages.admin.create-plan', compact('user'));
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'interval' => 'required|string',
            'amount' => 'required|numeric',
            'description' => 'nullable|string'

        ]);

       // dd($request->all());

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

        if($response->successful()){

            $result = $response->json();

        if(isset($result['status']) && $result['status']=='success'){
            /* Plan::create([
                'name' => $result['data']['name'],
                'planCode' => $result['data']['plan_code'],
                'interval' => $result['data']['interval'],
                'amount' => $result['data']['amount']/100,
                'currency' => $result['data']['currency'],
                'description' => $result['data']['description'],

            ]); */
            return redirect()->route('plan.index')->with(['success'=> 'Plan created successfully.']);

        }

        else{

            return back()->with('error','Error. Plan not created.');
        }

        }else{
            return back()->with('info', 'Request not successful');
        }



    }

    public function edit(Request $request, Plan $plan){
        $id = 947661;
       // dd($id);

        $user = Auth::user();

        $url = env('PAYSTACK_PAYMENT_URL').'/plan/'.$id;

        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . env('PAYSTACK_SECRET_KEY'),
                'Cache-Control' => 'no-cache',
            ])->get($url);

            if ($response->successful()) {
                $plan = $response->json();
             //   dd($plans);
                // Pass the $plans data to your view
                return view('pages.admin.edit-plan', compact('plan', 'user'));
            } else {
                return response('Failed to fetch plans from Paystack', 500);
            }
        } catch (\Exception $e) {
            return response('An error occurred: ' . $e->getMessage(), 500);
        }

    }

    public function update( Request $request){
        $request->validate([
            'name' => 'required',
            'interval' => 'required|string',
            'amount' => 'required|numeric',
            'description' => 'nullable|string'
        ]);

        //Get parameters
        $id = $request->input('id');
        $name = $request->name;
        $interval = $request->interval;
        $amount = $request->amount;
        $description = $request->description;

        //Query fields
        $fields = [
            'name' => $name,
            'interval' => $interval,
            'amount' => $amount,
            'description' => $description,
        ];

        $url = env('PAYSTACK_PAYMENT_URL').'/plan/'.$id;


        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('PAYSTACK_SECRET_KEY'),
            'Cache-Control' => 'no-cache',
        ])->put($url, $fields);

        $result = $response->json();

        if(isset($result['status']) && $result['status']=='success'){

            return redirect()->route('plan.index')->with(['success'=> 'Plan updated successfully.']);

        }

        else{

            return back()->with('error','An error occurred.');
        }

    }


}
