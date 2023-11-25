@extends('layouts.admin.app')
@section('content')

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Bootstrap Table with Header - Light -->
        <div class="card">
            <h5 class="card-header">SUBSCRIBERS</h5>

            @if (!$subscribers->isEmpty())

            <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Amount</th>
                            <th>Plan</th>
                            <th>Interval</th>
                            <th>Status</th>
                            <th>Validity</th>
                            {{-- <th>Actions</th> --}}
                        </tr>
                    </thead>
                    @foreach ($subscribers as $subscriber)
                        <tbody class="table-border-bottom-0">
                            <tr>
                                <td>{{ $subscriber->first_name. $subscriber->last_name}}</td>
                                <td>{{ $subscriber->recipientID }}</td>
                                <td>{{$subscriber->amount}}</td>
                                <td>{{$subscriber->planName}}</td>
                                <td>{{Str::ucfirst($subscriber->interval)}}</td>
                                <td>{{Str::ucfirst($subscriber->status)}}</td>
                                <td>{{Date('jS-M-Y', strtotime($subscriber->ends_at))}}</td>

                            </tr>

                        </tbody>

                    @endforeach

                </table>
            </div>

            @else

            <p>You don't have active subscriber(s)</p>

            @endif




        </div>
        <!-- Bootstrap Table with Header - Light -->
    </div>
    <!-- / Content -->

    {{-- Pagination --}}
    <div class="container d-flex justify-content-center">
        {{ $subscribers->links() }}
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
