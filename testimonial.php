<!DOCTYPE html>
<html lang="en">

<?php include './partials/head.php' ?>
<!-- AOS Library CSS -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

  <body>

    <!-- Cursor start -->
    <?php include './partials/cursor_start.php' ?>
    <!-- Cursor end -->

    <!-- back to top start -->
    <?php include './partials/back_to_start.php' ?>
    <!-- back to top end -->

    <!-- modal-search-start -->
    <?php include './partials/modal-search-start.php' ?>
    <!-- modal-search-end -->
    
    <!-- sidebar-information-area-start -->
    <?php include './partials/sidebar_information.php' ?>
    <!-- sidebar-information-area-end -->
     <script src="https://cdn.tailwindcss.com"></script>

    <div class="has-smooth" id="has_smooth"></div>
    
    <div id="smooth-wrapper">
        <div id="smooth-content">
            <div class="body-wrapper">
                <header class="h5_header-area">
                    <div class="h5_header-top d-sm-flex align-items-center d-none">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-xl-6 col-lg-7">
                                    <div class="h5_header-top-text">
                                        <p>Create an account to avail a 34% bonus discount at checkout.</p>
                                        <a href="#">Learn More<i class="fa-light fa-angle-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-5 d-none d-lg-block">
                                    <div class="h5_header-top-right">
                                        <div class="h5_header-top-language">
                                            <select name="select" class="h5_header-top-language-option has-nice-select">
                                                <option value="1">English</option>
                                                <option value="2">Bangla</option>
                                                <option value="3">Arabic</option>
                                                <option value="4">Urdu</option>
                                            </select>
                                        </div>
                                        <div class="h5_header-top-currency">
                                            <select name="select" class="h5_header-top-currency-option has-nice-select">
                                                <option value="1">$USD</option>
                                                <option value="2">৳Taka</option>
                                                <option value="3">€Euro</option>
                                            </select>
                                        </div>
                                        <div class="h5_header-top-account">
                                            <a href="#">
                                                <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7.0127 8C8.94569 8 10.5127 6.433 10.5127 4.5C10.5127 2.567 8.94569 1 7.0127 1C5.0797 1 3.5127 2.567 3.5127 4.5C3.5127 6.433 5.0797 8 7.0127 8Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M13.026 15C13.026 12.291 10.331 10.1 7.013 10.1C3.695 10.1 1 12.291 1 15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                My Account
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h5_header-bottom header-sticky">
                        <div class="container">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-xl-2 col-lg-2 col-4">
                                    <div class="h5_header-logo">
                                        <a href="index.php"><img src="assets/images/logo/logo.png" alt="Image Not Found"></a>
                                    </div>
                                </div>
                                <div class="col-xl-7 col-lg-6 d-none d-lg-block text-center">
                                    <div class="h5_header-menu ">
                                        <nav class="h5_header-nav-menu" id="mobile-menu">
                                            <ul>
                                                <li class="menu-has-child">
                                                    <a href="index.php">Home</a>
                                                    <ul class="submenu">
                                                        <li><a href="index.php">AI Doodle</a></li>
                                                        <li><a href="index-2.php">AI Co-Pilot</a></li>
                                                        <li><a href="index-3.php">AI Image Generator</a></li>
                                                        <li><a href="index-4.php">AI Text Generator</a></li>
                                                        <li><a href="index-5.php">AI Photostock</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="about.php">About</a></li>
                                                <li class="menu-has-child">
                                                    <a href="#">Pages</a>
                                                    <ul class="submenu">
                                                        <li><a href="service.php">Services</a></li>
                                                        <li><a href="team.php">Team</a></li>
                                                        <li><a href="work.php">Portfolio</a></li>
                                                        <li><a href="price.php">Pricing</a></li>
                                                        <li><a href="faq.php">FAQ's</a></li>
                                                        <li><a href="testimonial.php">Testimonials</a></li>
                                                        <li><a href="wishlist.php">Wishlist</a></li>
                                                        <li><a href="cart.php">Cart</a></li>
                                                        <li><a href="checkout.php">Checkout</a></li>
                                                        <li><a href="login.php">Login</a></li>
                                                        <li><a href="404.php">404</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-has-child">
                                                    <a href="shop.php">Shop</a>
                                                    <ul class="submenu">
                                                        <li><a href="shop.php">Shop</a></li>
                                                        <li><a href="shop-details.php">Shop Details</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-has-child">
                                                    <a href="blog.php">Blog</a>
                                                    <ul class="submenu">
                                                        <li><a href="blog.php">Blog</a></li>
                                                        <li><a href="blog-details.php">Blog Details</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="contact.php">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-8">
                                    <div class="h5_header-action-wrap d-flex align-items-center justify-content-end">
                                        <div class="h5_header-action d-none d-sm-flex">
                                            <div class="h5_header-action-inner">
                                                <a class="h5_header-action-search" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#search-modal"><i class="fa-light fa-search"></i></a>
                                                <a href="cart.php" class="h5_header-action-cart"><i class="fa-light fa-shopping-bag"></i><span>12</span></a>
                                            </div>
                                            <a href="#" class="h5_header-action-btn">
                                                Get Started<i class="fa-light fa-angle-right"></i>                                
                                            </a>
                                        </div>
                                        <div class="header-menu-bar d-lg-none ml-10">
                                            <span class="header-menu-bar-icon side-toggle">
                                                <i class="fa-light fa-bars"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>

                <main>
                    <?php $subTitle="Testimonials"?>
                    <!-- breadcrumb area start -->
                    <!-- breadcrumb area end -->
  
                    <!-- testimonial area start -->
                   <!-- ============================= -->




<section id="voice-of-success" class="bg-[#f8fafc] py-20">
  <div class="max-w-7xl mx-auto px-6 text-center">
    <h2 class="text-4xl font-extrabold text-[#0e1e3a] mb-4" data-aos="fade-up">
      Voice of Success
    </h2>
    <p class="text-lg text-gray-600 max-w-2xl mx-auto mb-12" data-aos="fade-up" data-aos-delay="100">
      Real stories. Real impact. Discover how global leaders and startups partner with us to transform ideas into success.
    </p>

    <!-- Masonry Grid -->
    <div class="columns-1 sm:columns-2 lg:columns-3 gap-6 space-y-6">

      <!-- Video Card -->
      <div class="break-inside-avoid overflow-hidden rounded-2xl bg-white shadow-lg transform transition hover:scale-105 hover:shadow-2xl" data-aos="fade-up" data-aos-delay="200">
        <div class="relative group overflow-hidden">
          <img src="assets/images/clients/video-thumb1.jpg" class="w-full h-72 object-cover transition-transform group-hover:scale-110" alt="Client Testimonial 1">
          <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank" class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-40 group-hover:bg-opacity-60 transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-white animate-pulse" viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z" /></svg>
          </a>
        </div>
        <div class="p-6 text-left">
          <h3 class="font-semibold text-lg text-[#0e1e3a]">Sarah Mitchell</h3>
          <p class="text-sm text-gray-500 mb-2">CEO, BrightPath Health</p>
          <p class="text-gray-600 text-sm">“The TechAhead team helped us scale faster than we imagined. Their UX strategy was a game changer.”</p>
        </div>
      </div>

      <!-- Quote Card with Image -->
      <div class="break-inside-avoid bg-white p-8 rounded-2xl shadow-lg text-left transform transition hover:scale-105 hover:shadow-2xl" data-aos="fade-up" data-aos-delay="300">
        <p class="text-[#2D72FE] text-5xl leading-none mb-4">“</p>
        <p class="text-gray-700 mb-6">They translated our vision into a beautiful, functional app that customers love using every day.</p>
        <div class="flex items-center gap-4">
          <img src="assets/images/clients/client2.jpg" alt="Client" class="w-12 h-12 rounded-full object-cover">
          <div>
            <p class="font-semibold text-[#0e1e3a]">Megan Flores</p>
            <p class="text-sm text-gray-500">CMO, VoltEnergy</p>
          </div>
        </div>
      </div>

      <!-- Medium Video Card -->
      <div class="break-inside-avoid overflow-hidden rounded-2xl bg-white shadow-lg transform transition hover:scale-105 hover:shadow-2xl" data-aos="fade-up" data-aos-delay="400">
        <div class="relative group overflow-hidden">
          <img src="assets/images/clients/video-thumb2.jpg" class="w-full h-56 object-cover transition-transform group-hover:scale-110" alt="Client Testimonial 2">
          <a href="https://www.youtube.com/watch?v=ysz5S6PUM-U" target="_blank" class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-40 group-hover:bg-opacity-60 transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-white animate-pulse" viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z" /></svg>
          </a>
        </div>
        <div class="p-6 text-left">
          <h3 class="font-semibold text-lg text-[#0e1e3a]">Jonathan Lee</h3>
          <p class="text-sm text-gray-500 mb-2">Founder, FitTrack</p>
          <p class="text-gray-600 text-sm">“TechAhead redefined how our users engage with our fitness platform. A truly strategic partner.”</p>
        </div>
      </div>

      <!-- Quote Card No Image -->
      <div class="break-inside-avoid bg-white p-8 rounded-2xl shadow-lg text-left transform transition hover:scale-105 hover:shadow-2xl" data-aos="fade-up" data-aos-delay="500">
        <p class="text-[#2D72FE] text-5xl leading-none mb-4">“</p>
        <p class="text-gray-700 mb-6">Incredible team spirit and technical depth. We couldn’t have asked for a better development partner.</p>
        <div class="flex items-center gap-4">
          <div>
            <p class="font-semibold text-[#0e1e3a]">David Chen</p>
            <p class="text-sm text-gray-500">Product Head, GreenLeaf</p>
          </div>
        </div>
      </div>

      <!-- Extra Tall Video Card -->
      <div class="break-inside-avoid overflow-hidden rounded-2xl bg-white shadow-lg transform transition hover:scale-105 hover:shadow-2xl" data-aos="fade-up" data-aos-delay="600">
        <div class="relative group overflow-hidden">
          <img src="assets/images/clients/video-thumb3.jpg" class="w-full h-80 object-cover transition-transform group-hover:scale-110" alt="Client Testimonial 3">
          <a href="https://www.youtube.com/watch?v=jNQXAC9IVRw" target="_blank" class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-40 group-hover:bg-opacity-60 transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-white animate-pulse" viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z" /></svg>
          </a>
        </div>
        <div class="p-6 text-left">
          <h3 class="font-semibold text-lg text-[#0e1e3a]">Priya Kapoor</h3>
          <p class="text-sm text-gray-500 mb-2">CTO, EduSpark</p>
          <p class="text-gray-600 text-sm">“Their process transparency and technical clarity stood out from day one.”</p>
        </div>
      </div>

      <!-- Quote Card with Image -->
      <div class="break-inside-avoid bg-white p-8 rounded-2xl shadow-lg text-left transform transition hover:scale-105 hover:shadow-2xl" data-aos="fade-up" data-aos-delay="700">
        <p class="text-[#2D72FE] text-5xl leading-none mb-4">“</p>
        <p class="text-gray-700 mb-6">Flawless execution and timely delivery. They’re our long-term product partner now.</p>
        <div class="flex items-center gap-4">
          <img src="assets/images/clients/client4.jpg" alt="Client" class="w-12 h-12 rounded-full object-cover">
          <div>
            <p class="font-semibold text-[#0e1e3a]">Ravi Patel</p>
            <p class="text-sm text-gray-500">COO, FinWise</p>
          </div>
        </div>
      </div>

      <!-- New Testimonial - No Image, Short Quote -->
      <div class="break-inside-avoid bg-white p-8 rounded-2xl shadow-lg text-left transform transition hover:scale-105 hover:shadow-2xl" data-aos="fade-up" data-aos-delay="800">
        <p class="text-[#2D72FE] text-5xl leading-none mb-4">“</p>
        <p class="text-gray-700 mb-6">Amazing product guidance. Their team thought of everything before we even asked.</p>
        <div class="flex items-center gap-4">
          <div>
            <p class="font-semibold text-[#0e1e3a]">Anita Singh</p>
            <p class="text-sm text-gray-500">Founder, MindBloom</p>
          </div>
        </div>
      </div>

      <!-- New Testimonial - Client Image, No Video -->
      <div class="break-inside-avoid bg-white p-8 rounded-2xl shadow-lg text-left transform transition hover:scale-105 hover:shadow-2xl" data-aos="fade-up" data-aos-delay="900">
        <p class="text-[#2D72FE] text-5xl leading-none mb-4">“</p>
        <p class="text-gray-700 mb-6">Exceptional strategy and development. Truly a partner for growth.</p>
        <div class="flex items-center gap-4">
          <img src="assets/images/clients/client5.jpg" alt="Client" class="w-12 h-12 rounded-full object-cover">
          <div>
            <p class="font-semibold text-[#0e1e3a]">Rohit Mehta</p>
            <p class="text-sm text-gray-500">CEO, BrightWave</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>



                   
                    <!-- testimonial area end -->

                    <!-- faq area start -->
                    <section class="h3_faq-area pt-135 pb-110 inner_bg">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-7">
                                    <div class="inner_section-area mb-50 text-center">
                                        <span class="inner_section-subtitle tp_subtitle_anim">Question & Answerer</span>
                                        <h2 class="inner_section-title tp_title_slideup mb-0">We answer your questions</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="h3_faq-wrap">
                                <div class="h3_faq-content">
                                    <div class="accordion" id="Expp">
                                        <div class="row">
                                            <div class="col-xl-6 tp_fade_left" data-fade-from="bottom">
                                                <div class="accordion-item mb-30">
                                                    <h2 class="accordion-header" id="headingOne">
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Does Doodle To Write Long Articles?
                                                        </button>
                                                    </h2>
                                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#Expp">
                                                        <div class="accordion-body">
                                                            <p>
                                                            Sed Mattis eros lectors, eu fermentum Felis laborites convallis. Nam Felis arco, sed  mi Faubus quips. Fusco id dui nil. Sed ac lorem a dolor one of incident suscept quips Purus.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item mb-30">
                                                    <h2 class="accordion-header" id="headingTwo">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">What is Doodle Content Writing Tool?
                                                        </button>
                                                    </h2>
                                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#Expp">
                                                        <div class="accordion-body">
                                                            <p>
                                                            Sed Mattis eros lectors, eu fermentum Felis laborites convallis. Nam Felis arco, sed  mi Faubus quips. Fusco id dui nil. Sed ac lorem a dolor one of incident suscept quips Purus.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item mb-30">
                                                    <h2 class="accordion-header" id="headingThree">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">How does the learning process of AI Image work?
                                                        </button>
                                                    </h2>
                                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#Expp">
                                                        <div class="accordion-body">
                                                            <p>
                                                            Sed Mattis eros lectors, eu fermentum Felis laborites convallis. Nam Felis arco, sed  mi Faubus quips. Fusco id dui nil. Sed ac lorem a dolor one of incident suscept quips Purus.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 tp_fade_left" data-fade-from="bottom" data-delay=".8">
                                                <div class="accordion-item mb-30">
                                                    <h2 class="accordion-header" id="headingFour">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">How are AI writers impacting the writing industry?
                                                        </button>
                                                    </h2>
                                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#Expp">
                                                        <div class="accordion-body">
                                                            <p>
                                                            Sed Mattis eros lectors, eu fermentum Felis laborites convallis. Nam Felis arco, sed  mi Faubus quips. Fusco id dui nil. Sed ac lorem a dolor one of incident suscept quips Purus.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item mb-30">
                                                    <h2 class="accordion-header" id="headingFive">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">What Languages Does It Supports?
                                                        </button>
                                                    </h2>
                                                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#Expp">
                                                        <div class="accordion-body">
                                                            <p>
                                                            Sed Mattis eros lectors, eu fermentum Felis laborites convallis. Nam Felis arco, sed  mi Faubus quips. Fusco id dui nil. Sed ac lorem a dolor one of incident suscept quips Purus.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item mb-30">
                                                    <h2 class="accordion-header" id="headingSix">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">What is the benefit of AI tools?
                                                        </button>
                                                    </h2>
                                                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#Expp">
                                                        <div class="accordion-body">
                                                            <p>
                                                            Sed Mattis eros lectors, eu fermentum Felis laborites convallis. Nam Felis arco, sed  mi Faubus quips. Fusco id dui nil. Sed ac lorem a dolor one of incident suscept quips Purus.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item mb-30">
                                                    <h2 class="accordion-header" id="headingSeven">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">Does Doodle To Write Long Articles?
                                                        </button>
                                                    </h2>
                                                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#Expp">
                                                        <div class="accordion-body">
                                                            <p>
                                                            Sed Mattis eros lectors, eu fermentum Felis laborites convallis. Nam Felis arco, sed  mi Faubus quips. Fusco id dui nil. Sed ac lorem a dolor one of incident suscept quips Purus.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- faq area end -->
                    
                    <!-- brand area start -->
                    <section class="h2_brand-area pb-140 pt-135">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xxl-7 col-xl-9 col-lg-9">
                                    <div class="inner_section-area text-center mb-50">
                                        <span class="inner_section-subtitle tp_subtitle_anim">Our Client</span>
                                        <h2 class="inner_section-title tp_title_slideup mb-0">15,000+ Professionals & Teams Choose Doodle</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="h2_brand-wrap tp_fade_bottom">
                                <div class="h2_brand-item">
                                    <img src="assets/images/brand/1.png" alt="Image Not Found">
                                </div>
                                <div class="h2_brand-item">
                                    <img src="assets/images/brand/2.png" alt="Image Not Found">
                                </div>
                                <div class="h2_brand-item">
                                    <img src="assets/images/brand/3.png" alt="Image Not Found">
                                </div>
                            
                                <div class="h2_brand-item">
                                    <img src="assets/images/brand/4.png" alt="Image Not Found">
                                </div>
                                <div class="h2_brand-item">
                                    <img src="assets/images/brand/5.png" alt="Image Not Found">
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- brand area end -->
                </main>
            
                <!-- footer area start -->
                <?php include './partials/footer.php' ?>
                <!-- footer area end -->

            </div>
        </div>
    </div>

<!-- AOS Library JS -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 800,  // animation duration in ms
    once: true,     // animate only once when scrolling down
  });
</script>

    <!-- jQuery Js -->
    <?php include './partials/script.php' ?>
 
  </body>
</html>
