<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\GeneralSetting;
use Illuminate\Support\Facades\DB;
use Artesaos\SEOTools\Facades\SEOTools;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $post = Post::latest()->filter(request(['search', 'category', 'author']))->paginate(8)->withQueryString();
        $posts = Post::with(['category'])->orderBy('posts.created_at', 'desc')->get();

      $politicsPost= DB::table('categories')
                        ->whereIn('categories.name',['Politics & Government',])
                          ->join('posts', 'categories.id', '=', 'posts.category_id')
                          ->join('users', 'posts.user_id', '=', 'users.id')
                          ->select('categories.name', 'posts.title', 'posts.image', 'posts.created_at', 'users.name AS writer',
                          'posts.excerpt', 'posts.slug')
                          ->orderBy('posts.created_at', 'desc')
                          ->limit(4)
                          ->get();

      $business= DB::table('categories')
                          ->whereIn('categories.name',[
                            'Business & Finance',])
                            ->join('posts', 'categories.id', '=', 'posts.category_id')
                            ->join('users', 'posts.user_id', '=', 'users.id')
                            ->select('categories.name', 'posts.title', 'posts.image', 'posts.created_at', 'users.name AS writer',
                            'posts.excerpt', 'posts.slug')
                            ->orderBy('posts.created_at', 'desc')
                            ->get();

        $energy = DB::table('categories')
                            ->where('categories.name',
                            'Energy & Environment')
                            ->join('posts', 'categories.id', '=', 'posts.category_id')
                            ->join('users', 'posts.user_id', '=', 'users.id')
                            ->select('categories.name', 'posts.title', 'posts.image', 'posts.created_at', 'users.name AS writer',
                            'posts.excerpt', 'posts.slug')
                            ->orderBy('posts.created_at', 'desc')
                            ->first();

        $energyPosts =  DB::table('categories')
                            ->where('categories.name',
                            'Energy & Environment')
                            ->join('posts', 'categories.id', '=', 'posts.category_id')
                            ->join('users', 'posts.user_id', '=', 'users.id')
                            ->select('categories.name', 'posts.title', 'posts.image', 'posts.created_at', 'users.name AS writer',
                            'posts.excerpt', 'posts.slug')
                            ->orderBy('posts.created_at', 'desc')
                            ->limit(3)
                            ->get();


         $economy = DB::table('categories')
                            ->where('categories.name',
                            'Economy')
                            ->join('posts', 'categories.id', '=', 'posts.category_id')
                            ->join('users', 'posts.user_id', '=', 'users.id')
                            ->select('categories.name', 'posts.title', 'posts.image', 'posts.created_at', 'users.name AS writer',
                            'posts.excerpt', 'posts.slug')
                            ->orderBy('posts.created_at', 'desc')
                            ->first();

          $ecoPosts = DB::table('categories')
                            ->where('categories.name',
                            'Economy')
                            ->join('posts', 'categories.id', '=', 'posts.category_id')
                            ->join('users', 'posts.user_id', '=', 'users.id')
                            ->select('categories.name', 'posts.title', 'posts.image', 'posts.created_at', 'users.name AS writer',
                            'posts.excerpt', 'posts.slug')
                            ->orderBy('posts.created_at', 'desc')
                            ->limit(3)
                            ->get();


         $social = DB::table('categories')
                            ->where('categories.name',
                            'Social issues')
                            ->join('posts', 'categories.id', '=', 'posts.category_id')
                            ->join('users', 'posts.user_id', '=', 'users.id')
                            ->select('categories.name', 'posts.title', 'posts.image', 'posts.created_at', 'users.name AS writer',
                            'posts.excerpt', 'posts.slug')
                            ->orderBy('posts.created_at', 'desc')
                            ->first();

        $life = DB::table('categories')
                            ->where('categories.name',
                            'Life & Culture')
                            ->join('posts', 'categories.id', '=', 'posts.category_id')
                            ->join('users', 'posts.user_id', '=', 'users.id')
                            ->select('categories.name', 'posts.title', 'posts.image', 'posts.created_at', 'users.name AS writer',
                            'posts.excerpt', 'posts.slug')
                            ->orderBy('posts.created_at', 'desc')
                            ->first();
                         //   dd($life);

         $tech = DB::table('categories')
                            ->where('categories.name',
                            'Technology')
                            ->join('posts', 'categories.id', '=', 'posts.category_id')
                            ->join('users', 'posts.user_id', '=', 'users.id')
                            ->select('categories.name', 'posts.title', 'posts.image', 'posts.created_at', 'users.name AS writer',
                            'posts.excerpt', 'posts.slug')
                            ->orderBy('posts.created_at', 'desc')
                            ->first();

        $opinion = DB::table('categories')
                            ->where('categories.name',
                            'Opinion')
                            ->join('posts', 'categories.id', '=', 'posts.category_id')
                            ->join('users', 'posts.user_id', '=', 'users.id')
                            ->select('categories.name', 'posts.title', 'posts.image', 'posts.created_at', 'users.name AS writer',
                            'posts.excerpt', 'posts.slug')
                            ->orderBy('posts.created_at', 'desc')
                            ->first();

        $africaID = DB::table('categories')
                            ->where('categories.name',
                            'In-depth Africa')
                            ->join('posts', 'categories.id', '=', 'posts.category_id')
                            ->join('users', 'posts.user_id', '=', 'users.id')
                            ->select('categories.name', 'posts.title', 'posts.image', 'posts.created_at', 'users.name AS writer',
                            'posts.excerpt', 'posts.slug')
                            ->orderBy('posts.created_at', 'desc')
                            ->first();

                          //  dd($africaID);

        $briefs = DB::table('categories')
                            ->where('categories.name',
                            'Africa in Brief')
                            ->join('posts', 'categories.id', '=', 'posts.category_id')
                            ->join('users', 'posts.user_id', '=', 'users.id')
                            ->select('categories.name', 'posts.title', 'posts.image', 'posts.created_at', 'users.name AS writer',
                            'posts.excerpt', 'posts.slug')
                            ->orderBy('posts.created_at', 'desc')
                            ->get();

            /*  $life = DB::table('categories')
                            ->where('categories.name',
                            'Energy & Environment')
                            ->join('posts', 'categories.id', '=', 'posts.category_id')
                            ->join('users', 'posts.user_id', '=', 'users.id')
                            ->select('categories.name', 'posts.title', 'posts.image', 'posts.created_at', 'users.name AS writer',
                            'posts.excerpt', 'posts.slug')
                            ->orderBy('posts.created_at', 'desc')
                            ->get(); */




        return view('news.home', compact('posts', 'business','politicsPost', 'energy',
        'energyPosts', 'africaID', 'briefs','opinion', 'tech', 'life', 'social', 'economy', 'ecoPosts')
            //'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(8)->withQueryString()
        );
    }

    public function showCategories()
    {
        // General Setting of the website
      /*   $general_setting = GeneralSetting::first(); */
        $categories = Category::with('posts')->get();

        /* SEOTools::setTitle("Categories | $general_setting->site_tagline");
        SEOTools::setDescription("$general_setting->site_meta_description");
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'webiste'); */

        return view('pages.categories', [
            /* 'site_title' => $general_setting->site_title,
            'logo_image' => $general_setting->logo_image,
            'footer_copyright' => $general_setting->footer_copyright, */
            'categories' => $categories
        ]);
    }
}
