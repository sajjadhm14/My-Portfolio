@php
    $siteSettings = App\Models\SiteSetting::findOrFail(1);
@endphp
<header class="tj-header-area header-absolute">
      <div class="container">
         <div class="row">
            <div class="col-12 d-flex flex-wrap align-items-center">
               <div class="logo-box">
                  <a href="/">
                     <img src="{{asset($siteSettings->logo)}}" alt="" />
                  </a>
               </div>

               <div class="header-info-list d-none d-md-inline-block">
                  <ul class="ul-reset">
                     <li><a href="mailto:{{$siteSettings->email}}">{{$siteSettings->email}}</a></li>
                  </ul>
               </div>
               <div class="header-menu">
                  <nav>
                     <ul>
                        <li><a href="#services-section">Services</a></li>
                        <li><a href="#resume-section">Resume</a></li>
                        <li><a href="#skills-section">Skills</a></li>
                        <li><a href="#blog-section">Blogs</a></li>
                        <li><a href="#contact-section">Contact</a></li>
                     </ul>
                  </nav>
               </div>
               <div class="header-button">
                  <a href="https://t.me/pharmoba" class="btn tj-btn-primary">Hire me!</a>
               </div>
               <div class="menu-bar d-lg-none">
                  <button>
                     <span></span>
                     <span></span>
                     <span></span>
                     <span></span>
                  </button>
               </div>
            </div>
         </div>
      </div>
   </header>
   <header class="tj-header-area header-2 header-sticky sticky-out">
      <div class="container">
         <div class="row">
            <div class="col-12 d-flex flex-wrap align-items-center">
               <div class="logo-box">
                  <a href="#">
                     <img src="{{asset($siteSettings->logo)}}" alt="" />
                  </a>
               </div>

               <div class="header-info-list d-none d-md-inline-block">
                  <ul class="ul-reset">
                     <li><a href="mailto:{{$siteSettings->email}}">{{$siteSettings->email}}</a></li>
                  </ul>
               </div>

               <div class="header-menu">
                  <nav>
                     <ul>
                        <li><a href="#services-section">Services</a></li>

                        <li><a href="#resume-section">Resume</a></li>
                        <li><a href="#skills-section">Skills</a></li>
                        <li><a href="#blog-section">Blogs</a></li>
                        <li><a href="#contact-section">Contact</a></li>
                     </ul>
                  </nav>
               </div>

               <div class="header-button">
                  <a href="https://t.me/pharmoba" class="btn tj-btn-primary">Hire me!</a>
               </div>

               <div class="menu-bar d-lg-none">
                  <button>
                     <span></span>
                     <span></span>
                     <span></span>
                     <span></span>
                  </button>
               </div>
            </div>
         </div>
      </div>
   </header>