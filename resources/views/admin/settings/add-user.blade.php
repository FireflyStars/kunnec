@extends('layouts.admin.layout')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#dob").on('click',function(){

			$("#dob").datepicker();

		});
	});
</script>
<div class="page-content">
    <div class="clearfix"></div>
   	<div class="content ">
        <div class="page-title">
        	<h3> Add new Admin </h3>
        	<hr />
        </div>
        <div class="container-fluid">
        	@if ($errors->any() )
              <div class="alert alert-danger">
                 @foreach ($errors->all() as $error)
	                <div class="alert alert-danger">
	  						<strong>Warning!</strong> {{ $error  }}.
					</div>
                @endforeach
              </div>
            @endif
            @if ($message = Session::get('message'))
              <div class="alert alert-success">
                <p>
                  {{ $message }}
                </p>
              </div>
            @endif                                                                                
			<div class="col-lg-6">
				<form class="form-group" action="{{ Url('admin/settings/register/user') }}" method="get">
				  	<table class="table">  
				  		<tr>
				  			<th>
				  					Full Name
				  			</th>
				  		</tr>
				  		<tr>
				  			<td>
				  				<input type="text"  placeholder="Name" name="name" required/>
				  			</td>
				  		</tr>
				  		<tr>
				  			<th>
				  				Email
				  			</th>
				  			<th>
				  				phone
				  			</th>
				  		</tr>
				  		<tr>
				  			<td>
				  				<input type="text"  placeholder="Email" name="email" required/>
				  			</td>
				  			<td>
				  				<input type="text"  placeholder="phone number" name="ph" required/>
				  			</td>
				  		</tr>
				  		<tr>
				  			<th>Password</th>
				  			<th>Confrim Password</th>
				  		</tr>
				  		<tr>
				  			<td>
				  				<input type="password"  placeholder="Password" name="password" required/>
				  			</td>
				  			<td>
				  				<input type="password"  placeholder="Confrim Password" name="password_confirmation" required/>
				  			</td>
				  		</tr>
				  		<tr>
				  			<th>
				  				Date Of birth
				  			</th>
				  			<th>
				  				Role
				  			</th>
				  		</tr>
				  		<tr>
				  			<td>
				  				<input type="text" id="dob" placeholder="Date of birth" name="dob" required/>
				  			</td>
				  			<td>
				  				<input type="text" value="subadmin" name="" disabled/>
				  			</td>
				  		</tr>
				  	</table>
				  	<button type="submit" class="btn btn-danger pull-right">
				  		+ <i class="fa fa-user"></i> Add Admin 
				  	</button>
				</form>
			</div>
		</div>
    </div>
</div>
@endsection