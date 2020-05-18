<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title> Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN PLUGIN CSS -->
    <link href="{{ asset('admin/assets/plugins/font-awesome/css/font-awesome.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/plugins/gritter/css/jquery.gritter.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/plugins/bootstrap-datepicker/css/datepicker.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/jquery-ricksaw-chart/css/rickshaw.css') }}" type="text/css" media="screen">
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/jquery-morris-chart/css/morris.css') }}" type="text/css" media="screen">
    <link href="{{ asset('admin/assets/plugins/bootstrap-select2/select2.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ asset('admin/assets/plugins/jquery-jvectormap/css/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <!-- END PLUGIN CSS -->
    <!-- BEGIN PLUGIN CSS -->
    <link href="{{ asset('admin/assets/plugins/pace/pace-theme-flash.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ asset('admin/assets/plugins/bootstrapv3/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/plugins/bootstrapv3/css/bootstrap-theme.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('admin/assets/plugins/animate.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/plugins/jquery-scrollbar/jquery.scrollbar.css') }}" rel="stylesheet" type="text/css" />
    <!-- END PLUGIN CSS -->
    <link rel="stylesheet" href="{{ asset('admin/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') }}">
    <!-- BEGIN CORE CSS FRAMEWORK -->
    <link href="{{ asset('admin/webarch/css/webarch.css') }}" rel="stylesheet" type="text/css" />
    <!-- END CORE CSS FRAMEWORK -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>
  <!-- END HEAD -->
  <style type="text/css">
    .well {
      background: white;
      border-radius: 0px !important;
    }
  </style>
  <!-- BEGIN BODY -->
  <body class="">
    <!-- BEGIN HEADER -->
    <div class="header navbar navbar-inverse ">
      <!-- BEGIN TOP NAVIGATION BAR -->
      <div class="navbar-inner">
        <div class="header-seperation">
          <ul class="nav pull-left notifcation-center visible-xs visible-sm">
            <li class="dropdown">
              <a href="#main-menu" data-webarch="toggle-left-side">
                <i class="material-icons">menu</i>
              </a>
            </li>
          </ul>
          <!-- BEGIN LOGO -->
          <a href="index-2.html">
            <!--loGOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO-->
          </a>
          <!-- END LOGO -->
        
        </div>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <div class="header-quick-nav">
          <!-- BEGIN TOP NAVIGATION MENU -->
          <div class="pull-left">
            <ul class="nav quick-section">
              <li class="quicklinks">
                <a href="#" class="" id="layout-condensed-toggle">
                  <i class="material-icons">menu</i>
                </a>
              </li>
            </ul>
           </div>
          <!-- END TOP NAVIGATION MENU -->
          </div>
        <!-- END TOP NAVIGATION MENU -->
      </div>
      <!-- END TOP NAVIGATION BAR -->
    </div>
    <!-- END HEADER -->
    <div class="page-container row">
      <!-- BEGIN SIDEBAR -->
      <div class="page-sidebar " id="main-menu">
        <!-- BEGIN MINI-PROFILE -->
        <div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper">
          <div class="user-info-wrapper sm">
            <div class="profile-wrapper sm">
              <img src="assets/img/profiles/avatar.jpg" alt="" data-src="assets/img/profiles/ava.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" width="69" height="69" />
               <div class="availability-bubble online"></div>
              </div>
           </div>
          <!-- END MINI-PROFILE -->
            <!-- BEGIN SIDEBAR MENU -->
            <p class="menu-title sm">
              Dennis  
              <span class="pull-right"><a href="javascript:;"><i class="material-icons">refresh</i></a></span>
            </p>
          <ul>
            <li>
              <a href="{{ Url('admin/dashboard') }}"> 
                <i class="material-icons">home</i> <span class="title">Dashboard</span> 
              </a>
            </li>
            <li>
              <a href="javascript:;"> 
                <i class="material-icons">group</i> <span class="title">Users</span> <span class=" arrow"></span> </a>
              <ul class="sub-menu">
                <li>
                    <a href="{{ Url('admin/users') }}"> 
                      <i class="fa fa-users"></i> Active Users 
                     <!-- <span class=" label label-info pull-right m-r-30">New User</span> --> 
                    </a>
                </li>
                <li>
                    <a href="{{ Url('admin/users/deactivate') }}"> 
                      <i class="fa  fa-ban"></i>  Disable users
                    </a> 
                </li>
                <li>
                    <a href="{{ Url('admin/users/flags') }}"> 
                      <i class="fa  fa-ban"></i>  Flagged user
                    </a> 
                </li>
              </ul>
            </li>
            <li>
              <a href="javascript:;"> 
                <i class="material-icons">email</i> 
                <span class="title">Request</span> 
                <span class=" arrow"></span> 
              </a>
              <ul class="sub-menu">
                  <li>
                    <a href="{{ Url('admin/alert/receive') }}">
                      <i class="fa fa-envelope"></i> Request Receive   
                      <span class=" label label-info pull-right m-r-30">New </span> 
                    </a>
                  </li>
                  <li> 
                    <a href="{{ Url('admin/alert/forward') }}">
                        <i class="fa fa-envelope"></i>  forward Alert 
                    </a> 
                  </li>
              </ul>
            </li>
            <li>
              <a href="javascript:;"> 
                <i class="fa fa-money"></i> 
                <span class="title">Credit</span> 
                <span class=" arrow"></span> 
              </a>
              <ul class="sub-menu">
                  <li>
                    <a href="{{ Url('admin/credit') }}">
                      <i class="fa fa-money"></i> Credit History   
                      <span class=" label label-info pull-right m-r-30">New </span> 
                    </a>
                  </li>
              </ul>
            </li>
            <li>
              <a href="{{ route('categories.index') }}"> 
                <i class="fa fa-list-alt"></i> <span class="title">Categories</span> 
              </a>
            </li>
            <li>
              <a href="javascript:;"> 
                <i class="fa fa-gear"></i> 
                <span class="title">Settings</span> <span class=" arrow"></span> 
              </a>
              <ul class="sub-menu">
                <li>
                    <a href="setting.php"> 
                      <i class="fa fa-circle"></i> General Settings 
                     <!-- <span class=" label label-info pull-right m-r-30">New User</span> --> 
                    </a>
                </li>
                <li>
                    <a href="{{ Url('admin/settings/add/user') }}"> 
                      <i class="fa fa-user"></i> Add new admin 
                     <!-- <span class=" label label-info pull-right m-r-30">New User</span> --> 
                    </a>
                </li>
                <li>
                    <a href="{{ Url('admin/settings/admin/list') }}"> 
                      <i class="fa fa-users"></i> Admins list 
                     <!-- <span class=" label label-info pull-right m-r-30">New User</span> --> 
                    </a>
                </li>
              </ul>
            </li>
            <li>
               <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                 <i class="fa fa-power-off"></i> Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
          </ul>
          <div class="clearfix"></div>
          <!-- END SIDEBAR MENU -->
        </div>
      </div>
     
      <div class="footer-widget">
        <div class="progress transparent progress-small no-radius no-margin">
          <div class="progress-bar progress-bar-success animate-progress-bar" data-percentage="79%" style="width: 79%;"></div>
          </div>
            <div class="pull-right">
          <div class="details-status"> <span class="animate-number" data-value="86" data-animation-duration="560">86</span>% </div>
          <a href="lockscreen.html"><i class="material-icons">power_settings_new</i></a></div>
       </div>
      <!-- END SIDEBAR -->
        @yield('content')
    </div> 
    <script src="{{ asset('admin/assets/plugins/pace/pace.min.js') }}" type="text/javascript"></script>
    <!-- BEGIN JS DEPENDECENCIES-->
    <script src="{{ asset('admin/assets/plugins/jquery/jquery-1.11.3.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/plugins/bootstrapv3/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/plugins/jquery-block-ui/jqueryblockui.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/plugins/jquery-unveil/jquery.unveil.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/plugins/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/plugins/bootstrap-select2/select2.min.js') }}" type="text/javascript"></script>
    <!-- END CORE JS DEPENDECENCIES-->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="{{ asset('admin/webarch/js/webarch.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/js/chat.js') }}" type="text/javascript"></script>
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="{{ asset('admin/assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/plugins/jquery-block-ui/jqueryblockui.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/plugins/bootstrap-select2/select2.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/plugins/jquery-ricksaw-chart/js/raphael-min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/jquery-ricksaw-chart/js/d3.v2.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/jquery-ricksaw-chart/js/rickshaw.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/jquery-morris-chart/js/morris.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/jquery-easy-pie-chart/js/jquery.easypiechart.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/jquery-slider/jquery.sidr.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/plugins/jquery-jvectormap/js/jquery-jvectormap-1.2.2.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/plugins/jquery-jvectormap/js/jquery-jvectormap-us-lcc-en.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/plugins/jquery-sparkline/jquery-sparkline.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/jquery-flot/jquery.flot.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/jquery-flot/jquery.flot.animator.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/skycons/skycons.js') }}"></script>
    <!-- END PAGE LEVEL PLUGINS   -->
    <!-- PAGE JS -->
    <script src="{{ asset('admin/assets/js/dashboard.js') }}" type="text/javascript"></script>
  </body>
</html>