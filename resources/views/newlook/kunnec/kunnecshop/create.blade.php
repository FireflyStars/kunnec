@extends('layouts.newheader.header')
@section('title', 'Create Your Store')
@section('content')
<div class="card">
        <div class="card-body">
              <!-- Start of Tabs -->
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="setup-tab" data-toggle="tab" href="#tab-setup" role="tab" aria-controls="tab-setup" aria-selected="true">
                        Upload Product 
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" id="course-tab" data-toggle="tab" href="#tab-course" role="tab" aria-controls="tab-course" aria-selected="false">
                          My Store
                        </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" id="wish-tab" data-toggle="tab" href="#tab-wish" role="tab" aria-controls="tab-wish" aria-selected="true">
                          Wish List
                      </a>
                  </li>
              </ul>
              <div class="tab-content border-x border-bottom p-3" id="myTabContent">
                  <div class="tab-pane fade show active" id="tab-setup" role="tabpanel" aria-labelledby="setup-tab">
                      <div class="card">
                          <div class="card-body p-0">
                            <hr class="style-12">
                            <form action="{{ route('sell.store') }}" method="post" enctype = "multipart/form-data">
                                @csrf
                                <div class="form-group">
                                  <div class="col-md-10">
                                    <label>
                                      <b> 
                                        Add Title
                                      </b>
                                    </label>
                                    <input type="text" class="form-control" placeholder="Title" name="title" required/>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="col-md-10">
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
                                    <div class="col-lg-5">
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
                                    <div class="col-lg-5" id="subcategorytitle" style="visibility:hidden;">
                                          <label><b>Sub Category </b> </label>
                                          <select id="subcategory" class="form-control" style="visibility:hidden;"  name="subcategory" >
                                               <option>Select Sub Category</option> 
                                          </select>
                                    </div>
                                  </div>
                                </div> 
                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-lg-5">
                                      <label><b>Model </b> </label>
                                      <input type='text' name="model"  class="form-control"  placeholder="Model" />
                                    </div>
                                    <div class="col-lg-5">
                                        <label><b>Brand </b> </label>
                                        <input type='text' name="brand" class="form-control"  placeholder="Brand" />  
                                    </div>
                                  </div>
                                </div>  
                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-lg-10">
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
                                                <img src="{{ asset('img/noimage.png')}}" id="src1" width="105px" height="105px" />
                                              </div>
                                              <input type="file" id="add1" style="display:none;" name="add[]" />
                                            </div> 
                                          </div>  
                                          <div class="col-lg-2 thumb">
                                            <div>
                                              <div id="add" num="2" thumbnail="images">
                                                <img src="{{ asset('img/noimage.png')}}" id="src2" width="105px" height="105px" />
                                              </div>
                                              <input type="file" id="add2" style="visibility:hidden;" name="add[]" />
                                            </div> 
                                          </div>  
                                          <div class="col-lg-2 thumb">
                                            <div>
                                              <div id="add" num="3" thumbnail="images">
                                                <img src="{{ asset('img/noimage.png')}}" id="src3" width="105px" height="105px" />
                                              </div>
                                              <input type="file" id="add3" style="visibility:hidden;" name="add[]" />
                                            </div> 
                                          </div>  
                                          <div class="col-lg-2 thumb">
                                            <div>
                                              <div id="add" num="5" thumbnail="images">
                                                <img src="{{ asset('img/noimage.png')}}" id="src5" width="105px" height="105px" />
                                              </div>
                                              <input type="file" id="add5" style="visibility:hidden;" name="add[]" />
                                            </div> 
                                          </div>  
                                          <div class="col-lg-2 thumb">
                                            <div>
                                              <div id="add" num="5" thumbnail="images">
                                                <img src="{{ asset('img/noimage.png')}}" id="src5" width="105px" height="105px" />
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
                                    <div class="col-lg-10">
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
                                    <div class="col-lg-5">
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
                                    <div class="col-lg-5">
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
                                    <div class="col-lg-10">
                                      <label>Address</label>
                                      <input id="pac-input" class="form-control" name="address" type="text" placeholder="Search Box" required>
                                        <div id="map"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-lg-5">
                                      <label> 
                                        <b> 
                                          Phone
                                        </b>
                                      </label>
                                      <input type="text" class="form-control" placeholder="Phone" name="phone" required/>
                                    </div>
                                    <div class="col-lg-5">
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
                                    <div class="col-lg-10">
                                      <button class="btn btn-danger pull-right">Submit Add</button>
                                    </div>
                                  </div>
                                </div>
                            </form> 
                          </div>
                      </div>
                  </div>
                  <!-- Start of New Tab -->
                  <div class="tab-pane fade" id="tab-course" role="tabpanel" aria-labelledby="course-tab">
                      <div class="card">
                          <div class="card-header">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-4 col-sm-auto d-flex align-items-center pr-0 mb-3">
                                      <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0">
                                        <i class="fas fa-video"></i> &nbsp;My Store
                                      </h5>
                                </div>
                            </div>
                          <div class="table-responsive-sm">
                              <table class="table table-hover">
                                        <thead style="color:#FFFFFF; background-color:#009900;">
                                          <tr>
                                            <th class="th-sm">#</th>
                                            <th scope="col">Product</th>
                                            <th scope="col">Description <i class="fas fa-sort-alpha-up"></i></th>
                                            <th scope="col">Date <i class="fas fa-sort"></i></th>
                                            <th scope="col">Edit</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($adds as $add)
                                            <tr>
                                              <th scope="row">1</th>
                                              <td>
                                                 @php
                                                    $img = App\model\salesupload::where('kunnecsell_id',$add->id)->first();
                                                 @endphp
                                                <a href="k_shop_details.php">
                                                  <img src="{{ asset('uploads') }}/{{ $img->path }}" width="75px">
                                                </a>
                                              </td>
                                              <td>
                                                <a href="k_shop_details.php">
                                                  {{ $add->title }}
                                                </a>
                                              </td>
                                              <td>
                                                {{ $add->created_at }}
                                              </td>
                                              <td><a href="k_shop_edit.php"><i class="fas fa-edit"></i></a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                              </table>
                          </div>
                        </div>
                  </div>
              </div>
              <!-- Start of New Tab -->
              <div class="tab-pane fade" id="tab-wish" role="tabpanel" aria-labelledby="wish-tab">
                  <div class="card">
                      <div class="card-header">
                          <div class="row align-items-center justify-content-between">
                              <div class="col-4 col-sm-auto d-flex align-items-center pr-0 mb-3">
                                  <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0"><i class="fas fa-heart"></i> &nbsp;Wish List</h5>
                              </div>
                          </div>
                        <div class="table-responsive-sm">
                          <table class="table table-hover">
                                        <thead style="color:#FFFFFF; background-color:#009900;">
                                           <tr>
                                              <th class="th-sm">#</th>
                                              <th scope="col">Product</th>
                                              <th scope="col">Product Title <i class="fas fa-sort-alpha-up"></i></th>
                                              <th scope="col">Seller <i class="fas fa-sort"></i></th>
                                              <th scope="col">Category <i class="fas fa-sort"></i></th>
                                              <th scope="col">Date <i class="fas fa-sort"></i></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($adds as $add)
                                              <tr>
                                                <th scope="row">{{ $add->id }}</th>
                                                <td>
                                                  <a href="k_course.php">
                                                  
                                                   <img src="sd" width="75px">
                                                  </a>
                                                </td>
                                                <td><a href="k_course.php">The Direction is Always Up</a></td>
                                                <td><a href="#!">Tupac Amoru Shakur</a></td>
                                              <td>Math</td>
                                              <td>02/21/1988</td>
                                            </tr>
                                          @endforeach
                                      </tbody>
                          </table>
                        </div>
                      </div>
                  </div>
              </div>
         </div>      
</div>  
</div>  
@endsection