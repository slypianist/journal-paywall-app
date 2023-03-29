@extends('layouts.custom')
@section('content')

<div class="container">
    <b>This is working</b>

    <ol>
        @foreach ($posts as $post)

        <li> <p>{{$post->category->name}}</p><li>
            <ul>

              <li><p>{{$post->title}}</p></li>

            </ul>
<hr>
         @endforeach

    </ol>


</div>


@endsection
