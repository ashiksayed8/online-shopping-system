@extends('layouts.app')
@section('content')

<!--Section: Block Content-->
<section>
  <div class="container">
    <!-- Grid row -->
  <div class="row">
    @foreach($product as $row)
    <!-- Grid column -->
    <div class="col-md-4 mb-5">

      <!-- Card -->
      <div class="">

        <div class="view zoom overlay z-depth-2 rounded" style="">
          <img class="img-fluid"
            src="{{ asset($row->product_image) }}" alt="Prouct" style="height:350px; width:400px;">
        </div>

        <div class="text-center pt-4">

          <h5>{{$row->product_name}}</h5>
          <p class="mb-2 text-muted text-uppercase small">{{$row->product_color}}</p>
          <hr>
          <h6 class="mb-3">{{$row->selling_price}}$</h6>
          <a href="{{ url('add/cart/'.$row->id) }}" type="button" class="btn btn-primary btn-sm mr-1 mb-2"><i
              class="fas fa-shopping-cart pr-2"></i>Add to cart</a>
          <a href={{ url('product/details/'.$row->id.'/'.$row->product_name) }} type="button" class="btn btn-light btn-sm mr-1 mb-2"><i
              class="fas fa-info-circle pr-2"></i>Details</a>
          <a href={{ url('product/wishlist/delete/'.$row->id) }}  class="btn btn-elegant btn-sm px-3 mb-2 material-tooltip-main"
            data-toggle="tooltip" data-placement="top" title="Remove from wishlist"><i
              class="fas fa-times"></i></a>

        </div>

      </div>
      <!-- Card -->

    </div>
    <!-- Grid column -->
    @endforeach
  </div>
  <!-- Grid row -->
  </div>
</section>
<!--Section: Block Content-->

{{-- <section>
    <div class="container">
        <div class="row d-block">
            <div class="card">
                <div class="card-header">
                    <h3>Wish list</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                          <tr>
                            <th>Product Name</th>
                            <th>Image</th>
                            <th>Color</th>
                            <th>Size</th>
                            <th>Price</th>
                            <th>Action</th> 
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($product as $row)
                          <tr>
                            <td>{{$row->product_name}}</td>
                            <td><img src="{{ asset($row->product_image) }}" height="50px;" width="50px;" ></td> 
                            <td>{{$row->product_color}}</td>
                            <td>{{$row->product_size}}</td>  
                            <td>{{$row->selling_price}}</td> 
                            <td>
                              <a class="btn btn-danger" title="Remove" href="{{ url('add/cart/'.$row->id) }}">Add cart</i></a>     
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</section> --}}

@endsection