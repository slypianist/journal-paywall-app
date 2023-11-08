@extends('layouts.app') @section('content')
    <section class="py-4 py-xl-5">
        <div class="container">
            <div class="bg-dark border rounded border-0 border-dark overflow-hidden">
                <div class="row g-0">
                    <div class="col-md-6">
                        <div class="text-white p-4 p-md-5">
                            <h2 class="fw-bold text-white mb-3">Dashr</h2>
                            <p class="mb-4">Journal Africa is CMS for Paywall App made with laravel php frameworks</p>
                            <div class="my-3">
                                <a class="btn btn-primary btn-lg me-2" role="button"
                                    href="https://github.com/" target="_blank">GitHub Repo</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 order-first order-md-last" style="min-height: 250px;">
                        <img class="w-100 h-100 fit-cover"
                            src="{{ asset('screenshots/screencapture-dashr-dashboard-2022-12-02-16_21_51.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
