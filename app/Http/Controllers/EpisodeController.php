<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use App\Models\Podcast;
use Illuminate\Http\Request;

class EpisodeController extends Controller
{

    public function create(Podcast $podcast){
        return view('podcasts.episodes.create', compact('podcast'));

    }

    public function store(Podcast $podcast, Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'audio_file' => 'required|file|mimetypes:audio/mpeg,audio/mp4',
            'published_at' => 'nullable|date',
        ]);

        $episode = new Episode([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'published_at' => $request->input('published_at'),
        ]);


    $audioFile = $request->file('audio_file')->move(public_path('podcasts/episodes'));

    $episode->audio_file = $audioFile;

    $podcast->episodes()->save($episode);

    return redirect()->route('podcasts.show', $podcast->id)->with('success', 'Episode created successfully.');
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
