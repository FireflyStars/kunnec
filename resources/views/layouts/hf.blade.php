<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="#">
    <meta name="keywords" content="#">

    <meta name="robots" content="index, follow">
    <title>Kunnec</title>
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
</head>
<style type="text/css">
    .btn {
        border-radius: 0px;
    }
    .form-control {
      border-radius: 0px;
    }
</style>
<!--/head-->
<body class="homepage">
@guest
    <header id="header">     
        <nav class="navbar navbar-expand-md navbar-light bg-light" style="background:#1672c4 !important; ">
            <div class="container">
                <a href="/" class="navbar-brand">
                     <img src="{{ asset('site/imgs/logo.png')}}">
                </a> 
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
     
              <div class="collapse navbar-collapse navbar-right" style="border:none !important; padding:auto;">
                    <form style="margin-top: 20px;" action="{{ route('login') }}" method="post" class="navbar-form navbar-right ml-auto" role="login">
                        {{ csrf_field() }}
                        <div class="form-group" style="float: left;">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                            <a href="{{ url('/password/reset') }}" class="forgot-pwd">Forgot Password?</a>
                        </div>
                        <div class="form-grou{{ $errors->has('password') ? ' has-error' : '' }}" style="float: left; margin-left: 5px;">
                            <input id="password" type="password" class="form-control" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-success" style="margin-left: 5px;">Sign In
                        </button>
                        <a href="/register">
                        <button type="button" class="btn btn-warning" style="margin-left: 5px;">Sign Up
                        </button>
                        </a>
                    </form>      
              </div>
            </div>
        </nav>
    </header><!--/header-->
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
@yield('js') 
</body>
</html>

    
    