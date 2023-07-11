@extends('layouts.admin.app')

@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <!-- Bootstrap Table with Header - Light -->
            <div class="card">
                <h5 class="card-header">All Published Podcasts</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                 <th>Episodes</th>
                                <th>Author</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        @forelse ($podcasts as $podcast)
                            <tbody class="table-border-bottom-0">
                                <tr>
                                    <td>{{ $podcast->id }}</td>
                                    <td><strong>{{ $podcast->title }}</strong></td>
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
                                    <td>{{$podcast->episodes_count}}</td>

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
                                            <strong>{{ $podcast->author->name }}</strong>
                                        </ul>
                                    </td>

                                    <td><span class="badge bg-label-success me-1">Published</span></td>
                                    <td>

                                        <a href="{{ route('podcast.edit', [$podcast->id]) }}"><button class="btn btn-success mx-2">Add Episode</button></a>


                                                <a href="{{ route('podcast.edit', [$podcast->id]) }}"><button class="btn btn-success mx-2"><i
                                                        class="bx bxs-edit me-1"></i></button></a>


                                                <form action="{{ route('podcast.destroy', $podcast->id) }}" method="POST"
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
                                    No Podcast Added.
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
            {{ $podcasts->links() }}
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
