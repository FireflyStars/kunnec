@extends('layouts.admin.layout')
@section('content')
<div class="page-content">
    <div class="clearfix"></div>
   	<div class="content ">
        <div class="page-title">
        	<h3> 
        		Forward Alert 
        		<button  class="btn btn-danger">+</button>
        	</h3>
        	<hr />
        </div>
        <div class="container-fluid">                                                                                      
		  	<div class="table table-bordered">          
				<table class="table">
				    <thead>
				      <tr>
				        <th>#</th>
				        <th>Subject</th>
				        <th>Title</th>
				        <th>Message</th>
				        <th>Time</th>                                                             
				        <th>Resend</th>
				        <th>Edit</th>
				        <th>Delete</th>
				      </tr>
				    </thead>
				    <tbody>
					    <tr>
					        <td>1</td>
					        <td>Subject</td>
					        <td>I am alert</td>
					        <td>I am message ..</td>
					        <td> 2:10AM , 11-20-2017 </td>
					    	<td>
					    		<button class="btn btn-warning btn-sm">
					    			<i class="fa fa-send-o"></i>
					    		</button>
					    	</td>
					    	<td>
					    		<button class="btn btn-success btn-sm">
					    			<i class="fa fa-edit"></i>
					    		</button>
					    	</td>
					    	<td>
					    		<button class="btn btn-danger">
					    			<i class="fa fa-trash"></i>
					    		</button>
					    	</td>
					    </tr>
				    </tbody>
				</table>
			</div>
		</div>
    </div>
</div>
@endsection