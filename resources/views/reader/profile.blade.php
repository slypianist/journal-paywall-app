@extends('layouts.userdashboard')
@section('dashboard-page')
      <!-- ========== section start ========== -->
      <section class="section">
        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">

            <!-- end row -->
          </div>
          <!-- ========== title-wrapper end ========== -->
        </div>
        <!-- end container -->
      </section>
      <!-- ========== section end ========== -->

      <section class="section">
        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title">
                  <h2>Settings</h2>
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
                        Settings
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

            <!-- end col -->

            <div class="col-lg-10">
              <div class="card-style settings-card-2 mb-30">
                <div class="title mb-30">
                  <h6>My Profile</h6>
                </div>
                <form action="{{route('readerprofile.update')}}" method="POST">
                  <div class="row">
                    <div class="col-12">
                      <div class="input-style-1">
                        <label>First Name</label>
                        <input type="text" placeholder="First Name" name="first_name" value="{{$reader->first_name}}" />
                      </div>
                    </div>
                    <div class="col-12">
                        <div class="input-style-1">
                          <label>Last Name</label>
                          <input type="text" placeholder="Last Name" name="last_name" value="{{$reader->last_name}}" required/>
                        </div>
                      </div>
                    <div class="col-12">
                      <div class="input-style-1">
                        <label>Email</label>
                        <input type="email" placeholder="Email" name="email" value="{{$reader->email}}" required/>
                      </div>
                    </div>

                    <div class="col-12">
                      <div class="input-style-1">
                        <label>Password</label>
                        <input type="password" name="password"/>
                      </div>
                    </div>
                    <div class="col-xxl-4">
                      <div class="input-style-1">
                        <label>Confirm password</label>
                        <input type="password"  name="password_confirmation" />
                      </div>
                    </div>

                    <div class="col-12">
                      <button type="submit" class="main-btn primary-btn btn-hover">
                        Update Profile
                      </button>
                    </div>
                  </div>
                  @csrf
                  @method('PATCH')
                </form>
              </div>
              <!-- end card -->
            </div>
            <!-- end col -->
          </div>
          <!-- end row -->
        </div>
        <!-- end container -->
      </section>
      <!-- ========== section end ========== -->
  <!-- ========== section end ========== -->
      @endsection
