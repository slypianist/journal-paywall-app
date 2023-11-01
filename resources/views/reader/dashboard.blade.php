
    <!-- ======== main-wrapper start =========== -->
    {{-- <main class="main-wrapper"> --}}
      <!-- ========== header start ========== -->
      @extends('layouts.userdashboard')
      @section('dashboard-page')
      <!-- ========== header end ========== -->

      <!-- ========== section start ========== -->
      <section class="section">
        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title">
                  <h2>Welcome back, {{$fname}}</h2>
                </div>
              </div>
              <!-- end col -->
              <div class="col-md-6">
                <div class="breadcrumb-wrapper">
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="#0">Dashboard</a>
                      </li>
                      <li class="breadcrumb-item active" aria-current="page">
                        eCommerce
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
          <div class="row">
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="icon-card mb-30">
                <div class="icon purple">
                  <i class="lni lni-cart-full"></i>
                </div>
                <div class="content">
                  <h5 class="mb-10"><b>Total Active Subscriptions</b></h5>
                  <h3 class="text-bold mb-10">{{$subTotal}}</h3>
                  <p class="text-sm text-success">

                  </p>
                </div>
              </div>
              <!-- End Icon Cart -->
            </div>
            <!-- End Col -->
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="icon-card mb-30">
                <div class="icon success">
                  <i class="lni lni-dollar"></i>
                </div>
                <div class="content">
                  <h6 class="mb-10"><b>Subscription Status</b></h6>
                  @if ($subDetail)
                  <h3 class="text-bold mb-10">{{Str::ucfirst($subDetail->status)}}</h3>
                  <p class="text-sm text-success">

                  @else
                  <h3 class="text-bold mb-10">None</h3>
                  <p class="text-sm text-success">
                  @endif
                  </p>
                </div>
              </div>
              <!-- End Icon Cart -->
            </div>
            <!-- End Col -->
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="icon-card mb-30">
                <div class="icon primary">
                  <i class="lni lni-credit-cards"></i>
                </div>
                <div class="content">
                  <h6 class="mb-10">Current Subscribed Plan</h6>
                  @if ($subDetail)
                  <h3 class="text-bold mb-10">{{$subDetail->planName}}</h3>
                  <p class="text-sm text-danger">
                    @else
                    <h3 class="text-bold mb-10"> None</h3>
                    <p class="text-sm text-danger">
                  @endif
                    {{-- <i class="lni lni-arrow-down"></i> -2.00%
                    <span class="text-gray">Expense</span> --}}
                  </p>
                </div>
              </div>
              <!-- End Icon Cart -->
            </div>
            <!-- End Col -->
            {{-- <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="icon-card mb-30">
                <div class="icon orange">
                  <i class="lni lni-user"></i>
                </div>
                <div class="content">
                  <h6 class="mb-10">New User</h6>
                  <h3 class="text-bold mb-10">34567</h3>
                  <p class="text-sm text-danger">
                    <i class="lni lni-arrow-down"></i> -25.00%
                    <span class="text-gray"> Earning</span>
                  </p>
                </div>
              </div>
              <!-- End Icon Cart -->
            </div> --}}
            <!-- End Col -->
          </div>

          </div>
          <!-- End Row -->
        </div>
        <!-- end container -->
      </section>
      @endsection
      <!-- ========== section end ========== -->
