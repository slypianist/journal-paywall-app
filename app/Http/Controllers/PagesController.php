<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

}
