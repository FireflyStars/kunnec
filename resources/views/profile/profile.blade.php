@extends('layouts.hf')
@section('title', 'Profile || Kunnec.com ')
@section('content')
<style type="text/css">
	.card, .card-header, .card-body {
		border-radius: 0px;
	}
	.checked {
		color:#FFA500 !important;
	}
	.fa {
	  padding:5px;
	  font-size:20px;
	  width:30px;
	  text-align: center;
	  text-decoration: none;
	  margin: 5px 2px;
	  border-radius:50%;
	}
	.fa:hover {
	    opacity: 0.7;
	}
	.fa-facebook {
	  background: #3B5998;
	  color: white;
	}

	.fa-twitter {
	  background: #55ACEE;
	  color: white;
	}

	.fa-google {
	  background: #dd4b39;
	  color: white;
	}

	.fa-linkedin {
	  background: #007bb5;
	  color: white;
	}

	.fa-youtube {
	  background: #bb0000;
	  color: white;
	}
	.fa-instagram {
	  background: #125688;
	  color: white;
	}
	.wrapper {
		width:100% !important;
	}
</style>
<div class="container-fluid">
	<div class="row" style="padding:5px !important;">
		<div class="col-lg-8 col-md-8 col-sm-8">
			<div style="background-image:url('{{ asset('images/check.jpg') }}'); width:100%; height:300px !important; margin-top:-6px;">
				<div class="container">
					 <img src="http://localhost:8000/uploads/1551985956.30bJdwFK_400x400.jpg" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:65px; margin-left:1%;"> <br />
					 <label>
					  	<font color="white">
					  		<b> Asad Mukhtar </b>
					  	</font>
					</label>
				</div>
			</div> <br />
			<div class="card">
				<div class="card-header">
					<b>Description</b>
				</div>
				<div class="card-body">
					We all know how hard it can be to make a site look like the demo, so to make your start into the world of X as easy as possible we have included the demo content from our showcase site. Simply import the sample files we ship with the theme and the core structure for your site is already built. Keep in mind that even if you don’t use the demo content, you’ll be much better off than with most other themes since all of the customization options are done right from within the WordPress Customizer making it super easy to configure your site as compared to most of the typical admin panels. You will be pleasantly surprised how easy it is to setup and configure your site with X – with or without the demo content.
				</div>
			</div> <br />
		  	<!-- portfolio -->
            <div  class="card">
              <div class="card-header">
                  <b> Portfolio </b>
              </div>
              <div class="card-body">
                <img src="{{ asset('images/1533668440.sdfsdg.jpg') }}" height="230"  width="200" class="img-thumbnail">
                <img src="{{ asset('images/1533668440.sdfsdg.jpg') }}" height="230"  width="200" class="img-thumbnail">
                <img src="{{ asset('images/1533668440.sdfsdg.jpg') }}" height="230"  width="200" class="img-thumbnail">
                <img src="{{ asset('images/1533668440.sdfsdg.jpg') }}" height="230"  width="200" class="img-thumbnail">
                <img src="{{ asset('images/1533668440.sdfsdg.jpg') }}" height="230"  width="200" class="img-thumbnail">
                <img src="{{ asset('images/1533668440.sdfsdg.jpg') }}" height="230"  width="200" class="img-thumbnail">
                <img src="{{ asset('images/1533668440.sdfsdg.jpg') }}" height="230"  width="200" class="img-thumbnail">
                <img src="{{ asset('images/1533668440.sdfsdg.jpg') }}" height="230"  width="200" class="img-thumbnail">
                <img src="{{ asset('images/1533668440.sdfsdg.jpg') }}" height="230"  width="200" class="img-thumbnail">
                <img src="{{ asset('images/1533668440.sdfsdg.jpg') }}" height="230"  width="200" class="img-thumbnail">
                <img src="{{ asset('images/1533668440.sdfsdg.jpg') }}" height="230"  width="200" class="img-thumbnail">
                <img src="{{ asset('images/1533668440.sdfsdg.jpg') }}" height="230"  width="200" class="img-thumbnail">
              </div>
            </div>
            <!-- Portfolio -->
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4">
			<div>
				<div class="card">
					<div class="card-body">
						<span class="heading">Asad Mukhtar</span> <br />
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<p>4.1 average based on 254 reviews.</p>
					</div>
				</div>
			</div>
			<br />
			<div>
				<div class="card">
					<div class="card-header">
						<b> Social Icons </b>
					</div>
					<div class="card-body">
						<a href="#" class="fa fa-facebook"></a>
						<a href="#" class="fa fa-twitter"></a>
						<a href="#" class="fa fa-google"></a>
						<a href="#" class="fa fa-linkedin"></a>
						<a href="#" class="fa fa-youtube"></a>
						<a href="#" class="fa fa-instagram"></a>
					</div>
				</div>
			</div> <br />
			<div>
				<div class="card">
					<div class="card-header">
						<b> Contact </b>
					</div>
					<div class="card-body" style="font-size:12px;">
						<div class="row">
							<div class="col-sm-6">
								<i class="fa fa-phone"></i> 03374969039
							</div>
							<div class="col-sm-6">
								<i class="fa fa-envelope"></i>  axad03213@gmail.com
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<i class="fa fa-globe"></i>  asadmukhtar.com
							</div>
							<div class="col-sm-6">
								<i class="fa fa-comments-o"></i> Hey! kunnec I am here
							</div>
						</div>
					</div>
				</div>
			</div>	
			<br />
			<div>
				<div class="card">
					<div class="card-header">
						<b> Weekly Schedule </b>
					</div>
					<div class="card-body">
						<ul class="list-group">
						  <li class="list-group-item"> <b> Monday: </b> 9:00am - 5:00am</li>
						  <li class="list-group-item"> <b> Tuesday: </b> 9:00am - 5:00am</li>
						  <li class="list-group-item"> <b> Wednesday: </b> leo risus</li>
						  <li class="list-group-item"> <b> Thursday: </b> 9:00am - 5:00am</li>
						  <li class="list-group-item"> <b> Friday: </b> 9:00am - 5:00am</li>
						  <li class="list-group-item"> <b> Saturday: </b> 9:00am - 5:00am</li>
						  <li class="list-group-item"> <b> Sunday: </b> Holiday</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection