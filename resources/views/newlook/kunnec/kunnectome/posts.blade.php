@extends('layouts.newheader.header')
@section('title', 'Kunnec | kunnec to me')
@section('content')
<div id="app">
	<style type="text/css">
	.search-background {
		background: linear-gradient(to bottom, #009900 0%, #ffffff 100%);  
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
	<section class="panel search-background" style="position:relative; background:#009900;  
		-moz-box-shadow: 3px 3px 4px #909497;
		-webkit-box-shadow: 3px 3px 4px #909497;
		box-shadow: 3px 3px 4px #909497; 
		min-height:150px; 
		padding:auto; 
		color: white;">
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
	<opportunity></opportunity>	
</div>
@endsection