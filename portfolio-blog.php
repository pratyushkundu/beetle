<!DOCTYPE html>
<html lang="en">




<?php include './partials/head.php' ?>

  <body>
 <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
   
  <style>
* {margin: 0; padding: 0; box-sizing: border-box;}
    body {
      font-family: "Inter", sans-serif;
      background: linear-gradient(135deg, #f7f8fa 0%, #e6e8ec 100%);
      color: #1a1a2e;
      line-height: 1.6;
    }
    .container {max-width: 1400px; margin: 0 auto; padding: 0 20px;}

 /* ---------- White Glass Glossy Header ---------- */
 header {
      position: sticky;
      top: 0;
      z-index: 1000;
      background: rgba(255, 255, 255, 0.55);
      backdrop-filter: blur(25px) saturate(250%);
      -webkit-backdrop-filter: blur(25px) saturate(250%);
      border-bottom: 1px solid rgba(255, 255, 255, 0.4);
      border-top: 1px solid rgba(255, 255, 255, 0.3);
      border-radius: 0 0 25px 25px;
      overflow: hidden;
      box-shadow: 0 10px 45px rgba(0,0,0,0.08);
    }

    /* Glossy moving reflection */
    header::before {
      content: "";
      position: absolute;
      inset: 0;
      background: linear-gradient(120deg, rgba(255, 255, 255, 0.8) 0%, rgba(255, 255, 255, 0.4) 30%, rgba(255, 255, 255, 0) 60%);
      mix-blend-mode: screen;
      transform: translateX(-100%);
      animation: shine 6s infinite;
      pointer-events: none;
    }

    @keyframes shine {
      0% { transform: translateX(-100%); }
      50% { transform: translateX(100%); }
      100% { transform: translateX(100%); }
    }

    /* ---------- Top News Bar ---------- */
    .top-news {
      display: flex;
      gap: 25px;
      overflow-x: auto;
      padding: 20px 0;
      scrollbar-width: none;
      position: relative;
      z-index: 10;
    }
   
    /* ------------- Header Top ------------- */

.header-top{
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:15px 0;
}
.logo{
    font-family:'Playfair Display',serif;
    font-size:28px;
    font-weight:900;
    color:#fff;
    letter-spacing:1px;
    display:flex;
    align-items:center;
    gap:8px;
}
.logo span{
    background:linear-gradient(135deg,#ff6b6b,#ee5a6f);
    -webkit-background-clip:text;
    -webkit-text-fill-color:transparent;
}
.search-bar{
    flex:1;
    max-width:400px;
    margin:0 40px;
    position:relative;
}
.search-bar input{
    width:100%;
    padding:10px 15px 10px 40px;
    border:none;
    border-radius:25px;
    font-size:14px;
    outline:none;
    background:rgba(255,255,255,0.1);
    color:#fff;
}
.search-bar::before{
    content:"🔍";
    position:absolute;
    left:15px;
    top:50%;
    transform:translateY(-50%);
    font-size:14px;
    color:#b8b8d1;
}
.social-icons{
    display:flex;
    gap:12px;
}
.social-icons .icon{
    width:36px;height:36px;border-radius:50%;
    background:rgba(255,255,255,0.08);
    display:flex;align-items:center;justify-content:center;
    cursor:pointer;
    transition:all 0.3s ease;
}
.social-icons .icon:hover{
    background:linear-gradient(135deg,#ff6b6b,#ee5a6f);
    transform:translateY(-2px);
    box-shadow:0 0 10px rgba(255,107,107,0.5);
}
/* .top-news{
    display:flex;
    gap:40px;
    overflow-x:auto;
    padding:15px 0;
    scrollbar-width:thin;
    scrollbar-color:rgba(255,107,107,0.5) rgba(255,255,255,0.1);
    border-top:1px solid rgba(255,255,255,0.1);
} */
.top-news-item{
    display:flex;
    align-items:center;
    gap:12px;
    white-space:nowrap;
    transition:transform 0.3s ease,background 0.3s ease;
    cursor:pointer;
    padding:10px 15px;
    border-radius:12px;
    user-select:none;
}
.top-news-item:hover{
    transform:translateY(-2px);
    background:rgba(255,255,255,0.08);
}
.top-news-item.active{
    background:rgba(255,107,107,0.3);
    box-shadow:0 0 10px rgba(255,107,107,0.4);
}
.top-news-item img{
    width:60px;height:60px;border-radius:12px;object-fit:cover;border:2px solid rgba(255,255,255,0.2);
}
.top-news-content h4{color:#fff;font-size:12px;font-weight:600;margin-bottom:4px;}
.top-news-content p{color:#b8b8d1;font-size:11px;}
.top-news::-webkit-scrollbar{height:6px;}
.top-news::-webkit-scrollbar-thumb{background:rgba(255,107,107,0.5);border-radius:10px;}
.top-news::-webkit-scrollbar-thumb:hover{background:rgba(255,107,107,0.8);}

        .top-news-item {
            display: flex;
            align-items: center;
            gap: 12px;
            white-space: nowrap;
            transition: transform 0.3s ease;
            cursor: pointer;
            padding: 10px 15px;
            border-radius: 12px;
            user-select: none;
        }

        .top-news-item:hover {
            transform: translateY(-2px);
            background: rgba(255, 255, 255, 0.05);
        }

        .top-news-item.active {
            background: rgba(255, 107, 107, 0.3);
        }

        .top-news-item img {
            width: 60px;
            height: 60px;
            border-radius: 12px;
            object-fit: cover;
            border: 2px solid rgba(255, 255, 255, 0.2);
        }

        .top-news-content h4 {
            color: #fff;
            font-size: 12px;
            font-weight: 600;
            margin-bottom: 4px;
        }

        .top-news-content p {
            color: #b8b8d1;
            font-size: 11px;
        }

        .badge {
            background: linear-gradient(135deg, #ff6b6b 0%, #ee5a6f 100%);
            color: white;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 10px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            display: inline-block;
            margin-bottom: 8px;
        }

        .hero-section{display:grid;grid-template-columns:2fr 1fr;gap:30px;margin:40px 0;}

        .hero-main {
            position: relative;
            border-radius: 24px;
            overflow: hidden;
            height: 600px;
            cursor: pointer;
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }

        .hero-main:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        }

        .hero-main img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .hero-main:hover img {
            transform: scale(1.05);
        }

        .hero-content {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.95) 0%, rgba(0, 0, 0, 0.7) 50%, transparent 100%);
            padding: 60px 40px 40px;
            color: white;
        }

        .hero-main h2 {
            font-family: 'Playfair Display', serif;
            font-size: 42px;
            font-weight: 900;
            line-height: 1.2;
            margin-top: 12px;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.5);
        }

        .meta-info {
            display: flex;
            gap: 20px;
            align-items: center;
            margin-top: 15px;
            font-size: 13px;
            opacity: 0.9;
        }

        .hero-sidebar {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .sidebar-card {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            height: 280px;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .sidebar-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
        }

        /* .sidebar-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        } */


        .sidebar-content {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.9) 0%, transparent 100%);
            padding: 30px 25px 25px;
            color: white;
        }

        .sidebar-card h3 {
            font-family: 'Playfair Display', serif;
            font-size: 22px;
            font-weight: 700;
            line-height: 1.3;
            margin-top: 8px;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 60px 0 30px;
        }

        .section-title {
            font-family: 'Playfair Display', serif;
            font-size: 36px;
            font-weight: 900;
            position: relative;
            padding-bottom: 15px;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 4px;
            background: linear-gradient(90deg, #ff6b6b, #ee5a6f);
            border-radius: 2px;
        }

        .cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 60px;
        }

        .card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            transition: all 0.4s ease, opacity 0.3s ease, transform 0.3s ease;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
            cursor: pointer;
        }

        .card.hidden {
            display: none;
        }

        /* .filter-counter{display:inline-block;background:linear-gradient(135deg,#ff6b6b,#ee5a6f);color:white;padding:8px 20px;border-radius:25px;font-size:14px;font-weight:600;margin-left:20px;} */

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
        }

        .card-image {
            position: relative;
            height: 220px;
            overflow: hidden;
        }

        .card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .card:hover .card-image img {
            transform: scale(1.1);
        }

        .card-badge {
            position: absolute;
            top: 15px;
            left: 15px;
            z-index: 1;
        }

        .card-content {
            padding: 25px;
        }

        .card-content h3 {
            font-family: 'Playfair Display', serif;
            font-size: 20px;
            font-weight: 700;
            line-height: 1.4;
            margin-bottom: 12px;
            color: #1a1a2e;
        }

        .card-meta {
            display: flex;
            gap: 15px;
            font-size: 12px;
            color: #7d7d8f;
            align-items: center;
        }

        .sidebar-list {
            background: white;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
        }

        .list-item {
            display: flex;
            gap: 20px;
            padding: 20px 0;
            border-bottom: 1px solid #eee;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .list-item:hover {
            padding-left: 10px;
            background: #f8f9fa;
            border-radius: 10px;
        }

        .list-item:last-child {
            border-bottom: none;
        }

        .list-number {
            font-family: 'Playfair Display', serif;
            font-size: 28px;
            font-weight: 900;
            color: #ff6b6b;
            line-height: 1;
        }

        .list-content h4 {
            font-size: 15px;
            font-weight: 600;
            margin-bottom: 8px;
            color: #1a1a2e;
            line-height: 1.4;
        }

        .two-column {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 40px;
            margin-bottom: 60px;
        }

        .tags-widget {
            background: white;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
        }

        .tags {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 20px;
        }

        .tag {
            padding: 8px 18px;
            background: #f5f7fa;
            border-radius: 25px;
            font-size: 12px;
            font-weight: 500;
            color: #5a5a6e;
            transition: all 0.3s ease;
            border: 1px solid transparent;
        }

        .tag:hover {
            background: #ff6b6b;
            color: white;
            border-color: #ff6b6b;
            transform: translateY(-2px);
        }

        .newsletter {
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
            border-radius: 20px;
            padding: 40px;
            color: white;
            margin-top: 30px;
        }

        .newsletter h3 {
            font-family: 'Playfair Display', serif;
            font-size: 24px;
            margin-bottom: 15px;
        }

        .newsletter p {
            opacity: 0.8;
            margin-bottom: 25px;
            font-size: 14px;
        }

        .newsletter-form {
            display: flex;
            gap: 10px;
        }

        .newsletter-form input {
            flex: 1;
            padding: 14px 20px;
            border: none;
            border-radius: 30px;
            font-size: 14px;
            outline: none;
        }

        .newsletter-form button {
            padding: 14px 35px;
            background: linear-gradient(135deg, #ff6b6b 0%, #ee5a6f 100%);
            border: none;
            border-radius: 30px;
            color: white;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-transform: uppercase;
            font-size: 13px;
            letter-spacing: 0.5px;
        }

        .newsletter-form button:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(255, 107, 107, 0.3);
        }

        footer {
            background: #1a1a2e;
            color: white;
            padding: 60px 0 30px;
            margin-top: 80px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-section h4 {
            font-family: 'Playfair Display', serif;
            font-size: 20px;
            margin-bottom: 20px;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 12px;
        }

        .footer-links a {
            color: #b8b8d1;
            text-decoration: none;
            transition: color 0.3s ease;
            font-size: 14px;
        }

        .footer-links a:hover {
            color: #ff6b6b;
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-btn {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .social-btn:hover {
            background: #ff6b6b;
            transform: translateY(-3px);
        }

        .copyright {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #b8b8d1;
            font-size: 14px;
        }

        @media (max-width: 968px) {
            .hero-section {
                grid-template-columns: 1fr;
            }

            .two-column {
                grid-template-columns: 1fr;
            }

            .cards-grid {
                grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            }

            .hero-main h2 {
                font-size: 32px;
            }
        }
    </style>

    <!-- Cursor start -->
    <?php include './partials/Cursor_start.php' ?>
    <!-- Cursor end -->

    <!-- back to top start -->
    <?php include './partials/back_to_start.php' ?>
    <!-- back to top end -->

    <!-- modal-search-start -->
    <?php include './partials/modal-search-start.php' ?>
    <!-- modal-search-end -->
    
    <!-- sidebar-information-area-start -->
    <?php include './partials/sidebar_information.php' ?>

    <div class="has-smooth" id="has_smooth"></div>
      <div id="smooth-wrapper">
        <div id="smooth-content">
            <div class="body-wrapper">
<header class=" sticky top-0 z-50 bg-white shadow-lg border-b border-gray-100 ">
                    <div class="header-top d-none d-md-flex">
                        <div class="container custom-container-1">
                            <div class="row">
                                <div class="col-xl-9 col-lg-9">
                                    <div class="header-top-text">
                                        <p>Empowered by Beetle's Strength & Ant's Engineering</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                    <div class="header-top-social">
                                        <ul>
                                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-google-plus-g"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-main header-sticky">
                        <div class="container custom-container-1">
                            <div class="row align-items-center">
                                <div class="col-xl-2 col-lg-2 col-6">
                                     <div class="h5_header-logo flex align-items-center justify-content-center">
    <a href="index.php" aria-label="Beetle & Ant Co. - Go to Homepage" class="logo-link">
        
        <span class="visually-hidden">Beetle & Ant Co.</span>
        
        <span class="logo-text" aria-hidden="true">
            <span class="logo-beetle">Beetle</span>
            &amp;
            <span class="logo-ant">Ant Co.</span>
        </span>
        
    </a>
</div>
<style>
.h5_header-logo {
    /* Ensures the logo area behaves like a block element, taking its required space */
    display: block; 
    text-align: center; /* Centers the logo link inside its container */
}

.logo-link {
    /* Critical for text in one line: removes any default link text decoration */
    text-decoration: none; 
    display: inline-block; /* Allows vertical padding/margins but keeps it naturally flowing */
    line-height: 1; /* Prevents extra vertical spacing that can cause wrapping */
}

.logo-text {
    /* Set a strong, readable base font size */
    font-size: 24px;
    font-family: 'Arial', sans-serif; /* Replace with your brand font */
    white-space: nowrap; /* CRITICAL: Prevents the text from wrapping to a new line */
}

/* 1. Primary Brand Color (Beetle) */
.logo-beetle {
    /* Deep, professional color (Navy/Dark Gray) */
    color: #34495E; 
    font-weight: 700; /* Extra bold for heavy emphasis */
    margin-right: 5px; /* Small space after the word */
}

/* 2. Secondary/Accent Brand Color (Ant Co.) */
.logo-ant {
    /* Bright, contrasting color (Orange/Coral) */
    color: #E67E22; 
    font-weight: 700; /* Bold */
}

/* Style for the ampersand (&) */
.logo-text > & {
    color: #95A5A6; /* A neutral color for the connector */
    font-weight: 300; /* Lighter weight to be subtle */
    font-size: 20px; /* Slightly smaller than the main text */
}

/* Hides the accessibility text */
.visually-hidden {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    border-width: 0;
}
</style>
                                </div>
                                <div class="col-xl-7 col-lg-7 text-center d-none d-lg-block">
                                    <div class="header-menu ">
                                        <nav class="header-nav-menu" id="mobile-menu">
                                            <ul>
                                                <li >
                                                    <a href="index.php">Engineering</a>
                                                    <!-- <ul class="submenu">
                                                        <li><a href="index.php">Beetle &amp; Ant Co.</a></li>
                                                    
                                                    </ul> -->
                                                </li>
                                                <li><a href="about.php">About</a></li>
                                                <li class="menu-has-child">
                                                    <a href="#">Explore</a>
                                                    <ul class="submenu">
                                                        <!-- <li><a href="service.php">Services</a></li> -->
                                                        <li><a href="team.php">Team</a></li>
                                                        <li><a href="portfolio.php">Portfolio</a></li>
                                                        <li><a href="price.php">Pricing</a></li>
                                                        <!-- <li><a href="faq.php">FAQ's</a></li> -->
                                                        <li><a href="testimonial.php">Testimonials</a></li>
                                                        <!-- <li><a href="wishlist.php">Wishlist</a></li> -->
                                                        <!-- <li><a href="cart.php">Cart</a></li> -->
                                                        <!-- <li><a href="checkout.php">Checkout</a></li> -->
                                                        <!-- <li><a href="login.php">Login</a></li> -->
                                                        <!-- <li><a href="404.php">404</a></li> -->
                                                    </ul>
                                                </li>
                                                <li class="menu-has-child" id="pages-mega-menu-services">
  <a href="#">Services</a>

  <div class="mega-menu-wrapper">
    <div class="mega-menu-container">
      <!-- ========== LEFT SIDEBAR ========== -->
      <div class="mega-menu-sidebar">
        <div class="sidebar-item active" data-service="ai-ml">
          <div class="sidebar-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>
              <polyline points="3.27 6.96 12 12.01 20.73 6.96"/>
              <line x1="12" y1="22.08" x2="12" y2="12"/>
            </svg>
          </div>
          <span>AI & ML</span>
        </div>

        <div class="sidebar-item" data-service="cloud-devsecops">
          <div class="sidebar-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M18 10h-1.26A8 8 0 1 0 9 20h9a5 5 0 0 0 0-10z"/>
            </svg>
          </div>
          <span>Cloud & DevSecOps</span>
        </div>

        <div class="sidebar-item" data-service="iot">
          <div class="sidebar-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <rect x="2" y="7" width="20" height="14" rx="2" ry="2"/>
              <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>
            </svg>
          </div>
          <span>IoT & Custom Software</span>
        </div>

        <div class="sidebar-item" data-service="mobile">
          <div class="sidebar-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <rect x="5" y="2" width="14" height="20" rx="2" ry="2"/>
              <line x1="12" y1="18" x2="12.01" y2="18"/>
            </svg>
          </div>
          <span>Mobile App</span>
        </div>

        <div class="sidebar-item" data-service="web-backend">
          <div class="sidebar-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <rect x="2" y="3" width="20" height="14" rx="2" ry="2"/>
              <line x1="8" y1="21" x2="16" y2="21"/>
              <line x1="12" y1="17" x2="12" y2="21"/>
            </svg>
          </div>
          <span>Web & Backend</span>
        </div>

        <div class="sidebar-item" data-service="design">
          <div class="sidebar-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M12 20h9"/>
              <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/>
            </svg>
          </div>
          <span>Design & Consulting</span>
        </div>

        <div class="sidebar-item" data-service="enterprise">
          <div class="sidebar-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <circle cx="12" cy="12" r="3"/>
              <path d="M12 1v6m0 6v6"/>
              <path d="M1 12h6m6 0h6"/>
            </svg>
          </div>
          <span>Enterprise Solution</span>
        </div>
      </div>

      <!-- ========== MIDDLE SOLUTIONS (Dynamic) ========== -->
      <div class="mega-menu-solutions">
        <h3 class="solutions-title">Solutions</h3>
        <div id="solutions-content" class="solutions-grid"></div>
      </div>

      <!-- ========== RIGHT ENGAGEMENT ========== -->
      <div class="mega-menu-engagement">
        <h3 class="engagement-title">Engagement Models</h3>
        <p class="engagement-subtitle">Flexible Partnerships. Predictable Outcomes.</p>
        <div class="engagement-items">
          <div class="engagement-card">
            <div class="engagement-icon pink-gradient">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                <circle cx="9" cy="7" r="4"/>
                <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
              </svg>
            </div>
            <div class="engagement-content">
              <h4>Staff Augmentation</h4>
              <p>Access top-tier talent on demand: Dedicated, Hourly, or Flexible.</p>
            </div>
          </div>
          <div class="engagement-card">
            <div class="engagement-icon pink-gradient">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                <polyline points="14 2 14 8 20 8"/>
                <line x1="16" y1="13" x2="8" y2="13"/>
                <line x1="16" y1="17" x2="8" y2="17"/>
                <polyline points="10 9 9 9 8 9"/>
              </svg>
            </div>
            <div class="engagement-content">
              <h4>Project-Based Delivery</h4>
              <p>End-to-end ownership of outcomes with full-cycle delivery.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</li>

<!-- ========== STYLE ========== -->


<!-- ========== SCRIPT ========== -->
<script>
document.addEventListener("DOMContentLoaded", function () {
  const sidebarItems = document.querySelectorAll(".mega-menu-sidebar .sidebar-item");
  const solutionsContent = document.getElementById("solutions-content");

  // Define all solutions per service
  const solutionsData = {
    "ai-ml": [
      { title: "Artificial Intelligence", desc: "Innovating businesses with digital technologies" },
      { title: "Agentic AI", desc: "Elevate your experience with AI services" },
      { title: "Natural Language Processing", desc: "Advanced NLP solutions for enterprises" },
      { title: "Custom LLM Development", desc: "Precision LLM development for enterprises" },
      { title: "Data Analytics", desc: "Transforming raw data into insights" },
      { title: "Microsoft Fabric Consulting", desc: "Data strategy, implementation, and support" }
    ],
    "web-backend": [
      { title: "Custom Web Development", desc: "Responsive, high-performance websites and portals" },
      { title: "API Development", desc: "Robust backend architectures for scalable systems" },
      { title: "CMS Integration", desc: "Headless or traditional CMS implementations" },
      { title: "E-commerce Solutions", desc: "Secure, scalable online stores" }
    ],
    "cloud-devsecops": [
      { title: "Cloud Migration", desc: "Seamless migration with zero downtime" },
      { title: "DevSecOps Automation", desc: "Integrate security into CI/CD pipelines" },
      { title: "Infrastructure as Code", desc: "Automate infrastructure provisioning" }
    ],
    "iot": [
      { title: "IoT Device Integration", desc: "Connect devices with smart data exchange" },
      { title: "Embedded Systems", desc: "Firmware and software development for IoT" }
    ],
    "mobile": [
      { title: "iOS & Android Apps", desc: "Beautiful, fast, and reliable mobile experiences" },
      { title: "Flutter / React Native", desc: "Cross-platform apps with native performance" }
    ],
    "design": [
      { title: "UX/UI Design", desc: "Human-centered designs that convert" },
      { title: "Brand Strategy", desc: "Shape your brand identity through design" }
    ],
    "enterprise": [
      { title: "ERP Solutions", desc: "Integrate your enterprise processes efficiently" },
      { title: "CRM Development", desc: "Empower your business with custom CRM systems" }
    ]
  };

  // Function to render solutions
  function renderSolutions(service) {
    const data = solutionsData[service] || [];
    solutionsContent.innerHTML = data.map(item => `
      <div class="solution-item">
        <h4>${item.title}</h4>
        <p>${item.desc}</p>
      </div>
    `).join('');
  }

  // Default load (AI & ML)
  renderSolutions("ai-ml");

  // Sidebar click handler
  sidebarItems.forEach(item => {
    item.addEventListener("click", () => {
      sidebarItems.forEach(i => i.classList.remove("active"));
      item.classList.add("active");
      renderSolutions(item.dataset.service);
    });
  });
});
</script>

<style>
/* Mega Menu Wrapper */
#pages-mega-menu-services {
    position: relative;
}

#pages-mega-menu-services .mega-menu-wrapper {
    position: absolute;
    left: -550px;
    top: 100%;
    width: 1400px;
    max-width: 95vw;
    background: #ffffff;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
    border-radius: 0;
    padding: 0;
    opacity: 0;
    visibility: hidden;
    transform: translateY(10px);
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    z-index: 1000;
    margin-top: 0;
    border-top: 3px solid;
    border-image: linear-gradient(90deg, #7c3aed 0%, #2563eb 100%) 1;
}

#pages-mega-menu-services:hover .mega-menu-wrapper {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

#pages-mega-menu-services .mega-menu-container {
    display: grid;
    grid-template-columns: 280px 1fr 340px;
    gap: 0;
    min-height: 550px;
}

/* Left Sidebar */
#pages-mega-menu-services .mega-menu-sidebar {
    background: #f8f9fa;
    padding: 35px 0;
    border-right: 1px solid #e5e7eb;
}

#pages-mega-menu-services .sidebar-item {
    display: flex;
    align-items: center;
    gap: 14px;
    padding: 14px 30px;
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

#pages-mega-menu-services .sidebar-item::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    width: 0;
    background: linear-gradient(135deg, #7c3aed 0%, #2563eb 100%);
    transition: width 0.3s ease;
}

#pages-mega-menu-services .sidebar-item.active::before,
#pages-mega-menu-services .sidebar-item:hover::before {
    width: 4px;
}

#pages-mega-menu-services .sidebar-item.active {
    background: linear-gradient(90deg, rgba(124, 58, 237, 0.08) 0%, rgba(37, 99, 235, 0.05) 100%);
}

#pages-mega-menu-services .sidebar-item:hover {
    background: linear-gradient(90deg, rgba(124, 58, 237, 0.06) 0%, rgba(37, 99, 235, 0.03) 100%);
    transform: translateX(3px);
}

#pages-mega-menu-services .sidebar-icon {
    width: 42px;
    height: 42px;
    min-width: 42px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #e9d5ff 0%, #ddd6fe 100%);
    color: #7c3aed;
    transition: all 0.3s ease;
    position: relative;
    backdrop-filter: blur(10px);
}

#pages-mega-menu-services .sidebar-item.active .sidebar-icon,
#pages-mega-menu-services .sidebar-item:hover .sidebar-icon {
    background: linear-gradient(135deg, #7c3aed 0%, #2563eb 100%);
    color: white;
    box-shadow: 0 4px 12px rgba(124, 58, 237, 0.3);
    transform: scale(1.05);
}

#pages-mega-menu-services .sidebar-icon::before {
    content: '';
    position: absolute;
    inset: 0;
    border-radius: 10px;
    background: linear-gradient(135deg, rgba(255, 255, 255, 0.3) 0%, rgba(255, 255, 255, 0) 100%);
    opacity: 0;
    transition: opacity 0.3s ease;
}

#pages-mega-menu-services .sidebar-item:hover .sidebar-icon::before {
    opacity: 1;
}

#pages-mega-menu-services .sidebar-item span {
    font-size: 14px;
    font-weight: 500;
    color: #1f2937;
    transition: color 0.3s ease;
}

#pages-mega-menu-services .sidebar-item.active span,
#pages-mega-menu-services .sidebar-item:hover span {
    color: #7c3aed;
}

/* Middle Solutions Section */
#pages-mega-menu-services .mega-menu-solutions {
    padding: 35px 40px;
    background: #ffffff;
}

#pages-mega-menu-services .solutions-title {
    font-size: 16px;
    font-weight: 600;
    color: #9ca3af;
    margin: 0 0 25px 0;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

#pages-mega-menu-services .solutions-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
}

#pages-mega-menu-services .solutions-column {
    display: flex;
    flex-direction: column;
    gap: 18px;
}

#pages-mega-menu-services .solution-item {
    padding: 12px 0;
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
}

#pages-mega-menu-services .solution-item::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 1px;
    background: linear-gradient(90deg, transparent 0%, #e5e7eb 20%, #e5e7eb 80%, transparent 100%);
}

#pages-mega-menu-services .solution-item:hover {
    transform: translateX(5px);
}

#pages-mega-menu-services .solution-item h4 {
    font-size: 15px;
    font-weight: 600;
    color: #1f2937;
    margin: 0 0 6px 0;
    transition: color 0.3s ease;
}

#pages-mega-menu-services .solution-item:hover h4 {
    color: #7c3aed;
    background: linear-gradient(135deg, #7c3aed 0%, #2563eb 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

#pages-mega-menu-services .solution-item p {
    font-size: 13px;
    color: #6b7280;
    margin: 0;
    line-height: 1.5;
}

/* Right Engagement Section */
#pages-mega-menu-services .mega-menu-engagement {
    background: linear-gradient(135deg, #faf5ff 0%, #f3f4f6 100%);
    padding: 35px 30px;
    border-left: 1px solid #e5e7eb;
}

#pages-mega-menu-services .engagement-title {
    font-size: 18px;
    font-weight: 700;
    color: #1f2937;
    margin: 0 0 8px 0;
}

#pages-mega-menu-services .engagement-subtitle {
    font-size: 13px;
    color: #6b7280;
    margin: 0 0 30px 0;
}

#pages-mega-menu-services .engagement-items {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

#pages-mega-menu-services .engagement-card {
    display: flex;
    gap: 15px;
    padding: 20px;
    background: white;
    border-radius: 12px;
    border: 1px solid #e5e7eb;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    cursor: pointer;
    position: relative;
    overflow: hidden;
}

#pages-mega-menu-services .engagement-card::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(124, 58, 237, 0.03) 0%, rgba(37, 99, 235, 0.03) 100%);
    opacity: 0;
    transition: opacity 0.3s ease;
}

#pages-mega-menu-services .engagement-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 28px rgba(124, 58, 237, 0.15);
    border-color: #c4b5fd;
}

#pages-mega-menu-services .engagement-card:hover::before {
    opacity: 1;
}

#pages-mega-menu-services .engagement-icon {
    width: 50px;
    height: 50px;
    min-width: 50px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.4s ease;
    position: relative;
}

#pages-mega-menu-services .pink-gradient {
    background: linear-gradient(135deg, #fce7f3 0%, #e9d5ff 100%);
    color: #c026d3;
}

#pages-mega-menu-services .engagement-card:hover .engagement-icon {
    background: linear-gradient(135deg, #c026d3 0%, #7c3aed 100%);
    color: white;
    transform: scale(1.1) rotate(5deg);
    box-shadow: 0 8px 20px rgba(192, 38, 211, 0.3);
}

#pages-mega-menu-services .engagement-icon::before {
    content: '';
    position: absolute;
    inset: 0;
    border-radius: 12px;
    background: linear-gradient(135deg, rgba(255, 255, 255, 0.4) 0%, rgba(255, 255, 255, 0) 100%);
    opacity: 0;
    transition: opacity 0.3s ease;
}

#pages-mega-menu-services .engagement-card:hover .engagement-icon::before {
    opacity: 1;
}

#pages-mega-menu-services .engagement-content h4 {
    font-size: 15px;
    font-weight: 600;
    color: #1f2937;
    margin: 0 0 6px 0;
    transition: color 0.3s ease;
}

#pages-mega-menu-services .engagement-card:hover .engagement-content h4 {
    color: #7c3aed;
}

#pages-mega-menu-services .engagement-content p {
    font-size: 13px;
    color: #6b7280;
    margin: 0;
    line-height: 1.5;
}

/* Hide default submenu */
#pages-mega-menu-services > .submenu {
    display: none !important;
}

/* Responsive Design */
@media (max-width: 1500px) {
    #pages-mega-menu-services .mega-menu-wrapper {
        width: 1200px;
        left: -200px;
    }
    
    #pages-mega-menu-services .mega-menu-container {
        grid-template-columns: 260px 1fr 320px;
    }
}

@media (max-width: 1280px) {
    #pages-mega-menu-services .mega-menu-wrapper {
        width: 1000px;
        left: -100px;
    }
    
    #pages-mega-menu-services .mega-menu-container {
        grid-template-columns: 240px 1fr 300px;
    }
    
    #pages-mega-menu-services .solutions-grid {
        gap: 20px;
    }
}

@media (max-width: 1024px) {
    #pages-mega-menu-services .mega-menu-wrapper {
        width: 900px;
        left: -50px;
    }
    
    #pages-mega-menu-services .mega-menu-container {
        grid-template-columns: 1fr;
    }
    
    #pages-mega-menu-services .mega-menu-sidebar {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        border-right: none;
        border-bottom: 1px solid #e5e7eb;
    }
    
    #pages-mega-menu-services-services .mega-menu-engagement {
        border-left: none;
        border-top: 1px solid #e5e7eb;
    }
}

@media (max-width: 768px) {
    #pages-mega-menu-services .mega-menu-wrapper {
        width: 600px;
        left: 0;
    }
    
    #pages-mega-menu-services .mega-menu-sidebar {
        grid-template-columns: repeat(2, 1fr);
    }
    
    #pages-mega-menu-services .solutions-grid {
        grid-template-columns: 1fr;
    }
}
</style>
 <li class="menu-has-child" id="pages-mega-menu-services">
  <a href="#">Tech Stacks</a>

  <div class="mega-menu-wrapper">
    <div class="mega-menu-container">
      <!-- ========== LEFT SIDEBAR ========== -->
      <div class="mega-menu-sidebar">
        <div class="sidebar-item active" data-service="ai-ml">
          <div class="sidebar-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>
              <polyline points="3.27 6.96 12 12.01 20.73 6.96"/>
              <line x1="12" y1="22.08" x2="12" y2="12"/>
            </svg>
          </div>
          <span>AI & ML</span>
        </div>

        <div class="sidebar-item" data-service="cloud-devsecops">
          <div class="sidebar-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M18 10h-1.26A8 8 0 1 0 9 20h9a5 5 0 0 0 0-10z"/>
            </svg>
          </div>
          <span>Cloud & DevSecOps</span>
        </div>

        <div class="sidebar-item" data-service="iot">
          <div class="sidebar-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <rect x="2" y="7" width="20" height="14" rx="2" ry="2"/>
              <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>
            </svg>
          </div>
          <span>IoT & Custom Software</span>
        </div>

        <div class="sidebar-item" data-service="mobile">
          <div class="sidebar-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <rect x="5" y="2" width="14" height="20" rx="2" ry="2"/>
              <line x1="12" y1="18" x2="12.01" y2="18"/>
            </svg>
          </div>
          <span>Mobile App</span>
        </div>

        <div class="sidebar-item" data-service="web-backend">
          <div class="sidebar-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <rect x="2" y="3" width="20" height="14" rx="2" ry="2"/>
              <line x1="8" y1="21" x2="16" y2="21"/>
              <line x1="12" y1="17" x2="12" y2="21"/>
            </svg>
          </div>
          <span>Web & Backend</span>
        </div>

        <div class="sidebar-item" data-service="design">
          <div class="sidebar-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M12 20h9"/>
              <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/>
            </svg>
          </div>
          <span>Design & Consulting</span>
        </div>

        <div class="sidebar-item" data-service="enterprise">
          <div class="sidebar-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <circle cx="12" cy="12" r="3"/>
              <path d="M12 1v6m0 6v6"/>
              <path d="M1 12h6m6 0h6"/>
            </svg>
          </div>
          <span>Enterprise Solution</span>
        </div>
      </div>

      <!-- ========== MIDDLE SOLUTIONS (Dynamic) ========== -->
      <div class="mega-menu-solutions">
        <h3 class="solutions-title">Stacks , Frameworks & Solutions</h3>
        <div id="solutions-stack-content" class="solutions-grid"></div>
      </div>

      <!-- ========== RIGHT ENGAGEMENT ========== -->
      <div class="mega-menu-engagement">
        <h3 class="engagement-title">Engagement Models</h3>
        <p class="engagement-subtitle">Flexible Partnerships. Predictable Outcomes.</p>
        <div class="engagement-items">
          <div class="engagement-card">
            <div class="engagement-icon pink-gradient">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                <circle cx="9" cy="7" r="4"/>
                <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
              </svg>
            </div>
            <div class="engagement-content">
              <h4>Staff Augmentation</h4>
              <p>Access top-tier talent on demand: Dedicated, Hourly, or Flexible.</p>
            </div>
          </div>
          <div class="engagement-card">
            <div class="engagement-icon pink-gradient">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                <polyline points="14 2 14 8 20 8"/>
                <line x1="16" y1="13" x2="8" y2="13"/>
                <line x1="16" y1="17" x2="8" y2="17"/>
                <polyline points="10 9 9 9 8 9"/>
              </svg>
            </div>
            <div class="engagement-content">
              <h4>Project-Based Delivery</h4>
              <p>End-to-end ownership of outcomes with full-cycle delivery.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</li>

<!-- ========== STYLE ========== -->


<!-- ========== SCRIPT ========== -->
<script>
document.addEventListener("DOMContentLoaded", function () {
  const sidebarItems = document.querySelectorAll(".mega-menu-sidebar .sidebar-item");
  const solutionsStackContent = document.getElementById("solutions-stack-content");

  // Define all stacks & frameworks per service
  const solutionsStackData = {
    "ai-ml": [
      { title: "TensorFlow", desc: "Open-source library for machine learning and neural networks." },
      { title: "PyTorch", desc: "Deep learning framework optimized for research and production." },
      { title: "scikit-learn", desc: "Machine learning toolkit for Python — regression, classification & more." },
      { title: "Keras", desc: "High-level neural networks API running on TensorFlow." },
      { title: "OpenAI / LangChain", desc: "Integrate and orchestrate LLMs with custom workflows." },
      { title: "Pandas / NumPy", desc: "Essential Python libraries for data processing and analytics." }
    ],

    "web-backend": [
      { title: "React.js", desc: "Component-based frontend library from Meta." },
      { title: "Next.js", desc: "Full-stack React framework with SSR & static site generation." },
      { title: "Vue.js", desc: "Progressive JavaScript framework for building UI." },
      { title: "Angular", desc: "Enterprise-grade frontend framework by Google." },
      { title: "Node.js / Express.js", desc: "Event-driven backend runtime and fast API framework." },
      { title: "Django / Flask", desc: "Python frameworks for rapid backend development." },
      { title: "Laravel / PHP", desc: "Elegant backend framework for modern web apps." },
      { title: "GraphQL / Apollo", desc: "Flexible API query language and runtime for APIs." }
    ],

    "cloud-devsecops": [
      { title: "AWS / Azure / GCP", desc: "Cloud platforms for scalable deployments and managed services." },
      { title: "Docker & Kubernetes", desc: "Containerization and orchestration for DevOps." },
      { title: "Terraform / Ansible", desc: "Infrastructure as Code (IaC) automation tools." },
      { title: "GitHub Actions / Jenkins", desc: "Continuous integration and deployment pipelines." },
      { title: "Vault / SonarQube", desc: "Security and code quality tools for DevSecOps workflows." }
    ],

    "iot": [
      { title: "Arduino / Raspberry Pi", desc: "Hardware platforms for IoT prototyping." },
      { title: "MQTT / CoAP", desc: "Lightweight IoT communication protocols." },
      { title: "AWS IoT Core / Azure IoT Hub", desc: "Cloud-based IoT connectivity and management." },
      { title: "C / C++ Embedded", desc: "Low-level firmware development for connected devices." },
      { title: "Node-RED", desc: "Flow-based tool for wiring hardware and APIs." }
    ],

    "mobile": [
      { title: "React Native", desc: "Cross-platform mobile apps with React." },
      { title: "Flutter", desc: "Fast, beautiful apps for iOS and Android from Google." },
      { title: "Swift (iOS)", desc: "Modern programming language for native iOS apps." },
      { title: "Kotlin (Android)", desc: "Official language for Android development." },
      { title: "Ionic / Capacitor", desc: "Hybrid mobile frameworks for web-based apps." }
    ],

    "design": [
      { title: "Figma", desc: "Collaborative interface design tool." },
      { title: "Adobe XD / Illustrator", desc: "Powerful tools for design and prototyping." },
      { title: "Sketch", desc: "Design and prototyping platform for UI/UX." },
      { title: "Framer / Webflow", desc: "No-code and design-to-web platforms." },
      { title: "Miro / Notion", desc: "Collaboration tools for product planning & wireframes." }
    ],

    "enterprise": [
      { title: "SAP / Oracle ERP", desc: "Comprehensive enterprise resource planning systems." },
      { title: "Salesforce", desc: "CRM solutions for sales, marketing, and customer success." },
      { title: "Microsoft Dynamics 365", desc: "Integrated ERP and CRM business solutions." },
      { title: "Odoo / ERPNext", desc: "Open-source ERP platforms for SMEs." },
      { title: "Power BI / Tableau", desc: "Enterprise analytics and business intelligence tools." }
    ]
  };

  // Function to render stacks dynamically
  function renderSolutions(service) {
    const data = solutionsStackData[service] || [];
    solutionsStackContent.innerHTML = data.map(item => `
      <div class="solution-item">
        <h4>${item.title}</h4>
        <p>${item.desc}</p>
      </div>
    `).join('');
  }

  // Default load (AI & ML)
  renderSolutions("ai-ml");

  // Sidebar click handler
  sidebarItems.forEach(item => {
    item.addEventListener("click", () => {
      sidebarItems.forEach(i => i.classList.remove("active"));
      item.classList.add("active");
      renderSolutions(item.dataset.service);
    });
  });
});
</script>


<style>
/* Mega Menu Wrapper */
#pages-mega-menu-services {
    position: relative;
}

#pages-mega-menu-services .mega-menu-wrapper {
    position: absolute;
    left: -550px;
    top: 100%;
    width: 1400px;
    max-width: 95vw;
    background: #ffffff;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
    border-radius: 0;
    padding: 0;
    opacity: 0;
    visibility: hidden;
    transform: translateY(10px);
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    z-index: 1000;
    margin-top: 0;
    border-top: 3px solid;
    border-image: linear-gradient(90deg, #7c3aed 0%, #2563eb 100%) 1;
}

#pages-mega-menu-services:hover .mega-menu-wrapper {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

#pages-mega-menu-services .mega-menu-container {
    display: grid;
    grid-template-columns: 280px 1fr 340px;
    gap: 0;
    min-height: 550px;
}

/* Left Sidebar */
#pages-mega-menu-services .mega-menu-sidebar {
    background: #f8f9fa;
    padding: 35px 0;
    border-right: 1px solid #e5e7eb;
}

#pages-mega-menu-services .sidebar-item {
    display: flex;
    align-items: center;
    gap: 14px;
    padding: 14px 30px;
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

#pages-mega-menu-services .sidebar-item::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    width: 0;
    background: linear-gradient(135deg, #7c3aed 0%, #2563eb 100%);
    transition: width 0.3s ease;
}

#pages-mega-menu-services .sidebar-item.active::before,
#pages-mega-menu-services .sidebar-item:hover::before {
    width: 4px;
}

#pages-mega-menu-services .sidebar-item.active {
    background: linear-gradient(90deg, rgba(124, 58, 237, 0.08) 0%, rgba(37, 99, 235, 0.05) 100%);
}

#pages-mega-menu-services .sidebar-item:hover {
    background: linear-gradient(90deg, rgba(124, 58, 237, 0.06) 0%, rgba(37, 99, 235, 0.03) 100%);
    transform: translateX(3px);
}

#pages-mega-menu-services .sidebar-icon {
    width: 42px;
    height: 42px;
    min-width: 42px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #e9d5ff 0%, #ddd6fe 100%);
    color: #7c3aed;
    transition: all 0.3s ease;
    position: relative;
    backdrop-filter: blur(10px);
}

#pages-mega-menu-services .sidebar-item.active .sidebar-icon,
#pages-mega-menu-services .sidebar-item:hover .sidebar-icon {
    background: linear-gradient(135deg, #7c3aed 0%, #2563eb 100%);
    color: white;
    box-shadow: 0 4px 12px rgba(124, 58, 237, 0.3);
    transform: scale(1.05);
}

#pages-mega-menu-services .sidebar-icon::before {
    content: '';
    position: absolute;
    inset: 0;
    border-radius: 10px;
    background: linear-gradient(135deg, rgba(255, 255, 255, 0.3) 0%, rgba(255, 255, 255, 0) 100%);
    opacity: 0;
    transition: opacity 0.3s ease;
}

#pages-mega-menu-services .sidebar-item:hover .sidebar-icon::before {
    opacity: 1;
}

#pages-mega-menu-services .sidebar-item span {
    font-size: 14px;
    font-weight: 500;
    color: #1f2937;
    transition: color 0.3s ease;
}

#pages-mega-menu-services .sidebar-item.active span,
#pages-mega-menu-services .sidebar-item:hover span {
    color: #7c3aed;
}

/* Middle Solutions Section */
#pages-mega-menu-services .mega-menu-solutions {
    padding: 35px 40px;
    background: #ffffff;
}

#pages-mega-menu-services .solutions-title {
    font-size: 16px;
    font-weight: 600;
    color: #9ca3af;
    margin: 0 0 25px 0;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

#pages-mega-menu-services .solutions-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
}

#pages-mega-menu-services .solutions-column {
    display: flex;
    flex-direction: column;
    gap: 18px;
}

#pages-mega-menu-services .solution-item {
    padding: 12px 0;
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
}

#pages-mega-menu-services .solution-item::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 1px;
    background: linear-gradient(90deg, transparent 0%, #e5e7eb 20%, #e5e7eb 80%, transparent 100%);
}

#pages-mega-menu-services .solution-item:hover {
    transform: translateX(5px);
}

#pages-mega-menu-services .solution-item h4 {
    font-size: 15px;
    font-weight: 600;
    color: #1f2937;
    margin: 0 0 6px 0;
    transition: color 0.3s ease;
}

#pages-mega-menu-services .solution-item:hover h4 {
    color: #7c3aed;
    background: linear-gradient(135deg, #7c3aed 0%, #2563eb 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

#pages-mega-menu-services .solution-item p {
    font-size: 13px;
    color: #6b7280;
    margin: 0;
    line-height: 1.5;
}

/* Right Engagement Section */
#pages-mega-menu-services .mega-menu-engagement {
    background: linear-gradient(135deg, #faf5ff 0%, #f3f4f6 100%);
    padding: 35px 30px;
    border-left: 1px solid #e5e7eb;
}

#pages-mega-menu-services .engagement-title {
    font-size: 18px;
    font-weight: 700;
    color: #1f2937;
    margin: 0 0 8px 0;
}

#pages-mega-menu-services .engagement-subtitle {
    font-size: 13px;
    color: #6b7280;
    margin: 0 0 30px 0;
}

#pages-mega-menu-services .engagement-items {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

#pages-mega-menu-services .engagement-card {
    display: flex;
    gap: 15px;
    padding: 20px;
    background: white;
    border-radius: 12px;
    border: 1px solid #e5e7eb;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    cursor: pointer;
    position: relative;
    overflow: hidden;
}

#pages-mega-menu-services .engagement-card::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(124, 58, 237, 0.03) 0%, rgba(37, 99, 235, 0.03) 100%);
    opacity: 0;
    transition: opacity 0.3s ease;
}

#pages-mega-menu-services .engagement-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 28px rgba(124, 58, 237, 0.15);
    border-color: #c4b5fd;
}

#pages-mega-menu-services .engagement-card:hover::before {
    opacity: 1;
}

#pages-mega-menu-services .engagement-icon {
    width: 50px;
    height: 50px;
    min-width: 50px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.4s ease;
    position: relative;
}

#pages-mega-menu-services .pink-gradient {
    background: linear-gradient(135deg, #fce7f3 0%, #e9d5ff 100%);
    color: #c026d3;
}

#pages-mega-menu-services .engagement-card:hover .engagement-icon {
    background: linear-gradient(135deg, #c026d3 0%, #7c3aed 100%);
    color: white;
    transform: scale(1.1) rotate(5deg);
    box-shadow: 0 8px 20px rgba(192, 38, 211, 0.3);
}

#pages-mega-menu-services .engagement-icon::before {
    content: '';
    position: absolute;
    inset: 0;
    border-radius: 12px;
    background: linear-gradient(135deg, rgba(255, 255, 255, 0.4) 0%, rgba(255, 255, 255, 0) 100%);
    opacity: 0;
    transition: opacity 0.3s ease;
}

#pages-mega-menu-services .engagement-card:hover .engagement-icon::before {
    opacity: 1;
}

#pages-mega-menu-services .engagement-content h4 {
    font-size: 15px;
    font-weight: 600;
    color: #1f2937;
    margin: 0 0 6px 0;
    transition: color 0.3s ease;
}

#pages-mega-menu-services .engagement-card:hover .engagement-content h4 {
    color: #7c3aed;
}

#pages-mega-menu-services .engagement-content p {
    font-size: 13px;
    color: #6b7280;
    margin: 0;
    line-height: 1.5;
}

/* Hide default submenu */
#pages-mega-menu-services > .submenu {
    display: none !important;
}

/* Responsive Design */
@media (max-width: 1500px) {
    #pages-mega-menu-services .mega-menu-wrapper {
        width: 1200px;
        left: -200px;
    }
    
    #pages-mega-menu-services .mega-menu-container {
        grid-template-columns: 260px 1fr 320px;
    }
}

@media (max-width: 1280px) {
    #pages-mega-menu-services .mega-menu-wrapper {
        width: 1000px;
        left: -100px;
    }
    
    #pages-mega-menu-services .mega-menu-container {
        grid-template-columns: 240px 1fr 300px;
    }
    
    #pages-mega-menu-services .solutions-grid {
        gap: 20px;
    }
}

@media (max-width: 1024px) {
    #pages-mega-menu-services .mega-menu-wrapper {
        width: 900px;
        left: -50px;
    }
    
    #pages-mega-menu-services .mega-menu-container {
        grid-template-columns: 1fr;
    }
    
    #pages-mega-menu-services .mega-menu-sidebar {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        border-right: none;
        border-bottom: 1px solid #e5e7eb;
    }
    
    #pages-mega-menu-services-services .mega-menu-engagement {
        border-left: none;
        border-top: 1px solid #e5e7eb;
    }
}

@media (max-width: 768px) {
    #pages-mega-menu-services .mega-menu-wrapper {
        width: 600px;
        left: 0;
    }
    
    #pages-mega-menu-services .mega-menu-sidebar {
        grid-template-columns: repeat(2, 1fr);
    }
    
    #pages-mega-menu-services .solutions-grid {
        grid-template-columns: 1fr;
    }
}
</style>


                                                <li class="menu-has-child">
                                                    <a href="shop.php">Shop</a>
                                                    <!-- <ul class="submenu">
                                                        <li><a href="shop.php">Shop</a></li>
                                                        <li><a href="shop-details.php">Shop Details</a></li>
                                                    </ul> -->
                                                </li>
                                                <li class="menu-has-child">
                                                    <a href="portfolio-blog.php">Blog</a>
                                                    <!-- <ul class="submenu">
                                                        <li><a href="portfolio-blog.php">Blog</a></li>
                                                        <li><a href="blog-details.php">Blog Details</a></li>
                                                    </ul> -->
                                                </li>
                                                <li><a href="contact.php">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-6">
                                    <div class="header-action-wrap d-flex align-items-center justify-content-end">
                                        <div class="header-action d-none d-sm-flex">
                                            <a href="partner.php" class="header-action-login">
                                                <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7.01172 8C8.94472 8 10.5117 6.433 10.5117 4.5C10.5117 2.567 8.94472 1 7.01172 1C5.07872 1 3.51172 2.567 3.51172 4.5C3.51172 6.433 5.07872 8 7.01172 8Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M13.026 15C13.026 12.291 10.331 10.1 7.013 10.1C3.695 10.1 1 12.291 1 15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                Partnership Venture                                         
                                            </a>
                                            <a href="contact.php" class="header-action-btn">
                                                Work with us                                      
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
                    <?php $subTitle='Portfolio' ?>
<?php
include('db.php');

// Get the blog ID
$id = $_GET['id'] ?? 0;

if ($id > 0) {
    // Increase views count
    $conn->query("UPDATE blogs SET views = views + 1 WHERE id = $id");
}


// 1. Fetch all blogs for display
$sql = "SELECT * FROM blogs ORDER BY created_at DESC";
$result = $conn->query($sql);
$all_posts = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $all_posts[] = $row;
    }
}

// 3. Fetch popular posts (top 5 most viewed)
$popular_sql = "SELECT id, title, image, category, created_at, views 
                FROM blogs 
                ORDER BY views DESC 
                LIMIT 5";

$popular_result = $conn->query($popular_sql);

$popular_posts = [];
while ($row = $popular_result->fetch_assoc()) {
    $popular_posts[] = $row;
}


// 2. Select hero + sidebar posts
$hero_post = count($all_posts) > 0 ? array_shift($all_posts) : null;
$sidebar_posts = count($all_posts) >= 2 ? array_splice($all_posts, 0, 2) : [];
$recent_posts = $all_posts;

// 3. Fetch unique categories
$cat_sql = "SELECT DISTINCT category FROM blogs";
$cat_result = $conn->query($cat_sql);
$categories = ['all'];
while ($cat_row = $cat_result->fetch_assoc()) {
    $categories[] = $cat_row['category'];
}

function make_slug($text) {
    return strtolower(trim(preg_replace('/[^A-Za-z0-9]+/', '-', $text), '-'));
}

// Simulated Popular Posts — replace later with DB logic
// $popular_posts = [
//     ['title' => 'The Future of AI and Machine Learning in Tech', 'category' => 'Technology', 'author' => 'David Hall', 'created_at' => '2025-11-13'],
//     ['title' => 'Best Practices for Cloud Migration in 2025', 'category' => 'Cloud', 'author' => 'Jane Doe', 'created_at' => '2025-11-12'],
//     ['title' => 'A Deep Dive into the Latest JavaScript Frameworks', 'category' => 'Tech', 'author' => 'Sam Smith', 'created_at' => '2025-11-11'],
//     ['title' => 'Cybersecurity Trends You Can’t Ignore', 'category' => 'Security', 'author' => 'Ella Tech', 'created_at' => '2025-11-10']
// ];
?>

<section class="inner_portfolio-area-v2">
    <div class="container">
        <div class="top-news">

            <?php 
            foreach ($categories as $category):
                $category_slug = make_slug($category);
                $display_name = ucfirst($category);

                // Placeholder images
              $img_map = [

    // Default
    'all' => 'https://images.unsplash.com/photo-1525186402429-b4ff38bedbec?w=100&h=100&fit=crop',

    // Main categories
    'technology' => 'https://images.unsplash.com/photo-1518770660439-4636190af475?w=100&h=100&fit=crop',
    'ai' => 'https://images.unsplash.com/photo-1581091012184-5c7f36d74f23?w=100&h=100&fit=crop',
    'cloud' => 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=100&h=100&fit=crop',
    'security' => 'https://images.unsplash.com/photo-1555949963-aa79dcee981c?w=100&h=100&fit=crop',

    // Additional categories from dropdown
    'business' => 'https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?w=100&h=100&fit=crop',
    'design' => 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=100&h=100&fit=crop',
    'health' => 'https://images.unsplash.com/photo-1505751104546-4b63c93054b1?w=100&h=100&fit=crop',
    'travel' => 'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?w=100&h=100&fit=crop',
    'style' => 'https://images.unsplash.com/photo-1512436991641-6745cdb1723f?w=100&h=100&fit=crop',

    // Alias for “tech”
    'tech' => 'https://images.unsplash.com/photo-1518770660439-4636190af475?w=100&h=100&fit=crop'
];


                $img_url = $img_map[$category_slug] ?? 'https://images.unsplash.com/photo-1496171367471-989b07197c21?w=100&h=100&fit=crop';
            ?>

                <div class="top-news-item <?php echo $category === 'all' ? 'active' : ''; ?>" 
                    data-category="<?php echo $category_slug; ?>">

                    <img src="<?php echo $img_url; ?>" alt="Category Icon" />
                    <div class="top-news-content">
                        <h4><?php echo htmlspecialchars($display_name); ?></h4>
                        <p><?php echo $category === 'all' ? 'Show all articles' : "Latest in {$display_name}"; ?></p>
                    </div>
                </div>

            <?php endforeach; ?>

            <button class="btn btn-primary ms-auto" onclick="openForm()">Write a Blog</button>

        </div>
    </div>

    <div id="blogFormModal" class="modal" style="display:none;">
        <div class="modal-content">
            <span class="close" onclick="closeForm()">&times;</span>
            <h3>Write Your Blog</h3>
           <form action="add_post.php" method="POST" enctype="multipart/form-data" class="blog-form">

    <div class="form-group">
        <label>Blog Title</label>
        <input type="text" name="title" required>
    </div>

    <div class="form-group">
        <label>Category</label>
        <select name="category" required>
            <option value="">Select Category</option>
            <option value="Technology">Technology</option>
            <option value="AI">AI</option>
            <option value="Cloud">Cloud</option>
            <option value="Security">Security</option>
            <option value="Business">Business</option>
            <option value="Design">Design</option>
            <option value="Health">Health</option>
            <option value="Travel">Travel</option>
            <option value="Style">Style</option>
        </select>
    </div>

    <div class="form-group">
        <label>Author Name</label>
        <input type="text" name="author" placeholder="Optional">
    </div>

    <div class="form-group">
        <label>Blog Content</label>
        <textarea name="content" rows="6" required></textarea>
    </div>

    <div class="form-group">
        <label>Featured Image</label>
        <input type="file" name="image" accept="image/*">
    </div>

    <button type="submit" class="submit-btn">Post Blog</button>
</form>

        </div>
    </div>

    <div class="container mt-4">
        <?php if ($hero_post):
            $hero_img = $hero_post['image'] ? "uploads/" . $hero_post['image'] : "https://images.unsplash.com/photo-1584036561566-baf8f5f1b144?w=1200&h=800&fit=crop";
            $hero_cat = htmlspecialchars($hero_post['category']);
            $hero_title = htmlspecialchars($hero_post['title']);
            $hero_author = htmlspecialchars($hero_post['author']);
            $hero_date = date("F d, Y", strtotime($hero_post['created_at']));
        ?>
        <section class="hero-section mb-5">
            <div class="hero-main">
                <img src="<?php echo $hero_img; ?>" alt="<?php echo $hero_title; ?>">
                <div class="hero-content">
                    <span class="badge"><?php echo $hero_cat; ?></span>
                    <h2><?php echo $hero_title; ?></h2>
                    <div class="meta-info">
                        <span>By <?php echo $hero_author; ?></span>
                        <span>•</span>
                        <span><?php echo $hero_date; ?></span>
                    </div>
                    <button class="read-more-hero" onclick="openBlogModal(<?php echo $hero_post['id']; ?>)">Read Full Story</button>
                </div>
            </div>
            <div class="hero-sidebar">
                <?php foreach ($sidebar_posts as $post):
                    $side_img = $post['image'] ? "uploads/" . $post['image'] : "https://images.unsplash.com/photo-1511632765486-a01980e01a18?w=600&h=400&fit=crop";
                    $side_cat = htmlspecialchars($post['category']);
                    $side_title = htmlspecialchars($post['title']);
                    $side_author = htmlspecialchars($post['author']);
                    $side_date = date("M d, Y", strtotime($post['created_at']));
                ?>
                <div class="sidebar-card" onclick="openBlogModal(<?php echo $post['id']; ?>)">
                    <img src="<?php echo $side_img; ?>" alt="<?php echo $side_title; ?>">
                    <div class="sidebar-content">
                        <span class="badge"><?php echo $side_cat; ?></span>
                        <h3><?php echo $side_title; ?></h3>
                        <div class="meta-info">
                            <span>By <?php echo $side_author; ?></span>
                            <span>•</span>
                            <span><?php echo $side_date; ?></span>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
        <?php endif; ?>

        <div class="section-header">
            <h2 class="section-title">Recent Posts <span class="filter-counter" id="filterCounter">(<?php echo count($recent_posts); ?> Posts)</span></h2>
        </div>

        <div class="two-column">
            <div>
                <div class="cards-grid blog-grid-main">
                    <?php
                    if (count($recent_posts) > 0) {
                        foreach ($recent_posts as $row) {
                            $img = $row['image'] ? "uploads/" . $row['image'] : "https://images.unsplash.com/photo-1518770660439-4636190af475?w=600&h=400&fit=crop";
                            // $category_slug = strtolower(str_replace(' ', '-', $row['category']));
                            $category_slug = make_slug($row['category']);

                            echo '
                            <div class="card" data-category="' . htmlspecialchars($category_slug) . '">
                                <div class="card-image">
                                    <span class="card-badge badge">' . htmlspecialchars($row['category']) . '</span>
                                    <img src="' . $img . '" alt="Blog Image">
                                </div>
                                <div class="card-content">
                                    <h3>' . htmlspecialchars($row['title']) . '</h3>
                                    <div class="card-meta">
                                        <span>By ' . htmlspecialchars($row['author']) . '</span>
                                        <span>•</span>
                                        <span>' . date("F d, Y", strtotime($row['created_at'])) . '</span>
                                    </div>
                                    <button class="read-more" onclick="openBlogModal(' . $row['id'] . ')">Read More</button>
                                </div>
                            </div>';
                        }
                    } else if (!$hero_post && count($sidebar_posts) === 0) {
                        echo "<p>No blogs yet. Be the first to post!</p>";
                    }
                    ?>
                </div>
            </div>

            <div>
        <div class="sidebar-list">
  <h3 class="section-title">🔥 Popular Posts</h3>

    <div class="premium-posts-wrapper">
        <?php foreach ($popular_posts as $pop): ?>

            <?php 
                $id        = $pop['id'] ?? 0;
                $title     = $pop['title'] ?? '';
                $image     = $pop['image'] ?? 'default.jpg';
                $category  = $pop['category'] ?? 'General';
                $date      = $pop['created_at'] ?? '';
                $views     = $pop['views'] ?? 0;

                $slug      = make_slug($category);
                $url       = "blog.php?id=" . $id;
            ?>

            <div class="premium-post-card" data-category="<?= $slug ?>">
                
                <div class="premium-thumb">
                    <a href="<?= $url ?>">
                        <img src="uploads/<?= $image ?>" alt="<?= htmlspecialchars($title) ?>">
                    </a>
                    <span class="premium-category"><?= $category ?></span>
                </div>

                <div class="premium-content">
                    <a href="<?= $url ?>">
                        <h4><?= htmlspecialchars($title) ?></h4>
                    </a>

                    <div class="premium-meta">
                        <span><?= date("M d, Y", strtotime($date)) ?></span>
                        <span>•</span>
                        <span><?= $views ?> views</span>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>
    </div>
</div>


                <div class="tags-widget mt-5">
                    <h3 class="section-title">🏷️ Tags</h3>
                    <div class="tags">
                        <?php
                            $all_tags = ['#BUSINESS', '#STYLE', '#TECHNOLOGY', '#HEALTH', '#TRAVELING', '#AI', '#CLOUD', '#SECURITY', '#DESIGN'];
                            foreach ($all_tags as $tag):
                        ?>
                            <span class="tag"><?php echo $tag; ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="newsletter mt-5">
                    <h3>✉️ Newsletter</h3>
                    <p>The most important tech insights and stories of the day, delivered to your inbox.</p>
                    <form class="newsletter-form">
                        <input type="email" placeholder="Your email address" required>
                        <button type="submit">SIGN UP</button>
                    </form>
                </div>
            </div>
        </div>

        <?php if (count($recent_posts) > 4): ?>
        <div class="section-header mt-5">
            <h2 class="section-title">💡 Developer Spotlights</h2>
        </div>

        <div class="cards-grid secondary-grid">
            <?php // Display the next few posts from $recent_posts as a secondary grid
            $secondary_posts = array_slice($recent_posts, 0, 4);
            foreach ($secondary_posts as $row) {
                $img = $row['image'] ? "uploads/" . $row['image'] : "https://images.unsplash.com/photo-1504450758481-7338eba7524a?w=600&h=400&fit=crop";
                // $category_slug = strtolower(str_replace(' ', '-', $row['category']));
                $category_slug = make_slug($row['category']);

                echo '
                <div class="card" data-category="' . htmlspecialchars($category_slug) . '">
                    <div class="card-image">
                        <span class="card-badge badge">' . htmlspecialchars($row['category']) . '</span>
                        <img src="' . $img . '" alt="Blog Image">
                    </div>
                    <div class="card-content">
                        <h3>' . htmlspecialchars($row['title']) . '</h3>
                        <div class="card-meta">
                            <span>By ' . htmlspecialchars($row['author']) . '</span>
                            <span>•</span>
                            <span>' . date("F d, Y", strtotime($row['created_at'])) . '</span>
                        </div>
                        <button class="read-more" onclick="openBlogModal(' . $row['id'] . ')">Read More</button>
                    </div>
                </div>';
            }
            ?>
        </div>
        <?php endif; ?>
    </div>
</section>

<!-- <div id="blogModal" class="modal" style="display:none;">
    <div class="modal-content large">
        <span class="close" onclick="closeBlogModal()">&times;</span>
        <div id="blogModalContent"></div>
    </div>
</div> -->
<div id="blogModal" class="modal" style="display:none;">
    <div class="modal-content blog-modal">
        <span class="close" onclick="closeBlogModal()">&times;</span>

        <div class="modal-inner">
            <div class="modal-image-wrapper">
                <img id="modalImage" src="" alt="Blog Image">
            </div>

            <div class="modal-text-wrapper">
                <span class="modal-category" id="modalCategory"></span>
                <h2 class="modal-title" id="modalTitle"></h2>

                <div class="modal-meta">
                    <span id="modalAuthor"></span>
                    <span>•</span>
                    <span id="modalDate"></span>
                </div>

                <p id="modalContent"></p>
            </div>
        </div>
    </div>
</div>


<script>
    function openForm() {
        document.getElementById("blogFormModal").style.display = "flex";
    }
    function closeForm() {
        document.getElementById("blogFormModal").style.display = "none";
    }
    // function openBlogModal(id) {
    //     fetch(`get_blog.php?id=${id}`)
    //         .then(res => res.text())
    //         .then(html => {
    //             document.getElementById("blogModalContent").innerHTML = html;
    //             document.getElementById("blogModal").style.display = "flex"; // Use flex for centering
    //         });
    // }
    function openBlogModal(id) {
    fetch("get_blog.php?id=" + id)
    .then(res => res.json())
    .then(data => {
        document.getElementById("modalImage").src = data.image;
        document.getElementById("modalCategory").textContent = data.category;
        document.getElementById("modalTitle").textContent = data.title;
        document.getElementById("modalAuthor").textContent = "By " + data.author;
        document.getElementById("modalDate").textContent = data.date;
        document.getElementById("modalContent").innerHTML = data.content;

        document.getElementById("blogModal").style.display = "block";
    });
}

function closeBlogModal() {
    document.getElementById("blogModal").style.display = "none";
}

    function closeBlogModal() {
        document.getElementById("blogModal").style.display = "none";
    }

    // Category Filtering Logic
    document.addEventListener('DOMContentLoaded', function() {
        const categoryItems = document.querySelectorAll('.top-news-item');
        const allCards = document.querySelectorAll('.blog-grid-main .card');
        const filterCounter = document.getElementById('filterCounter');

        function updateCounter(category, count) {
            if (!filterCounter) return;
            if (category === 'all') {
                filterCounter.textContent = `(${allCards.length} Posts)`;
            } else {
                const name = category.charAt(0).toUpperCase() + category.slice(1);
                filterCounter.textContent = `(${count} ${name} Post${count !== 1 ? 's' : ''})`;
            }
        }

        // function filterCards(selectedCategory) {
        //     let visibleCount = 0;
        //     allCards.forEach(card => {
        //         const cardCategory = card.getAttribute('data-category');
        //         if (selectedCategory === 'all' || cardCategory === selectedCategory) {
        //             card.classList.remove('hidden');
        //             visibleCount++;
        //         } else {
        //             card.classList.add('hidden');
        //         }
        //     });
        //     updateCounter(selectedCategory, visibleCount);
        // }
        function slug(text) {
    return text.toLowerCase().replace(/[^a-z0-9]+/g, '-');
}

       function filterCards(selectedCategory) {
    let visibleCount = 0;

    allCards.forEach(card => {
        const cardCategory = card.getAttribute('data-category');

        if (selectedCategory === 'all' || selectedCategory === cardCategory) {
            card.classList.remove('hidden');
            visibleCount++;
        } else {
            card.classList.add('hidden');
        }
    });

    updateCounter(selectedCategory, visibleCount);
}

categoryItems.forEach(item => {
    item.addEventListener('click', function() {

        categoryItems.forEach(i => i.classList.remove('active'));
        this.classList.add('active');

        const category = this.getAttribute('data-category');
        filterCards(category);
    });
});


        // Initialize with 'all' posts visible and count
        filterCards('all');
    });

    
</script>

<style>
/* --- UTILITIES & BASE STYLES --- */
/* ------------------------- */
/* PREMIUM POPULAR POSTS UI  */
/* ------------------------- */

.popular-posts-premium {
    margin-top: 40px;
}

.premium-title {
    font-size: 26px;
    font-weight: 800;
    margin-bottom: 25px;
    background: linear-gradient(90deg, #000, #444);
    -webkit-background-clip: text;
    color: transparent;
}

.premium-posts-wrapper {
    display: flex;
    flex-direction: column;
    gap: 25px;
}

/* Each Card */

.premium-post-card {
    display: flex;
    gap: 20px;
    padding: 18px;
    background: rgba(255, 255, 255, 0.5);
    border-radius: 16px;
    backdrop-filter: blur(18px);
    border: 1px solid rgba(255, 255, 255, 0.45);
    box-shadow: 0 8px 22px rgba(0,0,0,0.09);
    transition: 0.35s ease;
    cursor: pointer;
}

.premium-post-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 12px 26px rgba(0,0,0,0.12);
    border-color: rgba(0,0,0,0.18);
}

/* Thumbnail */

.premium-thumb {
    position: relative;
}

.premium-thumb img {
    width: 110px;
    height: 90px;
    object-fit: cover;
    border-radius: 14px;
    transition: 0.3s ease;
}

.premium-post-card:hover .premium-thumb img {
    opacity: 0.92;
}

/* Category Tag */

.premium-category {
    position: absolute;
    bottom: 6px;
    left: 6px;
    padding: 3px 8px;
    font-size: 11px;
    background: rgba(0,0,0,0.65);
    color: #fff;
    border-radius: 6px;
    backdrop-filter: blur(4px);
}

/* Content */

.premium-content h4 {
    margin: 0;
    font-size: 17px;
    font-weight: 700;
    line-height: 1.4;
    color: #111;
    transition: 0.3s;
}

.premium-content h4:hover {
    color: #007bff;
}

.premium-meta {
    margin-top: 8px;
    font-size: 13px;
    color: #666;
    display: flex;
    align-items: center;
    gap: 8px;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
}
.section-header {
    margin-bottom: 30px;
    margin-top: 40px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.section-title {
    font-size: 32px;
    font-weight: 700;
    color: #1a1a1a;
    margin: 0;
}
.filter-counter {
    font-size: 16px;
    font-weight: 400;
    color: #6c757d;
    margin-left: 10px;
}
.badge {
    background-color: #e9ecef;
    color: #007bff;
    padding: 4px 10px;
    border-radius: 4px;
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase;
    display: inline-block;
    margin-bottom: 8px;
}
.meta-info {
    font-size: 14px;
    color: #6c757d;
    margin-top: 8px;
}
.meta-info span {
    margin-right: 5px;
}
.read-more {
    background: #007bff;
    color: white;
    border: none;
    padding: 8px 15px;
    border-radius: 6px;
    cursor: pointer;
    margin-top: 15px;
    transition: background 0.2s;
    font-size: 14px;
}
.read-more:hover {
    background: #0056b3;
}
.read-more-hero {
    background: #dc3545; /* Distinct color for hero button */
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 8px;
    cursor: pointer;
    margin-top: 20px;
    font-size: 16px;
    font-weight: 600;
    transition: background 0.2s;
}
.read-more-hero:hover {
    background: #c82333;
}
.hidden {
    display: none !important;
}
.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
}
.ms-auto { /* Simple alignment utility */
    margin-left: auto;
}

/* --- TOP NEWS/CATEGORY FILTER --- */
.top-news {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    padding: 15px 0;
    border-bottom: 1px solid #e0e0e0;
    margin-bottom: 30px;
    align-items: center;
}
.top-news-item {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 10px 15px;
    border-radius: 8px;
    cursor: pointer;
    transition: background-color 0.2s;
    border: 1px solid transparent;
}
.top-news-item:hover {
    background-color: #f8f9fa;
}
.top-news-item.active {
    background-color: #f1f1ff;
    border-color: #007bff;
}
.top-news-item img {
    width: 40px;
    height: 40px;
    object-fit: cover;
    border-radius: 50%;
}
.top-news-content h4 {
    margin: 0;
    font-size: 16px;
    font-weight: 600;
    color: #333;
}
.top-news-content p {
    margin: 0;
    font-size: 12px;
    color: #6c757d;
}

/* --- HERO SECTION --- */
.hero-section {
    display: flex;
    gap: 30px;
}
.hero-main {
    flex: 2;
    position: relative;
    border-radius: 12px;
    overflow: hidden;
}
.hero-main img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    filter: brightness(0.9);
}
.hero-content {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 30px;
    color: white;
    background: linear-gradient(to top, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0));
}
.hero-content h2 {
    font-size: 36px;
    margin: 10px 0 0;
    line-height: 1.2;
}
.hero-content .badge {
    background-color: #dc3545;
    color: white;
}
.hero-content .meta-info {
    color: #ccc;
}

.hero-sidebar {
    flex: 1;
    display: flex;
    flex-direction: column;
    gap: 20px;
}
.sidebar-card {
    display: flex;
    gap: 15px;
    background-color: #f8f9fa;
    border-radius: 8px;
    overflow: hidden;
    cursor: pointer;
    transition: box-shadow 0.2s;
}
.sidebar-card:hover {
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}
.sidebar-card img {
    width: 120px;
    height: 120px;
    object-fit: cover;
}
.sidebar-content {
    padding: 15px;
}
.sidebar-content h3 {
    font-size: 18px;
    margin: 0;
    font-weight: 600;
    line-height: 1.3;
}
.sidebar-content .badge {
    margin-bottom: 5px;
}

/* --- MAIN LAYOUT & GRID --- */
.two-column {
    display: grid;
    grid-template-columns: 2fr 1fr; /* Main grid: 2/3 for content, 1/3 for sidebar */
    gap: 40px;
}
.cards-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 30px;
}
/* Specifically for the main recent posts grid */
.blog-grid-main {
    grid-template-columns: 1fr 1fr; /* Force 2 columns for a tighter layout */
}

/* --- BLOG CARD STYLES --- */
.card {
    background-color: #fff;
    border: 1px solid #e0e0e0;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
    transition: transform 0.2s, box-shadow 0.2s;
}
.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 18px rgba(0, 0, 0, 0.1);
}
.card-image {
    position: relative;
}
.card-image img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    display: block;
}
.card-badge {
    position: absolute;
    top: 15px;
    left: 15px;
    z-index: 10;
    background-color: #007bff;
    color: white;
}
.card-content {
    padding: 20px;
}
.card-content h3 {
    font-size: 20px;
    margin: 0;
    font-weight: 600;
    line-height: 1.3;
    color: #1a1a1a;
}
.card-content .read-more {
    display: inline-block;
}

/* --- SIDEBAR WIDGETS --- */
.sidebar-list {
    background-color: #f8f9fa;
    padding: 20px;
    border-radius: 10px;
}
.sidebar-list .section-title {
    font-size: 24px;
    border-bottom: 2px solid #007bff;
    padding-bottom: 10px;
    margin-bottom: 20px;
}
.list-item {
    display: flex;
    gap: 15px;
    margin-bottom: 20px;
    align-items: flex-start;
}
.list-number {
    font-size: 32px;
    font-weight: 700;
    color: #007bff;
    line-height: 1;
}
.list-content h4 {
    margin: 0;
    font-size: 16px;
    font-weight: 600;
    line-height: 1.3;
}
.list-content .badge {
    background-color: #007bff;
    color: white;
    padding: 2px 6px;
    font-size: 10px;
}
.list-content .card-meta {
    margin-top: 4px;
    font-size: 13px;
}

/* Tags Widget */
.tags-widget .section-title {
    font-size: 24px;
}
.tags {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}
.tag {
    background-color: #e9ecef;
    color: #495057;
    padding: 8px 15px;
    border-radius: 20px;
    font-size: 14px;
    cursor: pointer;
    transition: background-color 0.2s, color 0.2s;
}
.tag:hover {
    background-color: #007bff;
    color: white;
}

/* Newsletter Widget */
.newsletter {
    background-color: #212529;
    color: white;
    padding: 30px;
    border-radius: 10px;
    text-align: center;
}
.newsletter h3 {
    font-size: 24px;
    margin-top: 0;
}
.newsletter p {
    font-size: 15px;
    margin-bottom: 20px;
}
.newsletter-form input {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 6px;
    margin-bottom: 10px;
}
.newsletter-form button {
    width: 100%;
    padding: 10px;
    background-color: #dc3545;
    color: white;
    border: none;
    border-radius: 6px;
    font-weight: 600;
    cursor: pointer;
    transition: background-color 0.2s;
}
.newsletter-form button:hover {
    background-color: #c82333;
}


/* --- MODAL STYLES (Adjusted for Flex Centering) --- */
.modal {
    display: none;
    position: fixed;
    z-index: 9999;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.7);
    justify-content: center; /* Center horizontally */
    align-items: center; /* Center vertically */
}

.modal-content {
    background-color: #fff;
    padding: 30px;
    border-radius: 12px;
    width: 90%;
    max-width: 600px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.3);
    animation: fadeIn 0.3s ease-out;
    position: relative;
    max-height: 90vh; /* Limit height */
    overflow-y: auto; /* Allow scrolling */
}

.modal-content.large {
    max-width: 1000px;
}

/* Close button */
.close {
    position: sticky; /* Keep close button visible when scrolling */
    top: -15px;
    right: -15px;
    color: #888;
    font-size: 36px;
    font-weight: bold;
    cursor: pointer;
    z-index: 10000;
    background-color: #fff;
    padding: 0 5px;
    border-radius: 50%;
}
.close:hover {
    color: #000;
}

/* Form styling */
.modal-content input,
.modal-content textarea {
    border: 1px solid #ddd;
    border-radius: 6px;
    padding: 10px 12px;
    font-size: 15px;
    width: 100%;
}
.modal-content h3 {
    margin-bottom: 20px;
    font-weight: 600;
}

/* Responsive Adjustments */
@media (max-width: 992px) {
    .hero-section {
        flex-direction: column;
    }
    .hero-main {
        height: 300px;
    }
    .two-column {
        grid-template-columns: 1fr; /* Single column on smaller screens */
    }
    .blog-grid-main {
        grid-template-columns: 1fr; /* Single column for main grid */
    }
    .top-news {
        justify-content: center;
    }
    .top-news-item {
        flex-basis: 40%; /* Better wrapping for filter items */
    }
}
@media (max-width: 576px) {
    .section-title {
        font-size: 24px;
    }
    .hero-content h2 {
        font-size: 24px;
    }
}
/* Improved Blog Form UI */
.blog-form {
    display: flex;
    flex-direction: column;
    gap: 18px;
}

.blog-form .form-group {
    display: flex;
    flex-direction: column;
}

.blog-form label {
    font-size: 14px;
    font-weight: 600;
    margin-bottom: 6px;
    color: #333;
}

.blog-form input,
.blog-form select,
.blog-form textarea {
    padding: 12px 14px;
    border: 1px solid #ced4da;
    border-radius: 8px;
    font-size: 15px;
    transition: border-color 0.2s, box-shadow 0.2s;
}

.blog-form input:focus,
.blog-form select:focus,
.blog-form textarea:focus {
    border-color: #007bff;
    box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.15);
    outline: none;
}

.submit-btn {
    width: 100%;
    padding: 14px;
    background: #28a745;
    color: white;
    border: none;
    border-radius: 8px;
    font-weight: 700;
    font-size: 16px;
    cursor: pointer;
    transition: background 0.2s;
}

.submit-btn:hover {
    background: #218838;
}
/* Modal base layout */
.blog-modal {
    width: 70%;
    max-width: 900px;
    background: #fff;
    border-radius: 14px;
    overflow: hidden;
    animation: fadeIn 0.25s ease-in-out;
    padding: 0;
}

.modal-inner {
    display: flex;
    gap: 0px;
    padding: 0;
}

/* Left image */
.modal-image-wrapper {
    width: 40%;
    max-height: 380px;
    overflow: hidden;
}

.modal-image-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Right text area */
.modal-text-wrapper {
    width: 60%;
    padding: 25px;
}

/* Category badge */
.modal-category {
    display: inline-block;
    background: #005eff;
    padding: 5px 12px;
    font-size: 12px;
    color: white;
    border-radius: 30px;
    margin-bottom: 10px;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.modal-title {
    margin: 5px 0 10px;
    font-size: 22px;
    line-height: 1.3;
}

/* Author + Date */
.modal-meta {
    display: flex;
    gap: 6px;
    font-size: 13px;
    color: #777;
    margin-bottom: 15px;
}

/* Paragraph */
#modalContent {
    font-size: 15px;
    line-height: 1.6;
    color: #444;
    max-height: 300px;
    overflow-y: auto;
}

/* Close button */
.close {
    position: absolute;
    right: 15px;
    top: 10px;
    font-size: 28px;
    cursor: pointer;
}

@keyframes fadeIn {
    from {opacity: 0; transform: translateY(-10px);}
    to {opacity: 1; transform: translateY(0);}
}

/* Modal Background */
#blogModal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.65);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 99999;
    padding: 20px;
}

/* Modal Box */
.blog-modal {
    background: #fff;
    width: 80%;
    max-width: 900px;
    border-radius: 14px;
    overflow: hidden;
    animation: fadeIn 0.3s ease;
    box-shadow: 0 20px 40px rgba(0,0,0,0.2);
    position: relative;
}

/* Close Button */
.blog-modal .close {
    position: absolute;
    top: 14px;
    right: 18px;
    font-size: 28px;
    color: #222;
    cursor: pointer;
    z-index: 1000;
}

/* Inner layout */
.modal-inner {
    display: flex;
    gap: 20px;
    padding: 20px;
}

/* Image */
.modal-image-wrapper {
    flex: 1.2;
    max-height: 450px;
    overflow: hidden;
    border-radius: 10px;
}

.modal-image-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Text section */
.modal-text-wrapper {
    flex: 2;
}

/* Title */
.modal-title {
    font-size: 28px;
    font-weight: 700;
    margin-bottom: 10px;
}

/* Category Badge */
.modal-category {
    background: #3a7afe;
    color: #fff;
    padding: 6px 12px;
    border-radius: 6px;
    font-size: 12px;
    letter-spacing: .5px;
}

/* Meta */
.modal-meta {
    font-size: 14px;
    margin-bottom: 12px;
    color: #666;
}

/* Content */
#modalContent {
    font-size: 16px;
    line-height: 1.7;
}

/* Animation */
@keyframes fadeIn {
    from { transform: translateY(-20px); opacity: 0; }
    to { transform: translateY(0); opacity: 1; }
}
/* Keep your sidebar layout */
.hero-sidebar {
    display: flex;
    flex-direction: column;
    gap: 18px;
}

/* Sidebar card becomes vertical */
.sidebar-card {
    width: 100%;
    background: #ffffff;
    border-radius: 14px;
    overflow: hidden;
    cursor: pointer;
    transition: 0.25s ease;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
    border: 1px solid #f2f2f2;

    display: flex;
    flex-direction: column;  /* ← THIS MAKES IMAGE ON TOP */
}

/* Image covers the top half */
.sidebar-card img {
    width: 100%;
    height: auto;          /* adjust height as needed */
    object-fit: cover;      /* clean crop */
}

/* Content stays below */
.sidebar-content {
    padding: 14px 16px;
    display: flex;
    flex-direction: column;
    gap: 8px;
}

/* Badge */
.badge {
    display: inline-block;
    background: #0066ff;
    color: #fff;
    padding: 4px 10px;
    border-radius: 30px;
    font-size: 12px;
    font-weight: 600;
    width: fit-content;
}

/* Title */
.sidebar-content h3 {
    font-size: 15px;
    margin: 0;
    font-weight: 700;
    color: #222;

    display: -webkit-box;
    -webkit-line-clamp: 2; 
    -webkit-box-orient: vertical;
    overflow: hidden;
}

/* Meta Info */
.meta-info {
    font-size: 13px;
    color: #666;
    display: flex;
    gap: 6px;
    align-items: center;
}

/* Hover effect */
.sidebar-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 30px rgba(0,0,0,0.12);
}



</style>

            </main>

            <!-- footer area start -->
            <?php include './partials/footer.php' ?>
            <!-- footer area end -->
          </div>
        </div>

    </div>
</body>
</html>
        <!-- <div class="section-header"> -->