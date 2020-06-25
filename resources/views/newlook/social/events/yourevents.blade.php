@extends('layouts.newheader.header')
@section('title', 'Your Events')
@section('content')
<div class="card">
            <div class="card-header d-flex justify-content-between" style="background-color:#009900;">
              <h5 class="mb-0" style="color:#FFFFFF;">
                  <img src="{{ asset('newlook/images/logos/K_Logo6.png') }}" height="40px" width="60px"/> My Events
              </h5>
            </div>
            <div class="card-body fs--1">
              <div class="row">
                    <div class="col-md-6 h-100">
                      <div class="media btn-reveal-trigger">
                            <div class="calendar">
                                <span class="calendar-month">Mar</span>
                                <span class="calendar-day">26</span>
                            </div>
                            <div class="media-body position-relative pl-3">
                              <h6 class="fs-0 mb-0">
                                    <a href="../../pages/events/k_event_details.php"> 
                                        Crain's New York Business 
                                        <span class="badge badge-soft-success rounded-capsule">Free</span>
                                    </a>
                              </h6>
                              <p class="mb-1">Organized by <a href="#!" class="text-700">AID MIT</a></p>
                              <p class="text-1000 mb-0">Time: 11:00AM</p>
                              <p class="text-1000 mb-0">Duration: Feb 29 - Mar 2</p>The Liberty Warehouse, New Yourk
                              <hr class="border-dashed border-bottom-0" />
                            </div>
                      </div>
                    </div>
                    <div class="col-md-6 h-100">
                      <div class="media btn-reveal-trigger">
                        <div class="calendar"><span class="calendar-month">Feb</span><span class="calendar-day">29</span></div>
                        <div class="media-body position-relative pl-3">
                          <h6 class="fs-0 mb-0"><a href="../../pages/events/k_event_details.php">Film Festival</a></h6>
                          <p class="mb-1">Organized by <a href="#!" class="text-700">American Nuclear Society</a></p>
                          <p class="text-1000 mb-0">Time: 11:00AM</p>
                          <p class="text-1000 mb-0">Duration: Feb 29 - Mar 2</p>Place: Workbar - Central Square, Cambridge
                          <hr class="border-dashed border-bottom-0" />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 h-100">
                      <div class="media btn-reveal-trigger">
                        <div class="calendar"><span class="calendar-month">Feb</span><span class="calendar-day">21</span></div>
                        <div class="media-body position-relative pl-3">
                          <h6 class="fs-0 mb-0"><a href="../../pages/events/k_event_details.php">Newmarket Nights</a></h6>
                          <p class="mb-1">Organized by <a href="#!" class="text-700">University of Oxford</a></p>
                          <p class="text-1000 mb-0">Time: 6:00AM</p>
                          <p class="text-1000 mb-0">Duration: 6:00AM - 5:00PM</p>Place: Cambridge Boat Club, Cambridge
                          <hr class="border-dashed border-bottom-0" />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 h-100">
                      <div class="media btn-reveal-trigger">
                        <div class="calendar"><span class="calendar-month">Dec</span><span class="calendar-day">31</span></div>
                        <div class="media-body position-relative pl-3">
                          <h6 class="fs-0 mb-0"><a href="../../pages/events/k_event_details.php">31st Night Celebration</a></h6>
                          <p class="mb-1">Organized by <a href="#!" class="text-700">Chamber Music Society</a></p>
                          <p class="text-1000 mb-0">Time: 11:00PM</p>
                          <p class="text-1000 mb-0">280 people interested</p>Place: Tavern on the Greend, New York
                          <hr class="border-dashed border-bottom-0" />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 h-100">
                      <div class="media btn-reveal-trigger">
                        <div class="calendar"><span class="calendar-month">Dec</span><span class="calendar-day">16</span></div>
                        <div class="media-body position-relative pl-3">
                          <h6 class="fs-0 mb-0"><a href="../../pages/events/k_event_details.php">Folk Festival</a></h6>
                          <p class="mb-1">Organized by <a href="#!" class="text-700">Harvard University</a></p>
                          <p class="text-1000 mb-0">Time: 9:00AM</p>
                          <p class="text-1000 mb-0">Location: Cambridge Masonic Hall Association</p>Place: Porter Square, North Cambridge
                        </div>
                      </div>
                    </div>
              </div>
            </div>
        </div>
@endsection