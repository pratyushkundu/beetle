<?php
// PHP Configuration and Data Variables
$company_name = "Beetle & Ant Co.";
$motto = "Engineered for Tomorrow.";
$main_headline = "Building Your Digital Backbone with Software that Scales.";
$sub_headline = "We partner with companies to create robust, scalable, and intelligent software that drives sustainable business value.";
$contact_email = "contact@beetleant.co";

// Navigation Structure
$nav_items = [
    ["title" => "Our Solutions", "href" => "#solutions"],
    ["title" => "Sectors", "href" => "#sectors"],
    ["title" => "Portfolio", "href" => "#portfolio"],
    ["title" => "About Us", "href" => "#about"],
    ["title" => "Careers", "href" => "#careers"]
];

// Core Offerings Section Data (Our Capabilities) - Colors adjusted for light theme
$offerings = [
    [
        "title" => "Enterprise Software Strategy",
        "summary" => "Design your roadmap to digital transformation and define clear, achievable outcomes.",
        "cta" => "Learn More",
        "icon" => "M10 20a10 10 0 1 0 0-20 10 10 0 0 0 0 20zm0-18a8 8 0 1 1 0 16 8 8 0 0 1 0-16zM10 5a1 1 0 0 0-1 1v4a1 1 0 0 0 .293 .707l2.853 2.853a1 1 0 0 0 1.414-1.414l-2.586-2.586V6a1 1 0 0 0-1-1z"
    ],
    [
        "title" => "Full-Stack Development",
        "summary" => "From concept to deployment, we build custom, high-performance applications that deliver results.",
        "cta" => "Explore Development",
        "icon" => "M18 10h-2V6h2v4zm-3 8v-2h-2v2h2zm2-2h2v-2h-2v2zM5 2a3 3 0 0 0-3 3v14a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V5a3 3 0 0 0-3-3H5zm0 2h14a1 1 0 0 1 1 1v4h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4v4a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-4h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1H4V5a1 1 0 0 1 1-1zm3 10H5v2h3v-2zm-3-4h3v2H5v-2zm-1 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"
    ],
    [
        "title" => "Managed Cloud & SaaS",
        "summary" => "Continuous integration, maintenance, and secure cloud operations for your platform on any provider.",
        "cta" => "View Managed Services",
        "icon" => "M19.3 15.5a4.7 4.7 0 0 0-9.2 0H5a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2zM5 19v-2h14v2H5zm10.7-5.5a2.7 2.7 0 1 1-5.4 0 2.7 2.7 0 0 1 5.4 0z"
    ],
    [
        "title" => "AI & Data Engineering",
        "summary" => "Harness the power of data with custom machine learning models and intelligent automation.",
        "cta" => "Discover AI",
        "icon" => "M4 18h16V6H4v12zM5 7h14v10H5V7zm3 3h2v4H8v-4zm4 0h2v4h-2v-4zm4 0h2v4h-2v-4z"
    ],
];

// Portfolio/Featured Projects Data with Categories and Images
$projects = [
    [
        "id" => 1,
        "client" => "Global Retail Chain",
        "project_title" => "AI Inventory Optimization",
        "category" => "AI/ML",
        "industry" => "Retail",
        "result_statistic" => "$4M+",
        "result_label" => "Annual Savings Generated",
        "description" => "Deployed custom machine learning to predict consumer demand, reducing stockouts and excess inventory by 95% accuracy.",
        "cta" => "View Detailed Case Study",
        "image_url" => "https://placehold.co/400x250/E0F2FE/6B21A8?text=Retail+AI",
    ],
    [
        "id" => 2,
        "client" => "Regional Bank",
        "project_title" => "Core Banking Modernization",
        "category" => "Cloud/FinTech",
        "industry" => "FinTech",
        "result_statistic" => "99.99%",
        "result_label" => "Guaranteed Transaction Uptime",
        "description" => "Migrated a 20-year-old legacy system to a scalable serverless cloud architecture, improving scalability and cutting operational costs by 40%.",
        "cta" => "Read Success Story",
        "image_url" => "https://placehold.co/400x250/C7D2FE/6B21A8?text=FinTech+Cloud",
    ],
    [
        "id" => 3,
        "client" => "Major Hospital Network",
        "project_title" => "HIPAA-Compliant Patient Portal",
        "category" => "Healthcare/Security",
        "industry" => "Hospitals",
        "result_statistic" => "Zero",
        "result_label" => "Security Incidents Reported",
        "description" => "Built a secure-by-design portal using a Zero-Trust security model for compliance and data protection.",
        "cta" => "Request Demo",
        "image_url" => "https://placehold.co/400x250/C7D2FE/6B21A8?text=Health+Portal",
    ],
    [
        "id" => 4,
        "client" => "Urban Restaurant Group",
        "project_title" => "POS Integration & Analytics",
        "category" => "Data Engineering",
        "industry" => "Restaurants",
        "result_statistic" => "25%",
        "result_label" => "Increase in Table Turnover",
        "description" => "Developed a real-time analytics platform integrating various POS systems for dynamic table and staff management.",
        "cta" => "Explore Case Study",
        "image_url" => "https://placehold.co/400x250/E0F2FE/6B21A8?text=Restaurant+Tech",
    ],
    [
        "id" => 5,
        "client" => "Residential Property Developer",
        "project_title" => "Digital Property Management",
        "category" => "Full-Stack Dev",
        "industry" => "Real Estate",
        "result_statistic" => "50%",
        "result_label" => "Reduction in Maintenance Calls",
        "description" => "Created a comprehensive web application for resident communication, maintenance requests, and payment processing.",
        "cta" => "See Platform Details",
        "image_url" => "https://placehold.co/400x250/C7D2FE/6B21A8?text=Real+Estate+App",
    ],
    [
        "id" => 6,
        "client" => "Energy Utility Provider",
        "project_title" => "Smart Grid Predictive Maintenance",
        "category" => "AI/ML",
        "industry" => "Energy",
        "result_statistic" => "72%",
        "result_label" => "Reduction in Unscheduled Downtime",
        "description" => "Integrated sensor data with ML models to predict component failures in the smart grid, enabling preventative action.",
        "cta" => "Explore Energy Solutions",
        "image_url" => "https://placehold.co/400x250/E0F2FE/6B21A8?text=Smart+Grid+ML",
    ],
    [
        "id" => 7,
        "client" => "Global Logistics Firm",
        "project_title" => "Real-Time Fleet Tracking SaaS",
        "category" => "Cloud/FinTech",
        "industry" => "Logistics",
        "result_statistic" => "15%",
        "result_label" => "Improved Fuel Efficiency",
        "description" => "Developed a SaaS platform for real-time tracking, routing optimization, and automated reporting.",
        "cta" => "Request a Demo",
        "image_url" => "https://placehold.co/400x250/C7D2FE/6B21A8?text=Logistics+SaaS",
    ],
];

// Dynamically generate categories for filtering
$categories = array_unique(array_column($projects, 'category'));
array_unshift($categories, "All Projects");

$projects_json = json_encode($projects);
?>

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

    <!-- <header class="sticky top-0 z-50 bg-white shadow-lg border-b border-gray-100 py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center">
            <a href="#" class="text-2xl sm:text-3xl font-extrabold tracking-tight text-dark-text flex items-center" id="logo-text">
                <span class="text-accent text-3xl font-black mr-2 transition-all duration-300" id="logo-icon">&lt;/&gt;</span>
                <?php echo $company_name; ?>
            </a>

            <nav class="hidden lg:flex space-x-8">
                <?php foreach ($nav_items as $item): ?>
                    <a href="<?php echo $item['href']; ?>" class="text-sm font-medium text-gray-600 hover:text-accent transition duration-300">
                        <?php echo $item['title']; ?>
                    </a>
                <?php endforeach; ?>
            </nav>

            <a href="mailto:<?php echo $contact_email; ?>" class="hidden sm:inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-full shadow-md text-white bg-accent hover:bg-opacity-90 transition duration-300">
                Contact Us
            </a>
        </div>
    </header> -->
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
                                            <span style="font-weight:800; color:var(--accent); font-size:20px;">Beetle &amp; Ant Co.</span>
                                            <img src="assets/images/logo/logo.png" alt="Beetle & Ant Co." style="height:26px; opacity:0.9; filter:grayscale(100%);">
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
                                                        <li><a href="wishlist.php">Wishlist</a></li>
                                                        <li><a href="cart.php">Cart</a></li>
                                                        <li><a href="checkout.php">Checkout</a></li>
                                                        <li><a href="login.php">Login</a></li>
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
        <!-- HERO SECTION: Includes the newly visible 3D particle map -->
        <section class="hero-bg pt-24 pb-48 sm:pt-56 sm:pb-72 relative overflow-hidden border-b border-gray-100">
            <div id="hero-map-container" class="absolute inset-0 z-0">
                <canvas id="hero-map-canvas" class="w-full h-full"></canvas>
                <!-- Fallback/Decorative SVG continents - visible when canvas is disabled or to subtly reinforce shape -->
                <svg id="hero-continent-svg" viewBox="-120 -60 240 120" preserveAspectRatio="xMidYMid meet" class="absolute inset-0 w-full h-full pointer-events-none" style="opacity:0.7; mix-blend-mode:normal;">
                    <defs>
                        <linearGradient id="g1" x1="0" x2="0" y1="0" y2="1">
                            <stop offset="0%" stop-color="rgba(31,75,143,0.06)" />
                            <stop offset="100%" stop-color="rgba(31,75,143,0.02)" />
                        </linearGradient>
                    </defs>
                    <!-- Simplified continent silhouette path (stylized) -->
                    <path d="M-110,-10 C-90,-40 -50,-40 -20,-20 C0,-10 20,-5 40,-10 C70,-15 90,-5 110,-5 L110,40 L-110,40 Z" fill="url(#g1)"/>
                    <path d="M-60,20 C-40,5 -10,0 10,8 C25,14 40,22 60,18" stroke="rgba(31,75,143,0.12)" stroke-width="1.5" fill="none"/>
                </svg>
            </div>

            <!-- Overlay to mask the top portion of the particle map so it won't overlap header/text -->
            <div id="hero-map-overlay"></div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
                <span class="text-accent text-lg font-semibold uppercase tracking-widest block mb-4"><?php echo $motto; ?></span>
                <h1 class="text-4xl sm:text-6xl lg:text-7xl font-extrabold leading-tight tracking-tighter mb-8 text-dark-text">
                    <?php echo $main_headline; ?>
                </h1>
                <p class="max-w-3xl mx-auto text-xl text-gray-600 mb-12">
                    <?php echo $sub_headline; ?>
                </p>
                <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-6">
                    <a href="#solutions" class="inline-flex items-center px-8 py-3 border border-transparent text-base font-medium rounded-full shadow-xl text-white bg-accent hover:bg-opacity-90 transition duration-300 transform hover:scale-105">
                        Explore Our Full Suite of Solutions
                    </a>
                    <a href="#portfolio" class="inline-flex items-center px-8 py-3 border border-gray-300 text-base font-medium rounded-full text-dark-text bg-white hover:bg-gray-100 transition duration-300 transform hover:scale-105">
                        See Featured Client Projects &rarr;
                    </a>
                </div>
            </div>
        </section>

        <!-- Solutions section removed per request: keeping page focused on Case Studies -->
        
        <!-- PORTFOLIO SECTION: New user-centric split layout -->
        <section id="portfolio" class="py-20 sm:py-24 bg-F9FAFB">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-10">
                    <h2 class="text-4xl font-extrabold text-dark-text mb-4">Case Studies</h2>
                    <p class="max-w-3xl mx-auto text-lg text-gray-600">
                        Explore a curated set of case studies that show how we delivered measurable outcomes for our clients. Use the filters to drill into specific capabilities.
                    </p>
                </div>
                
                <!-- Portfolio 3D Visualization (kept full width above the split content) -->
                <!-- <div id="portfolio-3d-container" class="relative hidden lg:block mb-12 rounded-xl border border-gray-200">
                    <canvas id="portfolio-3d-canvas" class="w-full h-full"></canvas>
                    <div id="loading-overlay" class="absolute inset-0 bg-transparent flex items-center justify-center text-lg text-gray-700">
                        <div style="background:rgba(255,255,255,0.85); padding:8px 14px; border-radius:8px; box-shadow:0 6px 18px rgba(15,23,42,0.06);">Loading 3D Portfolio Interactions...</div>
                    </div>
                </div> -->

                <!-- MAIN PORTFOLIO SPLIT CONTENT -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 mt-16">
                    
                    <!-- LEFT: Filter Sidebar (col-span-3) -->
                    <div class="lg:col-span-3">
                        <h3 class="text-2xl font-bold text-dark-text mb-6 pb-3 border-b border-gray-200">Capabilities</h3>
                        <div id="filter-tabs" class="flex flex-col gap-3">
                            <?php foreach ($categories as $category): ?>
                                <button class="filter-btn <?php echo ($category === 'All Projects') ? 'active' : ''; ?>" data-category="<?php echo $category; ?>">
                                    <span><?php echo $category; ?></span>
                                    <!-- Use a small count placeholder for better UI -->
                                    <span class="count">
                                        <?php echo ($category === 'All Projects') ? count($projects) : count(array_filter($projects, fn($p) => $p['category'] === $category)); ?>
                                    </span>
                                </button>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- RIGHT: Project Cards (col-span-9) -->
                    <div class="lg:col-span-9">
                        <div id="project-cards-container" class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">
                            <!-- Project cards rendered by JavaScript -->
                        </div>
                    </div>

                </div>
            </div>
        </section>
        
        <section class="bg-accent py-20 sm:py-24 text-white text-center">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-4xl font-extrabold mb-6 leading-tight">Ready to Build Something Extraordinary?</h2>
                <p class="text-xl opacity-90 mb-10">
                    Join forces with Beetle & Ant Co. and let's transform your vision into high-performing, scalable software solutions.
                </p>
                <a href="mailto:<?php echo $contact_email; ?>" class="inline-flex items-center px-8 py-4 border border-transparent text-lg font-bold rounded-full shadow-lg text-accent bg-white hover:bg-gray-100 transition duration-300 transform hover:scale-105">
                    Start Your Project Today &rarr;
                </a>
            </div>
        </section>

    </main>

    <!-- <footer class="bg-dark-text text-gray-400 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
                <a href="#" class="text-2xl font-extrabold tracking-tight text-white mb-4 block">
                    <span class="text-accent text-3xl font-black mr-2">&lt;/&gt;</span>
                    <?php echo $company_name; ?>
                </a>
                <p class="text-sm"><?php echo $motto; ?></p>
                <p class="text-sm mt-4">&copy; <?php echo date("Y"); ?> <?php echo $company_name; ?>. All rights reserved.</p>
            </div>

            <div>
                <h3 class="text-lg font-semibold text-white mb-4">Quick Links</h3>
                <ul class="space-y-2">
                    <?php foreach ($nav_items as $item): ?>
                        <li><a href="<?php echo $item['href']; ?>" class="hover:text-white transition duration-300"><?php echo $item['title']; ?></a></li>
                    <?php endforeach; ?>
                    <li><a href="#" class="hover:text-white transition duration-300">Privacy Policy</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-lg font-semibold text-white mb-4">Contact</h3>
                <p class="text-sm">123 Digital Ave, Tech City, Global 01234</p>
                <p class="text-sm mt-2">Email: <a href="mailto:<?php echo $contact_email; ?>" class="hover:text-white transition duration-300"><?php echo $contact_email; ?></a></p>
                <p class="text-sm mt-2">Phone: +1 (555) 123-4567</p>
            </div>
        </div>
    </footer> -->
    <?php include './partials/footer.php' ?>
    <script>
        // --- JAVASCRIPT FOR 3D PORTFOLIO VIEW, HERO MAP, FILTERING, AND SCROLL EFFECT ---

        const projectsData = <?php echo $projects_json; ?>;
        const projectCardsContainer = document.getElementById('project-cards-container');
        const filterTabs = document.getElementById('filter-tabs');
        const raycaster = new THREE.Raycaster();
        const mouse = new THREE.Vector2();
        
        let filteredProjects = projectsData;
        let scene, camera, renderer, projectsGroup, particleSystem;
        let mouseX = 0, mouseY = 0;
        let INTERSECTED = null;
        const portfolioContainer = document.getElementById('portfolio-3d-container');
        const portfolioCanvas = document.getElementById('portfolio-3d-canvas');
        const loadingOverlay = document.getElementById('loading-overlay');
    const PROJECT_SIZE = 0.9;
        const ACCENT_COLOR = 0x6B21A8; // Deep Purple Accent
    // Color for the map dots (Black for strong contrast against the light background)
    const MAP_DOT_COLOR = 0x000000;

        // --- HERO VOXEL MAP VARIABLES ---
        let heroScene, heroCamera, heroRenderer, voxelMapObject;
        const heroContainer = document.getElementById('hero-map-container');
        const heroCanvas = document.getElementById('hero-map-canvas');


        // --- HERO PARTICLE MAP 3D INITIALIZATION AND LOGIC (Particle World Map for Continent Visibility) ---

        /**
         * Creates a particle-based 3D map where particles are clustered 
         * into shapes that roughly approximate the world's continents.
         * Includes improved shapes for Africa, Asia, and Europe visibility.
         */
        function createParticleMap() {
            const mapGroup = new THREE.Group();

            // Determine particle count responsively (fewer on small screens) - reduced overall density
            // Use lower counts to create larger spacing between dots (Accenture-like dotted continents)
            let baseCount = 1000; // lower baseline for clearer dot spacing
            try {
                const w = Math.max(heroContainer.clientWidth || 0, window.innerWidth || 0);
                if (w < 600) baseCount = 450;
                else if (w < 900) baseCount = 700;
                else if (w < 1400) baseCount = 900;
                else baseCount = 1100;
            } catch (e) {
                baseCount = 1200;
            }
            const particleCount = baseCount;

            // Define abstract continent zones in 3D space (approximating global layout)
            // Radii increased slightly so the same number of points are spread wider.
            const continentZones = [
                { centerX: -9, centerY: 1, centerZ: 0, radiusX: 5.5, radiusY: 7.0, radiusZ: 2.2 }, // North America
                { centerX: -6, centerY: -5, centerZ: 0.5, radiusX: 3.8, radiusY: 7.5, radiusZ: 2.0 }, // South America
                { centerX: 1, centerY: -1.5, centerZ: 0, radiusX: 5.5, radiusY: 7.5, radiusZ: 2.8 },  // Africa
                { centerX: 0.5, centerY: 4.5, centerZ: 0, radiusX: 4.5, radiusY: 3.5, radiusZ: 2.0 },   // Europe
                { centerX: 6.5, centerY: 3.2, centerZ: 0, radiusX: 11, radiusY: 8.0, radiusZ: 4.5 },    // Asia
                { centerX: 9, centerY: -6.5, centerZ: 0, radiusX: 3.8, radiusY: 3.8, radiusZ: 1.8 },    // Australia
            ];

            // Helper: approximate 'volume' to distribute particle counts proportionally
            const volumes = continentZones.map(z => (z.radiusX * z.radiusY * z.radiusZ));
            const totalVolume = volumes.reduce((s, v) => s + v, 0);

            // Build positions array by sampling near the ellipsoid surface (shell sampling)
            // This produces outlines/contours instead of solid filled blobs.
            const positions = [];
            for (let i = 0; i < continentZones.length; i++) {
                const zone = continentZones[i];
                // Proportional count but slightly reduced to emphasize spacing
                const zoneCount = Math.round(particleCount * (volumes[i] / totalVolume));

                for (let j = 0; j < zoneCount; j++) {
                    // Spherical coordinates -> unit vector
                    const u = Math.random();
                    const v = Math.random();
                    const theta = Math.acos(2 * u - 1);
                    const phi = 2 * Math.PI * v;
                    const ux = Math.sin(theta) * Math.cos(phi);
                    const uy = Math.sin(theta) * Math.sin(phi);
                    const uz = Math.cos(theta);

                    // Thickness: bias sampling near the surface to emphasize outlines (0.88 - 1.02)
                    const thickness = 0.88 + Math.random() * 0.14;

                    const x = zone.centerX + ux * zone.radiusX * thickness;
                    const y = zone.centerY + uy * zone.radiusY * thickness;
                    const z = zone.centerZ + uz * zone.radiusZ * (0.8 + Math.random() * 0.4);

                    positions.push(x, y, z);
                }
            }

            const geometry = new THREE.BufferGeometry();
            geometry.setAttribute('position', new THREE.Float32BufferAttribute(positions, 3));

            // Create a small square texture so points render as neat little boxes
            function createSquareTexture(size = 6, color = '#000') {
                const canvas = document.createElement('canvas');
                canvas.width = size;
                canvas.height = size;
                const ctx = canvas.getContext('2d');
                ctx.fillStyle = color;
                ctx.fillRect(0, 0, size, size);
                const texture = new THREE.CanvasTexture(canvas);
                texture.needsUpdate = true;
                return texture;
            }

            const squareTex = createSquareTexture(10, '#000');

            const material = new THREE.PointsMaterial({
                size: 0.48,            // larger so dots read clearly at hero scale
                map: squareTex,
                alphaTest: 0.08,
                transparent: true,
                opacity: 0.42,         // slightly stronger so continents are visible
                depthWrite: false,
                // Use the accent color so the dots match the brand palette
                color: new THREE.Color(0x7C3AED),
                sizeAttenuation: true,
                blending: THREE.NormalBlending
            });

            // Expose for quick debugging/tweaks from the browser console
            try { window.heroParticleMaterial = material; window.heroMapGroup = mapGroup; } catch (e) {}

            const particles = new THREE.Points(geometry, material);
            mapGroup.add(particles);

            return mapGroup;
        }


        function onHeroMapResize() {
            if (heroCamera && heroRenderer && heroContainer) {
                const width = heroContainer.clientWidth;
                const height = heroContainer.clientHeight;
                heroCamera.aspect = width / height;
                heroCamera.updateProjectionMatrix();
                // clamp DPR to avoid excessive GPU use on high-DPI devices
                heroRenderer.setPixelRatio(Math.min(window.devicePixelRatio || 1, 1.5));
                heroRenderer.setSize(width, height);
            }
        }

        function initHeroMap() {
            if (!heroContainer || !heroCanvas) return;

            heroScene = new THREE.Scene();
            heroCamera = new THREE.PerspectiveCamera(50, heroContainer.clientWidth / heroContainer.clientHeight, 0.1, 100);
            
            heroRenderer = new THREE.WebGLRenderer({ canvas: heroCanvas, antialias: true, alpha: true });
            heroRenderer.setSize(heroContainer.clientWidth, heroContainer.clientHeight);
            // clamp pixel ratio to avoid excessive GPU work on high-DPI displays
            heroRenderer.setPixelRatio(Math.min(window.devicePixelRatio || 1, 1.5));
            heroRenderer.setClearColor(0x000000, 0); // Transparent background

            // Position camera to frame the continent outlines; bring it closer so the outlines read larger
            heroCamera.position.z = 20;
            heroCamera.position.y = -1;

            voxelMapObject = createParticleMap();
            // Scale the whole continent group so outlines are larger in the hero area
            voxelMapObject.scale.set(2.2, 2.2, 2.2);
            // Lower the whole map slightly so dots appear behind the headline and not the header
            voxelMapObject.position.y = -1.6;
            heroScene.add(voxelMapObject);

            // Give the group a gentle tilt so continents read more like a map
            voxelMapObject.rotation.x = 0.6;

            const ambientLight = new THREE.AmbientLight(0xffffff, 1.0);
            heroScene.add(ambientLight);

            const dirLight = new THREE.DirectionalLight(0xffffff, 0.5);
            dirLight.position.set(5, 10, 5);
            heroScene.add(dirLight);

            window.addEventListener('resize', onHeroMapResize);
        }

        // Responsive toggle: prefer SVG on small/mobile screens to save CPU and ensure legibility.
        let heroPreferSVG = false; // external override (dev/accessibility)
        let heroRunning = true; // track whether hero animation should run

        function updateHeroCanvasVisibility() {
            const canvas = document.getElementById('hero-map-canvas');
            const svg = document.getElementById('hero-continent-svg');
            const useSVG = window.innerWidth <= 768 || heroPreferSVG === true;
            if (canvas) canvas.style.display = useSVG ? 'none' : 'block';
            if (svg) svg.style.display = useSVG ? 'block' : 'none';

            // Pause or resume render loop for hero map
            if (useSVG) {
                heroRunning = false;
            } else {
                if (!heroRunning) {
                    heroRunning = true;
                    // kick the hero animation by calling animate if main loop isn't active
                    // animate() checks heroRunning before rendering heroScene
                }
            }
        }

        // Trigger initial visibility and keep in sync on resize
        window.addEventListener('resize', function () {
            updateHeroCanvasVisibility();
        });

        // small delayed call to ensure canvases are present
        setTimeout(updateHeroCanvasVisibility, 60);


        // --- 1. Project Card Rendering Function (Improved Card Aesthetics) ---

        function renderProjectCards(projects) {
            projectCardsContainer.innerHTML = '';
            
            if (projects.length === 0) {
                projectCardsContainer.innerHTML = '<p class="text-xl text-gray-500 lg:col-span-3 py-10 text-center">No projects found for this category. Try "All Projects"!</p>';
                return;
            }

            projects.forEach(project => {
                const card = document.createElement('div');
                card.className = 'project-card';
                card.innerHTML = `
                    <div class="project-image-wrap">
                        <img src="${project.image_url}" alt="${project.project_title}" class="w-full h-56 object-cover transition duration-500 group-hover:scale-[1.02]" onerror="this.onerror=null;this.src='https://placehold.co/800x450/F3F4F6/0F172A?text=Project+Image';">
                        <div class="project-image-overlay"></div>
                        <div class="project-image-meta">
                            <div class="chip">${project.industry}</div>
                        </div>
                    </div>

                    <div class="p-5 flex flex-col justify-between h-full">
                        <div>
                            <span class="text-sm font-semibold uppercase text-muted block mb-1">${project.client}</span>
                            <h3 class="text-xl font-semibold text-dark-text mb-2 leading-snug">${project.project_title}</h3>
                            <p class="text-sm text-muted mb-5 line-clamp-2">${project.description}</p>
                        </div>

                        <div class="mt-auto project-stat">
                            <div>
                                <p class="statistic">${project.result_statistic}</p>
                                <p class="label text-xs text-muted">${project.result_label}</p>
                            </div>
                            <a href="#" class="cta-link">${project.cta} &rarr;</a>
                        </div>
                    </div>
                `;
                projectCardsContainer.appendChild(card);
            });
        }

        // --- 2. Filtering Logic (Updated for Vertical Sidebar) ---

        function handleFilterClick(event) {
            const button = event.target.closest('.filter-btn');
            if (!button) return;

            // Remove active class from all buttons
            document.querySelectorAll('.filter-btn').forEach(btn => btn.classList.remove('active'));
            // Add active class to the clicked button
            button.classList.add('active');

            const category = button.dataset.category;
            
            if (category === "All Projects") {
                filteredProjects = projectsData;
            } else {
                filteredProjects = projectsData.filter(p => p.category === category);
            }

            renderProjectCards(filteredProjects);
            // Update the 3D cubes to reflect the filtered set
            update3DScene(filteredProjects);
        }

        filterTabs.addEventListener('click', handleFilterClick);
        // Initial render on load
        renderProjectCards(filteredProjects);


        // --- 3. Portfolio Three.js View Implementation ---

        function createProjectCube(project, index, total) {
            // Cube geometry
            const geometry = new THREE.BoxGeometry(PROJECT_SIZE, PROJECT_SIZE, PROJECT_SIZE);
            const material = new THREE.MeshStandardMaterial({
                color: ACCENT_COLOR,
                metalness: 0.05, // less shiny
                roughness: 0.85, // rougher surface
                emissive: 0x000000,
                transparent: true,
                opacity: 0.85,
            });
            const cube = new THREE.Mesh(geometry, material);
            
            // Arrange in a rotating circle
            const radius = 5;
            const angle = (index / total) * Math.PI * 2;
            cube.position.x = radius * Math.sin(angle);
            cube.position.z = radius * Math.cos(angle);
            
            cube.userData.initialY = Math.sin(angle * 2) * 1; 
            cube.userData.initialAngle = angle;
            cube.position.y = cube.userData.initialY; 

            cube.userData.project = project;
            cube.userData.originalColor = cube.material.color.getHex();
            
            return cube;
        }

        function createParticleSystem() {
            const particleCount = 500;
            const geometry = new THREE.BufferGeometry();
            const positions = [];
            const colors = [];

            // Use a subtle bluish-gray so background particles don't distract
            const color = new THREE.Color(0x9aa7bf);

            for (let i = 0; i < particleCount; i++) {
                const x = (Math.random() - 0.5) * 20;
                const y = (Math.random() - 0.5) * 10;
                const z = (Math.random() - 0.5) * 20;
                positions.push(x, y, z);
                
                colors.push(color.r, color.g, color.b);
            }

            geometry.setAttribute('position', new THREE.Float32BufferAttribute(positions, 3));
            geometry.setAttribute('color', new THREE.Float32BufferAttribute(colors, 3));

            const material = new THREE.PointsMaterial({
                size: 0.03,
                vertexColors: true,
                transparent: true,
                opacity: 0.35,
                blending: THREE.NormalBlending,
                sizeAttenuation: true
            });

            particleSystem = new THREE.Points(geometry, material);
            scene.add(particleSystem);
        }


        function init3D() {
            // Only initialize if the container is present (i.e., on desktop/lg screens)
            if (!portfolioContainer || !portfolioCanvas) return;
            if (portfolioContainer.clientWidth === 0) return; // Skip if hidden

            scene = new THREE.Scene();
            camera = new THREE.PerspectiveCamera(75, portfolioContainer.clientWidth / portfolioContainer.clientHeight, 0.1, 1000);
            
            renderer = new THREE.WebGLRenderer({ canvas: portfolioCanvas, antialias: true, alpha: true });
            renderer.setSize(portfolioContainer.clientWidth, portfolioContainer.clientHeight);
            renderer.setPixelRatio(window.devicePixelRatio);
            renderer.setClearColor(0x000000, 0); 

            const ambientLight = new THREE.AmbientLight(0xffffff, 2.0);
            scene.add(ambientLight);

            const directionalLight = new THREE.DirectionalLight(0xffffff, 4);
            directionalLight.position.set(10, 10, 10);
            scene.add(directionalLight);
            
            const directionalLight2 = new THREE.DirectionalLight(0xffffff, 2);
            directionalLight2.position.set(-10, -5, -10);
            scene.add(directionalLight2);

            projectsGroup = new THREE.Group();
            scene.add(projectsGroup);
            camera.position.z = 10;
            camera.position.y = 2;
            
            // grid helper intentionally omitted to keep the 3D scene visually blended with the page

            createParticleSystem();

            update3DScene(projectsData);
            
            window.addEventListener('resize', onWindowResize);
            portfolioContainer.addEventListener('mousemove', onContainerMouseMove);
            
            loadingOverlay.style.display = 'none';
        }

        function onWindowResize() {
            // Portfolio resize handler
            const pWidth = portfolioContainer.clientWidth;
            const pHeight = portfolioContainer.clientHeight;
            if (pWidth > 0 && pHeight > 0) {
                 camera.aspect = pWidth / pHeight;
                 camera.updateProjectionMatrix();
                 renderer.setSize(pWidth, pHeight);
            }
            
            // Hero map resize is handled by onHeroMapResize
            onHeroMapResize();
        }

        function onContainerMouseMove(event) {
            const rect = portfolioContainer.getBoundingClientRect();
            mouse.x = ((event.clientX - rect.left) / rect.width) * 2 - 1;
            mouse.y = -((event.clientY - rect.top) / rect.height) * 2 + 1;
            
            mouseX = mouse.x;
            mouseY = mouse.y;
        }

        function update3DScene(projects) {
            // Clear existing projects
            while(projectsGroup.children.length > 0){
                projectsGroup.remove(projectsGroup.children[0]);
            }

            // Create new cubes for filtered projects
            projects.forEach((project, index) => {
                const cube = createProjectCube(project, index, projects.length);
                projectsGroup.add(cube);
            });
        }
        
        // Raycasting for hover/interaction
        function checkInteractions() {
            if (!camera) return;
            raycaster.setFromCamera(mouse, camera);
            const intersects = raycaster.intersectObjects(projectsGroup.children, true);

            if (intersects.length > 0) {
                const newIntersected = intersects[0].object;

                if (newIntersected !== INTERSECTED) {
                    if (INTERSECTED) {
                        INTERSECTED.material.emissive.setHex(0x000000);
                        INTERSECTED.scale.set(1, 1, 1);
                    }
                    
                    INTERSECTED = newIntersected;
                    
                    // Apply hover effect: glow and slight scale increase
                    INTERSECTED.material.emissive.setHex(0x8844FF); // Bright blue/purple glow
                    INTERSECTED.scale.set(1.2, 1.2, 1.2);
                }
            } else {
                if (INTERSECTED) {
                    INTERSECTED.material.emissive.setHex(0x000000);
                    INTERSECTED.scale.set(1, 1, 1);
                }
                INTERSECTED = null;
            }
        }

        function animate() {
            requestAnimationFrame(animate);
            const time = Date.now() * 0.001;

            // --- 1. Hero Voxel Map Animation & Rendering ---
            if (voxelMapObject && heroRenderer && heroRunning) {
                // gentle self-rotation for texture/readability
                voxelMapObject.rotation.z += 0.00015;

                // slow spin around Y to give a globe-like turn
                voxelMapObject.rotation.y += 0.0012; // slow yaw

                // subtle vertical bobbing to add life
                voxelMapObject.position.y = Math.sin(time * 0.45) * 0.45;

                // smooth circular orbit (small radius) so continents appear to revolve
                const orbitRadius = 0.6; // small radius so the group orbits subtly
                const orbitSpeed = 0.035; // radians per second — slow
                const orbitAngle = time * orbitSpeed;
                voxelMapObject.position.x = Math.cos(orbitAngle) * orbitRadius;
                voxelMapObject.position.z = Math.sin(orbitAngle) * orbitRadius * 0.25; // damp Z movement for perspective

                heroRenderer.render(heroScene, heroCamera);
            }

            // --- 2. Portfolio Scene Animation & Rendering ---
            if (projectsGroup && renderer) {
                projectsGroup.rotation.y += 0.005;

                projectsGroup.children.forEach((cube, index) => {
                    cube.position.y = cube.userData.initialY + Math.sin(time + cube.userData.initialAngle * 5) * 0.3;
                    cube.rotation.x += 0.01;
                    cube.rotation.y += 0.015;
                });
                
                if (particleSystem) {
                    particleSystem.rotation.y += 0.001;
                    particleSystem.rotation.x += 0.0005;
                }

                checkInteractions();

                const targetX = mouseX * 0.8;
                const targetY = mouseY * 0.8;

                camera.position.x += (targetX - camera.position.x) * 0.03;
                camera.position.y += (targetY + 2 - camera.position.y) * 0.03;
                camera.lookAt(0, 0, 0);

                renderer.render(scene, camera);
            }
        }

        // --- 4. Scroll Header Shrink Effect and Map Rotation ---

        const header = document.querySelector('header');
        const logoText = document.getElementById('logo-text');
        const logoIcon = document.getElementById('logo-icon');

        function handleScroll() {
            const scrollY = window.scrollY;
            // Guard against missing header/logo elements (prevents "Cannot read properties of null")
            const isScrolled = scrollY > 50;

            if (header && header.classList) {
                if (isScrolled) header.classList.add('scrolled');
                else header.classList.remove('scrolled');
            }

            if (logoText && logoText.classList) {
                if (isScrolled) {
                    logoText.classList.remove('text-2xl', 'sm:text-3xl');
                    logoText.classList.add('text-xl', 'sm:text-2xl');
                } else {
                    logoText.classList.remove('text-xl', 'sm:text-2xl');
                    logoText.classList.add('text-2xl', 'sm:text-3xl');
                }
            }

            if (logoIcon && logoIcon.classList) {
                if (isScrolled) {
                    logoIcon.classList.remove('text-3xl');
                    logoIcon.classList.add('text-2xl');
                } else {
                    logoIcon.classList.remove('text-2xl');
                    logoIcon.classList.add('text-3xl');
                }
            }

            // Voxel Map Rotation Logic - adjust speed/range as needed
            if (voxelMapObject) {
                voxelMapObject.rotation.y = scrollY * 0.001; 
                voxelMapObject.rotation.x = scrollY * -0.0002; 
            }
        }

        window.addEventListener('scroll', handleScroll);
        handleScroll();


        // Initialize all 3D scenes on window load
        window.onload = function () {
            initHeroMap(); 
            init3D(); 
            animate(); 
        }

        // Allow devs or accessibility settings to force SVG usage
        window.setHeroPreferSVG = function (flag) {
            heroPreferSVG = !!flag;
            updateHeroCanvasVisibility();
        }

    </script>
</body>
</html>
