 @extends('layouts.hf')
@section('title', 'Kunnec to you || Kunnec.com ')
@section('content')
<style type="text/css">
	.search-background {
		background: linear-gradient(to bottom, #008000 0%, #34A853 100%);  
		-moz-box-shadow: 3px 3px 4px #909497;
		-webkit-box-shadow: 3px 3px 4px #909497;
		box-shadow: 3px 3px 4px #909497; 
		min-height:150px; 
		padding:20px; 
		color: white;
	}

	a {
		color: blue;
	}
	.card , .card-header , .card-footer {
		border-radius:0px;
		background:white;
		margin-bottom: 1px;m 
	}
	.card-body {
		height:150px;
	}

	li{
		border-radius: 0px !important;
	}
</style>
<div id="app">
	<div class="container-fluid" style="margin-top: 10px;">
		<section class="panel search-background" id="search" style="position:relative;">
				<div class="col-lg-12">
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
		</section>
		<kunnec-to-you></kunnec-to-you>	
	</div>
</div>
@endsection