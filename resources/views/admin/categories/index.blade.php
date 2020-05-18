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
        		Categories
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
                  <h4 class="modal-title">Add New Category</h4>
                </div>
                <form action="{{ route('categories.store') }}"  method="post">
                    {{ csrf_field() }}
                    <div class="modal-body">
                      <div class="form-group">
                          <label>Category Name</label>
                          <input type="text" placeholder="Category Name" class="form-control" name="cname" />
                      </div>
                      <div class="form-group">
                          <label>Kunnec Options</label>
                          <select  class="form-control" name="ko">
                              <option value="1">Kunnec To Me</option>
                              <option value="2">Kunnec To You</option>
                              <option value="3">Kunnec Sell</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <button type="submit" class="btn btn-danger">Submit</button>
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
        			<th>Kunnec options</th>
        			<th>Sub Categories</th>
        			<th>Delete</th>
        		</thead>
        		<tbody>
              	@foreach($categories as $category)
                    <tr>
                  		<td>{{ $category->id }}</td>
                      <td>{{ $category->name }}</td>
                      @if($category->division == 1)
                          <td>Kunnec To me</td>
                      @elseif($category->division == 2)
                          <td>Kunnec To me</td>
                      @elseif($category->division ==3)
                          <td>Kunnec Sell</td>
                      @endif
   
                			<td>
                        <a href="{{  route('categories.show',$category->id) }}">
                    				<button class="btn btn-info btn-sm">
                    					<i class="fa fa-list-alt"></i> Check
                    				</button>
                			  </a>
                      </td>
            				<td>
                				<button id="delete" class="btn btn-danger btn-sm">
                					<i class="fa fa-trash"></i> Delete
                				</button>
                        <form id="del" action="{{ route('categories.destroy', $category->id) }}" method="post">
                          @csrf
                          @method('delete')
                        </form>
                		</td>
                  </tr>
        		    @endforeach
            </tbody>
        	</table>
        </div>
   	</div>
</div>
@endsection