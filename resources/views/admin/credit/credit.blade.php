@extends('layouts.admin.layout')
@section('content')
<style type="text/css">
	.red {
		background:red;
	}
	.min-height{
		height:300px;
	}
</style>
<div class="page-content">
    <div class="clearfix"></div>
   	<div class="content ">
        <div class="page-title">
        	<h3> 
        		Credit Details
        	</h3>
        	<hr />
        </div>
        <div class="container-fluid">     
        	<div class="col-lg-12">
    			<div class="row">
    				<div class="col-lg-5">
    					<div class="well red height">
    						<h2>
    							<font color="white">
    								Sold Credit Today
    							</font>
    						</h2>					
    						<hr />
    						<br /> <br />
	    					<center>
	    						<h1>
	    							<font  color="white">
	    								25 Credits
	    							</font>
	    						</h1>
	    					</center>
	    					<br />
    					</div>
    				</div>
    				<div  class="col-lg-7">
    					<div class="well">
    						
    					</div>
    				</div>	
    			</div>
        	</div>                                                                                 
		</div>
    </div>
</div>
@endsection