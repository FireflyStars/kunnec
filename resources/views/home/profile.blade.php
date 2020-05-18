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
  .nav-link {
    color: green !important;
  }
</style>
<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-body">
    	 	<div class="jumbotron" style="min-height:100%;">
            <div class="row">
              <div class="col-lg-3">
                  <div class="card">
                      <div class="card-body">
                          <center>
                            <img src="{{ asset('uploads') }}/{{ Auth::user()->dp }}" height="200px" width="100%" style="border-radius: 50%;" />
                            <br />
                            <h2>
                              <font size="+1" face="Bahnschrift SemiBold">
                                {{ Auth::user()->fname }} {{ Auth::user()->lname }} 
                              </font>
                            </h2>
                          </center>
                          <ul class="list-group">
                              <li class="list-group-item d-flex justify-content-between align-items-center">
                                <button class="btn btn-warning">
                                     <font size="2" face="Bahnschrift SemiBold">
                                      <b> <i class="fa fa-user"></i> Change Profile Picture </b>
                                    </font>
                                </button>
                              </li>
                              <li class="list-group-item d-flex justify-content-between align-items-center">
                                <button class="btn btn-info">
                                    <center>
                                      <font size="2" face="Bahnschrift SemiBold">
                                        <b><i class="fa fa-edit"></i> Edit Your Profile </b>
                                      </font>
                                    </center>
                                </button>
                              </li>
                              <li class="list-group-item d-flex justify-content-between align-items-center">
                                  <font size="2" face="Bahnschrift SemiBold">
                                    <b> Kunnecs </b>
                                  </font>
                                  <span class="badge badge-success badge-pill">2</span>
                              </li>
                              <li class="list-group-item d-flex justify-content-between align-items-center">
                                  <font size="2" face="Bahnschrift SemiBold">
                                    <b> Membership Level </b>
                                  </font>
                                  <span class="badge badge-success badge-pill">1</span>
                              </li>
                            </ul>
                      </div>
                  </div>
              </div>
              <div class="col-lg-9">
                <div class="card">
                  <div class="card-header">
                    <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                      <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Timeline</a>
                      <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-home" aria-selected="true">About</a>
                      <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Photos</a>
                       <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-kunnecs" role="tab" aria-controls="nav-profile" aria-selected="false">Kunnecs</a>
                      <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Settings</a>
                    </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                             <div class="overflow-auto">
                              <br />
                               @foreach($post as $posts)
                                   <!-- Text post demo  -->
                                   <div class="card">               
                                        @php
                                          $user_id = Auth::user()->id;
                                        @endphp
                                        <div class="card-header">
                                          <div class="row">
                                            <div class="col-md-3">
                                              @foreach($users as $user)
                                                    @if($user->id == $user_id)
                                                      <label>
                                                        <b>
                                                          <font size="+1" color="#007bff">
                                                            {{ ucfirst($user->name) }}
                                                          </font>
                                                        </b>
                                                      </label>
                                                    @endif
                                                  @endforeach
                                            </div>
                                            <div class="col-md-9">
                                              @if($user_id == $posts->user_id)
                                                    <form action="{{route('post.destroy',$posts->id)}}" method="post">
                                                      {{method_field('DELETE')}}
                                                        {{ csrf_field() }}
                                                      <button class="btn btn-danger float-right"><i class="fa fa-trash"></i>    Delete
                                                      </button>
                                                  </form>
                                                @endif
                                            </div>
                                          </div>      
                                        </div>
                                        <div class="card-body">
                                            <p>
                                              <font size="+2">
                                                {{ ucfirst($posts->description) }}
                                              </font> 
                                            </p>
                                            @if(!empty($posts->photo))
                                                @php
                                                  $postimage = $posts->photo;
                                                @endphp
                                                <img class="img-fluid" src="uploads/{{ $postimage }}"
                                                    alt="Timeline Image 1" />
                                            @endif    
                                            <hr />
                                            <ul class="list-inline">
                                              <li class="pr-1">
                                                <a href="#" class="">
                                                  <span class="fa fa-thumbs-o-up"></span> Like</a>
                                              </li>
                                              <li class="pr-1">
                                                <a href="#" class="">
                                                  <span class="fa fa-commenting-o"></span> Comment</a>
                                              </li>
                                              <li>
                                                <a href="#" class="">
                                                  <span class="fa fa-share-alt"></span> Share
                                                </a>
                                              </li>
                                            </ul>
                                        </div>
                                   </div>
                                   <!-- End text post demo  -->
                            @endforeach
                             </div>
                          </div>
                          <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <br />
                            <div class="card">
                              <div class="card-body">
                                  <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                      <b> <i class="fa fa-file-text-o"></i> Gender (Age): </b> Male (47 Years)
                                    </li>
                                    <li class="list-group-item">
                                      <b><i class="fa fa-phone"></i> Phone:</b> 0374969039
                                    </li>
                                    <li class="list-group-item">
                                      <b> <i class="fa fa-map-marker"></i> Location </b> : Lahore, Pakistan
                                    </li>
                                    <li class="list-group-item">
                                      <b> <i class="fa fa-file-text-o"></i> Hobbies </b> : Cricket
                                    </li>
                                  </ul>
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                              <br />
                              <div class="row">
                                  <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <label>Profile photos</label>
                                        </div>
                                        <div class="card-body">
                                            <a href="{{  route('profileimage.index') }}" class="col-md-12" style="width: 100%;">
                                                @if(!empty($upload))  
                                                  <img src="uploads/{{ $upload }}" height="190px" width="80%" />
                                                @else 
                                                  <img src="{{ asset('images/upload.jpg') }}" width="80%" height="190px" />
                                                @endif
                                            </a>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <label>TimeLine photos</label>
                                        </div>
                                        <div class="card-body">
                                            <a href="/timeline/photos" class="col-md-12" style="width: 100%;">
                                              @if(!empty($imgpost))
                                                <img src="uploads/{{ $imgpost->photo }}" height="190px" width="80%" />
                                              @else
                                                <img src="{{ asset('images/upload.jpg') }}" height="190px" width="80%" />
                                              @endif          
                                            </a>
                                        </div>
                                    </div>
                                  </div>
                              </div>
                              <div class="row">
                                  @foreach($albums as $album) 
                                    <div class="col-md-6">
                                          <div class="card">
                                            <div class="card-header">
                                                <label>{{ ucfirst($album->name) }}</label>
                                            </div>
                                            <div class="card-body">
                                                <a href="/images/{{ $album->id }}" class="col-md-12" style="width: 100%;">
                                                  @if(!empty($imgpost))
                                                    <img src="uploads/{{ $imgpost->photo }}" height="190px" width="80%" />
                                                  @else
                                                    <img src="{{ asset('images/upload.jpg') }}" height="190px" width="80%" />
                                                  @endif    
                                                </a>
                                            </div>
                                          </div>
                                    </div>
                                  @endforeach
                              </div>  
                          </div>
                          <div class="tab-pane fade" id="nav-kunnecs" role="tabpanel" aria-labelledby="nav-profile-tab">
                              @if(!empty($friends))
                                @foreach($friends as $friend)
                                  <div class="row">
                                    <div class="col-md-6" id="{{ $friend->id }}" >
                                      <a href="#" class="list-group-item list-group-item-action flex-column align-items-start br">
                                      <div class="d-flex flex-row">
                                        <div class="p-2">
                                          <img src="uploads/{{ $friend->dp }}" height="100" width="100" />
                                        </div>
                                          <div class="p-2" style="margin-top: 2px;">
                                            <h3>{{ $friend->name }}</h3>
                                            @php
                                            $age= Carbon::parse($friend->dob)->diff(Carbon::parse(date("Y-m-d")))->format('%y years old');
                                            @endphp
                                            <label> 
                                              {{ ucfirst($friend->gender) }} ({{ $age }})
                                            </label> 
                                            <br />
                                            <button value="{{ $friend->id }}"  class="btn btn-danger" id="block">
                                              <i class="fa fa-ban"></i> Block
                                            </button>
                                            <button value="{{ $friend->id }}" class="btn btn-primary" id="Unfriend">
                                              <i class="fa fa-trash"></i> Unfriend
                                            </button> 
                                          </div> 
                                      </div>
                                    </a>
                                      </div>
                                  </div>
                                @endforeach
                              @else
                                <br />
                                <center>
                                  <label>
                                    <font color="#357ebd" size="+2">
                                      <i class="fa fa-users"></i> No Any Friends Yet
                                    </font>
                                  </label>
                                </center>
                              @endif
                          </div>
                          <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <br />
                            <div class="card">
                              <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                    <b>
                                      Privacy Settings
                                  </b>
                                </a>
                              </div>
                              <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                  @if(!empty($information))
                                    <form action="{{ route('privacysettings.store') }}" method="post">
                                      {{csrf_field()}}
                                      <div class="card-body">
                                         <label>Show my timeline feeds to </label>
                                         <select class="form-control" name="timeline">
                                      @if($information->showtimeline == "0")
                                              <option  value="0">Nobody</option>
                                              <option value="1" >Friends only</option>
                                              <option value="2" >Every one</option>
                                            @elseif($information->showtimeline == "1")
                                              <option value="1" >Friends only</option>
                                              <option  value="0">Nobody</option>
                                              <option value="2" >Every one</option>
                                            @else
                                              <option value="2" >Every one</option>
                                              <option value="1" >Friends only</option>
                                              <option  value="0">Nobody</option>
                                            @endif 

                                         </select>
                                         <hr />
                                         <label>Show my phone number to  </label>
                                         <select class="form-control" name="phone">
                                            @if($information->showtimeline == "0")
                                                <option  value="0">Nobody</option>
                                                <option value="1" >Friends only</option>
                                                <option value="2" >Every one</option>
                                              @elseif($information->showtimeline == "1")
                                                <option value="1" >Friends only</option>
                                                <option  value="0">Nobody</option>
                                                <option value="2" >Every one</option>
                                              @else
                                                <option value="2" >Every one</option>
                                                <option value="1" >Friends only</option>
                                                <option  value="0">Nobody</option>
                                                @endif
                                         </select> <br />
                                         <button type="submit" class="btn btn-danger">Update</button>
                                      </div>
                                    </form>
                                  @else 
                                    <form action="{{ route('privacysettings.store') }}" method="post">
                                    {{csrf_field()}}
                                        <div class="card-body">
                                           <label>Show my timeline feeds to </label>
                                           <select class="form-control" name="timeline">
                                              <option  value="0">Nobody</option>
                                              <option value="1" >Friends only</option>
                                              <option value="2" >Every one</option>
                                           </select>
                                           <hr />
                                           <label>Show my phone number to  </label>
                                           <select class="form-control" name="phone">
                                              <option value="0">Nobody</option>
                                              <option value="1">Friends only</option>
                                              <option value="2">Every one</option>
                                           </select> <br />
                                           <button type="submit" class="btn btn-success">Save</button>
                                        </div>
                                    </form>
                                  @endif
                              </div>
                            </div>
                            <div class="card">
                              <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                                  <b>
                                    Change Password | Add Paypal Email
                                  </b>
                                </a>
                              </div>
                              <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                  <h3>Change Password</h3>
                                  <hr />
                                  <label>Current Password</label>
                                  <input type="text" class="form-control" name="cpassword" />
                                  <div class="row">
                                      <div class="col-md-6">
                                        <label>New Password</label>
                                        <input type="text" class="form-control" name="npassword" />
                                      </div>
                                      <div class="col-md-6">
                                        <label>Repeat New Password</label>
                                        <input type="text" class="form-control" name="rpassword" />
                                      </div>
                                      <div class="col-md-12" style="margin-top: 5px;">
                                        <button class="btn btn-success">Change Password</button>
                                      </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="card">
                              <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                                  <b>
                                    Add Your Social Links
                                  </b>
                                </a>
                              </div>
                              <div id="collapseThree" class="collapse" data-parent="#accordion">
                                @if(!empty($social))                  
                                    <div class="card-body">
                                      <form action="{{ route('socialmedia.update', Auth::id()) }}" method="post">
                                         {{method_field('PUT')}}
                                         {{csrf_field()}}
                                            <div class="col-md-10">
                                                <label for="full name">Your Website</label>
                                                <input type="url" value="{{ $social->website }}" class="form-control" name="website" />
                                            </div><!-- /.col-lg-6 -->
                                        
                                            <div class="col-md-10">
                                                <label for="full name"><i class="fa fa-facebook"></i> - Facebook</label>
                                                <input type="url" value="{{ $social->facebook }}" class="form-control" name="facebook" required/>
                                            </div><!-- /.col-lg-6 -->
                               
                                            <div class="col-md-10">
                                                <label for="full name"><i class="fa fa-instagram"></i> - Instagram</label>
                                                <input type="url" class="form-control" value="{{ $social->instagram }}" name="instagram" />
                                            </div><!-- /.col-lg-6 -->

                                            <div class="col-md-10">
                                                <label for="full name"><i class="fa fa-twitter"></i> - Twitter</label>
                                                <input type="url" value="{{ $social->twitter }}" class="form-control" name="twitter" />
                                            </div><!-- /.col-lg-6 -->

                                           <div class="col-md-10">
                                                <label for="full name"><i class="fa fa-youtube"></i> - Youtube</label>
                                                <input type="url" value="{{ $social->youtube }}" class="form-control" name="youtube" />
                                           </div><!-- /.col-lg-6 -->

                                          
                                            <div class="col-md-10">
                                                <label for="full name"><i class="fa fa-soundcloud"></i> - Soundcloud</label>
                                                <input type="url" value="{{ $social->soundcloud }}" class="form-control" name="soundcloud" />
                                            </div><!-- /.col-lg-6 -->

                                            <div class="col-md-10">
                                                <label for="full name"><i class="fa fa-github"></i> - Github</label>
                                                <input type="url" class="form-control" value="{{ $social->github }}"  name="github" />
                                            </div><!-- /.col-lg-6 -->

                                            <div class="col-md-10">
                                                <label for="full name"><i class="fa fa-google-plus"></i> - Google Plus</label>
                                                <input type="url" class="form-control" value="{{ $social->gplus }}"  name="gplus" />
                                            </div><!-- /.col-lg-6 -->

                                            <div class="col-md-10">
                                                <label for="full name"><i class="fa fa-tumblr"></i> - Tumblr</label>
                                                <input type="url" value="{{ $social->tumblr }}" class="form-control" name="tumblr" />
                                            </div><!-- /.col-lg-6 -->

                                            <div class="col-md-10">
                                                <label for="full name"><i class="fa fa-whatsapp"></i> - Whatsapp</label>
                                                <input type="text" value="{{ $social->whatsapp }}" class="form-control" name="whatsapp" />
                                            </div><!-- /.col-lg-6 -->

                                            <div class="col-md-10">
                                                <label for="full name"><i class="fa fa-pinterest"></i> - Pinterest</label>
                                                <input type="url" value="{{ $social->pintrest }}" class="form-control" name="pintrest" />
                                            </div><!-- /.col-lg-6 -->

                                              <div class="col-md-10">
                                                <label for="full name"><i class="fa fa-linkedin"></i> - LinkedIn</label>
                                                <input type="url" value="{{ $social->linkdn }}" class="form-control" name="linkedn" />
                                            </div><!-- /.col-lg-6 -->

                                            <div class="col-md-10">
                                                <label for="full name"><i class="fa fa-reddit"></i> - Reddit</label>
                                                <input type="url" value="{{ $social->reddit }}" class="form-control" name="reddit" />
                                            </div><!-- /.col-lg-6 -->
                                            <div class="col-md-10" style="margin-top: 5px;">
                                              <button type="submit" class="btn btn-danger">Update</button>
                                            </div>
                                            
                                       </form>
                                    </div>
                                @else
                                  <div class="card-body">
                                      <form action="{{ route('socialmedia.store') }}" method="post">
                                        {{csrf_field()}}
                                            <div class="col-md-10">
                                                <label for="full name">Your Website</label>
                                                <input type="url" class="form-control" name="website" />
                                            </div><!-- /.col-lg-6 -->
                                        
                                            <div class="col-md-10">
                                                <label for="full name"><i class="fa fa-facebook"></i> - Facebook</label>
                                                <input type="url" class="form-control" name="facebook" required/>
                                            </div><!-- /.col-lg-6 -->
                               
                                            <div class="col-md-10">
                                                <label for="full name"><i class="fa fa-instagram"></i> - Instagram</label>
                                                <input type="url" class="form-control" name="instagram" />
                                            </div><!-- /.col-lg-6 -->

                                            <div class="col-md-10">
                                                <label for="full name"><i class="fa fa-twitter"></i> - Twitter</label>
                                                <input type="url" class="form-control" name="twitter" />
                                            </div><!-- /.col-lg-6 -->

                                           <div class="col-md-10">
                                                <label for="full name"><i class="fa fa-youtube"></i> - Youtube</label>
                                                <input type="url"  class="form-control" name="youtube" />
                                           </div><!-- /.col-lg-6 -->

                                          
                                            <div class="col-md-10">
                                                <label for="full name"><i class="fa fa-soundcloud"></i> - Soundcloud</label>
                                                <input type="url"  class="form-control" name="soundcloud" />
                                            </div><!-- /.col-lg-6 -->

                                            <div class="col-md-10">
                                                <label for="full name"><i class="fa fa-github"></i> - Github</label>
                                                <input type="url" class="form-control"  name="github" />
                                            </div><!-- /.col-lg-6 -->

                                            <div class="col-md-10">
                                                <label for="full name"><i class="fa fa-google-plus"></i> - Google Plus</label>
                                                <input type="url" class="form-control"  name="gplus" />
                                            </div><!-- /.col-lg-6 -->

                                            <div class="col-md-10">
                                                <label for="full name"><i class="fa fa-tumblr"></i> - Tumblr</label>
                                                <input type="url" class="form-control" name="tumblr" />
                                            </div><!-- /.col-lg-6 -->

                                            <div class="col-md-10">
                                                <label for="full name"><i class="fa fa-whatsapp"></i> - Whatsapp</label>
                                                <input type="text" class="form-control" name="whatsapp" />
                                            </div><!-- /.col-lg-6 -->

                                            <div class="col-md-10">
                                                <label for="full name"><i class="fa fa-pinterest"></i> - Pinterest</label>
                                                <input type="url" class="form-control" name="pintrest" />
                                            </div><!-- /.col-lg-6 -->

                                              <div class="col-md-10">
                                                <label for="full name"><i class="fa fa-linkedin"></i> - LinkedIn</label>
                                                <input type="url" class="form-control" name="linkedn" />
                                            </div><!-- /.col-lg-6 -->

                                            <div class="col-md-10">
                                                <label for="full name"><i class="fa fa-reddit"></i> - Reddit</label>
                                                <input type="url" class="form-control" name="reddit" />
                                            </div><!-- /.col-lg-6 -->
                                            <div class="col-md-10" style="margin-top: 5px;">
                                              <button type="submit" class="btn btn-success">Save Links</button>
                                            </div>
                                            
                                       </form>
                                    </div>
                                @endif    
                              </div>
                            </div>  
                            <div class="card">
                              <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree22">
                                  <b>
                                    Upgrade or Delete Account
                                  </b>
                                </a>
                              </div>
                              <div id="collapseThree22" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                  Upgrade Account
                                  <hr />
                                  <label>Current Account</label>
                                  <input type="text" class="form-control" name="caccount" />
                                  <div class="row">
                                     <div class="col-md-6">
                                      <label>New Account Selection</label>
                                      <input type="text" class="form-control" name="npwd" />
                                     </div>
                                     <div class="col-md-6">
                                      <br />
                                      <button style="margin-top:5px;" class="btn btn-success">Upgrade Account</button>
                                     </div>
                                  </div>
                                    <br />
                                        <div class="card">
                                      <div class="card-header">
                                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree25">
                                          <b> Delete </b>
                                        </a>
                                      </div>
                                      <div id="collapseThree25" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                           <button class="btn btn-danger">Delete</button>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
</div>
@endsection