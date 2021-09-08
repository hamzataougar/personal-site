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


          <div class="content-area single-page-area">
            <div class="single-page-content">

              <article class="post">

                <div class="post-thumbnail">
                  <img src="{{ Voyager::image( $post->image ) }}" alt="image">
                </div>

                <div class="post-content">
                  <!-- /Entry header -->
                  <header class="entry-header">
                    <!-- Entry meta -->
                    <div class="entry-meta entry-meta-top">
                      <span><a href="#" rel="category tag">{{$category->name}}</a></span>        
                    </div>
                    <!-- /Entry meta -->

                <h2 class="entry-title">{{$post->title}}</h2>
                  </header>
                  <!-- /Entry header -->

                  <!-- Entry content -->
                  <div class="entry-content">
                    <div class="row">
                      <div class=" col-xs-12 col-sm-12 ">
                        <div class="col-inner">
                        {!! $post->body !!}  
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /Entry content -->
    
                  <div class="entry-meta entry-meta-bottom">
                    <div class="date-author">
                      <span class="entry-date">
                        <a href="#" rel="bookmark">
                          <i class="far fa-clock"></i> <span class="entry-date">{{$post->created_at->diffForHumans() }}</span>
                        </a>
                      </span>
                      <span class="author vcard">
                        <a class="url fn n" href="#" rel="author"> <i class="fas fa-user"></i> {{$author->name}}</a>
                      </span>
                    </div>
      
                    <!-- Share Buttons -->
                    <div class="entry-share btn-group share-buttons">
                      <a href="#" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" class="btn" target="_blank" title="Share on Facebook">
                        <i class="fab fa-facebook-f"></i>
                      </a>
                      
                      <a href="#" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" class="btn" target="_blank" title="Share on Twitter">
                        <i class="fab fa-twitter"></i>
                      </a>

                      <a href="#" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="btn" title="Share on LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                      </a>
                    </div>
                    <!-- /Share Buttons -->
                  </div>

                  <div class="post-tags">
                    <div class="tags">
                      <a href="#" rel="tag">animate</a>
                      <a href="#" rel="tag">bar</a>
                      <a href="#" rel="tag">design</a>
                      <a href="#" rel="tag">progress</a>
                      <a href="#" rel="tag">ui</a>
                    </div>
                  </div>
                </div>
              </article>

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
