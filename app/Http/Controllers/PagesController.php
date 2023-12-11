<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class PagesController extends Controller
{
    public function about(){
        return view('pages.about');
    }

    public function termsConditions(){
        return view('pages.terms');

    }

    public function advertise(){
        return view('pages.advertise');

    }

    public function codeOfEthics(){
        return view('pages.ethics');

    }

    public function faq(){
        return view('pages.faq');

    }

    public function copyRight(){
        return view('pages.copyright');

    }

    public function writeForJournal(){
        return view('pages.write-for-journal');

    }

    public function privacyPolicy(){
        return view('pages.privacy-policy');
    }

    public function subscribe(){

        $url = env('PAYSTACK_PAYMENT_URL').'/plan?status=active';

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('PAYSTACK_SECRET_KEY'),
            'Cache-Control' => 'no-cache',
        ])->get($url);

        if($response->successful()){

            $plans = $response->json();

          //  dd($plans);

        return view('news.sub', compact('plans'));
        }

    }

    public function subGift(){

        $url = env('PAYSTACK_PAYMENT_URL').'/plan?status=active';

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('PAYSTACK_SECRET_KEY'),
            'Cache-Control' => 'no-cache',
        ])->get($url);

        if($response->successful()){

            $plans = $response->json();

          //  dd($plans);

        return view('news.giftsub', compact('plans'));
        }


       // Catch exception ;
    }

    public function subGroup(){
        return view('news.groupsub');
    }

   public function contactUs(){
    return view('pages.contact');
   }

   public function africaInBrief(){

    $posts = DB::table('categories')
    ->where('categories.name','Africa in Brief')
    ->join('posts', 'categories.id', '=', 'posts.category_id')
    ->select( 'posts.title', 'posts.created_at','posts.excerpt', 'posts.body')
    ->orderBy('posts.created_at', 'desc')
    ->get();

    return view('news.africa-in-brief', compact('posts'));

   }

   public function test(){
    return view('pages.test');

   }


}
