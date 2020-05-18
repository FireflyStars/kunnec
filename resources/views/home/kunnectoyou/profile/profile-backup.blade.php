@extends('layouts.header')
@section('content')
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
  .btn {
    border-radius:0px;
  }
  .btn {
    margin-top:10px;
  }
  textarea{
    overflow:auto;
    resize: none;
  }
</style>
<div class="app-content content">
    <div class="content-wrapper">
      <br />
      <div class="content-body">
        <div class="row">
          <div class="col-lg-9 col-sm-9 col-md-9">
            <!-- Description -->
            <div  class="jumbotron">
              <div class="media">
                <img class="mr-3" src="{{ asset('uploads') }}/{{ $user->dp }}" style="border-radius: 50%;" height="80px" width="80px" alt="Generic placeholder image">
                <div class="media-body">
                  <h3 class="mt-0"> <b> {{ $user->fname }} {{ $user->lname }} </b> </h3>
                  <i class="fa fa-map-marker" aria-hidden="true"></i> 
                  @php
                    $city = App\city::find($user->city);
                    $country = App\country::find($user->state);
                  @endphp
                  <b>  {{ $city->name }} , {{$country->name  }} </b>
                </div>
              </div>
              <br />
              <div>
                <div class="d-flex flex-row">
                  <div class="p-2">
                    <h3> <b> Professoinal Web Developer </b> </h3>
                  </div>
                  <div class="p-2">
                      <a href="#" data-toggle="modal" data-target="#myModal" role="button">
                        <i class="fa fa-edit"></i>
                      </a>
                      <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Your Title</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                              </h3> <b> Enter a single sentence description of your professional skills/experience (e.g. Expert Web Designer with Ajax experience) </b> </h3> <br />
                             <div class=form-group>
                                  <div class="row">
                                    <div class="col-lg-12 col-sm-12 col-md-12">
                                        <input type="text" class="form-control" placeholder="Enter Title" name="title" />
                                    </div>
                                  </div>
                              </div>
                               <div class="form-group">
                                  <div class="row">
                                      <div class="col-lg-12 col-sm-12 col-md-12">
                                        <button type="submit" class="btn btn-danger float-right">
                                          <i class="fa fa-save"></i>  Save
                                        </button>
                                      </div>
                                  </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
                <div>
                  <p id="des">
                    <font size="3">
                      We all know how hard it can be to make a site look like the demo, so to make your start into the world of X as easy as possible we have included the demo content from our showcase site. Simply import the sample files we ship with the theme and the core structure for your site is already built. Keep in mind that even if you don’t use the demo content, you’ll be much better off than with most other themes since all of the customization options are done right from within the WordPress Customizer making it super easy to configure your site as compared to most of the typical admin panels. You will be pleasantly surprised how easy it is to setup and configure your site with X – with or without the demo content.
                       We all know how hard it can be to make a site look like the demo, so to make your start into the world of X as easy as possible we have included the demo content from our showcase site. Simply import the sample files we ship with the theme and the core structure for your site is already built.
                      <button style="background:none; border:none;"  id="editdes">
                        <font color="#357ebd">
                          <i class="fa fa-edit"></i>
                        </font>
                      </button>
                    </font>
                  </p>
                  <div>
                      <form method='post' id="destxt">
                        @csrf
                      </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- End description -->
            <!-- Skills -->
            <div class="card">
              <div  class="card-header">
                  <div class="d-flex flex-row">
                     <div  class="p-2">
                       <h3>  <b> Skills </b> </h3>
                     </div>
                     <div class="p-2">
                       <button class="btn btn-info btn-color" data-toggle="modal" data-target="#skillsmodel" role="button" style="border-radius:50%; margin-top:-1px;">
                          +
                        </button>
                     </div>
                     <div class="modal fade" id="skillsmodel" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Skills</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                              </h3> <b> Press  Enter After Write Your skill </b> </h3> <br />
                             <div class=form-group>
                                  <div class="row">
                                    <div class="col-lg-12 col-sm-12 col-md-12"> 
                                        <input type="text" class="form-control" value="" placeholder="Skills" name="title" />
                                    </div>
                                  </div>
                              </div>
                               <div class="form-group">
                                  <div class="row">
                                      <div class="col-lg-12 col-sm-12 col-md-12">
                                        <button type="submit" class="btn btn-danger float-right">
                                         <i class="fa fa-save"></i>  Save
                                        </button>
                                      </div>
                                  </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
              </div>
              <div class="card-body">
                <span class="badge badge-primary">Primary</span>
              </div>
            </div>
            <!-- End Skills-->
            <!--Certifications -->
            <div  class="card">
              <div class="card-header">
                  <div class="d-flex flex-row">
                     <div  class="p-2">
                       <h3>  <b> Certifications </b> </h3>
                     </div>
                     <div class="p-2">
                       <button class="btn btn-info btn-color" data-toggle="modal" data-target="#certificate" style="border-radius:50%; margin-top:-1px;">+</button>
                        <!-- Modal -->
                        <div class="modal fade" id="certificate" role="dialog">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">Certificate</h4>
                                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>
                              <div class="modal-body">
                                  <form action="#" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <div>
                                            <label>Title</label>
                                            <input type="text" class="form-control" placeholder="Name" name="name">    
                                        </div>
                                    </div>
                                    <div class="form-group">
                                       <div class="form-group">
                                           <label>Screenshot</label> <br />
                                           <input type="file" name="image" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <label>Description</label>
                                            <textarea class="form-control" placeholder="Description" name="des"></textarea>     
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <button class="btn btn-danger"><i  class="fa fa-save"></i>Save</button>          
                                        </div>
                                    </div>
                                  </form>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>

                     </div>
                  </div>
              </div>
              <div class="card-body">
                <div class="list-group">
                  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1">List group item heading</h5>
                      <small>3 days ago</small>
                    </div>
                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                    <small>Donec id elit non mi porta.</small>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1">List group item heading</h5>
                      <small class="text-muted">3 days ago</small>
                    </div>
                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                    <small class="text-muted">Donec id elit non mi porta.</small>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1">List group item heading</h5>
                      <small class="text-muted">3 days ago</small>
                    </div>
                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                    <small class="text-muted">Donec id elit non mi porta.</small>
                  </a>
                </div>
              </div>
            </div>
            <!-- end Certifications -->
            <!-- portfolio -->
            <div  class="card">
              <div class="card-header">
                  <div class="d-flex flex-row">
                     <div  class="p-2">
                       <h3>  <b> Portfolio </b> </h3>
                     </div>
                     <div class="p-2">
                       <button class="btn btn-info btn-color" data-toggle="modal" data-target="#portfolio" style="border-radius:50%; margin-top:-1px;">+</button>

                          <!-- Modal -->
                          <div class="modal fade" id="portfolio" role="dialog">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Portfolio</h4>
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <form action="#" method="post">
                                      @csrf
                                      <div class="form-group">
                                          <div>
                                              <label>Title</label>
                                              <input type="text" class="form-control" placeholder="Name" name="name">    
                                          </div>
                                      </div>
                                      <div class="form-group">
                                         <label>Screenshot</label> <br />
                                         <input type="file" name="image" />
                                      </div>
                                      <div class="form-group">
                                          <div>
                                              <label>Description</label>
                                              <textarea class="form-control"  rows="5" placeholder="Description" name="des"></textarea>     
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <div>
                                              <button class="btn btn-danger pull-right"><i  class="fa fa-save"></i>Save</button>          
                                          </div>
                                      </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>
                     </div>
                  </div>
              </div>
              <div class="card-body">
                <img src="{{ asset('images/1533668440.sdfsdg.jpg') }}" height="230"  width="200" class="img-thumbnail">
                <img src="{{ asset('images/1533668440.sdfsdg.jpg') }}" height="230"  width="200" class="img-thumbnail">
                <img src="{{ asset('images/1533668440.sdfsdg.jpg') }}" height="230"  width="200" class="img-thumbnail">
                <img src="{{ asset('images/1533668440.sdfsdg.jpg') }}" height="230"  width="200" class="img-thumbnail">
                <img src="{{ asset('images/1533668440.sdfsdg.jpg') }}" height="230"  width="200" class="img-thumbnail">
                <img src="{{ asset('images/1533668440.sdfsdg.jpg') }}" height="230"  width="200" class="img-thumbnail">
                <img src="{{ asset('images/1533668440.sdfsdg.jpg') }}" height="230"  width="200" class="img-thumbnail">
                <img src="{{ asset('images/1533668440.sdfsdg.jpg') }}" height="230"  width="200" class="img-thumbnail">
                <img src="{{ asset('images/1533668440.sdfsdg.jpg') }}" height="230"  width="200" class="img-thumbnail">
                <img src="{{ asset('images/1533668440.sdfsdg.jpg') }}" height="230"  width="200" class="img-thumbnail">
                <img src="{{ asset('images/1533668440.sdfsdg.jpg') }}" height="230"  width="200" class="img-thumbnail">
                <img src="{{ asset('images/1533668440.sdfsdg.jpg') }}" height="230"  width="200" class="img-thumbnail">
                <img src="{{ asset('images/1533668440.sdfsdg.jpg') }}" height="230"  width="200" class="img-thumbnail">
                <img src="{{ asset('images/1533668440.sdfsdg.jpg') }}" height="230"  width="200" class="img-thumbnail">
                <img src="{{ asset('images/1533668440.sdfsdg.jpg') }}" height="230"  width="200" class="img-thumbnail">
                <img src="{{ asset('images/1533668440.sdfsdg.jpg') }}" height="230"  width="200" class="img-thumbnail">
                <img src="{{ asset('images/1533668440.sdfsdg.jpg') }}" height="230"  width="200" class="img-thumbnail">
                <img src="{{ asset('images/1533668440.sdfsdg.jpg') }}" height="230"  width="200" class="img-thumbnail">
                <img src="{{ asset('images/1533668440.sdfsdg.jpg') }}" height="230"  width="200" class="img-thumbnail">
                <img src="{{ asset('images/1533668440.sdfsdg.jpg') }}" height="230"  width="200" class="img-thumbnail">
              </div>
            </div>
            <!-- Portfolio -->
              <!-- portfolio -->
            <div  class="card">
              <div class="card-header">
                  <div class="d-flex flex-row">
                     <div  class="p-2">
                       <h3>  <b> Vidoes </b> </h3>
                     </div>
                     <div class="p-2">
                       <button class="btn btn-info btn-color" data-toggle="modal" data-target="#video" style="border-radius:50%; margin-top:-1px;">+</button>
                        <!-- Modal -->
                        <div class="modal fade" id="video" role="dialog">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">Video</h4>
                              </div>
                              <div class="modal-body">
                                  <form action="#" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <div>
                                            <label>Insert Here Embaded</label>
                                            <input type="text" class="form-control" placeholder="Embaded" name="embed" />     
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <button class="btn btn-danger"><i  class="fa fa-save"></i>Save</button>          
                                        </div>
                                    </div>
                                  </form>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                     </div>
                  </div>
              </div>
              <div class="card-body">
                 <div class="row">
                    <div class="col-lg-3">
                        <iframe width="100%" height="180" src="https://www.youtube.com/embed/BhjEmYHT6Ew" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-lg-3">
                        <iframe width="100%" height="180" src="https://www.youtube.com/embed/BhjEmYHT6Ew" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-lg-3">
                        <iframe width="100%" height="180" src="https://www.youtube.com/embed/BhjEmYHT6Ew" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-lg-3">
                        <iframe width="100%" height="180" src="https://www.youtube.com/embed/BhjEmYHT6Ew" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                 </div>
                 <div class="row">
                    <div class="col-lg-3">
                        <iframe width="100%" height="180" src="https://www.youtube.com/embed/BhjEmYHT6Ew" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-lg-3">
                        <iframe width="100%" height="180" src="https://www.youtube.com/embed/BhjEmYHT6Ew" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-lg-3">
                        <iframe width="100%" height="180" src="https://www.youtube.com/embed/BhjEmYHT6Ew" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-lg-3">
                        <iframe width="100%" height="180" src="https://www.youtube.com/embed/BhjEmYHT6Ew" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                 </div>
                 
              </div>
            </div>
            <!-- Portfolio -->
            <!--educations -->
            <div  class="card">
              <div class="card-header">
                  <div class="d-flex flex-row">
                     <div  class="p-2">
                       <h3>  <b> Education </b> </h3>
                     </div>
                     <div class="p-2">
                       <button class="btn btn-info btn-color" data-toggle="modal" data-target="#education" style="border-radius:50%; margin-top:-1px;">+</button>
                         <div class="modal" id="education">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                      <h4 class="modal-title"> Add Education</h4>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                      <form action="{{ route('education.store') }}" method="post"> 
                                        {{ csrf_field() }} 
                                        <div class="col-lg-12">
                                          <label>Degree Name</label>
                                          <input type="text" name="title" class="form-control" placeholder="Degree Name" required/>
                                        </div>
                                        <div class="col-lg-12">
                                          <label>Institute Name</label>
                                          <input type="text" name="school" class="form-control" placeholder="Degree Name"  required/>
                                        </div>
                                        <div class="col-lg-12">
                                          <div class="row">
                                            <div class="col-lg-6">
                                              <label>Start year</label>
                                              <select name="start" class="form-control"  required>
                                                <option>Year</option>
                                                <option>2017</option>
                                              </select>
                                            </div>
                                            <div class="col-lg-6">
                                              <label>End year</label>
                                              <select name="end" class="form-control">
                                                <option>2021</option>
                                              </select>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-lg-12">
                                          <label>Description</label>
                                          <textarea class="form-control" name="description" rows="10" style="resize: none;"  required></textarea>
                                        </div> <br />
                                        <div class="col-lg-12">
                                          <button class="btn btn-danger float-right" type="submit">Add</button>
                                        </div>
                                      </form>
                                    </div>
                                </div>
                              </div>
                          </div>
                     </div>
                  </div>
              </div>
              <div class="card-body">
                <div class="list-group">
                  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1">List group item heading</h5>
                      <small>3 days ago</small>
                    </div>
                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                    <small>Donec id elit non mi porta.</small>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1">List group item heading</h5>
                      <small class="text-muted">3 days ago</small>
                    </div>
                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                    <small class="text-muted">Donec id elit non mi porta.</small>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1">List group item heading</h5>
                      <small class="text-muted">3 days ago</small>
                    </div>
                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                    <small class="text-muted">Donec id elit non mi porta.</small>
                  </a>
                </div>
              </div>
            </div>
            <!-- end education -->
            <!--Employee -->
            <div  class="card">
              <div class="card-header">
                  <div class="d-flex flex-row">
                     <div  class="p-2">
                       <h3>  <b> Employment History </b> </h3>
                     </div>
                     <div class="p-2">
                       <button class="btn btn-info btn-color" data-toggle="modal" data-target="#employment" style="border-radius:50%; margin-top:-1px;">+</button>
                          <div class="modal" id="employment">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                      <h4 class="modal-title"> Employment History</h4>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                      <form action="{{ route('education.store') }}" method="post"> 
                                        {{ csrf_field() }} 
                                        <div class="col-lg-12">
                                          <label>Company</label>
                                          <input type="text" name="comapny" class="form-control" placeholder="Company" required/>
                                        </div>
                                        <div class="col-lg-12">
                                             <div class="row">
                                                  <div class="col-md-6">
                                                    <label>Location</label>
                                                    <input type="text" name="locaiton" class="form-control" placeholder="Location"  required/>
                                                  </div>
                                                  <div class="col-md-6">
                                                    <label>Country</label>
                                                    <input type="text" name="country" class="form-control" placeholder="Location"  required/>
                                                  </div>
                                             </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <label>Role</label>
                                            <select class="form-control" name="role">
                                                <option>Intern</option>
                                                <option>Individual Contributor</option>
                                                <option>Lead</option>
                                                <option>Manager</option>
                                                <option>Executive</option>
                                                <option>Owner</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-12">
                                            <label>Period</label>
                                            <div  class="row">
                                              <div class="col-lg-6">
                                                   <label>Month</label>
                                                   <select class="form-control" id="month" name="month">
                                                   </select> 
                                              </div>
                                              <div class="col-lg-6">
                                                  <label>Year</label>
                                                  <select class="form-control" id="year" name="year"></select>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                          <label>Through</label>
                                            <div class="row">
                                              <div class="col-lg-6">
                                                   <label>Month</label>
                                                   <select class="form-control" id="month" name="month">
                                                   </select> 
                                              </div>
                                              <div class="col-lg-6">
                                                  <label>Year</label>
                                                  <select class="form-control" id="year" name="year"></select>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <input type="checkbox" name="cwh" /> Currently Working Header
                                        </div>
                                        <div class="col-lg-12">
                                            <textarea class="form-control" cols="10" rows="10"></textarea>
                                        </div>
                                        <br />
                                        <div class="col-lg-12">
                                          <button class="btn btn-danger float-right" type="submit">Add</button>
                                        </div>
                                      </form>
                                    </div>
                                </div>
                              </div>
                          </div>
                     </div>
                  </div>
              </div>
              <div class="card-body">
                <div class="list-group">
                  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1">List group item heading</h5>
                      <small>3 days ago</small>
                    </div>
                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                    <small>Donec id elit non mi porta.</small>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1">List group item heading</h5>
                      <small class="text-muted">3 days ago</small>
                    </div>
                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                    <small class="text-muted">Donec id elit non mi porta.</small>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1">List group item heading</h5>
                      <small class="text-muted">3 days ago</small>
                    </div>
                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                    <small class="text-muted">Donec id elit non mi porta.</small>
                  </a>
                </div>
              </div>
            </div>
            <!-- endemployeement -->
          </div>
          <div class="col-lg-3 col-sm-3 col-md-3">
            <button class="btn btn-info btn-lg btn-color">
               <i class="fa fa-gear"></i> Profile Settings
            </button>
          </div>    
        </div>
      </div>
    </div>
</div>
@endsection