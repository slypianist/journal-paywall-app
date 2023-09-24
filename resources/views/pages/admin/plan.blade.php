@extends('layouts.admin.app')

@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <!-- Bootstrap Table with Header - Light -->
            <div class="card">
                <h5 class="card-header">All Plans</h5>
                <ul class="flex-column flex-md-row mb-3">
                        <li class="" style="list-style: none">
                      <a href="{{ route('plan.create') }}"><button class="btn btn-danger">Add Plan</button></a>
                        </li>
                    </ul>

                    <div class="container">
                        <div class="row align-items-start">
                            <div class="col">
                                <div class="card" style="width: 18rem;">

                                    <div class="card-body">
                                      <h5 class="card-title">Card title</h5>
                                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <div class="row">
                                            <div class="col-4">
                                                <a href="#" class="btn btn-dark">Edit</a>
                                            </div>
                                            <div class="col-8">
                                                <a href="#" class="btn btn-danger float-end">Delete</a>
                                            </div>

                                      </div>
                                    </div>
                                  </div>
                            </div>

                            <div class="col">
                                <div class="card" style="width: 18rem;">

                                    <div class="card-body">
                                      <h5 class="card-title">Card title</h5>
                                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                                      <div class="row">
                                        <div class="col-4">
                                            <a href="#" class="btn btn-dark">Edit</a>
                                        </div>
                                        <div class="col-8">
                                            <a href="#" class="btn btn-danger float-end">Delete</a>
                                        </div>

                                      </div>

                                    </div>
                                  </div>
                            </div>

                            <div class="col">
                                <div class="card" style="width: 18rem;">

                                    <div class="card-body">
                                      <h5 class="card-title">Card title</h5>
                                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                      <div class="row">
                                        <div class="col-4">
                                            <a href="#" class="btn btn-dark">Edit</a>
                                        </div>
                                        <div class="col-8">
                                            <a href="#" class="btn btn-danger float-end">Delete</a>
                                        </div>

                                      </div>

                                    </div>
                                  </div>
                            </div>
                        </div>
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
