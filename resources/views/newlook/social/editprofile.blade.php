@extends('layouts.newheader.header')
@section('title', 'Edit Profile')
@section('content')
<style type="text/css">
	.c {
		color:#009900 !important;
	}
</style>
<script type="text/javascript">
	$(document).ready(function(){
		$("#dp").on('mouseover',function(){
			var profilesrc = $("#dp").attr('src');
			$("#dp").attr('src',profilesrc.replace(profilesrc, "{{ asset('images/upload.jpg') }}"));
			var changesrc = $("#dp").attr('src');
			$("#dp").on('mouseout',function(){
				$("#dp").attr('src',changesrc.replace(changesrc, profilesrc));
			});
			$("#dp").on('click',function(){
				$("#dpo").click();
			});
		});

        $("#dpo").on('change',function(){
        	var src = $("#dpo").val();
        	console.log(src);
        	if(src != ''){
        		$("#dpform").submit();
        	} 
        });
	});
</script>
<div class="app-content content">
    <div class="content-wrapper">
      <br />
      <div class="content-body">
	        <div class="col-md-12">
	        	<div class="row">
	        		<div class="col-md-3">
		        		<div class="jumbotron">	
		                      <div class="card" style="border-radius: 55%;">
		                            <center>
		                              <a href="#">
		                              	@if(!empty($cuser->dp))
		                              		<img src="{{ asset('uploads') }}/{{ auth::user()->dp }}" id="dp" height="180px" width="100%" style="border-radius: 50%;" />
		                              	@else 
		                              		<img src="{{asset('images/upload.jpg')}}" id="dp" height="210px" width="100%" style="border-radius: 50%;" />
		                              	@endif
		                              	<form method="post" action="{{route('profileimage.store')}}" enctype="multipart/form-data" id="dpform">
		                              	 {{ csrf_field() }}
		                              	 <input type="file" id="dpo" name="image" style="display: none;" required/>
		                                </form>
		                              </a>
		                            </center>
		                      </div>
		                      <hr />
		                      <h3>{{ ucfirst($cuser->name) }}</h3>
		                      <hr />
		                      <label>Kunnecs  <kbd>1</kbd></label>
		                      <hr />
		                      <label>Membership Level</label>
		        		</div>
	        		</div>
	        		<div class="col-md-6">
		        		<div class="jumbotron">	
							<div id="accordion">
							  <div class="card">
								    <div class="card-header" id="headingOne">
								      <h5 class="mb-0">
								        <button class="btn btn-link c" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								          	<b>
								          		Privacy Settings
								        	</b>
								        </button>
								      </h5>
								    </div>
								    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
								      <div class="card-body">
								         @if(!empty($information))
									        <form action="{{ route('privacysettings.store') }}" method="post">
												{{csrf_field()}}
										        <div class="card-body">
										           <label>Show my timeline feeds to </label>
										           <select class="form-control" name="timeline">
														@if($information->showtimeline == "0")
											           		<option  value="0">Nobody</option>
											           		<option value="1" >Friends only</option>
											           		<option value="2" >Every one</option>
										           		@elseif($information->showtimeline == "1")
											           		<option value="1" >Friends only</option>
											           		<option  value="0">Nobody</option>
											           		<option value="2" >Every one</option>
										           		@else
										           			<option value="2" >Every one</option>
											           		<option value="1" >Friends only</option>
											           		<option  value="0">Nobody</option>
										           		@endif 

										           </select>
										           <hr />
										           <label>Show my phone number to  </label>
										           <select class="form-control" name="phone">
											           	@if($information->showtimeline == "0")
												           		<option  value="0">Nobody</option>
												           		<option value="1" >Friends only</option>
												           		<option value="2" >Every one</option>
											           		@elseif($information->showtimeline == "1")
												           		<option value="1" >Friends only</option>
												           		<option  value="0">Nobody</option>
												           		<option value="2" >Every one</option>
											           		@else
											           			<option value="2" >Every one</option>
												           		<option value="1" >Friends only</option>
												           		<option  value="0">Nobody</option>
											           	    @endif
										           </select> <br />
										           <button type="submit" class="btn btn-danger">Update</button>
										        </div>
										    </form>
									    @else 
									    	<form action="{{ route('privacysettings.store') }}" method="post">
												{{csrf_field()}}
										        <div class="card-body">
										           <label>Show my timeline feeds to </label>
										           <select class="form-control" name="timeline">
										           		<option  value="0">Nobody</option>
										           		<option value="1" >Friends only</option>
										           		<option value="2" >Every one</option>
										           </select>
										           <hr />
										           <label>Show my phone number to  </label>
										           <select class="form-control" name="phone">
										           		<option value="0">Nobody</option>
										           		<option value="1">Friends only</option>
										           		<option value="2">Every one</option>
										           </select> <br />
										           <button type="submit" class="btn btn-success">Save</button>
										        </div>
										    </form>
									    @endif
								      </div>
								    </div>
							  </div>
							  <div class="card">
								    <div class="card-header" id="headingTwo">
								      <h5 class="mb-0">
								        <button class="btn btn-link collapsed c" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								            <b>
								        		Change Password | Add Paypal Email
								      		</b>
								        </button>
								      </h5>
								    </div>
								    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
								      <div class="card-body">
									       <h3>Change Password</h3>
								          <hr />
								          <label>Current Password</label>
								          <input type="text" class="form-control" name="cpassword" />
								          <div class="row">
								          		<div class="col-md-6">
								          			<label>New Password</label>
								          			<input type="text" class="form-control" name="npassword" />
								          		</div>
								          		<div class="col-md-6">
								          			<label>Repeat New Password</label>
								          			<input type="text" class="form-control" name="rpassword" />
								          		</div>
								          		<div class="col-md-12" style="margin-top: 5px;">
								          			<button class="btn btn-success">Change Password</button>
								          		</div>
								          </div>
								      </div>
								    </div>
							  </div>
							  <div class="card">
								    <div class="card-header" id="headingThree">
								      <h5 class="mb-0">
								        <button class="btn btn-link collapsed c" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								           <b>
								        	  Add Your Social Links
								        	</b>
								        </button>
								      </h5>
								    </div>
								    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
								      <div class="card-body">
								        @if(!empty($social))					        
									        <div class="card-body">
									          <form action="{{ route('socialmedia.update', Auth::id()) }}" method="post">
										          	 {{method_field('PUT')}}
										          	 {{csrf_field()}}
										                <div class="col-md-10">
										                    <label for="full name">
										                    	Your Website
										                    </label>
										                    <input type="url" value="{{ $social->website }}" class="form-control" name="website" />
										                </div><!-- /.col-lg-6 -->
										                <div class="col-md-10">
										                    <label for="full name">
										                    	<i class="fa fa-facebook"></i> - Facebook
										                    </label>
										                    <input type="url" value="{{ $social->facebook }}" class="form-control" name="facebook" required/>
										                </div><!-- /.col-lg-6 -->
										                <div class="col-md-10">
										                    <label for="full name"><i class="fa fa-instagram"></i> - Instagram</label>
										                    <input type="url" class="form-control" value="{{ $social->instagram }}" name="instagram" />
										                </div><!-- /.col-lg-6 -->
										                <div class="col-md-10">
										                    <label for="full name"><i class="fa fa-twitter"></i> - Twitter</label>
										                    <input type="url" value="{{ $social->twitter }}" class="form-control" name="twitter" />
										                </div><!-- /.col-lg-6 -->
										                <div class="col-md-10">
										                    <label for="full name"><i class="fa fa-youtube"></i> - Youtube</label>
										                    <input type="url" value="{{ $social->youtube }}" class="form-control" name="youtube" />
										                </div><!-- /.col-lg-6 -->
										                <div class="col-md-10">
										                    <label for="full name"><i class="fa fa-soundcloud"></i> - Soundcloud</label>
										                    <input type="url" value="{{ $social->soundcloud }}" class="form-control" name="soundcloud" />
										                </div><!-- /.col-lg-6 -->
										                <div class="col-md-10">
										                    <label for="full name"><i class="fa fa-github"></i> - Github</label>
										                    <input type="url" class="form-control" value="{{ $social->github }}"  name="github" />
										                </div><!-- /.col-lg-6 -->
										                <div class="col-md-10">
										                    <label for="full name">
										                    	<i class="fa fa-google-plus"></i> - Google Plus
										                    </label>
										                    <input type="url" class="form-control" value="{{ $social->gplus }}"  name="gplus" />
										                </div><!-- /.col-lg-6 -->
										                <div class="col-md-10">
										                    <label for="full name"><i class="fa fa-tumblr"></i> - Tumblr</label>
										                    <input type="url" value="{{ $social->tumblr }}" class="form-control" name="tumblr" />
										                </div><!-- /.col-lg-6 -->
										                <div class="col-md-10">
										                    <label for="full name"><i class="fa fa-whatsapp"></i> - Whatsapp</label>
										                    <input type="text" value="{{ $social->whatsapp }}" class="form-control" name="whatsapp" />
										                </div><!-- /.col-lg-6 -->
										                <div class="col-md-10">
										                    <label for="full name"><i class="fa fa-pinterest"></i> - Pinterest</label>
										                    <input type="url" value="{{ $social->pintrest }}" class="form-control" name="pintrest" />
										                </div><!-- /.col-lg-6 -->
									                  	<div class="col-md-10">
										                    <label for="full name">
										                    	<i class="fa fa-linkedin"></i> - LinkedIn
										                    </label>
										                    <input type="url" value="{{ $social->linkdn }}" class="form-control" name="linkedn" />
										                </div><!-- /.col-lg-6 -->
										                <div class="col-md-10">
										                    <label for="full name">
										                    	<i class="fa fa-reddit"></i> - Reddit
										                    </label>
										                    <input type="url" value="{{ $social->reddit }}" class="form-control" name="reddit" />
										                </div><!-- /.col-lg-6 -->
										                <div class="col-md-10" style="margin-top: 5px;">
										                	<button type="submit" class="btn btn-danger">Update</button>
										                </div>
									           </form>
									        </div>
									    @else
									    	<div class="card-body">
									          <form action="{{ route('socialmedia.store') }}" method="post">
									          	{{csrf_field()}}
									                <div class="col-md-10">
									                    <label for="full name">Your Website</label>
									                    <input type="url" class="form-control" name="website" />
									                </div><!-- /.col-lg-6 -->
									            
									                <div class="col-md-10">
									                    <label for="full name"><i class="fa fa-facebook"></i> - Facebook</label>
									                    <input type="url" class="form-control" name="facebook" required/>
									                </div><!-- /.col-lg-6 -->
									   
									                <div class="col-md-10">
									                    <label for="full name"><i class="fa fa-instagram"></i> - Instagram</label>
									                    <input type="url" class="form-control" name="instagram" />
									                </div><!-- /.col-lg-6 -->

									                <div class="col-md-10">
									                    <label for="full name"><i class="fa fa-twitter"></i> - Twitter</label>
									                    <input type="url" class="form-control" name="twitter" />
									                </div><!-- /.col-lg-6 -->

									               <div class="col-md-10">
									                    <label for="full name"><i class="fa fa-youtube"></i> - Youtube</label>
									                    <input type="url"  class="form-control" name="youtube" />
									               </div><!-- /.col-lg-6 -->

									              
									                <div class="col-md-10">
									                    <label for="full name"><i class="fa fa-soundcloud"></i> - Soundcloud</label>
									                    <input type="url"  class="form-control" name="soundcloud" />
									                </div><!-- /.col-lg-6 -->

									                <div class="col-md-10">
									                    <label for="full name"><i class="fa fa-github"></i> - Github</label>
									                    <input type="url" class="form-control"  name="github" />
									                </div><!-- /.col-lg-6 -->

									                <div class="col-md-10">
									                    <label for="full name">
									                    	<i class="fa fa-google-plus"></i> - Google Plus
									                    </label>
									                    <input type="url" class="form-control"  name="gplus" />
									                </div><!-- /.col-lg-6 -->

									                <div class="col-md-10">
									                    <label for="full name">
									                    	<i class="fa fa-tumblr"></i> - Tumblr
									                    </label>
									                    <input type="url" class="form-control" name="tumblr" />
									                </div><!-- /.col-lg-6 -->

									                <div class="col-md-10">
									                    <label for="full name">
									                    	<i class="fa fa-whatsapp"></i> - Whatsapp
									                    </label>
									                    <input type="text" class="form-control" name="whatsapp" />
									                </div><!-- /.col-lg-6 -->

									                <div class="col-md-10">
									                    <label for="full name"><i class="fa fa-pinterest"></i> - Pinterest</label>
									                    <input type="url" class="form-control" name="pintrest" />
									                </div><!-- /.col-lg-6 -->

								                  	<div class="col-md-10">
									                    <label for="full name"><i class="fa fa-linkedin"></i> - LinkedIn</label>
									                    <input type="url" class="form-control" name="linkedn" />
									                </div><!-- /.col-lg-6 -->

									                <div class="col-md-10">
									                    <label for="full name"><i class="fa fa-reddit"></i> - Reddit</label>
									                    <input type="url" class="form-control" name="reddit" />
									                </div><!-- /.col-lg-6 -->
									                <div class="col-md-10" style="margin-top: 5px;">
									                	<button type="submit" class="btn btn-success">Save Links</button>
									                </div>
									                
									           </form>
									        </div>
									    @endif 
								      </div>
								    </div>
							  </div>
							   <div class="card">
								  <div class="card-header">
								    <a class="collapsed card-link c" data-toggle="collapse" href="#collapseThree22">
								      <b>
								      	Upgrade or Delete Account
								      </b>
								    </a>
								  </div>
								  <div id="collapseThree22" class="collapse" data-parent="#accordion">
								    <div class="card-body">
								      Upgrade Account
								      <hr />
								      <label>Current Account</label>
								      <input type="text" class="form-control" name="caccount" />
								      <div class="row">
								      	 <div class="col-md-6">
								      	 	<label>New Account Selection</label>
								      	 	<input type="text" class="form-control" name="npwd" />
								      	 </div>
								      	 <div class="col-md-6">
								      	 	<br />
								      	 	<button style="margin-top:5px;" class="btn btn-success">Upgrade Account</button>
								      	 </div>
								      </div>
								        <br />
								            <div class="card">
										      <div class="card-header">
										        <a class="collapsed card-link c" data-toggle="collapse" href="#collapseThree25">
										          <b> Delete </b>
										        </a>
										      </div>
										      <div id="collapseThree25" class="collapse" data-parent="#accordion">
										        <div class="card-body">
										           <button class="btn btn-danger">Delete</button>
										        </div>
										    </div>
									    </div>
								    </div>
								  </div>
								</div>
							</div>
		        		</div>
		        	</div>
		        	<div class="col-md-3">
		        		<div class="jumbotron">	
		        		</div>
		        	</div>
	        	</div>
	        </div>
      </div>
    </div>
</div>
@endsection