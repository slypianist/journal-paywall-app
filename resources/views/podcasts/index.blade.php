@extends('layouts.home')
@push('styles')

<link rel="stylesheet" href="{{asset('assets/news/css/podcast.css')}}">

@endpush
@section('h-content')
<div class="podacastwrap mt-4">
    <div class="container">
        <h4 class="podcast-title">Journal Africa podcast</h4>
        <div class="wrapper">
            <ul class="podcasts">
                @foreach ($podcasts as $podcast )

                <li class="podlists">
                    <div class="podcastflex">
                      <div class="flexItem">
                        <a href="{{route('podcasts.show', $podcast->slug)}}">
                          <img src="{{asset('podcasts/'.$podcast->cover_image)}}" alt="podcastImg" class="podcastImg mt-3">
                        </a>
                      </div>
                      <div class="flexItem spaced">
                        <h5 class="journalafricapodcasttitle">{{$podcast->title}}</h5>
                        <p>
                          {!!$podcast->description!!}
                        </p>
                        <a href="{{route('podcasts.show', $podcast->slug)}}" class="listen mb-3"><i class="fa-solid fa-podcast"></i>  Click to Listen</a>
                      </div>
                    </div>
                    <hr>
                    <hr>
                </li>

                @endforeach

            </ul>
        </div>
    </div>
</div>
@endsection
