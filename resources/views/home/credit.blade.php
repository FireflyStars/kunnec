@extends('layouts.header')
@section('content')
<style type="text/css">
	.panel-group{
		margin-bottom:0px;
	}
	.months {
		text-decoration: none; 
		padding-left: 10px; 
		padding-top:6px; 
		padding-bottom:6px; 
		color: black;
	}
	.card{
		margin-bottom:0px !important;
	}
	.height0 {
		height:200px;
	}
	.height{
		height: 350px;
	}
</style>
<div class="app-content content">
    <div class="content-wrapper">
      <br />
      <div class="content-body">
        <div class="row">
        	<div class="col-lg-4">
        		<div class="jumbotron height0">
        			<label>Current Credit</label>
        			<h2>
        				<i class="fa fa-credit-card"></i> 
        				@if(!empty($credit->current_credit))
    						{{ $credit->current_credit }} credits
    					@else	
    						0 credits
        				@endif
        			</h2>
        			<hr />
        		</div>
        	</div>
        	<div class="col-lg-4">
        		<div class="jumbotron height0">
        			<label>Last perchased date</label>
        			<h2>
        				<i class="fa fa-calendar"></i> 24-Nov-2018
        			</h2>
        			<hr />
        		</div>
        	</div>
        	<div class="col-lg-4">
        		<div class="jumbotron height0">
        			<label>Click for check  credit history</label>
        			<h2>
        				<button class="btn btn-danger btn-lg">
	        				<i  class="fa fa-credit-card"></i> Credit history
	        			</button>
        			</h2>
        			<hr />
        		</div>
        	</div>
        </div>
        <div class="row">
        	<div class="col-md-4">
        	 	<div class="jumbotron height">
        	 		<h5 class="box-title"> Each credit is 0.20¢ </h5>
					<h5 class="box-title"> $5.00 is purchase lower limit.</h5>
					<div class="form-group">
					      <label for="sel1">
					      	<i class="fa fa-plus"></i> Add Credits
					      </label>
					      <select class="form-control" id="sel1">
						        <option value="5">$5.00 = 25 credits</option>
						        <option value="6">$6.00 = 30 credits</option>
						        <option value="7">$7.00 = 35 credits</option>
						        <option value="8">$8.00 = 40 credits</option>
						        <option value="9">$9.00 = 45 credits  </option>
						        <option value="10">$10.00 = 50 credits</option>
						        <option value="11">$11.00 = 55 credits</option>
						        <option value="12">$12.00 = 60 credits</option>
						        <option value="13">$13.00 = 65 credits</option>
						        <option value="14">$14.00 = 70 credits</option>
						        <option value="15">$15.00 = 75 credits</option>
						        <option value="16">$16.00 = 80 credits</option>
						        <option value="17">$17.00 = 85 credits</option>
						        <option value="18">$18.00 = 90 credits</option>
						        <option value="19">$19.00 = 95 credits</option>
						        <option value="20">$20.00 = 100 credits</option>
					      </select>
					 </div>
					<button type="button" class="btn btn-success">
						Buy Credits
					</button>
					<div class="clear">
					</div>
        	 	</div>
        	</div>
         	<div class="col-md-4">
	        	 	<div class="jumbotron height">
	        	 		<h3><i class="fa fa-gift"></i> Send Gift Credits</h3>
	        	 		<hr />
	        	 		<div class="form-group">
						      <label for="sel2"><p style="color:red;"><b>Can only send credits to Kunnecs.</b></p></label>
						      <select class="form-control" id="sel2">
						         <option> 5 credits</option>
						        <option> 10 credits</option>
						        <option> 15 credits</option>
						        <option> 20 credits</option>
						        <option> 25 credits</option>
						        <option> 30 credits</option>
						        <option> 35 credits</option>
						        <option> 40 credits</option>
						        <option> 45 credits</option>
						        <option> 50 credits</option>
						        <option> 55 credits</option>
						        <option> 60 credits</option>
						        <option> 65 credits</option>
						        <option> 70 credits</option>
						        <option> 75 credits</option>
						        <option> 80 credits</option>
						        <option> 85 credits</option>
						        <option> 90 credits</option>
						        <option> 95 credits</option>
						        <option> 100 credits</option>
						      </select>
						</div>
						<div class="form-group">
							<h4><i class="fa fa-exchange"></i> Send Credits to:</h4>
							<select class="form-control">
								<option>Carlo Gambino</option>
							</select>
						</div>
						<button class="btn btn-success">Send Credit</button>
	        	 	</div>
        	</div>
        	<div class="col-md-4">
	        	 	<div class="jumbotron height">
	        	 	</div>
        	</div>
        </div>
      </div>
    </div>
</div>
@endsection