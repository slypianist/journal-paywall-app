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
                  <h2>Transaction Details</h2>

                  @if ($transactions==NULL)

                  <p>You don't have any transaction at the moment.</p>

                  @else

                  @foreach ($subscriptions as $subscription )

                  @endforeach



                  @endif








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
                        Transactions
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
        </div>
        <!-- end container -->
      </section>
      <!-- ========== section end ========== -->
      @endsection
