<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="#">
    <meta name="keywords" content="#">

    <meta name="robots" content="index, follow">
    <title> @yield('title') </title>
	
	<!-- core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/about.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plans.css') }}" rel="stylesheet">
    <link href="{{ asset('css/pricing.css') }}" rel="stylesheet">
    <link href="{{ asset('css/record.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/contact.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
           <!-- jQuery -->
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
            <!-- Scripts -->
    

    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
 
    <script src="{{ asset('plugins/formsubmit/form.submit.min.js')}}"></script>

    <link rel="shortcut icon" href="#">


     <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
     <script src="{{ asset('js/signup.js') }}" defer></script>
     <script src="{{ asset('js/request.js') }}"></script>
     <script src="{{ asset('js/categories.js') }}"></script>
     <script src="{{ asset('js/uploads.js') }}"></script>
</head>
<style type="text/css">
    .btn {
        border-radius: 0px;
    }
    .form-control {
      border-radius: 0px;
    }
    .mar-top {
      margin-top:10px !important;
    }
    .mar-top input {
      border-radius:0px !important;
      border-left: 0px !important;
    }
    .border-r {
      background:#ffffff !important;
      border-right:none;
    }
    .loc {
      margin-left:5px !important;
    }
</style>
<!--/head-->
@php
  $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']);
  $code = $arr_ip['city'];
@endphp
<body class="homepage">
         <nav class="shadow p-3 mb-5 rounded navbar navbar-expand-lg fixed-top navbar-light bg-blue">
            <div class="container-fluid">
                  <a class="navbar-brand" href="{{ route('sell') }}">
                      <img src="{{ asset('site/imgs/logo.png')}}" height="60px" width="80px">
                  </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <form class="form-inline my-2 my-lg-0 mar-top" action="{{ route('filter.sell') }}" method="get">
                      @csrf
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text border-r">
                                <i class="fa fa-map-marker"></i>
                              </span>
                            </div>
                            <input type="text" class="form-control" placeholder="Location">
                          </div>
                          <div class="input-group mb-3 loc">
                            <div class="input-group-prepend">
                              <span class="input-group-text border-r">
                                <i class="fa fa-map-marker"></i>
                              </span>
                            </div>
                            <input type="text" class="form-control" placeholder="State">
                          </div>
                          <div class="input-group mb-3 loc">
                            <div class="input-group-prepend">
                              <span class="input-group-text border-r">
                                <i class="fa fa-map-marker"></i>
                              </span>
                            </div>
                            <input type="text" class="form-control" placeholder="city">
                          </div>
                          <div class="input-group mb-3 loc">
                            <div class="input-group-prepend">
                              <span class="input-group-text border-r">
                                <i class="fa fa-search"></i>
                              </span>
                            </div>
                            <input type="text" class="form-control" placeholder="Search Here">
                          </div>
                          <div class="input-group mb-3 loc">
                            <div class="input-group-prepend">
                                <button class="btn btn-info">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                          </div>  
                    </form>
                    <ul class="navbar-nav ml-auto">
                      @guest
                        <li class="nav-item active">
                          <a class="nav-link" href="{{ route('login') }}">
                              <font color="white">
                                  <i class="fa fa-sign-in"></i> Login
                              </font>
                          </a>
                        </li>
                      @else 
                        <li class="nav-item active">
                          <a class="nav-link" style="margin-top:-8px;" href="{{ route('home') }}">
                              @if(!empty(auth::user()->dp))
                                  <img src="Uploads/{{ auth::user()->dp }}" id="dp" height="40px" width="40px" style="border-radius: 50%; border: 1px solid white;" />
                              @else 
                                <img src="{{asset('images/upload.jpg')}}" id="dp" height="40px" width="40px" style="border-radius: 50%; border: 1px solid white;" />
                              @endif
                          </a>
                        </li>  
                      @endguest
                      <li class="nav-item">
                        <a href="{{ route('sell.create') }}">
                            <button class="btn btn-warning"><i class="fa fa-shopping-bag"></i> Sell</button>
                        </a>
                      </li>
                    </ul>
                  </div>
            </div>
        </nav>
@guest
       
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Congrats!</strong> {{ $message }}
        </div>
        @endif
        @if ($message = Session::get('warning'))
        <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>warning!</strong>  {{ $message }}
        </div>
        @endif
        @if ($errors->has('email'))
        <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Error!</strong> {{ $errors->first('email') }}
        </div>
        @endif
        @if ($errors->has('password'))
        <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Error!</strong> {{ $errors->first('password') }}
        </div>
        @endif
@endguest
<br /> <br /> <br /> <br />
@yield('content')
<footer id="footer1" >
        <ul class="f_links">
            <li><a href="/about">About</a></li>
            <li><a href="/plans">Plans</a></li>
            <li><a href="/pricing">Pricing</a></li>
            <li><a href="/kunnec-record">Kunnec Record</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="/kunnec-to-me">Kunnec to Me</a></li>
            <li><a href="/kunnec-to-you">Kunnec to You</a></li>
            <li><a href="/shop">Kunnec Shop</a></li>
            <li><a href="#">Terms</a></li>
            <li><a href="#">Privacy</a></li>
        </ul>
        <div class="copyright_k">
                Copyright &copy; 2018 <a href="http://www.kunnec.com" title="KUNNEC">KUNNEC</a>        
        </div>
</footer>    
</body>
</html>

    
    