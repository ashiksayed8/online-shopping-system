@extends('layouts.app')
@section('content')



<section class="featured-categories mt-5">
    <div class="container">
        <div class="title-box">
            <h5>Product</h5>
        </div>
        <div class="row">
            @foreach($products as $row)
            <div class="col-md-3">
                <div class="product-top">
                    <img src="{{ asset($row->product_image) }}" style="heigh:140px; width:180px;" alt="Product">
                    @if ($row->discount_price == NULL)
                    <div><span class="badge badge-primary" style="z-index: 2;">New</span></div>
                    @else 
                    @php
                     $discount_amount =  $row->selling_price - $row->discount_price;
                     $discount = ($discount_amount/ $row->selling_price)*100;
                    @endphp
                    <div><span class="badge badge-danger dispaly-2" style="z-index: 2;">{{ intVal($discount )}}%</span></div>
                    @endif
                   
                    <div class="overlay-right">
                        <a href={{ url('product/details/'.$row->id.'/'.$row->product_name) }} type="button" class="btn btn-secondary"title="Quick Shop">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a type="button" class="btn btn-secondary addwishlist" data-id="{{ $row->id }}" title="Add to Wishlist">
                            <i class="far fa-heart"></i>
                        </a>
                        <a href="{{ url('add/cart/'.$row->id) }}" type="button" class="btn btn-secondary addcart" data-id="{{ $row->id}}" title="Add to Card">
                            <i class="fa fa-shopping-cart"></i>
                        </a>
                    </div>
                </div>
                <div class="product-bottom">
                     <h3>{{ $row->product_name }}</h3>
                     @if($row->discount_price == NULL)
                     <h2 class="text-danger ">{{ $row->selling_price }}</h2> 
                     @else 
                     <h2><span class="text-danger">{{ $row->discount_price }}</span> <del>{{ $row->selling_price }}</del></h2>
                     @endif  
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection

