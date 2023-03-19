{{-- @extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $podcast->title }}</div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                @if ($podcast->cover_image)
                                    <img src="{{ Storage::url($podcast->cover_image) }}" alt="{{ $podcast->title }} Cover Image" class="img-fluid">
                                @else
                                    <img src="{{ asset('images/default-podcast-cover.png') }}" alt="{{ $podcast->title }} Cover Image" class="img-fluid">
                                @endif
                            </div>
                            <div class="col-md-8">
                                <p>{{ $podcast->description }}</p>
                            </div>
                        </div>

                        <hr>

                        <h5>Episodes</h5>

                        @if ($podcast->episodes->count() > 0)
                            <ul class="list-group">
                                @foreach ($podcast->episodes as $episode)
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <a href="{{ route('episodes.show', [$podcast->id, $episode->id]) }}">{{ $episode->title }}</a>
                                                @if ($episode->published_at)
                                                    <small class="text-muted">({{ $episode->published_at->format('F j, Y') }})</small>
                                                @endif
                                            </div>
                                            <div class="col-md-4 text-right">
                                                <a href="{{ route('episodes.edit', [$podcast->id, $episode->id]) }}" class="btn btn-sm btn-primary">Edit</a>
                                                <form action="{{ route('episodes.destroy', [$podcast->id, $episode->id]) }}" method="POST" class="d-inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p>No episodes found.</p>
                        @endif

                        <a href="{{ route('episodes.create', $podcast->id) }}" class="btn btn-primary mt-3">Add Episode</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
 --}}
