<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Setting;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Support\Facades\Redirect;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage as FacadesStorage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.posts', [
            "posts" => Post::latest()->orderBy('id', 'desc')->filter(request(['search', 'category', 'author']))->paginate(10)->withQueryString(),
            "user" => Auth::user()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('pages.admin.create-posts', [
            "categories" => Category::all(),
            "user" => Auth::user()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        $data = $request->all();

     //   dd($data);

        // Save user_id from the logged in user id
        $data['user_id'] = auth()->user()->id;

        // Save and limit excerpt by 100 char from body text
        $data['excerpt'] = Str::limit(strip_tags($request->body), 100);

        // Save image file to storage/post-images
        if ($request->file('image')) {
            $data['image'] = $request->file('image')->store('post-images');
        }

        // We need to seperate tags by commas
        // Use implode() function to join
        // comma in the array
        $tags = explode(",", $request->tags);

        // Save post records
        $post = Post::create($data);

        // Save tags
        $post->tag($tags);

        return Redirect::route('posts.create')->with('success', "Post created successfully.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $advert = Setting::where('id', 1)->first();

        if(!auth('reader')->check()){

            //Store intended URL for current route
            session(['intendedURL' =>   route('post.list', [$post->slug])]);

        }

        $isSubscribed = false;
        if (auth('reader')->check() && $post->isPremium()) {
            $user = auth('reader')->user();

            $isSubscribed = Subscription::where('CustomerEmail', $user->email)
                            ->where('status', 'active')
                            ->exists();
        }

        $posts = Post::with(['category'])->orderBy('posts.created_at', 'desc')->get();
        $categoryID = $post->category->id;
        $related = Post::where('category_id', $categoryID)->get();
        $truncatedBody = Str::limit($post->body, 500);


        return view('news.show', compact('post', 'related', 'truncatedBody', 'isSubscribed', 'advert'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);

        // Authorize if user is the owner of the post or user_types is 'Admin'
        Gate::authorize('update-post', $post);

        return view('pages.admin.edit-post')->with([
            "post" => $post,
            "categories" => Category::all(),
            "user" => Auth::user()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, $id)
    {
        $data = $request->all();

        $post = Post::findOrFail($id);

        // Authorize if user is the owner of the post or user_types is 'Admin'
        Gate::authorize('update-post', $post);

        // Check if the slug has been change
        if ($request->slug != $post->slug) {
            $data['slug'] = 'required|unique:posts';
        }

        // Save and limit excerpt by 100 char from body text
        $data['excerpt'] = Str::limit(strip_tags($request->body), 100);

        // Save image file to storage/post-images
        if ($request->file('image')) {
            // Will delete existing image before storing new images
            if ($post->image) {
                FacadesStorage::delete($post->image);
            }
            $data['image'] = $request->file('image')->store('post-images');
        }



        // Save post records
        $post->update($data);

        // Replace Tags
        $post->retag($request->tags);

        return Redirect::route('posts.index')->with('success', "Post updated successfully. [$request->title]");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        // Also delete that post image
        if ($post->image) {
            FacadesStorage::delete($post->image);
        }

        $post->delete();

        return Redirect::route('posts.index')->with('success', 'Post deleted successfully.');
    }

    /**
     * Display author-post
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function authorPost($id)
    {
        // General Setting of the website
       /*  $general_setting = GeneralSetting::first();
 */
        // Get first records where id = $id
        // Use to display the name record in the single author page
        $user_post = DB::table('users')
            ->where('id', '=', $id)
            ->get()
            ->first();

        // Get posts records where user_id = $id, paginate by 5
        $posts = Post::with('category')->where('user_id', $id)->paginate(5);



        return view('pages.admin.author-post', [
            "posts" => $posts,
            "user_post" => $user_post,
            "user" => Auth::user()
        ]);
    }

    /**
     * Check if the post slug already exist in the records
     *
     * @param  \Illuminate\Http\Request  $request
     * @return json
     */
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }

    /**
     * Generate and Display random article
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function randomArticle(Post $post)
    {
        $post = Post::all();
        $random_id = $post->random()->id;
        $slug = Post::select('slug')->where('id', $random_id)->get()->value('slug');

        return redirect("/$slug");
    }

    /**
     * Static helper function to get next post link
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public static function nextPost($id)
    {
        // get the current post id
        $post_id = Post::find($id);

        // get the next post id
        $next_id = Post::where('id', '>', $post_id->id)->min('id');

        $slug = Post::select('slug')->where('id', $next_id)->get()->value('slug');

        // get the max post id
        $max_id = Post::where('id', $post_id->id)->max('id') + 1;

        if ($post_id->id == $max_id) {
            return ("/");
        }

        return ("/$slug");
    }

    /**
     * Static helper function to get prev post link
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public static function prevPost($id)
    {
        // get the current post id
        $post_id = Post::find($id);

        // get the previous post id
        $previous_id = Post::where('id', '<', $post_id->id)->max('id');
        $slug = Post::select('slug')->where('id', $previous_id)->get()->value('slug');

        if ($post_id->id == "1") {
            return ("/");
        }

        return ("/$slug");
    }

    public function fileUpload(Request $request){
        if($request->hasFile('upload')){
            $fileNameExtension = $request->file('upload')->getClientOriginalName();
            $fileExtension = $request->file('upload')->getClientOriginalExtension();
            $fileName = pathinfo($fileNameExtension, PATHINFO_FILENAME);
            $filename = $fileName.'_'.time().'.'. $fileExtension;
            $request->file('upload')->move(public_path('podcasts'), $filename);
            $url = asset('podcasts/' . $filename);
            return response()->json(['filename' => $filename, 'uploaded'=> 1, 'url' => $url]);
        }
    }
}
