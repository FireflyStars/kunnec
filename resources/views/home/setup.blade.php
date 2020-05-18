@extends('layouts.header')
@section('content')
<style type="text/css">
	.card{
		margin-bottom:0px !important;
	}
</style>
<div class="app-content content">
    <div class="content-wrapper">
      <br />
      <div class="content-body">
      	   <h2>
      	   		<img src="{{ asset('images/tools.png') }}" height="50" width="50" />
      	   		Select Your Kunnec Option
      	   	</h2>
      		<div class="card">
		      <div class="card-header">
		        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
		        	<img src="{{ asset('images/2me.png') }}" height="30" width="30">
		        	<font size="+1"> Kunnec to me </font>
		        </a>
		      </div>
		      <div id="collapseTwo" class="collapse" data-parent="#accordion">
			        <div class="card-body">
				        <div class="row">
					        <div class="col-md-4">
					           	<label>Choose category</label>
					           	<input type="text" class="form-control" name="">
					        </div> 
					        <div class="col-md-3">
					           	<label>Choose Compensation</label>
					           	<input type="text" class="form-control" name="">
					        </div>   		
					        <div class="col-md-5">
					        	<br />
					        	<label>Add Social Media Links from Account Settings:</label>
					        	Yes <input type="radio" name="link" />
					        	No  <input type="radio" name="link" />
					        </div>
				        </div>
				        <div class="row">
					        <div class="col-md-12">
					        	<label>Tite :</label>
					        	<input type="text" class="form-control" name="title" />
					        </div>
				        </div>
				        <div class="row">
				        	<div class="col-md-12">
					        	<label>About</label>
					        	<textarea class="form-control" cols="20" rows="8" style="resize: none;">
					        	</textarea>
					        </div>
				        </div>
				        <div class="row">
				        	<div class="col-md-12">
				        		<label>Contact Email :</label>
				        		<input type="text" class="form-control" name="email" />
				        	</div>
				        </div> <br />
				        <div class="row">
				        	<div class="col-md-12">
				        		 <button class="btn btn-success">
				        		 	Post
				        		 </button>
				        	</div>
				        </div>
			        </div>
		      </div>
		    </div>
		    <div class="card">
		      <div class="card-header">
		        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
		          <img src="{{ asset('images/2u.png') }}" height="30" width="30" /> 
				  <font size="+1">
		             Kunnec to You
		          </font>
		        </a>
		      </div>
		      <div id="collapseThree" class="collapse" data-parent="#accordion">
		        <div class="card-body">
		          	<div class="row">
				        <div class="col-md-4">
				           	<label>Choose category</label>
				           	<input type="text" class="form-control" name="">
				        </div> 
				        <div class="col-md-3">
				           	<label>Choose Compensation</label>
				           	<input type="text" class="form-control" name="">
				        </div>   		
				        <div class="col-md-5">
				        	<br />
				        	<label>Add Social Media Links from Account Settings:</label>
				        	Yes <input type="radio" name="link" />
				        	No  <input type="radio" name="link" />
				        </div>
			        </div>
			        <div class="row">
				        <div class="col-md-12">
				        	<label>Tite :</label>
				        	<input type="text" class="form-control" name="title" />
				        </div>
			        </div>
			        <div class="row">
			        	<div class="col-md-12">
				        	<label>About</label>
				        	<textarea class="form-control" cols="20" rows="8" style="resize: none;">
				        	</textarea>
				        </div>
			        </div>
			        <div class="row">
			        	<div class="col-md-12">
			        		<label>Contact Email :</label>
			        		<input type="text" class="form-control" name="email" />
			        	</div>
			        </div> <br />
			        <div class="row">
			        	<div class="col-md-12">
			        		 <button class="btn btn-success">
			        		 	Post
			        		 </button>
			        	</div>
			        </div>
		        </div>
		      </div>
		    </div>
		    <div class="card">
		      <div class="card-header">
		        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
		          <img src="{{ asset('images/cart.png') }}" height="30" width="30" /> 
		          <font size="+1">
		          	 Kunnec Shop
		          </font>
		        </a>
		      </div>
		      <div id="collapseThree" class="collapse" data-parent="#accordion">
		        <div class="card-body">
		          	<div class="row">
				        <div class="col-md-4">
				           	<label>Choose category</label>
				           	<input type="text" class="form-control" name="">
				        </div> 
				        <div class="col-md-3">
				           	<label>Choose Compensation</label>
				           	<input type="text" class="form-control" name="">
				        </div>   		
				        <div class="col-md-5">
				        	<br />
				        	<label>Add Social Media Links from Account Settings:</label>
				        	Yes <input type="radio" name="link" />
				        	No  <input type="radio" name="link" />
				        </div>
			        </div>
			        <div class="row">
				        <div class="col-md-12">
				        	<label>Tite :</label>
				        	<input type="text" class="form-control" name="title" />
				        </div>
			        </div>
			        <div class="row">
			        	<div class="col-md-12">
				        	<label>About</label>
				        	<textarea class="form-control" cols="20" rows="8" style="resize: none;">
				        	</textarea>
				        </div>
			        </div>
			        <div class="row">
			        	<div class="col-md-12">
			        		<label>Contact Email :</label>
			        		<input type="text" class="form-control" name="email" />
			        	</div>
			        </div> <br />
			        <div class="row">
			        	<div class="col-md-12">
			        		 <button class="btn btn-success">
			        		 	Post
			        		 </button>
			        	</div>
			        </div>
		        </div>
		      </div>
		    </div>
		    <div class="card">
		      <div class="card-header">
		        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
		          <img src="{{ asset('images/books.png') }}" height="30" width="30" /> 
		          <font size="+1">
		          	 Kunnec books
		          </font>
		        </a>
		      </div>
		      <div id="collapseThree" class="collapse" data-parent="#accordion">
		        <div class="card-body">
		          	<div class="row">
				        <div class="col-md-4">
				           	<label>Choose category</label>
				           	<input type="text" class="form-control" name="">
				        </div> 
				        <div class="col-md-3">
				           	<label>Choose Compensation</label>
				           	<input type="text" class="form-control" name="">
				        </div>   		
				        <div class="col-md-5">
				        	<br />
				        	<label>Add Social Media Links from Account Settings:</label>
				        	Yes <input type="radio" name="link" />
				        	No  <input type="radio" name="link" />
				        </div>
			        </div>
			        <div class="row">
				        <div class="col-md-12">
				        	<label>Tite :</label>
				        	<input type="text" class="form-control" name="title" />
				        </div>
			        </div>
			        <div class="row">
			        	<div class="col-md-12">
				        	<label>About</label>
				        	<textarea class="form-control" cols="20" rows="8" style="resize: none;">
				        	</textarea>
				        </div>
			        </div>
			        <div class="row">
			        	<div class="col-md-12">
			        		<label>Contact Email :</label>
			        		<input type="text" class="form-control" name="email" />
			        	</div>
			        </div> <br />
			        <div class="row">
			        	<div class="col-md-12">
			        		 <button class="btn btn-success">
			        		 	Post
			        		 </button>
			        	</div>
			        </div>
		        </div>
		      </div>
		    </div>
		    <div class="card">
		      <div class="card-header">
		        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
		          <img src="{{ asset('images/sytream.png') }}" height="30" width="30" /> 
		          	<font size="+1">
		          		Kunnec Stream
		            </font>
		        </a>
		      </div>
		      <div id="collapseThree" class="collapse" data-parent="#accordion">
		        <div class="card-body">
		          	<div class="row">
				        <div class="col-md-4">
				           	<label>Choose category</label>
				           	<input type="text" class="form-control" name="">
				        </div> 
				        <div class="col-md-3">
				           	<label>Choose Compensation</label>
				           	<input type="text" class="form-control" name="">
				        </div>   		
				        <div class="col-md-5">
				        	<br />
				        	<label>Add Social Media Links from Account Settings:</label>
				        	Yes <input type="radio" name="link" />
				        	No  <input type="radio" name="link" />
				        </div>
			        </div>
			        <div class="row">
				        <div class="col-md-12">
				        	<label>Tite :</label>
				        	<input type="text" class="form-control" name="title" />
				        </div>
			        </div>
			        <div class="row">
			        	<div class="col-md-12">
				        	<label>About</label>
				        	<textarea class="form-control" cols="20" rows="8" style="resize: none;">
				        	</textarea>
				        </div>
			        </div>
			        <div class="row">
			        	<div class="col-md-12">
			        		<label>Contact Email :</label>
			        		<input type="text" class="form-control" name="email" />
			        	</div>
			        </div> <br />
			        <div class="row">
			        	<div class="col-md-12">
			        		 <button class="btn btn-success">
			        		 	Post
			        		 </button>
			        	</div>
			        </div>
		        </div>
		      </div>
		    </div>
		    <div class="card">
		      <div class="card-header">
		        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
		          <img src="{{ asset('images/tuts.png') }}" height="30" width="30" />
		          <font size="+1">
		          	Kunnec Tuts
		          </font>
		        </a>
		      </div>
		      <div id="collapseThree" class="collapse" data-parent="#accordion">
		        <div class="card-body">
		          	<div class="row">
				        <div class="col-md-4">
				           	<label>Choose category</label>
				           	<input type="text" class="form-control" name="">
				        </div> 
				        <div class="col-md-3">
				           	<label>Choose Compensation</label>
				           	<input type="text" class="form-control" name="">
				        </div>   		
				        <div class="col-md-5">
				        	<br />
				        	<label>Add Social Media Links from Account Settings:</label>
				        	Yes <input type="radio" name="link" />
				        	No  <input type="radio" name="link" />
				        </div>
			        </div>
			        <div class="row">
				        <div class="col-md-12">
				        	<label>Tite :</label>
				        	<input type="text" class="form-control" name="title" />
				        </div>
			        </div>
			        <div class="row">
			        	<div class="col-md-12">
				        	<label>About</label>
				        	<textarea class="form-control" cols="20" rows="8" style="resize: none;">
				        	</textarea>
				        </div>
			        </div>
			        <div class="row">
			        	<div class="col-md-12">
			        		<label>Contact Email :</label>
			        		<input type="text" class="form-control" name="email" />
			        	</div>
			        </div> <br />
			        <div class="row">
			        	<div class="col-md-12">
			        		 <button class="btn btn-success">
			        		 	Post
			        		 </button>
			        	</div>
			        </div>
		        </div>
		      </div>
		    </div>
		    <div class="card">
		      <div class="card-header">
		        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
		          <img src="{{ asset('images/teach.png') }}" height="30" width="30" />
		          <font size="+1">
		          	Kunnec Tutors
		          </font>
		        </a>
		      </div>
		      <div id="collapseThree" class="collapse" data-parent="#accordion">
		        <div class="card-body">
		          	<div class="row">
				        <div class="col-md-4">
				           	<label>Choose category</label>
				           	<input type="text" class="form-control" name="">
				        </div> 
				        <div class="col-md-3">
				           	<label>Choose Compensation</label>
				           	<input type="text" class="form-control" name="">
				        </div>   		
				        <div class="col-md-5">
				        	<br />
				        	<label>Add Social Media Links from Account Settings:</label>
				        	Yes <input type="radio" name="link" />
				        	No  <input type="radio" name="link" />
				        </div>
			        </div>
			        <div class="row">
				        <div class="col-md-12">
				        	<label>Tite :</label>
				        	<input type="text" class="form-control" name="title" />
				        </div>
			        </div>
			        <div class="row">
			        	<div class="col-md-12">
				        	<label>About</label>
				        	<textarea class="form-control" cols="20" rows="8" style="resize: none;">
				        	</textarea>
				        </div>
			        </div>
			        <div class="row">
			        	<div class="col-md-12">
			        		<label>Contact Email :</label>
			        		<input type="text" class="form-control" name="email" />
			        	</div>
			        </div> <br />
			        <div class="row">
			        	<div class="col-md-12">
			        		 <button class="btn btn-success">
			        		 	Post
			        		 </button>
			        	</div>
			        </div>
		        </div>
		      </div>
		    </div>
		    <div class="card">
		      <div class="card-header">
		        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
		          <img src="{{ asset('images/show.png') }}" height="30" width="30" /> 
		          <font size="+1">  
		            Kunnec Show
		          </font>
		        </a>
		      </div>
		      <div id="collapseThree" class="collapse" data-parent="#accordion">
		        <div class="card-body">
		          	<div class="row">
				        <div class="col-md-4">
				           	<label>Choose category</label>
				           	<input type="text" class="form-control" name="">
				        </div> 
				        <div class="col-md-3">
				           	<label>Choose Compensation</label>
				           	<input type="text" class="form-control" name="">
				        </div>   		
				        <div class="col-md-5">
				        	<br />
				        	<label>Add Social Media Links from Account Settings:</label>
				        	Yes <input type="radio" name="link" />
				        	No  <input type="radio" name="link" />
				        </div>
			        </div>
			        <div class="row">
				        <div class="col-md-12">
				        	<label>Tite :</label>
				        	<input type="text" class="form-control" name="title" />
				        </div>
			        </div>
			        <div class="row">
			        	<div class="col-md-12">
				        	<label>About</label>
				        	<textarea class="form-control" cols="20" rows="8" style="resize: none;">
				        	</textarea>
				        </div>
			        </div>
			        <div class="row">
			        	<div class="col-md-12">
			        		<label>Contact Email :</label>
			        		<input type="text" class="form-control" name="email" />
			        	</div>
			        </div> <br />
			        <div class="row">
			        	<div class="col-md-12">
			        		 <button class="btn btn-success">
			        		 	Post
			        		 </button>
			        	</div>
			        </div>
		        </div>
		      </div>
		    </div>
      </div>
    </div>
</div>
@endsection