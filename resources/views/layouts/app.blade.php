<!DOCTYPE html>
<html lang="en">

<head>
  <!--====== Required meta tags ======-->
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!--====== Title ======-->
  <title>Business | Bootstrap 5 Business Template</title>

  <!--====== Favicon Icon ======-->
  <link rel="shortcut icon" href="../assets/images/favicon.svg" type="image/svg" />

  <!--====== Bootstrap css ======-->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

  <!--====== Line Icons css ======-->
  <link rel="stylesheet" href="assets/css/lineicons.css" />

  <!--====== Tiny Slider css ======-->
  <link rel="stylesheet" href="assets/css/tiny-slider.css" />

  <!--====== gLightBox css ======-->
  <link rel="stylesheet" href="assets/css/glightbox.min.css" />

  <link rel="stylesheet" href="assets/style.css" />
</head>

<body>

  <!--====== NAVBAR NINE PART START ======-->

  <section class="navbar-area navbar-nine">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <nav class="navbar navbar-expand-lg">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNine"
              aria-controls="navbarNine" aria-expanded="false" aria-label="Toggle navigation">
              <span class="toggler-icon"></span>
              <span class="toggler-icon"></span>
              <span class="toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse sub-menu-bar" id="navbarNine">
              <ul class="navbar-nav me-auto">
			  <li class="nav-item">
				  <a href="{{ url('/') }}">Home Page</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('events.index') }}">Events</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('organisators.index') }}">Organisators</a>
                </li>

                <li class="nav-item">
                  <a href="{{ route('sports.index') }}">Sports</a>
                </li>
              </ul>
            </div>
          </nav>
          <!-- navbar -->
        </div>
      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </section>

  <!--====== NAVBAR NINE PART ENDS ======-->

  <!--====== ABOUT FIVE PART START ======-->

  <section class="about-area about-five">
  @yield('content')
  </section>

  <!--====== ABOUT FIVE PART ENDS ======-->

  <!-- Start Footer Area -->
  <footer class="footer-area footer-eleven">
    <!-- Start Footer Top -->
    <div class="footer-top">
      <div class="container">
        <div class="inner-content">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
              <!-- Single Widget -->
              <div class="footer-widget f-about">
                <p>
                  Find information about all kinds of upcomming sport events that you are interester in right HERE!
                </p>
                <p class="copyright-text">
                  <span>© 2024 Ayro UI.</span>Designed and Developed by
                  <a href="javascript:void(0)" rel="nofollow"> Ayro UI </a>
                </p>
              </div>
              <!-- End Single Widget -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ End Footer Top -->
  </footer>
  <!--/ End Footer Area -->

	<div class="made-in-ayroui mt-4">
		<a href="https://ayroui.com" target="_blank" rel="nofollow">
		  <img style="width:220px" src="assets/images/ayroui.svg">
		</a>
	</div>

  <a href="#" class="scroll-top btn-hover">
    <i class="lni lni-chevron-up"></i>
  </a>

  <!--====== js ======-->
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/glightbox.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/tiny-slider.js"></script>

  <script>

    //===== close navbar-collapse when a  clicked
    let navbarTogglerNine = document.querySelector(
      ".navbar-nine .navbar-toggler"
    );
    navbarTogglerNine.addEventListener("click", function () {
      navbarTogglerNine.classList.toggle("active");
    });

    // ==== left sidebar toggle
    let sidebarLeft = document.querySelector(".sidebar-left");
    let overlayLeft = document.querySelector(".overlay-left");
    let sidebarClose = document.querySelector(".sidebar-close .close");

    overlayLeft.addEventListener("click", function () {
      sidebarLeft.classList.toggle("open");
      overlayLeft.classList.toggle("open");
    });
    sidebarClose.addEventListener("click", function () {
      sidebarLeft.classList.remove("open");
      overlayLeft.classList.remove("open");
    });

    // ===== navbar nine sideMenu
    let sideMenuLeftNine = document.querySelector(".navbar-nine .menu-bar");

    sideMenuLeftNine.addEventListener("click", function () {
      sidebarLeft.classList.add("open");
      overlayLeft.classList.add("open");
    });

    //========= glightbox
    GLightbox({
      'href': 'https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM',
      'type': 'video',
      'source': 'youtube', //vimeo, youtube or local
      'width': 900,
      'autoplayVideos': true,
    });

  </script>
</body>

</html>