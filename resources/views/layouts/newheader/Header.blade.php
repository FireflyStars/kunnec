<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield('title') </title>
	<!-- Favicons -->
    <link rel="shortcut icon" type="image/x-icon" href="Images/favicon.ico">
    <!-- Font Awesome JS -->
    <script type="text/javascript" src="{{ asset('newlook/js/all.min.js') }}"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('newlook/js/event.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="{{ asset('newlook/css/home_navsb.css') }}" />
    <link rel="stylesheet" href="{{ asset('newlook/assets/lib/select2/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('newlook/assets/lib/flatpickr/flatpickr.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('newlook/assets/lib/dropzone/dropzone.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('newlook/css/shop_card.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Google Translate -->
    <script type="text/javascript">
        function googleTranslateElementInit()  { 
            new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
        }
    </script>
    <!-- google translator -->
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>
</head>
<style type="text/css">
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

      .jumbotron{
        background-color: white !important;
        margin-top:10px;
      }
      .card {
        background-color: white;
        margin-bottom: 10px;
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
<body>
     <!-- Start Wrapper -->
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar" >
            <div class="sidebar-header">
                <img src="{{ asset('newlook/images/logos/K_Logo6.png') }}" height="40px" width="60px"/>
            </div>
            <ul class="list-unstyled components">
                <p>
                    <img src="{{ asset('uploads') }}/{{ Auth::user()->dp }}" width="50px" height="50px" class="rounded-circle img-border box-shadow-1" alt="Card image"> 
                    {{ Auth::user()->fname }} {{ Auth::user()->lname }} 
                </p>
                <li>
                    <a href="{{ route('home') }}">
                        <i class="fas fa-home"></i> Home
                    </a>
                    <a href="{{ route('newlook.schedual') }}">
                        <i class="fas fa-pencil-alt"></i> My Schedule
                    </a>
                    <a href="{{ route('newlook.photoeditor') }}">
                        <i class="fas fa-camera"></i> Photo Editor
                    </a>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-users"></i> Social
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                             <a href="{{ route('social.edit-profile') }}" dats-target="edit-profile">
                                Edit Profile
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('social.account-settings') }}">
                                Account Settings
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('social.account-invoice') }}">
                                Account Invoices
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('social.messages') }}">
                                Messages
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('social.kunnecs') }}">
                                My Kunnecs
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('social.notification') }}">
                                Notifications
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('social.mutual-kunnecs') }}">
                                Mutual Kunnecs
                            </a>
                        </li>
                        <li>
                            <a href="#kunnectomeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Events</a>
                                <ul class="collapse list-unstyled" id="kunnectomeSubmenu">
                                    <li>
                                        <a href="{{ route('event.index') }}"> Your Events</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('event.create') }}"> Create an Event</a>
                                    </li>
                                    <li>
                                        <a href="#"> List of Event Invites</a>
                                    </li>
                                </ul>
                        </li>
                        <li>
                            <a href="{{ route('social.archived-posts') }}">
                                Archived Posts
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('social.reported-posts') }}">
                                Reported Posts
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#kunnecSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-globe" style="color: #FA8D0A"></i> Kunnec
                    </a>
                    <ul class="collapse list-unstyled" id="kunnecSubmenu">
                        <li>
                            <a href="#kunnectome" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> kunnec to Me
                            </a>
                            <ul class="collapse list-unstyled" id="kunnectome">
                                    <li>
                                        <a href="{{ route('newlook.tomeadd') }}"> Post Opportunity</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('newlook.tomejobs') }}"> Your Posts</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('newlook.tomejobs') }}">opportunities</a>
                                    </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#kunnectoyou" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> kunnec to You
                            </a>
                            <ul class="collapse list-unstyled" id="kunnectoyou">
                                    <li>
                                        <a href="{{ route('newlook.user', Auth::id()) }}"> Your Profile </a>
                                    </li>       
                            </ul>



                        </li>
                        <li>
                            <a href="#kunnecshop" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> kunnec shop
                            </a>
                            <ul class="collapse list-unstyled" id="kunnecshop">
                                    <li>
                                        <a href="{{ route('sells.index') }}"> Home </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('shop.index') }}"> My Store </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('sells.create') }}"> Create Add </a>
                                    </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#kunneccourseSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Kunnec Courses
                            </a>
                            <ul class="collapse list-unstyled" id="kunneccourseSubmenu">
                                    <li>
                                        <a href="pages/course/kunnec_courses.php"> Home</a>
                                    </li>
                                    <li>
                                        <a href="pages/course/k_course_pw.php">Settings</a>
                                    </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#kunnecteachSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> 
                                Kunnec Screen
                            </a>
                            <ul class="collapse list-unstyled" id="kunnecteachSubmenu">
                                <li>
                                    <a href="#kunnectutorSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> 
                                        Tutors
                                    </a>
                                    <ul class="collapse list-unstyled" id="kunnectutorSubmenu">
                                        <li>
                                            <a href="pages/teach/k_teach.php"> Home</a>
                                        </li>
                                        <li>
                                            <a href="pages/teach/k_teach_saved.php">Settings</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#kunnecrecordSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> 
                                        Recording
                                    </a>
                                    <ul class="collapse list-unstyled" id="kunnecrecordSubmenu">
                                        <li>
                                            <a href="pages/record/k_record.php"> Home</a>
                                        </li>
                                        <li>
                                            <a href="pages/record/k_record_saved.php">Settings</a>
                                        </li>
                                    </ul>
                                </li>       
                            </ul>
                        </li>
                        <li>
                            <a href="#kunnecshowSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Kunnec Live Show</a>
                                <ul class="collapse list-unstyled" id="kunnecshowSubmenu">
                                    <li>
                                        <a href="pages/show/k_show.php"> Home</a>
                                    </li>
                                    <li>
                                        <a href="pages/show/k_show_saved.php">Settings</a>
                                    </li>
                                </ul>
                        </li>
                        </li>
                        <li>
                            <a href="#kunnecvidaccountSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> 
                                    Kunnec Vid
                            </a>
                            <ul class="collapse list-unstyled" id="kunnecvidaccountSubmenu">
                                <li>
                                    <a href="pages/vid/k_vid.php"> Home</a>
                                </li>
                                <li>
                                     <a href="pages/vid/k_vid_subscriptions.php">Settings </a>
                                </li>   
                            </ul>
                        </li>
                        <li>
                            <a href="#kunnecbooksaccountSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> 
                                Kunnec Books
                            </a>
                            <ul class="collapse list-unstyled" id="kunnecbooksaccountSubmenu">
                                <li>
                                    <a href="pages/books/k_books.php"> Home</a>
                                </li>
                                <li>
                                     <a href="pages/books/k_books_saved.php">Settings </a>
                                </li>       
                            </ul>
                        </li>
                        <li>
                            <a href="#kunnecMusicaccountSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> 
                                Kunnec Music
                            </a>
                            <ul class="collapse list-unstyled" id="kunnecMusicaccountSubmenu">
                                <li>
                                    <a href="pages/music/examples/responsive-ui-beta/index.html"> Home</a>
                                </li>
                                <li>
                                     <a href="pages/music/k_music_saved.php">Settings </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#kunnecPodaccountSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> 
                                Kunnec pod
                            </a>
                             <ul class="collapse list-unstyled" id="kunnecPodaccountSubmenu">
                                <li>
                                    <a href="pages/pod/k_pod.php"> Home</a>
                                </li>
                                <li>
                                     <a href="pages/pod/k_pod_saved.php">Settings </a>
                                </li>
                            </ul>
                        </li>   
                    </ul>
                </li> 
                <li>
                    <a href="#!">
                        <i class="fas fa-coins"></i> 
                        Credits <span class="badge badge-success">
                        Balance: <span style="color: #FFFFFF;"> 24 </span></span>
                    </a> 
                    <a href="#">
                        <i class="fas fa-ad"></i> 
                        K-Ads <span class="badge badge-success">
                        Balance: <span style="color: #FFFFFF;"> 0 </span>
                    </a>
                    <a href="{{ route('logout') }}">
                        <i class="fas fa-times-circle"></i> Sign-Out
                    </a>
                </li>       
            </ul>
            <ul class="list-unstyled CTAs">
                <li>
                    <p>Translate below</p>
                        <div id="google_translate_element"></div>
                </li>
            </ul>
        </nav>
        <!-- End sidebar content-->
        <!-- Page Content Holder -->
        <div id="content"> 
            <nav class="navbar navbar-expand-lg navbar-custom" style="background-color: #009900;">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <form>
                         <input type="search" placeholder="Search">
                    </form>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color: #FFFFFF; color: #009900; border-color: #009900;">
                        <i class="fas fa-align-justify"></i>
                    </button> 
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <font color="#FFFFFF" data-toggle="tooltip" data-placement="bottom" title="Days left before account ends." style="font-size:18px"> Account Days:</font> <span class="badge badge-warning"> 9 </span>  
                                            &nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-user-plus" data-toggle="tooltip" data-placement="bottom" title="Kunnecs" style="color: #FFFFFF;"></i> 
                                            <span1 class="badge badge-danger"> 24</span1>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="fas fa-bell" data-toggle="tooltip" data-placement="bottom" title="Notifications" style="color: #FFFFFF;"></i> 
                                            <span1 class="badge badge-danger"> 15</span1>
                                            &nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-envelope" data-toggle="tooltip" data-placement="bottom" title="Main messages"></i> 
                                            <span1 class="badge badge-danger"> 4</span1>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="col-lg-12 pr-lg-2">
                @if(!empty($alert))
                    <div class="card mb-3 mt-3 mt-lg-0">
                            <div class="card-body fs--1">
                              <div class="media"><span class="fa fa-bolt fs-0 text-warning"></span>
                                <div class="media-body ml-2">
                                    <a class="font-weight-semi-bold" href="#">Kunnec Announcements:  
                                        <span1 class="badge badge-danger"> 4</span1>
                                    </a>
                                </div>
                              </div>
                            </div>
                    </div>
                @endif
                <!-- Mid Content -->
                @yield('content')
                <!-- End Mid Content -->

            </div>
        </div>
        <!-- Page Content Holder End -->
    </div>

    <!-- End Wrapper -->
    <script src="{{ URL::asset('js/app.js')}}" type="text/javascript"></script>
    <!-- other files  -->
    <script src="{{ asset('js/request.js') }}"></script>
    <script src="{{ asset('js/signup.js') }}"></script>
    <script src="{{ asset('js/categories.js') }}"></script>
    <script src="{{ asset('js/uploads.js') }}"></script>

    <!-- End files  -->
    <!--
    <script type="text/javascript" src="{{ asset('newlook/js/jquery-3.4.1.min.js') }}"></script>
    -->
    <!-- Sidebar Toggle -->
    <script type="text/javascript" src="{{ asset('newlook/js/sbt.js') }}"></script>
    <script src="{{ asset('newlook/assets/js/popper.min.js') }}"></script>
    <!--
    <script src="{{ asset('newlook/assets/js/bootstrap.min.js') }}"></script>
    -->
    <script src="{{ asset('newlook/assets/lib/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('newlook/assets/lib/select2/select2.min.js') }}"></script>
    <script src="{{ asset('newlook/assets/lib/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('newlook/assets/lib/dropzone/dropzone.min.js') }}"></script>
    <script src="{{ asset('newlook/assets/js/theme.js') }}"></script>
    <script src="{{ asset('newlook/assets/lib/@fortawesome/all.min.js') }}"></script>
</body>
</html>
