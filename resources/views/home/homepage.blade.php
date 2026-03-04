@include('home.header')

{{-- ======================================================
     SANTASHIP LOGISTICS — HOMEPAGE
     Color System: Deep Navy (#0D1B2A) + Amber (#E8920A)
====================================================== --}}

{{-- ===================================================
     1. HERO SECTION
=================================================== --}}
<section class="hero" id="hero">
    <div class="hero-bg">
        <div class="hero-overlay"></div>
    </div>
    <div class="container hero-inner">

        <!-- Hero Text -->
        <div class="hero-content" data-aos="fade-right" data-aos-duration="800">
            <div class="hero-badge">
                <i class="fas fa-globe-americas"></i>
                Trusted Worldwide Since 2013
            </div>
            <h1 class="hero-title">
                Your Global<br>
                <span class="hero-title-accent">Logistics Partner</span>
            </h1>
            <p class="hero-desc">
                Santaship Logistics delivers reliable, fast, and fully traceable shipping solutions across 150+ countries. From air freight to custom crating  we move what matters.
            </p>
            <div class="hero-actions">
                <a href="{{ url('/services') }}" class="btn btn-primary">
                    <i class="fas fa-boxes"></i> Explore Services
                </a>
                <a href="{{ url('/contact') }}" class="btn btn-outline-white">
                    <i class="fas fa-paper-plane"></i> Get a Quote
                </a>
            </div>
            <!-- Trust badges -->
            <div class="hero-trust">
                <div class="trust-item"><i class="fas fa-shield-alt"></i> Fully Insured</div>
                <div class="trust-item"><i class="fas fa-lock"></i> Secure Handling</div>
                <div class="trust-item"><i class="fas fa-headset"></i> 24/7 Support</div>
            </div>
        </div>

        <!-- Hero Tracking Card -->
        <div class="hero-track-card" data-aos="fade-left" data-aos-duration="900" data-aos-delay="150">
            <div class="track-card-header">
                <i class="fas fa-map-marked-alt"></i>
                <div>
                    <strong>Track Your Shipment</strong>
                    <span>Real-time updates worldwide</span>
                </div>
            </div>
            <form action="{{ url('/track-now') }}" method="GET" class="track-form">
                <div class="track-input-wrap">
                    <i class="fas fa-barcode"></i>
                    <input type="text" name="tracking_number" placeholder="Enter tracking number, waybill or BOL…" required>
                </div>
                <button type="submit" class="btn btn-primary track-submit">
                    <i class="fas fa-search"></i> Track Now
                </button>
            </form>
            <div class="track-example">
                <span>Accepted formats:</span>
                <span class="track-tag">MAT Number</span>
                <span class="track-tag">Waybill</span>
                <span class="track-tag">BOL</span>
                <span class="track-tag">PO Number</span>
            </div>
        </div>

    </div>

    <!-- Scroll indicator -->
    <a href="#quick-actions" class="hero-scroll" aria-label="Scroll down">
        <i class="fas fa-chevron-down"></i>
    </a>
</section>

{{-- ===================================================
     2. QUICK ACTIONS BAR
=================================================== --}}
<section class="quick-actions" id="quick-actions">
    <div class="container">
        <div class="qa-grid">

            <div class="qa-card" data-aos="fade-up" data-aos-delay="0">
                <div class="qa-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="qa-body">
                    <h3>Track Your Shipment</h3>
                    <p>Enter your MAT, Waybill, BOL, or PO number for real-time tracking updates.</p>
                    <a href="{{ url('/track-now') }}" class="qa-link">
                        Track Now <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div class="qa-card qa-card-featured" data-aos="fade-up" data-aos-delay="100">
                <div class="qa-icon">
                    <i class="fas fa-calendar-check"></i>
                </div>
                <div class="qa-body">
                    <h3>Book a Pickup</h3>
                    <p>Schedule a pickup for your parcel  we'll confirm within 12 hours.</p>
                    <a href="{{ url('/contact') }}" class="qa-link">
                        Book Now <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div class="qa-card" data-aos="fade-up" data-aos-delay="200">
                <div class="qa-icon">
                    <i class="fas fa-search"></i>
                </div>
                <div class="qa-body">
                    <h3>Get a Quote</h3>
                    <p>Tell us your cargo details and get a competitive freight quote within the day.</p>
                    <a href="{{ url('/contact') }}" class="qa-link">
                        Request Quote <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ===================================================
     3. STATS COUNTER BAND
=================================================== --}}
<section class="stats-band">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-item" data-aos="zoom-in" data-aos-delay="0">
                <div class="stat-icon"><i class="fas fa-globe-americas"></i></div>
                <div class="stat-number" data-target="150">0</div>
                <div class="stat-suffix">+</div>
                <div class="stat-label">Countries Served</div>
            </div>
            <div class="stat-item" data-aos="zoom-in" data-aos-delay="100">
                <div class="stat-icon"><i class="fas fa-box-open"></i></div>
                <div class="stat-number" data-target="50000">0</div>
                <div class="stat-suffix">+</div>
                <div class="stat-label">Shipments Delivered</div>
            </div>
            <div class="stat-item" data-aos="zoom-in" data-aos-delay="200">
                <div class="stat-icon"><i class="fas fa-users"></i></div>
                <div class="stat-number" data-target="1200">0</div>
                <div class="stat-suffix">+</div>
                <div class="stat-label">Happy Clients</div>
            </div>
            <div class="stat-item" data-aos="zoom-in" data-aos-delay="300">
                <div class="stat-icon"><i class="fas fa-award"></i></div>
                <div class="stat-number" data-target="10">0</div>
                <div class="stat-suffix">+</div>
                <div class="stat-label">Years of Excellence</div>
            </div>
        </div>
    </div>
</section>

{{-- ===================================================
     4. ABOUT SECTION
=================================================== --}}
<section class="about-section" id="about">
    <div class="container">
        <div class="about-grid">

            <!-- Left: Visual -->
            <div class="about-visual" data-aos="fade-right">
                <div class="about-img-main">
                    <img src="{{ asset('wp-content/uploads/2022/04/bg-popup.jpg') }}" alt="Santaship Logistics Operations" loading="lazy">
                </div>
                <div class="about-img-accent">
                    <img src="{{ asset('wp-content/uploads/2022/04/about-sect2.jpg') }}" alt="Cargo Operations" loading="lazy">
                </div>
                <div class="about-experience-badge">
                    <span class="exp-num">10+</span>
                    <span class="exp-text">Years of<br>Excellence</span>
                </div>
            </div>

            <!-- Right: Content -->
            <div class="about-content" data-aos="fade-left">
                <div class="section-label">About Us</div>
                <h2 class="section-title">
                    Progressive &amp; Diversified<br>
                    <span>Logistics Solutions</span>
                </h2>
                <p class="about-lead">
                    Santaship Logistics Company Limited is committed to Safety, our Customers, Teamwork, and a pledge to exemplary performance across global supply chains.
                </p>
                <p class="about-text">
                    We have established ourselves as a market leader in transport service solutions, drawing strength from a customer-centric focus, dedicated employees, and a determination to succeed. We are big enough to provide extensive logistics services  but small enough to care.
                </p>

                <div class="about-features">
                    <div class="about-feature">
                        <i class="fas fa-check-circle"></i>
                        <span>Customer-centric approach to every shipment</span>
                    </div>
                    <div class="about-feature">
                        <i class="fas fa-check-circle"></i>
                        <span>Safety-first culture across all operations</span>
                    </div>
                    <div class="about-feature">
                        <i class="fas fa-check-circle"></i>
                        <span>Real-time tracking and full transparency</span>
                    </div>
                    <div class="about-feature">
                        <i class="fas fa-check-circle"></i>
                        <span>Global network with local expertise</span>
                    </div>
                </div>

                <div class="about-actions">
                    <a href="{{ url('/about') }}" class="btn btn-primary">
                        <i class="fas fa-info-circle"></i> Learn More About Us
                    </a>
                    <a href="{{ url('/contact') }}" class="btn btn-outline-primary">
                        <i class="fas fa-phone-alt"></i> Contact Us
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ===================================================
     5. SERVICES SECTION
=================================================== --}}
<section class="services-section" id="services">
    <div class="section-bg-pattern"></div>
    <div class="container">
        <div class="section-header centered" data-aos="fade-up">
            <div class="section-label">What We Do</div>
            <h2 class="section-title">Our <span>Logistics Services</span></h2>
            <p class="section-subtitle">
                From intermodal solutions to specialty freight  we provide comprehensive logistics that keep your cargo moving safely and on time.
            </p>
        </div>

        <div class="services-grid">

            <div class="service-card" data-aos="fade-up" data-aos-delay="0">
                <div class="service-card-img">
                    <img src="{{ asset('wp-content/uploads/2022/04/service-air-freight.jfif') }}" alt="Air Freight" loading="lazy">
                    <div class="service-card-overlay"></div>
                </div>
                <div class="service-card-body">
                    <div class="service-icon"><i class="fas fa-plane"></i></div>
                    <h3 class="service-title">Air Freight</h3>
                    <p>Fast, professional air freight services for time-sensitive cargo. Global destinations, guaranteed on-time delivery.</p>
                    <a href="{{ url('/services') }}" class="service-link">View Service <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="service-card" data-aos="fade-up" data-aos-delay="80">
                <div class="service-card-img">
                    <img src="{{ asset('wp-content/uploads/2022/04/services-intermod.jpg') }}" alt="Intermodal" loading="lazy">
                    <div class="service-card-overlay"></div>
                </div>
                <div class="service-card-body">
                    <div class="service-icon"><i class="fas fa-ship"></i></div>
                    <h3 class="service-title">Intermodal</h3>
                    <p>Comprehensive intermodal transportation services combining sea, rail, and road for optimal cost and speed.</p>
                    <a href="{{ url('/services') }}" class="service-link">View Service <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="service-card" data-aos="fade-up" data-aos-delay="160">
                <div class="service-card-img">
                    <img src="{{ asset('wp-content/uploads/2022/04/services-dedicated.jpg') }}" alt="Dedicated Transport" loading="lazy">
                    <div class="service-card-overlay"></div>
                </div>
                <div class="service-card-body">
                    <div class="service-icon"><i class="fas fa-truck"></i></div>
                    <h3 class="service-title">Dedicated Transport</h3>
                    <p>Dedicated trucking solutions for complex transportation challenges  full flexibility, full accountability.</p>
                    <a href="{{ url('/services') }}" class="service-link">View Service <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="service-card" data-aos="fade-up" data-aos-delay="0">
                <div class="service-card-img">
                    <img src="{{ asset('wp-content/uploads/2022/04/services-ltl.jpg') }}" alt="Pickup & Delivery" loading="lazy">
                    <div class="service-card-overlay"></div>
                </div>
                <div class="service-card-body">
                    <div class="service-icon"><i class="fas fa-hand-holding-box"></i></div>
                    <h3 class="service-title">Pickup &amp; Delivery</h3>
                    <p>Flexible pickup and delivery options for any budget. Drop-off at our nationwide warehouse locations available.</p>
                    <a href="{{ url('/services') }}" class="service-link">View Service <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="service-card" data-aos="fade-up" data-aos-delay="80">
                <div class="service-card-img">
                    <img src="{{ asset('wp-content/uploads/2022/04/custom-creating.jfif') }}" alt="Custom Shipping Crates" loading="lazy">
                    <div class="service-card-overlay"></div>
                </div>
                <div class="service-card-body">
                    <div class="service-icon"><i class="fas fa-box"></i></div>
                    <h3 class="service-title">Custom Crating</h3>
                    <p>Expert crating for heavy, oversized, and fragile items  machinery, fine art, industrial equipment and more.</p>
                    <a href="{{ url('/services') }}" class="service-link">View Service <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="service-card" data-aos="fade-up" data-aos-delay="160">
                <div class="service-card-img">
                    <img src="{{ asset('wp-content/uploads/2022/04/services-truckload.jpg') }}" alt="Truckload" loading="lazy">
                    <div class="service-card-overlay"></div>
                </div>
                <div class="service-card-body">
                    <div class="service-icon"><i class="fas fa-truck-moving"></i></div>
                    <h3 class="service-title">Truckload Freight</h3>
                    <p>Domestic and cross-border truck freight services through our strong network of carriers worldwide.</p>
                    <a href="{{ url('/services') }}" class="service-link">View Service <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

        </div>

        <div class="services-cta" data-aos="fade-up">
            <a href="{{ url('/services') }}" class="btn btn-primary">
                <i class="fas fa-th-large"></i> View All Services
            </a>
        </div>
    </div>
</section>

{{-- ===================================================
     6. WHY CHOOSE US
=================================================== --}}
<section class="why-section" id="why">
    <div class="container">
        <div class="why-grid">

            <!-- Left: Content -->
            <div class="why-content" data-aos="fade-right">
                <div class="section-label">Why Choose Us</div>
                <h2 class="section-title">
                    Why Our Customers<br>
                    <span>Trust Us</span>
                </h2>
                <p class="section-subtitle">
                    We take safety, service, and the environment seriously  backed by a sound structure of knowledge and superior expertise.
                </p>

                <div class="why-features">
                    <div class="why-feature" data-aos="fade-right" data-aos-delay="0">
                        <div class="why-feature-icon"><i class="fas fa-globe"></i></div>
                        <div class="why-feature-body">
                            <h4>Global Network</h4>
                            <p>Offices and partners spanning 150+ countries ensure your cargo reaches every corner of the world.</p>
                        </div>
                    </div>
                    <div class="why-feature" data-aos="fade-right" data-aos-delay="80">
                        <div class="why-feature-icon"><i class="fas fa-shield-alt"></i></div>
                        <div class="why-feature-body">
                            <h4>Guaranteed Safety</h4>
                            <p>Fully insured shipments, safety-first protocols, and careful handling at every stage.</p>
                        </div>
                    </div>
                    <div class="why-feature" data-aos="fade-right" data-aos-delay="160">
                        <div class="why-feature-icon"><i class="fas fa-headset"></i></div>
                        <div class="why-feature-body">
                            <h4>24/7 Fast Response</h4>
                            <p>Dedicated support team available around the clock so you're never left without an answer.</p>
                        </div>
                    </div>
                    <div class="why-feature" data-aos="fade-right" data-aos-delay="240">
                        <div class="why-feature-icon"><i class="fas fa-clock"></i></div>
                        <div class="why-feature-body">
                            <h4>On-Time Delivery</h4>
                            <p>Our tracking technology and experienced team ensure your shipment arrives exactly when promised.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Icon Cards -->
            <div class="why-cards" data-aos="fade-left">
                <div class="why-stat-card">
                    <i class="fas fa-certificate"></i>
                    <strong>ISO Certified</strong>
                    <span>Quality Management</span>
                </div>
                <div class="why-stat-card">
                    <i class="fas fa-route"></i>
                    <strong>150+</strong>
                    <span>Global Routes</span>
                </div>
                <div class="why-stat-card">
                    <i class="fas fa-handshake"></i>
                    <strong>99.4%</strong>
                    <span>On-Time Rate</span>
                </div>
                <div class="why-stat-card why-stat-accent">
                    <i class="fas fa-star"></i>
                    <strong>4.9 / 5</strong>
                    <span>Customer Rating</span>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ===================================================
     7. TESTIMONIALS
=================================================== --}}
<section class="testimonials-section" id="testimonials">
    <div class="container">
        <div class="section-header centered" data-aos="fade-up">
            <div class="section-label">Testimonials</div>
            <h2 class="section-title">What Our <span>Customers Say</span></h2>
        </div>

        <div class="testimonials-grid">

            <div class="testimonial-card" data-aos="fade-up" data-aos-delay="0">
                <div class="testimonial-quote"><i class="fas fa-quote-left"></i></div>
                <p class="testimonial-text">
                    "When it comes to packaging, crating, and shipping, certain words carry a great deal of weight  experience, know-how, and integrity. Santaship is unrivaled in these areas."
                </p>
                <div class="testimonial-author">
                    <div class="testimonial-avatar">SF</div>
                    <div>
                        <strong>Scotty F. George</strong>
                        <span>Mega International</span>
                    </div>
                    <div class="testimonial-stars">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                </div>
            </div>

            <div class="testimonial-card" data-aos="fade-up" data-aos-delay="100">
                <div class="testimonial-quote"><i class="fas fa-quote-left"></i></div>
                <p class="testimonial-text">
                    "Santaship handled our college move with incredible care and professionalism. They packed everything, shipped it safely, and it arrived two days before we expected. Absolutely flawless."
                </p>
                <div class="testimonial-author">
                    <div class="testimonial-avatar">ML</div>
                    <div>
                        <strong>Maria L. Thompson</strong>
                        <span>Private Client</span>
                    </div>
                    <div class="testimonial-stars">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                </div>
            </div>

            <div class="testimonial-card" data-aos="fade-up" data-aos-delay="200">
                <div class="testimonial-quote"><i class="fas fa-quote-left"></i></div>
                <p class="testimonial-text">
                    "We've used Santaship for our industrial equipment shipments for three years. Their intermodal service has saved us both time and money. A reliable partner we trust completely."
                </p>
                <div class="testimonial-author">
                    <div class="testimonial-avatar">JK</div>
                    <div>
                        <strong>James K. Osei</strong>
                        <span>TechCargo GmbH</span>
                    </div>
                    <div class="testimonial-stars">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ===================================================
     8. FINAL CTA BAND
=================================================== --}}
<section class="cta-band">
    <div class="cta-band-bg"></div>
    <div class="container">
        <div class="cta-band-inner" data-aos="zoom-in">
            <div class="cta-band-icon"><i class="fas fa-shipping-fast"></i></div>
            <div class="cta-band-text">
                <h2>Ready to Move Your Cargo?</h2>
                <p>Talk to our logistics experts today  fast response guaranteed within 1 business hour.</p>
            </div>
            <div class="cta-band-actions">
                <a href="{{ url('/contact') }}" class="btn btn-white">
                    <i class="fas fa-paper-plane"></i> Request a Quote
                </a>
                <a href="{{ url('/track-now') }}" class="btn btn-outline-white">
                    <i class="fas fa-search-location"></i> Track Shipment
                </a>
            </div>
        </div>
    </div>
</section>

{{-- ===================================================
     HOMEPAGE STYLES
=================================================== --}}
<style>
/* ————————————————————————————
   GLOBAL OVERFLOW GUARD (prevents horizontal shake)
———————————————————————————— */
section, .hero, .quick-actions, .stats-band,
.about-section, .services-section, .why-section,
.testimonials-section, .cta-band {
    overflow-x: hidden;
    max-width: 100%;
    position: relative;
}

/* ————————————————————————————
   HERO SECTION
———————————————————————————— */
.hero {
    position: relative;
    min-height: 100vh;
    display: flex; align-items: center;
    overflow: hidden;
}
.hero-bg {
    position: absolute; inset: 0; z-index: 0;
    background:
        linear-gradient(135deg, rgba(13,27,42,.95) 0%, rgba(26,58,92,.90) 50%, rgba(13,27,42,.93) 100%),
        url('https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=1600&q=80') center/cover no-repeat;
}
.hero-overlay {
    position: absolute; inset: 0;
    background: radial-gradient(ellipse at 70% 50%, rgba(232,146,10,.15) 0%, transparent 60%);
}
.hero-inner {
    position: relative; z-index: 1;
    display: grid; grid-template-columns: 1fr 1fr;
    gap: 64px; align-items: center;
    padding-top: 48px; padding-bottom: 48px;
    min-height: 100vh;
}
/* Badge */
.hero-badge {
    display: inline-flex; align-items: center; gap: 8px;
    background: rgba(232,146,10,.15); color: var(--accent);
    border: 1px solid rgba(232,146,10,.35); border-radius: 50px;
    padding: 7px 18px; font-size: 13px; font-weight: 600;
    margin-bottom: 22px; letter-spacing: .5px;
}
.hero-title {
    font-family: 'Rajdhani', sans-serif;
    font-size: clamp(42px, 5.5vw, 72px);
    font-weight: 700; color: var(--white);
    line-height: 1.05; margin-bottom: 24px;
}
.hero-title-accent { color: var(--accent); }
.hero-desc {
    font-size: 17px; color: rgba(255,255,255,.78);
    line-height: 1.8; max-width: 520px; margin-bottom: 36px;
}
.hero-actions { display: flex; gap: 14px; flex-wrap: wrap; margin-bottom: 40px; }
.hero-trust {
    display: flex; gap: 28px; flex-wrap: wrap;
    padding-top: 32px; border-top: 1px solid rgba(255,255,255,.12);
}
.trust-item {
    display: flex; align-items: center; gap: 8px;
    font-size: 13px; font-weight: 500; color: rgba(255,255,255,.7);
}
.trust-item i { color: var(--accent); }
/* Tracking Card */
.hero-track-card {
    background: var(--white); border-radius: var(--radius-xl);
    padding: 36px; box-shadow: var(--shadow-xl);
}
.track-card-header {
    display: flex; align-items: center; gap: 16px;
    margin-bottom: 28px; padding-bottom: 20px;
    border-bottom: 1px solid var(--border);
}
.track-card-header i {
    font-size: 28px; color: var(--accent);
    background: rgba(232,146,10,.12); padding: 14px;
    border-radius: var(--radius-md);
}
.track-card-header strong { display: block; font-size: 18px; font-weight: 700; color: var(--primary); }
.track-card-header span { font-size: 13px; color: var(--text-muted); }
.track-form { margin-bottom: 20px; }
.track-input-wrap {
    display: flex; align-items: center; gap: 12px;
    background: var(--off-white); border: 2px solid var(--border);
    border-radius: var(--radius-md); padding: 14px 16px;
    margin-bottom: 16px; transition: var(--transition);
}
.track-input-wrap:focus-within { border-color: var(--accent); background: var(--white); }
.track-input-wrap i { color: var(--text-light); font-size: 16px; flex-shrink: 0; }
.track-input-wrap input {
    flex: 1; border: none; background: transparent;
    font-size: 15px; color: var(--text); outline: none; font-family: 'Inter', sans-serif;
}
.track-input-wrap input::placeholder { color: var(--text-light); }
.track-submit { width: 100%; justify-content: center; padding: 14px; border-radius: var(--radius-md); }
.track-example { display: flex; align-items: center; gap: 8px; flex-wrap: wrap; font-size: 12px; color: var(--text-muted); }
.track-tag {
    background: var(--light-gray); color: var(--text-muted);
    padding: 3px 10px; border-radius: 50px; font-size: 11px; font-weight: 500;
}
/* Scroll indicator */
.hero-scroll {
    position: absolute; bottom: 32px; left: 50%; transform: translateX(-50%);
    color: rgba(255,255,255,.5); font-size: 20px; z-index: 2;
    animation: bounce 2s infinite;
}
@keyframes bounce { 0%,100%{transform:translateX(-50%) translateY(0)} 50%{transform:translateX(-50%) translateY(8px)} }

/* ————————————————————————————
   QUICK ACTIONS
———————————————————————————— */
.quick-actions {
    padding: 0;
    margin-top: -2px;
    background: var(--white);
}
.qa-grid {
    display: grid; grid-template-columns: repeat(3, 1fr);
    gap: 0; border-top: 4px solid var(--border);
}
.qa-card {
    padding: 40px 36px; border-right: 1px solid var(--border);
    transition: var(--transition); background: var(--white);
}
.qa-card:last-child { border-right: none; }
.qa-card:hover { background: var(--off-white); }
.qa-card-featured { background: var(--primary); }
.qa-card-featured:hover { background: var(--primary-mid); }
.qa-card-featured h3, .qa-card-featured p, .qa-card-featured .qa-link { color: var(--white) !important; }
.qa-card-featured .qa-icon { background: rgba(255,255,255,.12); color: var(--accent); }
.qa-icon {
    width: 56px; height: 56px; border-radius: var(--radius-md);
    background: rgba(232,146,10,.1); color: var(--accent);
    display: flex; align-items: center; justify-content: center;
    font-size: 22px; margin-bottom: 18px;
}
.qa-card h3 { font-size: 19px; font-weight: 700; color: var(--primary); margin-bottom: 10px; }
.qa-card p { font-size: 14px; color: var(--text-muted); line-height: 1.7; margin-bottom: 20px; }
.qa-link {
    display: inline-flex; align-items: center; gap: 6px;
    font-size: 14px; font-weight: 600; color: var(--accent);
}
.qa-link i { transition: var(--transition); }
.qa-link:hover i { transform: translateX(4px); }

/* ————————————————————————————
   STATS BAND
———————————————————————————— */
.stats-band {
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-mid) 100%);
    padding: 64px 0; position: relative; overflow: hidden;
}
.stats-band::before {
    content: ''; position: absolute; inset: 0;
    background: radial-gradient(ellipse at 50% 50%, rgba(232,146,10,.1) 0%, transparent 70%);
}
.stats-grid {
    display: grid; grid-template-columns: repeat(4, 1fr);
    gap: 32px; position: relative;
}
.stat-item {
    text-align: center; padding: 32px 20px;
    border-right: 1px solid rgba(255,255,255,.1);
}
.stat-item:last-child { border-right: none; }
.stat-icon {
    width: 52px; height: 52px; border-radius: 50%;
    background: rgba(232,146,10,.15); color: var(--accent);
    display: flex; align-items: center; justify-content: center;
    font-size: 20px; margin: 0 auto 16px;
}
.stat-number {
    display: inline; font-family: 'Rajdhani', sans-serif;
    font-size: 52px; font-weight: 700; color: var(--white); line-height: 1;
}
.stat-suffix { display: inline; font-size: 32px; font-weight: 700; color: var(--accent); }
.stat-label { font-size: 14px; color: rgba(255,255,255,.65); margin-top: 8px; font-weight: 500; }

/* ————————————————————————————
   ABOUT SECTION
———————————————————————————— */
.about-section { background: var(--off-white); }
.about-grid {
    display: grid; grid-template-columns: 1fr 1fr;
    gap: 80px; align-items: center;
}
.about-visual { position: relative; }
.about-img-main {
    border-radius: var(--radius-lg); overflow: hidden;
    box-shadow: var(--shadow-lg); max-width: 380px;
}
.about-img-main img { width: 100%; height: 450px; object-fit: cover; }
.about-img-accent {
    position: absolute; bottom: -30px; right: 0;
    width: 200px; border-radius: var(--radius-md); overflow: hidden;
    box-shadow: var(--shadow-xl);
    border: 4px solid var(--white);
}
.about-img-accent img { width: 100%; height: 180px; object-fit: cover; }
.about-experience-badge {
    position: absolute; top: 24px; right: 0;
    background: var(--accent);
    padding: 20px 24px; border-radius: var(--radius-md);
    text-align: center; box-shadow: var(--shadow-lg);
}
.exp-num { display: block; font-family: 'Rajdhani', sans-serif; font-size: 36px; font-weight: 700; color: var(--white); line-height: 1; }
.exp-text { font-size: 11px; color: rgba(255,255,255,.9); font-weight: 600; text-transform: uppercase; letter-spacing: 1px; }
.about-lead { font-size: 17px; color: var(--primary); font-weight: 500; line-height: 1.7; margin: 20px 0 16px; }
.about-text { color: var(--text-muted); line-height: 1.9; margin-bottom: 28px; }
.about-features { display: flex; flex-direction: column; gap: 12px; margin-bottom: 32px; }
.about-feature {
    display: flex; align-items: center; gap: 12px;
    font-size: 15px; color: var(--text);
}
.about-feature i { color: var(--accent); font-size: 16px; flex-shrink: 0; }
.about-actions { display: flex; gap: 14px; flex-wrap: wrap; }

/* ————————————————————————————
   SERVICES SECTION
———————————————————————————— */
.services-section {
    background: var(--white); position: relative;
}
.section-bg-pattern {
    position: absolute; inset: 0; opacity: .03;
    background-image: radial-gradient(var(--primary) 1px, transparent 1px);
    background-size: 28px 28px;
    pointer-events: none;
}
.section-header.centered { text-align: center; margin-bottom: 60px; }
.section-header.centered .section-label { justify-content: center; }
.section-header.centered .section-subtitle { margin: 14px auto 0; }
.services-grid {
    display: grid; grid-template-columns: repeat(3, 1fr);
    gap: 28px;
}
.service-card {
    border-radius: var(--radius-lg); overflow: hidden;
    background: var(--white);
    box-shadow: var(--shadow-sm);
    border: 1px solid var(--border);
    transition: var(--transition);
}
.service-card:hover { transform: translateY(-6px); box-shadow: var(--shadow-lg); border-color: var(--accent); }
.service-card-img { position: relative; height: 200px; overflow: hidden; }
.service-card-img img { width: 100%; height: 100%; object-fit: cover; transition: transform .5s ease; }
.service-card:hover .service-card-img img { transform: scale(1.06); }
.service-card-overlay {
    position: absolute; inset: 0;
    background: linear-gradient(to bottom, transparent 40%, rgba(13,27,42,.5) 100%);
}
.service-card-body { padding: 28px; position: relative; }
.service-icon {
    position: absolute; top: -24px; right: 24px;
    width: 48px; height: 48px; border-radius: 50%;
    background: var(--accent); color: var(--white);
    display: flex; align-items: center; justify-content: center;
    font-size: 18px; box-shadow: 0 4px 16px rgba(232,146,10,.4);
}
.service-title {
    font-family: 'Rajdhani', sans-serif;
    font-size: 20px; font-weight: 700; color: var(--primary);
    margin-bottom: 10px;
}
.service-card p { font-size: 14px; color: var(--text-muted); line-height: 1.8; margin-bottom: 18px; }
.service-link {
    display: inline-flex; align-items: center; gap: 6px;
    font-size: 14px; font-weight: 600; color: var(--accent);
}
.service-link i { transition: var(--transition); }
.service-link:hover i { transform: translateX(4px); }
.services-cta { text-align: center; margin-top: 48px; }

/* ————————————————————————————
   WHY CHOOSE US
———————————————————————————— */
.why-section { background: var(--off-white); }
.why-grid {
    display: grid; grid-template-columns: 1fr 1fr;
    gap: 80px; align-items: start;
}
.why-features { display: flex; flex-direction: column; gap: 28px; margin-top: 32px; }
.why-feature { display: flex; gap: 20px; align-items: flex-start; }
.why-feature-icon {
    width: 52px; height: 52px; border-radius: var(--radius-md); flex-shrink: 0;
    background: linear-gradient(135deg, var(--accent) 0%, var(--accent-hover) 100%);
    color: var(--white); display: flex; align-items: center; justify-content: center;
    font-size: 20px; box-shadow: 0 4px 14px rgba(232,146,10,.35);
}
.why-feature-body h4 { font-size: 16px; font-weight: 700; color: var(--primary); margin-bottom: 6px; }
.why-feature-body p { font-size: 14px; color: var(--text-muted); line-height: 1.7; }
.why-cards {
    display: grid; grid-template-columns: 1fr 1fr;
    gap: 20px; padding-top: 76px;
}
.why-stat-card {
    background: var(--white); border-radius: var(--radius-lg);
    padding: 32px 24px; text-align: center;
    box-shadow: var(--shadow-md); border: 1px solid var(--border);
    transition: var(--transition);
}
.why-stat-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-lg); }
.why-stat-card i { font-size: 28px; color: var(--accent); margin-bottom: 12px; display: block; }
.why-stat-card strong { display: block; font-family: 'Rajdhani', sans-serif; font-size: 28px; font-weight: 700; color: var(--primary); line-height: 1.1; }
.why-stat-card span { font-size: 13px; color: var(--text-muted); font-weight: 500; }
.why-stat-accent {
    background: linear-gradient(135deg, var(--accent) 0%, var(--accent-hover) 100%);
    border-color: transparent;
}
.why-stat-accent i, .why-stat-accent strong, .why-stat-accent span { color: var(--white) !important; }

/* ————————————————————————————
   TESTIMONIALS
———————————————————————————— */
.testimonials-section {
    background: var(--primary);
    position: relative; overflow: hidden;
}
.testimonials-section::before {
    content: ''; position: absolute; inset: 0;
    background: radial-gradient(ellipse at 50% 0%, rgba(232,146,10,.12) 0%, transparent 60%);
    pointer-events: none;
}
.testimonials-section .section-label::before { background: var(--accent); }
.testimonials-section .section-title { color: var(--white); }
.testimonials-grid {
    display: grid; grid-template-columns: repeat(3, 1fr);
    gap: 28px; margin-top: 52px; position: relative;
}
.testimonial-card {
    background: rgba(255,255,255,.06); border: 1px solid rgba(255,255,255,.1);
    border-radius: var(--radius-lg); padding: 36px;
    transition: var(--transition);
}
.testimonial-card:hover { background: rgba(255,255,255,.1); transform: translateY(-4px); }
.testimonial-quote { font-size: 32px; color: var(--accent); margin-bottom: 18px; }
.testimonial-text { font-size: 15px; color: rgba(255,255,255,.82); line-height: 1.8; margin-bottom: 28px; font-style: italic; }
.testimonial-author { display: flex; align-items: center; gap: 14px; flex-wrap: wrap; }
.testimonial-avatar {
    width: 44px; height: 44px; border-radius: 50%;
    background: linear-gradient(135deg, var(--accent), var(--accent-hover));
    color: var(--white); display: flex; align-items: center; justify-content: center;
    font-size: 14px; font-weight: 700; flex-shrink: 0;
}
.testimonial-author strong { display: block; color: var(--white); font-size: 15px; font-weight: 600; }
.testimonial-author span { font-size: 13px; color: rgba(255,255,255,.55); }
.testimonial-stars { margin-left: auto; color: var(--accent); font-size: 13px; display: flex; gap: 3px; }

/* ————————————————————————————
   CTA BAND
———————————————————————————— */
.cta-band {
    position: relative; overflow: hidden;
    padding: 80px 0;
    background: linear-gradient(135deg, var(--accent) 0%, var(--accent-hover) 100%);
}
.cta-band-bg {
    position: absolute; inset: 0;
    background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23FFFFFF' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}
.cta-band-inner {
    display: flex; align-items: center; justify-content: center;
    gap: 40px; flex-wrap: wrap; text-align: center;
    flex-direction: column; position: relative;
}
.cta-band-icon { font-size: 48px; color: rgba(255,255,255,.3); }
.cta-band-text h2 {
    font-family: 'Rajdhani', sans-serif;
    font-size: clamp(28px, 4vw, 44px); font-weight: 700;
    color: var(--white); margin-bottom: 12px;
}
.cta-band-text p { font-size: 17px; color: rgba(255,255,255,.88); max-width: 520px; margin: 0 auto; }
.cta-band-actions { display: flex; gap: 16px; flex-wrap: wrap; justify-content: center; margin-top: 8px; }

/* ————————————————————————————
   RESPONSIVE HOMEPAGE
———————————————————————————— */
@media (max-width: 1024px) {
    .hero-inner { grid-template-columns: 1fr; gap: 48px; min-height: auto; padding-top: 80px; }
    .hero-content { max-width: 600px; }
    .about-grid { grid-template-columns: 1fr; gap: 48px; }
    .about-img-accent, .about-experience-badge { display: none; }
    .why-grid { grid-template-columns: 1fr; gap: 48px; }
    .why-cards { padding-top: 0; }
    .stats-grid { grid-template-columns: repeat(2, 1fr); }
    .stat-item { border-right: none; border-bottom: 1px solid rgba(255,255,255,.1); }
    .stat-item:last-child, .stat-item:nth-child(2) { border-bottom: none; }
}
@media (max-width: 768px) {
    /* Prevent AOS slide animations from causing horizontal overflow */
    [data-aos='fade-right'],
    [data-aos='fade-left'] {
        transform: none !important;
    }
    .hero-inner { padding-top: 72px; }
    .hero-trust { gap: 16px; }
    .trust-item { font-size: 12px; }
    .qa-grid { grid-template-columns: 1fr; }
    .qa-card { border-right: none; border-bottom: 1px solid var(--border); }
    .services-grid { grid-template-columns: 1fr; }
    .testimonials-grid { grid-template-columns: 1fr; }
    .why-cards { grid-template-columns: 1fr 1fr; }
    .stats-grid { grid-template-columns: repeat(2, 1fr); }
    .hero-track-card { padding: 24px; }
    .about-visual { overflow: hidden; }
    .about-img-main { max-width: 100%; }
    .about-img-main img { height: 300px; }
}
@media (max-width: 480px) {
    /* Disable ALL AOS slide/zoom animations that cause shake */
    [data-aos] {
        transform: none !important;
        opacity: 1 !important;
        transition: none !important;
    }
    .hero-title { font-size: 32px; }
    .hero-desc { font-size: 15px; }
    .hero-actions { flex-direction: column; }
    .hero-actions .btn { width: 100%; justify-content: center; }
    .hero-trust { gap: 12px; }
    .hero-track-card { padding: 20px 16px; border-radius: var(--radius-lg); }
    .track-card-header { gap: 12px; margin-bottom: 20px; }
    .track-card-header i { font-size: 22px; padding: 10px; }
    .why-cards { grid-template-columns: 1fr 1fr; gap: 12px; }
    .why-stat-card { padding: 20px 12px; }
    .stats-grid { grid-template-columns: 1fr 1fr; }
    .stat-number { font-size: 40px; }
    .cta-band-actions { flex-direction: column; align-items: center; }
    .cta-band-actions .btn { width: 100%; justify-content: center; }
    .testimonials-grid { grid-template-columns: 1fr; }
    .testimonial-stars { margin-left: 0; width: 100%; margin-top: 8px; }
    .testimonial-author { flex-wrap: wrap; }
    .qa-card { padding: 28px 20px; }
    .service-card-body { padding: 20px; }
}
</style>

{{-- ===================================================
     COUNTER ANIMATION SCRIPT
=================================================== --}}
<script>
    (function () {
        const counters = document.querySelectorAll('.stat-number');
        const speed = 2000;

        const animate = (counter) => {
            const target = +counter.getAttribute('data-target');
            const step = Math.ceil(target / (speed / 16));
            let current = 0;

            const timer = setInterval(() => {
                current += step;
                if (current >= target) {
                    counter.textContent = target.toLocaleString();
                    clearInterval(timer);
                } else {
                    counter.textContent = current.toLocaleString();
                }
            }, 16);
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animate(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.4 });

        counters.forEach(c => observer.observe(c));
    })();
</script>

@include('home.footer')
