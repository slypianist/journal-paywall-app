<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Cviebrock\EloquentSluggable\Services\SlugService;

class PodcastController extends Controller
{
    public function index(){
        $podcasts = Podcast::withCount('episodes')->orderByDesc('created_at')->get();
        return view('podcasts.index', compact('podcasts'));

    }

    public function create(){
        return view('podcasts.create', [
         'podcast' => Podcast::all(),
         'user'  => Auth::user()
        ]);

    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'cover_image' => 'nullable|file'

        ]);

        dd($request->all());

        if($request->hasFile('cover_image')){
            $fileNameExtension = $request->file('cover_image')->getClientOriginalName();
            $fileExtension = $request->file('cover_image')->getClientOriginalExtension();
            $fileName = pathinfo($fileNameExtension, PATHINFO_FILENAME);
            $filename = $fileName.'_'.now().'.'.$fileExtension;
        $cover_image =    $request->file('cover_image')->move(public_path('podcasts'), $filename);
        }

        $data= $request->all();
        $data['cover_image'] = $filename;

        $data = Podcast::create($data);
        return redirect()->route('podcast.index')->with(['message'=>'Podcast has been created.']);

    }

    public function show(Podcast $podcast){
        return view('podcasts.show', compact('podcast'));

    }

    public function edit(Podcast $podcast){
        return view('podcasts.edit', compact('podcast'));

    }

    public function update(Request $request, Podcast $podcast){

        $podcast->title = $request->input('title');
    $podcast->description = $request->input('description');

    if ($request->hasFile('cover_image')) {
        $coverImage = $request->file('cover_image')->move(public_path('podcasts'));
        $podcast->cover_image = $coverImage;
    }

    $podcast->save();

    return redirect()->route('podcasts.show', $podcast->id)->with('success', 'Podcast updated successfully.');
}

    public function destroy(Podcast $podcast){
        $podcast->delete();
        return redirect()->route('podcasts.index')->with('message', 'Podcast deleted successfully.');
    }

    public function checkPodcastSlug(Request $request)
    {
        $slug = SlugService::createSlug(Podcast::class, 'slug', $request->title);

        return response()->json(['slug' => $slug]);
    }
}
