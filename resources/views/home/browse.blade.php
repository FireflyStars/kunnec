@extends('layouts.header')
@section('content')
<style type="text/css">
	.br{
		border-radius: 0px;
	}
</style>
<div class="app-content content">
    <div class="content-wrapper">
      <br />
      <div class="content-body">
      	 <div class="row">
      	 	<div class="col-md-6" style="margin-top:10px; border-radius: 0px;">
	      		<div class="jumbotron">
	      			<nav class="navbar navbar-expand-lg navbar-light" style="margin-top:-55px; background::none !important;">
					  <a class="navbar-brand" href="#">Brwoser Members</a>
					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					    <span class="navbar-toggler-icon"></span>
					  </button>

					  <div class="collapse navbar-collapse" id="navbarSupportedContent">
					    <ul class="navbar-nav ml-auto">
					      <li class="nav-item dropdown">
					        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					          <span class="fa fa-down"></span>
					        </a>
					        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
					          <a class="dropdown-item" href="#">Order by Latest</a>
					          <a class="dropdown-item" href="#">Order by Oldest</a>
					        </div>
					      </li>
					      <li class="nav-item dropdown">
					        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					          <i class="fa fa-ellipsis-v"></i>
					        </a>
					        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
					          <a class="dropdown-item" href="#">20 per page</a>
					          <a class="dropdown-item" href="#">30 per page</a>
					        </div>
					      </li>
					    </ul>
					  </div>
					</nav>
					<hr />
					<div class="list-group">
						@php
							$userid = Auth::user()->id;
							$i 		= 0;
						@endphp
						@foreach($users as $user)
							@if($userid != $user->id)
								<a  class="list-group-item list-group-item-action flex-column align-items-start br" total="{{ count($users) }}" req='user' req_id='0'>
								    <div class="d-flex flex-row">
								    	<div class="p-2">
								    		<img src="uploads/{{ $user->dp }}" height="100" width="100" />
								    	</div>
								        <div class="p-2" data="name{{ $user->id }}" id="{{ $user->id }}" style="margin-top: 2px;">
								        	<h3>{{ ucfirst($user->name) }}</h3>
								        	@php
								        	$age= Carbon::parse($user->dob)->diff(Carbon::parse(date("Y-m-d")))->format('%y years old');
								        	@endphp
								        	<label> {{ ucfirst($user->gender) }} ({{ $age }})</label> 
								        	<br />
								        	@php
								        		$request_send = App\model\friendship::where('sender_id', Auth::user()->id)->where('receiver_id', $user->id)->where('status','0')->first();
								        		$request_receive = App\model\friendship::where('sender_id', $user->id)->where('receiver_id', Auth::user()->id)->where('status','0')->first();
								        		$friend = App\model\friend::where('user_id', Auth::user()->id)->where('friend_id',$user->id)->where('status','friends')->orwhere('user_id',$user->id)->where('friend_id',Auth::user()->id)->first();
								        	@endphp
											@if(!empty($request_send))
												<button id="req"  request_id="{{ $request_send->id }}" value="cancle" class="btn btn-danger">
										        	<i class="fa fa-user-plus notify-md"></i> 
										        	 Cancle request
									        	</button>
											@elseif(!empty($request_receive))
												<button id="req" stat="accet" request_id="{{ $request_receive->id }}" value="accept" class="btn btn-success">
												        	<i class="fa fa-user-plus notify-md"></i> 
												        	 Accept
									        	</button>
									        	<button id="req" stat="cancle" request_id="{{ $request_receive->id }}" value="cancle" class="btn btn-danger">
										        	<i class="fa fa-user-plus notify-md"></i> 
										        	 Cancle
									        	</button>
											@elseif(!empty($friend))

													@if($friend->status=='friends')
														<button class="btn btn-success">
															<i class="fa fa-users"></i> sFriends
														</button>
													@endif
													@if($friend->status=='block')
														<button id="req" user="{{ $user->id }}" value="send" class="btn btn-info" disabled>
											        		<i class="fa fa-users-plus notify-md"></i> 
											        		Send Kunnec request
											        	</button>
													@endif
											
											@else
												<button id="req" user="{{ $user->id }}" value="send" class="btn btn-info">
									        		<i class="fa fa-users-plus notify-md"></i> 
									        		Send Kunnec request
									        	</button>
											@endif
								        	<button class="btn btn-warning">
								        		<i class="fa fa-eye"></i> View Profile
								        	</button>	
								        </div> 
								    </div>
								</a>
								<br />
							@endif
						@endforeach
					</div>
	      		</div>
	      	</div>
	      	<div class="col-md-3">
               <div class="jumbotron">
                 <label>
                   ﻿ No announcement or news has been published.
                 </label>
               </div>
            </div>
            <div class="col-md-3">
              <div class="jumbotron" style="background-color:white; height:590px !important;">
                
              </div>
            </div>
      	 </div>
      </div>
    </div>
</div>
@endsection