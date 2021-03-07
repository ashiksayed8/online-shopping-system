@extends('layouts.app')
@section('content')

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div id="">
                    <div class="card">
                      <div class="card-boy">
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Payment Type:
                              <span class="badge badge-primary badge-pill">{{ $track->payment_type }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Transection ID:
                              <span class="badge badge-primary badge-pill">{{ $track->payment_id }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Balance ID:
                              <span class="badge badge-primary badge-pill">{{ $track->blnc_transection }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Sub Total:
                                <span class="badge badge-primary badge-pill">{{ $track->subtotal }}</span>
                              </li>
                              <li class="list-group-item d-flex justify-content-between align-items-center">
                                Shipping:
                                <span class="badge badge-primary badge-pill">{{ $track->shipping }}</span>
                              </li>
                              <li class="list-group-item d-flex justify-content-between align-items-center">
                                Total:
                                <span class="badge badge-primary badge-pill">{{ $track->total}}</span>
                              </li>
                              <li class="list-group-item d-flex justify-content-between align-items-center">
                                Month:
                                <span class="badge badge-primary badge-pill">{{ $track->month}}</span>
                              </li>
                              <li class="list-group-item d-flex justify-content-between align-items-center">
                                Date:
                                <span class="badge badge-primary badge-pill">{{ $track->date}}</span>
                              </li>
                              <li class="list-group-item d-flex justify-content-between align-items-center">
                                Order Status:
                                @if($track->status == 0)
                                    <span class="badge badge-warning badge-pill">Pending</span>
                                @elseif($track->status == 1) 
                                     <span class="badge badge-primary badge-pill">Payment accept</span>
                                @elseif($track->status == 2) 
                                     <span class="badge badge-primary badge-pill">Delivery progress</span>
                                @elseif($track->status ==3) 
                                     <span class="badge badge-success badge-pill">Delivery Done</span>
                                @else 
                                    <span class="badge badge-danger badge-pill">Cancel</span>
                                @endif
                              </li>
                          </ul>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
               
             
            </div>
        </div>
    </div>
</section>

@endsection
