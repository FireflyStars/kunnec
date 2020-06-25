@extends('layouts.header')
@section('content')
<script type="text/javascript">
	
</script>
<div class="app-content content">
    <div class="content-wrapper">
      <br />
      <div class="content-body">
	      	<div>
	      		<div class="col-md-12">
		      		<div class="jumbotron">
		      		 	<nav class="navbar navbar-expand-lg navbar-light" style="margin-top:-55px; background::none !important;">
						  <a class="navbar-brand" href="#"><i class="fa fa-users"></i> Kunnecs</a>
						  <button class="navbar-toggler" type="button" data-toggle="collapse" 
						  		data-target="#navbarSupportedContent" aria-controls=";.l" aria-expanded="false" aria-label="Toggle navigation">
						       <span class="navbar-toggler-icon"></span>
						  </button>
						  <div class="collapse navbar-collapse" id="navbarSupportedContent">
						    <ul class="navbar-nav ml-auto">
						      <li class="nav-item dropdown">
						        <a class="nav6032-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
	      		 		@if(!empty($friends))
	      		 			@foreach($friends as $friend)
		      		 			<div class="row">
			      		 			<div class="col-md-6" id="{{ $friend->id }}" >
						      		 	<a href="#" class="list-group-item list-group-item-action flex-column align-items-start br">
										    <div class="d-flex flex-row">
										    	<div class="p-2">
										    		<img src="uploads/{{ $friend->dp }}" height="100" width="100" />
										    	</div>
										        <div class="p-2" style="margin-top: 2px;">
										        	<h3>{{ $friend->name }}</h3>
										        	@php
										        	$age= Carbon::parse($friend->dob)->diff(Carbon::parse(date("Y-m-d")))->format('%y years old');
										        	@endphp
										        	<label> 
										        		{{ ucfirst($friend->gender) }} ({{ $age }})
										        	</label> 
										        	<br />
										        	<button value="{{ $friend->id }}"  class="btn btn-danger" id="block">
										        		<i class="fa fa-ban"></i> Block
										        	</button>
										        	<button value="{{ $friend->id }}" class="btn btn-primary" id="Unfriend">
										        		<i class="fa fa-trash"></i> Unfriend
										        	</button>
										        	<button class="btn btn-warning">
										        		<i class="fa fa-eye"></i> View Profile
										        	</button>	
										        </div> 
										    </div>
									  	</a>
						      	    </div>
						      	</div>
		      		 		@endforeach
	      		 		@else
	      		 			<center>
	      		 				<label>
	      		 					<font color="#357ebd" size="+5">
	      		 						<i class="fa fa-users"></i> No Any Friends Yet
	      		 					</font>
	      		 				</label>
	      		 			</center>
	      		 		@endif
		      		</div>
		      	</div>
	      	</div>
      </div>
    </div>
</div>
@endsection