<?php

namespace App\Http\Controllers\Admin\Product_section;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class BrandController extends Controller
{


   public function __construct()
    {
        $this->middleware('auth:admin');
    }
   
   public function brand(){

   	   $brand=DB::table('brands')->get();
   	   return view('admin.brand.add_brand',compact('brand'));
   }

   public function InsertBrand(Request $request){

   		$validatedData = $request->validate([
        'brand_name' => 'required|unique:brands|max:55',
        'brand_logo' => 'mimes:jpeg,jpg,png,gif|required|max:10000' 
        ]);

        $data=array();
        $data['brand_name']=$request->brand_name;
        $image=$request->file('brand_logo');
        if($image){

        	$image_name=date('dmy_H_s_i');
        	$ext=strtolower($image->getClientOriginalExtension());
        	$image_full_name=$image_name.'.'.$ext;
        	$upload_path='public/media/brand/';
        	$image_url=$upload_path.$image_full_name;
        	$success=$image->move($upload_path,$image_full_name);

        	$data['brand_logo']=$image_url;
        	$brand=DB::table('brands')->insert($data);
            $notification=array(
                'messege'=>'Successfully Add to Brand',
                'alert-type'=>'success'
            );
                return Redirect()->back()->with($notification);
        
        }
        // else{
        // 	$brand=DB::table('brands')->insert($data);
        // 	return Redirect()->back();
        // }

   }

   public function DeleteBrand($id){

   		$data=DB::table('brands')->where('id',$id)->first();
   		$image=$data->brand_logo;
   		unlink($image);
   		$brand=DB::table('brands')->where('id',$id)->delete();
   		$notification=array(
            'messege'=>'Brand Delete Successfully ',
            'alert-type'=>'error'
        );
        return Redirect()->back()->with($notification);
   }

   public function EditBrand($id){

   	    $brand=DB::table('brands')->where('id',$id)->first();
   	    return view('admin.brand.edit_brand',compact('brand'));
   }
   public function UpdateBrand(Request $request,$id){

        $validatedData = $request->validate([
        'brand_name' => 'required|max:55',
        'brand_logo' => 'mimes:jpeg,jpg,png,gif|max:10000' 
        ]);
        
        $oldlogo=$request->old_logo;
        $data=array();
        $data['brand_name']=$request->brand_name;
        $image=$request->file('brand_logo');
        if($image){
            unlink($oldlogo);
        	$image_name=date('dmy_H_s_i');
        	$ext=strtolower($image->getClientOriginalExtension());
        	$image_full_name=$image_name.'.'.$ext;
        	$upload_path='public/media/brand/';
        	$image_url=$upload_path.$image_full_name;
        	$success=$image->move($upload_path,$image_full_name);

        	$data['brand_logo']=$image_url;
        	$update=DB::table('brands')->where('id',$id)->update($data);
            if($update) {
                $notification=array(
                    'messege'=>'Brand Update with Logo ',
                    'alert-type'=>'info'
                );
                return Redirect()->route('brands')->with($notification);
            }
          
        }
        else{

            $brand=DB::table('brands')->where('id',$id)->update($data);
            $notification=array(
                'messege'=>'Brand Update without logo ',
                'alert-type'=>'warning'
            );
            return Redirect()->route('brands')->with($notification);
        }
        // else{
        // 	$brand=DB::table('brands')->where('id',$id)->update($data);
        // 	return Redirect()->route('brands');
        // }

   }


}
