<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class SettingController extends Controller
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

    public function SiteSetting(){
    	$setting=DB::table('settings')->first();
    	return view('admin.setting_section.website_setting',compact('setting'));
    }


    public function InsertInfo(Request $request,$id){
            $data=array();
            $data['phone_one']=$request->phone_one; 
            $data['phone_two']=$request->phone_two; 
            $data['email']=$request->email; 
            $data['company_name']=$request->company_name; 
            $data['company_address']=$request->company_address; 
            $data['facebook']=$request->facebook; 
            $data['youtube']=$request->youtube; 
            $data['instagram']=$request->instagram; 
            $data['twitter']=$request->twitter; 
            $data['vat']=$request->vat; 
            $data['shipping_charge']=$request->shipping_charge; 
   
            DB::table('settings')->where('id',$id)->update($data);
            $notification=array(
                     'messege'=>'Successfully update',
                     'alert-type'=>'success'
                 );
            return Redirect()->back()->with($notification);

        }
        
}
