@extends('layouts.admin.layout')
@section('content')
<script type="text/javascript">
  $(document).ready(function(){
    $("#delete").on('click',function(){
      $("#del").submit();
    });
  });
</script>
<div class="page-content">
    <div class="clearfix"></div>
   	<div class="content ">
   	    <div class="page-title">
        	<h3> 
        		Sub Categories
        		<button  class="btn btn-danger" data-toggle="modal" data-target="#myModal">+</button>
        	</h3>
        	<hr />
                <!-- Modal -->
          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
            
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Add New Sub Category</h4>
                </div>
                <form action="{{ route('subcat.store',$category) }}"  method="post">
                    {{ csrf_field() }}
                    <div class="modal-body">
                      <div class="form-group">
                          <label>Sub Category Name</label>
                          <input type="text" placeholder="Category Name" class="form-control" name="cname" />
                      </div>
                      <div class="form-group">
                          <button type="submit" class="btn btn-danger">Save</button>
                      </div>
                    </div>
                </form>    
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
              
            </div>
          </div>
        </div>
        <div class="container-fluid">
           @if ($message = Session::get('message'))
              <div class="alert alert-success">
                <p>
                  {{ $message }}
                </p>
              </div>
            @endif     
        	<table class="table table-bordered">
        		<thead>
        			<th>ID</th>
        			<th>Name</th>
        			<th>Delete</th>
        		</thead>
        		<tbody>
              	@foreach($subs as $sub)
                    <tr>
                  		<td>{{ $sub->id }}</td>
                      <td>{{ $sub->name }}</td>
            				<td>
                        <a href="{{ route('subcat.delete', $sub->id) }}">
                            <button id="delete" class="btn btn-danger btn-sm">
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
@endsection