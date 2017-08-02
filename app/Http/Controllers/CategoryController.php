<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use DB;
class CategoryController extends Controller
{


     
    public function createCategory(){
//return view('admin.category.createCategory');
$categories = Category::all();
return view('admin.category.createCategory',['categories'=>$categories]);


    }
 

public function storeCategory(Request $request){
	$this->validate($request,['categoryName'=>'required','categoryDescription'=>'required',
		]);
//$category = new category();
// 	$category->categoryName=$request->categoryName;
//$category->categoryName=$request->categoryName;
//$category->categoryDescription=$request->categoryDescription;
//$category->publicationStatus=$request->publicationStatus;
//$category->save();
//return 'Category info save successfully.';


//Category::create($request->all());
//return 'Category info save successfully.';


DB::table('categories')->insert([

'categoryName'=>$request->categoryName,
'categoryDescription'=>$request->categoryDescription,

	]);

//return redirect()->back();
return redirect('/category/add')->with('message','Category Info save successfully');


    }


     public function manageCategory(){

$categories=Category::all();
return view('admin.category.manageCategory',['categories'=>$categories]);


    }

    public function editCategory($id){
    	$categoryById=Category::where('id',$id)->first();

return view('admin.category.editCategory',['categoryById'=>$categoryById]);

    }


     public function updateCategory(Request $request){

     	//dd($request->all());
    $category = Category::find($request->categoryId);
    $category->categoryName=$request->categoryName;
	$category->categoryDescription=$request->categoryDescription;
	$category->save();
	return redirect('/category/manage')->with('message','Category Info Update successfully');
    }

public function deleteCategory($id){
 $category = Category::find($id);
 $category->delete();
 return redirect('/category/manage')->with('message','Category Info delete successfully');
    
}
public function viewCategory(){
    
    return view('frontEnd.category.categoryContent');
}
}
