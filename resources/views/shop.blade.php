@extends('layouts.hf')
@section('title', 'Products || Kunnec ')
@Section('content')
<style type="text/css">
	.search-background {
		background: linear-gradient(to bottom, #1672c4 0%, #3399ff 100%);  
		-moz-box-shadow: 3px 3px 4px #909497;
		-webkit-box-shadow: 3px 3px 4px #909497;
		box-shadow: 3px 3px 4px #909497; 
		height: 200px; 
		padding-top:35px; 
		color: white;
	}
	.card, .card-header, .card-footer{
		background-color:white;
		border-radius:0px;
	}
	.card-header,.card-footer {
		background:#1672c4 !important;
		color:white;
	}
	.card {
		border-radius:0px;
	}
	.list-group-item {
		background:none;
	}
	.search-background{
		background:green !important;
	}
	a:link {
	  text-decoration: none;
	}

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('div').fadeIn();
	});
</script>
<div class="container-fluid">
	<section class="panel search-background" style="position:relative;">
		<div class="col-lg-12">
			<div class="row">
				<div class="col-lg-3">
					<label><b>Select Country</b></label>
					<select id="country" class="form-control"> 
						<option>Country</option>
					      <option>country</option>
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
	</section>
	<br />
	<div class="row">
		<div class="col-lg-3">
			<label>Find</label>
			<h2>Filters</h2>
			<hr />
			<section id="categories">
				<ul class="list-group">
				  <label><b> Category </b></label>
					@php
						$category = App\model\category::where('division','3')->orderby('id','desc')->limit('10')->get(); // category ..
					@endphp
					<li class="list-group-item">
					  		<a href="{{ route('sell') }}">
					  			All
					  		</a>
				    </li>
					@foreach($category as $cat)
					  <li class="list-group-item">
					  		<a href="{{ route('category',$cat->id) }}">
					  			{{ $cat->name }}
					  		</a>
					  		<span><b>({{ $cat->adds->count() }})</b></span>
					  </li>
					@endforeach
				</ul>
			</section>
		</div>
		<div  class="col-lg-9">
			@if ($message = Session::get('message'))
            <div class="alert alert-success">
              <p>
                {{ $message }}
              </p>
            </div>
	        @endif 
	        @if(count($adds) > 0)
			<div class="row">
				@foreach($adds as $add)
					<div class="col-lg-4" id="adds" style="margin-bottom:5px;">
						<div class="card">
							<div class="d-flex flex-column">
							  <div class="p-2">
							  	@php
									$img = App\model\salesupload::where('kunnecsell_id',$add->id)->first();
								@endphp
							  	<img src="{{ asset('uploads') }}\{{ $img['path'] }}" class="img-thumbnail" width="100%" height="130px" />
							  </div>
							  <div class="p-2">
									<b>
									  	{{
											ucfirst($add->title)
										}}
									</b>
									<br />
									<p>
										{{
											substr($add->description,0,50)
										}}
									</p>
									<hr />
							  </div>
							  <div class="p-2">
							  		<div class="d-flex">
									  <div class="p-2">
									  		<label>
												<font color="black">
													${{ $add->price }}
												</font>
											</label>
									  </div>
									  <div class="ml-auto p-2">
									  		<a href="{{ route('add',$add->id) }}" class="ml-auto p-2">
												<button class="btn btn-success btn-sm ml-auto">
													<i class="fa fa-arrow-right"></i>
												</button>
											</a>
									  	</div>
									</div>
							  </div>
							</div>
						</div>
						<!-- <a href="{{ route('add',$add->id) }}">
							<div class="card">
								@php
									$img = App\model\salesupload::where('kunnecsell_id',$add->id)->first();
								@endphp
								<div class="card-body">
									<img src="{{ asset('uploads') }}\{{ $img['path'] }}" width="100%" height="130px" />
									<label>
										{{
											ucfirst($add->title)
										}}
									</label>
								</div>
								<div class="card-footer">
									<div class="d-flex">
									  <div class="p-2">
									  		<label>
												<font color="white">
													${{ $add->price }}
												</font>
											</label>
									  </div>
									  <div class="ml-auto p-2">
									  		<a href="{{ route('add',$add->id) }}" class="ml-auto p-2">
												<button class="btn btn-info btn-sm ml-auto">
													<i class="fa fa-arrow-right"></i>
												</button>
											</a>
									  	</div>
									</div>
								</div>
							</div>
						</a> -->
					</div>
				@endforeach
			</div>
			@else
	  			<div class="jumbotron">
	  				<center>
	  					There Is No Add Related to required Category
	  				</center>
	  			</div>
			@endif
		</div>
	</div>	
</div>
<br />
<div class="d-flex justify-content-center">
	<center>
	  <ul class="pagination">
		   {{ $adds->links() }}
	  </ul>
	</center>
</div>
@endsection