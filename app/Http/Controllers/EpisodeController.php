<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use App\Models\Podcast;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EpisodeController extends Controller
{

    public function create(Podcast $podcast){
       // dd($podcast);
       $user = Auth::user();
        return view('pages.admin.create-episode', compact('podcast', 'user'));

    }

    public function store(Podcast $podcast, Request $request){
         $request->validate([
            'title' => 'required',
            'description' => 'required',
            'audio_file' => 'required|mimes:mp3,mp4',
            'published_at' => 'nullable|date',
        ]);
//dd($request->all());
        $episode = new Episode([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'published_at' => $request->input('published_at'),
            'slug' => $request->input('slug'),

        ]);

        // Store the uploaded audio file and save the file path in the database
    if ($request->hasFile('audio_file')) {
        $fileNameExtension = $request->file('audio_file')->getClientOriginalName();
        $fileExtension = $request->file('audio_file')->getClientOriginalExtension();
        $fileName = pathinfo($fileNameExtension, PATHINFO_FILENAME);
        $filename = $fileName.'_'.time().'.'.$fileExtension;
        $request->file('audio_file')->move(public_path('podcasts/episodes'), $filename);
        $episode->audio_file = $filename;
    }

    $podcast->episodes()->save($episode);

    return redirect()->route('podcasts.admin', $podcast->slug)->with('success', 'Episode created successfully.');
}


    public function show(Podcast $podcast, Episode $episode){
        return view('episodes.show', compact('podcast', 'episode'));

    }



    public function editEpisode(Request $request, Episode $episode, Podcast $podcast){

    $episode = $podcast->episodes()->findOrFail($episode->id);

    return view('episodes.edit', compact('podcast', 'episode'));
}



    public function update(Request $request, Podcast $podcast, Episode $episode){
        $episode = $podcast->episodes;

        $episode->title = $request->title;

        if($request->hasFile('audion_file')){
            $fileNameExtension = $request->file('audion_file')->getClientOriginalName();
            $fileExtension = $request->file('audion_file')->getClientOriginalExtension();
            $fileName = pathinfo($fileNameExtension, PATHINFO_FILENAME);
            $filename = $fileName.'_'.now().'.'.$fileExtension;
            $request->file('audion_file')->move(public_path('podcasts/episodes'), $filename);
        }
        $episode->save();

        return redirect()->route('podcast.show', [$podcast->id, $episode->id]);
    }

    public function destroy(Podcast $podcast, Episode $episode){
        $episode = $podcast->episodes()->findOrFail($episode->id);
        $episode->delete();
        return redirect()->route('podcast.show')->with(['message'=>'Episode deleted successfully']);

    }


}
