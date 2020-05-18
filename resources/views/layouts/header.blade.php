<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <title>@yield('title')</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/vendors.min.css')}}">
  <!-- END VENDOR CSS-->
  <!-- BEGIN STACK CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/app.min.css')}}">
  <!-- END STACK CSS-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/menu/menu-types/vertical-menu.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/colors/palette-gradient.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/fonts/simple-line-icons/style.min.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/chat-application.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">
  <link rel="stylesheet" href="{{ asset('app-assets/bootstrap.min.css') }}">      
  <script src="{{ asset('app-assets/jquery.min.js') }}"></script>
  <script src="{{ asset('app-assets/bootstrap.min.js') }}"></script>
  <link href="{{ asset('plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css') }}" rel="stylesheet" type="text/css" />
  
</head>
<style type="text/css">
  body {
    font-family:Segoe UI Light !important;
  }

  .opportunity-list {
    list-style: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
  }

  .op-list{
    float: left;
    margin-left:20px;
  }
  .btn {
    border-radius:0px;
  }
  .btn {
    border-radius: 0px;
  }

  .jumbotron{
    background-color: white !important;
    margin-top:10px;
  }
  .card {
    background-color: white;
  }
  .card-footer {
    background-color: white;
  }
  .card-header {
    background-color: white;
  }
  a {
    border-radius: 0px;
  }
  .form-control {
    border-radius: 0px;
  }
  button {
    border-radius: 0px;
  }
  .jumbotron{
    border-radius: 0px;
  }
html {
  scroll-behavior: smooth;
}
</style>
<style>
/* width */
::-webkit-scrollbar {
    width:8px;
}

/* Track */
::-webkit-scrollbar-track {
    box-shadow: inset 0 0 5px grey; 
    border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
    background-color:#357ebd !important;
    border-radius:0px;
}

</style>
<script type="text/javascript">
  // path name..
  var pathname = window.location.pathname;
  // res ..
  var res = pathname.substr(1);
  // this condition is checking ..
  if(res == 'messages'){
    // document ready ..
    $(document).ready(function(){
      // getting body ..
      $("body").addClass('chat-application');
      // Its adding class when it will find messages ..  
    });
  }
   $(document).ready(function () {
        $('#searchdata').on("change",function(){
            var value = $('#searchdata').val(); // value ..
            var url   = "http://localhost:8000/search/"+value;
            $.get(url,function(response){
                if(response.length > 0){
                 for(i=0; i < response.length; i++){ 
                    $("#searchoutput").append("<a href='#' class='list-group-item list-group-item-action'><img src='uploads/"+response[i].dp +"' height='40px' width='40px' />"+response[i].name+"</a>");
                 }
                }
            });
        })
    });
   $(document).ready(function(){
      $("button").on('click',function(){
          var status = $(this).attr('id'); // attribute ..  
          if(status == "unblock"){
                var v = $("#"+status).val();
                var url = "http://localhost:8000/profile/unblock/"+v;
                $.get(url, function(response){
                    if(response == 1){
                        console.log('one');  
                        $("#"+v).hide();

                    } else {
                      console.log('two');
                    }
                });
          }
      });
   });
</script>
<body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar">
  <!-- fixed-top-->
  <nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-semi-light" style="background-color:green !important;">
    <div class="navbar-wrapper">
      <div class="navbar-header" style="background-color:green !important; height:75px !important;">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mobile-menu d-md-none mr-auto">
            <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#">
              <i class="ft-menu font-large-1"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="navbar-brand" href="/" style="padding-left: 30px;">
              <img src="{{ asset('logo/logo.png')}}" height="40">
            </a>
          </li>
          <li class="nav-item d-md-none">
            <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile">
              <i class="fa fa-ellipsis-v"></i>
            </a>
          </li>
        </ul>
      </div>
      <div class="navbar-container content">
        <div class="collapse navbar-collapse" id="navbar-mobile">
          <ul class="nav navbar-nav mr-auto float-left">
            
            <li class="nav-item d-none d-md-block">
              <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#">
                  <i class="ft-menu"></i>
              </a>
            </li>
            <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#">
              <i class="ficon ft-search"></i></a>
              <div class="search-input">
                <input class="input" type="text" id="searchdata" placeholder="Enter Name or username">
              </div>
              <div style="height: 20px; min-width:470px; position: relative; right:20px; top:40px;">
                <div class="list-group" id="searchoutput">
                    
                  </div>
              </div>
            </li> 
          </ul>
          @php
            $request = App\model\friendship::where('receiver_id', Auth::user()->id)->get();
            $users   = App\user::all();
          @endphp
          
          <ul class="nav navbar-nav float-right">
            <li class="nav-item">
              <a class="nav-link nav-link-label" href="{{ Url('/credit') }}">
                <font size="4">  
                  <i class="fa fa-credit-card"></i>
                </font>
                <span class="badge badge-pill badge-default badge-danger badge-default badge-up">
                  25
                </span>
              </a>
            </li>
            <!-- Request-->
            <li class="dropdown dropdown-notification nav-item">
              <a class="nav-link nav-link-label" href="#" data-toggle="dropdown">
                <font size="4">  
                  <i class="fa fa-user-plus notify-md"></i>
                </font>
                <span class="badge badge-pill badge-default badge-danger badge-default badge-up">{{ count($request) }}</span>
              </a>
              <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                <li class="dropdown-menu-header">
                  <h6 class="dropdown-header m-0">
                    <span class="grey darken-2">Notifications</span>
                    <span class="notification-tag badge badge-default badge-danger float-right m-0">{{ count($request) }} New</span>
                  </h6>
                </li>
                <li class="scrollable-container media-list">
                  @foreach($request as $req)
                      @foreach($users as $user)
                        @if($req->sender_id == $user->id )  
                          <div class="card">
                            <div class="media">
                              <div class="media-left align-self-center">
                                <img src="uploads/{{ $user->dp }}" width="40px" height="40px">
                              </div>
                              <div class="media-body">
                                <h6 class="media-heading">
                                  <a  href="#">
                                    {{ ucfirst($user->fname) }} {{ ucfirst($user->lname) }}
                                  </a>  
                                </h6>
                                <p class="notification-text font-small-3 text-muted">
                                    <button id="req" stat="accet" request_id="{{ $req->id }}" value="accept" class="btn btn-success btn-sm">
                                        Accept
                                    </button>
                                    <button id="req" class="btn btn-danger btn-sm" request_id="{{ $req->id }}" value="cancle">
                                      Cancle
                                    </button>
                                    <button class="btn btn-info btn-sm">
                                      <i class="fa fa-user"></i> Profile
                                    </button>
                                </p>
                                <small>
                                  <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">30 minutes ago</time>
                                </small>
                              </div>
                            </div>
                          </div>
                        @endif  
                      @endforeach
                  @endforeach
                </li>
                <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all notifications</a></li>
              </ul>
            </li>
            <!-- Notification -->
            <li class="dropdown dropdown-notification nav-item">
              <a class="nav-link nav-link-label" href="#" data-toggle="dropdown">
                <font size="4">
                  <i class="ficon ft-bell"></i>
                </font>
                <span class="badge badge-pill badge-default badge-danger badge-default badge-up">5</span>
              </a>
              <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                <li class="dropdown-menu-header">
                  <h6 class="dropdown-header m-0">
                    <span class="grey darken-2">Notifications</span>
                    <span class="notification-tag badge badge-default badge-danger float-right m-0">5 New</span>
                  </h6>
                </li>
                <li class="scrollable-container media-list">
                  <a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left align-self-center"><i class="ft-plus-square icon-bg-circle bg-cyan"></i></div>
                      <div class="media-body">
                        <h6 class="media-heading">You have new order!</h6>
                        <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                        <small>
                          <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">30 minutes ago</time>
                        </small>
                      </div>
                    </div>
                  </a>
                  <a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left align-self-center"><i class="ft-download-cloud icon-bg-circle bg-red bg-darken-1"></i></div>
                      <div class="media-body">
                        <h6 class="media-heading red darken-1">99% Server load</h6>
                        <p class="notification-text font-small-3 text-muted">Aliquam tincidunt mauris eu risus.</p>
                        <small>
                          <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Five hour ago</time>
                        </small>
                      </div>
                    </div>
                  </a>
                  <a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left align-self-center"><i class="ft-alert-triangle icon-bg-circle bg-yellow bg-darken-3"></i></div>
                      <div class="media-body">
                        <h6 class="media-heading yellow darken-3">Warning notifixation</h6>
                        <p class="notification-text font-small-3 text-muted">Vestibulum auctor dapibus neque.</p>
                        <small>
                          <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time>
                        </small>
                      </div>
                    </div>
                  </a>
                  <a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left align-self-center"><i class="ft-check-circle icon-bg-circle bg-cyan"></i></div>
                      <div class="media-body">
                        <h6 class="media-heading">Complete the task</h6>
                        <small>
                          <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last week</time>
                        </small>
                      </div>
                    </div>
                  </a>
                  <a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left align-self-center"><i class="ft-file icon-bg-circle bg-teal"></i></div>
                      <div class="media-body">
                        <h6 class="media-heading">Generate monthly report</h6>
                        <small>
                          <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last month</time>
                        </small>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all notifications</a></li>
              </ul>
            </li>
            <!-- Message -->
            <li class="dropdown dropdown-notification nav-item">
              <a class="nav-link nav-link-label" href="#" data-toggle="dropdown">
                <font size="4">  
                  <i class="ficon ft-mail"></i>
                </font>
                <span class="badge badge-pill badge-default badge-warning badge-default badge-up">3</span>
              </a>
              <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                <li class="dropdown-menu-header">
                  <h6 class="dropdown-header m-0">
                    <span class="grey darken-2">Messages</span>
                    <span class="notification-tag badge badge-default badge-warning float-right m-0">4 New</span>
                  </h6>
                </li>
                <li class="scrollable-container media-list">
                  <a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left">
                        <span class="avatar avatar-sm avatar-online rounded-circle">
                          <img src="{{ asset('app-assets/images/portrait/small/avatar-s-1.png') }}" alt="avatar"><i></i></span>
                      </div>
                      <div class="media-body">
                        <h6 class="media-heading">Margaret Govan</h6>
                        <p class="notification-text font-small-3 text-muted">I like your portfolio, let's start.</p>
                        <small>
                          <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time>
                        </small>
                      </div>
                    </div>
                  </a>
                  <a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left">
                        <span class="avatar avatar-sm avatar-busy rounded-circle">
                          <img src="{{ asset('app-assets/images/portrait/small/avatar-s-2.png') }}" alt="avatar"><i></i></span>
                      </div>
                      <div class="media-body">
                        <h6 class="media-heading">Bret Lezama</h6>
                        <p class="notification-text font-small-3 text-muted">I have seen your work, there is</p>
                        <small>
                          <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Tuesday</time>
                        </small>
                      </div>
                    </div>
                  </a>
                  <a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left">
                        <span class="avatar avatar-sm avatar-online rounded-circle">
                          <img src="{{ asset('app-assets/images/portrait/small/avatar-s-3.png') }}" alt="avatar"><i></i></span>
                      </div>
                      <div class="media-body">
                        <h6 class="media-heading">Carie Berra</h6>
                        <p class="notification-text font-small-3 text-muted">Can we have call in this week ?</p>
                        <small>
                          <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Friday</time>
                        </small>
                      </div>
                    </div>
                  </a>
                  <a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left">
                        <span class="avatar avatar-sm avatar-away rounded-circle">
                          <img src="{{ asset('app-assets/images/portrait/small/avatar-s-6.png') }}" alt="avatar"><i></i></span>
                      </div>
                      <div class="media-body">
                        <h6 class="media-heading">Eric Alsobrook</h6>
                        <p class="notification-text font-small-3 text-muted">We have project party this saturday.</p>
                        <small>
                          <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">last month</time>
                        </small>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all messages</a></li>
              </ul>
            </li>
            <!-- Other drop down -->
            <li class="dropdown dropdown-user nav-item">
              <a class=" nav-link" href="#" data-toggle="dropdown">
                <font size="4">
                  <i class="ft-menu"></i>
                </font>
              </a>
              <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="user-profile.html"><i class="ft-user"></i> Edit Profile</a>
                <a class="dropdown-item" href="/messages"><i class="ft-mail"></i> My Inbox</a>
                <a class="dropdown-item" href="user-cards.html"><i class="ft-check-square"></i> Task</a>
                <a class="dropdown-item" href="chat-application.html"><i class="ft-message-square"></i> Chats</a>
                <a class="dropdown-item" data-toggle="modal" data-target="#block" href="/block-users"><i class="fa fa-ban"></i>block users</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                  <i class="ft-power"></i> Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content"> <br />
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class="nav-item">
          <div style="margin:10px;">
               <div class="media border p-3">
                  <img src="{{ asset('uploads') }}/{{ Auth::user()->dp }}" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px; margin-top:-2px !important;">
                  <div class="media-body">
                    <a href="{{ route('profile.index') }}">
                      <font size="3" face="Bahnschrift SemiBold" color="#357EBD">
                        {{ Auth::user()->fname }} {{ Auth::user()->lname }} 
                      </font>
                    </a>
                    <a href="#editprofile">
                      <small> <i class="fa fa-edit"></i>Edit Profile</small>
                    </a>      
                  </div>
                </div>
              <!--
              <img src="uploads/{{ Auth::user()->dp }}" height="50px" width="50px" style="border-radius:50%;" />
              <span class="menu-title" data-i18n=""> 
                <font size="3" face="Bahnschrift SemiBold" color="#357EBD">
                  {{ Auth::user()->fname }} {{ Auth::user()->lname }} 
                </font>
              </span>
              <a href="#">
                <small> <i class="fa fa-edit"></i>Edit Profile</small>
              </a>
            -->
              <!--
              <span class="badge badge badge-primary badge-pill float-right mr-2">3</span>
              -->
          </div>
        </li>
        <li class=" nav-item">
          <a href="/home">
              <i class="fa fa-feed"></i>
              <span class="menu-title" data-i18n="">Post</span>
              <!-- <span class="badge badge badge-primary badge-pill float-right mr-2">3</span> -->
          </a>
        </li>
        <li class=" nav-item">
          <a href="/browse">
            <i class="fa fa-search"></i>
            <span class="menu-title" data-i18n="">Browse</span>
          </a>
        </li>
        <li class=" nav-item">
          <a href="/credit">
            <i><img src="{{ asset('img/coins.png') }}" height="15" width="15"/></i>
            <span class="menu-title" data-i18n="">Credit</span>
          </a>
        </li>
        <li class=" nav-item">
          <a href="/payout">
            <i class="fa fa-money"></i>
            <span class="menu-title">Payout</span>
          </a>
        </li>
        <li class=" nav-item">
          <a href="settings">
            <i class="fa fa-pencil-square-o"></i>
            <span class="menu-title">Account Setting</span>
          </a>
        </li> 
        <li class=" nav-item">
          <a href="{{ route('message') }}">
            <i class="fa fa-envelope-o"></i>
            <span class="menu-title">Messages</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="/albums">
            <i class="fa fa-photo"></i>
            <span class="menu-title">Photos</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="/kunnecs">
            <i class="fa fa-users"></i>
            <span class="menu-title">Kunnecs</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="/setup">
            <i class="fa fa-wrench"></i>
            <span class="menu-title">Kunnec Setup</span>
          </a>
        </li>
                <li class="menu-item has-child">
          <a href="#" class="menu-link">
          <i><img src="{{ asset('site/imgs/2me.png') }}" height="30" width="30" style="margin-top:-4px;" /></i>
          <span class="menu-text">Kunnec to me</span>
          <!-- <span class="badge badge-success">20+</span> -->
          </a>
          <!-- child menu -->
          <ul class="menu">
              <li class="menu-item">
                  <a href="{{ route('kunnec.tome') }}" class="menu-link">
                    <i class="fa fa-tasks" style="margin-right:3px;"></i>
                    <span class="menu-text"> Post a Opportunity </span>
                  </a>
              </li>
              <li class="menu-item">
                  <a href="{{ route('kunnec.job') }}" class="menu-link">
                    <i class="fa fa-tasks" style="margin-right:5px;"></i>
                    <span class="menu-text"> Opportunities </span>
                  </a>
              </li>
          </ul>
          <!-- /child menu -->
        </li>
        <li class="menu-item has-child">
          <a href="#" class="menu-link">
          <i><img src="{{ asset('site/imgs/2me.png') }}" height="30" width="30" style="margin-top:-4px;" /></i>
          <span class="menu-text">Kunnec Sell</span>
          <!-- <span class="badge badge-success">20+</span> -->
          </a>
          <!-- child menu -->
          <ul class="menu">
              <li class="menu-item">
                  <a href="{{ route('sell.create') }}" class="menu-link">
                    <i class="fa fa-tasks" style="margin-right:3px;"></i>
                    <span class="menu-text"> Post An Add </span>
                  </a>
              </li>
              <li class="menu-item">
                  <a href="{{ route('sell.index') }}" class="menu-link">
                    <i class="fa fa-tasks" style="margin-right:5px;"></i>
                    <span class="menu-text">Your Adds </span>
                  </a>
              </li>
          </ul>
          <!-- /child menu -->
        </li>
        <li class="menu-item has-child">
          <a href="#" class="menu-link">
          <i><img src="{{ asset('site/imgs/2me.png')  }}" height="30" width="30" style="margin-top:-4px;" /></i>
          <span class="menu-text">Kunnec Yo You</span>
          <!-- <span class="badge badge-success">20+</span> -->
          </a>
          <!-- child menu -->
          <ul class="menu">
              <li class="menu-item">
                  <a href="{{ route('toyou.services') }}" class="menu-link">
                    <i class="fa fa-tasks" style="margin-right:3px;"></i>
                    <span class="menu-text">News Feeds</span>
                  </a>
                  <a href="#" class="menu-link">
                    <i class="fa fa-user-o" style="margin-right:3px;"></i>
                    <span class="menu-text">Profile</span>
                  </a>
                  <a href="{{ route('post.service') }}" class="menu-link">
                    <i class="fa fa-plus-circle" style="margin-right:3px;"></i>
                    <span class="menu-text">Post Service</span>
                  </a>
                  <a href="{{ route('my.services') }}" class="menu-link">
                    <i class="fa fa-tasks" style="margin-right:3px;"></i>
                    <span class="menu-text">Your Service</span>
                  </a>
              </li>
          </ul>
          <!-- /child menu -->
        </li>
        <hr style="margin: 0px;" />
        <li class="nav-item">
          <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            <i class="fa fa-sign-out"></i>
            <span class="menu-title">Logout</span>
          </a>
        </li>
      </ul>
    </div>
  </div>

  <!-- The Modal -->
    <div class="modal fade" id="block">
      <div class="modal-dialog">
        <div class="modal-content">
        
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Blocked users</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>  
          <!-- Modal body -->
          <div class="modal-body">
              <div class="list-group">
                    @php
                      $busers = App\model\friend::where('status','block')->where('user_id',Auth::user()->id)->orwhere('friend_id', Auth::user()->id)->get();
                      $users = App\user::all();
                    @endphp
                    @foreach($users as $user)
                      @foreach($busers as $block)
                          @if($user->id == $block->friend_id &&  Auth::user()->id == $block->user_id || $user->id == $block->user_id &&  Auth::user()->id == $block->friend_id )
                            @if(!empty($block)) 
                             <a href="#" class="list-group-item list-group-item-action" id="{{ $user->id }}" style="border-radius: 0px;">
                                <img src="uploads/{{ $user->dp }}" height="40px" width="40px" /> 
                                  <font size="+1">
                                    {{ Ucfirst($user->name) }}
                                  </font>
                                    <button class="btn btn-danger float-right" id="unblock" value="{{ $user->id }}">
                                      <i class="fa fa-ban"></i> Unblock
                                    </button>
                              </a> 
                            @endif  
                          @endif
                      @endforeach
                    @endforeach
              </div>
          </div>
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>    
  @yield('content')
  <!-- BEGIN VENDOR JS-->
  <script src="{{ URL::asset('js/app.js')}}" type="text/javascript"></script>
  <script src="{{ asset('app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN STACK JS-->
  <script src="{{ asset('js/request.js') }}"></script>
  <script src="{{ asset('js/signup.js') }}"></script>
  <script src="{{ asset('js/categories.js') }}"></script>
  <script src="{{ asset('js/uploads.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/profile.js') }}"></script>
  
  <script src="{{ asset('app-assets/js/core/app-menu.min.js')}}" type="text/javascript"></script>
  <script src="{{ asset('app-assets/js/core/app.min.js')}}" type="text/javascript"></script>
  <!-- END STACK JS-->
  <script src="{{ asset('app-assets/js/scripts/pages/chat-application.js')}}" type="text/javascript"></script>
   <!-- BEGIN PAGE LEVEL JS -->
   <!--
    <script src="{{ asset('plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js')}}" type="text/javascript"></script>
    <script src="{{ asset('plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js')}}" type="text/javascript"></script>
  -->
    <!-- END PAGE LEVEL PLUGINS -->
    
    <!--
    <script>

        $(document).ready(function()
        {
          $('#text-editor').wysihtml5();
          $("#quick-access").css("bottom", "0px");
        });
    </script>
    -->
    <!-- END JAVASCRIPTS -->

    <script>
      function openCity(cityName) {
          var i;
          var x = document.getElementsByClassName("city");
          for (i = 0; i < x.length; i++) {
             x[i].style.display = "none";  
          }
          document.getElementById(cityName).style.display = "block";  
      }
    </script>
</body>
</html>
