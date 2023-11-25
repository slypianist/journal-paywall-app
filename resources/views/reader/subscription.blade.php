@extends('layouts.userdashboard')
@section('dashboard-page')
      <!-- ========== section start ========== -->
      <section class="section">
        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title">
                  <h2>Subscription Details</h2>

                </div>
              </div>
              <!-- end col -->
              <div class="col-md-6">
                <div class="breadcrumb-wrapper">
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="{{route('reader.dashboard')}}">Dashboard</a>
                      </li>
                      <li class="breadcrumb-item active" aria-current="page">
                        Subscription
                      </li>
                    </ol>
                  </nav>
                </div>
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
          <!-- ========== title-wrapper end ========== -->

             @if (!$subs->isEmpty())

         <div class="row">
             <div class="col-lg-12">
                <div class="card-style mb-30">
                    <h6 class="mb-10">Data Table</h6>
                    <p class="text-sm mb-20">
                    For basic styling—light padding and only horizontal
                    dividers—use the class table.
                    </p>
                    <div class="table-wrapper table-responsive">
                    <table class="table">
                    <thead>
                    <tr>
                    <th>
                        <h6>#</h6>
                    </th>
                    <th>
                      <h6>Plan</h6>
                    </th>
                    <th>
                      <h6>Amount</h6>
                    </th>
                    <th>
                      <h6>Interval</h6>
                    </th>
                    <th>
                      <h6>Status</h6>
                    </th>
                    <th>
                      <h6>Valid till</h6>
                      </th>
                    <th>
                      <h6>Action</h6>
                    </th>
                  </tr>
                  <!-- end table row-->
                </thead>
                <tbody>
                        @foreach ($subs as $sub)
                        <tr>
                            <td>
                                <div>
                                  {{$sub->id}}
                                </div>
                              </td>
                              <td class="min-width">
                                <p>{{$sub->planName}}</p>
                              </td>
                              <td class="min-width">
                                <p><a href="#0">{{$sub->amount}}</a></p>
                              </td>
                              <td class="min-width">
                                <p>{{$sub->interval}}</p>
                              </td>
                              <td class="min-width">
                                <span class="status-btn active-btn">{{Str::ucfirst($sub->status)}}</span>
                              </td>
                              <td class="min-width">
                                  <p>{{Date('jS-M-Y', strtotime($sub->ends_at))}}</p>
                                </td>
                              <td>
                                <div class="action">
                                  <a href="{{route('subscription.cancel', $sub->subscriptionCode)}}" class="status-btn danger-btn rounded-full btn-hover">Cancel</a>
                                </div>
                              </td>
                            </tr>

                        @endforeach

                        @else

                            <p>You don't have an active subscription.</p> <a href="{{route('news.subscribe')}}">Buy a plan to subscribe</a>


                        @endif


                      <!-- end table row -->

                    </tbody>
                  </table>
                  <!-- end table -->
                </div>
              </div>
              <!-- end card -->
            </div>
            <!-- end col -->
          </div>
        </div>
        <!-- end container -->
      </section>
      <!-- ========== section end ========== -->
      @endsection
