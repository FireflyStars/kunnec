@extends('layouts.header')
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
      <br />
      <div class="content-body">
      	<div class="card">
      		<div class="card-header">
      			<h2>{{ ucfirst($job->title) }}</h2>
      		</div>
      		<div class="card-body">
                        @php
                          $des = $job->description;
                        @endphp
                        {!! $des !!}
      			<br /> <br />
      			<div  class="row">
      				<div class="col-lg-12">
      					{{ ucfirst($job->Jobcategory) }}
      				</div>
      			</div>
      			<hr />
      			<div  class="row">
      				<div class="col-lg-6">
      					Job Type : <b> {{ ucfirst($job->jobtype) }} </b>
       				</div>
      				<div class="col-lg-6">
      					Rate : <b> ${{ ucfirst($job->Salary) }} {{ ucfirst($job->hrate) }} </b>
      				</div>
      			</div>
      			<hr />
      			<div  class="row">
      				<div class="col-lg-6">
      					Last Date  : <b> {{ ucfirst($job->lastdate) }} </b>
      				</div>
      				<div class="col-lg-6">
      					Posted at : <b>{{ $job->created_at->diffForHumans() }}</b>
      				</div>
      			</div>
                        <hr />
                        <div  class="row">
                              <div class="col-lg-6">
                                    <b> Category </b>  : {{ ucfirst($job->jobcategory) }} 
                              </div>
                              <div class="col-lg-6">
                                    <b> Sub Category </b>  : {{ ucfirst($job->jobsubcat) }} 
                              </div>
                        </div>
                        <hr />
                        <div  class="row">
                              <div class="col-lg-6">
                                    <b> Attachment </b>
                              </div>
                              <div class="col-lg-6">
                                    @if(!empty($job->jobdoc))
                                     <a href="{{ $job->jobdoc }}" role="button" class="btn btn-danger  btn-sm">Click Here</a> 
                                    
                                    @else
                                      <small>No Any Attachment</small>
                                    @endif
                              </div>
                        </div>
                        <hr />
                        <div  class="row">
                              <div class="col-lg-12">
                                    <b> Skills </b>  : {{ ucfirst($job->skill) }} 
                              </div>
                        </div>
      		</div>
      		<div class="card-footer">
      			Posted By <label><b> {{ Ucfirst(Auth::user()->name) }} </b></label>
      			 <label class="text-muted float-right">{{ $job->created_at->diffForHumans() }}</label>
      		</div>
      	</div>
      </div>
    </div>
</div>
@endsection