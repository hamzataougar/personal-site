<header id="site_header" class="header mobile-menu-hide">
    <div class="header-content">
      <div class="header-photo">
      <img src="{{ Voyager::image( $profile->avatar ) }}" alt="{{$profile->fullname}}">
      </div>
      <div class="header-titles">
      <h2>{{$profile->fullname}}</h2>
      <h4>{{$profile->main_job}}</h4>
      </div>
    </div>

    <ul class="main-menu">
      <li class="active">
        <a href="/#home" class="nav-anim">
          <span class="menu-icon lnr lnr-home"></span>
          <span class="link-text">Home</span>
        </a>
      </li>
      <li>
        <a href="/#about-me" class="nav-anim">
          <span class="menu-icon lnr lnr-user"></span>
          <span class="link-text">About Me</span>
        </a>
      </li>
      <li>
        <a href="/#resume" class="nav-anim">
          <span class="menu-icon lnr lnr-graduation-hat"></span>
          <span class="link-text">Resume</span>
        </a>
      </li>
      <li>
        <a href="/#portfolio" class="nav-anim">
          <span class="menu-icon lnr lnr-briefcase"></span>
          <span class="link-text">Portfolio</span>
        </a>
      </li>
      <li>
        <a href="/#blog" class="nav-anim">
          <span class="menu-icon lnr lnr-book"></span>
          <span class="link-text">Blog</span>
        </a>
      </li>
      <li>
        <a href="/#contact" class="nav-anim">
          <span class="menu-icon lnr lnr-envelope"></span>
          <span class="link-text">Contact</span>
        </a>
      </li>
    </ul>

    <div class="social-links">
      <ul>
      <li><a href="{{$profile->github_account}}" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
        <li><a href="{{$profile->github_account}}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="{{$profile->github_account}}" target="_blank"><i class="fab fa-twitter"></i></a></li>
      </ul>
    </div>

    <div class="header-buttons">
      <a href="#" target="_blank" class="btn btn-primary">Download CV</a>
    </div>

    <div class="copyrights">© {{ now()->year }} All rights reserved.</div>
  </header>

  <!-- Mobile Navigation -->
  <div class="menu-toggle">
    <span></span>
    <span></span>
    <span></span>
  </div>
  <!-- End Mobile Navigation -->
