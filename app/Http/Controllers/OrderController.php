<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class OrderController extends Controller
{
    public function ViewOrder($id){
    	$order=DB::table('orders')->join('users','orders.user_id','users.id')->select('users.name','users.email','orders.*')->where('orders.id',$id)->first();

    	$shipping=DB::table('shipping')->where('order_id',$id)->first();

    	$details=DB::table('order_details')->join('products','order_details.product_id','products.id')->select('products.product_code','products.product_image','order_details.*')->where('order_details.order_id',$id)->get();
    	return view('front_view.order_view_user',compact('order','shipping','details'));
    }
    
}
