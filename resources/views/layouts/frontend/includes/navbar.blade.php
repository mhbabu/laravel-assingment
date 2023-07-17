<nav class="fugro-nav navbar navbar-expand-lg @if(in_array(request()->url(),[route('contact-us'), route('faq'), route('privacy-policy'), route('terms-condition') ]))contact-nav @endif" >
    <div class="container custom-container">
      <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{ url('assets/frontend/img/logo.png') }}" alt="logo" height="120" width="200"  />
      </a>
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav">
        <span class="navbar-toggler-icon"></span>
        <span class="navbar-toggler-icon"></span>
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse offcanvas offcanvas-end" id="main_nav">
        <ul class="navbar-nav">
          <li class="nav-item dropdown has-megamenu hover-dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> Home  </a>
            <!-- dropdown menu -->
            <div class="dropdown-menu megamenu" role="menu">
              <div class="container custom-container">
                <div class="d-flex megamenu-row">
                  <div class="megamenu-item col-md-4">
                    <h3>Home</h3>
                    <h4>See the industries we work in</h4>
                    <a href="{{ url('/') }}" class="arrow">
                      <span class="arrow-box">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"><path fill="currentColor" fill-rule="evenodd" d="M9 8 4 3h2.828l4.293 4.293a1 1 0 0 1 0 1.414L6.828 13H4l5-5Z" clip-rule="evenodd"></path></svg>
                      </span>
                      Home overview
                    </a>
                  </div>
                  <div class="megamenu-item col-md-4">
                    <a href="/" class="megamenu-item-list">Energy</a>
                    <a href="/" class="megamenu-item-list">Water</a>
                    <a href="/" class="megamenu-item-list">Infrastructure</a>
                  </div>
                  <div class="megamenu-item col-md-4">
                    <a href="/" class="position-relative img-overlay-content">
                      <img src="https://placehold.co/416x276" alt="wid fugro" class="img-fluid">
                      <div class="text-content">
                        <p class="dot">Water</p>
                        <div class="d-flex justify-content-between">
                          <p>Protecting our oceans and their surrounding environments</p>
                          <div class="arrow-big">
                            <span class="box">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><path fill="currentColor" fill-rule="evenodd" d="m17.586 11-5.5-5.5h2.828l5.794 5.793a1 1 0 0 1 0 1.414L14.915 18.5h-2.829l5.5-5.5H4l-2-1 2-1h13.586Z" clip-rule="evenodd"></path></svg>
                            </span>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div> <!-- dropdown-mega-menu.// -->
          </li>
          <li class="nav-item dropdown has-megamenu hover-dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> Projects </a>
            <!-- dropdown menu -->
            <div class="dropdown-menu megamenu" role="menu">
              <div class="container custom-container">
                <div class="d-flex megamenu-row">
                  <div class="megamenu-item col-md-4">
                    <h3>Projects</h3>
                    <h4>See the projects we work in</h4>
                    <a href="{{ url('projects') }}" class="arrow">
                      <span class="arrow-box">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"><path fill="currentColor" fill-rule="evenodd" d="M9 8 4 3h2.828l4.293 4.293a1 1 0 0 1 0 1.414L6.828 13H4l5-5Z" clip-rule="evenodd"></path></svg>
                      </span>
                      Projects overview
                    </a>

                  </div>
                  <div class="megamenu-item col-md-4">
                    <a href="/" class="megamenu-item-list">Energy</a>
                    <a href="/" class="megamenu-item-list">Water</a>
                    <a href="/" class="megamenu-item-list">Infrastructure</a>
                  </div>
                  <div class="megamenu-item col-md-4">
                    <a href="/" class="position-relative img-overlay-content">
                      <img src="https://placehold.co/416x276" alt="wid fugro" class="img-fluid">
                      <div class="text-content">
                        <p class="dot">Water</p>
                        <div class="d-flex justify-content-between">
                          <p>Protecting our oceans and their surrounding environments</p>
                          <div class="arrow-big">
                            <span class="box">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><path fill="currentColor" fill-rule="evenodd" d="m17.586 11-5.5-5.5h2.828l5.794 5.793a1 1 0 0 1 0 1.414L14.915 18.5h-2.829l5.5-5.5H4l-2-1 2-1h13.586Z" clip-rule="evenodd"></path></svg>
                            </span>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div> <!-- dropdown-mega-menu.// -->
          </li>
          <li class="nav-item dropdown has-megamenu hover-dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> Services  </a>
            <!-- dropdown menu -->
            <div class="dropdown-menu megamenu" role="menu">
              <div class="container custom-container">
                <div class="d-flex megamenu-row">
                  <div class="megamenu-item col-md-4">
                    <h3>Services</h3>
                    <h4>See the Services we work in</h4>
                    <a href="{{ url('services') }}" class="arrow">
                      <span class="arrow-box">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"><path fill="currentColor" fill-rule="evenodd" d="M9 8 4 3h2.828l4.293 4.293a1 1 0 0 1 0 1.414L6.828 13H4l5-5Z" clip-rule="evenodd"></path></svg>
                      </span>
                      Services overview
                    </a>

                  </div>
                  <div class="megamenu-item col-md-4">
                    <a href="/" class="megamenu-item-list">Energy</a>
                    <a href="/" class="megamenu-item-list">Water</a>
                    <a href="/" class="megamenu-item-list">Infrastructure</a>
                  </div>
                  <div class="megamenu-item col-md-4">
                    <a href="/" class="position-relative img-overlay-content">
                      <img src="https://placehold.co/416x276" alt="wid fugro" class="img-fluid">
                      <div class="text-content">
                        <p class="dot">Water</p>
                        <div class="d-flex justify-content-between">
                          <p>Protecting our oceans and their surrounding environments</p>
                          <div class="arrow-big">
                            <span class="box">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><path fill="currentColor" fill-rule="evenodd" d="m17.586 11-5.5-5.5h2.828l5.794 5.793a1 1 0 0 1 0 1.414L14.915 18.5h-2.829l5.5-5.5H4l-2-1 2-1h13.586Z" clip-rule="evenodd"></path></svg>
                            </span>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div> <!-- dropdown-mega-menu.// -->
          </li>
          <li class="nav-item dropdown has-megamenu hover-dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> Contact Us  </a>
            <!-- dropdown menu -->
            <div class="dropdown-menu megamenu" role="menu">
              <div class="container custom-container">
                <div class="d-flex megamenu-row">
                  <div class="megamenu-item col-md-4">
                    <h3>Contact Us</h3>
                    <h4>See the Contact Us we work in</h4>
                    <a href="{{ url('contact-us') }}" class="arrow">
                      <span class="arrow-box">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"><path fill="currentColor" fill-rule="evenodd" d="M9 8 4 3h2.828l4.293 4.293a1 1 0 0 1 0 1.414L6.828 13H4l5-5Z" clip-rule="evenodd"></path></svg>
                      </span>
                      Contact Us overview
                    </a>
                  </div>
                  <div class="megamenu-item col-md-4">
                    <a href="/" class="megamenu-item-list">Energy</a>
                    <a href="/" class="megamenu-item-list">Water</a>
                    <a href="/" class="megamenu-item-list">Infrastructure</a>
                  </div>
                  <div class="megamenu-item col-md-4">
                    <a href="/" class="position-relative img-overlay-content">
                      <img src="https://placehold.co/416x276" alt="wid fugro" class="img-fluid">
                      <div class="text-content">
                        <p class="dot">Water</p>
                        <div class="d-flex justify-content-between">
                          <p>Protecting our oceans and their surrounding environments</p>
                          <div class="arrow-big">
                            <span class="box">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><path fill="currentColor" fill-rule="evenodd" d="m17.586 11-5.5-5.5h2.828l5.794 5.793a1 1 0 0 1 0 1.414L14.915 18.5h-2.829l5.5-5.5H4l-2-1 2-1h13.586Z" clip-rule="evenodd"></path></svg>
                            </span>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div> <!-- dropdown-mega-menu.// -->
          </li>
          {{-- <li class="nav-item dropdown has-megamenu hover-dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> News  </a>
            <!-- dropdown menu -->
            <div class="dropdown-menu megamenu" role="menu">
              <div class="container custom-container">
                <div class="d-flex megamenu-row">
                  <div class="megamenu-item col-md-4">
                    <h3>News</h3>
                    <h4>See the News we work in</h4>
                    <a href="" class="arrow">
                      <span class="arrow-box">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"><path fill="currentColor" fill-rule="evenodd" d="M9 8 4 3h2.828l4.293 4.293a1 1 0 0 1 0 1.414L6.828 13H4l5-5Z" clip-rule="evenodd"></path></svg>
                      </span>
                      Industries overview
                    </a>

                  </div>
                  <div class="megamenu-item col-md-4">
                    <a href="/" class="megamenu-item-list">Energy</a>
                    <a href="/" class="megamenu-item-list">Water</a>
                    <a href="/" class="megamenu-item-list">Infrastructure</a>
                  </div>
                  <div class="megamenu-item col-md-4">
                    <a href="/" class="position-relative img-overlay-content">
                      <img src="assets/frontend/img/fugro-top.webp" alt="wid fugro" class="img-fluid">
                      <div class="text-content">
                        <p class="dot">Water</p>
                        <div class="d-flex justify-content-between">
                          <p>Protecting our oceans and their surrounding environments</p>
                          <div class="arrow-big">
                            <span class="box">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><path fill="currentColor" fill-rule="evenodd" d="m17.586 11-5.5-5.5h2.828l5.794 5.793a1 1 0 0 1 0 1.414L14.915 18.5h-2.829l5.5-5.5H4l-2-1 2-1h13.586Z" clip-rule="evenodd"></path></svg>
                            </span>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div> <!-- dropdown-mega-menu.// -->
          </li> --}}
          <li class="nav-item dropdown has-megamenu hover-dropdown">
            <a class="nav-link dropdown-toggle" href="{{ url('/about-us')}}" data-bs-toggle="dropdown"> About us  </a>
            <!-- dropdown menu -->
            <div class="dropdown-menu megamenu" role="menu">
              <div class="container custom-container">
                <div class="d-flex megamenu-row">
                  <div class="megamenu-item col-md-4">
                    <h3>About us</h3>
                    <h4>See the News we work in</h4>
                    <a href="{{ url('about-us') }}" class="arrow">
                      <span class="arrow-box">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"><path fill="currentColor" fill-rule="evenodd" d="M9 8 4 3h2.828l4.293 4.293a1 1 0 0 1 0 1.414L6.828 13H4l5-5Z" clip-rule="evenodd"></path></svg>
                      </span>
                      About Us overview
                    </a>

                  </div>
                  <div class="megamenu-item col-md-4">
                    <a href="/" class="megamenu-item-list">Energy</a>
                    <a href="/" class="megamenu-item-list">Water</a>
                    <a href="/" class="megamenu-item-list">Infrastructure</a>
                  </div>
                  <div class="megamenu-item col-md-4">
                    <a href="/" class="position-relative img-overlay-content">
                      <img src="https://placehold.co/416x276" alt="wid fugro" class="img-fluid">
                      <div class="text-content">
                        <p class="dot">Water</p>
                        <div class="d-flex justify-content-between">
                          <p>Protecting our oceans and their surrounding environments</p>
                          <div class="arrow-big">
                            <span class="box">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><path fill="currentColor" fill-rule="evenodd" d="m17.586 11-5.5-5.5h2.828l5.794 5.793a1 1 0 0 1 0 1.414L14.915 18.5h-2.829l5.5-5.5H4l-2-1 2-1h13.586Z" clip-rule="evenodd"></path></svg>
                            </span>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div> <!-- dropdown-mega-menu.// -->
          </li>
        </ul>
        <div class="ms-lg-auto d-flex align-items-center login-action">
          <a href="{{ route('login') }}" class="login-icon d-inline-block">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><circle cx="12" cy="7.5" r="5" stroke="currentColor" stroke-width="2"></circle><path fill="currentColor" fill-rule="evenodd" d="M5.834 17a1 1 0 0 0-.924.615l-1.987 4.77L1.25 23.5l-.173-1.885 1.987-4.769A3 3 0 0 1 5.834 15h12.333a3 3 0 0 1 2.77 1.846l1.986 4.77L22.5 23.5l-1.423-1.115-1.987-4.77a1 1 0 0 0-.923-.615H5.834Z" clip-rule="evenodd"></path></svg>
          </a>
          <span class="middle-line mx-3"></span>
          <a href="/" class="touch-btn">Get in touch</a>
        </div>
      </div> <!-- navbar-collapse.// -->
    </div> <!-- container-fluid.// -->
  </nav>