<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        $posts = Post::latest()->filter(request(['search', 'category', 'author']))->paginate(200)->withQueryString();


        return view('pages.test', compact('posts'));
        //return "This is working";
    }
}
