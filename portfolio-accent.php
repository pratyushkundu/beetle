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
    ["title" => "Sectors We Serve", "href" => "#sectors"],
    ["title" => "Insights & Research", "href" => "#insights"],
    ["title" => "About Us", "href" => "#about"],
    ["title" => "Careers", "href" => "#careers"]
];

// Core Offerings Section Data
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

// Focus Areas Section Data
$focus_areas = [
    [
        "title" => "Generative AI Integration",
        "statistic" => "70%",
        "label" => "of workflows automated",
        "summary" => "Deploy bespoke GenAI solutions to automate workflows and unlock unprecedented efficiency.",
        "cta" => "Read White Paper"
    ],
    [
        "title" => "Legacy System Modernization",
        "statistic" => "99.9%",
        "label" => "System Uptime Guaranteed",
        "summary" => "Seamlessly migrate and refactor outdated systems onto modern, scalable cloud architectures.",
        "cta" => "View Case Study"
    ],
    [
        "title" => "Secure-by-Design Applications",
        "statistic" => "Zero",
        "label" => "Reported Breaches",
        "summary" => "Build in security from the first line of code using a robust Zero-Trust philosophy.",
        "cta" => "Request a Security Audit"
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $company_name; ?> - Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');
        body {
            font-family: 'Inter', sans-serif;
            background-color: #0d0d1a; /* Dark background */
        }
        .text-accent { color: #8420ff; } /* A bright purple/blue accent */
        .bg-accent { background-color: #8420ff; }
        .bg-dark-card { background-color: #1a1a2e; }
        .hero-bg {
            background-image: linear-gradient(rgba(13, 13, 26, 0.9), rgba(13, 13, 26, 0.9)), url('https://placehold.co/1920x800/10003c/8420ff?text=ABSTRACT+DIGITAL+ARCHITECTURE');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body class="text-white">

    <!-- Header & Navigation -->
    <header class="sticky top-0 z-50 bg-[#0d0d1a] shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
            <!-- Logo/Company Name -->
            <a href="#" class="text-2xl font-extrabold tracking-tight text-white flex items-center">
                <span class="text-accent text-3xl font-black mr-2">&lt;/&gt;</span>
                <?php echo $company_name; ?>
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden lg:flex space-x-8">
                <?php foreach ($nav_items as $item): ?>
                    <a href="<?php echo $item['href']; ?>" class="text-sm font-medium text-gray-300 hover:text-accent transition duration-300">
                        <?php echo $item['title']; ?>
                    </a>
                <?php endforeach; ?>
            </nav>

            <!-- CTA Button -->
            <a href="mailto:<?php echo $contact_email; ?>" class="hidden sm:inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-full shadow-sm text-white bg-accent hover:bg-opacity-90 transition duration-300">
                Contact Us
            </a>
            
            <!-- Mobile Menu Button (Omitted for single-file simplicity, but placeholder for the design aesthetic) -->
        </div>
    </header>

    <main>
        <!-- 1. Hero Section -->
        <section class="hero-bg pt-24 pb-32 sm:pt-40 sm:pb-56 relative overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
                <span class="text-accent text-lg font-semibold uppercase tracking-widest block mb-4"><?php echo $motto; ?></span>
                <h1 class="text-4xl sm:text-6xl lg:text-7xl font-extrabold leading-tight tracking-tighter mb-8">
                    <?php echo $main_headline; ?>
                </h1>
                <p class="max-w-3xl mx-auto text-xl text-gray-300 mb-12">
                    <?php echo $sub_headline; ?>
                </p>
                <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-6">
                    <a href="#solutions" class="inline-flex items-center px-8 py-3 border border-transparent text-base font-medium rounded-full shadow-xl text-white bg-accent hover:bg-opacity-90 transition duration-300 transform hover:scale-105">
                        Explore Our Full Suite of Solutions
                    </a>
                    <a href="#insights" class="inline-flex items-center px-8 py-3 border border-accent text-base font-medium rounded-full text-accent bg-transparent hover:bg-accent hover:text-white transition duration-300 transform hover:scale-105">
                        See Recent Client Successes &rarr;
                    </a>
                </div>
            </div>
        </section>

        <!-- 2. Core Offerings / Capabilities -->
        <section id="solutions" class="py-20 sm:py-32 bg-[#131326]">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl mb-4">
                        Building the Future, Line by Line.
                    </h2>
                    <p class="mt-4 text-xl text-gray-400 max-w-3xl mx-auto">
                        We transform concepts into reality across the entire software lifecycle.
                    </p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <?php foreach ($offerings as $offering): ?>
                        <div class="bg-dark-card p-6 rounded-xl shadow-2xl hover:shadow-accent/50 transition duration-500 border border-gray-700 hover:border-accent/50 group">
                            <!-- Icon -->
                            <svg class="h-10 w-10 text-accent mb-4 group-hover:scale-110 transition duration-500" fill="currentColor" viewBox="0 0 24 24">
                                <path d="<?php echo $offering['icon']; ?>" />
                            </svg>
                            <h3 class="text-xl font-bold text-white mb-3"><?php echo $offering['title']; ?></h3>
                            <p class="text-gray-400 mb-4 text-sm"><?php echo $offering['summary']; ?></p>
                            <a href="#" class="text-accent font-semibold text-sm hover:underline flex items-center">
                                <?php echo $offering['cta']; ?>
                                <svg class="ml-1 h-4 w-4 transform group-hover:translate-x-1 transition duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- 3. Key Areas of Focus (Thought Leadership) -->
        <section id="insights" class="py-20 sm:py-32 bg-[#0d0d1a]">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl text-center mb-16">
                    Reinventing Business with Agile Software.
                </h2>
                <div class="space-y-12">
                    <?php foreach ($focus_areas as $area): ?>
                        <div class="lg:flex items-start lg:space-x-12 p-8 bg-dark-card rounded-xl shadow-2xl border border-gray-800">
                            <!-- Statistic/Metric -->
                            <div class="lg:w-1/4 flex-shrink-0 mb-6 lg:mb-0">
                                <p class="text-5xl font-extrabold text-accent leading-none"><?php echo $area['statistic']; ?></p>
                                <p class="text-lg font-medium text-gray-400 mt-1"><?php echo $area['label']; ?></p>
                            </div>
                            <!-- Content -->
                            <div class="lg:w-3/4">
                                <h3 class="text-3xl font-bold text-white mb-4"><?php echo $area['title']; ?></h3>
                                <p class="text-lg text-gray-300 mb-6"><?php echo $area['summary']; ?></p>
                                <a href="#" class="inline-flex items-center px-6 py-2 border border-transparent text-sm font-medium rounded-full text-white bg-accent hover:bg-opacity-80 transition duration-300">
                                    <?php echo $area['cta']; ?>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        
        <!-- 4. Sectors We Serve -->
        <section id="sectors" class="py-20 bg-[#131326]">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-extrabold text-white mb-2">Tailored Software, Targeted Impact.</h2>
                    <p class="text-lg text-gray-400">Solutions that solve the specific, complex challenges of your sector.</p>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
                    <?php
                    $sectors = ["Financial Services", "Healthcare", "E-commerce", "Logistics", "Energy & Utilities", "Public Service"];
                    foreach ($sectors as $sector):
                    ?>
                        <div class="p-3 bg-dark-card rounded-lg text-center border border-gray-700 hover:border-accent transition duration-300">
                            <p class="text-sm font-semibold text-gray-200"><?php echo $sector; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="text-center mt-10">
                    <a href="#" class="text-accent hover:underline font-medium">View All Industries We Serve &rarr;</a>
                </div>
            </div>
        </section>

        <!-- 5. Careers / Culture Section -->
        <section id="careers" class="py-20 sm:py-32 bg-[#0d0d1a]">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl mb-6">
                    Grow Your Ambition with <?php echo $company_name; ?>.
                </h2>
                <p class="text-xl text-gray-300 mb-10 max-w-3xl mx-auto">
                    Work at the intersection of technology and creativity. We're a global team of developers, designers, and strategists driven by curiosity and a commitment to quality.
                </p>
                <div class="flex justify-center mb-10 space-x-8">
                    <div class="text-center">
                        <p class="text-5xl font-extrabold text-accent">92%</p>
                        <p class="text-sm text-gray-400 mt-1">Positive Work-Life Balance</p>
                    </div>
                    <div class="text-center">
                        <p class="text-5xl font-extrabold text-accent">30+</p>
                        <p class="text-sm text-gray-400 mt-1">Global Client Projects</p>
                    </div>
                </div>
                <a href="#" class="inline-flex items-center px-8 py-3 border border-transparent text-base font-medium rounded-full shadow-xl text-white bg-accent hover:bg-opacity-90 transition duration-300 transform hover:scale-105">
                    Search Open Roles Today
                </a>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <footer id="about" class="bg-[#1a1a2e] border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-2 gap-8 md:grid-cols-6">
                <div class="col-span-2">
                    <a href="#" class="text-2xl font-extrabold tracking-tight text-white flex items-center">
                        <span class="text-accent text-3xl font-black mr-2">&lt;/&gt;</span>
                        <?php echo $company_name; ?>
                    </a>
                    <p class="mt-4 text-gray-400 text-sm">Building What's Next. <br class="hidden sm:inline" />© 2024 <?php echo $company_name; ?></p>
                </div>
                
                <div>
                    <h3 class="text-sm font-semibold text-white uppercase tracking-wider mb-3">Company</h3>
                    <ul class="space-y-3">
                        <li><a href="#about" class="text-sm text-gray-400 hover:text-accent">About Us</a></li>
                        <li><a href="#careers" class="text-sm text-gray-400 hover:text-accent">Careers</a></li>
                        <li><a href="#" class="text-sm text-gray-400 hover:text-accent">Leadership</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-sm font-semibold text-white uppercase tracking-wider mb-3">Solutions</h3>
                    <ul class="space-y-3">
                        <li><a href="#solutions" class="text-sm text-gray-400 hover:text-accent">Technology</a></li>
                        <li><a href="#insights" class="text-sm text-gray-400 hover:text-accent">Consulting</a></li>
                        <li><a href="#sectors" class="text-sm text-gray-400 hover:text-accent">AI & Data</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-sm font-semibold text-white uppercase tracking-wider mb-3">Legal</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-sm text-gray-400 hover:text-accent">Privacy Policy</a></li>
                        <li><a href="#" class="text-sm text-gray-400 hover:text-accent">Terms & Conditions</a></li>
                        <li><a href="#" class="text-sm text-gray-400 hover:text-accent">Sitemap</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-sm font-semibold text-white uppercase tracking-wider mb-3">Connect</h3>
                    <ul class="space-y-3">
                        <li><a href="mailto:<?php echo $contact_email; ?>" class="text-sm text-gray-400 hover:text-accent">Contact Us</a></li>
                        <li><a href="#" class="text-sm text-gray-400 hover:text-accent">Locations</a></li>
                        <li><a href="#" class="text-sm text-gray-400 hover:text-accent">Media Relations</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
