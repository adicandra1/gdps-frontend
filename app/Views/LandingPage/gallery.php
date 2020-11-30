
<!doctype html>
<html lang="en">
  <head>
    <title>JobBoard &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link rel="stylesheet" href="<?= base_url('assets/landing/' . 'css/custom-bs.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/landing/' . 'css/jquery.fancybox.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/landing/' . 'css/bootstrap-select.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/landing/' . 'fonts/icomoon/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/landing/' . 'fonts/line-icons/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/landing/' . 'css/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/landing/' . 'css/animate.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/landing/' . 'css/quill.snow.css')?>">
    

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/landing/' . 'css/style.css') ?>">
  </head>
  <body id="top">

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
    

<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    

    <!-- NAVBAR -->
    <header class="site-navbar mt-3">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="site-logo col-6"> 
          <img src="<?= base_url('assets/landing/' . 'images/azmi/logo_white.svg')  ?>" alt="logo" style="width: 170px; height: 60px;">
          </div>

          <nav class="mx-auto site-navigation">
            <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
            <li><a href="<?= base_url('landingpage/' . 'index')?>">Home</a></li>
              <li><a href="<?= base_url('landingpage/' . 'about')?>">About</a></li>
              <li><a href="<?= base_url('landingpage/' . 'services')?>">Services</a></li>
              <li class="has-children">
                <a href="#" class="nav-link active">Pages</a>
                <ul class="dropdown">
                <li><a href="<?= base_url('landingpage/' . 'gallery')?>" class="nav-link active">Gallery</a></li>
                <li><a href="<?= base_url('landingpage/' . 'news')?>">News</a></li>
                </ul>
              </li>
               <li class="has-children">
               <a href="#">Jobs</a>
                <ul class="dropdown">
                  <li><a href="<?= base_url('landingpage/' . 'career')?>">Career</a></li>
                  <li><a href="<?= base_url('landingpage/' . 'login')?>">User Profile</a></li>
                </ul>
              </li>
              <li><a href="<?= base_url('landingpage/' . 'contact')?>">Contact</a></li>

              <li class="d-lg-none"><a href="<?= base_url('landingpage/' . 'login')?>">Log In</a></li>
            </ul>
          </nav>
          
          <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
            <div class="ml-auto">
            <a href="<?= base_url('landingpage/' . 'login')?>" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Log In</a>
            </div>
            <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
          </div>

        </div>
      </div>
    </header>

    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('<?= base_url('assets/landing/' . 'images/azmi/hanggar1.jpeg')?>');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Gallery</h1>
            <div class="custom-breadcrumbs">
              <a href="<?= base_url('landingpage/' . 'index')?>">Home</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>Gallery</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="site-section" id="next-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 item">
            <a href="<?= base_url('assets/landing/' . 'images/sq_img_1.jpg')?>" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="<?= base_url('assets/landing/' . 'images/sq_img_1.jpg')?>">
            </a>
          </div>
          <div class="col-md-6 col-lg-4 item">
            <a href="<?= base_url('assets/landing/' . 'images/sq_img_2.jpg')?>" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="<?= base_url('assets/landing/' . 'images/sq_img_2.jpg')?>">
            </a>
          </div>
          <div class="col-md-6 col-lg-4 item">
            <a href="<?= base_url('assets/landing/' . 'images/sq_img_3.jpg')?>" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="<?= base_url('assets/landing/' . 'images/sq_img_3.jpg')?>">
            </a>
          </div>

          <div class="col-md-6 col-lg-4 item">
            <a href="<?= base_url('assets/landing/' . 'images/sq_img_4.jpg')?>" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="<?= base_url('assets/landing/' . 'images/sq_img_4.jpg')?>">
            </a>
          </div>
          <div class="col-md-6 col-lg-4 item">
            <a href="<?= base_url('assets/landing/' . 'images/sq_img_5.jpg')?>" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="<?= base_url('assets/landing/' . 'images/sq_img_5.jpg')?>">
            </a>
          </div>
          <div class="col-md-6 col-lg-4 item">
            <a href="<?= base_url('assets/landing/' . 'images/sq_img_6.jpg')?>" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="<?= base_url('assets/landing/' . 'images/sq_img_6.jpg')?>">
            </a>
          </div>

          <div class="col-md-6 col-lg-6 item">
            <a href="<?= base_url('assets/landing/' . 'images/sq_img_11.jpg')?>" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="<?= base_url('assets/landing/' . 'images/sq_img_11.jpg')?>">
            </a>
          </div>
          <div class="col-md-6 col-lg-6 item">
            <a href="<?= base_url('assets/landing/' . 'images/sq_img_2.jpg')?>" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="<?= base_url('assets/landing/' . 'images/sq_img_2.jpg')?>">
            </a>
          </div>

          <div class="col-md-6 col-lg-4 item">
            <a href="<?= base_url('assets/landing/' . 'images/sq_img_7.jpg')?>" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="<?= base_url('assets/landing/' . 'images/sq_img_7.jpg')?>">
            </a>
          </div>
          <div class="col-md-6 col-lg-4 item">
            <a href="<?= base_url('assets/landing/' . 'images/sq_img_8.jpg')?>" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="<?= base_url('assets/landing/' . 'images/sq_img_8.jpg')?>">
            </a>
          </div>
          <div class="col-md-6 col-lg-4 item">
            <a href="<?= base_url('assets/landing/' . 'images/sq_img_9.jpg')?>" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="<?= base_url('assets/landing/' . 'images/sq_img_9.jpg')?>">
            </a>
          </div>

          <div class="col-md-6 col-lg-4 item">
            <a href="<?= base_url('assets/landing/' . 'images/sq_img_10.jpg')?>" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="<?= base_url('assets/landing/' . 'images/sq_img_10.jpg')?>">
            </a>
          </div>
          <div class="col-md-6 col-lg-4 item">
            <a href="<?= base_url('assets/landing/' . 'images/sq_img_11.jpg')?>" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="<?= base_url('assets/landing/' . 'images/sq_img_11.jpg')?>">
            </a>
          </div>
          <div class="col-md-6 col-lg-4 item">
            <a href="<?= base_url('assets/landing/' . 'images/sq_img_12.jpg')?>" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="<?= base_url('assets/landing/' . 'images/sq_img_12.jpg')?>">
            </a>
          </div>

        </div>
      </div>
    </section>
    
    <footer class="site-footer">

      <a href="#top" class="smoothscroll scroll-top">
        <span class="icon-keyboard_arrow_up"></span>
      </a>

      <div class="container">
        <div class="row mb-5">
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Search Trending</h3>
            <ul class="list-unstyled">
              <li><a href="#">Web Design</a></li>
              <li><a href="#">Graphic Design</a></li>
              <li><a href="#">Web Developers</a></li>
              <li><a href="#">Python</a></li>
              <li><a href="#">HTML5</a></li>
              <li><a href="#">CSS3</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Company</h3>
            <ul class="list-unstyled">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Career</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Resources</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Support</h3>
            <ul class="list-unstyled">
              <li><a href="#">Support</a></li>
              <li><a href="#">Privacy</a></li>
              <li><a href="#">Terms of Service</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Contact Us</h3>
            <div class="footer-social">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-twitter"></span></a>
              <a href="#"><span class="icon-instagram"></span></a>
              <a href="#"><span class="icon-linkedin"></span></a>
            </div>
          </div>
        </div>

        <div class="row text-center">
          <div class="col-12">
            <p class="copyright"><small>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></small></p>
          </div>
        </div>
      </div>
    </footer>
  
  </div>

    <!-- SCRIPTS -->
    <script src="<?= base_url('assets/landing/' . 'js/jquery.min.js')?>"></script>
    <script src="<?= base_url('assets/landing/' . 'js/bootstrap.bundle.min.js')?>"></script>
    <script src="<?= base_url('assets/landing/' . 'js/isotope.pkgd.min.js')?>"></script>
    <script src="<?= base_url('assets/landing/' . 'js/stickyfill.min.js')?>"></script>
    <script src="<?= base_url('assets/landing/' . 'js/jquery.fancybox.min.js')?>"></script>
    <script src="<?= base_url('assets/landing/' . 'js/jquery.easing.1.3.js')?>"></script>
    
    <script src="<?= base_url('assets/landing/' . 'js/jquery.waypoints.min.js')?>"></script>
    <script src="<?= base_url('assets/landing/' . 'js/jquery.animateNumber.min.js')?>"></script>
    <script src="<?= base_url('assets/landing/' . 'js/owl.carousel.min.js')?>"></script>
    <script src="<?= base_url('assets/landing/' . 'js/quill.min.js')?>"></script>
    
    
    <script src="<?= base_url('assets/landing/' . 'js/bootstrap-select.min.js')?>"></script>
    
    <script src="<?= base_url('assets/landing/' . 'js/custom.js')?>"></script>
   
   
  </body>
</html>