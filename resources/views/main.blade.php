<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <title>BreezyCV - Resume / CV / vCard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="BreezyCV - Resume / CV / vCard Template" />
    <meta name="keywords" content="vcard, resposnive, retina, resume, jquery, css3, bootstrap, Material CV, portfolio" />
    <meta name="author" content="lmpixels" />
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="{{ asset('css/reset.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-grid.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/animations.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/perfect-scrollbar.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/main.css')}}" type="text/css">

    <script src="{{ asset('js/modernizr.custom.js')}}"></script>
  </head>

  <body>
    <!-- Animated Background -->
    <div class="lm-animated-bg" style="background-image: url({{asset('img/main_bg.png')}});"></div>
    <!-- /Animated Background -->

   @include('parts.animation')
    <div class="page">
      <div class="page-content">

        @include('parts.header')
        @include('parts.arrows')

          <div class="content-area">
            <div class="animated-sections">
              @include('profile')
              @include('parts.about')
              @include('resume')
              @include('porfolio')
              @include('blog.index')
              @include('contact')
            </div>
          </div>

      </div>
    </div>

    <script src="{{ asset('js/jquery-2.1.3.min.js')}}"></script>
    <script src="{{ asset('js/modernizr.custom.js')}}"></script>
    <script src="{{ asset('js/animating.js')}}"></script>

    <script src="{{ asset('js/imagesloaded.pkgd.min.js')}}"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <script src="{{ asset('js/perfect-scrollbar.min.js')}}"></script>
    <script src="{{ asset('js/jquery.shuffle.min.js')}}"></script>
    <script src="{{ asset('js/masonry.pkgd.min.js')}}"></script>
    <script src="{{ asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js ')}}"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCrDf32aQTCVENBhFJbMBKOUTiUAABtC2o"></script>
    <script src="{{ asset('js/jquery.googlemap.js')}}"></script>
    <script src="{{ asset('js/validator.js')}}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
  </body>
</html>
