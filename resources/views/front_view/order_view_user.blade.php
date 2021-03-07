@extends('layouts.app')

@section('content')
<div class="container">
    
 <div class="card pd-20 pd-sm-40">
        
    <p class="mg-b-20 mg-sm-b-30 card-header">Order Details</p>
   
   <div class="row mt-5">
       <div class="col-md-6">
           <div class="card">
               <div class="card-header"><strong>Customer</strong> Details</div>

               <div class="card-body">
               <table class="table">
                    <tr>
                        <th>Name: </th>
                        <th>{{ $order->name }}</th>
                    </tr>
                    <tr>
                        <th>Phone: </th>
                        <th>{{ $order->email }}</th>
                    </tr>
                    <tr>
                        <th>Payment: </th>
                        <th>{{ $order->payment_type }}</th>
                    </tr>
                    <tr>
                        <th>Payment ID: </th>
                        <th>{{ $order->payment_id }}</th>
                    </tr>
                    <tr>
                        <th>Total :</th>
                        <th>{{ $order->total }} $</th>
                    </tr>
                     <tr>
                        <th>Month : </th>
                        <th>
                              {{ $order->month }}
                        </th>
                    </tr>
                     <tr>
                        <th>Date: </th>
                        <th>{{ $order->date }}</th>
                    </tr>
               </table>  

               </div>
           </div>
       </div>
       <div class="col-md-6">
           <div class="card">
               <div class="card-header"><strong>Shipping</strong> Details</div>

               <div class="card-body">
               <table class="table">
                    <tr>
                        <th>Name: </th>
                        <th>{{ $shipping->ship_name }}</th>
                    </tr>
                    <tr>
                        <th>Phone: </th>
                        <th>{{ $shipping->ship_phone }}</th>
                    </tr>
                    <tr>
                        <th>Email: </th>
                        <th>{{ $shipping->ship_email }}</th>
                    </tr>
                    <tr>
                        <th>Address: </th>
                        <th>{{ $shipping->ship_address }}</th>
                    </tr>
                    <tr>
                        <th>City :</th>
                        <th>{{ $shipping->ship_city }}</th>
                    </tr>
                     <tr>
                        <th>Status : </th>
                        <th>
                                @if($order->status == 0)
                                 <p class="badge badge-warning">Pending</p>
                                @elseif($order->status == 1)
                                <p class="badge badge-info">Payment Accept</p>
                                @elseif($order->status == 2) 
                                 <p class="badge badge-info">Progress </p>
                                 @elseif($order->status == 3)  
                                 <p class="badge badge-success">Delevered </p>
                                 @else
                                 <p class="badge badge-danger">Cancel </p>
                                 @endif
                        </th>
                    </tr>
                     
               </table>  

               </div>
           </div>
       </div>
   </div>
    
   <div class="row mt-5 ml-5 mb-5">
       <div class="card pd-20 pd-sm-40 col-lg-10">
         <h6 class="card-header">Product Details </h6>
         <br>
         <div class="table-wrapper">
           <table  class="table display responsive nowrap">
             <thead>
               <tr>
                 <th class="wd-15p">Product ID</th>
                 <th class="wd-15p">Product Name</th>
                 <th class="wd-15p">Image</th>
                 <th class="wd-15p">Color </th>
                 <th class="wd-15p">Size</th>
                 <th class="wd-15p">Quantity</th>
                 <th class="wd-15p">Unit Price</th>
                 <th class="wd-20p">Total</th>
               </tr>
             </thead>
             <tbody>
               @foreach($details as $row)
               <tr>
                 <td>{{ $row->product_code }}</td>
                 <td>{{ $row->product_name }}</td>
                 <td><img src="{{ URL::to($row->product_image) }}" height="50px;" width="50px;"></td>
                 <td>{{ $row->color }}</td>
                 <td>{{ $row->size }}</td>
                 <td>{{ $row->quantity }}</td>
                 <td>
                     {{ $row->singleprice }} $       
                 </td>
                 <td>
                 {{ $row->totalprice }} $     
                 </td> 
               </tr>
               @endforeach
             </tbody>
           </table>
         </div>
       </div>
   </div>     
</div>
</div>

@endsection



