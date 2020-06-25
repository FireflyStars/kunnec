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
                        <div class="calendar mr-2"><span class="calendar-month">Dec</span><span class="calendar-day">31 </span>
						</div>
                        <div class="media-body fs--1">
                            <h5 class="fs-0">FREE New Year's Eve Midnight Harbor Fireworks</h5>
                            <p class="mb-0">by <a href="#!">Boston Harbor Now</a></p><span class="fs-0 text-warning font-weight-semi-bold">$49.99 – $89.99</span>
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
                    <h5 class="fs-0 mb-3">New Year's Eve on the Waterfront</h5>
                    <p>Boston Harbor Now in partnership with the Friends of Christopher Columbus Park, the Wharf District Council and the City of Boston is proud to announce the New Year's Eve Midnight Harbor Fireworks! This beloved nearly 40-year old tradition is made possible by the generous support of local waterfront organizations and businesses and the support of the City of Boston and the Office of Mayor Marty Walsh.</p>
                    <p>Join us as we ring in the New Year with a dazzling display over Boston Harbor. Public viewing is free and available from the Harborwalk of these suggested viewing locations:</p>
                    <ul>
                        <li>Christopher Columbus Park, North End</li>
                        <li>Fan Pier, Seaport District</li>
                        <li>East Boston Harborwalk</li>
                    </ul>
                    <p>The show will begin promptly at midnight.</p>
                    <p>Register here for a reminder and updates about the harbor fireworks and other waterfront public programs as they become available. Be the first to be notified for popular waterfront New Year's Eve public activities.</p>
                    <div class="icon-group">
				        <a class="icon-item text-facebook" href="#!"><span class="fab fa-facebook-f"></span></a>&nbsp;&nbsp;<a class="icon-item text-twitter" href="#!"><span class="fab fa-twitter"></span></a>&nbsp;&nbsp;<a class="icon-item text-google-plus" href="#!"><span class="fab fa-google-plus-g"></span></a>&nbsp;&nbsp;<a class="icon-item text-linkedin" href="#!"><span class="fab fa-linkedin-in"></span></a><a class="icon-item text-700" href="#!">&nbsp;&nbsp;</a>
					</div>
                    <hr class="style12">
					<h5 class="fs-0">Location</h5>
                    <div class="mb-1">Boston Harborwalk<br />Christopher Columbus Park<br />Boston, MA 02109<br />United States</div>
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
                  <div class="card-footer bg-light py-0 border-top"><a class="btn btn-link btn-block" href="../../pages/events/k_events.php">All Events<span class="fas fa-chevron-right ml-1 fs--2"></span></a></div>
                </div>
              </div>
            </div>
        </div>
    </div>
@endsection