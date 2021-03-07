@extends('layouts.app')
@section('content')

<section class="single-product">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mr-5">
                   <div class="card card-body">
                        <img class="d-block w-100" src="{{ url($product->product_image) }}" alt="Product Image">
                    </div>      
                </div>
                <div class="col-md-6">
                   <h5>Product Name: {{ $product->product_name }}</h5> 
                   <p><b>Product Code: </b>{{ $product->product_code }}</p>
                   
                   @if($product->discount_price == NULL)
                   <p><b>Product Price: </b>{{ $product->selling_price }}</p>
                   @else
                   <p><b>Discount Price: </b>{{ $product->discount_price }}</p>
                   @endif
                   
                   <p><b>Category:</b> {{ $product->category_name }}</p>
                   <p><b>Subcategory:</b> {{$product->subcategory_name  }}</p>
                   <p><b>Brand:</b> {{$product->brand_name  }}</p>
                   <p><b>Color:</b> {{$product->product_color  }}</p>
                   <a href="{{ url('cart/product/add/'.$product->id) }}" type="button" class="btn btn-primary mb-2">Add to Cart</a>
                </div>      
            </div>
        </div>
    </section>

<!----------Product-description-------------->
    <section class="jumbotron">
        <div class="container">
            <h6 class="text-warning">Product Description</h6>
            <p>{!! $product->product_details !!}</p>
        </div>  
    </section>

    {{-- <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div id="">
                    <div class="card">
                      <div class="card-boy">
                        <img class="d-block w-100" src="{{ asset($product->product_image) }}" alt="First slide">
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
               <p class="new-arrival text-center">New</p>
               <h2>{{ $product->product_name }}</h2> 
               <p>{{ $product->product_code }}</p>
               @if($product->discount_price == NULL)
               <p class="price">USD${{ $product->selling_price }}</p>
               @else 
               <p class="price">USD${{ $product->discount_price}}</p>
               @endif
               <b>Availability:</b> In Stock</>
               <p><b>Condition:</b> New</p>
               <p><b>Brand:</b>{{ $product->brand_name }}</p>
               {{-- <label>Quantity</label>
               <input type="text" value="1"> --}}
               {{-- <a href="{{ url('cart/product/add/'.$product->id) }}" type="button" class="btn btn-primary">Add to Cart</a>
            </div>
        </div>
    </div>
</section>

<!----------Product-description-------------->
<section class="product-description">
    <div class="container">
        <h6>Product Description</h6>
        <p>{!! $product->product_details !!}</p>
        <hr>
    </div>  
</section> --}} 
@endsection

