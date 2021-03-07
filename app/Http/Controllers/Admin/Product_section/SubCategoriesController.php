<?php


namespace App\Http\Controllers\Admin\Product_section;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class SubCategoriesController extends Controller
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

    public function subcategory(){

        $category=DB::table('categories')->get();
        $subcategory=DB::table('subcategories')
                    ->join('categories','subcategories.category_id','categories.id')
                    ->select('subcategories.*','categories.category_name')
                    ->get();
    	return view('admin.subcategory.add_subcategory',compact('category','subcategory'));
    }

    public function InsertSubcategory(Request $request){

        $validatedData = $request->validate([
        'subcategory_name' => 'required|unique:subcategories|max:100',
        'category_id' => 'required',
       ]);
    
      $data=array();
      $data['category_id']=$request->category_id;
      $data['subcategory_name']=$request->subcategory_name;
      DB::table('subcategories')->insert($data);
      $notification=array(
        'messege'=>'Successfully Add to SubCategory',
        'alert-type'=>'success'
    );
        return Redirect()->back()->with($notification);

    }

    public function DeleteSubcategory($id){

        DB::table('subcategories')->where('id',$id)->delete();
        $notification=array(
            'messege'=>'SubCategory Delete Successfully ',
            'alert-type'=>'error'
        );
        return Redirect()->back()->with($notification);
    }

    public function EditSubcategory($id){

        $subcategory=DB::table('subcategories')->where('id',$id)->first();
        $category=DB::table('categories')->get();
        return view('admin.subcategory.edit_subcategory',compact('category','subcategory'));

    }
  public function UpdateSubcategory(Request $request,$id)
    {

        $validatedData = $request->validate([
            'subcategory_name' => 'required|unique:subcategories|max:100',
            'category_id' => 'required',
           ]);
            $data=array();
            $data['category_id']=$request->category_id;
            $data['subcategory_name']=$request->subcategory_name;
            $update=DB::table('subcategories')->where('id',$id)->update($data);    
        if($update) {
            $notification=array(
                'messege'=>'SubCategory Update Successfully ',
                'alert-type'=>'info'
            );
            return Redirect()->route('subcategories')->with($notification);
        }
        else{
            $notification=array(
                'messege'=>'SubCategory Do Not Update ',
                'alert-type'=>'warning'
            );
            return Redirect()->route('subcategories')->with($notification);
        }

    }
}
