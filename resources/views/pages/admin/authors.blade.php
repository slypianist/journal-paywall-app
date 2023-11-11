@extends('layouts.admin.app')

@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <!-- Bootstrap Table with Header - Light -->
            <div class="card">
                <h5 class="card-header">All Authors</h5>
                <ul class="flex-column flex-md-row mb-3">
                        <li class="" style="list-style: none">
                      <a href="{{ route('authors.create') }}"><button class="btn btn-dark">Add Author</button></a>
                        </li>
                    </ul>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        @forelse ($authors as $author)
                            <tbody class="table-border-bottom-0">
                                <tr>
                                    <td>{{ $author->id }}</td>
                                    <td>{{ $author->name }}</td>
                                    <td>{{$author->email}}</td>
                                    <td>{{$author->user_types}}</td>
                                    <td>{{$author->user_status}}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ route('authors.edit', $author->id) }}"><i
                                                        class="bx bx-edit-alt me-1"></i> Edit</a>

                                                <form method="POST" action="{{ route('authors.destroy', $author->id) }}"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('delete')

                                                    <button class="dropdown-item">
                                                        <i class="bx bx-trash me-1"></i> Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center p5">
                                    No Authors
                                </td>
                            </tr>
                        @endforelse

                    </table>
                </div>
            </div>
            <!-- Bootstrap Table with Header - Light -->
        </div>
        <!-- / Content -->

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
