<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Episode;
use App\Models\Podcast;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Cviebrock\EloquentSluggable\Services\SlugService;

class PodcastController extends Controller
{
    public function index(){
        $podcasts = Podcast::withCount('episodes')->orderByDesc('created_at')->get();
       // return response()->json(['podcast'=> $podcasts]);
        return view('podcasts.index', compact('podcasts'));

    }

    public function adminIndex(){
        $user = Auth::user();
        $podcasts = Podcast::withCount('episodes')->orderByDesc('created_at')->paginate(5);
        return view('pages.admin.podcasts', compact('podcasts', 'user'));

    }

    public function create(){

        return view('pages.admin.create-podcast', [

         'user'  => Auth::user()
        ]);

    }

    public function store(Request $request, User $user){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|file|mimes:png,jpg,jpeg'


        ]);

      //  dd($request->all());

        if($request->hasFile('image')){
            $fileNameExtension = $request->file('image')->getClientOriginalName();
            $fileExtension = $request->file('image')->getClientOriginalExtension();
            $fileName = pathinfo($fileNameExtension, PATHINFO_FILENAME);
            $filename = $fileName.'_'.time().'.'.$fileExtension;
         $request->file('image')->move(public_path('podcasts'), $filename);
        }

        $data= $request->all();
        $data['cover_image'] = $filename;
      $id = Auth::user()->id;

      $user = User::findOrFail($id);

      $user->podcasts()->create($data);
        return back()->with(['success'=>'Podcast has been created.']);

    }

    public function show(Podcast $podcast){
        $podcast = Podcast::with(['episodes'])->orderBy('created_at', 'desc')->get();
        //$episode = Episode::where('id', $podcast->id);
       // return response()->json(['podcast'=>$podcast]);

        return view('podcasts.show', compact('podcast'));

    }

    public function edit(Podcast $podcast, User $user){
        $user = Auth::user();
       // dd($user);

        return view('pages.admin.edit-podcast', compact('podcast', 'user'));

    }

    public function update(Request $request, Podcast $podcast){

       // dd($request->all());

    if ($request->hasFile('image')) {
        $fileNameExtension = $request->file('image')->getClientOriginalName();
            $fileExtension = $request->file('image')->getClientOriginalExtension();
            $fileName = pathinfo($fileNameExtension, PATHINFO_FILENAME);
            $filename = $fileName.'_'.time().'.'.$fileExtension;
            $request->file('image')->move(public_path('podcasts'), $filename);
        $podcast->cover_image = $filename;
    }

   $podcast->title = $request->input('title');
   $podcast->description = $request->input('description');
  // $podcast['cover_image'] = $filename;

    $podcast->update();

    return redirect()->route('podcasts.admin')->with('success', 'Podcast updated successfully.');
}

    public function destroy(Podcast $podcast){
        $podcast->delete();
        return redirect()->route('podcasts.admin')->with('message', 'Podcast deleted successfully.');
    }

    public function checkPodcastSlug(Request $request)
    {
        $slug = SlugService::createSlug(Podcast::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
