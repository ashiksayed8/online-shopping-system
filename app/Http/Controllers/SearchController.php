<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SearchController extends Controller
{   
    public function searchproduct(Request $request){
    $brands=DB::table('brands')->get();
    $item=$request->search;
    $products=DB::table('products')->where('product_name','LIKE',"%{$item}%")->paginate(20);
    return view('front_view.search',compact('brands','products'));
   }


   public function subcategory($id) {
       $product=DB::table('products')->where('subcategory_id',$id)->paginate(20);
       return view('front_view.search_subcategory',compact('product'));
   }
   public function category($id) {
    $product=DB::table('products')->where('category_id',$id)->paginate(20);
    return view('front_view.search_category',compact('product'));
}
}
