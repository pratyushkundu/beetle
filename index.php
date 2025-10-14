<!DOCTYPE html>
<html lang="en">
<?php include './partials/head.php' ?>
  
  <body>
    <!-- Cursor start -->
    <?php include './partials/Cursor_start.php' ?>
    <!-- Cursor end -->

    <!-- back to top start -->
    <?php include './partials/back_to_start.php' ?>
    <!-- back to top end -->

    <!-- sidebar-information-area-start -->
    <?php include './partials/sidebar_information.php' ?>
    <!-- sidebar-information-area-end -->


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
                                        <p>New members: get your first 7 days of turitor Premium for free! Unlock discount now!</p>
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
                                    <div class="header-logo">
                                        <!-- Use a text-based logo for clarity and SEO; keep image available for visual branding if needed -->
                                        <a href="index.php" id="site-logo-text" style="text-decoration:none; display:inline-flex; align-items:center; gap:8px;">
                                            <p style="font-weight:800; color:var(--accent); font-size:18px;">Beetle & Ant Co.</p>
                                            <!-- <img src="assets/images/logo/logo.png" alt="Beetle & Ant Co." style="height:26px; opacity:0.9; filter:grayscale(100%);"> -->
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-7 col-lg-7 text-center d-none d-lg-block">
                                    <div class="header-menu ">
                                        <nav class="header-nav-menu" id="mobile-menu">
                                            <ul>
                                                <li class="menu-has-child">
                                                    <a href="index.php">Home</a>
                                                    <ul class="submenu">
                                                        <li><a href="index.php">Beetle &amp; Ant Co.</a></li>
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
                                                        <li><a href="portfolio.php">Portfolio</a></li>
                                                        <li><a href="price.php">Pricing</a></li>
                                                        <li><a href="faq.php">FAQ's</a></li>
                                                        <li><a href="testimonial.php">Testimonials</a></li>
                                                        <!-- <li><a href="wishlist.php">Wishlist</a></li>
                                                        <li><a href="cart.php">Cart</a></li>
                                                        <li><a href="checkout.php">Checkout</a></li>
                                                        <li><a href="login.php">Login</a></li> -->
                                                        <li><a href="404.php">404</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-has-child" id="pages-mega-menu-services">
    <a href="#">Services</a>
    <div class="mega-menu-wrapper">
        <div class="mega-menu-container">
            <!-- Left Sidebar: Service Categories -->
            <div class="mega-menu-sidebar">
                <div class="sidebar-item active">
                    <div class="sidebar-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"/>
                            <line x1="12" y1="22.08" x2="12" y2="12"/>
                        </svg>
                    </div>
                    <span>AI & ML</span>
                </div>

                <div class="sidebar-item">
                    <div class="sidebar-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M18 10h-1.26A8 8 0 1 0 9 20h9a5 5 0 0 0 0-10z"/>
                        </svg>
                    </div>
                    <span>Cloud & DevSecOps</span>
                </div>

                <div class="sidebar-item">
                    <div class="sidebar-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="2" y="7" width="20" height="14" rx="2" ry="2"/>
                            <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>
                        </svg>
                    </div>
                    <span>IoT & Custom Software</span>
                </div>

                <div class="sidebar-item">
                    <div class="sidebar-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="5" y="2" width="14" height="20" rx="2" ry="2"/>
                            <line x1="12" y1="18" x2="12.01" y2="18"/>
                        </svg>
                    </div>
                    <span>Mobile App</span>
                </div>

                <div class="sidebar-item">
                    <div class="sidebar-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="2" y="3" width="20" height="14" rx="2" ry="2"/>
                            <line x1="8" y1="21" x2="16" y2="21"/>
                            <line x1="12" y1="17" x2="12" y2="21"/>
                        </svg>
                    </div>
                    <span>Web & Backend</span>
                </div>

                <div class="sidebar-item">
                    <div class="sidebar-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 20h9"/>
                            <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/>
                        </svg>
                    </div>
                    <span>Design & Consulting</span>
                </div>

                <div class="sidebar-item">
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

            <!-- Middle Section: Solutions Grid -->
            <div class="mega-menu-solutions">
                <h3 class="solutions-title">Solutions</h3>
                
                <div class="solutions-grid">
                    <!-- Column 1 -->
                    <div class="solutions-column">
                        <div class="solution-item">
                            <h4>Artificial Intelligence</h4>
                            <p>Innovating businesses with digital technologies</p>
                        </div>

                        <div class="solution-item">
                            <h4>Agentic AI</h4>
                            <p>Elevate your experience with AI services</p>
                        </div>

                        <div class="solution-item">
                            <h4>Natural Language Processing</h4>
                            <p>Advanced NLP solutions for enterprises</p>
                        </div>

                        <div class="solution-item">
                            <h4>Custom LLM Development</h4>
                            <p>Precision LLM development for enterprises</p>
                        </div>

                        <div class="solution-item">
                            <h4>Data Analytics</h4>
                            <p>Transforming raw data into insights</p>
                        </div>

                        <div class="solution-item">
                            <h4>Microsoft Fabric Consulting</h4>
                            <p>Data strategy, implementation, and ongoing support to maximize your data's value</p>
                        </div>
                    </div>

                    <!-- Column 2 -->
                    <div class="solutions-column">
                        <div class="solution-item">
                            <h4>GEN AI</h4>
                            <p>Unleashing a New Era of Innovation</p>
                        </div>

                        <div class="solution-item">
                            <h4>ML Application Development</h4>
                            <p>Automating processes for increased efficiency</p>
                        </div>

                        <div class="solution-item">
                            <h4>Retrieval Augmented Generation</h4>
                            <p>Enhancing LLMs with external knowledge</p>
                        </div>

                        <div class="solution-item">
                            <h4>ChatBot Development</h4>
                            <p>Handling multiple queries simultaneously</p>
                        </div>

                        <div class="solution-item">
                            <h4>Business Intelligence</h4>
                            <p>Visualizing trends for better forecasting</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Section: Engagement Models -->
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
                                                <li class="menu-has-child" id="pages-mega-menu">
    <a href="#">Industries</a>
    <div class="mega-menu-wrapper">
        <div class="mega-menu-container">
            <!-- Left Section: Menu Items in 3 Columns -->
            <div class="mega-menu-grid">
                <!-- Column 1 -->
                <div class="mega-menu-column">
                    <div class="menu-item-card">
                        <div class="menu-icon pink-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                            </svg>
                        </div>
                        <div class="menu-item-content">
                            <h4><a href="service.php">Services</a></h4>
                            <p>Uses digital twins & IoMT for personalized treatment & improved patient care</p>
                        </div>
                    </div>

                    <div class="menu-item-card">
                        <div class="menu-icon pink-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"/>
                                <line x1="7" y1="7" x2="7.01" y2="7"/>
                            </svg>
                        </div>
                        <div class="menu-item-content">
                            <h4><a href="team.php">Team</a></h4>
                            <p>Crafting healthier lives together with smart tech solutions just for you</p>
                        </div>
                    </div>

                    <div class="menu-item-card">
                        <div class="menu-icon pink-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="9" cy="21" r="1"/>
                                <circle cx="20" cy="21" r="1"/>
                                <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/>
                            </svg>
                        </div>
                        <div class="menu-item-content">
                            <h4><a href="portfolio.php">Portfolio</a></h4>
                            <p>Build your digital shopfront to drive sales & build visibility online</p>
                        </div>
                    </div>

                    <div class="menu-item-card">
                        <div class="menu-icon pink-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>
                            </svg>
                        </div>
                        <div class="menu-item-content">
                            <h4><a href="price.php">Pricing</a></h4>
                            <p>We are building tomorrow's infrastructure today with smart construction</p>
                        </div>
                    </div>

                    <div class="menu-item-card">
                        <div class="menu-icon pink-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/>
                            </svg>
                        </div>
                        <div class="menu-item-content">
                            <h4><a href="faq.php">FAQ's</a></h4>
                            <p>Leverage AI to visualize real-time mission data for faster, critical decision-making</p>
                        </div>
                    </div>
                </div>

                <!-- Column 2 -->
                <div class="mega-menu-column">
                    <div class="menu-item-card">
                        <div class="menu-icon pink-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                                <circle cx="9" cy="7" r="4"/>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                            </svg>
                        </div>
                        <div class="menu-item-content">
                            <h4><a href="testimonial.php">Testimonials</a></h4>
                            <p>Get real-time fraud alerts & transform your insurance operations with AI</p>
                        </div>
                    </div>

                    <div class="menu-item-card">
                        <div class="menu-icon pink-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/>
                                <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/>
                            </svg>
                        </div>
                        <div class="menu-item-content">
                            <h4><a href="wishlist.php">Wishlist</a></h4>
                            <p>Access anytime anywhere with cloud-based learning environments for all ages</p>
                        </div>
                    </div>

                    <div class="menu-item-card">
                        <div class="menu-icon pink-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                                <polyline points="9 22 9 12 15 12 15 22"/>
                            </svg>
                        </div>
                        <div class="menu-item-content">
                            <h4><a href="cart.php">Cart</a></h4>
                            <p>Book tours and activities instantly with mobile-friendly booking platforms</p>
                        </div>
                    </div>

                    <div class="menu-item-card">
                        <div class="menu-icon pink-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M18 8h1a4 4 0 0 1 0 8h-1"/>
                                <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"/>
                                <line x1="6" y1="1" x2="6" y2="4"/>
                                <line x1="10" y1="1" x2="10" y2="4"/>
                                <line x1="14" y1="1" x2="14" y2="4"/>
                            </svg>
                        </div>
                        <div class="menu-item-content">
                            <h4><a href="checkout.php">Checkout</a></h4>
                            <p>Innovate your apps, delight your guests with deliciously designed menus</p>
                        </div>
                    </div>

                    <div class="menu-item-card">
                        <div class="menu-icon pink-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="1" y="4" width="22" height="16" rx="2" ry="2"/>
                                <line x1="1" y1="10" x2="23" y2="10"/>
                            </svg>
                        </div>
                        <div class="menu-item-content">
                            <h4><a href="login.php">Login</a></h4>
                            <p>Design an app that predicts machine downtime to maximize production efficiency</p>
                        </div>
                    </div>
                </div>

                <!-- Column 3 -->
                <div class="mega-menu-column">
                    <div class="menu-item-card featured-card">
                    <div class="best-seller-ribbon">Best Seller</div>
                        <div class="menu-icon gradient-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="10"/>
                                <polygon points="10 8 16 12 10 16 10 8"/>
                            </svg>
                        </div>
                        <div class="menu-item-content">
                            <h4>
                                <a href="#">Sports</a>
                                
                            </h4>
                            <p>Effortless IoT integration for sports data in sports app development with us</p>
                        </div>
                    </div>

                    <div class="menu-item-card">
                        <div class="menu-icon pink-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                            </svg>
                        </div>
                        <div class="menu-item-content">
                            <h4><a href="#">Fintech</a></h4>
                            <p>Integrate big data & IoT for smarter decisions with smart banking solutions</p>
                        </div>
                    </div>

                    <div class="menu-item-card">
                        <div class="menu-icon pink-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                            </svg>
                        </div>
                        <div class="menu-item-content">
                            <h4><a href="#">Real Estate</a></h4>
                            <p>Monetize your real estate app with In-App purchases and seamless integration</p>
                        </div>
                    </div>

                    <div class="menu-item-card">
                        <div class="menu-icon pink-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="2" y="7" width="20" height="14" rx="2" ry="2"/>
                                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>
                            </svg>
                        </div>
                        <div class="menu-item-content">
                            <h4><a href="#">Social Media</a></h4>
                            <p>Drive downloads and boost your reach with a custom app development</p>
                        </div>
                    </div>

                    <div class="menu-item-card">
                        <div class="menu-icon pink-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
                            </svg>
                        </div>
                        <div class="menu-item-content">
                            <h4><a href="404.php">404</a></h4>
                            <p>Deliver secure, seamless banking experiences to build trust and drive growth</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Section: Featured Banner -->
            <div class="mega-menu-featured">
            <div class="featured-mockup">
    <blockquote class="instagram-media" 
        data-instgrm-captioned 
        data-instgrm-permalink="https://www.instagram.com/reel/DO2b08okwj4/?utm_source=ig_embed&amp;utm_campaign=loading" 
        data-instgrm-version="14" 
        style="background:#FFF; border:0; border-radius:3px; 
               box-shadow:0 0 1px 0 rgba(0,0,0,0.5),
               0 1px 10px 0 rgba(0,0,0,0.15); 
               margin: 1px auto; 
               max-width:540px; min-width:326px; 
               padding:0; width:100%;">
    </blockquote>
    <script async src="//www.instagram.com/embed.js"></script>
    <style>
        .featured-mockup {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 20px;
  max-width: 500px; /* optional: control width */
  margin: 0 auto;
}

.instagram-embed-wrapper {
  width: 100%;
  max-width: 400px; /* limit size */
  border-radius: 16px;
  overflow: hidden;
  background: #fff;
  box-shadow: 0 6px 16px rgba(0,0,0,0.15);
}

.instagram-media {
  margin: 0 !important;
  width: 100% !important;
  min-width: unset !important; /* override Instagram inline styles */
  max-width: 100% !important;
  pointer-events: auto !important; /* make sure mouse works */
}

    </style>
</div>

                <div class="featured-content">
                    <h3>Shaping the future with cutting-edge digital experiences, innovative products, and transformative ventures.</h3>
                    <button class="btn-watch-video">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                            <polygon points="5 3 19 12 5 21 5 3"/>
                        </svg>
                        Watch Video
                    </button>
                </div>
            </div>
        </div>
    </div>
</li>

<style>
/* Mega Menu Styles - Targeted with ID */
.menu-item-card {
    position: relative;
    overflow: hidden;
}
#pages-mega-menu {
    position: relative;

}

.best-seller-ribbon {
    position: absolute;
    top: 10px;
    right: -40px;
    background: #ff4757;
    color: #fff;
    padding: 5px 50px;
    transform: rotate(45deg);
    font-size: 12px;
    font-weight: bold;
    box-shadow: 0 2px 5px rgba(0,0,0,0.2);
}
#pages-mega-menu .mega-menu-wrapper {
    position: absolute;
    left: -550px;
    top: 100%;
    width: 1320px;
    max-width: 95vw;
    background: #ffffff;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.08);
    border-radius: 0;
    padding: 0;
    opacity: 0;
    visibility: hidden;
    transform: translateY(10px);
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    z-index: 1000;
    margin-top: 0;
    border-top: 3px solid transparent;
    border-image: linear-gradient(90deg, #e91e63 0%, #2196f3 100%) 1;
}

#pages-mega-menu:hover .mega-menu-wrapper {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

#pages-mega-menu .mega-menu-container {
    display: grid;
    grid-template-columns: 1fr 400px;
    gap: 0;
    min-height: 500px;
}

#pages-mega-menu .mega-menu-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 0;
    padding: 40px 30px;
    background: #ffffff;
}

#pages-mega-menu .mega-menu-column {
    display: flex;
    flex-direction: column;
    gap: 8px;
    padding: 0 15px;
}

#pages-mega-menu .menu-item-card {
    display: flex;
    gap: 12px;
    padding: 12px 15px;
    border-radius: 10px;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    cursor: pointer;
    background: transparent;
    position: relative;
    overflow: hidden;
}

#pages-mega-menu .menu-item-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(233, 30, 99, 0.03) 0%, rgba(33, 150, 243, 0.03) 100%);
    opacity: 0;
    transition: opacity 0.4s ease;
    border-radius: 10px;
    pointer-events: none;
}

#pages-mega-menu .menu-item-card:hover {
    background: linear-gradient(135deg, rgba(233, 30, 99, 0.08) 0%, rgba(33, 150, 243, 0.08) 100%);
    transform: translateX(3px) translateY(-2px);
    box-shadow: 0 8px 20px rgba(233, 30, 99, 0.12);
}

#pages-mega-menu .menu-item-card:hover::before {
    opacity: 1;
}

#pages-mega-menu .menu-icon {
    width: 40px;
    height: 40px;
    min-width: 40px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    backdrop-filter: blur(10px);
}

#pages-mega-menu .menu-icon::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(255, 255, 255, 0.3) 0%, rgba(255, 255, 255, 0.1) 100%);
    border-radius: 10px;
    opacity: 0;
    transition: opacity 0.3s ease;
}

#pages-mega-menu .menu-item-card:hover .menu-icon::before {
    opacity: 1;
}

#pages-mega-menu .pink-icon {
    background: linear-gradient(135deg, #fce4ec 0%, #f8bbd0 100%);
    color: #e91e63;
    box-shadow: 0 2px 8px rgba(233, 30, 99, 0.15);
}

#pages-mega-menu .gradient-icon {
    background: linear-gradient(135deg, #e91e63 0%, #2196f3 100%);
    color: #ffffff;
    box-shadow: 0 4px 12px rgba(233, 30, 99, 0.3);
}

#pages-mega-menu .menu-item-card:hover .menu-icon {
    transform: scale(1.1) translateY(-2px);
    box-shadow: 0 6px 16px rgba(233, 30, 99, 0.25);
}

#pages-mega-menu .menu-item-content {
    flex: 1;
}

#pages-mega-menu .menu-item-content h4 {
    margin: 0 0 4px 0;
    font-size: 14px;
    font-weight: 600;
    color: #1a1a1a;
    line-height: 1.3;
}

#pages-mega-menu .menu-item-content h4 a {
    color: #1a1a1a;
    text-decoration: none;
    transition: color 0.3s ease;
}

#pages-mega-menu .menu-item-card:hover .menu-item-content h4 a,
#pages-mega-menu .featured-card .menu-item-content h4 a {
    color: #e91e63;
}

#pages-mega-menu .menu-item-content p {
    margin: 0;
    font-size: 12px;
    color: #666666;
    line-height: 1.5;
}

/* Featured Section */
#pages-mega-menu .mega-menu-featured {
    background: #f8f9fa;
    padding: 40px 35px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    position: relative;
    overflow: hidden;
}

#pages-mega-menu .featured-mockup {
    flex: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 25px;
}

#pages-mega-menu .featured-mockup img {
    width: 100%;
    max-width: 350px;
    height: auto;
    object-fit: contain;
    filter: drop-shadow(0 10px 30px rgba(0, 0, 0, 0.1));
}

#pages-mega-menu .featured-content {
    margin-top: auto;
}

#pages-mega-menu .featured-content h3 {
    font-size: 15px;
    font-weight: 500;
    margin: 0 0 20px 0;
    line-height: 1.6;
    color: #2c3e50;
}

#pages-mega-menu .btn-watch-video {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: #1a1a1a;
    color: white;
    padding: 12px 24px;
    border-radius: 8px;
    text-decoration: none;
    font-size: 13px;
    font-weight: 500;
    transition: all 0.3s ease;
    border: none;
    cursor: pointer;
}

#pages-mega-menu .btn-watch-video:hover {
    background: #333333;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

/* Hide default submenu */
#pages-mega-menu > .submenu {
    display: none !important;
}

/* Responsive Design */
@media (max-width: 1400px) {
    #pages-mega-menu .mega-menu-wrapper {
        width: 1200px;
        left: -150px;
    }
    
    #pages-mega-menu .mega-menu-container {
        grid-template-columns: 1fr 350px;
    }
}

@media (max-width: 1200px) {
    #pages-mega-menu .mega-menu-wrapper {
        width: 1000px;
        left: -100px;
    }
    
    #pages-mega-menu .mega-menu-container {
        grid-template-columns: 1fr 320px;
    }
    
    #pages-mega-menu .mega-menu-grid {
        padding: 30px 20px;
    }
}

@media (max-width: 992px) {
    #pages-mega-menu .mega-menu-wrapper {
        width: 800px;
        left: -50px;
    }
    
    #pages-mega-menu .mega-menu-container {
        grid-template-columns: 1fr;
    }
    
    #pages-mega-menu .mega-menu-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    #pages-mega-menu .mega-menu-featured {
        flex-direction: row;
        align-items: center;
        gap: 30px;
        padding: 30px;
    }
    
    #pages-mega-menu .featured-mockup {
        flex: 0 0 250px;
        margin-bottom: 0;
    }
}

@media (max-width: 768px) {
    #pages-mega-menu .mega-menu-wrapper {
        width: 600px;
        left: 0;
    }
    
    #pages-mega-menu .mega-menu-grid {
        grid-template-columns: 1fr;
        padding: 25px 20px;
    }
    
    #pages-mega-menu .mega-menu-column {
        padding: 0 10px;
    }
    
    #pages-mega-menu .mega-menu-featured {
        flex-direction: column;
    }
    
    #pages-mega-menu .featured-mockup {
        flex: 1;
        margin-bottom: 20px;
    }
}
</style>
                                                <li class="menu-has-child">
                                                    <a href="shop.php">Shop</a>
                                                    <ul class="submenu">
                                                        <li><a href="shop.php">Shop</a></li>
                                                        <li><a href="shop-details.php">Shop Details</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-has-child">
                                                    <a href="portfolio-blog.php">Blog</a>
                                                    <ul class="submenu">
                                                        <li><a href="portfolio-blog.php">Blog</a></li>
                                                        <li><a href="blog-details.php">Blog Details</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="contact.php">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-6">
                                    <div class="header-action-wrap d-flex align-items-center justify-content-end">
                                        <div class="header-action d-none d-sm-flex">
                                            <a href="#" class="header-action-login">
                                                <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7.01172 8C8.94472 8 10.5117 6.433 10.5117 4.5C10.5117 2.567 8.94472 1 7.01172 1C5.07872 1 3.51172 2.567 3.51172 4.5C3.51172 6.433 5.07872 8 7.01172 8Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M13.026 15C13.026 12.291 10.331 10.1 7.013 10.1C3.695 10.1 1 12.291 1 15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                Login                                           
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
                    <!-- banner area start -->
                    <section class="banner-area">
                        <div class="container custom-container-1">
                            <div class="banner-single">
                                <div class="banner-content">
                                    <span class="banner-content-subtitle tp_fade_left">Beetle & Ant Co.</span>
                                    <h1 class="banner-content-title tp_has_text_reveal_anim">We design, build and operate software that scales.</h1>
                                    <p class="tp_desc_anim">Project-based software development, cloud migrations, and AI-enabled solutions — delivered end-to-end with engineering rigor and commercial clarity.</p>
                                    <div class="banner-content-btn">
                                        <a href="contact.php" class="theme-btn tp_fade_bottom">Start a Project</a>
                                        <a href="portfolio.php" class="theme-btn tp_fade_bottom" style="margin-left:12px; background:transparent; border:1px solid rgba(15,23,42,0.06); color: #0f172a;">See Case Studies</a>
                                    </div>
                                </div>
                                <div class="banner-img tp_fade_left">
                                    <img src="assets/images/banner/home1/bg.png" alt="Image Not Found">
                                </div>
                            </div>
                        </div>
                        <div class="banner-shape d-none d-lg-block">
                            <img src="assets/images/banner/home1/shape-1.png" alt="Image Not Found" class="banner-shape-1" data-speed="0.7">
                            <img src="assets/images/banner/home1/shape-2.png" alt="Image Not Found" class="banner-shape-2" data-speed="0.8">
                            <img src="assets/images/banner/home1/shape-3.png" alt="Image Not Found" class="banner-shape-3" data-speed="0.8">
                            <img src="assets/images/banner/home1/shape-4.png" alt="Image Not Found" class="banner-shape-4" data-speed="0.7">
                            <img src="assets/images/banner/home1/shape-5.png" alt="Image Not Found" class="banner-shape-5">
                        </div>
                    </section>
                    <!-- banner area end -->

                    <!-- choose area start -->
                    <section class="choose-area pt-140">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="section-area text-center mb-50">
                                        <span class="section-subtitle tp_fade_left">Why Choose Us</span>
                                        <h2 class="section-title tp_title_slideup mb-0">Why Beetle & Ant Co.?</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-3 col-lg-4 col-md-6 tp_fade_left" data-fade-from="left">
                                    <div class="choose-item mb-30">
                                        <span class="choose-item-count">01</span>
                                        <div class="choose-item-img">
                                            <img src="assets/images/choose/1.png" alt="Image Not Found">
                                        </div>
                                        <div class="choose-item-content">
                                            <h5 class="choose-item-content-title"><a href="#">Trusted Project Delivery</a></h5>
                                            <p>We deliver production-ready software on schedule with clear milestones, QA, and observability baked in.</p>
                                            <a href="service.php" class="choose-item-content-btn">Learn More<i class="fa-light fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 tp_fade_left" data-fade-from="left" data-delay=".8">
                                    <div class="choose-item mb-30">
                                        <span class="choose-item-count">02</span>
                                        <div class="choose-item-img">
                                            <img src="assets/images/choose/2.png" alt="Image Not Found">
                                        </div>
                                        <div class="choose-item-content">
                                            <h5 class="choose-item-content-title"><a href="#">Modern Engineering</a></h5>
                                            <p>We use modern frameworks, automated CI/CD, and best-practice architectures to keep your product maintainable and secure.</p>
                                            <a href="service.php" class="choose-item-content-btn">Learn More<i class="fa-light fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 tp_fade_left" data-fade-from="left" data-delay="1.1">
                                    <div class="choose-item mb-30">
                                        <span class="choose-item-count">03</span>
                                        <div class="choose-item-img">
                                            <img src="assets/images/choose/3.png" alt="Image Not Found">
                                        </div>
                                        <div class="choose-item-content">
                                            <h5 class="choose-item-content-title"><a href="#">Data & AI</a></h5>
                                            <p>From data pipelines to ML models, we help teams unlock insights and automation from their data.</p>
                                            <a href="service.php" class="choose-item-content-btn">Learn More<i class="fa-light fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 tp_fade_left" data-fade-from="left" data-delay="1.3">
                                    <div class="choose-item mb-30">
                                        <span class="choose-item-count">04</span>
                                        <div class="choose-item-img">
                                            <img src="assets/images/choose/4.png" alt="Image Not Found">
                                        </div>
                                        <div class="choose-item-content">
                                            <h5 class="choose-item-content-title"><a href="#">Operational Support</a></h5>
                                            <p>We offer post-delivery support, SRE practices, and managed operations so your product stays healthy in production.</p>
                                            <a href="service.php" class="choose-item-content-btn">Learn More<i class="fa-light fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- choose area end -->

                    <!-- feature area start -->
                    <section class="feature-area pt-110 pb-110">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="section-area text-center mb-50">
                                        <span class="section-subtitle tp_fade_left">Capabilities</span>
                                        <h2 class="section-title tp_title_slideup mb-0">What We Deliver — Engineering, Product & Data</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="feature-top mb-50 tp_fade_bottom">
                                <div class="feature-item feature-item-1">
                                    <h5 class="feature-item-title">Product Engineering</h5>
                                    <p>End-to-end product delivery: design, engineering, QA, and observability for reliable software.</p>
                                </div>
                                <div class="feature-item feature-item-2">
                                    <h5 class="feature-item-title">Platform & Cloud</h5>
                                    <p>Cloud migrations, containerization, and scalable infra with a security-first approach.</p>
                                </div>
                                <div class="feature-item feature-item-3">
                                    <h5 class="feature-item-title">Data & AI</h5>
                                    <p>Production data pipelines, ML model deployment, and ML ops to unlock business insights.</p>
                                </div>
                            </div>
                            <div class="row align-items-end">
                                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                                    <div class="feature-left-img mb-30 tp_fade_right">
                                        <img src="assets/images/feature/bg.png" alt="Image Not Found">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                    <div class="feature-right-img mb-30">
                                        <img src="assets/images/feature/bg-1.png" alt="Image Not Found" class="f-main-img tp_fade_left">
                                        <img src="assets/images/feature/shape-1.png" alt="Image Not Found" class="feature-shape-1" data-speed="0.7">
                                        <img src="assets/images/feature/shape-2.png" alt="Image Not Found" class="feature-shape-2" data-speed="0.8">
                                        <img src="assets/images/feature/shape-3.png" alt="Image Not Found" class="feature-shape-3" data-speed="0.7">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- feature area end -->

                    <!-- roadmap area start -->
                    <section class="roadmap-area pt-100 pb-100">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="section-area text-center mb-40">
                                        <span class="section-subtitle">Delivery Roadmap</span>
                                        <h2 class="section-title">How we'll deliver your project — 6 steps</h2>
                                        <p class="section-desc">A clear, visual timeline we follow to ship reliable software. Each milestone shows what we deliver and when.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="roadmap-timeline" style="max-width:1100px;margin:0 auto;position:relative;">
                                <div class="timeline-line" aria-hidden="true"></div>

                                <div class="timeline-item left">
                                    <div class="timeline-node">01</div>
                                    <div class="timeline-content">
                                        <h4>Discovery & Alignment</h4>
                                        <p>Workshops to define goals, success metrics, and scope. Deliverable: project brief & prioritized backlog.</p>
                                    </div>
                                </div>

                                <div class="timeline-item right">
                                    <div class="timeline-node">02</div>
                                    <div class="timeline-content">
                                        <h4>Design & Prototyping</h4>
                                        <p>User flows and validated prototypes. Deliverable: clickable prototype and design tokens.</p>
                                    </div>
                                </div>

                                <div class="timeline-item left">
                                    <div class="timeline-node">03</div>
                                    <div class="timeline-content">
                                        <h4>Architecture & Planning</h4>
                                        <p>Technical architecture, infra plan, and sprint roadmap. Deliverable: diagrams and delivery plan.</p>
                                    </div>
                                </div>

                                <div class="timeline-item right">
                                    <div class="timeline-node">04</div>
                                    <div class="timeline-content">
                                        <h4>Implementation & Iteration</h4>
                                        <p>Engineering sprints with CI/CD and demos. Deliverable: incremental shippable features.</p>
                                    </div>
                                </div>

                                <div class="timeline-item left">
                                    <div class="timeline-node">05</div>
                                    <div class="timeline-content">
                                        <h4>Release & Monitoring</h4>
                                        <p>Production rollout with observability and feedback loops. Deliverable: monitoring dashboards & runbook.</p>
                                    </div>
                                </div>

                                <div class="timeline-item right">
                                    <div class="timeline-node">06</div>
                                    <div class="timeline-content">
                                        <h4>Support & Growth</h4>
                                        <p>Ongoing support, performance tuning, and roadmap planning. Deliverable: SLA & growth plan.</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <style>
                        .roadmap-area { background: linear-gradient(180deg,#fbfafc 0%, #ffffff 100%); }
                        .roadmap-timeline { padding:40px 20px 10px; position:relative; }
                        .timeline-line { position:absolute; left:50%; top:10px; bottom:10px; width:4px; background:linear-gradient(180deg,#e9d5ff,#c4b5fd); transform:translateX(-50%); border-radius:4px; box-shadow:0 4px 18px rgba(124,58,237,0.06); }

                        .timeline-item { position:relative; width:50%; padding:18px 30px; box-sizing:border-box; }
                        .timeline-item.left { left:0; text-align:right; }
                        .timeline-item.right { left:50%; }

                        .timeline-node { position:absolute; top:18px; width:56px; height:56px; border-radius:14px; background:linear-gradient(135deg,#7c3aed,#2563eb); color:#fff; display:flex; align-items:center; justify-content:center; font-weight:700; font-size:16px; box-shadow:0 8px 24px rgba(37,99,235,0.14); }
                        .timeline-item.left .timeline-node { right:-28px; }
                        .timeline-item.right .timeline-node { left:-28px; }

                        .timeline-content { background:#fff; border-radius:12px; padding:18px 20px; box-shadow:0 10px 30px rgba(15,23,42,0.06); border:1px solid rgba(15,23,42,0.03); }
                        .timeline-content h4 { margin:0 0 6px; font-size:18px; color:#0f172a; }
                        .timeline-content p { margin:0; color:#475569; font-size:14px; line-height:1.5; }

                        /* responsive: stack items and center nodes */
                        @media (max-width: 900px) {
                            .timeline-line { left:8px; width:4px; transform:none; top:20px; }
                            .timeline-item { width:100%; padding-left:56px; padding-right:20px; margin-bottom:18px; }
                            .timeline-item.left, .timeline-item.right { left:0; text-align:left; }
                            .timeline-item .timeline-node { left:0; right:auto; }
                        }

                        /* small polish: number contrast */
                        .timeline-node { letter-spacing:0.3px; }
                        </style>
                    </section>
                    <!-- roadmap area end -->

                    <!-- apps area start -->
                    <section class="apps-area pt-140 pb-140">
                        <div class="container">
                            <div class="apps-icon tp_fade_bottom">
                                <div class="apps-icon-item">
                                    <img src="assets/images/apps/1.png" alt="Image Not Found">
                                </div>
                                <div class="apps-icon-item">
                                    <img src="assets/images/apps/2.png" alt="Image Not Found">
                                </div>
                                <div class="apps-icon-item">
                                    <img src="assets/images/apps/3.png" alt="Image Not Found">
                                </div>
                                <div class="apps-icon-item">
                                    <img src="assets/images/apps/4.png" alt="Image Not Found">
                                </div>
                                <div class="apps-icon-item">
                                    <img src="assets/images/apps/5.png" alt="Image Not Found">
                                </div>
                                <div class="apps-icon-item">
                                    <img src="assets/images/apps/6.png" alt="Image Not Found">
                                </div>
                                <div class="apps-icon-item">
                                    <img src="assets/images/apps/7.png" alt="Image Not Found">
                                </div>
                                <div class="apps-icon-item">
                                    <img src="assets/images/apps/8.png" alt="Image Not Found">
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-9">
                                    <div class="apps-content">
                                        <h2 class="tp_title_slideup">Easily Bring AI in Your
                                            Workflow to Create Content</h2>
                                        <p class="tp_fade_bottom">There are many variations of passages of Lorem Ipsum available <br> but the majority have suffered alteration in some form, by more and <br> more injected humour.</p>
                                        <a href="#" class="theme-btn tp_fade_bottom">Integrate With Your App</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="apps-shape d-none d-md-block">
                            <img src="assets/images/apps/shape-1.png" alt="Image Not Found" class="apps-shape-1" data-speed="0.6">
                            <img src="assets/images/apps/shape-2.png" alt="Image Not Found" class="apps-shape-2" data-speed="0.8">
                            <img src="assets/images/apps/shape-3.png" alt="Image Not Found" class="apps-shape-3">
                            <img src="assets/images/apps/shape-4.png" alt="Image Not Found" class="apps-shape-4" data-speed="0.7">
                            <img src="assets/images/apps/shape-5.png" alt="Image Not Found" class="apps-shape-5" data-speed="0.7">
                            <img src="assets/images/apps/shape-6.png" alt="Image Not Found" class="apps-shape-6" data-speed="0.8">
                        </div>
                    </section>
                    <!-- apps area end -->

                    <!-- price area start -->
                    <!-- <section class="price-area price-tab pt-140 pb-140">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xxl-6 col-xl-7 col-lg-9 col-md-10">
                                    <div class="section-area text-center mb-45">
                                        <span class="section-subtitle tp_fade_left">Pricing</span>
                                        <h2 class="section-title tp_title_slideup mb-0 section-title tp_title_slideup-big">Flexible Engagement Models & Pricing</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="price-switch-wrapper">
                                        <label class="toggler toggler--is-active" id="filt-monthly">Pay Monthly</label>
                                        <div class="toggle">
                                        <input type="checkbox" id="switcher" class="tp-check">
                                        <b class="switch"></b>
                                        </div>
                                        <label class="toggler yearly-pack" id="filt-yearly">Pay Yearly<span class="amount-offer">Save 34%</span></label>
                                    </div>                                 
                                </div>
                            </div>
                            <div id="monthly" class="wrapper-full">
                                <div class="row align-items-end">
                                    <div class="col-xl-3 col-lg-6 col-md-6 tp_fade_left" data-fade-from="left">
                                        <div class="price-item price-item-1">
                                            <div class="price-item-head">
                                                <h5 class="price-item-title">Starter — Free</h5>
                                                <h2 class="price-item-amount-title">Free</h2>
                                                <p>Test our platform and explore capabilities. No card required.</p>
                                                <a class="price-item-btn" href="#">Get Started<i class="fa-light fa-angle-right"></i></a>
                                            </div>
                                            <ul class="price-item-list">
                                                <li>Priority email & chat support 0</li>
                                                <li>Access 12+ use-cases</li>
                                                <li class="not-abatable">Generate 1,000 AI Words / month</li>
                                                <li class="not-abatable">Google Docs style editor</li>
                                                <li class="not-abatable">Compose & command features</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 tp_fade_left" data-fade-from="left" data-delay=".8">
                                        <div class="price-item active">
                                            <div class="price-item-option">
                                                <span>Best Choice</span>
                                            </div>
                                            <div class="price-item-head">
                                                <h5 class="price-item-title">Core — Team</h5>
                                                <div class="price-item-amount"><del>$85</del><h2 class="price-item-amount-title">$35</h2><span class="amount-offer">/user / month</span></div>
                                                <p>Best for small engineering teams building initial product increments.</p>
                                                <span class="price-item-offer">Includes support & onboarding</span>
                                                <a class="price-item-btn" href="#">Contact Sales<i class="fa-light fa-angle-right"></i></a>
                                            </div>
                                            <ul class="price-item-list">
                                                <li>Priority email & chat support 0</li>
                                                <li>Access 12+ use-cases</li>
                                                <li>Generate 1,000 AI Words / month</li>
                                                <li class="not-abatable">Google Docs style editor</li>
                                                <li class="not-abatable">Compose & command features</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 tp_fade_left" data-fade-from="left" data-delay="1.1">
                                        <div class="price-item">
                                            <div class="price-item-head">
                                                <h5 class="price-item-title">Scale — Business</h5>
                                                <div class="price-item-amount"><del>$89</del><h2 class="price-item-amount-title">$56</h2><span class="amount-offer">/month</span></div>
                                                <p>For growing products that need dedicated engineering and SRE support.</p>
                                                <span class="price-item-offer">Includes enhanced SLAs</span>
                                                <a class="price-item-btn" href="#">Contact Sales<i class="fa-light fa-angle-right"></i></a>
                                            </div>
                                            <ul class="price-item-list">
                                                <li>Priority email & chat support 0</li>
                                                <li>Access 12+ use-cases</li>
                                                <li>Generate 1,000 AI Words / month</li>
                                                <li>Google Docs style editor</li>
                                                <li class="not-abatable">Compose & command features</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 tp_fade_left" data-fade-from="left" data-delay="1.4">
                                        <div class="price-item">
                                            <div class="price-item-head">
                                                <h5 class="price-item-title">Enterprise</h5>
                                                <div class="price-item-amount"><del>$99</del><h2 class="price-item-amount-title">Custom</h2></div>
                                                <p>Large-scale programs, long-term partnerships, and bespoke delivery.</p>
                                                <span class="price-item-offer">Custom contracts & pricing</span>
                                                <a class="price-item-btn" href="contact.php">Talk to Us<i class="fa-light fa-angle-right"></i></a>
                                            </div>
                                            <ul class="price-item-list">
                                                <li>Priority email & chat support 0</li>
                                                <li>Access 12+ use-cases</li>
                                                <li>Generate 1,000 AI Words / month</li>
                                                <li>Google Docs style editor</li>
                                                <li>Compose & command features</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="hourly" class="wrapper-full hide">
                                <div class="row align-items-end">
                                    <div class="col-xl-3 col-lg-6 col-md-6 tp_fade_left" data-fade-from="left">
                                        <div class="price-item price-item-1">
                                            <div class="price-item-head">
                            <h5 class="price-item-title">Starter — Free</h5>
                                <h2 class="price-item-amount-title">Free</h2>
                                <p>Explore our capabilities and sample workflows — no card required.</p>
                                <a class="price-item-btn" href="#">Get Started<i class="fa-light fa-angle-right"></i></a>
                                            </div>
                                            <ul class="price-item-list">
                                                <li>Priority email & chat support 0</li>
                                                <li>Access 12+ use-cases</li>
                                                <li class="not-abatable">Generate 1,000 AI Words / month</li>
                                                <li class="not-abatable">Google Docs style editor</li>
                                                <li class="not-abatable">Compose & command features</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 tp_fade_left" data-fade-from="left" data-delay=".8">
                                        <div class="price-item active">
                                            <div class="price-item-option">
                                                <span>Best Choice</span>
                                            </div>
                                            <div class="price-item-head">
                                                <h5 class="price-item-title">Core — Team</h5>
                                                <div class="price-item-amount"><del>$95</del><h2 class="price-item-amount-title">$55</h2><span class="amount-offer">/user / month</span></div>
                                                <p>Recommended for small engineering teams with rapid product cycles.</p>
                                                <a class="price-item-btn" href="#">Contact Sales<i class="fa-light fa-angle-right"></i></a>
                                            </div>
                                            <ul class="price-item-list">
                                                <li>Priority email & chat support 0</li>
                                                <li>Access 12+ use-cases</li>
                                                <li>Generate 1,000 AI Words / month</li>
                                                <li class="not-abatable">Google Docs style editor</li>
                                                <li class="not-abatable">Compose & command features</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 tp_fade_left" data-fade-from="left" data-delay="1.1">
                                        <div class="price-item">
                                            <div class="price-item-head">
                                                <h5 class="price-item-title">Scale — Business</h5>
                                                <div class="price-item-amount"><del>$99</del><h2 class="price-item-amount-title">$76</h2><span class="amount-offer">/month</span></div>
                                                <p>Built for teams that need dedicated engineering and production support.</p>
                                                <a class="price-item-btn" href="#">Contact Sales<i class="fa-light fa-angle-right"></i></a>
                                            </div>
                                            <ul class="price-item-list">
                                                <li>Priority email & chat support 0</li>
                                                <li>Access 12+ use-cases</li>
                                                <li>Generate 1,000 AI Words / month</li>
                                                <li>Google Docs style editor</li>
                                                <li class="not-abatable">Compose & command features</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 tp_fade_left" data-fade-from="left" data-delay="1.4">
                                        <div class="price-item">
                                            <div class="price-item-head">
                                                <h5 class="price-item-title">Enterprise</h5>
                                                <div class="price-item-amount"><del>$240</del><h2 class="price-item-amount-title">Custom</h2></div>
                                                <p>For large organisations and long-term engagements — bespoke delivery and pricing.</p>
                                                <a class="price-item-btn" href="contact.php">Talk to Us<i class="fa-light fa-angle-right"></i></a>
                                            </div>
                                            <ul class="price-item-list">
                                                <li>Priority email & chat support 0</li>
                                                <li>Access 12+ use-cases</li>
                                                <li>Generate 1,000 AI Words / month</li>
                                                <li>Google Docs style editor</li>
                                                <li>Compose & command features</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section> -->
                
                    <section class="brand-area pb-140">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-10">
                                    <div class="section-area text-center mb-50">
                                        <h2 class="section-title tp_title_slideup mb-0">Trusted by 20,000+
                                            Marketing Departments.</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="brand-wrap">
                                <div class="brand-item tp_fade_bottom">
                                    <img src="assets/images/brand/1.png" alt="Image Not Found">
                                </div>
                                <div class="brand-item tp_fade_bottom">
                                    <img src="assets/images/brand/2.png" alt="Image Not Found">
                                </div>
                                <div class="brand-item tp_fade_bottom">
                                    <img src="assets/images/brand/3.png" alt="Image Not Found">
                                </div>
                                <div class="brand-item tp_fade_bottom">
                                    <img src="assets/images/brand/4.png" alt="Image Not Found">
                                </div>
                                <div class="brand-item tp_fade_bottom">
                                    <img src="assets/images/brand/5.png" alt="Image Not Found">
                                </div>
                                <div class="brand-item tp_fade_bottom">
                                    <img src="assets/images/brand/6.png" alt="Image Not Found">
                                </div>
                                <div class="brand-item tp_fade_bottom">
                                    <img src="assets/images/brand/7.png" alt="Image Not Found">
                                </div>
                                <div class="brand-item tp_fade_bottom">
                                    <img src="assets/images/brand/8.png" alt="Image Not Found">
                                </div>
                                <div class="brand-item tp_fade_bottom">
                                    <img src="assets/images/brand/9.png" alt="Image Not Found">
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- brand area end -->
                </main>

                <!-- footer area start -->
                <footer class="footer-area">
                    <div class="container">
                        <div class="footer-top pt-140 pb-55">
                            <div class="row justify-content-between">
                                <div class="col-xl-5 col-lg-4 tp_has_fade_anim" data-fade-from="left">
                                    <div class="footer-left mb-50">
                                        <div class="footer-logo">
                                            <a href="index.php"><img src="assets/images/logo/logo-w.png" alt="Beetle &amp; Ant Co."></a>
                                        </div>
                                        <div class="footer-newsletter">
                                            <h5>Stay informed</h5>
                                            <form action="#">
                                                <input type="email" placeholder="Your business email address">
                                                <button type="submit"><i class="fa-light fa-arrow-right"></i></button>
                                            </form>
                                            <div class="footer-newsletter-condition">
                                                <label class="condition-checkbox">
                                                    Subscribe to occasional updates about product launches and case studies.
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-7 tp_has_fade_anim" data-fade-from="right" data-delay=".8">
                                    <div class="footer-right mb-10">
                                        <h3 class="footer-right-title">Beetle &amp; Ant Co. — Engineering & AI</h3>
                                        <div class="footer-widget-wrap">
                                            <div class="footer-widget mb-40">
                                                <h5>Socials</h5>
                                                <ul>
                                                    <li><a href="#">LinkedIn</a></li>
                                                    <li><a href="#">Twitter</a></li>
                                                    <li><a href="#">Dribbble</a></li>
                                                    <li><a href="#">Instagram</a></li>
                                                </ul>
                                            </div>
                                            <div class="footer-widget mb-40">
                                                <h5>Company</h5>
                                                <ul>
                                                    <li><a href="about.php">About Us</a></li>
                                                    <li><a href="team.php">Team</a></li>
                                                    <li><a href="career.php">Careers</a></li>
                                                    <li><a href="contact.php">Contact</a></li>
                                                </ul>
                                            </div>
                                            <div class="footer-widget mb-40">
                                                <h5>Contact</h5>
                                                <ul>
                                                    <li><a href="mailto:hello@beetleant.co">hello@beetleant.co</a></li>
                                                    <li><a href="tel:+1-555-123-4567">+1 (555) 123-4567</a></li>
                                                    <li><a href="contact.php">Request a proposal</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="footer-bottom tp_fade_bottom_footer">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <div class="footer-bottom-copyright d-flex justify-content-center justify-content-md-start">
                                        <p>&copy; 2023 Doodle All Rights Reserved by site</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="footer-bottom-menu d-flex justify-content-center justify-content-md-end">
                                        <ul>
                                            <li><a href="#">Privacy Policy</a></li>
                                            <li><a href="#">Term of Service</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- footer area end -->

            </div>
        </div>
    </div>


    <!-- jQuery Js -->
    <?php include './partials/script.php' ?>
 
  </body>
</html>
