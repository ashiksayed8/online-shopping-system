@extends('layouts.admin')

@section('content')
<div style="margin-top:50px;"></div>
 <div class="card">
    <div class="card-header">
        <h1 class="text-primary">Update Setting</h1>
    </div>
    <div class="card-body d-block">
        <form action="{{url('update/setting/'.$setting->id)}}" method="post" enctype="multipart/form-data">

            @csrf

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="company_name" class="form-control-label">Company Name: <span class="text-danger">*</span></label>
                    <input type="text" id="company_name" class="form-control" name="company_name" value="{{ $setting->company_name }}">
                </div>
                <div class="form-group col-md-4">
                    <label for="phone_one" class="form-control-label">Phone one: <span class="text-danger">*</span></label>
                    <input type="text" id="phone_one" class="form-control" name="phone_one" value="{{ $setting->phone_one }}">
                </div>
                <div class="form-group col-md-4">
                    <label for="phone_two" class="form-control-label">Phone two: <span class="text-danger">*</span></label>
                    <input type="text" id="phone_two" class="form-control" name="phone_two" value="{{$setting->phone_two }}">
                </div>
            </div>
            <div class="form-row mt-md-3">
                <div class="form-group col-md-3">
                    <label for="email" class="form-control-label">Email: <span class="text-danger">*</span></label>
                    <input type="text" id="email" class="form-control" name="email" value="{{ $setting->email }}">
                </div>
                <div class="form-group col-md-3">
                    <label for="company_address" class="form-control-label">Company Address: <span class="text-danger">*</span></label>
                    <input type="text" id="company_address" class="form-control" name="company_address" value="{{ $setting->company_address }}">
                </div>
                <div class="form-group col-md-3">
                    <label for="facebook" class="form-control-label">Facebook Link: <span class="text-danger">*</span></label>
                    <input type="text" id="facebook" class="form-control" name="facebook" value="{{ $setting->facebook }}">
                </div>
                <div class="form-group col-md-3">
                    <label for="youtube" class="form-control-label">Youtube Link: <span class="text-danger">*</span></label>
                    <input type="text" id="youtube" class="form-control" name="youtube" value="{{ $setting->youtube }}">
                </div>
                <div class="form-group col-md-3">
                    <label for="instagram" class="form-control-label">Instragram Link: <span class="text-danger">*</span></label>
                    <input type="text" id="instagram" class="form-control" name="instagram" value="{{ $setting->instagram }}">
                </div>
                <div class="form-group col-md-3">
                    <label for="twitter" class="form-control-label">Twitter Link: <span class="text-danger">*</span></label>
                    <input type="text" id="twitter" class="form-control" name="twitter" value="{{ $setting->twitter }}">
                </div>
                <div class="form-group col-md-3">
                    <label for="vat" class="form-control-label">Vat: <span class="text-danger">*</span></label>
                    <input type="text" id="vat" class="form-control" name="vat" value="{{ $setting->vat }}">
                </div>
                <div class="form-group col-md-3">
                    <label for="shipping_charge" class="form-control-label">Shipping Charge: <span class="text-danger">*</span></label>
                    <input type="text" id="shipping_charge" class="form-control" name="shipping_charge" value="{{ $setting->shipping_charge }}">
                </div>
            </div>
            <button  type="submit" class="btn btn-info mt-3 mb-5 btn-block btn-lg">Submit</button>
        </form> 
    </div>
  </div>

  @endsection