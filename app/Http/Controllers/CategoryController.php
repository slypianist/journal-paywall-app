<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Setting;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\GeneralSetting;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage as FacadesStorage;

class CategoryController extends Controller
{
    public function __construct(){
        $advert = Setting::where('id', 1)->first();
        return compact('advert');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.categories', [
            'categories' => Category::latest()->paginate(10)->withQueryString(),
            'user' => Auth::user()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        return view('pages.admin.create-categories', [

            "categories" => Category::all(),
            "user" => Auth::user()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        $data = $request->all();

        // Save image file to storage/category-images
        if ($request->file('image')) {
            $data['image'] = $request->file('image')->store('category-images');
        }

        Category::create($data);

        return Redirect::route('admin-categories.index')->with('success', "[$request->name] created successfully.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        /**
         * Since we are now displaying single category,
         * We return /admin-categories when user tries to access
         * /admin-categories/{id}
         *
         */
        return Redirect::route('admin-categories.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category, $id)
    {
        $category = Category::findOrFail($id);

        return view('pages.admin.edit-categories')->with([
            "category" => $category,
            "categories" => Category::all(),
            "user" => Auth::user()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, $id)
    {
        $data = $request->all();

        $category = Category::findOrFail($id);

        // Check if the slug has been change
        if ($request->slug != $category->slug) {
            $data['slug'] = $request->slug;
        }

        // Save image file to storage/category-images
        if ($request->file('image')) {
            // Will delete existing image before storing new images
            if ($category->image) {
                FacadesStorage::delete($category->image);
            }
            $data['image'] = $request->file('image')->store('category-images');
        }

        $category->update($data);

        return Redirect::route('admin-categories.index')->with('success', "Success Update Category [$request->name]");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category, $id)
    {
        $category = Category::findOrFail($id);

        // Prevent user to delete 'uncategorized' category
        if ($id == 1) {
            return Redirect::route('admin-categories.index')->with('error', 'Category-Uncategorized can\'t be deleted.');
        }

        // Also delete that post image
        if ($category->image) {
            FacadesStorage::delete($category->image);
        }

        // Delete category record
        $category->delete();

        // Also detach that category from the posts, not delete, 1 means 'uncategorized' category
        Post::where('category_id', $id)
            ->update(['category_id' => 1]);

        return Redirect::route('admin-categories.index')->with('success', 'Category deleted successfully.');
    }

    /**
     * Check if the category slug already exist in the records
     *
     * @param  \Illuminate\Http\Request  $request
     * @return json
     */
    public function checkCategorySlug(Request $request)
    {
        $slug = SlugService::createSlug(Category::class, 'slug', $request->name);

        return response()->json(['slug' => $slug]);
    }

    public function showCategoryPost(Request $request){
        $posts = Post::latest()->with('category')->filter(request(['search', 'category', 'author']))->paginate(8)->withQueryString();
        $title =$request->query('category');
        $category = Category::where('slug', $title)->first();

        $briefs = DB::table('categories')
                            ->where('categories.name',
                            'Africa in Brief')
                            ->join('posts', 'categories.id', '=', 'posts.category_id')
                            ->join('users', 'posts.user_id', '=', 'users.id')
                            ->select('categories.name', 'posts.title', 'posts.image', 'posts.created_at', 'users.name AS writer',
                            'posts.excerpt', 'posts.slug')
                            ->orderBy('posts.created_at', 'desc')
                            ->get();


        return view('news.category-post', compact('posts', 'briefs', 'title', 'category'));

    }
}
