@extends('layouts.admin.app')

@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <!-- Form controls -->
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Create Subscription Plan</h5>
                    <div class="card-body">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>

                                @endforeach
                            </ul>
                        </div>

                    @endif
                        <form action="{{route('podcast.store')}}" method="POST" class="mb-5" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group mb-3">
                                <label for="name" class="form-label">Plan Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" id="name" required placeholder="Plan Title" autofocus
                                    value="{{ $plan->name }}">
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="amount" class="form-label">Amount</label>
                                <input type="text" class="form-control @error('amount') is-invalid @enderror"
                                    name="amount" id="amount" required value="{{ $plan->amount }}" placeholder=" eg. 20000">
                                @error('amount')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="interval" class="form-label">Duration</label>
                                <select name="interval" id="interval" class="form-control @error('interval') is-invalid @enderror" required>
                                    <option value="" selected> Plan Interval</option>
                                    <option value="monthly">Monthly</option>
                                    <option value="quarterly">Quarterly</option>
                                    <option value="annually">Annually</option>
                                </select>
                                @error('interval')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="body" class="form-label">Description</label>
                                <textarea name="description" id="body" class="form-control" rows="5" cols="40">{{$plan->description}}</textarea>
                                @error('description')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-dark">Update Plan</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- / Content -->

        @include('includes.admin.footer')

        <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper -->
    </div>
    <!-- / Layout page -->
    </div>


    </div>
    <!-- / Layout wrapper -->



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>
@endsection
