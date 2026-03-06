<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Santaship Logistics Company Limited – Worldwide Shipping Services. A progressive and diversified transport and logistics company committed to Safety, Customers, Teamwork and exemplary performance.">
    <title>Santaship Logistics Company Limited – Worldwide Shipping Services</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('wp-content/uploads/2022/04/Screenshot_20231009_092214-150x150.png') }}" sizes="32x32">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Rajdhani:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- AOS Animation -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <style>
        /* ======================================================
           SANTASHIP LOGISTICS – GLOBAL DESIGN SYSTEM
        ====================================================== */
        :root {
            /* Brand Colors */
            --primary:        #0D1B2A;   /* Deep Navy  */
            --primary-mid:    #1A3A5C;   /* Mid Navy   */
            --primary-light:  #2A5298;   /* Royal Blue */
            --accent:         #E8920A;   /* Amber      */
            --accent-hover:   #C97A08;   /* Dark Amber */
            --accent-light:   #FFA726;   /* Light Amber*/

            /* Neutrals */
            --white:          #FFFFFF;
            --off-white:      #F8FAFC;
            --light-gray:     #EDF2F7;
            --border:         #DDE1E7;
            --text:           #1E293B;
            --text-muted:     #64748B;
            --text-light:     #94A3B8;

            /* Effects */
            --shadow-sm:  0 1px 4px rgba(0,0,0,.08);
            --shadow-md:  0 4px 16px rgba(0,0,0,.12);
            --shadow-lg:  0 12px 40px rgba(0,0,0,.15);
            --shadow-xl:  0 24px 60px rgba(0,0,0,.2);
            --radius-sm:  6px;
            --radius-md:  10px;
            --radius-lg:  16px;
            --radius-xl:  24px;
            --transition: all .3s ease;
        }

        /* ---- Reset ---- */
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        html { scroll-behavior: smooth; font-size: 16px; overflow-x: hidden; max-width: 100%; }
        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.7;
            color: var(--text);
            background: var(--white);
            overflow-x: hidden;
            max-width: 100%;
        }
        a { text-decoration: none; color: inherit; transition: var(--transition); }
        img { max-width: 100%; display: block; height: auto; }
        ul { list-style: none; }
        .container { max-width: 1200px; margin: 0 auto; padding: 0 24px; }

        /* ---- Shared Section Styles ---- */
        section { padding: 90px 0; }
        .section-label {
            display: inline-flex; align-items: center; gap: 10px;
            font-size: 12px; font-weight: 700; letter-spacing: 2.5px;
            text-transform: uppercase; color: var(--accent); margin-bottom: 14px;
        }
        .section-label::before {
            content: ''; width: 28px; height: 2px;
            background: linear-gradient(90deg, var(--accent), var(--accent-light));
            border-radius: 2px;
        }
        .section-title {
            font-family: 'Rajdhani', sans-serif;
            font-size: clamp(28px, 4vw, 44px);
            font-weight: 700; color: var(--primary); line-height: 1.15;
        }
        .section-title span { color: var(--accent); }
        .section-subtitle {
            font-size: 16px; color: var(--text-muted);
            max-width: 580px; margin-top: 14px; line-height: 1.8;
        }

        /* ---- Buttons ---- */
        .btn {
            display: inline-flex; align-items: center; gap: 9px;
            padding: 13px 30px; border-radius: 50px;
            font-size: 14px; font-weight: 600; cursor: pointer;
            border: 2px solid transparent; transition: var(--transition);
            white-space: nowrap;
        }
        .btn-primary {
            background: linear-gradient(135deg, var(--accent) 0%, var(--accent-hover) 100%);
            color: var(--white);
            box-shadow: 0 4px 18px rgba(232,146,10,.35);
        }
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(232,146,10,.45);
            color: var(--white);
        }
        .btn-outline-primary {
            background: transparent; color: var(--primary);
            border-color: var(--primary);
        }
        .btn-outline-primary:hover { background: var(--primary); color: var(--white); }
        .btn-outline-white {
            background: transparent; color: var(--white);
            border-color: rgba(255,255,255,.6);
        }
        .btn-outline-white:hover { background: var(--white); color: var(--primary); }
        .btn-white {
            background: var(--white); color: var(--primary);
            box-shadow: var(--shadow-md);
        }
        .btn-white:hover { background: var(--accent); color: var(--white); box-shadow: 0 8px 24px rgba(232,146,10,.4); }

        /* ======================================================
           TOP BAR
        ====================================================== */
        .site-topbar {
            background: var(--primary);
            padding: 9px 0;
            border-bottom: 1px solid rgba(255,255,255,.07);
        }
        .topbar-inner {
            display: flex; align-items: center;
            justify-content: space-between; gap: 12px; flex-wrap: wrap;
        }
        .topbar-info { display: flex; align-items: center; gap: 28px; flex-wrap: wrap; }
        .topbar-item {
            display: flex; align-items: center; gap: 8px;
            color: rgba(255,255,255,.78); font-size: 13px;
        }
        .topbar-item i { color: var(--accent); font-size: 12px; }
        .topbar-social { display: flex; align-items: center; gap: 8px; }
        .topbar-social a {
            display: inline-flex; align-items: center; justify-content: center;
            width: 29px; height: 29px; border-radius: 50%;
            background: rgba(255,255,255,.10); color: #fff; font-size: 12px;
        }
        .topbar-social a:hover { background: var(--accent); transform: translateY(-2px); }

        /* ======================================================
           SITE HEADER
        ====================================================== */
        .site-header {
            background: var(--white);
            position: sticky; top: 0; z-index: 1000;
            box-shadow: var(--shadow-md);
        }
        .site-header.scrolled { box-shadow: 0 4px 28px rgba(0,0,0,.16); }
        .header-inner {
            display: flex; align-items: center;
            justify-content: space-between; padding: 14px 0; gap: 20px;
        }

        /* Logo */
        .site-logo {
            display: flex; align-items: center; gap: 14px; flex-shrink: 0;
        }
        .site-logo img { height: 54px; width: auto; }
        .logo-text-wrap .logo-name {
            display: block;
            font-family: 'Rajdhani', sans-serif;
            font-size: 19px; font-weight: 700; color: var(--primary);
            text-transform: uppercase; letter-spacing: .5px; line-height: 1.1;
        }
        .logo-text-wrap .logo-tagline {
            font-size: 10.5px; color: var(--accent); letter-spacing: 1.5px;
            text-transform: uppercase; font-weight: 600;
        }

        /* Desktop Nav */
        .main-nav { display: flex; align-items: center; gap: 4px; }
        .main-nav a {
            padding: 8px 15px; border-radius: var(--radius-sm);
            font-size: 14px; font-weight: 500; color: var(--text);
            position: relative; white-space: nowrap;
        }
        .main-nav a::after {
            content: ''; position: absolute;
            bottom: 2px; left: 15px; width: calc(100% - 30px);
            height: 2px; background: var(--accent);
            transform: scaleX(0); transition: transform .3s ease; transform-origin: left;
        }
        .main-nav a:hover, .main-nav a.nav-active { color: var(--accent); }
        .main-nav a:hover::after, .main-nav a.nav-active::after { transform: scaleX(1); }

        /* Header CTA */
        .header-cta {
            display: flex; align-items: center; gap: 10px; flex-shrink: 0;
        }
        .btn-header-track {
            display: inline-flex; align-items: center; gap: 8px;
            background: linear-gradient(135deg, var(--accent) 0%, var(--accent-hover) 100%);
            color: var(--white);
            padding: 10px 22px; border-radius: 50px;
            font-size: 13.5px; font-weight: 600;
            box-shadow: 0 4px 16px rgba(232,146,10,.35);
        }
        .btn-header-track:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 22px rgba(232,146,10,.48);
            color: var(--white);
        }

        /* Hamburger */
        .hamburger {
            display: none; flex-direction: column; justify-content: space-between;
            width: 26px; height: 18px; cursor: pointer;
            background: none; border: none; padding: 0;
        }
        .hamburger span {
            width: 100%; height: 2px; background: var(--primary);
            border-radius: 2px; transition: var(--transition);
        }
        .hamburger.open span:nth-child(1) { transform: translateY(8px) rotate(45deg); }
        .hamburger.open span:nth-child(2) { opacity: 0; transform: scaleX(0); }
        .hamburger.open span:nth-child(3) { transform: translateY(-8px) rotate(-45deg); }

        /* Mobile Nav Overlay */
        .mobile-nav-overlay {
            display: none; position: fixed; inset: 0; z-index: 1100;
            background: var(--primary);
            flex-direction: column; padding: 0;
            overflow-y: auto;
        }
        .mobile-nav-overlay.open { display: flex; }
        .mobile-nav-header {
            display: flex; align-items: center; justify-content: space-between;
            padding: 20px 24px;
            border-bottom: 1px solid rgba(255,255,255,.08);
        }
        .mobile-nav-header img { height: 44px; width: auto; filter: brightness(10); }
        .mobile-close-btn {
            display: flex; align-items: center; justify-content: center;
            width: 40px; height: 40px; border-radius: 50%;
            background: rgba(255,255,255,.1); color: #fff; font-size: 18px;
            cursor: pointer; border: none;
        }
        .mobile-nav-links { padding: 24px 24px; flex: 1; }
        .mobile-nav-links a {
            display: flex; align-items: center; gap: 12px;
            padding: 16px 20px; border-radius: var(--radius-md);
            font-size: 17px; font-weight: 600; color: rgba(255,255,255,.85);
            border-bottom: 1px solid rgba(255,255,255,.07);
        }
        .mobile-nav-links a:hover { color: var(--accent); background: rgba(255,255,255,.05); }
        .mobile-nav-links a i { width: 20px; color: var(--accent); }
        .mobile-nav-footer { padding: 24px; border-top: 1px solid rgba(255,255,255,.08); }

        /* ======================================================
           RESPONSIVE BREAKPOINTS
        ====================================================== */
        @media (max-width: 960px) {
            .main-nav, .header-cta { display: none; }
            .hamburger { display: flex; }
        }
        @media (max-width: 600px) {
            section { padding: 60px 0; }
            .site-topbar { display: none; }
        }
        @media (max-width: 480px) {
            .container { padding: 0 16px; }
        }
    </style>
</head>
<body>

<!-- ===========================
     TOP INFO BAR
=========================== -->
<div class="site-topbar">
    <div class="container">
        <div class="topbar-inner">
            <div class="topbar-info">
                <span class="topbar-item">
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:support@santashiplogistics.org" style="color: inherit;">support@santashiplogistics.org</a>
                </span>
                {{-- <span class="topbar-item">
                    <i class="fas fa-phone-alt"></i>
                    +49 (0) 6251 986 620
                </span> --}}
                <span class="topbar-item">
                    <i class="fas fa-map-marker-alt"></i>
                    720 Grand Blvd, Deer Park, NY 11729, USA
                </span>
            </div>
            <div class="topbar-social">
                <a href="https://www.facebook.com/" target="_blank" rel="noopener" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/" target="_blank" rel="noopener" aria-label="Twitter/X"><i class="fab fa-x-twitter"></i></a>
                <a href="https://instagram.com/" target="_blank" rel="noopener" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com/" target="_blank" rel="noopener" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- ===========================
     MAIN HEADER
=========================== -->
<header class="site-header" id="site-header">
    <div class="container">
        <div class="header-inner">

            <!-- Logo -->
            <a href="{{ url('/') }}" class="site-logo" aria-label="Santaship Logistics Home">
                <img src="{{ asset('wp-content/uploads/2022/04/Screenshot_20231009_092214.png') }}"
                     alt="Santaship Logistics Company Limited">
            </a>

            <!-- Desktop Navigation -->
            <nav class="main-nav" aria-label="Main navigation">
                <a href="{{ url('/') }}"         class="{{ request()->is('/') ? 'nav-active' : '' }}">Home</a>
                <a href="{{ url('/services') }}"  class="{{ request()->is('services') ? 'nav-active' : '' }}">Services</a>
                <a href="{{ url('/track-now') }}" class="{{ request()->is('track-now') ? 'nav-active' : '' }}">Track Now</a>
                <a href="{{ url('/about') }}"     class="{{ request()->is('about') ? 'nav-active' : '' }}">About Us</a>
                <a href="{{ url('/team') }}"      class="{{ request()->is('team') ? 'nav-active' : '' }}">Team</a>
                <a href="{{ url('/contact') }}"   class="{{ request()->is('contact') ? 'nav-active' : '' }}">Contact</a>
            </nav>

            <!-- Header CTA -->
            <div class="header-cta">
                <a href="{{ url('/track-now') }}" class="btn-header-track">
                    <i class="fas fa-shipping-fast"></i>
                    Track Shipment
                </a>
            </div>

            <!-- Mobile Hamburger -->
            <button class="hamburger" id="hamburger" aria-label="Open menu" aria-expanded="false" aria-controls="mobile-nav">
                <span></span><span></span><span></span>
            </button>

        </div>
    </div>
</header>

<!-- ===========================
     MOBILE NAVIGATION
=========================== -->
<div class="mobile-nav-overlay" id="mobile-nav" role="dialog" aria-label="Mobile navigation">
    <div class="mobile-nav-header">
        <img src="{{ asset('wp-content/uploads/2022/04/Screenshot_20231009_092214.png') }}" alt="Santaship Logistics">
        <button class="mobile-close-btn" id="mobile-close" aria-label="Close menu">
            <i class="fas fa-times"></i>
        </button>
    </div>
    <nav class="mobile-nav-links">
        <a href="{{ url('/') }}"><i class="fas fa-home"></i> Home</a>
        <a href="{{ url('/services') }}"><i class="fas fa-boxes"></i> Services</a>
        <a href="{{ url('/track-now') }}"><i class="fas fa-map-marker-alt"></i> Track Shipment</a>
        <a href="{{ url('/about') }}"><i class="fas fa-info-circle"></i> About Us</a>
        <a href="{{ url('/team') }}"><i class="fas fa-users"></i> Our Team</a>
        <a href="{{ url('/contact') }}"><i class="fas fa-envelope"></i> Contact Us</a>
    </nav>
    <div class="mobile-nav-footer">
        <a href="{{ url('/track-now') }}" class="btn btn-primary" style="width: 100%; justify-content: center;">
            <i class="fas fa-shipping-fast"></i> Track My Shipment
        </a>
    </div>
</div>

<script>
    (function () {
        // Sticky shadow
        const hdr = document.getElementById('site-header');
        window.addEventListener('scroll', () => {
            hdr.classList.toggle('scrolled', window.scrollY > 20);
        }, { passive: true });

        // Mobile menu toggle
        const ham      = document.getElementById('hamburger');
        const mobileNav = document.getElementById('mobile-nav');
        const mClose   = document.getElementById('mobile-close');

        function openNav()  { mobileNav.classList.add('open'); ham.classList.add('open'); ham.setAttribute('aria-expanded','true'); document.body.style.overflow='hidden'; }
        function closeNav() { mobileNav.classList.remove('open'); ham.classList.remove('open'); ham.setAttribute('aria-expanded','false'); document.body.style.overflow=''; }

        ham.addEventListener('click', openNav);
        mClose.addEventListener('click', closeNav);
        mobileNav.querySelectorAll('a').forEach(a => a.addEventListener('click', closeNav));
        document.addEventListener('keydown', e => { if (e.key === 'Escape') closeNav(); });
    })();
</script>
