<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthorStatusRequest;
use App\Models\Category;
use App\Models\GeneralSetting;
use App\Models\Post;
use App\Models\User;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Only user with user_types admin can access this page
        $this->authorize('Admin');

        $user =  Auth::user();
        $authors = User::all();

        return view('pages.admin.authors', [
            "authors" => $authors,
            "user" => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user, $id)
    {
        // General Setting of the website
       // $general_setting = GeneralSetting::first();

        // Get Post and Users with id
        $post = Post::findOrFail($id);
        $user = $user->findOrFail($id);

        return view('pages.admin.edit-authors')->with([
            "post" => $post,
            "categories" => Category::all(),
            "author" => $user,
            "user" => Auth::user()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(AuthorStatusRequest $request, $id)
    {
        $data = $request->all();

        $item = User::findOrFail($id);

        $item->update($data);

        return Redirect::route('authors.index')->with('success', "Success Update User [$item->name]");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, $id)
    {
        // Delete Post Of That Author
        Post::where('user_id', $id)->delete();

        // Delete Author
        $user->destroy($id);

        return Redirect::route('authors.index')->with('success', 'Success Delete Author');
    }
}
