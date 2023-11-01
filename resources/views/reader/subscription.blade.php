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

                  @if (!empty($subs))

                  <div class="row">
                    <div class="col-lg-6">
                      <div class="card-style mb-30">
                        <h6 class="mb-10">Striped Table</h6>
                        <p class="text-sm mb-20">
                          For Striped Table—light padding and only horizontal
                          dividers.
                        </p>
                        <div class="table-wrapper table-responsive">
                          <table class="table striped-table">
                            <thead>
                              <tr>
                                <th></th>
                                <th>
                                  <h6>Account No</h6>
                                </th>
                                <th>
                                  <h6>Balance</h6>
                                </th>
                                <th>
                                  <h6>Action</h6>
                                </th>
                              </tr>
                              <!-- end table row-->
                            </thead>
                            <tbody>
                              <tr>
                                <td>
                                  <div class="check-input-primary">
                                    <input class="form-check-input" type="checkbox" id="checkbox-1" />
                                  </div>
                                </td>
                                <td>
                                  <p>AC336 508 2157</p>
                                </td>
                                <td>
                                  <p>$523</p>
                                </td>
                                <td>
                                  <div class="action">
                                    <button class="text-danger">
                                      <i class="lni lni-trash-can"></i>
                                    </button>
                                  </div>
                                </td>
                              </tr>
                              <!-- end table row -->
                              <tr>
                                <td>
                                  <div class="check-input-primary">
                                    <input class="form-check-input" type="checkbox" id="checkbox-2" />
                                  </div>
                                </td>
                                <td>
                                  <p>AC336 756 0987</p>
                                </td>
                                <td>
                                  <p>$123</p>
                                </td>
                                <td>
                                  <div class="action">
                                    <button class="text-danger">
                                      <i class="lni lni-trash-can"></i>
                                    </button>
                                  </div>
                                </td>
                              </tr>
                              <!-- end table row -->
                              <tr>
                                <td>
                                  <div class="check-input-primary">
                                    <input class="form-check-input" type="checkbox" id="checkbox-3" />
                                  </div>
                                </td>
                                <td>
                                  <p>AC336 098 8765</p>
                                </td>
                                <td>
                                  <p>$223</p>
                                </td>
                                <td>
                                  <div class="action">
                                    <button class="text-danger">
                                      <i class="lni lni-trash-can"></i>
                                    </button>
                                  </div>
                                </td>
                              </tr>
                              <!-- end table row -->
                              <tr>
                                <td>
                                  <div class="check-input-primary">
                                    <input class="form-check-input" type="checkbox" id="checkbox-4" />
                                  </div>
                                </td>
                                <td>
                                  <p>AC336 897 3242</p>
                                </td>
                                <td>
                                  <p>$323</p>
                                </td>
                                <td>
                                  <div class="action">
                                    <button class="text-danger">
                                      <i class="lni lni-trash-can"></i>
                                    </button>
                                  </div>
                                </td>
                              </tr>
                              <!-- end table row -->
                              <tr>
                                <td>
                                  <div class="check-input-primary">
                                    <input class="form-check-input" type="checkbox" id="checkbox-5" />
                                  </div>
                                </td>
                                <td>
                                  <p>AC336 654 0987</p>
                                </td>
                                <td>
                                  <p>$423</p>
                                </td>
                                <td>
                                  <div class="action">
                                    <button class="text-danger">
                                      <i class="lni lni-trash-can"></i>
                                    </button>
                                  </div>
                                </td>
                              </tr>
                              <!-- end table row -->
                              <tr>
                                <td>
                                  <div class="check-input-primary">
                                    <input class="form-check-input" type="checkbox" id="checkbox-6" />
                                  </div>
                                </td>
                                <td>
                                  <p>AC336 234 9804</p>
                                </td>
                                <td>
                                  <p>$523</p>
                                </td>
                                <td>
                                  <div class="action">
                                    <button class="text-danger">
                                      <i class="lni lni-trash-can"></i>
                                    </button>
                                  </div>
                                </td>
                              </tr>
                              <!-- end table row -->
                            </tbody>
                          </table>
                          <!-- end table -->
                        </div>
                      </div>
                      <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-lg-6">
                      <div class="card-style mb-30">
                        <h6 class="mb-10">Table head options</h6>
                        <p class="text-sm mb-20">
                          Use one of two modifier classes to make thead appear light
                          or dark gray.
                        </p>
                        <div class="table-wrapper table-responsive">
                          <table class="table striped-table">
                            <thead>
                              <tr>
                                <th></th>
                                <th>
                                  <h6>First Name</h6>
                                </th>
                                <th>
                                  <h6>Last Name</h6>
                                </th>
                                <th>
                                  <h6>Username</h6>
                                </th>
                              </tr>
                              <!-- end table row-->
                            </thead>
                            <tbody>
                              <tr>
                                <td>
                                  <h6 class="text-sm">#1</h6>
                                </td>
                                <td>
                                  <p>Albert</p>
                                </td>
                                <td>
                                  <p>Miles</p>
                                </td>
                                <td>
                                  <p>@albert_miles</p>
                                </td>
                              </tr>
                              <!-- end table row -->
                              <tr>
                                <td>
                                  <h6 class="text-sm">#2</h6>
                                </td>
                                <td>
                                  <p>John</p>
                                </td>
                                <td>
                                  <p>Doe</p>
                                </td>
                                <td>
                                  <p>@john_doe</p>
                                </td>
                              </tr>
                              <!-- end table row -->
                              <tr>
                                <td>
                                  <h6 class="text-sm">#3</h6>
                                </td>
                                <td>
                                  <p>David</p>
                                </td>
                                <td>
                                  <p>Smith</p>
                                </td>
                                <td>
                                  <p>@davidsmith</p>
                                </td>
                              </tr>
                              <!-- end table row -->
                              <tr>
                                <td>
                                  <h6 class="text-sm">#4</h6>
                                </td>
                                <td>
                                  <p>Jameel</p>
                                </td>
                                <td>
                                  <p>Kareem</p>
                                </td>
                                <td>
                                  <p>@jkreem</p>
                                </td>
                              </tr>
                              <!-- end table row -->
                              <tr>
                                <td>
                                  <h6 class="text-sm">#5</h6>
                                </td>
                                <td>
                                  <p>Anna</p>
                                </td>
                                <td>
                                  <p>Miles</p>
                                </td>
                                <td>
                                  <p>@anna_miles</p>
                                </td>
                              </tr>
                              <!-- end table row -->
                              <tr>
                                <td>
                                  <h6 class="text-sm">#6</h6>
                                </td>
                                <td>
                                  <p>Hafiz</p>
                                </td>
                                <td>
                                  <p>Miles</p>
                                </td>
                                <td>
                                  <p>@hafiz_miles</p>
                                </td>
                              </tr>
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
                  @else

                  <p>You don't have an active subscription.</p> <a href="{{route('news.subscribe')}}">Buy a subscription plan to subscribe</a>




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
        </div>
        <!-- end container -->
      </section>
      <!-- ========== section end ========== -->
      @endsection
