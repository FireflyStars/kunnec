@extends('layouts.admin.layout')
@section('content')
<div class="page-content">
    <div class="clearfix"></div>
   	<div class="content ">
        <div class="page-title">
        	<h3> Admins List </h3>
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
				       	<th>Disable</th>
				      </tr>
				    </thead>
				    <tbody>
					    
					    @foreach($admins as $admin)
						    <tr>
						        <td>{{ $admin->id }}</td>
						        <td>{{ $admin->name }}</td>
						        <td>{{ $admin->email }}</td>
						        <td>{{$admin->ph }}</td>
			        			@php
					        		$age= Carbon::parse($admin->dob)->diff(Carbon::parse(date("Y-m-d")))->format('%y years old');
					        	@endphp
						        <td>{{ $age }}</td>
						     
						        <td>
						        	<a href="{{ Url('admin/settings/admin/delete') }}/{{ $admin->id }}">
							        	<button class="btn btn-danger btn-sm">
							        		<i class="fa fa-trash"></i> Delete
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