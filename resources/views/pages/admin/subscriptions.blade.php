@extends('layouts.admin.app')
@section('content')

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Bootstrap Table with Header - Light -->
        <div class="card">
            <h5 class="card-header">SUBSCRIPTIONS</h5>

            <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>Sub Code</th>
                            <th>Email</th>
                            <th>Amount</th>
                            <th>Plan</th>
                            <th>Interval</th>
                            <th>Status</th>
                            <th>Validity</th>

                        </tr>
                    </thead>
                    @foreach ($subscriptions as $subscription)
                        <tbody class="table-border-bottom-0">
                            <tr>
                                <td>{{ $subscription->subscriptionCode }}</td>
                                <td>{{ $subscription->CustomerEmail }}</td>
                                <td>{{$subscription->amount}}</td>
                                <td>{{$subscription->planName}}</td>
                                <td>{{Str::ucfirst($subscription->interval)}}</td>
                                <td>{{Str::ucfirst($subscription->status)}}</td>
                                <td>{{Date('jS-M-Y', strtotime($subscription->ends_at))}}</td>
                                {{-- <td>
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
                                </td> --}}
                            </tr>

                        </tbody>
                    {{-- @empty
                        <tr>
                            <td colspan="6" class="text-center p5">
                                No Authors
                            </td>
                        </tr> --}}
                    @endforeach

                </table>
            </div>
        </div>
        <!-- Bootstrap Table with Header - Light -->
    </div>
    <!-- / Content -->

    {{-- Pagination --}}
    <div class="container d-flex justify-content-center">
        {{ $subscriptions->links() }}
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

