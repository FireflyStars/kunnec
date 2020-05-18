@extends('layouts.hf')
@section('title', 'Kunnec To Me || Kunnec ')
@section('content')
<div class="container" style="margin-top:10px;">
	<div class="row">
		<br />
		<div class="col-lg-8 col-md-8 col-sm-8">
			<div class="card">
				<div class="card-header" style="background: none;">
					<h4> 
						<font color="#000000">
							<i class="fa fa-info-circle" aria-hidden="true"></i> I am Job For You 
						</font>
					</h4>
				</div>
				<div class="card-body">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</div>
			</div> <br />
			<div class="card">
				<div class="card-body">
					<table class="table table-bordered">
						<tr>
							<th>Category</th>
							<td>Information Technology , Web Development</td>
						</tr>
						<tr>
							<th>Skills</th>
							<td>Html, Css , Php</td>
						</tr>
						<tr>
							<th>Posted</th>
							<td>3 week Ago</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<div class="col-sm-4 col-lg-4 col-md-4">
			<div class="card">
				<div class="card-body">
					<div class="media border p-3">
						@php
							$user = App\User::find($tome->user_id);
						@endphp	
	                  <img src="{{ asset('uploads') }}/{{ $user->dp }}" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px; margin-top:-2px !important;">
	                  <div class="media-body">
	                    <a href="{{ route('profile.index') }}">
	                      <font size="3" face="Bahnschrift SemiBold" color="#357EBD">
	                        {{ $user->fname }} {{ $user->lname }} 
	                      </font>
	                    </a> <br />
	                    <a href="#editprofile">
	                    	<button class="btn btn-info btn-sm">
	                    		<small> <i class="fa fa-hand-pointer-o" aria-hidden="true"></i> Check Profile</small>
	                    	</button>
	                    </a>      
	                  </div>
	                </div>
	                <div class="list-group">
					  <button type="button" class="list-group-item list-group-item-action">
					  	<kbd>352</kbd> Posted Jobs 
					  </button>
					</div>
				</div>
			</div> <br />
			<div class="card">
				<div class="card-header">
					<label>Send Message</label>
				</div>
				<div class="card-body">
					<form class="form-group">
						<div class="row">
							<div class="col-sm-12">
								<textarea class="form-control" style="resize: none;" cols="3" rows="5">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</textarea>
							</div>
						</div>
					</form>
				</div>
				<div class="card-footer">
					<button class="btn btn-info float-right">Send</button>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection