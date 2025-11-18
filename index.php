
<!DOCTYPE html>
<html lang="en">

<?php include './partials/head.php' ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $company_name; ?> - Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');
        body {
            font-family: 'Inter', sans-serif;
            background-color: #F9FAFB; /* Light Gray Background (Whitish Aesthetic) */
            color: #1F2937; /* Dark Gray Text */
        }
        :root{
            --accent: #1F4B8F; /* corporate navy */
            --accent-2: #6B21A8; /* secondary purple */
            --muted: #6B7280; /* gray-500 */
            --card-bg: #ffffff;
            --surface: #F3F6FA;
            --glass: rgba(255,255,255,0.6);
            --canvas-opacity: 0.72; /* default canvas opacity to blend with page */
            --canvas-tint: rgba(31,75,143,0.02);
        }
        .text-accent { color: var(--accent); }
        .bg-accent { background-color: var(--accent); }
        .text-dark-text { color: #1F2937; }
        .bg-card { background-color: #ffffff; }
        .hero-bg {
            background-color: #ffffff;
            /* very subtle diagonal sheen to feel modern and corporate */
            background-image: linear-gradient(135deg, rgba(31,75,143,0.02) 0%, rgba(107,33,168,0.01) 100%);
            background-size: cover;
            min-height: 760px;
            display: block;
        }
        /* Overlay to mask particles near the top so they don't overlap header or hero text */
        #hero-map-overlay {
            position: absolute;
            inset: 0;
            z-index: 5; /* sits above canvas but below content (content uses z-10) */
            pointer-events: none;
            /* subtle top mask: partly transparent so dotted continents remain visible under hero headline */
            background: linear-gradient(to bottom, rgba(249,250,251,0.75) 0%, rgba(249,250,251,0.08) 28%, rgba(249,250,251,0) 60%);
        }
        
        /* Make the 3D container blend with the page rather than look boxed.
           Keep canvas visually behind content and prevent particles/cubes from spilling over text. */
        #portfolio-3d-container {
            width: 100%;
            height: 340px; /* slightly taller so the animation has room to breathe */
            position: relative;
            background: transparent; /* transparent so it reads as part of the page */
            border-radius: 0; /* remove rounded card feel */
            overflow: hidden; /* prevent 3D objects from extending outside the visual area */
            box-shadow: none; /* remove boxed shadow */
            transition: all 0.45s ease;
            z-index: 0; /* ensure the container stays behind main content */
        }

        /* Soft fades top and bottom so the canvas blends into the surrounding page */
        #portfolio-3d-container::before,
        #portfolio-3d-container::after {
            content: '';
            position: absolute;
            left: 0;
            right: 0;
            height: 72px;
            pointer-events: none;
            z-index: 0;
        }
        /* top fade matches the main page background */
        #portfolio-3d-container::before {
            top: 0;
            background: linear-gradient(to bottom, rgba(249,250,251,1), rgba(249,250,251,0));
        }
        /* bottom fade to softly merge into following section */
        #portfolio-3d-container::after {
            bottom: 0;
            background: linear-gradient(to top, rgba(249,250,251,1), rgba(249,250,251,0));
        }
        
       /* Ensure all canvases are transparent and don't block UI interactions */
        #portfolio-3d-canvas, #hero-map-canvas {
           background-color: transparent !important;
           display: block;
           width: 100%;
           height: 100%;
           pointer-events: none; /* allow clicks to pass through to page elements */
           /* Make the canvas less visually dominant so the motion feels like part of the background */
           opacity: var(--canvas-opacity);
           mix-blend-mode: normal;
           transform-origin: center;
       }
        /* Force canvases to sit behind content (but above the page background) */
        #portfolio-3d-canvas, #hero-map-canvas { z-index: 0; position: relative; }

        /* Project cards should sit above the canvas so text never gets visually overlapped */
        .project-card { position: relative; z-index: 10; }

        /* Improve text contrast and legibility when over animated backgrounds */
        .hero-bg h1 {
            color: #0b1220; /* darker headline for contrast */
            text-shadow: 0 6px 18px rgba(15, 23, 42, 0.06);
        }
        .project-card .p-5 { background: linear-gradient(180deg, rgba(255,255,255,0.92), rgba(255,255,255,0.86)); backdrop-filter: blur(6px); }
        .project-card h3 { color: #0b1220; text-shadow: 0 2px 6px rgba(15,23,42,0.04); }
        .cta-link { color: var(--accent); font-weight:700; }
        
    /* New Styles for Vertical Sidebar Filtering (explicit CSS so it works without Tailwind processing) */
        .filter-btn {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            padding: 0.75rem 1.25rem;
            border-radius: 0.75rem;
            font-size: 1rem;
            font-weight: 600;
            text-align: left;
            background: transparent;
            color: #374151; /* gray-700 */
            transition: background 0.2s ease, color 0.2s ease, box-shadow 0.2s ease, transform 0.2s ease;
            cursor: pointer;
            border: 1px solid transparent;
        }
        .filter-btn:not(.active):hover {
            background: #f3f4f6; /* gray-100 */
            transform: translateY(-2px);
        }
        .filter-btn.active {
            background: var(--accent); /* corporate accent */
            color: #ffffff;
            box-shadow: 0 8px 20px rgba(31,75,143,0.14);
            font-weight: 700;
            transform: none;
        }
        .filter-btn .count {
            background: #e5e7eb; /* gray-200 */
            color: #374151;
            padding: 0.125rem 0.5rem;
            font-size: 0.75rem;
            font-weight: 700;
            border-radius: 9999px;
            margin-left: 0.75rem;
        }
        .filter-btn.active .count {
            background: #ffffff;
            color: var(--accent);
        }

        /* Corporate header tweaks */
        header { background: #ffffff; border-bottom: 1px solid rgba(15,23,42,0.04); }
        header .max-w-7xl a { color: #0f172a; }

        /* Project card modern styles */
        .project-card {
            border-radius: 0.75rem;
            overflow: hidden;
            background: var(--card-bg);
            border: 1px solid rgba(15,23,42,0.04);
            transition: transform 0.28s ease, box-shadow 0.28s ease;
            box-shadow: 0 6px 18px rgba(15,23,42,0.03);
        }
        .project-card:hover { transform: translateY(-6px); box-shadow: 0 12px 30px rgba(15,23,42,0.06); }
        .project-image-wrap { position: relative; }
        .project-image-overlay {
            position: absolute; inset: 0; pointer-events: none;
            background: linear-gradient(180deg, rgba(0,0,0,0.00) 30%, rgba(0,0,0,0.18) 100%);
            mix-blend-mode: multiply;
        }
        .project-image-meta { position: absolute; left: 1rem; bottom: 1rem; z-index: 10; display:flex; gap:0.5rem; align-items:center; }
        .project-image-meta .chip { background: rgba(255,255,255,0.9); color: #0f172a; padding: 0.25rem 0.6rem; border-radius: 999px; font-weight:700; font-size:0.75rem; }
        .project-stat { display:flex; align-items:center; gap:1rem; justify-content:space-between; }
        .statistic { font-weight:800; font-size:1.5rem; color:var(--accent); }
        .cta-link { color:var(--accent); font-weight:600; }
    .text-muted { color: var(--muted); }
    .label { color: var(--muted); font-weight:700; }

        /* Styles for Shrinking Header Effect */
        header {
            transition: all 0.3s ease-in-out;
        }
        header.scrolled {
            /* Keep header height stable — don't change padding to avoid layout shifts */
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -2px rgba(0, 0, 0, 0.06);
        }

        /* When scrolled, collapse the top bar to avoid leaving empty space above the sticky header */
        header .header-top { transition: height 220ms ease, opacity 220ms ease, padding 220ms ease; }
        header.scrolled .header-top { height: 0 !important; opacity: 0; padding: 0 !important; margin: 0 !important; overflow: hidden; }
        #logo-text {
            transition: all 0.3s ease-in-out;
        }
        
        /* Styles for the project cards (Improved Aesthetics) */
        .project-card-stats {
            /* Create a subtle, split-panel look for the key metric */
            @apply flex flex-col items-center p-3 sm:p-4 rounded-b-xl border-t border-gray-100 bg-gray-50;
        }
        .project-card-stats .statistic {
            @apply text-4xl font-extrabold text-accent leading-none;
        }
        .project-card-stats .label {
            @apply text-xs text-gray-500 mt-1 uppercase tracking-wider;
        }
        
    </style>
</head>
<body>


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
                                                <!-- <li><a href="about.php">About</a></li> -->
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
<!-- tech capabilities area start -->
<section class="tech-area pt-140 pb-20 bg-[#f8fafc] relative overflow-hidden">
  <div class="container">
    <div class="row justify-content-center mb-32">
      <div class="col-12 text-center">
        <span class="section-subtitle tp_fade_left">Core Technology Expertise</span>
        <h2 class="section-title tp_title_slideup mb-4">We Build the Digital Infrastructure of the Future</h2>
        <p class="section-desc tp_fade_bottom max-w-3xl mx-auto">
          At Beetle & Ant Co., our teams architect, develop, and deploy technology ecosystems that are intelligent, scalable, and cloud-native — powering the next generation of connected businesses.
        </p>
      </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
      <div class="tech-card">
        <div class="tech-icon">
          <img src="assets/images/tech/web-hosting.png" alt="Cloud Engineering">
        </div>
        <h4>Cloud Engineering</h4>
        <p>Build cloud-native systems using AWS, Azure, and GCP — with auto-scaling, CI/CD, and advanced DevOps automation.</p>
      </div>

      <div class="tech-card">
        <div class="tech-icon">
          <img src="assets/images/tech/ai.png" alt="AI & ML">
        </div>
        <h4>AI & Machine Learning</h4>
        <p>Leverage deep learning, NLP, and predictive analytics to turn enterprise data into actionable intelligence.</p>
      </div>

      <div class="tech-card">
        <div class="tech-icon">
          <img src="assets/images/tech/coding.png" alt="Full Stack Development">
        </div>
        <h4>Full-Stack Development</h4>
        <p>End-to-end web and mobile solutions using Node.js, Angular, React, and Flutter — built for performance and security.</p>
      </div>

      <div class="tech-card">
        <div class="tech-icon">
          <img src="assets/images/tech/database-management.png" alt="Data Engineering">
        </div>
        <h4>Data Engineering</h4>
        <p>Modernize data pipelines with real-time processing, warehousing, and visualization using BigQuery and Snowflake.</p>
      </div>

      <div class="tech-card">
        <div class="tech-icon">
          <img src="assets/images/tech/blockchain.png" alt="Blockchain & Web3">
        </div>
        <h4>Blockchain & Web3</h4>
        <p>Develop decentralized applications, smart contracts, and secure digital identity systems across major blockchains.</p>
      </div>
 <div class="tech-card">
        <div class="tech-icon">
          <img src="assets/images/tech/shield.png" alt="Cybersecurity">
        </div>
        <h4>Cybersecurity & DevSecOps</h4>
        <p>Embed security in every layer — identity management, encryption, and compliance frameworks that protect data and trust.</p>
      </div>
      
    </div>
  </div>

  <style>
    .tech-card {
      background: #fff;
      border: 1px solid rgba(15,23,42,0.05);
      border-radius: 16px;
      padding: 32px 26px;
      text-align: left;
      box-shadow: 0 6px 18px rgba(15,23,42,0.05);
      transition: all 0.3s ease;
      position: relative;
    }
    .tech-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 12px 32px rgba(15,23,42,0.08);
    }
    .tech-icon img {
      width: 48px;
      height: 48px;
      margin-bottom: 18px;
      /* filter: brightness(0) saturate(100%) invert(28%) sepia(95%) saturate(2900%) hue-rotate(210deg) brightness(95%) contrast(90%); */
    }
    .tech-card h4 {
      font-size: 18px;
      color: #0f172a;
      margin-bottom: 10px;
      font-weight: 600;
    }
    .tech-card p {
      font-size: 15px;
      color: #475569;
      line-height: 1.6;
    }
    .section-subtitle {
      color: #2563eb;
      text-transform: uppercase;
      font-weight: 600;
      font-size: 14px;
      letter-spacing: 0.05em;
    }
  </style>
</section>
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

<!-- tech capabilities area end -->

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
                                            Workflow</h2>
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
                
                    <!-- <section class="brand-area pb-140">
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
                    </section> -->
                    <!-- brand area end -->
                     <section class="why-choose-us-area pt-120 pb-140 bg-[#f8fafc] relative overflow-hidden">
  <div class="container">
    <div class="row justify-content-center mb-12">
      <div class="col-12 text-center">
        <span class="section-subtitle tp_fade_left">Why Companies Partner With Us</span>
        <h2 class="section-title tp_title_slideup mb-4">Engineering Partnership, Not Just Outsourcing</h2>
        <p class="section-desc tp_fade_bottom max-w-3xl mx-auto">
          Beetle & Ant Co. blends the agility of a freelance network with the accountability of an engineering firm — delivering
          scalable solutions, reliable developers, and technology that fuels growth.
        </p>
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <div class="why-card tp_fade_bottom">
        <div class="why-icon">
          <img src="assets/images/group/users-gear.png" alt="Collaborative Teams" />
        </div>
        <h4>Flexible Team Models</h4>
        <p>Hire full teams or individual experts for your projects — scale up or down based on real business needs.</p>
      </div>

      <div class="why-card tp_fade_bottom">
        <div class="why-icon">
          <img src="assets/images/group/cogwheel.png" alt="End-to-End Delivery" />
        </div>
        <h4>End-to-End Delivery</h4>
        <p>From discovery to deployment, we take complete ownership with a focus on timelines, scalability, and quality.</p>
      </div>

      <div class="why-card tp_fade_bottom">
        <div class="why-icon">
          <img src="assets/images/group/bulb.png" alt="Innovation Focus" />
        </div>
        <h4>Innovation-Driven</h4>
        <p>We blend engineering precision with creativity to deliver modern, future-ready software products.</p>
      </div>

      <div class="why-card tp_fade_bottom">
        <div class="why-icon">
          <img src="assets/images/group/24-7.png" alt="Ongoing Support" />
        </div>
        <h4>Dedicated Support</h4>
        <p>Long-term technical partnerships that ensure smooth maintenance, updates, and continuous improvement.</p>
      </div>

      <div class="why-card tp_fade_bottom">
        <div class="why-icon">
          <img src="assets/images/group/security.png" alt="Security & Trust" />
        </div>
        <h4>Security & Reliability</h4>
        <p>We embed DevSecOps practices and compliance into every project — safeguarding your IP and data.</p>
      </div>

      <div class="why-card tp_fade_bottom">
        <div class="why-icon">
          <img src="assets/images/group/success.png" alt="Business Growth" />
        </div>
        <h4>Outcome-Focused</h4>
        <p>Every project is tied to measurable business outcomes — not just code, but real commercial impact.</p>
      </div>
    </div>
  </div>

  <style>
    .why-card {
      background: #fff;
      border: 1px solid rgba(15, 23, 42, 0.05);
      border-radius: 16px;
      padding: 32px 26px;
      text-align: left;
      box-shadow: 0 6px 18px rgba(15, 23, 42, 0.05);
      transition: all 0.3s ease;
      position: relative;
    }

    .why-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 12px 32px rgba(15, 23, 42, 0.08);
    }

    .why-icon img {
      width: 48px;
      height: 48px;
      margin-bottom: 18px;
    }

    .why-card h4 {
      font-size: 18px;
      color: #0f172a;
      margin-bottom: 10px;
      font-weight: 600;
    }

    .why-card p {
      font-size: 15px;
      color: #475569;
      line-height: 1.6;
    }

    .section-subtitle {
      color: #2563eb;
      text-transform: uppercase;
      font-weight: 600;
      font-size: 14px;
      letter-spacing: 0.05em;
    }
  </style>
</section>
<section class="talent-solutions-area pt-120 pb-140 bg-[#f8fafc] relative overflow-hidden">
  <div class="container">
    <div class="row justify-content-center mb-12">
      <div class="col-12 text-center">
        <span class="section-subtitle tp_fade_left">Flexible Tech Partnership</span>
        <h2 class="section-title tp_title_slideup mb-4">
          Build Your Dream Team — On Demand
        </h2>
        <p class="section-desc tp_fade_bottom max-w-3xl mx-auto">
          Whether you need one expert developer or a complete engineering squad, Beetle & Ant Co. helps you scale fast with
          pre-vetted talent, project-based engagement, and full lifecycle delivery support.
        </p>
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <div class="talent-card tp_fade_bottom">
        <div class="talent-icon">
          <img src="assets/images/dev/web-development.png" alt="Dedicated Developers" />
        </div>
        <h4>Dedicated Developers</h4>
        <p>
          Hire expert engineers across frontend, backend, mobile, and DevOps — dedicated to your projects, your tools, your time zone.
        </p>
      </div>

      <div class="talent-card tp_fade_bottom">
        <div class="talent-icon">
          <img src="assets/images/dev/partners.png" alt="Project-Based Teams" />
        </div>
        <h4>Project-Based Teams</h4>
        <p>
          Get complete agile pods including developers, designers, and QA — tailored to deliver specific outcomes with accountability.
        </p>
      </div>

      <div class="talent-card tp_fade_bottom">
        <div class="talent-icon">
          <img src="assets/images/dev/handshake.png" alt="Managed Partnership" />
        </div>
        <h4>Managed Partnership</h4>
        <p>
          We handle onboarding, delivery, quality assurance, and communication — so you focus purely on your product goals.
        </p>
      </div>

      <div class="talent-card tp_fade_bottom">
        <div class="talent-icon">
          <img src="assets/images/dev/customer-service.png" alt="Continuous Support" />
        </div>
        <h4>Continuous Support</h4>
        <p>
          From code maintenance to scaling infrastructure — our support engineers stay aligned even after project completion.
        </p>
      </div>

      <div class="talent-card tp_fade_bottom">
        <div class="talent-icon">
          <img src="assets/images/dev/hourglass.png" alt="Flexible Engagements" />
        </div>
        <h4>Flexible Engagements</h4>
        <p>
          Start small, expand when needed. Choose hourly, monthly, or milestone-based engagement — without long-term lock-ins.
        </p>
      </div>

      <div class="talent-card tp_fade_bottom">
        <div class="talent-icon">
          <img src="assets/images/dev/insurance.png" alt="Quality & Reliability" />
        </div>
        <h4>Quality & Reliability</h4>
        <p>
          Every developer and project undergoes multi-level code review, ensuring enterprise-grade quality and delivery consistency.
        </p>
      </div>
    </div>

    <div class="text-center mt-16">
      <a href="contact.php" class="theme-btn inline-flex items-center px-8 py-4 text-lg font-semibold rounded-full shadow-md text-white bg-accent hover:bg-opacity-90 transition transform hover:scale-105">
        Build Your Team Today →
      </a>
    </div>
  </div>

  <style>
    .talent-card {
      background: #fff;
      border: 1px solid rgba(15, 23, 42, 0.05);
      border-radius: 16px;
      padding: 32px 26px;
      text-align: left;
      box-shadow: 0 6px 18px rgba(15, 23, 42, 0.05);
      transition: all 0.3s ease;
      position: relative;
    }

    .talent-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 12px 32px rgba(15, 23, 42, 0.08);
    }

    .talent-icon img {
      width: 48px;
      height: 48px;
      margin-bottom: 18px;
      filter: none;
    }

    .talent-card h4 {
      font-size: 18px;
      color: #0f172a;
      margin-bottom: 10px;
      font-weight: 600;
    }

    .talent-card p {
      font-size: 15px;
      color: #475569;
      line-height: 1.6;
    }

    .section-subtitle {
      color: #2563eb;
      text-transform: uppercase;
      font-weight: 600;
      font-size: 14px;
      letter-spacing: 0.05em;
    }
  </style>
</section>

                </main>

                <!-- footer area start -->
                <footer class="footer-area">
                    <div class="container">
                        <div class="footer-top pt-100 pb-0">
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
