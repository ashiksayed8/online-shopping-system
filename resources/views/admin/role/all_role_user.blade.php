@extends('layouts.admin')
<?php 
$i=1;
?>
@section('content')
          <div style="margin-top:50px;"></div>  
          <div class="card bg-dark text-white">
            <div class="card-header bg-secondary text-white">
              <h1>Admin</h1>
            </div>
          <div class="card-body d-block">
                                
                <table class="table table-bordered table-striped table-hover" id="mytable" >
                    <thead>
                    <tr>
                        <th>SL NO</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Access</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>SL NO</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Access</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($user as $row)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{$row->name}}</td>
                        <td>{{ $row->email }}</td>
                        <th>
                            @if($row->dashboard == 1)
                            <p class="badge badge-danger">Dashboard</p>
                            @else 
                            @endif
                            @if($row->category == 1)
                            <p class="badge badge-success">Category</p>
                            @else 
                            @endif
                            @if($row->brand == 1)
                            <p class="badge badge-primary">Brand</p>
                            @else 
                            @endif
                            @if($row->coupon == 1)
                            <p class="badge badge-warning">Coupon</p>
                            @else 
                            @endif
                            @if($row->product == 1)
                            <p class="badge badge-danger">Product</p>
                            @else 
                            @endif
                            @if($row->orders == 1)
                            <p class="badge badge-success">Order</p>
                            @else 
                            @endif
                            @if($row->report == 1)
                            <p class="badge badge-primary">Report</p>
                            @else 
                            @endif
                            @if($row->stock == 1)
                            <p class="badge badge-danger">Stock</p>
                            @else 
                            @endif
                            @if($row->seo == 1)
                            <p class="badge badge-warning">SEO</p>
                            @else 
                            @endif
                            @if($row->setting == 1)
                            <p class="badge badge-warning">Setting</p>
                            @else 
                            @endif
                        </th>
                        <td>
                        <a class="btn btn-warning" title="Edit" href="{{URL::to('edit/role/'.$row->id)}}"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-danger" id="delete" title="Delete" href="{{URL::to('delete/role/'.$row->id)}}"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>                      
          </div>
        </div>


@endsection






