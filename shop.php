<?php
// --- PHP DATA DEFINITION ---
// Array of mock photos with different sizes defined by Tailwind classes
$photos = [
    // FEATURED (Massive)
    [ 'name' => "Urban Sunrise", 'photographer' => "Alex K.", 'price' => "\$299", 'isFeatured' => true, 'class' => "col-span-2 row-span-3", 'imageText' => "FEATURED EDITORIAL" ],
    // Tall/Vertical
    [ 'name' => "Abstract Geometry", 'photographer' => "Sam B.", 'price' => "\$149", 'isFeatured' => false, 'class' => "col-span-1 lg:col-span-1 row-span-2", 'imageText' => "TALL COMPOSITION" ],
    // Small Square 1
    // [ 'name' => "Desert Bloom", 'photographer' => "Kyle W.", 'price' => "\$79", 'isFeatured' => false, 'class' => "col-span-1 row-span-1", 'imageText' => "SQUARE 1" ],
    // Medium Wide (Taller now)
    [ 'name' => "Coastal Fog", 'photographer' => "Mia R.", 'price' => "\$189", 'isFeatured' => false, 'class' => "col-span-2 row-span-2", 'imageText' => "WIDE LANDSCAPE" ],
    
    [ 'name' => "High-Rise View", 'photographer' => "Tess A.", 'price' => "\$120", 'isFeatured' => false, 'class' => "col-span-1 lg:col-span-1 row-span-2", 'imageText' => "CITYSCAPE" ],
    // Small Square 2
    // [ 'name' => "Forest Retreat", 'photographer' => "Jane D.", 'price' => "\$79", 'isFeatured' => false, 'class' => "col-span-1 row-span-1", 'imageText' => "SQUARE 2" ],
    // Medium Square
    // [ 'name' => "Astro Light", 'photographer' => "Juno V.", 'price' => "\$159", 'isFeatured' => false, 'class' => "col-span-2 row-span-2", 'imageText' => "MEDIUM SQUARE" ],
    // Medium Wide (Taller now)
    [ 'name' => "Golden Hour", 'photographer' => "Rita M.", 'price' => "\$169", 'isFeatured' => false, 'class' => "col-span-2 row-span-2", 'imageText' => "WIDE PORTRAIT" ],
    [ 'name' => "High-Rise View", 'photographer' => "Tess A.", 'price' => "\$120", 'isFeatured' => false, 'class' => "col-span-1 lg:col-span-1 row-span-2", 'imageText' => "CITYSCAPE" ],
    // Small Square 3
    // [ 'name' => "Mountain Peak", 'photographer' => "Leo C.", 'price' => "\$79", 'isFeatured' => false, 'class' => "col-span-1 row-span-1", 'imageText' => "SQUARE 3" ],
    // Tall/Vertical 2
    // [ 'name' => "High-Rise View", 'photographer' => "Tess A.", 'price' => "\$120", 'isFeatured' => false, 'class' => "col-span-1 lg:col-span-1 row-span-2", 'imageText' => "CITYSCAPE" ],
    // Medium Square
    // [ 'name' => "Neon City Lights", 'photographer' => "Zoe L.", 'price' => "\$110", 'isFeatured' => false, 'class' => "col-span-1 row-span-1", 'imageText' => "NIGHT PHOTO" ],

        // [ 'name' => "High-Rise View", 'photographer' => "Tess A.", 'price' => "\$120", 'isFeatured' => false, 'class' => "col-span-1 lg:col-span-1 row-span-2", 'imageText' => "CITYSCAPE" ],
 [ 'name' => "Urban Sunrise", 'photographer' => "Alex K.", 'price' => "\$299", 'isFeatured' => true, 'class' => "col-span-2 row-span-3", 'imageText' => "FEATURED EDITORIAL" ],
    // Tall/Vertical
    [ 'name' => "Abstract Geometry", 'photographer' => "Sam B.", 'price' => "\$149", 'isFeatured' => false, 'class' => "col-span-1 lg:col-span-1 row-span-2", 'imageText' => "TALL COMPOSITION" ],
    // Small Square 1
    // [ 'name' => "Desert Bloom", 'photographer' => "Kyle W.", 'price' => "\$79", 'isFeatured' => false, 'class' => "col-span-1 row-span-1", 'imageText' => "SQUARE 1" ],
    // Medium Wide (Taller now)
    [ 'name' => "Coastal Fog", 'photographer' => "Mia R.", 'price' => "\$189", 'isFeatured' => false, 'class' => "col-span-2 row-span-2", 'imageText' => "WIDE LANDSCAPE" ],
    
    [ 'name' => "High-Rise View", 'photographer' => "Tess A.", 'price' => "\$120", 'isFeatured' => false, 'class' => "col-span-1 lg:col-span-1 row-span-1", 'imageText' => "CITYSCAPE" ],
    // Small Square 2
    // [ 'name' => "Forest Retreat", 'photographer' => "Jane D.", 'price' => "\$79", 'isFeatured' => false, 'class' => "col-span-1 row-span-1", 'imageText' => "SQUARE 2" ],
    // Medium Square
    // [ 'name' => "Astro Light", 'photographer' => "Juno V.", 'price' => "\$159", 'isFeatured' => false, 'class' => "col-span-2 row-span-2", 'imageText' => "MEDIUM SQUARE" ],
    // Medium Wide (Taller now)
    [ 'name' => "Golden Hour", 'photographer' => "Rita M.", 'price' => "\$169", 'isFeatured' => false, 'class' => "col-span-2 row-span-2", 'imageText' => "WIDE PORTRAIT" ],
    [ 'name' => "High-Rise View", 'photographer' => "Tess A.", 'price' => "\$120", 'isFeatured' => false, 'class' => "col-span-1 lg:col-span-1 row-span-2", 'imageText' => "CITYSCAPE" ],
    // Small Square 3
    // [ 'name' => "Mountain Peak", 'photographer' => "Leo C.", 'price' => "\$79", 'isFeatured' => false, 'class' => "col-span-1 row-span-1", 'imageText' => "SQUARE 3" ],
    // Tall/Vertical 2
    // [ 'name' => "High-Rise View", 'photographer' => "Tess A.", 'price' => "\$120", 'isFeatured' => false, 'class' => "col-span-1 lg:col-span-1 row-span-2", 'imageText' => "CITYSCAPE" ],
    // Medium Square
    // [ 'name' => "Neon City Lights", 'photographer' => "Zoe L.", 'price' => "\$110", 'isFeatured' => false, 'class' => "col-span-1 row-span-1", 'imageText' => "NIGHT PHOTO" ],

        // [ 'name' => "High-Rise View", 'photographer' => "Tess A.", 'price' => "\$120", 'isFeatured' => false, 'class' => "col-span-1 lg:col-span-1 row-span-2", 'imageText' => "CITYSCAPE" ],
];

// --- PAGINATION CONFIGURATION ---
$perPage = 6; // photos per page
$totalPhotos = count($photos);
$totalPages = ceil($totalPhotos / $perPage);
$currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$currentPage = max(1, min($currentPage, $totalPages));
$start = ($currentPage - 1) * $perPage;
$paginatedPhotos = array_slice($photos, $start, $perPage);
?>

<!DOCTYPE html>
<html lang="en">
    <?php include './partials/head.php' ?>

<body class="bg-[#ffffff] min-h-screen antialiased ">
<script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Apply Inter font globally and ensure smoother transitions */
        :root {
            font-family: 'Inter', sans-serif;
        }
        /* Custom styling to ensure the staggered grid works visually */
        .photo-grid {
            /* Use dense packing algorithm for the masonry effect */
            grid-auto-rows: minmax(180px, auto); /* Increased minimum row height for impact */
            grid-auto-flow: row dense;
        }
        /* Backdrop blur for a "frosted glass" effect on hover */
        .backdrop-blur-sm {
            backdrop-filter: blur(4px);
            -webkit-backdrop-filter: blur(4px);
        }
    </style>
    <script>
        // --- JAVASCRIPT CONFIGURATION AND UTILITIES ---
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary': '#F59E0B', /* Rich Gold/Amber Accent */
                        'primary-dark': '#D97706', /* Darker Gold for hover */
                        'surface': '#111827', /* Deep Slate Body Background */
                        'card': '#1F2937', /* Dark Charcoal Card Background */
                    },
                }
            }
        }

        // Simple non-intrusive notification for sales actions (Client-side)
        function notifyAction(photoName, action) {
            const messageBox = document.getElementById('message-box');
            messageBox.textContent = `${photoName} ${action}.`;
            messageBox.classList.remove('hidden');
            messageBox.classList.add('bg-primary', 'opacity-100', 'shadow-2xl');

            setTimeout(() => {
                messageBox.classList.remove('opacity-100');
                messageBox.classList.add('opacity-0');
                setTimeout(() => {
                    messageBox.classList.add('hidden');
                }, 300);
            }, 1800);
        }
    </script>
  
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
    font-size: 30px;
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
    font-size: 24px; /* Slightly smaller than the main text */
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
 
<!-- MAIN GALLERY SECTION -->
<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-20">
    <!-- Title Section -->
    <div class="mb-16 text-center">
        <h1 class="text-5xl sm:text-6xl font-extrabold text-black mb-4 tracking-tight">The Gallery: Limited Edition</h1>
        <p class="text-xl text-gray-400 max-w-4xl mx-auto font-light">
            Discover masterfully captured moments from around the world. Each print is numbered, signed, and ready to elevate your space.
        </p>
        <div class="h-1 bg-primary w-24 mx-auto mt-6 rounded-full"></div>
    </div>

    <!-- Dynamic Photo Grid -->
    <section id="photo-grid" class="photo-grid grid grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8">
        <?php foreach ($paginatedPhotos as $photo) : ?>
            <?php
                $featured_class = $photo['isFeatured'] ? 'from-primary/30 to-card' : 'from-gray-700/50 to-card';
                $featured_badge = $photo['isFeatured'] ?
                    '<span class="absolute top-4 left-4 bg-primary text-card text-xs font-bold px-4 py-1 rounded-full shadow-lg uppercase tracking-wider">Editor\'s Pick</span>' : '';
                $buy_action = "notifyAction('" . $photo['name'] . "', 'added to collection')";
            ?>

          <div class="photo-card relative bg-card rounded-xl shadow-2xl overflow-hidden group transition duration-500 ease-in-out hover:shadow-primary/50 hover:scale-[1.03] <?= $photo['class'] ?>">
    <!-- Gradient background -->
    <div class="h-full w-full flex items-center justify-center p-2 bg-gradient-to-br <?= $featured_class ?> relative z-0">
        <span class="text-xl lg:text-3xl font-light text-gray-500 opacity-60 uppercase tracking-widest text-center px-4"><?= $photo['imageText'] ?></span>
    </div>

    <!-- Hover Overlay -->
    <div class="absolute inset-0  flex flex-col justify-end p-6 transition-opacity opacity-0 group-hover:opacity-100 duration-500 backdrop-blur-sm z-10">
        <h3 class="text-2xl font-bold text-white mb-1 leading-tight"><?= $photo['name'] ?></h3>
        <p class="text-sm text-gray-400 mb-4">Photography by <?= $photo['photographer'] ?></p>
        <div class="flex justify-between items-center">
            <p class="text-3xl font-extrabold text-primary"><?= $photo['price'] ?></p>
            <button onclick="<?= $buy_action ?>"
                class="bg-primary text-card py-2 px-6 rounded-full font-semibold text-sm 
                       hover:bg-primary-dark transition duration-300 shadow-lg focus:outline-none focus:ring-4 focus:ring-primary/50 uppercase tracking-wider">
                Buy Print
            </button>
        </div>
        <?= $featured_badge ?>
    </div>
</div>

        <?php endforeach; ?>
    </section>

    <!-- Pagination -->
    <div class="flex justify-center mt-12 space-x-3">
        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <a href="?page=<?= $i ?>"
               class="px-4 py-2 rounded-full border border-gray-300 text-gray-700 
                      hover:bg-primary hover:text-white transition duration-200 
                      <?= $i == $currentPage ? 'bg-primary text-white shadow-lg' : '' ?>">
                <?= $i ?>
            </a>
        <?php endfor; ?>
    </div>
</main>

<!-- Notification Toast -->
<div id="message-box"
     class="fixed bottom-6 right-6 px-6 py-3 text-white rounded-lg shadow-lg opacity-0 hidden transition-opacity duration-300">
</div>


<?php include './partials/footer.php' ?>
</body>
</html>
