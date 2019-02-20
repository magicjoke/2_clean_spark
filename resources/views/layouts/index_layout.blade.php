<html>
<head>
    <title>POLLHOLE</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--MAIN CSS + PLUGINS-->
    <link rel="stylesheet" href="css/libs.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="libs/chartist.min.css">


  </head>
  <body class="body__primary">

    <header class="header__userpage">
      <div class="container-fluid">
        <div class="row">

          <!--Desktop nav logo-->
          <div class="col-lg-1 col-md-1 col-sm-1 col-2 d-flex flex-column align-items-start">
            <img class="logo-userpage" src="img/icons/logo.svg" alt="">
          </div>

          <!--Desktop nav search-->
          <div class="col-lg-5 col-md-5 col-sm-5 search-block">
            <form action="">
              <img src="img/userpage/search-icon.svg" alt="">
              <input type="text" placeholder="Search">
            </form>
          </div>

          <!--Desktop nav avatar & log out btn-->
          <div class="col-lg-6 col-md-6 col-sm-6 d-flex justify-content-end account-panel-info">
            <div>
              <img src="" alt="">
              <p class="username-userpage">Danny Figueros</p>
            </div>
            
            <div class="log-out-btn-block">
              <a href="#">
                <button class="log-out-btn"><img src="img/userpage/log-out-icon.svg" alt=""></button>
              </a>
            </div>
          </div>

          <!--Mobile nav-->
          <div class="col-10 d-block d-sm-none d-flex justify-content-end">
            <div class="mobile-menu">
              <img onclick="openNav()" src="img/icons/menu-primary.svg" alt="">
              <div id="myNav" class="overlay">

                <!-- Button to close the overlay navigation -->
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              
                <div class="overlay-content">
                  <div class="d-flex flex-column justify-content-center mobile-nav-btn-block">
                    <a href="">
                      <img src="" alt="">
                      <p class="username-userpage">Danny Figueros</p>
                    </a>
                    <hr>
                  </div>
                  
                  <div class="nav nav-tabs d-flex flex-column" id="nav-tab" role="tablist">
      
                    <a class="nav-item active" id="nav-home-tab" data-toggle="tab" href="#dashboard" role="tab" aria-controls="nav-home" aria-selected="true">
                      <svg xmlns="http://www.w3.org/2000/svg" width="22" height="24" viewBox="0 0 22 24">
                      <path  fill-rule="nonzero" d="M19.556 2.4h-5.11a3.675 3.675 0 0 0-6.893 0H2.444C1.1 2.4 0 3.48 0 4.8v16.8C0 22.92 1.1 24 2.444 24h17.112C20.9 24 22 22.92 22 21.6V4.8c0-1.32-1.1-2.4-2.444-2.4zM11 2.4c.672 0 1.222.54 1.222 1.2 0 .66-.55 1.2-1.222 1.2-.672 0-1.222-.54-1.222-1.2 0-.66.55-1.2 1.222-1.2zm0 4.8c2.029 0 3.667 1.608 3.667 3.6S13.029 14.4 11 14.4s-3.667-1.608-3.667-3.6S8.971 7.2 11 7.2zm7.333 14.4H3.667v-1.68c0-2.4 4.889-3.72 7.333-3.72s7.333 1.32 7.333 3.72v1.68z"/>
                      </svg>
                    </a>
      
                    <a class="nav-item" id="nav-profile-tab" data-toggle="tab" href="#create-poll" role="tab" aria-controls="nav-profile" aria-selected="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22">
                          <g  fill-rule="evenodd">
                              <rect width="4" height="22" x="9" rx="2"/>
                              <rect width="4" height="22" x="9" rx="2" transform="rotate(-90 11 11)"/>
                          </g>
                        </svg>
                    </a>
      
                    <a class="nav-item" id="nav-contact-tab" data-toggle="tab" href="#poll-results" role="tab" aria-controls="nav-contact" aria-selected="false">
                      <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22">
                        <path  fill-rule="nonzero" d="M9.625 7.876V0C4.278.55 0 5.269 0 11s4.278 10.45 9.625 11v-7.876c-1.07-.451-2.139-1.672-2.139-3.124 0-1.452 1.07-2.673 2.139-3.124zm4.74 1.749H22C21.487 4.545 17.722.503 12.375 0v7.657c1.07.321 1.626 1.048 1.99 1.968zm-1.99 4.718V22c5.347-.503 9.112-4.545 9.625-9.625h-7.636c-.363.92-.92 1.647-1.989 1.968z"/>
                      </svg>
                    </a>
                  </div>
                  <a href="" class="log-out-btn">Log out</a>
                </div>            
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    @yield('content')

    @section('footer')
    <footer class="footer__primary footer__userpage">
      <div class="container">

        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="logo-block">
                <img src="img/icons/logo.svg" alt="POLLHOLE Logo">
                <span class="logo-text">Pollhole</span>
              </div>
              <div class="logo-description">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad similique dolorem minus ratione repellat ipsam quidem necessitatibus nihil ut tempora!</p>
              </div>
              <div class="terms-block">
                <a href="">Privacy policy</a>
                <a href="">Terms and conditions</a>
              </div>
              <div class="copyright-block">
                <span>Copyright &copy; 2018 POLLHOLE</span>
              </div>
            </div>

            <div class="col-lg-8 col-md-8 col-sm-12 d-flex justify-content-lg-end justify-content-start justify-content-xl-end justify-content-md-end">
              <!--Categories block-->
              <div class="footer-navigation">
                <h3>Categories</h3>
                <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Team</a></li>
                  <li><a href="#">Career</a></li>
                  <li><a href="#">Contacts</a></li>
                </ul>
              </div>

              <!--Communities block-->
              <div class="footer-navigation">
                <h3>Community</h3>
                <ul>
                  <li><a href="#">Blog</a></li>
                  <li><a href="#">Discussions</a></li>
                  <li><a href="#">Collections</a></li>
                  <li><a href="#">Members</a></li>
                  <li><a href="#">Products</a></li>
                  <li><a href="#">Help Center</a></li>
                </ul>
              </div>

              <div class="footer-social">
                <h3>Follow us</h3>
                <ul>
                  <li>
                    <a href="#"><img src="img/icons/twitter-footer.svg" alt=""></a>
                  </li>
                  <li>
                    <a href="#"><img src="img/icons/facebook-footer.svg" alt=""></a>
                  </li>
                  <li>
                    <a href="#"><img src="img/icons/google-plus-footer.svg" alt=""></a>
                  </li>
                  <li>
                    <a href="#"><img src="img/icons/tumblr-footer.svg" alt=""></a>
                  </li>
                </ul>
                <a href="#">
                  <button class="footer-start-btn">Get started</button>
                </a>
              </div>
              
            </div>
        </div>
        
      </div>
      
      {{-- test --}}
      <div id="app">
        @{{ message }}
      </div>
    </footer>

      <script src="js/libs.min.js"></script>

      <script src="js/progressbar.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      {{-- <script src="libs/chartist.js"></script> --}}
      <script src="libs/chartist.min.js"></script>
      <script src="js/common.js"></script>
      {{-- <script src="js/app.js"></script> --}}

      @yield('vue_js_scripts')

</html>
