@extends('layouts.admin.layout')
@section('content')
<div class="page-content">
    <div class="clearfix"></div>
   	<div class="content ">
        <div class="page-title">
        	<h3> Active Users </h3>
        	<hr />
        </div>
        <div class="container-fluid">     

         @if ($message = Session::get('message'))
              <div class="alert alert-success">
                <p>
                  {{ $message }}
                </p>
              </div>
            @endif                                                                                        
		  	<div class="table table-bordered">          
				<table class="table">
				    <thead>
				      <tr>
				        <th>#</th>
				        <th>Full Name</th>
				        <th>Email</th>
				        <th>phone</th>
				        <th>Age</th>
				        <th>Country</th>
				        <th>Check</th>
				       	<th>Disable</th>
				      </tr>
				    </thead>
				    <tbody>
					    
					    @foreach($users as $user)
						    <tr>
						        <td>{{ $user->id }}</td>
						        <td>{{ $user->fullname }}</td>
						        <td>{{ $user->email }}</td>
						        <td>{{$user->phone }}</td>
			        			@php
					        		$age= Carbon::parse($user->dob)->diff(Carbon::parse(date("Y-m-d")))->format('%y years old');
					        	@endphp
						        <td>{{ $age }}</td>
						        @php
						        	$country = App\country::find($user->country);
						        @endphp
						        <td>{{ $country->name }}</td>
						        <td>
						        	<button class="btn btn-warning btn-sm">
						        		<i  class="fa fa-check"></i> Click here
						        	</button>
						        </td>
						        <td>
						        	<a href="{{ Url('admin/user/deactivat') }}/{{ $user->id }}">
							        	<button class="btn btn-danger btn-sm">
							        		<i class="fa fa-ban"></i> Disable
							        	</button>
						        	</a>
						        </td>
						    </tr>
						@endforeach    
				    </tbody>
				</table>
			</div>
		</div>
    </div>
</div>
@endsection