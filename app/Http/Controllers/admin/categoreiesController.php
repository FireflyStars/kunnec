<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\category;
use App\model\subcategory;
class categoreiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // categories ..
        $categories  = category::orderby('id','desc')->get();
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $categories = new category;
        $categories->name = $request->cname;
        $categories->division = $request->ko;
        $categories->save();
        return redirect()->back()->with('message','Succesfully Added Categories');
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
        $subs = subcategory::where('category_id',$id)->get();
        $category = $id;
        return view('admin.categories.subcategory',compact('subs','category'));
    }

    public function subcategory(Request $request, $id){
        $subs = new subcategory;
        $subs->category_id = $id; 
        $subs->name = $request->cname;
        $subs->save();
        return redirect()->back()->with('message','Redirected Back Succesfully');
    }
    public function delsub($id){
        $sub = subcategory::find($id);
        $sub->delete();
        return redirect()->back()->with('message','Subcategory Deleted Succesfully');
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
        $categories = category::find($id);
        $categories->name = $request->cname;
        $categories->division = $request->ko;
        $categories->save();
        return redirect()->back()->with('message','Succesfully Added Categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $category = category::find($id)->delete();
        return  redirect()->back()->with('message','Deleted Succesfully');
    }
}
