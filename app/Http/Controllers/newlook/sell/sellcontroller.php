<?php

namespace App\Http\Controllers\newlook\sell;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\jobsdoc; 
use App\model\category;
use App\model\kunnecsell;
use App\model\salesupload;
use Carbon\Carbon; // for the calculation purpose ..
use App\city;
use App\country;
use App\state;
use auth;

class sellcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $adds = kunnecsell::orderby('id','desc')->paginate(12);
        return view('newlook.kunnec.kunnecshop.adds',compact('adds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // create an add
        //$arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']);
        //$code = $arr_ip['iso_code'];
        $code = 166;
        $country = country::where('id',$code)->first();
        $category   = category::where('division','3')->get();
        $states     = state::where('country_id',$country->id)->get();
        return view('newlook.kunnec.kunnecshop.create',compact('category','states'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       $state = state::find($request->state);
     //  return $state;
       
       $country = country::find($state->country_id);
        $sell = new kunnecsell;
        $sell->title =  $request->title;
        $sell->description = $request->description;
        $sell->category_id = $request->category;
        $sell->subcategory_id = $request->subcategory;
        $sell->condtion     = $request->condition;
        $sell->price        = $request->price;
        $sell->phone        = $request->phone;
        $sell->email        = $request->email;
        $sell->country      = $country->id;
        $sell->city         = $request->city;
        $sell->state        = $request->state;
        $sell->address      = $request->address;
        $sell->model        = $request->model;
        $sell->brand        = $request->brand;
        $sell->user_id      = auth::id();
        $sell->save();
        $c = $sell->id;
        if(!empty($request->hasfile('add'))){

            Validator([
                'add' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $img = $request->file('add');
            foreach($img as $im){
                $fileName = time().'.'.$im->getClientOriginalName();
                $im->move(public_path('uploads'), $fileName);
                // its checking if file data is visible by user ..
                $s = new  salesupload;
                $s->path = $fileName;
                $s->kunnecsell_id =$c;
                $s->save();
            }

        }
        
        return redirect()->back()->with('message','You Add Submitted Succesfully');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $sell = kunnecsell::find($id);
        return view('newlook.kunnec.kunnecshop.add',compact('sell'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        kunnecsell::find($id)->delete();
        salesupload::where('kunnecsell_id',$id)->delete();
        return redirect()->back()->with('message','Deleted Succesfully');
    }
}
