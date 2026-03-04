@include('home.header')

{{-- ======================================================
     SANTASHIP LOGISTICS — GENERAL CARGO SERVICES
====================================================== --}}

{{-- PAGE HERO --}}
<section class="page-hero">
    <div class="container page-hero-inner">
        <h1 class="page-hero-title">General Cargo Services</h1>
        <nav class="breadcrumb-nav" aria-label="breadcrumb">
            <a href="{{ url('/') }}">Home</a>
            <i class="fas fa-chevron-right"></i>
            <a href="{{ url('/services') }}">Services</a>
            <i class="fas fa-chevron-right"></i>
            <span>General Cargo</span>
        </nav>
    </div>
</section>

{{-- INTRO --}}
<section class="general-intro-section">
    <div class="container">
        <div class="inner-page-intro" data-aos="fade-up">
            <div class="section-label">Standard Shipping</div>
            <h2 class="section-title">General Cargo <span>Shipping Solutions</span></h2>
            <p>Our general cargo services cover standard, non-hazardous goods shipped via air or sea freight. Whether it's commercial goods, consumer products, spare parts, or retail merchandise — we move it reliably and cost-effectively to over 150 destinations worldwide.</p>
        </div>
    </div>
</section>

{{-- WHAT WE HANDLE --}}
<section class="general-services-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <div class="section-label">What We Handle</div>
            <h2 class="section-title">General Cargo <span>Categories</span></h2>
        </div>
        <div class="general-items-grid">
            <div class="general-item" data-aos="fade-up" data-aos-delay="0">
                <i class="fas fa-tshirt"></i>
                <h4>Clothing &amp; Textiles</h4>
                <p>Garments, fabrics, footwear, and fashion accessories for retailers and manufacturers.</p>
            </div>
            <div class="general-item" data-aos="fade-up" data-aos-delay="60">
                <i class="fas fa-laptop"></i>
                <h4>Electronics &amp; Gadgets</h4>
                <p>Consumer electronics including phones, laptops, TVs, and accessories — secure, insured handling.</p>
            </div>
            <div class="general-item" data-aos="fade-up" data-aos-delay="120">
                <i class="fas fa-industry"></i>
                <h4>Industrial Goods</h4>
                <p>Machinery parts, tools, hardware, and industrial equipment for manufacturing and construction.</p>
            </div>
            <div class="general-item" data-aos="fade-up" data-aos-delay="180">
                <i class="fas fa-box"></i>
                <h4>Retail &amp; Consumer Goods</h4>
                <p>Household products, personal care items, domestic appliances shipped in bulk or individual parcels.</p>
            </div>
            <div class="general-item" data-aos="fade-up" data-aos-delay="240">
                <i class="fas fa-book"></i>
                <h4>Documents &amp; Printed Material</h4>
                <p>Passports, legal documents, printed books, catalogues, and brochures delivered securely.</p>
            </div>
            <div class="general-item" data-aos="fade-up" data-aos-delay="300">
                <i class="fas fa-utensils"></i>
                <h4>Packaged Foodstuffs</h4>
                <p>Non-perishable, sealed, and packaged food products meeting all import/export food standards.</p>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="page-cta-band">
    <div class="container">
        <div class="cta-content" data-aos="fade-up">
            <h2>Ready to Ship Your General Cargo?</h2>
            <p>Get a competitive quote for your standard shipment in minutes.</p>
            <div class="cta-actions">
                <a href="{{ url('/contact') }}" class="cta-btn-primary">Get a Quote</a>
                <a href="{{ url('/track-now') }}" class="cta-btn-outline">Track a Shipment</a>
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

.general-intro-section { padding: 80px 0 40px; }
.inner-page-intro { max-width: 800px; text-align: center; margin: 0 auto; }
.inner-page-intro p { color: var(--text-mid); line-height: 1.8; margin-top: 1rem; font-size: 1.05rem; }

.general-services-section { padding: 60px 0 80px; background: var(--bg-light); }
.general-items-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; }
.general-item { background: var(--white); border-radius: 14px; padding: 30px; border: 1px solid var(--border-light); text-align: center; transition: border-color 0.3s, box-shadow 0.3s; }
.general-item:hover { border-color: var(--accent); box-shadow: 0 8px 24px rgba(232,146,10,0.1); }
.general-item i { font-size: 2rem; color: var(--accent); display: block; margin-bottom: 1rem; }
.general-item h4 { font-family: var(--font-heading); font-size: 1rem; font-weight: 700; color: var(--primary); margin-bottom: 0.6rem; }
.general-item p { font-size: 0.875rem; color: var(--text-mid); line-height: 1.6; }

.page-cta-band { background: linear-gradient(135deg, var(--accent) 0%, var(--accent-dark) 100%); padding: 80px 0; text-align: center; }
.page-cta-band .cta-content h2 { font-family: var(--font-heading); font-size: clamp(1.8rem, 3vw, 2.6rem); font-weight: 700; color: var(--white); margin-bottom: 0.8rem; }
.page-cta-band .cta-content p { color: rgba(255,255,255,0.85); font-size: 1.05rem; margin-bottom: 2rem; }
.cta-actions { display: flex; gap: 16px; justify-content: center; flex-wrap: wrap; }
.cta-btn-primary { background: var(--white); color: var(--accent-dark); padding: 13px 30px; border-radius: 8px; font-weight: 700; text-decoration: none; transition: transform 0.2s; }
.cta-btn-primary:hover { transform: translateY(-2px); }
.cta-btn-outline { background: transparent; border: 2px solid rgba(255,255,255,0.7); color: var(--white); padding: 11px 30px; border-radius: 8px; font-weight: 700; text-decoration: none; transition: border-color 0.2s, background 0.2s; }
.cta-btn-outline:hover { border-color: var(--white); background: rgba(255,255,255,0.1); }

@media (max-width: 800px) { .general-items-grid { grid-template-columns: 1fr 1fr; } }
@media (max-width: 500px) { .general-items-grid { grid-template-columns: 1fr; } }
</style>

@include('home.footer')
