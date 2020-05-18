@extends('layouts.header')
@section('content')
<script type="text/javascript">
	// writting jquery code ..
	$(document).ready(function(){
		// its hidding file ..
		$("#upp").on("click",function(){
			$("#upload").toggle();
		});
	});
</script>
<div class="app-content content">
    <div class="content-wrapper">
      <br />
        <div class="content-body">
	        <div class="col-md-12">
	        	<div class="row">
	        		<div class="col-md-6">
	        			<div class="card">
							 <div class="card-header">
							        <div>
							          <button class="btn btn-default btn-lg" onclick="openCity('London')">
							           <i class="fa fa-edit"></i> Update Status
							          </button>
							          <button class="btn btn-default btn-lg" id="upp">
							           <i class="fa fa-file-image-o"></i> Upload photos
							          </button>
							        </div>
							  </div>
							  <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
							  	    {{ csrf_field() }}
							        <div id="upload" style="display: none;">
							                      <input type="file"  name="up" />
							                      <hr />
							                    </div>  
							                  <textarea class="form-control" name="description" rows="5" cols="10" style="resize: none;">
							                  </textarea>
							        <div class="card-footer">
							          	 <button type="submit" class="btn btn-info">Post</button>
							        </div>
							  </form>
						</div>
							@foreach($post as $posts)
							       <!-- Text post demo  -->
							       <div class="card">            	  
										@php
											$user_id = Auth::user()->id;
										@endphp
							           	<div class="card-header">
							           		<div class="row">
							           			<div class="col-md-3">
							           				@foreach($users as $user)
								               	  		@if($user->id == $user_id)
								               	  			<label>
								               	  				<b>
								               	  					<font size="+1" color="#007bff">
								               	  				 	  {{ ucfirst($user->name) }}
								               	  					</font>
								               	  				</b>
								               	  			</label>
								               	  		@endif
								               	  	@endforeach
							           			</div>
							           			<div class="col-md-9">
							           				@if($user_id == $posts->user_id)
									               	  	<form action="{{route('post.destroy',$posts->id)}}" method="post">
									               	  		{{method_field('DELETE')}}
							                      			{{ csrf_field() }}
										               	  	<button class="btn btn-danger float-right"><i class="fa fa-trash"></i> 	  Delete
										               	  	</button>
										               	</form>
								               		@endif
							           			</div>
							           		</div>  	 	
							           	</div>
							       	    <div class="card-body">
							           	  	<p>
							           	  	 	<font size="+2">
							           	  	 		{{ ucfirst($posts->description) }}
							           	  		</font> 
							           	  	</p>
							           	  	@if(!empty($posts->photo))
							               	  	@php
							               	  	  $postimage = $posts->photo;
							               	  	@endphp
							               	  	<img class="img-fluid" src="uploads/{{ $postimage }}"
							                        alt="Timeline Image 1" />
							                @endif    
											<hr />
							           	  	<ul class="list-inline">
							                  <li class="pr-1">
							                    <a href="#" class="">
							                      <span class="fa fa-thumbs-o-up"></span> Like</a>
							                  </li>
							                  <li class="pr-1">
							                    <a href="#" class="">
							                      <span class="fa fa-commenting-o"></span> Comment</a>
							                  </li>
							                  <li>
							                    <a href="#" class="">
							                      <span class="fa fa-share-alt"></span> Share
							                    </a>
							                  </li>
							                </ul>
							       	    </div>
								        <div class="card-footer">
								       	  	   <div class="card-body">
								                        <div class="media">
								                              <div class="media-left mr-1">
									                                <a href="#">
									                                  <span class="avatar avatar-online">
									                                    <img src="app-assets/images/portrait/small/avatar-s-1.png" alt="avatar">
									                                  </span>
									                                </a>
								                              </div>
								                              <div class="media-body">
									                                <p class="text-bold-600 mb-0"><a href="#">Jason Ansley</a></p>
									                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel
									                                  metus scelerisque ante sollicitudin commodo.</p>
									                                <ul class="list-inline">
									                                  <li class="pr-1">
									                                    <a href="#" class="">
									                                      <span class="fa fa-thumbs-o-up"></span> Like</a>
									                                  </li>
									                                  <li class="pr-1">
									                                    <a href="#" class="">
									                                      <span class="fa fa-commenting-o"></span> Reply</a>
									                                  </li>
									                                </ul>
									                                <div class="media">
									                                  <div class="media-left mr-1">
									                                    <a href="#">
									                                      <span class="avatar avatar-online">
									                                        <img src="app-assets/images/portrait/small/avatar-s-18.png" alt="avatar">
									                                      </span>
									                                    </a>
									                                  </div>
									                                  <div class="media-body">
									                                    <p class="text-bold-600 mb-0"><a href="#">Janice Johnston</a></p>
									                                    <p>Gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</p>
									                                    <ul class="list-inline">
									                                      <li class="pr-1">
									                                        <a href="#" class="">
									                                          <span class="fa fa-thumbs-o-up"></span> Like</a>
									                                      </li>
									                                      <li class="pr-1">
									                                        <a href="#" class="">
									                                          <span class="fa fa-commenting-o"></span> Reply</a>
									                                      </li>
									                                    </ul>
									                                  </div>
									                                </div>
									                                <hr />
								                              </div>
								                        </div>
								                        <div class="card-body">
								                            <fieldset class="form-group position-relative has-icon-left mb-0">
								                              <input type="text" class="form-control" placeholder="Write comments...">
								                              <div class="form-control-position">
								                                <i class="fa fa-dashcube"></i>
								                              </div>
								                            </fieldset>
								                        </div>
								                </div>
								       	</div>
							       </div>
							       <!-- End text post demo  -->
							@endforeach
	        		</div>
	        		<div class="col-md-3">
	        			<div class="jumbotron">
	        				Thats for alert
	        			</div>
	        		</div>
	        		<div class="col-md-3">
	        			<div class="card"></div>
	        		</div>
	        	</div>
	        </div>
	    </div>
	</div>
</div>
@endsection