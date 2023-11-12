@extends('layouts.admin.app')

@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Settings /</span> General Settings</h4>

            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-pills flex-column flex-md-row mb-3">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('general-settings.index') }}"><i
                                    class="bx bx-user me-1"></i>
                                General Settings</a>
                        </li>
                    </ul>
                    @if ($user->user_types == 'admin'|| $user->user_types == 'Admin')
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <form method="POST" action="{{ route('general-settings.update') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PATCH')

                                        <div class="form-group mb-3 col-md-8">
                                            <label for="site_title" class="form-label">Header Advert</label>
                                            <input type="file" name="headerAd" id="" class="form-control">
                                            <br>
                                            <img src=" {{asset('adverts/'.$setting->headerAd)}} " class="img-fluid" alt="Ad-image">
                                        </div>

                                        <div class="mt-2">
                                            <button type="submit" class="btn btn-dark me-2 mb-2">Save changes</button>

                                        </div>

                                    </form>


                                </div>


                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <form method="POST" action="{{ route('general-settings.update') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PATCH')

                                        <div class="form-group mb-3 col-md-8">
                                            <label for="site_title" class="form-label">Homepage Advert</label>
                                            <input type="file" name="homeAd" id="" class="form-control">
                                            <br>
                                            <img src="{{asset('adverts/'.$setting->homeAd)}}" class="img-fluid" alt="Ad-image">
                                        </div>

                                        <div class="mt-2">
                                            <button type="submit" class="btn btn-dark me-2 mb-2">Save changes</button>

                                        </div>

                                    </form>


                                </div>


                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <form method="POST" action="{{ route('general-settings.update') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PATCH')

                                        <div class="form-group mb-3 col-md-8">
                                            <label for="site_title" class="form-label">Footer Advert</label>
                                            <input type="file" name="footerAd" id="" class="form-control">
                                            <br>
                                            <img src="{{asset('adverts/'.$setting->footerAd)}}" class="img-fluid" alt="Ad-image">
                                        </div>

                                        <div class="mt-2">
                                            <button type="submit" class="btn btn-dark me-2 mb-2">Save changes</button>

                                        </div>

                                    </form>


                                </div>


                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <form method="POST" action="{{ route('general-settings.update') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PATCH')

                                        <div class="form-group mb-3 col-md-8">
                                            <label for="site_title" class="form-label">Single Page Advert</label>
                                            <input type="file" name="singleAd" id="" class="form-control">
                                            <br>
                                            <img src="{{asset('adverts/'.$setting->singleAd)}}" class="img-fluid" alt="Ad-image">
                                        </div>

                                        <div class="mt-2">
                                            <button type="submit" class="btn btn-dark me-2 mb-2">Save changes</button>

                                        </div>

                                    </form>


                                </div>


                            </div>
                        </div>

                    </div>
                            </div>
                        </div>
                    @endif
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

    <!-- / Layout wrapper -->
@endsection
