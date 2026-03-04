@include('home.header')

{{-- ======================================================
     SANTASHIP LOGISTICS — ABOUT PAGE
====================================================== --}}

{{-- PAGE HERO --}}
<section class="page-hero">
    <div class="page-hero-overlay"></div>
    <div class="container page-hero-inner">
        <h1 class="page-hero-title">About Us</h1>
        <nav class="breadcrumb-nav" aria-label="breadcrumb">
            <a href="{{ url('/') }}">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>About Us</span>
        </nav>
    </div>
</section>

{{-- INTRO / MISSION --}}
<section class="about-intro-section">
    <div class="container">
        <div class="about-intro-grid">
            <div class="about-intro-image" data-aos="fade-right">
                <div class="about-img-wrap">
                    <img src="{{ asset('assets/images/about-warehouse.jpg') }}"
                         onerror="this.style.display='none'; this.parentElement.classList.add('img-fallback')"
                         alt="Santaship warehouse operations">
                    <div class="about-img-badge">
                        <span class="badge-number">10+</span>
                        <span class="badge-label">Years of Excellence</span>
                    </div>
                </div>
            </div>
            <div class="about-intro-content" data-aos="fade-left">
                <div class="section-label">Who We Are</div>
                <h2 class="section-title">Santaship Logistics<br><span>Company Limited</span></h2>
                <p class="about-lead">Santaship Logistics Company Limited is a progressive and diversified transport and logistics company headquartered in West Africa, committed to delivering excellence across global supply chains.</p>
                <p class="about-body">Founded over a decade ago, we have grown from a regional carrier into a trusted international logistics partner, moving cargo to and from 150+ countries around the world. Our core commitment is built on four pillars: <strong>Safety, Customer Satisfaction, Teamwork,</strong> and <strong>Exemplary Performance.</strong></p>
                <div class="about-pillars">
                    <div class="pillar"><i class="fas fa-shield-alt"></i><span>Safety First</span></div>
                    <div class="pillar"><i class="fas fa-users"></i><span>Customer Focus</span></div>
                    <div class="pillar"><i class="fas fa-handshake"></i><span>Teamwork</span></div>
                    <div class="pillar"><i class="fas fa-star"></i><span>Excellence</span></div>
                </div>
                <a href="{{ url('/contact') }}" class="btn-primary-solid">Get in Touch</a>
            </div>
        </div>
    </div>
</section>

{{-- STATS BAND --}}
<section class="about-stats-band">
    <div class="container">
        <div class="stats-row">
            <div class="stat-item" data-aos="fade-up">
                <div class="stat-num">150<span>+</span></div>
                <div class="stat-label">Countries Served</div>
            </div>
            <div class="stat-item" data-aos="fade-up" data-aos-delay="100">
                <div class="stat-num">50K<span>+</span></div>
                <div class="stat-label">Shipments Delivered</div>
            </div>
            <div class="stat-item" data-aos="fade-up" data-aos-delay="200">
                <div class="stat-num">1200<span>+</span></div>
                <div class="stat-label">Happy Clients</div>
            </div>
            <div class="stat-item" data-aos="fade-up" data-aos-delay="300">
                <div class="stat-num">99<span>%</span></div>
                <div class="stat-label">On-Time Delivery</div>
            </div>
        </div>
    </div>
</section>

{{-- MISSION & VISION --}}
<section class="mission-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <div class="section-label">What Drives Us</div>
            <h2 class="section-title">Mission &amp; <span>Vision</span></h2>
        </div>
        <div class="mv-grid">
            <div class="mv-card" data-aos="fade-up" data-aos-delay="0">
                <div class="mv-icon"><i class="fas fa-bullseye"></i></div>
                <h3>Our Mission</h3>
                <p>To provide seamless, reliable, and cost-effective logistics solutions that connect businesses and individuals across the globe—delivering not just packages, but peace of mind.</p>
            </div>
            <div class="mv-card featured" data-aos="fade-up" data-aos-delay="100">
                <div class="mv-icon"><i class="fas fa-binoculars"></i></div>
                <h3>Our Vision</h3>
                <p>To be Africa's most trusted international logistics brand, recognised globally for safety, innovation, and the highest standards of customer service in the freight industry.</p>
            </div>
            <div class="mv-card" data-aos="fade-up" data-aos-delay="200">
                <div class="mv-icon"><i class="fas fa-gem"></i></div>
                <h3>Our Values</h3>
                <p>Integrity, accountability, continuous improvement, and respect for every client's cargo—these principles guide every decision we make, from the warehouse to the last mile.</p>
            </div>
        </div>
    </div>
</section>

{{-- WHY CHOOSE US --}}
<section class="why-about-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <div class="section-label">Our Advantage</div>
            <h2 class="section-title">Why Clients <span>Choose Us</span></h2>
        </div>
        <div class="why-grid">
            <div class="why-item" data-aos="fade-up" data-aos-delay="0">
                <div class="why-icon"><i class="fas fa-globe-africa"></i></div>
                <h4>Global Network</h4>
                <p>Partnerships with carriers, customs agents, and warehouses in over 150 countries ensure your cargo reaches any corner of the world.</p>
            </div>
            <div class="why-item" data-aos="fade-up" data-aos-delay="80">
                <div class="why-icon"><i class="fas fa-satellite-dish"></i></div>
                <h4>Real-Time Tracking</h4>
                <p>Our advanced tracking platform gives you live updates on every shipment, from pick-up to proof of delivery.</p>
            </div>
            <div class="why-item" data-aos="fade-up" data-aos-delay="160">
                <div class="why-icon"><i class="fas fa-user-tie"></i></div>
                <h4>Dedicated Agents</h4>
                <p>Every client is assigned a dedicated account representative who understands your business and proactively resolves issues.</p>
            </div>
            <div class="why-item" data-aos="fade-up" data-aos-delay="240">
                <div class="why-icon"><i class="fas fa-lock"></i></div>
                <h4>Secured Handling</h4>
                <p>ISO-compliant processes, tamper-evident packaging, and end-to-end cargo insurance options protect your valuables at every step.</p>
            </div>
            <div class="why-item" data-aos="fade-up" data-aos-delay="320">
                <div class="why-icon"><i class="fas fa-clock"></i></div>
                <h4>Timely Delivery</h4>
                <p>We maintain a 99%+ on-time delivery record through strategic routing and proactive exception management.</p>
            </div>
            <div class="why-item" data-aos="fade-up" data-aos-delay="400">
                <div class="why-icon"><i class="fas fa-tags"></i></div>
                <h4>Competitive Rates</h4>
                <p>Volume-based pricing models and direct carrier relationships allow us to pass meaningful savings on to our clients.</p>
            </div>
        </div>
    </div>
</section>

{{-- CTA BAND --}}
<section class="page-cta-band">
    <div class="container">
        <div class="cta-content" data-aos="fade-up">
            <h2>Ready to Partner with Santaship?</h2>
            <p>Speak with our logistics experts today and discover how we can simplify your supply chain.</p>
            <div class="cta-actions">
                <a href="{{ url('/contact') }}" class="cta-btn-primary">Contact Us</a>
                <a href="{{ url('/services') }}" class="cta-btn-outline">Our Services</a>
            </div>
        </div>
    </div>
</section>

<style>
/* =========================================================
   ABOUT PAGE STYLES
========================================================= */
/* Page Hero */
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
.page-hero-overlay { display: none; }
.page-hero-inner {
    position: relative;
    text-align: center;
}
.page-hero-title {
    font-family: var(--font-heading);
    font-size: clamp(2rem, 5vw, 3.5rem);
    font-weight: 700;
    color: var(--white);
    margin-bottom: 1rem;
}
.breadcrumb-nav {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    font-size: 0.9rem;
}
.breadcrumb-nav a { color: var(--accent); text-decoration: none; }
.breadcrumb-nav a:hover { text-decoration: underline; }
.breadcrumb-nav i { color: rgba(255,255,255,0.4); font-size: 0.7rem; }
.breadcrumb-nav span { color: rgba(255,255,255,0.7); }

/* Intro */
.about-intro-section { padding: 100px 0; }
.about-intro-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 70px;
    align-items: center;
}
.about-img-wrap {
    position: relative;
    border-radius: 16px;
    overflow: hidden;
    aspect-ratio: 4/3;
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-mid) 100%);
}
.about-img-wrap img {
    width: 100%; height: 100%;
    object-fit: cover;
    display: block;
}
.about-img-wrap.img-fallback {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 340px;
}
.about-img-badge {
    position: absolute;
    bottom: 24px; left: 24px;
    background: var(--accent);
    color: var(--white);
    padding: 16px 24px;
    border-radius: 12px;
    text-align: center;
    box-shadow: 0 8px 24px rgba(232,146,10,0.4);
}
.badge-number { display: block; font-family: var(--font-heading); font-size: 2rem; font-weight: 700; line-height: 1; }
.badge-label { display: block; font-size: 0.75rem; font-weight: 600; text-transform: uppercase; letter-spacing: 1px; margin-top: 4px; }

.about-lead {
    font-size: 1.1rem;
    font-weight: 600;
    color: var(--text-dark);
    margin-bottom: 1rem;
    line-height: 1.6;
}
.about-body { color: var(--text-mid); line-height: 1.8; margin-bottom: 2rem; }

.about-pillars {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 12px;
    margin-bottom: 2rem;
}
.pillar {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 12px 16px;
    background: var(--bg-light);
    border-radius: 8px;
    border-left: 3px solid var(--accent);
    font-weight: 600;
    font-size: 0.9rem;
    color: var(--text-dark);
}
.pillar i { color: var(--accent); font-size: 1rem; }

.btn-primary-solid {
    display: inline-flex; align-items: center; gap: 8px;
    background: var(--accent);
    color: var(--white);
    padding: 14px 32px;
    border-radius: 8px;
    font-weight: 700;
    text-decoration: none;
    font-size: 0.95rem;
    transition: background 0.25s, transform 0.2s;
}
.btn-primary-solid:hover { background: var(--accent-dark); transform: translateY(-2px); }

/* Stats Band */
.about-stats-band {
    background: var(--primary);
    padding: 70px 0;
}
.stats-row {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
    text-align: center;
}
.stat-item .stat-num {
    font-family: var(--font-heading);
    font-size: 3rem;
    font-weight: 700;
    color: var(--white);
    line-height: 1;
}
.stat-item .stat-num span { color: var(--accent); }
.stat-item .stat-label {
    font-size: 0.875rem;
    color: rgba(255,255,255,0.6);
    margin-top: 6px;
    text-transform: uppercase;
    letter-spacing: 1px;
}

/* Mission/Vision */
.mission-section { padding: 100px 0; background: var(--bg-light); }
.mv-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    margin-top: 50px;
}
.mv-card {
    background: var(--white);
    border-radius: 16px;
    padding: 40px 30px;
    text-align: center;
    box-shadow: 0 4px 20px rgba(0,0,0,0.06);
    transition: transform 0.3s, box-shadow 0.3s;
}
.mv-card:hover { transform: translateY(-6px); box-shadow: 0 12px 40px rgba(0,0,0,0.1); }
.mv-card.featured { border-top: 4px solid var(--accent); }
.mv-icon {
    width: 70px; height: 70px;
    background: linear-gradient(135deg, var(--primary), var(--primary-mid));
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    margin: 0 auto 1.5rem;
}
.mv-icon i { font-size: 1.6rem; color: var(--accent); }
.mv-card h3 {
    font-family: var(--font-heading);
    font-size: 1.4rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: 1rem;
}
.mv-card p { color: var(--text-mid); line-height: 1.7; }

/* Why Section */
.why-about-section { padding: 100px 0; }
.why-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    margin-top: 50px;
}
.why-item {
    padding: 30px;
    border-radius: 12px;
    border: 1px solid var(--border-light);
    transition: border-color 0.3s, box-shadow 0.3s;
}
.why-item:hover {
    border-color: var(--accent);
    box-shadow: 0 8px 24px rgba(232,146,10,0.1);
}
.why-icon {
    width: 56px; height: 56px;
    background: var(--bg-light);
    border-radius: 12px;
    display: flex; align-items: center; justify-content: center;
    margin-bottom: 1rem;
}
.why-icon i { font-size: 1.4rem; color: var(--accent); }
.why-item h4 {
    font-family: var(--font-heading);
    font-size: 1.1rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: 0.6rem;
}
.why-item p { font-size: 0.9rem; color: var(--text-mid); line-height: 1.7; }

/* CTA Band */
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
.page-cta-band .cta-content p {
    color: rgba(255,255,255,0.85);
    font-size: 1.05rem;
    margin-bottom: 2rem;
}
.cta-actions { display: flex; gap: 16px; justify-content: center; flex-wrap: wrap; }
.cta-btn-primary {
    background: var(--white);
    color: var(--accent-dark);
    padding: 14px 32px;
    border-radius: 8px;
    font-weight: 700;
    text-decoration: none;
    transition: transform 0.2s, box-shadow 0.2s;
}
.cta-btn-primary:hover { transform: translateY(-2px); box-shadow: 0 8px 24px rgba(0,0,0,0.15); }
.cta-btn-outline {
    background: transparent;
    border: 2px solid rgba(255,255,255,0.7);
    color: var(--white);
    padding: 13px 32px;
    border-radius: 8px;
    font-weight: 700;
    text-decoration: none;
    transition: border-color 0.2s, background 0.2s;
}
.cta-btn-outline:hover { border-color: var(--white); background: rgba(255,255,255,0.1); }

/* Responsive */
@media (max-width: 900px) {
    .about-intro-grid { grid-template-columns: 1fr; gap: 40px; }
    .stats-row { grid-template-columns: repeat(2, 1fr); }
    .mv-grid, .why-grid { grid-template-columns: 1fr 1fr; }
}
@media (max-width: 600px) {
    .stats-row { grid-template-columns: 1fr 1fr; }
    .mv-grid, .why-grid { grid-template-columns: 1fr; }
    .about-pillars { grid-template-columns: 1fr; }
}
</style>

@include('home.footer')
