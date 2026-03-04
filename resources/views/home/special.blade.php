@include('home.header')

{{-- ======================================================
     SANTASHIP LOGISTICS — SPECIAL CARGO SERVICES
====================================================== --}}

{{-- PAGE HERO --}}
<section class="page-hero">
    <div class="container page-hero-inner">
        <h1 class="page-hero-title">Special Cargo Services</h1>
        <nav class="breadcrumb-nav" aria-label="breadcrumb">
            <a href="{{ url('/') }}">Home</a>
            <i class="fas fa-chevron-right"></i>
            <a href="{{ url('/services') }}">Services</a>
            <i class="fas fa-chevron-right"></i>
            <span>Special Cargo</span>
        </nav>
    </div>
</section>

{{-- INTRO --}}
<section class="special-intro-section">
    <div class="container">
        <div class="inner-page-intro" data-aos="fade-up">
            <div class="section-label">High-Care Freight</div>
            <h2 class="section-title">Special Cargo <span>Handling</span></h2>
            <p>Some shipments demand more than standard handling. Santaship Logistics provides specialised care, packaging, compliance, and transport solutions for cargo that requires exceptional attention — from live animals to sensitive electronics and temperature-critical pharmaceuticals.</p>
        </div>
    </div>
</section>

{{-- SPECIAL TYPES --}}
<section class="special-types-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <div class="section-label">Specialist Services</div>
            <h2 class="section-title">What We <span>Specialise In</span></h2>
        </div>
        <div class="special-types-grid">

            <div class="special-type-card" data-aos="fade-up" data-aos-delay="0">
                <div class="special-type-icon"><i class="fas fa-thermometer-half"></i></div>
                <h3>Temperature-Sensitive Cargo</h3>
                <p>Pharmaceuticals, biologics, vaccines, and perishable goods requiring cold-chain logistics with strict temperature monitoring throughout transit.</p>
                <div class="special-type-tag">Cold Chain</div>
            </div>

            <div class="special-type-card" data-aos="fade-up" data-aos-delay="80">
                <div class="special-type-icon"><i class="fas fa-radiation"></i></div>
                <h3>Dangerous Goods (DGR)</h3>
                <p>IATA and ICAO compliant dangerous goods handling — batteries, chemicals, flammables, and other regulated materials with full documentation support.</p>
                <div class="special-type-tag">DGR Compliant</div>
            </div>

            <div class="special-type-card" data-aos="fade-up" data-aos-delay="160">
                <div class="special-type-icon"><i class="fas fa-gem"></i></div>
                <h3>High-Value Cargo</h3>
                <p>Jewellery, artwork, watches, currency, and precious stones transported under enhanced security protocols with end-to-end cargo insurance options.</p>
                <div class="special-type-tag">Insured &amp; Secured</div>
            </div>

            <div class="special-type-card" data-aos="fade-up" data-aos-delay="0">
                <div class="special-type-icon"><i class="fas fa-expand-arrows-alt"></i></div>
                <h3>Oversized &amp; Heavy Lift</h3>
                <p>Industrial machinery, equipment, and project cargo exceeding standard size limits. We provide route surveys, special permits, and dedicated freight solutions.</p>
                <div class="special-type-tag">Heavy Lift</div>
            </div>

            <div class="special-type-card" data-aos="fade-up" data-aos-delay="80">
                <div class="special-type-icon"><i class="fas fa-horse"></i></div>
                <h3>Live Animals</h3>
                <p>IATA Live Animals Regulations compliant transport for livestock, pets, and exotic animals with species-appropriate containers and proper documentation.</p>
                <div class="special-type-tag">IATA LAR</div>
            </div>

            <div class="special-type-card" data-aos="fade-up" data-aos-delay="160">
                <div class="special-type-icon"><i class="fas fa-painting"></i></div>
                <h3>Fine Art &amp; Antiques</h3>
                <p>Museum-quality handling, climate-controlled transport, and custom wooden crating for fine art, antiques, sculptures, and collectibles of all sizes.</p>
                <div class="special-type-tag">Bespoke Crating</div>
            </div>

        </div>
    </div>
</section>

{{-- WHY SPECIAL --}}
<section class="special-why-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <div class="section-label">Our Approach</div>
            <h2 class="section-title">Why Trust Us With <span>Special Cargo</span></h2>
        </div>
        <div class="special-why-grid">
            <div class="why-point" data-aos="fade-up" data-aos-delay="0">
                <i class="fas fa-certificate"></i>
                <h4>Certified Handlers</h4>
                <p>Our staff hold IATA DGR, CEIV Pharma, and Live Animals Regulations certifications for compliant handling.</p>
            </div>
            <div class="why-point" data-aos="fade-up" data-aos-delay="80">
                <i class="fas fa-file-contract"></i>
                <h4>Full Documentation</h4>
                <p>We manage all regulatory paperwork, permits, certificates, and customs clearance documents on your behalf.</p>
            </div>
            <div class="why-point" data-aos="fade-up" data-aos-delay="160">
                <i class="fas fa-shield-alt"></i>
                <h4>Comprehensive Insurance</h4>
                <p>Cargo insurance options tailored to the nature and value of your special shipment for total peace of mind.</p>
            </div>
            <div class="why-point" data-aos="fade-up" data-aos-delay="240">
                <i class="fas fa-headset"></i>
                <h4>Dedicated Coordinator</h4>
                <p>Every special cargo shipment is assigned a dedicated coordinator who manages it from booking to delivery.</p>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="page-cta-band">
    <div class="container">
        <div class="cta-content" data-aos="fade-up">
            <h2>Have a Special Shipment Requirement?</h2>
            <p>Speak with our special cargo specialists for a bespoke solution tailored to your cargo's needs.</p>
            <div class="cta-actions">
                <a href="{{ url('/contact') }}" class="cta-btn-primary">Talk to a Specialist</a>
                <a href="{{ url('/services') }}" class="cta-btn-outline">View All Services</a>
            </div>
        </div>
    </div>
</section>

<style>
.page-hero { position: relative; background: linear-gradient(135deg, var(--primary) 0%, var(--primary-mid) 100%); padding: 120px 0 80px; overflow: hidden; }
.page-hero::before { content: ''; position: absolute; inset: 0; background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E"); }
.page-hero-inner { position: relative; text-align: center; }
.page-hero-title { font-family: var(--font-heading); font-size: clamp(2rem, 5vw, 3.5rem); font-weight: 700; color: var(--white); margin-bottom: 1rem; }
.breadcrumb-nav { display: flex; align-items: center; justify-content: center; gap: 0.5rem; font-size: 0.9rem; }
.breadcrumb-nav a { color: var(--accent); text-decoration: none; }
.breadcrumb-nav a:hover { text-decoration: underline; }
.breadcrumb-nav i { color: rgba(255,255,255,0.4); font-size: 0.7rem; }
.breadcrumb-nav span { color: rgba(255,255,255,0.7); }

.section-label { display: inline-block; background: rgba(232,146,10,0.12); color: var(--accent); font-size: 0.8rem; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; padding: 6px 16px; border-radius: 20px; margin-bottom: 1rem; }
.section-title { font-family: var(--font-heading); font-size: clamp(1.8rem, 3vw, 2.6rem); font-weight: 700; color: var(--primary); margin-bottom: 1rem; line-height: 1.2; }
.section-title span { color: var(--accent); }
.section-header { text-align: center; margin-bottom: 50px; }

.special-intro-section { padding: 80px 0 40px; }
.inner-page-intro { max-width: 800px; text-align: center; margin: 0 auto; }
.inner-page-intro p { color: var(--text-mid); line-height: 1.8; margin-top: 1rem; font-size: 1.05rem; }

.special-types-section { padding: 60px 0 80px; background: var(--bg-light); }
.special-types-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 28px; }
.special-type-card {
    background: var(--white); border-radius: 16px; padding: 34px 26px;
    border: 1px solid var(--border-light);
    transition: border-color 0.3s, box-shadow 0.3s, transform 0.3s;
}
.special-type-card:hover { border-color: var(--accent); box-shadow: 0 10px 30px rgba(0,0,0,0.08); transform: translateY(-4px); }
.special-type-icon { width: 60px; height: 60px; background: linear-gradient(135deg, var(--primary), var(--primary-mid)); border-radius: 14px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.2rem; }
.special-type-icon i { font-size: 1.4rem; color: var(--accent); }
.special-type-card h3 { font-family: var(--font-heading); font-size: 1.1rem; font-weight: 700; color: var(--primary); margin-bottom: 0.8rem; }
.special-type-card p { font-size: 0.875rem; color: var(--text-mid); line-height: 1.7; margin-bottom: 1rem; }
.special-type-tag { display: inline-block; background: rgba(232,146,10,0.1); color: var(--accent); font-size: 0.75rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; padding: 5px 12px; border-radius: 20px; }

.special-why-section { padding: 80px 0 100px; }
.special-why-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px; }
.why-point { text-align: center; padding: 30px 20px; border-radius: 14px; border: 1px solid var(--border-light); }
.why-point i { font-size: 1.8rem; color: var(--accent); display: block; margin-bottom: 1rem; }
.why-point h4 { font-family: var(--font-heading); font-size: 1rem; font-weight: 700; color: var(--primary); margin-bottom: 0.5rem; }
.why-point p { font-size: 0.85rem; color: var(--text-mid); line-height: 1.6; }

.page-cta-band { background: linear-gradient(135deg, var(--accent) 0%, var(--accent-dark) 100%); padding: 80px 0; text-align: center; }
.page-cta-band .cta-content h2 { font-family: var(--font-heading); font-size: clamp(1.8rem, 3vw, 2.6rem); font-weight: 700; color: var(--white); margin-bottom: 0.8rem; }
.page-cta-band .cta-content p { color: rgba(255,255,255,0.85); font-size: 1.05rem; margin-bottom: 2rem; }
.cta-actions { display: flex; gap: 16px; justify-content: center; flex-wrap: wrap; }
.cta-btn-primary { background: var(--white); color: var(--accent-dark); padding: 13px 30px; border-radius: 8px; font-weight: 700; text-decoration: none; transition: transform 0.2s; }
.cta-btn-primary:hover { transform: translateY(-2px); }
.cta-btn-outline { background: transparent; border: 2px solid rgba(255,255,255,0.7); color: var(--white); padding: 11px 30px; border-radius: 8px; font-weight: 700; text-decoration: none; transition: border-color 0.2s, background 0.2s; }
.cta-btn-outline:hover { border-color: var(--white); background: rgba(255,255,255,0.1); }

@media (max-width: 1000px) { .special-why-grid { grid-template-columns: 1fr 1fr; } }
@media (max-width: 800px) { .special-types-grid { grid-template-columns: 1fr 1fr; } }
@media (max-width: 500px) { .special-types-grid, .special-why-grid { grid-template-columns: 1fr; } }
</style>

@include('home.footer')
