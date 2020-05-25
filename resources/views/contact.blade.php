@extends('layouts.hf')
@section('title', 'Contact || Kunnec ')
@section('content')
<div class="container">
	<br />
	<h1>
		<font color="blue"> 
			Contact & Suggestions 
		</font> 
	</h1>
	<hr />
	<div class="row">
		<div class="col-sm-6">
    		<iframe width="100%" height="320px;" frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3225.699812622265!2d-115.17373538484858!3d36.05203141715413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c8cf449b9a754d%3A0xc4fee64cb0ecbf31!2s7582+S+Las+Vegas+Blvd+%23554%2C+Las+Vegas%2C+NV+89123!5e0!3m2!1sen!2sus!4v1527300055320" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    	</div>
    </div>
	<div class="col-sm-6">	
		<form action="form.php" class="contact-form" method="post">
	        <div class="form-group">
	          <input type="text" class="form-control" id="name" name="nm" placeholder="Name" required="" autofocus="">
	        </div> 	
	        <div class="form-group form_left">
	          <inpcut type="email" class="form-control" id="email" name="em" placeholder="Email" required="">
	        </div>
	      <div class="form-group">
               <select class="form-control" id="con_opt">
				<option>**  Please Select an Option  **</option>
				  <option>Billing</option>
				  <option>Suggestions</option>
				  <option>Account Problems</option>
				  <option>Investigate an User</option>
				</select>
	      </div>
	      <div class="form-group">
	      <textarea class="form-control textarea-contact" rows="5" id="comment" name="FB" placeholder="Type Your Message/Feedback here..." required=""></textarea>
	      <br>
      	  <button class="btn btn-default btn-send"> <span class="fa fa-send-o"></span> Send </button>
	      </div>
 		</form>
	</div>
	</div>
</div>
<div class="container second-portion">
	<div class="row">
        <!-- Boxes de Acoes -->
    	<div class="col-xs-12 col-sm-6 col-lg-4">
			<div class="box">							
				<div class="icon">
					<div class="image"><i class="fa fa-envelope" aria-hidden="true"></i></div>
					<div class="info">
						<h3 class="title">MAIL & WEBSITE</h3>
						<p>
							<i class="fa fa-envelope" aria-hidden="true"></i> &nbsp contact@kunnec.com
							<br>
							<br>
							<i class="fa fa-globe" aria-hidden="true"></i> &nbsp www.kunnec.com
						</p>
					
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div>
        <div class="col-xs-12 col-sm-6 col-lg-4">
			<div class="box">							
				<div class="icon">
					<div class="image"><i class="fa fa-mobile" aria-hidden="true"></i></div>
					<div class="info">
						<h3 class="title">CONTACT</h3>
    					<p>
							<i class="fa fa-mobile" aria-hidden="true"></i> &nbsp 1-(702)-860-6218
						</p>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div>
        <div class="col-xs-12 col-sm-6 col-lg-4">
			<div class="box">							
				<div class="icon">
					<div class="image"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
					<div class="info">
						<h3 class="title">ADDRESS</h3>
    					<p>
							 <i class="fa fa-map-marker" aria-hidden="true"></i> 
							 &nbsp 7582 S Las Vegas Blvd #554
							, Las Vegas, NV 89123
						</p>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div>		    
		<!-- /Boxes de Acoes -->
		<!--My Portfolio  dont Copy this -->  
	</div>
</div>
@endsection