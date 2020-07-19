@extends('layouts.newheader.header')
@section('title', 'Event Details')
@section('content')
    <div class="card mb-3">
        <div class="card-header d-flex justify-content-between" style="background-color:#009900;">
            <h5 class="mb-0" style="color:#FFFFFF;"><img src="{{ asset('newlook/images/logos/K_Logo6.png') }}" height="40px" width="60px"/> Event Details</h5>
        </div>
    </div>
	
	<div class="card mb-3"><img class="card-img-top" src="{{ asset('assets/img/generic/13.jpg') }}" alt="" />
        <div class="card-body">
            <div class="row justify-content-between align-items-center">
                <div class="col">
                    <div class="media">
                        <div class="calendar mr-2">
                            <span class="calendar-month">
                                  @php
                                     $mo = Carbon\Carbon::parse($event->start_date)->format('m') 
                                  @endphp
                                  {{ date("F", mktime(0, 0, 0, $mo, 1)) }}
                              </span>
                              <span class="calendar-day">
                                {{ Carbon\Carbon::parse($event->start_date)->format('d') }}
                              </span>

						</div>
                        <div class="media-body fs--1">
                            <h5 class="fs-0">{{ ucfirst( ucfirst($event->title) ) }}</h5>
                            <p class="mb-0">by <a href="#!">{{ $event->organizer }}</a></p><span class="fs-0 text-warning font-weight-semi-bold">$49.99 – $89.99</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-auto mt-4 mt-md-0">
                    <button class="btn btn-falcon-default btn-sm mr-2" type="button"><span class="fas fa-heart text-danger mr-1"></span>235</button>
                    <button class="btn btn-falcon-default btn-sm mr-2" type="button"><span class="fas fa-share-alt mr-1"></span>Share</button>
                    <button class="btn btn-lg btn-success rounded-capsule mr-1 mb-1" type="button" href="#!" data-toggle="modal" data-target="#registerModal"><span class="fas fa-handshake"></span> RSVP Confirmation </a></button>
                </div>
            </div>
        </div>
    </div>
	
    <div class="row no-gutters">
        <div class="col-lg-8 pr-lg-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="fs-0 mb-3">{{ ucfirst( ucfirst($event->title) ) }}</h5>
                    <p>
                        {{ $event->description }}
                    </p>
                    <div class="icon-group">
				        <a class="icon-item text-facebook" href="#!"><span class="fab fa-facebook-f"></span></a>&nbsp;&nbsp;<a class="icon-item text-twitter" href="#!"><span class="fab fa-twitter"></span></a>&nbsp;&nbsp;<a class="icon-item text-google-plus" href="#!"><span class="fab fa-google-plus-g"></span></a>&nbsp;&nbsp;<a class="icon-item text-linkedin" href="#!"><span class="fab fa-linkedin-in"></span></a><a class="icon-item text-700" href="#!">&nbsp;&nbsp;</a>
					</div>
                    <hr class="style12">
					<h5 class="fs-0">Location</h5>
                    <div class="mb-1">
                    
                             {{ ucfirst( ucfirst($event->address) ) }}  
                    </div>
		                <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=Christopher%20Columbus%20Park%20Boston+(Boston%20Harborwalk)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe> <a href='http://maps-generator.com/'>Maps-Generator.com</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=1d0dab658d1860a953bd8caf54b4bc3ccec70f14'></script>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 pl-lg-2">
              <div class="sticky-top sticky-sidebar">
                <div class="card mb-3 fs--1">
                  <div class="card-body">
                    <h6>Date And Time</h6>
                    <p class="mb-1">Mon, Dec 31, 2018, 11:59 PM – <br />Tue, Jan 1, 2019, 12:19 AM EST</p> <a href="../../k_my2do.php" class="btn btn-danger mr-1 mb-1" role="button">Add to Calendar</a>
                    <h6 class="mt-4">Refund Policy</h6>
                    <p class="fs--1 mb-0">No Refunds</p>
                  </div>
                </div>
                <div class="card mb-3 mb-lg-0">
                  <div class="card-header bg-light">
                    <h5 class="mb-0">Events you may like</h5>
                  </div>
                  <div class="card-body fs--1">
                        @foreach($events as $event)
                            <div class="media btn-reveal-trigger">
                              <div class="calendar">
                                <span class="calendar-month">
                                      @php
                                         $mo = Carbon\Carbon::parse($event->start_date)->format('m') 
                                      @endphp
                                      {{ date("F", mktime(0, 0, 0, $mo, 1)) }}
                                  </span>
                                  <span class="calendar-day">
                                    {{ Carbon\Carbon::parse($event->start_date)->format('d') }}
                                  </span>
                              </div>
                              <div class="media-body position-relative pl-3">
                                <h6 class="fs-0 mb-0">
                                    <a href="{{ route('event.show', $event->id) }}">
                                        {{ $event->title }}
                                    </a>
                                </h6>
                                <p class="mb-1">Organized by <a href="#!" class="text-700">
                                    {{ $event-> organizer }} </a></p>
                                 <p class="text-1000 mb-0">Time: {{ $event->start_time }}</p>
                                <p class="text-1000 mb-0">Duration: 
                                  {{ $event->start_date }} - {{ $event->end }}
                                </p>
                                {{ $event->address }}
                                <hr class="border-dashed border-bottom-0" />
                              </div>
                            </div>
                        @endforeach
                  </div>
                  <div class="card-footer bg-light py-0 border-top">
                        <a class="btn btn-link btn-block" href="">All Events
                            <span class="fas fa-chevron-right ml-1 fs--2"></span>
                        </a>
                    </div>
                </div>
              </div>
            </div>
        </div>
    </div>
@endsection