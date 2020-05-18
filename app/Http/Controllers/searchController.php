<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\state;
use App\city;
use App\user;
use App\model\category;
use App\model\subcategory;
class searchController extends Controller {
    // its searching state from database ..
    public function state($id){
        $state = state::where('country_id',$id)->get();
        return $state;
      return $id;
    }
    // its searching city from database ..
    public function city($id){
       $city = city::where('state_id',$id)->get();
       return $city;
    }
    // search for what .. . 
    public function search($name){
          $users = user::where('name','like', '%'.$name.'%')->get();
          if(count($users) > 0 ){
              return $users;  
          } else {
              return "Not found";
          }
    }
    public function category($id){
      $subcategory = subcategory::where('category_id',$id)->get();
      return $subcategory;
    }
}
