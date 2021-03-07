<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Illuminate\Http\RedirectResponse;

class WishlistController extends Controller
{
    public function Addwishlist($id) {

        $userid=Auth::id();
        $check=DB::table('wishlists')->where('user_id',$userid)->where('product_id',$id)->first();

        $data = array(
            'user_id'=>$userid,
            'product_id'=>$id
        );

        if(Auth::check()) {
            if($check) {
               return response()->json(['success' => 'Product Already has on your wistlist']);
            }else {
                DB::table('wishlists')->insert($data);
                return response()->json(['error' => 'Successfully Added on your wishlist']);
            }
        }else{
            return response()->json(['error' => 'At first login your account']);
        }     
    }

    public function Wishlist()
    {
        $userid=Auth::id();
        $product=DB::table('wishlists')->join('products', 'wishlists.product_id', 'products.id')->select('products.*', 'wishlists.user_id')->where('wishlists.user_id', $userid)->get();
        return view('front_view.wishlists', compact('product'));
    }
    public function WishlistProductDelete($id) {

            DB::table('wishlists')->where('product_id',$id)->delete();
           
            $notification=array(
                'messege'=>'Wishlist product Delete Successfully ',
                'alert-type'=>'warning'
            );
            return Redirect()->back()->with($notification);
            
        }
    
}
