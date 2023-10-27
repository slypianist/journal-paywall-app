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
            'audio_file' => 'required|mimes:mp3,mp4,wav',
            'published_at' => 'nullable|date',
        ]);

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



    public function edit(Podcast $podcast, Episode $episode){
        $user = Auth::user();

    $episode = $podcast->episodes()->findOrFail($episode->id);

    return view('episodes.edit', compact('podcast', 'episode', 'user'));
}



public function update(Request $request, Podcast $podcast, Episode $episode) {
    // Get the old audio path before updating
    $oldAudioPath = 'podcasts/episodes/'. $episode->audio_file;

   // dd($oldAudioPath);

    // Update the episode title
    $episode->title = $request->title;

    if ($request->hasFile('audio_file')) {
        // Upload the new audio file
        $fileNameExtension = $request->file('audio_file')->getClientOriginalName();
        $fileExtension = $request->file('audio_file')->getClientOriginalExtension();
        $fileName = pathinfo($fileNameExtension, PATHINFO_FILENAME);
        $filename = $fileName . '_' . time() . '.' . $fileExtension;
     //   dd($filename);
        $request->file('audio_file')->move(public_path('podcasts/episodes'), $filename);

        // Update the audio path for the episode
        $episode->audio_file = $filename;

        // Delete the old audio file if it exists
        if ($oldAudioPath && file_exists(public_path($oldAudioPath))) {
            unlink(public_path($oldAudioPath));
        }
    }

    $episode->update();

    return redirect()->route('podcasts.admin.view', [$podcast->slug, $episode->slug])->with('success', 'Episode updated.');
}


    public function destroy(Podcast $podcast, Episode $episode){
        $episode = $podcast->episodes()->findOrFail($episode->id);
        $episode->delete();
        return redirect()->route('podcast.show')->with('success','Episode deleted successfully');

    }


}
