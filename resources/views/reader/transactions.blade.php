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

          @if (!$transactions->isEmpty())

          <div class="row">
            <div class="col-lg-12">
               <div class="card-style mb-30">
                   <h6 class="mb-10">Payment History</h6>
                   <p class="text-sm mb-20">
                    All your payments account transactions over the length of your credit.
                   </p>
                   <div class="table-wrapper table-responsive">
                   <table class="table">
                   <thead>
                   <tr>
                    {{-- <th>
                       <h6>#</h6>
                   </th> --}}
                   <th>
                     <h6>Reference ID</h6>
                   </th>
                   <th>
                     <h6>Amount</h6>
                   </th>
                   <th>
                     <h6>Card details</h6>
                   </th>
                   <th>
                     <h6>Card Type</h6>
                   </th>
                   <th>
                     <h6>Payment date</h6>
                     </th>

                 </tr>
                 <!-- end table row-->
               </thead>
               <tbody>

          @foreach ($transactions as $transaction )

          <tr>
            {{-- <td class="min-width">

                 <p> {{$transaction->id}}</p>

              </td> --}}
              <td class="min-width">
                <p>{{$transaction->reference}}</p>
              </td>
              <td class="min-width">
                <p>{{$transaction->amount}}/{{$transaction->currency}}</p>
              </td>
              <td class="min-width">
                <p>{{$transaction->cardDetails}}</p>
              </td>
              <td class="min-width">
                <span class="status-btn active-btn">{{$transaction->cardType}}</span>
              </td>
              <td class="min-width">
                  <p>{{Date('jS-M-Y', strtotime($transaction->created_at))}}</p>
                </td>

            </tr>

       {{--    <p>{{$transaction}}</p> --}}

          @endforeach

          @else

          <p>You don't have any transaction at the moment.</p>

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
