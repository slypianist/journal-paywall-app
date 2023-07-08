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
        $posts = Post::latest()->filter(request(['search', 'category', 'author']))->paginate(8)->withQueryString();
       // $posts = Post::with(['category'])->orderBy('posts.created_at', 'desc')->get();

       //Get random post
       $post = Post::all();
        $random_id = $post->random()->id;
        $randomPost = Post::where('id', $random_id)->first();
     // dd($randomPost);



      $politicsPost= DB::table('categories')
                        ->whereIn('categories.name',['Politics & Government',])
                          ->join('posts', 'categories.id', '=', 'posts.category_id')
                          ->join('users', 'posts.user_id', '=', 'users.id')
                          ->select('categories.name', 'posts.title', 'posts.image', 'posts.created_at', 'users.name AS writer',
                          'posts.excerpt', 'posts.slug')
                          ->orderBy('posts.created_at', 'desc')
                          ->limit(3)
                          ->get();

      $business= DB::table('categories')
                          ->whereIn('categories.name',[
                            'Business & Finance',])
                            ->join('posts', 'categories.id', '=', 'posts.category_id')
                            ->join('users', 'posts.user_id', '=', 'users.id')
                            ->select('categories.name', 'posts.title', 'posts.image', 'posts.created_at', 'users.name AS writer',
                            'posts.excerpt', 'posts.slug')
                            ->orderBy('posts.created_at', 'desc')
                            ->limit(3)
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

         $socialsRelated = DB::table('categories')
                            ->where('categories.name',
                            'Social issues')
                            ->join('posts', 'categories.id', '=', 'posts.category_id')
                            ->join('users', 'posts.user_id', '=', 'users.id')
                            ->select('categories.name', 'posts.title', 'posts.image', 'posts.created_at', 'users.name AS writer',
                            'posts.excerpt', 'posts.slug')
                            ->orderBy('posts.created_at', 'desc')
                            ->limit(3)
                            ->get();


        $life = DB::table('categories')
                            ->where('categories.name',
                            'Life & Culture')
                            ->join('posts', 'categories.id', '=', 'posts.category_id')
                            ->join('users', 'posts.user_id', '=', 'users.id')
                            ->select('categories.name', 'posts.title', 'posts.image', 'posts.created_at', 'users.name AS writer',
                            'posts.excerpt', 'posts.slug')
                            ->orderBy('posts.created_at', 'desc')
                            ->first();

        $lifesRelated = DB::table('categories')
                            ->where('categories.name',
                            'Life & Culture')
                            ->join('posts', 'categories.id', '=', 'posts.category_id')
                            ->join('users', 'posts.user_id', '=', 'users.id')
                            ->select('categories.name', 'posts.title', 'posts.image', 'posts.created_at', 'users.name AS writer',
                            'posts.excerpt', 'posts.slug')
                            ->orderBy('posts.created_at', 'desc')
                            ->limit(3);


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
        'energyPosts', 'africaID', 'briefs','opinion', 'tech', 'life', 'social', 'economy', 'ecoPosts', 'randomPost', 'lifesRelated',
         'socialsRelated'                                                                           )
            //'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(8)->withQueryString()
        );
    }

    public function allCategories()
    {
        $categories = Category::with('posts')->get();

        return view('pages.categories', [

            'categories' => $categories
        ]);
    }

    public function showCategory(Category $category){
        dd($category);
    }
}
