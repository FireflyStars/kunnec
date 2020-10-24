<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('home/assets/img/favicons/apple-touch-icon.png') }}">
        <link href="{{ asset('home/assets/lib/flatpickr/flatpickr.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('home/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('home/css/main1.css') }}">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.12.0/css/all.css">
        @yield('css')
        <title>Kunnec | Home </title>
        
        <!-- GOOGLE TRANSLATE -->
        <script type="text/javascript">
            function googleTranslateElementInit() { new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');}
        </script>
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    </head>
  
    <body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <a class="navbar-brand" href="#"><img src="{{ asset('home/images/K_Logo6.png') }}" height="60px" width="90px"/> </a>
        <div id="google_translate_element">
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mb-lg-2">
                <li class="nav-item active">
                    <a class="nav-link" href="#"> <span class="sr-only"></span></a>
                </li>
            </ul>
            
            <div class="form-inline my-2 my-lg-0">
                <form action="{{ url('/login') }}" method="post">
                    {{ csrf_field() }}
                    <input class="form-control mr-sm-2" type="search" placeholder="Username or Email" name="email" value="{{ old('email') }}" required autofocus>
                    <input class="form-control mr-sm-2 my-2" type="password" placeholder="Password"  name="password" required>
                    <button class="btn btn-danger mr-2" type="submit">Sign In</button>
                </form>
                <a href="{{ url('/register') }}">
                <button class="btn btn-warning mr-2" type="button">      
                    <font color="#FFFFFF">Sign Up</font>
                </button>
                </a>
                <p><button class="terms" type="button" data-toggle="modal" data-target="#FPModal"><a href="#!"><font color="FFFFFF">Forgot Password?</font></a></button>
            </div>
        </div>
    </nav>
    
         @yield('content')

        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('home/jquery/jquery-3.4.1.min.js') }}"></script>
    <script>
        jQuery(document).ready(function() {
          
           var btn = $('#button_scroll');

          $(window).scroll(function() {
            if ($(window).scrollTop() > 300) {
              btn.addClass('show');
            } else {
              btn.removeClass('show');
            }
          });

          btn.on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({scrollTop:0}, '300');
          });

        });
    </script>
    <script src="{{ asset('home/jquery/jquery-3.4.1.min.js')}}"></script>
    <script src="{{ asset('home/js/popper.min.js') }}"></script>
    <script src="{{ asset('home/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('home/assets/lib/is_js/is.min.js') }}"></script>
    <script src="{{ asset('home/assets/lib/lodash/lodash.min.js') }}"></script>
    <script src="{{ asset('home/assets/lib/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('home/assets/lib/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}">
    </script>
    <script src="{{ asset('home/assets/lib/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('home/assets/lib/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('home/assets/lib/dropzone/dropzone.min.js') }}"></script>
    <script src="{{ asset('home/assets/lib/lottie/lottie.min.js') }}"></script>
    <script src="{{ asset('home/assets/lib/stickyfilljs/stickyfill.min.js') }}"></script>
    <script src="{{ asset('home/assets/lib/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('home/assets/js/theme.js') }}"></script>
    <script src="{{ asset('home/assets/lib/@fortawesome/all.min.js') }}"></script>
    <script src="{{ asset('home/assets/lib/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}">
    </script>
    @yield('js')
    <script src="{{ asset('js/signup.js') }}" defer> </script>
    </body>
</html>