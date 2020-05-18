@extends('layouts.header')
@section('content')
<style type="text/css">
	.card{
		margin-bottom:0px !important;
	}
	.i {
		border-radius:0px;
		border:1px solid #000000;
	}
	.i:hover{
		background-color:#357ebd;
	}
</style>
<script type="text/javascript">
  $(document).ready(function(){
    $("#thum").on('click',function(){
      $("#thumb").click();
      $("#thumb").on('change',function(){
        var thumb = $("#thumb").val();
        console.log(thumb);
        if(thumb != ''){
          $("#thumb").attr('src',thumb);
        }
      });
    });
  });
</script>
<div class="app-content content">
    <div class="content-wrapper">
      <br />
      <div class="content-body">
      	  <label><font size="+2" color="black">Albums</font></label>
          <button class="btn btn-info float-right" data-toggle="modal" data-target="#myModal">Create New Album</button>
            <!-- The Modal -->
          <div class="modal" id="myModal">
            <div class="modal-dialog">
              <div class="modal-content">
              
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Create New Album</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="{{route('albums.create')}}" method="get">
                    <div class="modal-body">
                      <input type="text" class="form-control" name="title" placeholder="Write here Album Name" required />
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-danger">Create</button>
                    </div>
                </form>
              </div>
            </div>
          </div>

      	  <hr />
      		<div  class="row">
    				<a href="{{  route('profileimage.index') }}" class="col-md-3" style="width: 100%;">
                <label>Profile photos</label>
    	  			  @if(!empty($upload))	
                  <img src="uploads/{{ $upload }}" height="190px" width="80%" />
    			      @else 
                  <img src="{{ asset('images/upload.jpg') }}" width="80%" height="190px" />
                @endif
            </a>
  			    <a href="/timeline/photos" class="col-md-3" style="width: 100%;">
              <label>TimeLine photos</label>
	  				  @if(!empty($post))
                <img src="uploads/{{ $post->photo }}" height="190px" width="80%" />
              @else
                <img src="{{ asset('images/upload.jpg') }}" height="190px" width="80%" />
              @endif 			    
            </a>
            @foreach($albums as $album) 
              <a href="/images/{{ $album->id }}" class="col-md-3" style="width: 100%;">
                <label>{{ ucfirst($album->name) }}</label>
                @if(!empty($post))
                  <img src="uploads/{{ $post->photo }}" height="190px" width="80%" />
                @else
                  <img src="{{ asset('images/upload.jpg') }}" height="190px" width="80%" />
                @endif    
              </a>
            @endforeach
      		</div>
      		<hr />
      </div>
    </div>
</div>
@endsection