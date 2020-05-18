@extends('layouts.header')
@section('content')
<script>
  var start = 1900;
  var end = new Date().getFullYear();
  for(var year = start ; year <=end; year++){
    $("#year").append("<option value='"+year+"'>"+ year +"</option>");
  }
  for(var year = start ; year <=end; year++){
    $("#eyear").append("<option value='"+year+"'>"+ year +"</option>");
  }
</script>
<style type="text/css">
  .w3-bar-item{
    font-size: 20px;
  }
  .offline-online {
    color:green;
  }
  .membership{
  	background-color: gold;
  }
</style>
<div class="app-content content">
    <div class="content-wrapper">
      <br />
      <div class="content-body">
      	 	<div class="jumbotron">
      	 		<form action="{{  route('profile.update', $user->id ) }}" method="post">
               {{csrf_field()}}
              {{method_field('PUT')}}
              <div class="row">
      	 				<div class="col-lg-3">
      	 					<div class="card" style="border-radius: 55%;">
                      <center>
                        <img src="{{ asset('uploads') }}/{{ Auth::user()->dp }}" height="230px" width="100%" style="border-radius: 50%;" />
                      </center>
                  </div>
      	 				</div>
      	 				<div class="col-lg-9">
                  <div class="row">
                    <div class="col-lg-6">
                          <label><b>First name</b></label>
                          <input type="text" name="fname" class="form-control" value="{{ $user->fname }}" />
                    </div>
                    <div class="col-lg-6">
                        <label><b>Last Name</b></label>
                        <input type="text" class="form-control" value="{{ $user->lname }}" name="lname" />                       
                    </div>
                  </div>
                  <hr />
      	 					<h3><b> Information </b></h3>
      	 					<textarea class="form-control" name="description" rows="10" style="resize: none;">
                      {{ $inf->description }}    
                  </textarea>
      	 				</div>
        	 		</div>
        	 		<hr />
        	 		<div class="row">
        	 			<div class="col-lg-6">
                  <label> <b> <i class="fa fa-envelope"></i> Email </b></label>
                  <input type="text" name="email" class="form-control" value="{{ $user->email }}" />
        	 				<hr />
        	 			</div>
        	 			<div class="col-lg-6">
        	 				<label> <b> <i class="fa fa-phone"></i> Phone </b></label>
                  <input type="text" name="phone" class="form-control" value="{{ $user->ph }}" />
        	 				<hr />
        	 			</div>
        	 			<div class="col-lg-6">
        	 				<label> <b> <i class="fa fa-transgender"></i> Gender </b>  </label> <br />
            	 		<div>		
                      @if($user->gender ==  "male")
                        Male <input type="radio" name="gender" value="male" checked/>
                        female <input type="radio" name="gender" value="female"/>
                      @else 
                        Male <input type="radio" name="gender" value="male"/>
                        female <input type="radio" name="gender" value="female" checked />
                      @endif
                  </div>    
                  <br />
                  <hr />
        	 			</div>
        	 			<div class="col-lg-6">
        	 				<div class="col-lg-12">
                      <div class="row">
                        <div class="col-lg-4">
                          <label> <b> City </b></label>
                          <select class="form-control">
                              <option>{{ $user->city }}</option>
                          </select>
                        </div>
                        <div class="col-lg-4">
                          <label><b> Punjab </b></label>
                          <select class="form-control">
                            <option>{{ $user->state }}</option>
                          </select>
                        </div>
                        <div class="col-lg-4">
                          <label><b> Country </b></label>
                          <select class="form-control">
                            <option>{{ $user->country }}</option>
                          </select>
                        </div>
                      </div> 
                  </div>
        	 				<hr />
        	 			</div>
        	 			<div class="col-lg-6">
        	 				<label>
        	 					<font color="black" size="+2">
        	 						Membership <kbd style="background-color:gold;">Gold</kbd>
        	 					</font>
        	 				</label> <br />
                  <button class="btn btn-danger">Upgrade Membership</button>
        	 				<hr />
        	 			</div>
        	 			<div class="col-lg-6">
        	 				<label>
        	 					<font color="black" size="+2">
            	 					 <i class="fa fa-birthday-cake"></i> Birthday
        	 					</font>
        	 				</label>
                  <input class="form-control" type="date" name="dob" value="{{ $user->dob }}" />
        	 				<hr />
        	 			</div>
        	 		</div>          
              <div class="row">
                  <div class="col-lg-12">
                    <button class="btn btn-success float-right">Update</button>
                  </div>
              </div>

            </form>
            <br />
            @foreach($education as $edu)
                <div class="row">
                    <div class="col-lg-12">          
                      <div class="card">
                            <div class="card-header">
                                <b> 
                                  {{ ucfirst($edu->title) }}
                                </b>
                                <label class="float-right">
                                    <b>  
                                      {{ $edu->startyear }} -  {{ $edu->endyear }} 
                                    </b>
                                </label>
                            </div>
                            <div class="card-body">
                                {{ $edu->description }} <br /> <br />

                                <form action="{{route('education.destroy',$edu->id)}}" method="post">
                                    {{method_field('DELETE')}}
                                      {{ csrf_field() }}
                                    <button class="btn btn-danger float-right"><i class="fa fa-trash"></i>    Delete
                                    </button>
                                </form>
                                <button class="btn btn-success" data-toggle="modal" data-target="#myModal{{ $edu->id }}">
                                  <i class="fa fa-edit"></i> Edit
                                </button> 
                                <!-- Modal -->
                                  <div class="modal fade" id="myModal{{ $edu->id }}" role="dialog">
                                    <div class="modal-dialog">
                                        <form action="{{ route('education.store') }}" method="post">
                                          {{ csrf_field() }} 
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <input type="text" class="form-control" value="{{ ucfirst($edu->title) }}" name="title" />
                                            </div>
                                            <div class="modal-body">
                                              <div>
                                                <div class="col-lg-12">
                                                    <div class="row">
                                                      <div class="col-lg-6">
                                                      <label>Start Year</label>
                                                      <select class="form-control" id="year" name="startyear">
                                                        <option>{{ $edu->startyear }}</option>
                                                      </select>
                                                    </div>
                                                    <div class="col-lg-6">
                                                      <label>Start Year</label>
                                                      <select class="form-control" id="eyear" name="startyear">
                                                        <option>{{ $edu->startyear }}</option>
                                                      </select>
                                                      
                                                    </div>
                                                    </div>
                                                </div>
                                              </div>
                                              <br />
                                              <div class="col-lg-12">
                                                <label>Description</label>
                                                <textarea class="form-control" rows="15" style="resize: none;">
                                                  {{ $edu->description }}
                                                </textarea> <br />
                                                <button type="submit" class="btn btn-danger"> Update </button>
                                              </div>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-default" data-dismiss="modal"> Close
                                              </button>
                                            </div>
                                          </div>
                                        </form>
                                    </div>
                                  </div>
                            </div>
                      </div>        
                    </div>
                </div>
            @endforeach
      	 	</div>
      </div>
    </div>
</div>
@endsection