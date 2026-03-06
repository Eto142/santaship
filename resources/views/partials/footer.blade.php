<!-- ======================================================
     SANTASHIP LOGISTICS – FOOTER
====================================================== -->
<footer>

    <!-- Pre-Footer CTA Banner -->
    <div class="footer-cta-banner">
        <div class="container">
            <div class="footer-cta-inner">
                <div class="footer-cta-content">
                    <h3 class="footer-cta-title">Ready to Ship Worldwide?</h3>
                    <p class="footer-cta-text">Get a free quote in minutes and experience logistics that works for you.</p>
                </div>
                <div class="footer-cta-actions">
                    <a href="{{ url('/contact') }}" class="btn btn-white">
                        <i class="fas fa-paper-plane"></i> Get a Free Quote
                    </a>
                    <a href="{{ url('/track-now') }}" class="btn btn-outline-white">
                        <i class="fas fa-search-location"></i> Track Shipment
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Footer -->
    <div class="footer-main">
        <div class="container">
            <div class="footer-grid">

                <!-- Column 1: Brand -->
                <div class="footer-col footer-brand">
                    <a href="{{ url('/') }}" class="footer-logo">
                        <img src="{{ asset('wp-content/uploads/2022/04/Screenshot_20231009_092214.png') }}"
                             alt="Santaship Logistics" style="height:52px;width:auto;filter:brightness(10);">
                    </a>
                    <p class="footer-brand-desc">
                        Santaship Logistics Company Limited is a progressive and diversified transport and logistics company — committed to Safety, Our Customers, and exemplary performance worldwide.
                    </p>
                    <div class="footer-social">
                        <a href="https://www.facebook.com/" target="_blank" rel="noopener" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/" target="_blank" rel="noopener" aria-label="Twitter/X"><i class="fab fa-x-twitter"></i></a>
                        <a href="https://instagram.com/" target="_blank" rel="noopener" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/" target="_blank" rel="noopener" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://youtube.com/" target="_blank" rel="noopener" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <!-- Column 2: Quick Links -->
                <div class="footer-col">
                    <h4 class="footer-heading">Quick Links</h4>
                    <ul class="footer-links">
                        <li><a href="{{ url('/') }}"><i class="fas fa-chevron-right"></i> Home</a></li>
                        <li><a href="{{ url('/services') }}"><i class="fas fa-chevron-right"></i> Services</a></li>
                        <li><a href="{{ url('/track-now') }}"><i class="fas fa-chevron-right"></i> Track Shipment</a></li>
                        <li><a href="{{ url('/about') }}"><i class="fas fa-chevron-right"></i> About Us</a></li>
                        <li><a href="{{ url('/team') }}"><i class="fas fa-chevron-right"></i> Our Team</a></li>
                        <li><a href="{{ url('/contact') }}"><i class="fas fa-chevron-right"></i> Contact Us</a></li>
                    </ul>
                </div>

                <!-- Column 3: Services -->
                <div class="footer-col">
                    <h4 class="footer-heading">Our Services</h4>
                    <ul class="footer-links">
                        <li><a href="{{ url('/services') }}"><i class="fas fa-chevron-right"></i> Air Freight</a></li>
                        <li><a href="{{ url('/services') }}"><i class="fas fa-chevron-right"></i> Sea Freight</a></li>
                        <li><a href="{{ url('/services') }}"><i class="fas fa-chevron-right"></i> Road Transport</a></li>
                        <li><a href="{{ url('/services') }}"><i class="fas fa-chevron-right"></i> Intermodal</a></li>
                        <li><a href="{{ url('/services') }}"><i class="fas fa-chevron-right"></i> Pickup &amp; Delivery</a></li>
                        <li><a href="{{ url('/services') }}"><i class="fas fa-chevron-right"></i> Custom Crating</a></li>
                    </ul>
                </div>

                <!-- Column 4: Contact -->
                <div class="footer-col">
                    <h4 class="footer-heading">Contact Info</h4>
                    <ul class="footer-contact-list">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <span> 720 Grand Blvd, Deer Park, NY 11729, USA</span>
                        </li>
                        {{-- <li>
                            <i class="fas fa-phone-alt"></i>
                            <a href="tel:+4962519866200">+49 (0) 6251 986 620</a>
                        </li> --}}
                        <li>
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:support@santashiplogistics.org">support@santashiplogistics.org</a>
                        </li>
                        <li>
                            <i class="fas fa-clock"></i>
                            <span>Mon – Sun: 24 / 7 Support</span>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <!-- Footer Bottom Bar -->
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-inner">
                <p class="footer-copy">
                    &copy; {{ date('Y') }} Santaship Logistics Company Limited. All Rights Reserved.
                </p>
                <div class="footer-legal">
                    <a href="#">Privacy Policy</a>
                    <span>|</span>
                    <a href="#">Terms &amp; Conditions</a>
                    <span>|</span>
                    <a href="#">Sitemap</a>
                </div>
            </div>
        </div>
    </div>

</footer>

<!-- ======================================================
     FOOTER STYLES
====================================================== -->
<style>
    /* Pre-Footer CTA Banner */
    .footer-cta-banner {
        background: linear-gradient(135deg, var(--accent) 0%, var(--accent-hover) 100%);
        padding: 52px 0;
    }
    .footer-cta-inner {
        display: flex; align-items: center;
        justify-content: space-between; gap: 32px; flex-wrap: wrap;
    }
    .footer-cta-title {
        font-family: 'Rajdhani', sans-serif;
        font-size: clamp(24px, 3vw, 34px); font-weight: 700;
        color: var(--white); line-height: 1.2; margin-bottom: 8px;
    }
    .footer-cta-text { color: rgba(255,255,255,.88); font-size: 16px; }
    .footer-cta-actions { display: flex; gap: 14px; flex-wrap: wrap; }

    /* Main Footer */
    .footer-main {
        background: var(--primary);
        padding: 72px 0 48px;
        color: rgba(255,255,255,.75);
    }
    .footer-grid {
        display: grid;
        grid-template-columns: 1.8fr 1fr 1fr 1.3fr;
        gap: 48px;
    }
    .footer-brand-desc { font-size: 14px; line-height: 1.8; margin: 18px 0 22px; }
    .footer-social { display: flex; gap: 10px; }
    .footer-social a {
        display: inline-flex; align-items: center; justify-content: center;
        width: 34px; height: 34px; border-radius: 50%;
        background: rgba(255,255,255,.1); color: #fff; font-size: 13px;
    }
    .footer-social a:hover { background: var(--accent); transform: translateY(-3px); }

    .footer-heading {
        font-family: 'Rajdhani', sans-serif;
        font-size: 17px; font-weight: 700;
        color: var(--white); text-transform: uppercase;
        letter-spacing: 1px; margin-bottom: 20px;
        padding-bottom: 12px;
        border-bottom: 2px solid var(--accent);
        display: inline-block;
    }
    .footer-links { display: flex; flex-direction: column; gap: 10px; }
    .footer-links a {
        display: flex; align-items: center; gap: 9px;
        font-size: 14px; color: rgba(255,255,255,.72);
    }
    .footer-links a i { font-size: 10px; color: var(--accent); }
    .footer-links a:hover { color: var(--accent); padding-left: 4px; }

    .footer-contact-list { display: flex; flex-direction: column; gap: 16px; }
    .footer-contact-list li {
        display: flex; align-items: flex-start; gap: 12px;
        font-size: 14px; color: rgba(255,255,255,.72);
    }
    .footer-contact-list li i {
        color: var(--accent); font-size: 14px; margin-top: 3px; flex-shrink: 0;
    }
    .footer-contact-list li a { color: rgba(255,255,255,.72); }
    .footer-contact-list li a:hover { color: var(--accent); }

    /* Footer Bottom */
    .footer-bottom {
        background: #070F18;
        padding: 18px 0;
    }
    .footer-bottom-inner {
        display: flex; align-items: center;
        justify-content: space-between; gap: 16px; flex-wrap: wrap;
    }
    .footer-copy { font-size: 13px; color: rgba(255,255,255,.5); }
    .footer-legal { display: flex; align-items: center; gap: 10px; }
    .footer-legal a { font-size: 13px; color: rgba(255,255,255,.5); }
    .footer-legal a:hover { color: var(--accent); }
    .footer-legal span { color: rgba(255,255,255,.25); }

    /* Responsive footer */
    @media (max-width: 1024px) { .footer-grid { grid-template-columns: 1fr 1fr; } }
    @media (max-width: 600px) {
        .footer-grid { grid-template-columns: 1fr; gap: 36px; }
        .footer-cta-inner { flex-direction: column; text-align: center; }
        .footer-cta-actions { justify-content: center; }
        .footer-bottom-inner { flex-direction: column; text-align: center; }
        .footer-legal { justify-content: center; }
    }
</style>

<!-- ======================================================
     AOS + CLOSING SCRIPTS
====================================================== -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init({
        once: true,
        duration: 700,
        offset: 60,
        // Disable slide-in animations on mobile to prevent horizontal scroll shake
        disable: function () { return window.innerWidth < 768; }
    });
</script>

</body>
</html>
