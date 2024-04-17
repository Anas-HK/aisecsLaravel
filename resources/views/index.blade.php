<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>AISECS</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
{{--    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">--}}
    <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: eBusiness
    * Template URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
    * Updated: Mar 17 2024 with Bootstrap v5.3.3
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>


<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
          <h1><a href="{{ url('/') }}"><span>security</span>Plus</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <!-- <li><a href="blog.html">Blog</a></li> -->
          <li><a class="nav-link scrollto" href="#pricing">Subscription</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <!-- New list item for Login -->
          <li><a class="nav-link scrollto" href="#pricing">Sign Up</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->


    </div>
  </header><!-- End Header -->

  <!-- ======= home section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

            <div class="carousel-item active" style="background-image: url('{{ asset('assets/img/hero-carousel/security1.jpg') }}')">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Intelligent AI Security Solutions</h2>
                <p class="animate__animated animate__fadeInUp">Leading the way in facial recognition technology and AI-driven security systems.</p>
                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>

            <div class="carousel-item" style="background-image: url('{{ asset('assets/img/hero-carousel/AI.jpg') }}')">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Our Mission</h2>
                <p class="animate__animated animate__fadeInUp">Our mission is to redefine the landscape of security through innovative AI-driven solutions.</p>
                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>

            <div class="carousel-item" style="background-image: url('{{ asset('assets/img/hero-carousel/security3.jpg') }}')">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Enhance Your Security with AISEC</h2>
                <p class="animate__animated animate__fadeInUp">Discover how our AI Security System can transform your security measures. Contact us today for a demo or consultation.</p>
                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section>
  <!-- End Home Section -->

  <main id="main">

    <!-- ======= Services Section ======= -->
    <div id="services" class="services-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline services-head text-center">
              <h2>Our Services</h2>
            </div>
          </div>
        </div>
        <div class="row text-center">
          <!-- Start Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <i class="bi bi-camera"></i>
                  </a>
                  <h4>Facial Recognition</h4>
                  <p>
                    Utilizing cutting-edge algorithms for real-time identification and authentication.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <i class="bi bi-exclamation-triangle"></i>
                  </a>
                  <h4>Suspicious Activity Detection</h4>
                  <p>
                    Advanced AI to analyze behavior patterns and detect suspicious activities automatically.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <i class="bi bi-shield-lock"></i>
                  </a>
                  <h4>Secure Data Encryption</h4>
                  <p>
                    Ensuring the privacy and security of all data with state-of-the-art encryption methods.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <i class="bi bi-key"></i>
                  </a>
                  <h4>Access Control Management</h4>
                  <p>
                    Empower administrators to regulate access levels with precision, ensuring only authorized personnel enter designated areas, enhancing overall security
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <!-- End Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <i class="bi bi-bell"></i>
                  </a>
                  <h4>Real-time Alerts and Notifications</h4>
                  <p>
                    Receive instant notifications and alerts on any suspicious activities or security breaches.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <!-- End Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <i class="bi bi-calendar4-week"></i>
                  </a>
                  <h4>24/7 Support</h4>
                  <p>
                    Experience uninterrupted peace of mind with our round-the-clock 24/7 support
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Services Section -->

    <!-- ======= Team Section ======= -->
    <div id="team" class="our-team-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Our Special Team</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
                    <img src="{{ asset('assets/img/team/1.jpg') }}" alt="">
                </a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#">
                        <i class="bi bi-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="bi bi-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="bi bi-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4>Jhon Mickel</h4>
                <p>Seo</p>
              </div>
            </div>
          </div>
          <!-- End column -->
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
                    <img src="{{ asset('assets/img/team/2.jpg') }}" alt="">

                </a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#">
                        <i class="bi bi-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="bi bi-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="bi bi-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4>Andrew Arnold</h4>
                <p>Web Developer</p>
              </div>
            </div>
          </div>
          <!-- End column -->

          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
                    <img src="{{ asset('assets/img/team/3.jpg') }}" alt="">

                </a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#">
                        <i class="bi bi-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="bi bi-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="bi bi-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4>Lellien Linda</h4>
                <p>Web Design</p>
              </div>
            </div>
          </div>
          <!-- End column -->
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
                    <img src="{{ asset('assets/img/team/4.jpg') }}" alt="">
                </a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#">
                        <i class="bi bi-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="bi bi-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="bi bi-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4>Jhon Powel</h4>
                <p>Seo Expert</p>
              </div>
            </div>
          </div>
          <!-- End column -->
        </div>
      </div>
    </div>
    <!-- End Team Section -->

    <!-- ======= Rviews Section ======= -->
    <!-- <div class="reviews-area">
      <div class="row g-0">
        <div class="col-lg-6">
          <img src="assets/img/about/2.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-lg-6 work-right-text d-flex align-items-center">
          <div class="px-5 py-5 py-lg-0">
            <h2>working with us</h2>
            <h5>Web Design, Ready Home, Construction and Co-operate Outstanding Buildings.</h5>
            <a href="#contact" class="ready-btn scrollto">Contact us</a>
          </div>
        </div>
      </div> -->
    <!-- </div>End Rviews Section -->

    <!-- ======= Portfolio Section ======= -->
    <!-- <div id="portfolio" class="portfolio-area area-padding fix">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Our Portfolio</h2>
            </div>
          </div>
        </div>
        <div class="row wesome-project-1 fix"> -->
          <!-- Start Portfolio -page -->
          <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row awesome-project-content portfolio-container"> -->

          <!-- portfolio-item start -->
          <!-- <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-app portfolio-item">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="assets/img/portfolio/1.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="assets/img/portfolio/1.jpg">
                      <h4>Business City</h4>
                      <span>Web Development</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
          <!-- portfolio-item end -->

          <!-- portfolio-item start -->
          <!-- <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-web">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="assets/img/portfolio/2.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="assets/img/portfolio/2.jpg">
                      <h4>Blue Sea</h4>
                      <span>Photosho</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
          <!-- portfolio-item end -->

          <!-- portfolio-item start -->
          <!-- <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-card">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="assets/img/portfolio/3.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="assets/img/portfolio/3.jpg">
                      <h4>Beautiful Nature</h4>
                      <span>Web Design</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
          <!-- portfolio-item end -->

          <!-- portfolio-item start -->
          <!-- <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-web">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="assets/img/portfolio/4.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="assets/img/portfolio/4.jpg">
                      <h4>Creative Team</h4>
                      <span>Web design</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
          <!-- portfolio-item end -->

          <!-- portfolio-item start -->
          <!-- <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-app">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="assets/img/portfolio/5.jpg" alt="" /></a>
                <div class="add-actions text-center text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="assets/img/portfolio/5.jpg">
                      <h4>Beautiful Flower</h4>
                      <span>Web Development</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
          <!-- portfolio-item end -->

          <!-- portfolio-item start -->
          <!-- <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-web">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="assets/img/portfolio/6.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="assets/img/portfolio/6.jpg">
                      <h4>Night Hill</h4>
                      <span>Photoshop</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
          <!-- portfolio-item end -->

        <!-- </div>
      </div>
    </div> -->
    <!-- End Portfolio Section -->

    <!-- ======= Pricing Section ======= -->
    <div id="pricing" class="pricing-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Individual Subscriptions</h2>
            </div>
          </div>
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h3>Basic</h3>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- Active focuses the package and then you can apply discount -->
            <div class="pri_table_list active">
              <h3>basic <br /> <span>$50 / 3 months</span></h3>
              <ol>
                <li class="check"><i class="bi bi-check"></i><span>1 Camera</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Facial Recognition</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Visitor Count</span></li>
                <li class="cross"><i class="bi bi-x"></i><span>Employee Tracking</span></li>
                <li class="cross"><i class="bi bi-x"></i><span>Human Activity</span></li>
                <li class="cross"><i class="bi bi-x"></i><span>Mobile Activity</span></li>
              </ol>
                <button class="black-button" onclick="window.location.href='{{ route('signup.individual') }}'">Sign Up Now</button>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="pri_table_list active">
              <!-- <span class="saleon">10% Off</span> -->
              <h3>standard <br /> <span>$90 / 3 month</span></h3>
              <ol>
                <li class="check"><i class="bi bi-check"></i><span>1 Camera</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Facial Recognition</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Visitor Count</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Employee Tracking</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Human Activity</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Mobile Activity</span></li>
              </ol>
                <button class="black-button" onclick="window.location.href='{{ route('signup.individual') }}'">Sign Up Now</button>
            </div>
          </div>


          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="pri_table_list active">
              <!-- <span class="saleon">20% Off</span> -->
              <h3>premium <br /> <span>$140 / year</span></h3>
              <ol>
                <li class="check"><i class="bi bi-check"></i><span>1 Camera</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Facial Recognition</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Visitor Count</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Employee Tracking</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Human Activity</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Mobile Activity</span></li>
              </ol>
                <button class="black-button" onclick="window.location.href='{{ route('signup.individual') }}'">Sign Up Now</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Second Row -->

    <div id="pricing" class="pricing-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h3>Standard</h3>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="pri_table_list active">
              <h3>Package 01<br /> <span>$45 / 3 months</span></h3>
              <ol>
                <li class="check"><i class="bi bi-check"></i><span>3 Cameras</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Facial Recognition</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Visitor Count</span></li>
                <li class="cross"><i class="bi bi-x"></i><span>Employee Tracking</span></li>
                <li class="cross"><i class="bi bi-x"></i><span>Human Activity</span></li>
                <li class="cross"><i class="bi bi-x"></i><span>Mobile Activity</span></li>
              </ol>
                <button class="black-button" onclick="window.location.href='{{ route('signup.individual') }}'">Sign Up Now</button>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="pri_table_list active">
              <!-- <span class="saleon">30% Off</span> -->
              <h3>Package 02<br /> <span>$100 / 6 month</span></h3>
              <ol>
                <li class="check"><i class="bi bi-check"></i><span>3 Cameras</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Facial Recognition</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Visitor Count</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Employee Tracking</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Human Activity</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Mobile Activity</span></li>
              </ol>
                <button class="black-button" onclick="window.location.href='{{ route('signup.individual') }}'">Sign Up Now</button>
            </div>
          </div>


          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="pri_table_list active">
              <!-- <span class="saleon">40% Off</span> -->
              <h3>Package 03<br /> <span>$150 / year</span></h3>
              <ol>
                <li class="check"><i class="bi bi-check"></i><span>3 Cameras</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Facial Recognition</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Visitor Count</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Employee Tracking</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Human Activity</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Mobile Activity</span></li>
              </ol>
                <button class="black-button" onclick="window.location.href='{{ route('signup.individual') }}'">Sign Up Now</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Third Row -->

    <div id="pricing" class="pricing-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h3>Premium</h3>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="pri_table_list active">
              <h3>Package 01<br /> <span>$65 / 3 months</span></h3>
              <ol>
                <li class="check"><i class="bi bi-check"></i><span>4 Cameras</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Facial Recognition</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Visitor Count</span></li>
                <li class="cross"><i class="bi bi-x"></i><span>Employee Tracking</span></li>
                <li class="cross"><i class="bi bi-x"></i><span>Human Activity</span></li>
                <li class="cross"><i class="bi bi-x"></i><span>Mobile Activity</span></li>
              </ol>
                <button class="black-button" onclick="window.location.href='{{ route('signup.individual') }}'">Sign Up Now</button>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="pri_table_list active">
              <!-- <span class="saleon">30% Off</span> -->
              <h3>Package 02<br /> <span>$165 / 6 month</span></h3>
              <ol>
                <li class="check"><i class="bi bi-check"></i><span>4 Cameras</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Facial Recognition</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Visitor Count</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Employee Tracking</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Human Activity</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Mobile Activity</span></li>
              </ol>
                <button class="black-button" onclick="window.location.href='{{ route('signup.individual') }}'">Sign Up Now</button>
            </div>
          </div>


          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="pri_table_list active">
              <!-- <span class="saleon">40% Off</span> -->
              <h3>Package 03<br /> <span>$245 / year</span></h3>
              <ol>
                <li class="check"><i class="bi bi-check"></i><span>4 Cameras</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Facial Recognition</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Visitor Count</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Employee Tracking</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Human Activity</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Mobile Activity</span></li>
              </ol>
                <button class="black-button" onclick="window.location.href='{{ route('signup.individual') }}'">Sign Up Now</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- 4th Row -->

    <div id="pricing" class="pricing-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Business Subscriptions</h2>
            </div>
          </div>
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h3>Basic</h3>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="pri_table_list active">
              <h3>Package 01<br /> <span>$245 / 3 months</span></h3>
              <ol>
                <li class="check"><i class="bi bi-check"></i><span>2 - 4 Cameras</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Facial Recognition</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Visitor Count</span></li>
                <li class="cross"><i class="bi bi-x"></i><span>Employee Tracking</span></li>
                <li class="cross"><i class="bi bi-x"></i><span>Human Activity</span></li>
                <li class="cross"><i class="bi bi-x"></i><span>Mobile Activity</span></li>
              </ol>
                <button class="black-button" onclick="window.location.href='{{ route('signup.business') }}'">Sign Up Now</button>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="pri_table_list active">
              <!-- <span class="saleon">30% Off</span> -->
              <h3>Package 02<br /> <span>$345 / 6 month</span></h3>
              <ol>
                <li class="check"><i class="bi bi-check"></i><span>2 - 4 Cameras</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Facial Recognition</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Visitor Count</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Employee Tracking</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Human Activity</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Mobile Activity</span></li>
              </ol>
                <button class="black-button" onclick="window.location.href='{{ route('signup.business') }}'">Sign Up Now</button>
            </div>
          </div>


          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="pri_table_list active">
              <!-- <span class="saleon">40% Off</span> -->
              <h3>Package 03<br /> <span>$400 / year</span></h3>
              <ol>
                <li class="check"><i class="bi bi-check"></i><span>2 - 4 Cameras</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Facial Recognition</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Visitor Count</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Employee Tracking</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Human Activity</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Mobile Activity</span></li>
              </ol>
                <button class="black-button" onclick="window.location.href='{{ route('signup.business') }}'">Sign Up Now</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- 5th Row -->

    <div id="pricing" class="pricing-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h3>Standard</h3>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="pri_table_list active">
              <h3>Package 01<br /> <span>$350 / 3 months</span></h3>
              <ol>
                <li class="check"><i class="bi bi-check"></i><span>4 - 6 Cameras</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Facial Recognition</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Visitor Count</span></li>
                <li class="cross"><i class="bi bi-x"></i><span>Employee Tracking</span></li>
                <li class="cross"><i class="bi bi-x"></i><span>Human Activity</span></li>
                <li class="cross"><i class="bi bi-x"></i><span>Mobile Activity</span></li>
              </ol>
                <button class="black-button" onclick="window.location.href='{{ route('signup.business') }}'">Sign Up Now</button>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="pri_table_list active">
              <!-- <span class="saleon">30% Off</span> -->
              <h3>Package 02<br /> <span>$400 / 6 month</span></h3>
              <ol>
                <li class="check"><i class="bi bi-check"></i><span>4 - 6 Cameras</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Facial Recognition</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Visitor Count</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Employee Tracking</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Human Activity</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Mobile Activity</span></li>
              </ol>
                <button class="black-button" onclick="window.location.href='{{ route('signup.business') }}'">Sign Up Now</button>
            </div>
          </div>


          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="pri_table_list active">
              <!-- <span class="saleon">40% Off</span> -->
              <h3>Package 03<br /> <span>$450 / year</span></h3>
              <ol>
                <li class="check"><i class="bi bi-check"></i><span>4 - 6 Cameras</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Facial Recognition</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Visitor Count</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Employee Tracking</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Human Activity</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Mobile Activity</span></li>
              </ol>
                <button class="black-button" onclick="window.location.href='{{ route('signup.business') }}'">Sign Up Now</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- 6th Row -->

    <div id="pricing" class="pricing-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h3>Premium</h3>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="pri_table_list active">
              <h3>Package 01<br /> <span>$450 / 3 months</span></h3>
              <ol>
                <li class="check"><i class="bi bi-check"></i><span>6 - 10 Cameras</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Facial Recognition</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Visitor Count</span></li>
                <li class="cross"><i class="bi bi-x"></i><span>Employee Tracking</span></li>
                <li class="cross"><i class="bi bi-x"></i><span>Human Activity</span></li>
                <li class="cross"><i class="bi bi-x"></i><span>Mobile Activity</span></li>
              </ol>
                <button class="black-button" onclick="window.location.href='{{ route('signup.business') }}'">Sign Up Now</button>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="pri_table_list active">
              <!-- <span class="saleon">30% Off</span> -->
              <h3>Package 02<br /> <span>$600 / 6 month</span></h3>
              <ol>
                <li class="check"><i class="bi bi-check"></i><span>6 - 10 Cameras</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Facial Recognition</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Visitor Count</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Employee Tracking</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Human Activity</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Mobile Activity</span></li>
              </ol>
                <button class="black-button" onclick="window.location.href='{{ route('signup.business') }}'">Sign Up Now</button>
            </div>
          </div>


          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="pri_table_list active">
              <!-- <span class="saleon">40% Off</span> -->
              <h3>Package 03<br /> <span>$850 / year</span></h3>
              <ol>
                <li class="check"><i class="bi bi-check"></i><span>6 - 10 Cameras</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Facial Recognition</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Visitor Count</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Employee Tracking</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Human Activity</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Mobile Activity</span></li>
              </ol>
                <button class="black-button" onclick="window.location.href='{{ route('signup.business') }}'">Sign Up Now</button>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center enterprise">
              <h3>Enterprises services are offered upon request</h3>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ======= About Section ======= -->
    <div id="about" class="about-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>About Security Plus</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- single-well start-->
          <!-- <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-left">
              <div class="single-well">
                <a href="#">
                  <img src="assets/img/about/1.jpg" alt="">
                </a>
              </div>
            </div>
          </div> -->
          <!-- single-well end-->
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="well-middle">
              <div class="single-well">
                <!-- <a href="#"> -->
                  <h4 class="sec-head">About AISEC Ltd</h4>
                <!-- </a> -->
                <p>
                  AISEC Ltd pioneers in deploying artificial intelligence for enhanced security solutions. With a focus on Intelligent Face Recognition Technology, we aim to transform how security systems operate, making them more efficient, reliable, and intelligent.
                </p>

                <h4 class="sec-head">Our Aim</h4>
                <!-- </a> -->
                <p>
                  Our aim at AISEC Ltd is to revolutionize security by introducing advanced AI-based solutions. We are committed to creating state-of-the-art technologies that enhance security measures while also placing a strong emphasis on safeguarding user privacy and adhering to ethical standards.
                </p>

                <h4 class="sec-head">Technology Overview</h4>
                <!-- </a> -->
                <p>
                  At AISEC, we leverage the power of advanced facial recognition algorithms and machine learning to develop a security system capable of real-time monitoring, detection of suspicious activities, and efficient worker identification.
                </p>

                <h4 class="sec-head">Seamless Integration</h4>
                <!-- </a> -->
                <p>
                  Our system is meticulously designed to seamlessly integrate with existing security infrastructure, providing a robust solution that operates autonomously, thereby reducing the necessity for constant human surveillance.
                </p>

                <h4 class="sec-head">Vision for the Future</h4>
                <!-- </a> -->
                <p>
                  Looking ahead, AISEC Ltd envisions a future where our AI Security System becomes a cornerstone in the security protocols of various industries. We are committed to continuous innovation and improvement, staying ahead of the curve in security solutions.
                </p>

                <h4 class="sec-head">Creating Safer Environments</h4>
                <!-- </a> -->
                <p>
                  Our ultimate goal is to create safer and more secure environments, where technology empowers businesses and communities to thrive without the fear of security breaches.
                </p>

                <h4 class="sec-head">Join Us in Our Journey</h4>
                <!-- </a> -->
                <p>
                  Join us as we embark on this transformative journey towards enhanced security solutions and a safer future for all.
                </p>



                <!-- <ul>
                  <li>
                    <i class="bi bi-check"></i> Interior design Package
                  </li>
                  <li>
                    <i class="bi bi-check"></i> Building House
                  </li>
                  <li>
                    <i class="bi bi-check"></i> Reparing of Residentail Roof
                  </li>
                  <li>
                    <i class="bi bi-check"></i> Renovaion of Commercial Office
                  </li>
                  <li>
                    <i class="bi bi-check"></i> Make Quality Products
                  </li>
                </ul> -->
              </div>
            </div>
          </div>
          <!-- End col-->
        </div>
      </div>
    </div><!-- End About Section -->
    <!-- End Pricing Section -->

    <!-- ======= Testimonials Section ======= -->
    <!-- <div id="testimonials" class="testimonials">
      <div class="container">

        <div class="testimonials-slider swiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div> -->
            <!-- End testimonial item -->

            <!-- <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div> -->
            <!-- End testimonial item -->

            <!-- <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div> -->
            <!-- End testimonial item -->

            <!-- <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div> -->
            <!-- End testimonial item -->

            <!-- <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div> -->
            <!-- End testimonial item -->

          <!-- </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </div> -->
    <!-- End Testimonials Section -->

    <!-- ======= Blog Section ======= -->
    <!-- <div id="blog" class="blog-area">
      <div class="blog-inner area-padding">
        <div class="blog-overly"></div>
        <div class="container ">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>Latest News</h2>
              </div>
            </div>
          </div>
          <div class="row"> -->
            <!-- Start Left Blog -->
            <!-- <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="blog.html">
                    <img src="assets/img/blog/1.jpg" alt="">
                  </a>
                </div>
                <div class="blog-meta">
                  <span class="comments-type">
                    <i class="fa fa-comment-o"></i>
                    <a href="#">13 comments</a>
                  </span>
                  <span class="date-type">
                    <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
                  </span>
                </div>
                <div class="blog-text">
                  <h4>
                    <a href="blog.html">Assumenda repud eum veniam</a>
                  </h4>
                  <p>
                    Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.
                  </p>
                </div>
                <span>
                  <a href="blog.html" class="ready-btn">Read more</a>
                </span>
              </div> -->
              <!-- Start single blog -->
            <!-- </div> -->
            <!-- End Left Blog-->
            <!-- Start Left Blog -->
            <!-- <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="blog.html">
                    <img src="assets/img/blog/2.jpg" alt="">
                  </a>
                </div>
                <div class="blog-meta">
                  <span class="comments-type">
                    <i class="fa fa-comment-o"></i>
                    <a href="#">130 comments</a>
                  </span>
                  <span class="date-type">
                    <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
                  </span>
                </div>
                <div class="blog-text">
                  <h4>
                    <a href="blog.html">Explicabo magnam quibusdam.</a>
                  </h4>
                  <p>
                    Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.
                  </p>
                </div>
                <span>
                  <a href="blog.html" class="ready-btn">Read more</a>
                </span>
              </div> -->
              <!-- Start single blog -->
            <!-- </div> -->
            <!-- End Left Blog-->
            <!-- Start Right Blog-->
            <!-- <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="blog.html">
                    <img src="assets/img/blog/3.jpg" alt="">
                  </a>
                </div>
                <div class="blog-meta">
                  <span class="comments-type">
                    <i class="fa fa-comment-o"></i>
                    <a href="#">10 comments</a>
                  </span>
                  <span class="date-type">
                    <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
                  </span>
                </div>
                <div class="blog-text">
                  <h4>
                    <a href="blog.html">Lorem ipsum dolor sit amet</a>
                  </h4>
                  <p>
                    Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.
                  </p>
                </div>
                <span>
                  <a href="blog.html" class="ready-btn">Read more</a>
                </span>
              </div>
            </div> -->
            <!-- End Right Blog-->
          <!-- </div>
        </div>
      </div>
    </div> -->
    <!-- End Blog Section -->

    <!-- ======= Suscribe Section ======= -->
    <!-- <div class="suscribe-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
            <div class="suscribe-text text-center">
              <h3>Welcome to our eBusiness company</h3>
              <a class="sus-btn" href="#">Get A quote</a>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- End Suscribe Section -->

    <!-- ======= Contact Section ======= -->
    <div id="contact" class="contact-area">
      <div class="contact-inner area-padding">
        <div class="contact-overly"></div>
        <div class="container ">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>Contact us</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Start contact icon column -->
            <div class="col-md-4">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="bi bi-phone"></i>
                  <p>
                    Call: +1 5589 55488 55<br>
                    <span>Monday-Friday (9am-5pm)</span>
                  </p>
                </div>
              </div>
            </div>
            <!-- Start contact icon column -->
            <div class="col-md-4">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="bi bi-envelope"></i>
                  <p>
                    Email: info@aisecs.io
                    <br>
                    <span>Web: AISECS.IO</span>
                  </p>
                </div>
              </div>
            </div>
            <!-- Start contact icon column -->
            <div class="col-md-4">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="bi bi-geo-alt"></i>
                  <p>
                    Location: A108 Adam Street<br>
                    <span>NY 535022, USA</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">

            <!-- Start Google Map -->
            <!-- <div class="col-md-6"> -->
              <!-- Start Map -->
              <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe> -->
              <!-- End Map -->
            <!-- </div> -->
            <!-- End Google Map -->

            <!-- Start  contact -->
            <!-- <div class="col-md-6">
              <div class="form contact-form">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                  </div>
                  <div class="form-group mt-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                  </div>
                  <div class="form-group mt-3">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                  </div>
                  <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                  </div>
                  <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>
                  <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
              </div>
            </div> -->
            <!-- End Left contact -->
          </div>
        </div>
      </div>
    </div><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2><span>security</span>Plus</h2>
                </div>

                <p>At AISEC Ltd, we are pioneering the deployment of artificial intelligence for enhanced security solutions. With a focus on Intelligent Face Recognition Technology, our goal is to transform how security systems operate, making them more efficient, reliable, and intelligent.</p>
                <div class="footer-icons">
                  <ul>
                    <li>
                      <a href="https://www.facebook.com/profile.php?id=61557759613243"><i class="bi bi-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="bi bi-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="bi bi-instagram"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="bi bi-linkedin"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4">
            <div class="footer-content">
              <div class="footer-head">
                <h4>information</h4>
                <p>
                  AISEC Ltd integrates facial recognition algorithms and machine learning for real-time monitoring, detection, and worker identification, seamlessly blending with existing security infrastructure for autonomous operation.
                </p>
                <div class="footer-contacts">
                  <p><span>Tel:</span> +123 456 789</p>
                  <p><span>Email:</span> info@aisecs.io
                  </p>
                  <p><span>Working Hours:</span> 9am-5pm</p>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Instagram</h4>
                <div class="flicker-img">
                    <a href="#"><img src="{{ asset('assets/img/portfolio/1.jpg') }}" alt=""></a>
                    <a href="#"><img src="{{ asset('assets/img/portfolio/2.jpg') }}" alt=""></a>
                    <a href="#"><img src="{{ asset('assets/img/portfolio/3.jpg') }}" alt=""></a>
                    <a href="#"><img src="{{ asset('assets/img/portfolio/4.jpg') }}" alt=""></a>
                    <a href="#"><img src="{{ asset('assets/img/portfolio/5.jpg') }}" alt=""></a>
                    <a href="#"><img src="{{ asset('assets/img/portfolio/6.jpg') }}" alt=""></a>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>AISECS</strong>. All Rights Reserved
              </p>
            </div>
            <!-- <div class="credits"> -->
              <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
            -->
              <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
            </div>
          </div>
        </div>
      </div>
{{--    </div>--}}
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>


  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
