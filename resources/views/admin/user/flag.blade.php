@extends('layouts.admin.layout')
@section('content')
<div class="page-content">
    <div class="clearfix"></div>
   	<div class="content ">
        <div class="page-title">
        	<h3> Flag Users </h3>
        	<hr />
        </div>
        <div class="container-fluid">                                                                                      
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
				      <tr>
				        <td>1</td>
				        <td>Asad</td>
				        <td>Axad03213@gmail.com</td>
				        <td>0337469039</td>
				        <td>21</td>
				        <td>Pakistan</td>
				        <td>
				        	<button class="btn btn-warning btn-sm">
				        		<i  class="fa fa-check"></i> Click here
				        	</button>
				        </td>
				        <td>
				        	<button class="btn btn-danger btn-sm">
				        		<i class="fa fa-ban"></i> Disable
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