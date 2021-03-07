<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Hash;
class RoleController extends Controller
{
    

       /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function UserRole(){

    	$user=DB::table('admins')->where('type',2)->get();
    	return view('admin.role.all_role_user',compact('user'));
    }

    public function UserStore(){

    	return view('admin.role.create_role_form');

    }

    public function UserInsert(Request $request){

    	$data=array();
    	$data['name']=$request->name;
    	$data['phone']=$request->phone;
    	$data['email']=$request->email;
        $data['password']=Hash::make($request->password);
        $data['dashboard']=$request->dashboard;
    	$data['category']=$request->category;
        $data['brand']=$request->brand;
        $data['coupon']=$request->coupon;
        $data['product']=$request->product;
        $data['orders']=$request->order;
        $data['report']=$request->report;
        $data['stock']=$request->stock;
    	$data['seo']=$request->seo;
    	$data['setting']=$request->setting;
    	$data['type']=2;
    	DB::table('admins')->insert($data);
    	$notification=array(
             'messege'=>'child Admin Create Successfully',
             'alert-type'=>'success'
            
    	 );
    	return Redirect()->back()->with($notification);
    }

    public function UserDelete($id){
        DB::table('admins')->where('id', $id)->delete();
        $notification=array(
             'messege'=>'child Admin Create Successfully',
             'alert-type'=>'success'
            
         );
         return Redirect()->back()->with($notification);
    }
    
    public function UserEdit($id){
    	$user=DB::table('admins')->where('id',$id)->first();
    	return view('admin.role.update_role',compact('user')) ;
    }

     public function UserUpdate(Request $request) {
        
        $id=$request->id;
    	$data=array();
        $data['name']=$request->name;
    	$data['phone']=$request->phone;
    	$data['email']=$request->email;
        $data['password']=Hash::make($request->password);
        $data['dashboard']=$request->dashboard;
    	$data['category']=$request->category;
        $data['brand']=$request->brand;
        $data['coupon']=$request->coupon;
        $data['product']=$request->product;
        $data['orders']=$request->order;
        $data['report']=$request->report;
        $data['stock']=$request->stock;
    	$data['seo']=$request->seo;
    	$data['setting']=$request->setting;
    	DB::table('admins')->where('id',$id)->update($data);
    	$notification=array(
             'messege'=>'child Admin Update Successfully',
             'alert-type'=>'success'
            
    	 );
    	return Redirect()->route('admin.show')->with($notification);
    }

 

}
