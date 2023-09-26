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
                            @if ($plans['data']!==NULL)

                            @foreach ($plans['data'] as $plan)
                            <div class="col">
                                <div class="card" style="width: 18rem;">

                                    <div class="card-body">
                                      <h5 class="card-title text-danger">{{$plan['name']}}</h5>
                                      <p class="card-text">{{$plan['description']}}</p>
                                      <p class="card-text"><b>₦ {{$plan['amount']}}</b></p>
                                        <div class="row">
                                            <div class="col-6 float-center">
                                                <a href="{{route('plan.edit', $plan['id'])}}" class="btn btn-dark">Edit</a>
                                            </div>


                                      </div>
                                    </div>
                                  </div>
                            </div>
                            @endforeach

                            @else

                            <p>No plan has bee created.</p>

                            @endif


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
