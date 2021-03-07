@extends('layouts.admin')

@section('content')
@php 
$date=date('d-m-y');
$month=date('F');
$year=date('Y');
$today=DB::table('orders')->where('date',$date)->sum('total');
$delivery=DB::table('orders')->where('date',$date)->where('status',3)->sum('total');
$month=DB::table('orders')->where('month',$month)->sum('total');
$year=DB::table('orders')->where('year',$year)->sum('total');
$category=DB::table('categories')->get();
$product=DB::table('products')->get();
$brand=DB::table('brands')->get();
$user=DB::table('users')->get();
@endphp
          
        <h2 class="dash-title mt-5">Overview</h2>
        <div class="row mb-3">
            <div class="col-xl-3 col-sm-6 py-2">
                <div class="card bg-success text-white h-100">
                    <h6 class="text-uppercase m-3">TODAY'S ORDER:</h6>
                    <div class="card-body bg-success">
                        <h6 class="display-4">${{ $today }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 py-2">
                <div class="card bg-danger text-white h-100">
                    <h6 class="text-uppercase m-3">TODAY'S DELIVERED:</h6>
                    <div class="card-body bg-danger">
                        <h6 class="display-4">${{ $delivery }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 py-2">
                <div class="card bg-info text-white h-100">
                    <h6 class="text-uppercase m-3">THIS MONTH:</h6>
                    <div class="card-body bg-info">
                        <h6 class="display-4">${{ $month }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 py-2">
                <div class="card bg-warning text-white h-100">
                    <h6 class="text-uppercase m-3">THIS YEAR:</h6>
                    <div class="card-body bg-warning">
                        <h6 class="display-4">${{ $year }}</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-xl-3 col-sm-6 py-2">
                <div class="card bg-success text-white h-100">
                    <h6 class="text-uppercase m-3">TOTAL category:</h6>
                    <div class="card-body bg-success">
                        <h6 class="display-4">{{ count($category) }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 py-2">
                <div class="card bg-danger text-white h-100">
                    <h6 class="text-uppercase m-3">PRODUCT:</h6>
                    <div class="card-body bg-danger">
                        <h6 class="display-4">{{ count($product) }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 py-2">
                <div class="card bg-info text-white h-100">
                    <h6 class="text-uppercase m-3">BRAND:</h6>
                    <div class="card-body bg-info">
                        <h6 class="display-4">{{ count($brand) }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 py-2">
                <div class="card bg-warning text-white h-100">
                    <h6 class="text-uppercase m-3">USER:</h6>
                    <div class="card-body bg-warning">
                        <h6 class="display-4">{{ count($user) }}</h6>
                    </div>
                </div>
            </div>
        </div>
@endsection
