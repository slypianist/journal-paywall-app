@extends('layouts.custom')

@section('content')
    <section>
        <div class="container mb-3 mt-3">
            {{-- Breadcrumb --}}
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="d-none d-sm-block">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}"><span>Home</span></a></li>
                    <li class="breadcrumb-item"><a
                            href="/?category={{ $post->category->slug }}"><span>{{ $post->category->name }}</span></a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ $post->slug }}"><span>{{ $post->title }}</span></a>
                    </li>
                </ol>
            </nav>
            <div class="row pb-3 pt-3 mb-3 mt-3" style="background: #ffffff;">
                <div class="col-md-12">
                    <div>
                        {{-- Tags --}}
                        @if ($post->tags->count())
                            <span class="entry-categories entry-categories-l article">
                                <span class="entry-categories-inner">
                                    <span class="entry-categories-label">Tags: </span>

                                    @php
                                        $tagArray = [];

                                        foreach ($post->tags as $tag) {
                                            $tagArray[] = $tag->name;
                                        }
                                    @endphp

                                    <a href="#" class="entry-category entry-category-item-120">
                                        <span>{{ implode(', ', $tagArray) }}</span>
                                    </a>
                                </span>
                            </span>
                        @endif

                        <h1>{{ $post->title }}
                            <br>
                        </h1>

                        <div class="d-flex mb-3">
                            @if ($post->author->haveAvatar == true)
                                <a href="/?author={{ $post->author->username }}"><img
                                        class="rounded-circle flex-shrink-0 me-3 fit-cover" width="40"
                                        src="{{ asset('storage/' . $post->author->avatar) }}"></a>
                            @else
                                <a href="/?author={{ $post->author->username }}"><img
                                        class="rounded-circle flex-shrink-0 me-3 fit-cover" width="40"
                                        src="{{ asset($post->author->default_avatar) }}"></a>
                            @endif

                            <div>
                                <p class="fw-bold mb-0 article">
                                    <a href="/?author={{ $post->author->username }}">{{ $post->author->name }}</a>
                                </p>
                                <p class="text-muted mb-0 article">
                                    <a href="{{ route('show-categories') }}">Category</a>:
                                    <a href="/?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                                </p>
                            </div>
                        </div>

                        @if ($post->image)
                            <img width="850" height="700" src="{{ asset('storage/' . $post->image) }}"
                                class="img-fluid" loading="lazy">
                        @else
                            <img width="850" height="700"
                                src="https://via.placeholder.com/1200x800" class="img-fluid"
                                loading="lazy">
                        @endif

                        <article class="my-2 fs-5">
                            {!! $post->body !!}
                        </article>

                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <a class="btn btn-primary" role="button" style="margin-right: 10px;"
                            href="{{ App\Http\Controllers\PostController::prevPost($post->id) }}">Prev Post</a>
                        <a class="btn btn-primary" role="button" style="margin-right: 10px;"
                            href="{{ App\Http\Controllers\PostController::nextPost($post->id) }}">Next Post</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
