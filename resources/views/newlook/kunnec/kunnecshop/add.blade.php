@extends('layouts.newheader.header')
@section('title', 'Add')
@section('content')
<div class="container">
	  			<div  class="row">
	  				<div class="col-lg-8">
	  					@php 
	  						$thumb  = App\model\salesupload::where('kunnecsell_id',$sell->id)->first();
	  						$images = App\model\salesupload::where('kunnecsell_id',$sell->id)->get();
	  					@endphp
	  					<div  class="jumbotron">
	  						<div zclass="col-xs-12">	
	  							<img src="{{ asset('uploads') }}\{{ $thumb->path }}" id="thumb" width="100%"  height="300px" />
	  						</div>	
	  						<br />
	  						<div class="col-lg-12">
			  					<div class="row">
			  						@foreach($images as $img)
			  								<div class="thumb" id="{{ $img->id }}">
			  									<img src="{{ asset('uploads') }}\{{ $img->path }}"  class="thumbnail" height="70px" width="100px" />
			  								</div>
			  				
			  						@endforeach
	  							</div>
	  						</div>
	  					</div>
	  					<div class="jumbotron">
	  						<h2>DETAILS</h2>
	  						<hr />
	  						<table class="table table-bordered">
	  							<thead>
	  								<tr>
	  									<th>Condition</th>
	  									<td>{{ ucfirst($sell->condtion) }}</td>
	  								</tr>
	  								<tr>
	  									<th>Price</th>
	  									<td>${{ ucfirst($sell->price) }}</td>
	  								</tr>
	  								<tr>
	  									<th>Publish  Date</th>
	  									<td>{{ ucfirst($sell->created_at) }}</td>
	  								</tr>
	  								@php
						        		$time= Carbon::parse($sell->created_at)->diff(Carbon::parse(date("Y-m-d")))->format('%y years old');
						        	@endphp
						        	@if(!empty($sell->model))
	  								<tr>
	  									<th>Model</th>
	  									<td>{{ $sell->model }}</td>
	  								</tr>
	  								@endif
	  								@if(!empty($sell->model))
	  								<tr>
	  									<th>Brand</th>
	  									<td>{{ $sell->brand }}</td>
	  								</tr>
	  								@endif
	  								<tr>
	  									<th>Publish At</th>
	  									<td>{{ $sell->created_at->diffForHumans() }}</td>
	  								</tr>
	  							</thead>
	  						</table>
	  					</div>
	  					<div class="jumbotron">
	  						<h2>Description</h2>
	  						<hr />
	  						@php
	                          $des = $sell->description;
	                        @endphp
	                        {!! $des !!}

	  					</div>
	  				</div>
	  				<div class="col-lg-4">
	  					<div  class="jumbotron">
		  					<div style="margin-top:-40px; margin-bottom:-40px;">
		  						<div class="row">
		  							<div class="col-xs-6">
				  						<label>
				  							<font size="4">
					  						   <i class="fa fa-money"></i>	<b>${{ $sell->price }}</b>
											</font>
				  						</label>
		  							</div>
			  						<div class="col-lg-6"></div>
		  						</div>
		  						<hr />
		  						<div class="row">
		  							<div class="col-xs-12">
				  						<label>
				  							<font size="4">
				  								{{ $sell->title }}
				  							</font>
				  						</label>
		  							</div>
		  						</div>
		  						<hr />
								@php 
									$state = App\state::find($sell->state)->first();
									$city  = App\city::find($sell->city)->first();
								@endphp
		  						<div class="row">
		  							<div class="col-xs-12">
				  						<p>
				  							<i class="fa fa-map-marker"></i>
				  							<font size="2.5">
				  								<b> {{ ucfirst($city->name) }}, {{ ucfirst($state->name) }} </b>
				  							</font>
				  						</p>
		  							</div>
		  						</div>
		  					</div>
	  					</div>
	  					<div  class="jumbotron">
	  						<div class="row" style="margin-top:-40px;">
	  							<div class="col-xs-12">
			  						<label>
			  							<font size="4">
				  							<b><i class="fa fa-file-text-o"></i> Seller Description </b>
										</font>
			  						</label>
	  							</div>
	  						</div>
	  						<hr />
	  						@php 
								$user = App\User::where('id',$sell->user_id)->first();
							@endphp
	  						<div class="row">
	  							<div class="col-xs-12">
			  						<label>
			  							<font size="4">
				  							<b><i class="fa fa-user"></i> {{ ucfirst($user->name) }} </b>
										</font>
			  						</label>
	  							</div>
	  						</div>
	  						<div class="row">
	  							<div class="col-xs-12">
			  						<label>
			  							<font size="4">
				  							<b><i class="fa fa-phone"></i> {{ ucfirst($user->ph) }} </b>
										</font>
			  						</label>
	  							</div>
	  						</div>
	  					</div>
	  					<div  class="jumbotron">
	  						<div class="row" style="margin-top:-40px;">
	  							<div class="col-xs-12">
			  						<label>
			  							<font size="4">
				  							<b><i class="fa fa-map-marker"></i> Address </b>
										</font>
			  						</label>
	  							</div>
	  						</div>
	  						<hr />
	  						<div class="row">
	  							<div class="col-xs-12">
			  						<label>
			  							{{ ucfirst($sell->address) }}
			  						</label>
	  							</div>
	  						</div>
	  					</div>
	  					
	  				</div>
	  			</div>
	  		</div>
@endsection