<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
   <meta charset="utf-8" />
   <meta http-equiv="x-ua-compatible" content="ie=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <meta name="description" content="Hey there! Im sajjad and welcome to my Portfolio website />

   <!-- Site Title -->
   <title>Sajjad Hamidi </title>

   <!-- Place favicon.ico in the root directory -->
   <link rel="apple-touch-icon" href="{{asset('frontend/assets/img/favicon.png')}}" />
   <link rel="shortcut icon" type="image/png" href="{{asset('frontend/assets/img/favicon.png')}}" />

   <!-- CSS here -->
   <link rel="stylesheet" href="{{asset('frontend/assets/css/animate.min.css')}}" />
   <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}" />
   <link rel="stylesheet" href="{{asset('frontend/assets/css/font-awesome-pro.min.css')}}" />
   <link rel="stylesheet" href="{{asset('frontend/assets/css/flaticon_gerold.css')}}" />
   <link rel="stylesheet" href="{{asset('frontend/assets/css/nice-select.css')}}" />
   <link rel="stylesheet" href="{{asset('frontend/assets/css/backToTop.css')}}" />
   <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.carousel.min.css')}}" />
   <link rel="stylesheet" href="{{asset('frontend/assets/css/swiper.min.css')}}" />
   <link rel="stylesheet" href="{{asset('frontend/assets/css/odometer-theme-default.css')}}" />
   <link rel="stylesheet" href="{{asset('frontend/assets/css/magnific-popup.css')}}" />
   <link rel="stylesheet" href="{{asset('frontend/assets/css/main.css')}}" />
   <link rel="stylesheet" href="{{asset('frontend/assets/css/light-mode.css')}}" />
   <link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css')}}" />
</head>

<body>
   
   <!-- Preloader Area Start -->
   <div class="preloader">
      <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
         <path id="preloaderSvg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
      </svg>

      <div class="preloader-heading">
         <div class="load-text">
            <span>L</span>
            <span>o</span>
            <span>a</span>
            <span>d</span>
            <span>i</span>
            <span>n</span>
            <span>g</span>
         </div>
      </div>
   </div>
   <!-- Preloader Area End -->

   <!-- start: Back To Top -->
   <div class="progress-wrap" id="scrollUp">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
         <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
   </div>
   <!-- end: Back To Top -->

   <!-- HEADER START -->
    @include('frontend.partials.header')
   <!-- HEADER END -->

   <main class="site-content" id="content">
      <!-- HERO SECTION START -->
        @include('frontend.partials.hero')
      <!-- HERO SECTION END -->

      <!-- SERVICES SECTION START -->
        @include('frontend.partials.services')
      <!-- SERVICES SECTION END -->



      <!-- PORTFOLIO SECTION START -->
        {{-- @include('frontend.partials.portfolio') --}}
      <!-- PORTFOLIO SECTION END -->

      <!-- start: Portfolio Popup -->
      {{-- <div id="portfolio-wrapper" class="popup_content_area zoom-anim-dialog mfp-hide">
         <div class="popup_modal_img">
            <img src="{{asset('frontend/assets/img/portfolio/modal-img.jpg')}}" alt="" />
         </div>

         <div class="popup_modal_content">
            <div class="portfolio_info">
               <div class="portfolio_info_text">
                  <h2 class="title">DStudio</h2>
                  <div class="desc">
                     <p>
                        They are was greater open above shelter lets itself under appear sixth open gathering made upon
                        can't own above midst
                        gathering gathered he one us saying can't divide.
                     </p>
                  </div>
                  <a href="#" class="btn tj-btn-primary">live preview <i class="fal fa-arrow-right"></i></a>
               </div>
               <div class="portfolio_info_items">
                  <div class="info_item">
                     <div class="key">Category</div>
                     <div class="value">Web Design</div>
                  </div>
                  <div class="info_item">
                     <div class="key">Client</div>
                     <div class="value">Artboard Studio</div>
                  </div>
                  <div class="info_item">
                     <div class="key">Start Date</div>
                     <div class="value">August 20, 2023</div>
                  </div>
                  <div class="info_item">
                     <div class="key">Designer</div>
                     <div class="value"><a href="#">ThemeJunction</a></div>
                  </div>
               </div>
            </div>

            <div class="portfolio_gallery owl-carousel">
               <div class="gallery_item">
                  <img src="{{asset('frontend/assets/img/portfolio-gallery/p-gallery-1.jpg')}}" alt="" />
               </div>
               <div class="gallery_item">
                  <img src="{{asset('frontend/assets/img/portfolio-gallery/p-gallery-2.jpg')}}" alt="" />
               </div>
               <div class="gallery_item">
                  <img src="{{asset('frontend/assets/img/portfolio-gallery/p-gallery-3.jpg')}}" alt="" />
               </div>
               <div class="gallery_item">
                  <img src="{{asset('frontend/assets/img/portfolio-gallery/p-gallery-4.jpg')}}" alt="" />
               </div>
            </div>

            <div class="portfolio_description">
               <h2 class="title">Project Description</h2>
               <div class="desc">
                  <p>
                     The goal is there are many variations of passages of Lorem Ipsum available, but the majority have
                     suffered alteration in some
                     form, by injected humour, or randomised words which don't look even slightly believable.
                  </p>

                  <p>
                     There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                     alteration in some form, by
                     injected humour, or randomised words which don't look even slightly believable. If you are going to
                     use a passage of Lorem
                     Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
                  </p>
               </div>
            </div>

            <div class="portfolio_story_approach">
               <div class="portfolio_story">
                  <div class="story_title">
                     <h4 class="title">The story</h4>
                  </div>
                  <div class="story_content">
                     <p>
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                        alteration in some form, by
                        injected humour, or randomised words which don't look even slightly believable. If you are going
                        to use a passage of Lorem
                        Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. There
                        are many variations of
                        passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by
                        injected humour, or
                        randomised words which don't look even slightly believable. If you are going to use a passage of
                        Lorem Ipsum, you need to
                        be sure there isn't anything embarrassing hidden in the middle of text.
                     </p>
                  </div>
               </div>
               <div class="portfolio_approach">
                  <div class="approach_title">
                     <h4 class="title">OUR APPROACH</h4>
                  </div>
                  <div class="approach_content">
                     <p>
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                        alteration in some form, by
                        injected humour, or randomised words which don't look even slightly believable. If you are going
                        to use a passage of Lorem
                        Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. There
                        are many variations of
                        passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by
                        injected humour, or
                        randomised words which don't look even slightly believable. If you are going to use a passage of
                        Lorem Ipsum, you need to
                        be sure there isn't anything embarrassing hidden in the middle of text.
                     </p>
                  </div>
               </div>
            </div>

            <div class="portfolio_navigation">
               <div class="navigation_item prev-project">
                  <a href="#" class="project">
                     <i class="fal fa-arrow-left"></i>
                     <div class="nav_project">
                        <div class="label">Previous Project</div>
                        <h3 class="title">Sebastian</h3>
                     </div>
                  </a>
               </div>

               <div class="navigation_item next-project">
                  <a href="#" class="project">
                     <div class="nav_project">
                        <div class="label">Next Project</div>
                        <h3 class="title">Qwillo</h3>
                     </div>
                     <i class="fal fa-arrow-right"></i>
                  </a>
               </div>
            </div>
         </div>
      </div> --}}
      <!-- end: Portfolio Popup -->

      <!-- RESUME SECTION START -->
        @include('frontend.partials.resume')
      <!-- RESUME SECTION END -->

      <!-- SKILLS SECTION START -->
        @include('frontend.partials.skills')
      <!-- SKILLS SECTION END -->

      <!-- TESTIMONIAL SECTION START -->
        {{-- @include('frontend.partials.testimonial') --}}
      <!-- TESTIMONIAL SECTION END -->

      <!-- BLOG SECTION STAR -->
        @include('frontend.partials.blog')
      <!-- BLOG SECTION END -->

      <!-- CONTACT SECTION START -->
        @include('frontend.partials.contact')
      <!-- CONTACT SECTION END -->

     
   </main>

   <!-- FOOTER AREA START -->
        @include('frontend.partials.footer')
   <!-- FOOTER AREA END -->

   <!-- CSS here -->
   <script src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>
   <script src="{{asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
   <script src="{{asset('frontend/assets/js/nice-select.min.js')}}"></script>
   <script src="{{asset('frontend/assets/js/backToTop.js')}}"></script>
   <script src="{{asset('frontend/assets/js/smooth-scroll.js')}}"></script>
   <script src="{{asset('frontend/assets/js/appear.min.js')}}"></script>
   <script src="{{asset('frontend/assets/js/wow.min.js')}}"></script>
   <script src="{{asset('frontend/assets/js/gsap.min.js')}}"></script>
   <script src="{{asset('frontend/assets/js/one-page-nav.js')}}"></script>
   <script src="{{asset('frontend/assets/js/lightcase.js')}}"></script>
   <script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
   <script src="{{asset('frontend/assets/js/swiper.min.js')}}"></script>
   <script src="{{asset('frontend/assets/js/imagesloaded-pkgd.js')}}"></script>
   <script src="{{asset('frontend/assets/js/isotope.pkgd.min.js')}}"></script>
   <script src="{{asset('frontend/assets/js/odometer.min.js')}}"></script>
   <script src="{{asset('frontend/assets/js/magnific-popup.js')}}"></script>
   <script src="{{asset('frontend/assets/js/validate.min.js')}}"></script>
   <script src="{{asset('frontend/assets/js/main.js')}}"></script>
</body>
</html>