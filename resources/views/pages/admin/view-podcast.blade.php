@extends('layouts.admin.app')

@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <!-- Bootstrap Table with Header - Light -->
            <div class="card">
                <h5 class="card-header">{{$podcast->title}}: Episodes</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Audio file</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        @forelse ($episodes as $episode)
                            <tbody class="table-border-bottom-0">
                                <tr>
                                    <td>{{ $episode->id }}</td>
                                    <td><strong>{{ $episode->title }}</strong></td>
                                   {{--  <td>
                                        @if ($post->image)
                                            <img style="width: 290px;max-height:181px"
                                                src="{{ asset('storage/' . $post->image) }}" class="img-fluid"
                                                loading="lazy">
                                        @else
                                            <img style="width: 290px;max-height:181px"
                                                src="https://via.placeholder.com/1200x800"
                                                class="img-fluid" loading="lazy">
                                        @endif
                                    </td> --}}
                                   {{--  <td>{{$episode->description}}</td> --}}

                                    <td>
                                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top">
                                                {{-- class="avatar avatar-xs pull-up" title="Lilian Fuller"> --}}
                                                 {{-- @if ($podcast->author->haveAvatar == true)
                                                    <a href="/?author={{ $podcast->author->username }}"><img
                                                            class="rounded-circle flex-shrink-0 me-3 fit-cover"
                                                            width="40" src="{{ asset('storage/' . $podcast->author->avatar) }}"></a>
                                                 @else --}}
                                                    <a href="/?author={{ $podcast->author->username }}">
                                                             {{-- src="{{ asset($podcast->author->default_avatar) }}" --}}</a>
                                               {{--   @endif --}}

                                            </li>
                                            <audio controls>
                                                <source src=" {{asset('podcasts/episodes/'.$episode->audio_file)}}" type="audio/mpeg">
                                                Your browser does not support the audio element.
                                            </audio>
                                        </ul>
                                    </td>

                                    <td><span class="badge bg-label-success me-1">Published</span></td>
                                    <td>

                                                <a href="{{ route('episodes.edit', [$podcast->slug, $episode->slug]) }}"><button class="btn btn-success mx-2"><i
                                                        class="bx bxs-edit me-1"></i></button></a>


                                                <form action="{{ route('episodes.destroy', [$podcast->slug, $episode->slug]) }}" method="POST"
                                                    class="d-inline">
                                                    @csrf

                                                    @method('delete')
                                                    <button class="btn btn-danger">
                                                        <i class="bx bx-trash me-1"></i></button>
                                                </form>



                                    </td>
                                </tr>

                            </tbody>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center p5">
                                    No Episode in this podcast.
                                </td>
                            </tr>
                        @endforelse

                    </table>
                </div>
            </div>
            <!-- Bootstrap Table with Header - Light -->
        </div>
        <!-- / Content -->

        {{-- Pagination --}}
        <div class="container d-flex justify-content-center">
            {{ $episodes->links() }}
        </div>

        @include('includes.admin.footer')
        <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper -->
    </div>
    <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->
@endsection
