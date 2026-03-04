@include('home.header')

{{-- ======================================================
     SANTASHIP LOGISTICS — SERVICES PAGE
====================================================== --}}

{{-- PAGE HERO --}}
<section class="page-hero">
    <div class="container page-hero-inner">
        <h1 class="page-hero-title">Our Services</h1>
        <nav class="breadcrumb-nav" aria-label="breadcrumb">
            <a href="{{ url('/') }}">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>Services</span>
        </nav>
    </div>
</section>

{{-- SERVICES INTRO --}}
<section class="services-intro-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <div class="section-label">What We Offer</div>
            <h2 class="section-title">Comprehensive <span>Logistics Solutions</span></h2>
            <p class="section-subtitle">From air freight to final-mile delivery, Santaship Logistics provides end-to-end shipping solutions tailored to businesses of every size.</p>
        </div>
    </div>
</section>

{{-- SERVICE CARDS --}}
<section class="services-cards-section">
    <div class="container">
        <div class="services-grid">

            {{-- Air Freight --}}
            <div class="service-card" data-aos="fade-up" data-aos-delay="0">
                <div class="service-icon-wrap">
                    <i class="fas fa-plane-departure"></i>
                </div>
                <h3>Air Freight</h3>
                <p>Time-critical shipments delivered fast with our express and deferred air freight services across all major international routes. Fully tracked, door-to-door.</p>
                <ul class="service-features">
                    <li><i class="fas fa-check"></i> Express &amp; economy options</li>
                    <li><i class="fas fa-check"></i> Hazmat &amp; special cargo</li>
                    <li><i class="fas fa-check"></i> Charter services available</li>
                </ul>
                <a href="{{ url('/contact') }}" class="service-card-link">Get a Quote <i class="fas fa-arrow-right"></i></a>
            </div>

            {{-- Intermodal Freight --}}
            <div class="service-card" data-aos="fade-up" data-aos-delay="80">
                <div class="service-icon-wrap">
                    <i class="fas fa-ship"></i>
                </div>
                <h3>Intermodal Freight</h3>
                <p>Seamlessly combine sea, rail, and road transport for cost-optimised delivery of high-volume and bulk shipments anywhere in the world.</p>
                <ul class="service-features">
                    <li><i class="fas fa-check"></i> FCL &amp; LCL sea freight</li>
                    <li><i class="fas fa-check"></i> Multi-modal route planning</li>
                    <li><i class="fas fa-check"></i> Port &amp; customs clearance</li>
                </ul>
                <a href="{{ url('/contact') }}" class="service-card-link">Get a Quote <i class="fas fa-arrow-right"></i></a>
            </div>

            {{-- Dedicated Transport --}}
            <div class="service-card" data-aos="fade-up" data-aos-delay="160">
                <div class="service-icon-wrap">
                    <i class="fas fa-truck"></i>
                </div>
                <h3>Dedicated Transport</h3>
                <p>Full-truck and partial-load road freight solutions for domestic and cross-border deliveries. Dedicated vehicles ensure your cargo is the only priority.</p>
                <ul class="service-features">
                    <li><i class="fas fa-check"></i> FTL &amp; LTL options</li>
                    <li><i class="fas fa-check"></i> Temperature-controlled</li>
                    <li><i class="fas fa-check"></i> GPS-tracked fleet</li>
                </ul>
                <a href="{{ url('/contact') }}" class="service-card-link">Get a Quote <i class="fas fa-arrow-right"></i></a>
            </div>

            {{-- Pickup & Delivery --}}
            <div class="service-card" data-aos="fade-up" data-aos-delay="0">
                <div class="service-icon-wrap">
                    <i class="fas fa-box-open"></i>
                </div>
                <h3>Pickup &amp; Delivery</h3>
                <p>Scheduled and on-demand pickup from your door with last-mile delivery to end recipients — domestic or international. Simple, hassle-free.</p>
                <ul class="service-features">
                    <li><i class="fas fa-check"></i> Same-day &amp; next-day pickup</li>
                    <li><i class="fas fa-check"></i> Proof of delivery</li>
                    <li><i class="fas fa-check"></i> Residential &amp; commercial</li>
                </ul>
                <a href="{{ url('/contact') }}" class="service-card-link">Get a Quote <i class="fas fa-arrow-right"></i></a>
            </div>

            {{-- Custom Crating --}}
            <div class="service-card" data-aos="fade-up" data-aos-delay="80">
                <div class="service-icon-wrap">
                    <i class="fas fa-cubes"></i>
                </div>
                <h3>Custom Crating</h3>
                <p>Professional crating and packing for fragile, high-value, and oversized items. Our packaging specialists ensure your goods arrive in perfect condition.</p>
                <ul class="service-features">
                    <li><i class="fas fa-check"></i> Wooden &amp; foam crating</li>
                    <li><i class="fas fa-check"></i> ISPM-15 compliant</li>
                    <li><i class="fas fa-check"></i> Artwork &amp; electronics</li>
                </ul>
                <a href="{{ url('/contact') }}" class="service-card-link">Get a Quote <i class="fas fa-arrow-right"></i></a>
            </div>

            {{-- Truckload Logistics --}}
            <div class="service-card" data-aos="fade-up" data-aos-delay="160">
                <div class="service-icon-wrap">
                    <i class="fas fa-warehouse"></i>
                </div>
                <h3>Warehousing &amp; Storage</h3>
                <p>Secure short and long-term storage facilities with inventory management, pick-and-pack services, and distribution support for growing businesses.</p>
                <ul class="service-features">
                    <li><i class="fas fa-check"></i> Climate-controlled units</li>
                    <li><i class="fas fa-check"></i> 24/7 security &amp; CCTV</li>
                    <li><i class="fas fa-check"></i> Inventory management</li>
                </ul>
                <a href="{{ url('/contact') }}" class="service-card-link">Get a Quote <i class="fas fa-arrow-right"></i></a>
            </div>

        </div>
    </div>
</section>

{{-- PROCESS SECTION --}}
<section class="process-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <div class="section-label">How It Works</div>
            <h2 class="section-title">Simple <span>4-Step Process</span></h2>
            <p class="section-subtitle">Booking your shipment with Santaship is quick and straightforward.</p>
        </div>
        <div class="process-steps">
            <div class="step" data-aos="fade-up" data-aos-delay="0">
                <div class="step-number">01</div>
                <div class="step-icon"><i class="fas fa-clipboard-list"></i></div>
                <h4>Request a Quote</h4>
                <p>Fill out our booking form or call us with your shipment details — we'll provide a fast, transparent quote.</p>
            </div>
            <div class="step-arrow"><i class="fas fa-chevron-right"></i></div>
            <div class="step" data-aos="fade-up" data-aos-delay="100">
                <div class="step-number">02</div>
                <div class="step-icon"><i class="fas fa-box"></i></div>
                <h4>Pack &amp; Hand Over</h4>
                <p>Prepare your goods or let our team handle packing. We'll arrange pickup or accept drop-off at our depot.</p>
            </div>
            <div class="step-arrow"><i class="fas fa-chevron-right"></i></div>
            <div class="step" data-aos="fade-up" data-aos-delay="200">
                <div class="step-number">03</div>
                <div class="step-icon"><i class="fas fa-satellite-dish"></i></div>
                <h4>Live Tracking</h4>
                <p>Track your shipment in real time via our online portal. Receive milestone notifications every step of the way.</p>
            </div>
            <div class="step-arrow"><i class="fas fa-chevron-right"></i></div>
            <div class="step" data-aos="fade-up" data-aos-delay="300">
                <div class="step-number">04</div>
                <div class="step-icon"><i class="fas fa-check-circle"></i></div>
                <h4>Delivery &amp; POD</h4>
                <p>Your cargo is delivered safely to the recipient, complete with signed Proof of Delivery for your records.</p>
            </div>
        </div>
    </div>
</section>

{{-- CTA BAND --}}
<section class="page-cta-band">
    <div class="container">
        <div class="cta-content" data-aos="fade-up">
            <h2>Need a Custom Logistics Solution?</h2>
            <p>Our experts are ready to design a shipping plan built around your exact requirements.</p>
            <div class="cta-actions">
                <a href="{{ url('/contact') }}" class="cta-btn-primary">Contact Us</a>
                <a href="{{ url('/shipment/track') }}" class="cta-btn-outline">Track a Shipment</a>
            </div>
        </div>
    </div>
</section>

<style>
/* =========================================================
   SERVICES PAGE STYLES (inherits page-hero, page-cta-band from about)
========================================================= */
.services-intro-section { padding: 80px 0 40px; }

.services-cards-section { padding: 60px 0 100px; }
.services-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
}

.service-card {
    background: var(--white);
    border-radius: 16px;
    padding: 36px 28px;
    border: 1px solid var(--border-light);
    transition: border-color 0.3s, box-shadow 0.3s, transform 0.3s;
}
.service-card:hover {
    border-color: var(--accent);
    box-shadow: 0 12px 40px rgba(0,0,0,0.08);
    transform: translateY(-4px);
}
.service-icon-wrap {
    width: 64px; height: 64px;
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-mid) 100%);
    border-radius: 14px;
    display: flex; align-items: center; justify-content: center;
    margin-bottom: 1.4rem;
}
.service-icon-wrap i { font-size: 1.6rem; color: var(--accent); }
.service-card h3 {
    font-family: var(--font-heading);
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: 0.8rem;
}
.service-card p { font-size: 0.9rem; color: var(--text-mid); line-height: 1.7; margin-bottom: 1.2rem; }

.service-features {
    list-style: none;
    padding: 0; margin: 0 0 1.4rem;
}
.service-features li {
    display: flex; align-items: center; gap: 8px;
    font-size: 0.875rem; color: var(--text-dark);
    padding: 5px 0;
}
.service-features li i { color: var(--accent); font-size: 0.75rem; flex-shrink: 0; }

.service-card-link {
    display: inline-flex; align-items: center; gap: 6px;
    color: var(--accent);
    font-weight: 700;
    font-size: 0.9rem;
    text-decoration: none;
    transition: gap 0.2s;
}
.service-card-link:hover { gap: 10px; }

/* Process */
.process-section { padding: 100px 0; background: var(--bg-light); }
.process-steps {
    display: flex;
    align-items: flex-start;
    justify-content: center;
    gap: 10px;
    margin-top: 60px;
    flex-wrap: wrap;
}
.step {
    flex: 1;
    min-width: 180px;
    max-width: 220px;
    text-align: center;
    padding: 20px;
}
.step-number {
    font-family: var(--font-heading);
    font-size: 3rem;
    font-weight: 700;
    color: var(--accent);
    opacity: 0.25;
    line-height: 1;
    margin-bottom: -10px;
}
.step-icon {
    width: 70px; height: 70px;
    background: linear-gradient(135deg, var(--primary), var(--primary-mid));
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    margin: 0 auto 1rem;
}
.step-icon i { font-size: 1.5rem; color: var(--accent); }
.step h4 {
    font-family: var(--font-heading);
    font-weight: 700;
    color: var(--primary);
    margin-bottom: 0.5rem;
}
.step p { font-size: 0.85rem; color: var(--text-mid); line-height: 1.6; }
.step-arrow {
    padding-top: 60px;
    color: var(--accent);
    font-size: 1.4rem;
    opacity: 0.4;
    flex-shrink: 0;
}

/* Page hero & CTA band (reused across inner pages) */
.page-hero {
    position: relative;
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-mid) 100%);
    padding: 120px 0 80px;
    overflow: hidden;
}
.page-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}
.page-hero-inner { position: relative; text-align: center; }
.page-hero-title {
    font-family: var(--font-heading);
    font-size: clamp(2rem, 5vw, 3.5rem);
    font-weight: 700;
    color: var(--white);
    margin-bottom: 1rem;
}
.breadcrumb-nav {
    display: flex; align-items: center; justify-content: center;
    gap: 0.5rem; font-size: 0.9rem;
}
.breadcrumb-nav a { color: var(--accent); text-decoration: none; }
.breadcrumb-nav a:hover { text-decoration: underline; }
.breadcrumb-nav i { color: rgba(255,255,255,0.4); font-size: 0.7rem; }
.breadcrumb-nav span { color: rgba(255,255,255,0.7); }

.page-cta-band {
    background: linear-gradient(135deg, var(--accent) 0%, var(--accent-dark) 100%);
    padding: 80px 0;
    text-align: center;
}
.page-cta-band .cta-content h2 {
    font-family: var(--font-heading);
    font-size: clamp(1.8rem, 3vw, 2.6rem);
    font-weight: 700;
    color: var(--white);
    margin-bottom: 0.8rem;
}
.page-cta-band .cta-content p { color: rgba(255,255,255,0.85); font-size: 1.05rem; margin-bottom: 2rem; }
.cta-actions { display: flex; gap: 16px; justify-content: center; flex-wrap: wrap; }
.cta-btn-primary {
    background: var(--white); color: var(--accent-dark);
    padding: 14px 32px; border-radius: 8px; font-weight: 700;
    text-decoration: none; transition: transform 0.2s, box-shadow 0.2s;
}
.cta-btn-primary:hover { transform: translateY(-2px); box-shadow: 0 8px 24px rgba(0,0,0,0.15); }
.cta-btn-outline {
    background: transparent; border: 2px solid rgba(255,255,255,0.7);
    color: var(--white); padding: 13px 32px; border-radius: 8px;
    font-weight: 700; text-decoration: none; transition: border-color 0.2s, background 0.2s;
}
.cta-btn-outline:hover { border-color: var(--white); background: rgba(255,255,255,0.1); }

/* Section reused */
.section-header { text-align: center; margin-bottom: 20px; }
.section-label {
    display: inline-block;
    background: rgba(232,146,10,0.12);
    color: var(--accent);
    font-size: 0.8rem; font-weight: 700;
    text-transform: uppercase; letter-spacing: 2px;
    padding: 6px 16px; border-radius: 20px;
    margin-bottom: 1rem;
}
.section-title {
    font-family: var(--font-heading);
    font-size: clamp(1.8rem, 3vw, 2.6rem);
    font-weight: 700; color: var(--primary);
    margin-bottom: 1rem; line-height: 1.2;
}
.section-title span { color: var(--accent); }
.section-subtitle { color: var(--text-mid); max-width: 600px; margin: 0 auto; line-height: 1.7; }

@media (max-width: 900px) {
    .services-grid { grid-template-columns: 1fr 1fr; }
    .process-steps { flex-direction: column; align-items: center; }
    .step-arrow { display: none; }
}
@media (max-width: 600px) {
    .services-grid { grid-template-columns: 1fr; }
}
</style>

@include('home.footer')
