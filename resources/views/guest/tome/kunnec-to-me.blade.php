@extends('layouts.hf')
@section('title', 'Kunnec To Me || Kunnec ')
@section('content')
<style type="text/css">
	.search-background {
		background: linear-gradient(to bottom, #1672c4 0%, #3399ff 100%);  
		-moz-box-shadow: 3px 3px 4px #909497;
		-webkit-box-shadow: 3px 3px 4px #909497;
		box-shadow: 3px 3px 4px #909497; 
		min-height:150px; 
		padding:auto; 
		color: white;
	}
	a {
		color: blue;
	}
	.card-header , .card-body , .card-footer {
		background-color:white;
	}
	.opportunity-list {
		list-style: none;
		margin: 0;
		padding: 0;
		overflow: hidden;
	}
	.op-list{
		float: left;
		margin-left:20px;
	}
	.btn {
		border-radius:0px;
	}
</style>
<div class="container-fluid" style="margin-top:10px;">
	<section class="panel search-background" style="position:relative;">
			<div class="col-lg-12">
				<br />
				<div class="row">
					<div class="col-lg-3">
						<label><b>Select Country</b></label>
						<select id="country" class="form-control"> 
							<option>Country</option>
						      @foreach($country as $c)
		                       <option value="{{ $c->id }}">{{ $c->name }}</option>
		                      @endforeach
						</select>
					</div>
					<div class="col-lg-3">
						<label><b>Select State</b></label>
						<select id="state" class="form-control">
							<option>Select State</option>
						</select>
					</div>
					<div class="col-lg-3">
						<label><b>Select City</b></label>
						<select id="city" class="form-control">
							<option>Select City</option>
						</select>
					</div>
					<div class="col-lg-3">
						<label><b>Choose category</b></label>
						<select class="form-control">
							<option>Choose category</option>
						</select>
					</div>
				</div>
			</div>
			<br />
	</section>
	<br />
	<div class="col-lg-12">
		<div  class="row">
			<div class="col-lg-3">
	            <ul class="list-group">
				  <li class="list-group-item active">All</li>
				  <li class="list-group-item">Lets Collabrate for free</li>
				  <li class="list-group-item">Will pay for your services</li>
				</ul>
			</div>
			<div class="col-lg-9">
				@foreach($tomes as $tome)
					@php
						$user = App\User::find($tome->user_id);
					@endphp	
					<div class="card">
						<div class="card-header">
							<b>  <img src="Uploads/{{ $user->dp }}" class="rounded-circle" height="40px" width="40px" />  
								<label> {{ ucfirst($tome->title) }} </label> 
							</b>
						</div>
						<div class="card-body">
							 {{ substr($tome->description,0,350) }} ... <br />
							
							<a href="{{ route('tome.single', $tome->id) }}">
							 	<button class="btn btn-info float-right"> <i class="fa fa-arrow-right"></i> Continue..</button>
							</a>
						</div>
						<div class="card-footer">
							<ul class="opportunity-list">
								<li class="op-list"><b> <i class="fa fa fa-clock-o"></i> {{ $tome->created_at->diffForHumans() }} </b></li>
								<li class="op-list"><b> <i class="fa fa-eye"></i> 0 Views </b></li>
							</ul>
						</div>
					</div>		
					<br />	

				@endforeach
			</div>
		</div>
	</div>
</div>
@endsection