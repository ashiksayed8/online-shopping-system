@extends('layouts.admin')

@section('content')
<div style="margin-top:50px;"></div>
 <div class="card">
    <div class="card-header">
        <h1 class="text-primary">Create  User</h1>
    </div>
    <div class="card-body d-block">
        <form action="{{route('admin.create')}}" method="post">

            @csrf

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="user_name" class="form-control-label">User Name: <span class="text-danger">*</span></label>
                    <input type="text" id="user_name" class="form-control" name="name">
                </div>
                <div class="form-group col-md-4">
                    <label for="user_phone" class="form-control-label">Phone: <span class="text-danger">*</span></label>
                    <input type="text" id="user_phone" class="form-control" name="phone">
                </div>
                <div class="form-group col-md-4">
                    <label for="user_email" class="form-control-label">Email: <span class="text-danger">*</span></label>
                    <input type="email" id="user_email" class="form-control" name="email">
                </div>
            </div>
            <div class="form-row mt-md-3">
                <div class="form-group col-md-4">
                    <label for="user_password" class="form-control-label">Password: <span class="text-danger">*</span></label>
                    <input type="text" id="user_password" class="form-control" name="password">
                </div>
            </div>            
            <div class="row mt-2">
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name= "dashboard" value="1" id="dashboard">
                            <label class="form-check-label"  for="dashboard">Dashboard</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name= "category" value="1" id="category">
                            <label class="form-check-label"  for="category">Category Section</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name= "brand" value="1" id="brand">
                            <label class="form-check-label"  for="brand">Brand</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name= "coupon" value="1" id="coupon">
                            <label class="form-check-label"  for="coupon">Coupons</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name= "product" value="1" id="product">
                            <label class="form-check-label"  for="product">Product Section</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="order" value="1" id="order">
                            <label class="form-check-label"  for="order">Order Section</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name= "report" value="1" id="report">
                            <label class="form-check-label"  for="report">Report Section</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="stock" value="1" id="stock">
                            <label class="form-check-label"  for="stock">Stock Section</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name= "seo" value="1" id="seo">
                            <label class="form-check-label"  for="seo">SEO Section</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name= "setting" value="1" id="setting">
                            <label class="form-check-label"  for="setting">Website Setting</label>
                        </div>
                    </div>
                </div>
            </div>

            <button  type="submit" class="btn btn-info mt-3 mb-5 btn-block btn-lg">Submit</button>
        </form> 
    </div>
  </div>
  
@endsection
