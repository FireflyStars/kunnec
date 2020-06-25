@extends('layouts.newheader.header')
@section('title', 'List Events')
@section('content')
  <div class="card">
        <div class="card-header d-flex justify-content-between" style="background-color:#009900;">
            <h5 class="mb-0" style="color:#FFFFFF;">
            	<img src="{{ asset('newlook/images/logos/K_Logo6.png') }}" height="40px" width="60px"/> 
                Events List
            </h5>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
	    <!-- Start of Tabs -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="course-tab" data-toggle="tab" href="#tab-course" role="tab" aria-controls="tab-course" aria-selected="false">My Events RSVPs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="purchase-tab" data-toggle="tab" href="#tab-purchase" role="tab" aria-controls="tab-purchase" aria-selected="true">Events Attending</a>
            </li>
		</ul>
        <div class="tab-content border-x border-bottom p-3" id="myTabContent">     
			<!-- Start of New Tab -->
            <div class="tab-pane fade show active" id="tab-course" role="tabpanel" aria-labelledby="course-tab">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-4 col-sm-auto d-flex align-items-center pr-0 mb-3">
                                <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0"><i class="fas fa-th-list"></i> &nbsp;My Events</h5>
                            </div>
                        </div>
						<div class="table-responsive-sm">
						    <table class="table table-hover">
                                <thead style="color:#FFFFFF; background-color:#009900;">
                                    <tr>
                                        <th class="th-sm">#</th>
                                        <th scope="col">Event Name</th>
                                        <th scope="col">RSVPs<i class="fas fa-sort-alpha-up"></i></th>
                                        <th scope="col">Date <i class="fas fa-sort"></i></th>
										<th scope="col">Delete</th>
	                                </tr>
                                </thead>
								
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
										<td><h5 class="fs-0 mb-3"><a href="../../pages/events/k_event_details.php" role="button">New Year's Eve on the Waterfront</a></h5></td>
                                        <td><span class="badge badge-pill badge-success">25</span></td>
                                        <td><div class="calendar mr-2"><span class="calendar-month">Jun</span><span class="calendar-day">31 </span></div></td>
										<td><button class="btn btn-danger mr-1 mb-1" type="button">Delete</button></td>
	                                </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td><h5 class="fs-0 mb-3"><a href="../../pages/events/k_event_details.php" role="button">Open House to Show Mansion</a></h5></td>
                                        <td><span class="badge badge-pill badge-success">17</span></td>
                                        <td><div class="calendar mr-2"><span class="calendar-month">Apr</span><span class="calendar-day">6 </span></div></td>
										<td><button class="btn btn-danger mr-1 mb-1" type="button">Delete</button></td>
	                                </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td><h5 class="fs-0 mb-3"><a href="../../pages/events/k_event_details.php" role="button">Drake Concert</a></h5></td>
                                        <td><span class="badge badge-pill badge-success">234</span></td>
										<td><div class="calendar mr-2"><span class="calendar-month">Oct</span><span class="calendar-day">21</span></div></td>
										<td><button class="btn btn-danger mr-1 mb-1" type="button">Delete</button></td>
	                                </tr>
	                                <tr>
                                        <th scope="row">4</th>
                                        <td><h5 class="fs-0 mb-3"><a href="../../pages/events/k_event_details.php" role="button">Birthday Party</a></h5></td>
                                        <td><span class="badge badge-pill badge-success">5</span></td>
										<td><div class="calendar mr-2"><span class="calendar-month">Nov</span><span class="calendar-day">16 </span></div></td>
										<td><button class="btn btn-danger mr-1 mb-1" type="button">Delete</button></td>
	                                </tr>
	                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
		    </div>
			<!-- Start of New Tab -->
            <div class="tab-pane fade" id="tab-purchase" role="tabpanel" aria-labelledby="purchase-tab">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-4 col-sm-auto d-flex align-items-center pr-0 mb-3">
                                <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0">
                                    <i class="fas fa-th-list"></i> &nbsp;Events I will be attending
                                </h5>
                            </div>
                        </div>
						<div class="table-responsive-sm">
						    <table class="table table-hover">
                                <thead style="color:#FFFFFF; background-color:#009900;">
                                    <tr>
                                        <th class="th-sm">#</th>
                                        <th scope="col">Event Name</th>
                                        <th scope="col">Date <i class="fas fa-sort"></i></th>
										<th scope="col">Delete</th>
	                                </tr>
                                </thead>
								
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
										<td><h5 class="fs-0 mb-3"><a href="../../pages/events/k_event_details.php" role="button">New Year's Eve on the Waterfront</a></h5></td>
                                        <td><div class="calendar mr-2"><span class="calendar-month">Dec</span><span class="calendar-day">31 </span></div></td>
										<td><button class="btn btn-danger mr-1 mb-1" type="button">Delete</button></td>
	                                </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td><h5 class="fs-0 mb-3"><a href="../../pages/events/k_event_details.php" role="button">Open House to Show Mansion</a></h5></td>
                                        <td><div class="calendar mr-2"><span class="calendar-month">Sept</span><span class="calendar-day">9 </span></div></td>
										<td><button class="btn btn-danger mr-1 mb-1" type="button">Delete</button></td>
	                                </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td><h5 class="fs-0 mb-3"><a href="../../pages/events/k_event_details.php" role="button">Drake Concert</a></h5></td>
                                        <td><div class="calendar mr-2"><span class="calendar-month">Oct</span><span class="calendar-day">22 </span></div></td>
										<td><button class="btn btn-danger mr-1 mb-1" type="button">Delete</button></td>
	                                </tr>
	                                <tr>
                                        <th scope="row">4</th>
                                        <td><h5 class="fs-0 mb-3"><a href="../../pages/events/k_event_details.php" role="button">Birthday Party</a></h5></td>
                                        <td><div class="calendar mr-2"><span class="calendar-month">Mar</span><span class="calendar-day">1 </span></div></td>
										<td><button class="btn btn-danger mr-1 mb-1" type="button">Delete</button></td>
	                                </tr>
	                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
		    </div>
        <!-- End of Tabs -->
        </div>
	</div>
@endsection