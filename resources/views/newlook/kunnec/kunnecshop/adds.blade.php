@extends('layouts.newheader.header')
@section('title', 'kunnec sell Adds')
@section('content')
<h2>Your Adds</h2>
	<hr />
	@if ($message = Session::get('message'))
    <div class="alert alert-success">
      <p>
        {{ $message }}
      </p>
    </div>
@endif  
	<div class="row">
		@foreach($adds as $add)
			<div class="col-lg-4" style="margin-bottom: 10px;">
				<div class="card">
					<div  class="card-header">
						<label>
							<b>
								{{ ucfirst($add->title) }}
							</b>
						</label>
					</div>
					@php
						$img = App\model\salesupload::where('kunnecsell_id',$add->id)->first();
					@endphp
					<div class="card-body">
						<img src="{{ asset('uploads') }}\{{ $img->path }}" width="100%" height="200px" />
					</div>
					<div class="card-footer">
						<a href="{{ route('sells.show', $add->id) }}">
							<button class="btn btn-info">Check</button>
						</a>
						<button value="{{ $add->id }}" id="deletejob" for="delete"  class="btn btn-danger">
							<i class="fa fa-trash"></i>
						</button>
						 <form id="deleteform{{ $add->id }}" action="{{ route('sell.destroy', $add->id) }}" method="post">
						 	@csrf
						 	{{ method_field('delete') }}
				    	<input type="hidden" value="{{ $add->id }}" name="sellid" />
				    </form>
					</div>
				</div>
			</div>
		@endforeach
	</div>
	<div class="d-flex justify-content-center">
	<center>
	  <ul class="pagination">
		   {{ $adds->links() }}
	  </ul>
	</center>
</div>
@endsection