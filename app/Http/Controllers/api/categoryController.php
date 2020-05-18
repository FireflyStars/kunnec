<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\category;
use App\model\subcategory;
class categoryController extends Controller
{
    //
    public function category(){
    	// ctaegories ..
    	$category   = category::all();
    	return response()->json($category);
    }
    public function subcategory($id){
    	$subcategory = subcategory::where('category_id',$id)->get();
    	return response()->json($subcategory);
    }
}
