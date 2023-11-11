<?php

namespace App\Http\Controllers;

use App\Models\Reader;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function getSubscriptions(){
        $user = Auth::user();
        $subscriptions = Subscription::where('status', 'active')->get();
        return view('pages.admin.subscriptions', compact('subscriptions','user'));
    }

    public function getReaders(){
        $user = Auth::user();
        $readers = Reader::orderBy('id', 'DESC')->paginate(10);
        return view('pages.admin.readers', compact('readers','user'));
    }
}
