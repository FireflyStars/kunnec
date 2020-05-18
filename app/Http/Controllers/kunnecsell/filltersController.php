<?php

namespace App\Http\Controllers\kunnecsell;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\kunnecsell;
use App\country;
class filltersController extends Controller
{
    //
    public  function category($id){
    	$country = country::all();
        $adds = kunnecsell::where('category_id',$id)->paginate(5);
        return view('shop',compact('adds','country'));
    }

    public function fillters(Request $request){

		$arr_ip   = geoip()->getLocation($_SERVER['REMOTE_ADDR']);
        $code     = $arr_ip['iso_code'];
        $country  = country::where('iso',$code)->first();
        $adds     = kunnecsell::where('title', 'like' , '%'.$request->search.'%')->where('country',$country->id)->get();
       	foreach ($adds as $key) {
       		# code...
       		echo $key->title.'<br />';
       	}
        
        //return view('shop',compact('adds','country'));

    }	
}
