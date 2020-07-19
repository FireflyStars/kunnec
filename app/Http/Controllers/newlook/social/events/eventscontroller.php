<?php

namespace App\Http\Controllers\newlook\social\events;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\event;
use App\country;
use App\model\event_ticket;
use Auth;

class eventscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $id = Auth::id();
        $events = event::where('user_id',$id)->get();
        return view('newlook.social.events.yourevents', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $countries = country::all();
       return view('newlook.social.events.createvents', compact('countries'));
    }

    /**
  1   * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       // current user ..
      
       $user = Auth::user();
       $event = new event;
       $event->user_id            = $user->id;
       $event->title              = $request->title; 
       $event->start_date         = $request->startdate;
       $event->start_time         = $request->starttime;
       $event->end_date           = $request->enddate;
       $event->end_time           = $request->endtime;
       $event->reg_deadline       = $request->regdeadline;
       $event->zone               = $request->timezone;
       $event->vuene              = $request->venue; 
       $event->address            = $request->address;
       $event->city_id            = $request->city;
       $event->state_id           = $request->state;
       $event->country_id         = $request->country;
       $event->description        = $request->description;
       $event->ticket_type        = $request->ticket_type;
       $event->organizer          = $request->organizer; 
       $event->sponsors           = $request->sponsors;
       $event->event_type         = $request->event_type;
       $event->event_topic        = $request->even_topic;
       $event->tags               = $request->eventtags;
       $event->listing_privacy    = $request->listingPrivacy; 
       $event->remaining_ticket   = $request->snort; 
       $event->e_v_p              = $request->e_v_p;
       $event->save();
       
       $event_id = $event->id;
       $ttype =$request->ticket_type;
       if($ttype != "free") {
        $n = count($request->opt1);
        if(!empty($n) && $n > 0){
            $opt = $request->opt1;
            $prc = $request->price1;
            $def = $request->optdef;
           
            for ($i=0; $i < $n ; $i++) { 
              
                 # ticket ..
                 $ticket = new event_ticket;
                 $ticket->event_id = $event_id;
                 $ticket->opt      = $opt[$i];
                 $ticket->price    = $prc[$i];
                 if(!empty($def[$i])){
                   $ticket->def      = $def[$i]; 
                 }
                 $ticket->save();
            }    
        }
        return redirect()->back();        
      } 
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
      $event = event::find($id);
      $events = event::orderBy('id', 'DESC')->limit(3)->get();
      return view('newlook.social.events.details', compact('event','events'));
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
    }
}
