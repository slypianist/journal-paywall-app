@extends('layouts.home')
@push('styles')

<link rel="stylesheet" href="{{asset('assets/news/css/podcast.css')}}">

@endpush
@section('h-content')

        <div class="podcast mt-5">
            <div class="container">
                @forelse ($episodes as $episode)
                <div class="row">
                    <div class="col-md-3">
                        <div>
                            <span class="podTitle"><b>{{$podcast->title}}</b></span>
                            <p></p>
                            <img src="{{asset('podcasts/'.$podcast->cover_image)}}" alt="singlepodcastImg" class="singlepodcastImg">
                        </div>
                    </div>

                    <div class="col-md-9 newsafricasinglepodcast">
                        <span class="podTitle">{{$episode->title}}</span>
                        <div class="wrapper mt-4">
                            <div class="icon-wrap flexItem">
                                <i class="fa-solid fa-circle-play"></i>
                            </div>
                            <div class="flexItem">
                                <p class="spaced">
                                    {!!$episode->description!!}
                                </p>
                                <p class="podcastime">
                                    <audio controls>
                                        <source src=" {{asset('podcasts/episodes/'.$episode->audio_file)}}" type="audio/mpeg">
                                        Your browser does not support the audio element.
                                    </audio>
                                </p>
                                <div>
                                    <i class="fa-thin fa-waveform"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    @empty

                    <div class="col-md-9 newsafricasinglepodcast">
                        <div class="wrapper mt-4">
                            <div class="icon-wrap flexItem">
                            </div>
                            <div class="flexItem">
                                <p class="spaced">
                                    <b>No episodes at the moment. Please check back another time.</b>

                                </p>

                                <div>
                                    <i class="fa-thin fa-waveform"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforelse

                </div>



            </div>
        </div>

        <div class="journalafricanewspodcaslist">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="articles mt-5">
                            <div class="container">
                                <h4 class="articles mb-5">Listen to more podcast</h4>
                                <div class="podacastwrap mt-4">
                                    <div class="container">
                                        <div class="wrapper">
                                            <ul class="podcasts">
                                                <li class="podlists">
                                                    <div class="podcastflex">
                                                      <div class="flexItem">
                                                        <a href="#">
                                                          <img src="https://source.unsplash.com/random/?africa" alt="podcastImg" class="podcastImg mt-3">
                                                        </a>
                                                      </div>
                                                      <div class="flexItem spaced">
                                                        <h5 class="journalafricapodcasttitle">Odd Lots</h5>
                                                        <p>
                                                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero natus iste illum reprehenderit placeat consequuntur? Error in, laborum rem quos aperiam quasi repudiandae provident debitis, architecto nam placeat laboriosam totam.
                                                        </p>
                                                        <a href="#" class="listen mb-3"><i class="fa-solid fa-podcast"></i>  Click to Listen</a>
                                                      </div>
                                                    </div>
                                                    <hr>
                                                    <hr>
                                                </li>
                                                <li class="podlists">
                                                  <div class="podcastflex">
                                                    <div class="flexItem">
                                                      <a href="#">
                                                        <img src="https://source.unsplash.com/random/?europe" alt="podcastImg" class="podcastImg mt-3">
                                                      </a>
                                                    </div>
                                                    <div class="flexItem spaced">
                                                      <h5 class="journalafricapodcasttitle">The Big Take</h5>
                                                      <p>
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero natus iste illum reprehenderit placeat consequuntur? Error in, laborum rem quos aperiam quasi repudiandae provident debitis, architecto nam placeat laboriosam totam.
                                                      </p>
                                                      <a href="#" class="listen mb-3"><i class="fa-solid fa-podcast"></i> Click to Listen</a>
                                                    </div>
                                                  </div>
                                                  <hr>
                                                  <hr>
                                              </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                      <div class="journalafricapodadvert">
                        <div class="textads">
                           <h2>Place your ads here</h2>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
