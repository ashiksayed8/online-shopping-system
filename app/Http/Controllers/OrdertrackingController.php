<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class OrdertrackingController extends Controller
{
    public function OrderTracking(Request $request){
        $code=$request->code;
        $track=DB::table('orders')->where('status_code',$code)->first();
        if($track)
        {
            return view('front_view.order_tracking_page',compact('track'));
        }
        else{
            $notification=array(
                'message'=>'Status Code Invaild',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }
    }
}
