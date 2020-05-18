@extends('layouts.header')
@section('content')
<script type="text/javascript">
  $(document).ready(function(){
    $("#up").on('click',function(){
        $("#thu").click();
        $("#thu").on('change',function(){
            var src = $("#thu").val();
            if(src != ''){
               console.log(src);
            }
        });
    });
  });
</script>
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
                                           <a href="#" itemprop="contentUrl" >
                                            <img src="/uploads/{{ $images->photo }}" height="250px" width="100%" style="border:1px solid #000; margin-bottom: 2px;" />
                                          </a>
                                       </div>     
                                  @endforeach
                                   <div class="col-md-3">
                                      <a href="#" id="up" itemprop="contentUrl" >
                                        <img src="/images/upload.jpg"
                                         height="250px" width="100%" style="border:1px solid #000; margin-bottom: 2px;" />
                                      </a>
                                   </div>
                                   <form action="#" method="post">
                                      <input type="file" id="thu" name="image" style="display: none;" />
                                   </form>
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