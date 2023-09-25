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
        $plans = DB::table('plans')
                ->select('id','name', 'planCode','amount','created_at', 'description')
                ->get();

                $user = Auth::user();

        return view('pages.admin.plan', compact('plans', 'user'));

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

        if(isset($result['status'])&& $result['status']=='success'){
            Plan::create([
                'name' => $result['data']['name'],
                'planCode' => $result['data']['plan_code'],
                'interval' => $result['data']['interval'],
                'amount' => $result['data']['amount']/100,
                'currency' => $result['data']['currency'],
                'description' => $result['data']['description'],

            ]);

            return redirect()->route('plan.index')->with(['success'=> 'Plan created successfully.']);

        }

        else{

            return back()->with('error','Error. Plan not created.');
        }

        }else{
            return back()->with('info', 'Request not sccussful');
        }



    }

    public function edit(Request $request, Plan $plan){
        $user = Auth::user();
        return view('pages.admin.edit-plan', compact('plan', 'user'));

    }

    public function update( Request $request, Plan $plan){
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
        ])->patch($url, $fields);

        $result = $response->json();
        $result;

        $plan->update([
            'name' => $result['data']['name'],
            'planCode' => $result['data']['plan_code'],
            'interval' => $result['data']['interval'],
            'amount' => $result['data']['amount'],
            'currency' => $result['data']['currency'],
            'description' => $result['data']['description'],

        ]);

        return response()->json(['message'=> 'Plan edited successfully.', 'plan'=> $plan]);

    }

    public function delete(){
        // Delete
    }

}
