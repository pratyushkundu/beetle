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

        .sidebar-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .sidebar-card:hover img {
            transform: scale(1.08);
        }

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
                    <?php $subTitle='Portfolio' ?>
                    <!-- breadcrumb area start -->
  <section class="inner_portfolio-area-v2">
    <div class="container">
      <div class="top-news">
        <div class="top-news-item" data-category="politics">
          <img src="https://images.unsplash.com/photo-1504711434969-e33886168f5c?w=100&h=100&fit=crop" />
          <div class="top-news-content">
            <h4>Breaking News</h4>
            <p>Republicans Senator Visits Indonesia</p>
          </div>
        </div>
        <div class="top-news-item" data-category="travel">
          <img src="https://images.unsplash.com/photo-1599305090598-fe179d501227?w=100&h=100&fit=crop" />
          <div class="top-news-content">
            <h4>Travel</h4>
            <p>Barack Obama and Family Visit Indonesia</p>
          </div>
        </div>
        <div class="top-news-item" data-category="business">
          <img src="https://images.unsplash.com/photo-1579047440440-8ef0ee7b2c61?w=100&h=100&fit=crop" />
          <div class="top-news-content">
            <h4>Shopping</h4>
            <p>Air Jordans are Building a Mall</p>
          </div>
        </div>
        <div class="top-news-item active" data-category="all">
          <img src="https://images.unsplash.com/photo-1525186402429-b4ff38bedbec?w=100&h=100&fit=crop" />
          <div class="top-news-content">
            <h4>All</h4>
            <p>Show all articles</p>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
        <section class="hero-section">
            <div class="hero-main">
                <img src="https://images.unsplash.com/photo-1584036561566-baf8f5f1b144?w=1200&h=800&fit=crop" alt="COVID-19">
                <div class="hero-content">
                    <span class="badge">Health</span>
                    <h2>Global solidarity to fight COVID-19, and Indonesia stay safe and health</h2>
                    <div class="meta-info">
                        <span>By David Hall</span>
                        <span>•</span>
                        <span>December 09, 2020</span>
                    </div>
                </div>
            </div>
            <div class="hero-sidebar">
                <div class="sidebar-card">
                    <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?w=600&h=400&fit=crop" alt="Family Visit">
                    <div class="sidebar-content">
                        <span class="badge">Travel</span>
                        <h3>Barack Obama and Family Visit Indonesia, non-citizens sample enjoy holiday tourism</h3>
                        <div class="meta-info">
                            <span>By David Hall</span>
                            <span>•</span>
                            <span>November 28, 2020</span>
                        </div>
                    </div>
                </div>
                <div class="sidebar-card">
                    <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=600&h=400&fit=crop" alt="Building">
                    <div class="sidebar-content">
                        <span class="badge">Architecture</span>
                        <h3>A classic and sturdy building with history</h3>
                        <div class="meta-info">
                            <span>By David Hall</span>
                            <span>•</span>
                            <span>December 09, 2020</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="section-header">
            <h2 class="section-title">Recent Post<span class="filter-counter" id="filterCounter">All Posts</span></h2>
        </div>

        <div class="two-column">
            <div>
                <div class="cards-grid">
                    <div class="card" data-category="politics">
                        <div class="card-image">
                            <span class="card-badge badge">Politics</span>
                            <img src="https://images.unsplash.com/photo-1529107386315-e1a2ed48a620?w=600&h=400&fit=crop" alt="Protest">
                        </div>
                        <div class="card-content">
                            <h3>From eu nisl et arcu iaculis placerat lorem ipsum</h3>
                            <div class="card-meta">
                                <span>By David Hall</span>
                                <span>•</span>
                                <span>December 09, 2020</span>
                            </div>
                        </div>
                    </div>

                    <div class="card" data-category="politics">
                        <div class="card-image">
                            <span class="card-badge badge">Politics</span>
                            <img src="https://images.unsplash.com/photo-1495573258723-2c7be7a646ce?w=600&h=400&fit=crop" alt="Demonstration">
                        </div>
                        <div class="card-content">
                            <h3>Demonstration we already have the best deal winner sponsor</h3>
                            <div class="card-meta">
                                <span>By David Hall</span>
                                <span>•</span>
                                <span>December 08, 2020</span>
                            </div>
                        </div>
                    </div>

                    <div class="card" data-category="sport">
                        <div class="card-image">
                            <span class="card-badge badge">Sport</span>
                            <img src="https://images.unsplash.com/photo-1518091043644-c1d4457512c6?w=600&h=400&fit=crop" alt="Formula One">
                        </div>
                        <div class="card-content">
                            <h3>Formula one have best deal winner sponsor</h3>
                            <div class="card-meta">
                                <span>By David Hall</span>
                                <span>•</span>
                                <span>December 10, 2020</span>
                            </div>
                        </div>
                    </div>

                    <div class="card" data-category="politics">
                        <div class="card-image">
                            <span class="card-badge badge">Politics</span>
                            <img src="https://images.unsplash.com/photo-1555848962-6e79363bfa19?w=600&h=400&fit=crop" alt="Flag">
                        </div>
                        <div class="card-content">
                            <h3>Not many flag have a spirit freedom placerat</h3>
                            <div class="card-meta">
                                <span>By David Hall</span>
                                <span>•</span>
                                <span>December 08, 2020</span>
                            </div>
                        </div>
                    </div>

                    <div class="card" data-category="politics">
                        <div class="card-image">
                            <span class="card-badge badge">Politics</span>
                            <img src="https://images.unsplash.com/photo-1540910419892-4a36d2c3266c?w=600&h=400&fit=crop" alt="Senator">
                        </div>
                        <div class="card-content">
                            <h3>Republican Senator visit to Health in Indonesia</h3>
                            <div class="card-meta">
                                <span>By David Hall</span>
                                <span>•</span>
                                <span>December 09, 2020</span>
                            </div>
                        </div>
                    </div>

                    <div class="card" data-category="business">
                        <div class="card-image">
                            <span class="card-badge badge">Business</span>
                            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=600&h=400&fit=crop" alt="Building">
                        </div>
                        <div class="card-content">
                            <h3>A classic and sturdy building with history</h3>
                            <div class="card-meta">
                                <span>By David Hall</span>
                                <span>•</span>
                                <span>December 09, 2020</span>
                            </div>
                        </div>
                    </div>

                    <div class="card" data-category="health">
                        <div class="card-image">
                            <span class="card-badge badge">Health</span>
                            <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=600&h=400&fit=crop" alt="Health">
                        </div>
                        <div class="card-content">
                            <h3>Medical advances in treating chronic diseases</h3>
                            <div class="card-meta">
                                <span>By David Hall</span>
                                <span>•</span>
                                <span>December 11, 2020</span>
                            </div>
                        </div>
                    </div>

                    <div class="card" data-category="technology">
                        <div class="card-image">
                            <span class="card-badge badge">Technology</span>
                            <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?w=600&h=400&fit=crop" alt="Technology">
                        </div>
                        <div class="card-content">
                            <h3>The future of artificial intelligence and machine learning</h3>
                            <div class="card-meta">
                                <span>By David Hall</span>
                                <span>•</span>
                                <span>December 12, 2020</span>
                            </div>
                        </div>
                    </div>

                    <div class="card" data-category="travel">
                        <div class="card-image">
                            <span class="card-badge badge">Travel</span>
                            <img src="https://images.unsplash.com/photo-1488646953014-85cb44e25828?w=600&h=400&fit=crop" alt="Travel">
                        </div>
                        <div class="card-content">
                            <h3>Exploring hidden gems in Southeast Asia</h3>
                            <div class="card-meta">
                                <span>By David Hall</span>
                                <span>•</span>
                                <span>December 13, 2020</span>
                            </div>
                        </div>
                    </div>

                    <div class="card" data-category="lifestyle">
                        <div class="card-image">
                            <span class="card-badge badge">Lifestyle</span>
                            <img src="https://images.unsplash.com/photo-1493663284031-b7e3aefcae8e?w=600&h=400&fit=crop" alt="Lifestyle">
                        </div>
                        <div class="card-content">
                            <h3>Mindfulness and meditation for a better life</h3>
                            <div class="card-meta">
                                <span>By David Hall</span>
                                <span>•</span>
                                <span>December 14, 2020</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="sidebar-list">
                    <h3 class="section-title" style="font-size: 28px;">Popular Post</h3>
                    <div class="list-item">
                        <div class="list-number">1</div>
                        <div class="list-content">
                            <span class="badge">Health</span>
                            <h4>Cogam Comba, Kekhasan Rob Room Nurish It Vs B Station 4 Turnament</h4>
                            <div class="card-meta">
                                <span>By David Hall</span>
                                <span>•</span>
                                <span>Dec 09, 2020</span>
                            </div>
                        </div>
                    </div>
                    <div class="list-item">
                        <div class="list-number">2</div>
                        <div class="list-content">
                            <span class="badge">Health</span>
                            <h4>The West Got A Need Start On Renewable Generations. Why Don't It Take It?</h4>
                            <div class="card-meta">
                                <span>By David Hall</span>
                                <span>•</span>
                                <span>Dec 09, 2020</span>
                            </div>
                        </div>
                    </div>
                    <div class="list-item">
                        <div class="list-number">3</div>
                        <div class="list-content">
                            <span class="badge">Health</span>
                            <h4>America's Social-Distancing Divides Have Made The Job Easier</h4>
                            <div class="card-meta">
                                <span>By David Hall</span>
                                <span>•</span>
                                <span>Dec 09, 2020</span>
                            </div>
                        </div>
                    </div>
                    <div class="list-item">
                        <div class="list-number">4</div>
                        <div class="list-content">
                            <span class="badge">Health</span>
                            <h4>Cogam Soap Orders Only A Deadly Pandemic All, At What Cost?</h4>
                            <div class="card-meta">
                                <span>By David Hall</span>
                                <span>•</span>
                                <span>Dec 09, 2020</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tags-widget">
                    <h3 class="section-title" style="font-size: 28px;">Tags</h3>
                    <div class="tags">
                        <span class="tag">#BUSINESS</span>
                        <span class="tag">#STYLE</span>
                        <span class="tag">#TECHNOLOGY</span>
                        <span class="tag">#HEALTH</span>
                        <span class="tag">#TRAVELING</span>
                        <span class="tag">#FOOTBALL</span>
                        <span class="tag">#SPORT</span>
                        <span class="tag">#FOOD</span>
                        <span class="tag">#DRINK</span>
                        <span class="tag">#CULTURE</span>
                        <span class="tag">#DESIGN</span>
                        <span class="tag">#MUSIC</span>
                        <span class="tag">#RELATIONSHIP</span>
                    </div>
                </div>

                <div class="newsletter">
                    <h3>Newsletter</h3>
                    <p>The most important world news and events of the day.</p>
                    <form class="newsletter-form">
                        <input type="email" placeholder="Your email address" required>
                        <button type="submit">SIGN UP</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="section-header">
            <h2 class="section-title">Sports</h2>
        </div>

        <div class="cards-grid">
            <div class="card" data-category="sport">
                <div class="card-image">
                    <span class="card-badge badge">Sport</span>
                    <img src="https://images.unsplash.com/photo-1483721310020-03333e577078?w=600&h=400&fit=crop" alt="Football">
                </div>
                <div class="card-content">
                    <h3>Maecenas accumsan tortor ut velit pharetra mollis</h3>
                    <div class="card-meta">
                        <span>By David Hall</span>
                        <span>•</span>
                        <span>December 09, 2020</span>
                    </div>
                </div>
            </div>

            <div class="card" data-category="sport">
                <div class="card-image">
                    <span class="card-badge badge">Sport</span>
                    <img src="https://images.unsplash.com/photo-1530549387789-4c1017266635?w=600&h=400&fit=crop" alt="Swimming">
                </div>
                <div class="card-content">
                    <h3>Aliquet sedang melakukan balapan renang tingkat dunia</h3>
                    <div class="card-meta">
                        <span>By David Hall</span>
                        <span>•</span>
                        <span>December 09, 2020</span>
                    </div>
                </div>
            </div>

            <div class="card" data-category="sport">
                <div class="card-image">
                    <span class="card-badge badge">Sport</span>
                    <img src="https://images.unsplash.com/photo-1504450758481-7338eba7524a?w=600&h=400&fit=crop" alt="Training">
                </div>
                <div class="card-content">
                    <h3>Latihan sebelum bisa menjadi salah satu olahraga favorit</h3>
                    <div class="card-meta">
                        <span>By David Hall</span>
                        <span>•</span>
                        <span>December 09, 2020</span>
                    </div>
                </div>
            </div>

            <div class="card" data-category="sport">
                <div class="card-image">
                    <span class="card-badge badge">Sport</span>
                    <img src="https://images.unsplash.com/photo-1431324155629-1a6deb1dec8d?w=600&h=400&fit=crop" alt="Team Sport">
                </div>
                <div class="card-content">
                    <h3>Para atlet sedang melakukan seiri foto untuk sebuah majalah</h3>
                    <div class="card-meta">
                        <span>By David Hall</span>
                        <span>•</span>
                        <span>December 09, 2020</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>
    
        <script>
document.addEventListener('DOMContentLoaded',function(){
    const categoryItems=document.querySelectorAll('.top-news-item');
    const allCards=document.querySelectorAll('.card');
    const filterCounter=document.getElementById('filterCounter');
    function updateCounter(category,count){
        if(!filterCounter)return;
        if(category==='all'){filterCounter.textContent='All Posts';}
        else{
            const name=category.charAt(0).toUpperCase()+category.slice(1);
            filterCounter.textContent=${count} ${name} Post${count!==1?'s':''};
        }
    }
    function filterCards(selectedCategory){
        let visibleCount=0;
        allCards.forEach(card=>{
            const cardCategory=card.getAttribute('data-category');
            if(selectedCategory==='all'||cardCategory===selectedCategory){
                card.classList.remove('hidden');
                visibleCount++;
            }else{card.classList.add('hidden');}
        });
        updateCounter(selectedCategory,visibleCount);
    }
    categoryItems.forEach(item=>{
        item.addEventListener('click',function(){
            categoryItems.forEach(i=>i.classList.remove('active'));
            this.classList.add('active');
            const category=this.getAttribute('data-category');
            filterCards(category);
        });
    });
    filterCards('all');
});
</script>
</section>
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