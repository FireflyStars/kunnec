@extends('layouts.newheader.header')
@section('title', 'Create Add')
@section('content')
<style type="text/css">
  .thumb { 
    cursor: pointer; 
  }
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height:250px;
        width:100%;
      }
</style>
<div class="row no-gutters">
	  <form action="{{ route('sell.store') }}" method="post" enctype = "multipart/form-data">
              @csrf
              <div class="form-group">
                <div class="col-md-8">
                  <label>
                    <b> 
                      Add Title
                    </b>
                  </label>
                  <input type="text" class="form-control" placeholder="Title" name="title" required/>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-8">
                  <label>
                    <b>
                      Description
                    </b>  
                  </label>
                  <textarea id="text-editor" name="description" placeholder="Enter text ..." class="form-control" rows="10" required></textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-lg-4">
                    <label><b>Category </b> </label>
                    <select id="category" class="form-control" name="category" required>
                      <option>Select Category</option>
                        @foreach($category as $cat)
                              <option value="{{ $cat->id }}">
                                    {{ $cat->name }}
                              </option>
                        @endforeach
                    </select>
                  </div>
                  <div class="col-lg-4" id="subcategorytitle" style="visibility:hidden;">
                        <label><b>Sub Category </b> </label>
                        <select id="subcategory" class="form-control" style="visibility:hidden;"  name="subcategory" >
                             <option>Select Sub Category</option> 
                        </select>
                  </div>
                </div>
              </div> 
              <div class="form-group">
                <div class="row">
                  <div class="col-lg-4">
                    <label><b>Model </b> </label>
                    <input type='text' name="model"  class="form-control"  placeholder="Model" />
                  </div>
                  <div class="col-lg-4">
                      <label><b>Brand </b> </label>
                      <input type='text' name="brand" class="form-control"  placeholder="Brand" />  
                  </div>
                </div>
              </div>  
              <div class="form-group">
                <div class="row">
                  <div class="col-lg-8">
                    <label> 
                      <b> 
                        Condition
                      </b>
                    </label>
                    <select  class="form-control" name="condition" required>
                      <option>Select Condition</option>
                      <option value="used">Used</option>
                      <option value="new">New</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div  class="row">
                  <div class="col-lg-12">
                    <font size="2">
                      <b>
                        Upload Images
                      </b>
                    </font>
                    <div  class="jumbotron">
                      <div class="row">
                        <div class="col-lg-2 thumb" >
                          <div>
                            <div  id="add" num="1" thumbnail="images">
                              <img src="{{ asset('img/noimage.png')}}" id="src1" width="104px" height="104px" />
                            </div>
                            <input type="file" id="add1" style="display:none;" name="add[]" />
                          </div> 
                        </div>  
                        <div class="col-lg-2 thumb">
                          <div>
                            <div id="add" num="2" thumbnail="images">
                              <img src="{{ asset('img/noimage.png')}}" id="src2" width="104px" height="104px" />
                            </div>
                            <input type="file" id="add2" style="visibility:hidden;" name="add[]" />
                          </div> 
                        </div>  
                        <div class="col-lg-2 thumb">
                          <div>
                            <div id="add" num="3" thumbnail="images">
                              <img src="{{ asset('img/noimage.png')}}" id="src3" width="104px" height="104px" />
                            </div>
                            <input type="file" id="add3" style="visibility:hidden;" name="add[]" />
                          </div> 
                        </div>  
                        <div class="col-lg-2 thumb">
                          <div>
                            <div id="add" num="4" thumbnail="images">
                              <img src="{{ asset('img/noimage.png')}}" id="src4" width="104px" height="104px" />
                            </div>
                            <input type="file" id="add4" style="visibility:hidden;" name="add[]" />
                          </div> 
                        </div>  
                        <div class="col-lg-2 thumb">
                          <div>
                            <div id="add" num="5" thumbnail="images">
                              <img src="{{ asset('img/noimage.png')}}" id="src5" width="104px" height="104px" />
                            </div>
                            <input type="file" id="add5" style="visibility:hidden;" name="add[]" />
                          </div> 
                        </div>                  
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-lg-8">
                    <label> 
                      <b> 
                        Set Price
                      </b>
                    </label>
                    <input type="text" class="form-control" placeholder="Set Price" name="price" required/>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-lg-4">
                    <label> 
                      <b> 
                        Select State
                      </b>
                    </label>
                    <select id="state" name="state" class="form-control">
                      <option>Select State</option>
                      @foreach($states as $state)
                        <option value="{{ $state->id }}">{{ $state->name }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col-lg-4">
                    <label> 
                      <b> 
                        Select City
                      </b>
                    </label>
                     <select id="city" type="text" class="form-control" name="city" value="{{ old('city') }}" required autofocus>
                          <option>Select City</option>
                      </select>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-lg-8">
                    <label>Address</label>
                    <input id="pac-input" class="form-control" name="address" type="text" placeholder="Search Box" required>
                      <div id="map"></div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-lg-4">
                    <label> 
                      <b> 
                        Phone
                      </b>
                    </label>
                    <input type="text" class="form-control" placeholder="Phone" name="phone" required/>
                  </div>
                  <div class="col-lg-4">
                    <label> 
                      <b> 
                        Email
                      </b>
                    </label>
                    <input type="text" class="form-control" placeholder="Email" name="email" required/>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-lg-8">
                    <button class="btn btn-danger pull-right">Submit Add</button>
                  </div>
                </div>
              </div>
            </form> 
</div>
<script>
      // This example adds a search box to a map, using the Google Place Autocomplete
      // feature. People can enter geographical searches. The search box will return a
      // pick list containing a mix of places and predicted search terms.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      function initAutocomplete() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -33.8688, lng: 151.2195},
          zoom: 13,
          mapTypeId: 'roadmap'
        });

        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });

        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }

          // Clear out the old markers.
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
              map: map,
              icon: icon,
              title: place.name,
              position: place.geometry.location
            }));

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          map.fitBounds(bounds);
        });
      }
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCIAZKpkJLlF9QopHLW30T0gXR8bmkLgLY&libraries=places&callback=initAutocomplete"
         async defer></script>
@endsection