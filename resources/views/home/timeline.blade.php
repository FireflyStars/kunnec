@extends('layouts.header')
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
      <br />
       <div class="content-body">
         	<div class="col-md-12">
   		        <!-- Image grid -->
              <section id="image-gallery" class="card">
                <div class="card-header">
                  <h4 class="card-title">Image gallery</h4>
                </div>
                <div class="card-content">
      	            <div class="card-body  my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
      	              <div class="row">
      		                @foreach($pphotos as $images)
                               <div class="col-md-3">
                                    <a href="uploads/{{ $images->photo }}" itemprop="contentUrl" >
                                      <img src="uploads/{{ $images->photo }}" height="250px" width="100%" style="border:1px solid #000; margin-bottom: 2px;" />
                                    </a>
                               </div>     
                          @endforeach
      	              </div>
      	            </div>
                </div>
                <!--/ PhotoSwipe -->
              </section>
              <!--/ Image grid -->
         	</div>
       </div>
    </div>
</div>
@endsection