@include('home.header')

{{-- ======================================================
     SANTASHIP LOGISTICS — FAQ PAGE
====================================================== --}}

{{-- PAGE HERO --}}
<section class="page-hero">
    <div class="container page-hero-inner">
        <h1 class="page-hero-title">Frequently Asked Questions</h1>
        <nav class="breadcrumb-nav" aria-label="breadcrumb">
            <a href="{{ url('/') }}">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>FAQ</span>
        </nav>
    </div>
</section>

{{-- FAQ SECTION --}}
<section class="faq-section">
    <div class="container">
        <div class="faq-intro" data-aos="fade-up">
            <div class="section-label">Got Questions?</div>
            <h2 class="section-title">Common <span>Questions Answered</span></h2>
            <p class="section-subtitle">Find answers to the most common questions about shipping, tracking, customs, and our services below.</p>
        </div>

        <div class="faq-grid">

            {{-- Tracking --}}
            <div class="faq-category" data-aos="fade-up" data-aos-delay="0">
                <div class="faq-cat-header">
                    <i class="fas fa-satellite-dish"></i>
                    <h3>Shipment Tracking</h3>
                </div>
                <div class="faq-items">
                    <div class="faq-item">
                        <button class="faq-question" aria-expanded="false">
                            How do I track my shipment?
                            <i class="fas fa-plus faq-icon"></i>
                        </button>
                        <div class="faq-answer">
                            <p>Enter your AWB / Tracking Number on our <a href="{{ url('/track-now') }}">Track Now</a> page or visit <strong>/shipment/track</strong>. You'll see the full journey of your shipment in real time — from pick-up to delivery.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question" aria-expanded="false">
                            Where can I find my tracking number?
                            <i class="fas fa-plus faq-icon"></i>
                        </button>
                        <div class="faq-answer">
                            <p>Your tracking number is included in your booking confirmation email, on your physical shipment receipt, and on the invoice issued by Santaship Logistics.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question" aria-expanded="false">
                            How often is tracking information updated?
                            <i class="fas fa-plus faq-icon"></i>
                        </button>
                        <div class="faq-answer">
                            <p>Tracking is updated at each key milestone — pickup, departure, customs clearance, in-transit updates, and final delivery. Most shipments receive 5–10 updates throughout their journey.</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Shipping --}}
            <div class="faq-category" data-aos="fade-up" data-aos-delay="80">
                <div class="faq-cat-header">
                    <i class="fas fa-plane"></i>
                    <h3>Shipping &amp; Delivery</h3>
                </div>
                <div class="faq-items">
                    <div class="faq-item">
                        <button class="faq-question" aria-expanded="false">
                            What countries do you ship to?
                            <i class="fas fa-plus faq-icon"></i>
                        </button>
                        <div class="faq-answer">
                            <p>Santaship Logistics ships to over 150 countries worldwide. Contact us if you need shipping to a specific destination and we'll confirm availability and provide a quote.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question" aria-expanded="false">
                            How long does delivery take?
                            <i class="fas fa-plus faq-icon"></i>
                        </button>
                        <div class="faq-answer">
                            <p>Transit times vary by service type and destination. Express air freight typically delivers within 1–3 business days, standard air within 3–7 days, and sea freight within 15–45 days depending on the route.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question" aria-expanded="false">
                            Can I ship dangerous goods or hazardous materials?
                            <i class="fas fa-plus faq-icon"></i>
                        </button>
                        <div class="faq-answer">
                            <p>Yes, we handle IATA-classified dangerous goods for air freight under strict compliance. Please <a href="{{ url('/contact') }}">contact us</a> before booking with full details of the material for pre-clearance approval.</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Pricing --}}
            <div class="faq-category" data-aos="fade-up" data-aos-delay="0">
                <div class="faq-cat-header">
                    <i class="fas fa-tags"></i>
                    <h3>Pricing &amp; Quotes</h3>
                </div>
                <div class="faq-items">
                    <div class="faq-item">
                        <button class="faq-question" aria-expanded="false">
                            How do I get a shipping quote?
                            <i class="fas fa-plus faq-icon"></i>
                        </button>
                        <div class="faq-answer">
                            <p>Fill out our <a href="{{ url('/contact') }}">contact form</a> or call our team directly with the origin, destination, weight, dimensions, and type of goods. We'll respond with a detailed quote within a few hours.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question" aria-expanded="false">
                            What is chargeable weight?
                            <i class="fas fa-plus faq-icon"></i>
                        </button>
                        <div class="faq-answer">
                            <p>Chargeable weight is the greater of actual gross weight and volumetric (dimensional) weight. Volumetric weight is calculated as: <em>(L × W × H in cm) ÷ 5000</em> for air freight. This helps account for large, lightweight packages.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question" aria-expanded="false">
                            Are there any hidden fees?
                            <i class="fas fa-plus faq-icon"></i>
                        </button>
                        <div class="faq-answer">
                            <p>No. We believe in full transparency. All quotes include a breakdown of freight charges, fuel surcharges, and applicable handling fees. Customs duties and local taxes at destination are the responsibility of the receiver unless otherwise agreed.</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Customs --}}
            <div class="faq-category" data-aos="fade-up" data-aos-delay="80">
                <div class="faq-cat-header">
                    <i class="fas fa-stamp"></i>
                    <h3>Customs &amp; Documentation</h3>
                </div>
                <div class="faq-items">
                    <div class="faq-item">
                        <button class="faq-question" aria-expanded="false">
                            What documents do I need to ship internationally?
                            <i class="fas fa-plus faq-icon"></i>
                        </button>
                        <div class="faq-answer">
                            <p>Standard requirements include a Commercial Invoice, Packing List, and Air Waybill (AWB) or Bill of Lading. Depending on the goods and destination, you may also need a Certificate of Origin, permits, or health certificates.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question" aria-expanded="false">
                            Do you handle customs clearance?
                            <i class="fas fa-plus faq-icon"></i>
                        </button>
                        <div class="faq-answer">
                            <p>Yes. Our customs team handles import and export clearance in our key markets. For other destinations, we work with accredited local customs brokers to ensure smooth clearance at every port.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question" aria-expanded="false">
                            What happens if my shipment is held at customs?
                            <i class="fas fa-plus faq-icon"></i>
                        </button>
                        <div class="faq-answer">
                            <p>Our team will immediately notify you and work with customs authorities to resolve any holds. We'll guide you through any required documentation, inspections, or duty payments to release your cargo as quickly as possible.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- STILL NEED HELP --}}
<section class="faq-help-section">
    <div class="container">
        <div class="faq-help-card" data-aos="fade-up">
            <i class="fas fa-headset faq-help-icon"></i>
            <h2>Still Have a Question?</h2>
            <p>Our support team is available 24/7 to answer any query — no matter how big or small. Reach out anytime.</p>
            <div class="faq-help-actions">
                <a href="{{ url('/contact') }}" class="cta-btn-primary">Contact Support</a>
                <a href="{{ url('/track-now') }}" class="cta-btn-outline">Track a Shipment</a>
            </div>
        </div>
    </div>
</section>

<script>
// FAQ accordion
document.querySelectorAll('.faq-question').forEach(btn => {
    btn.addEventListener('click', () => {
        const item = btn.closest('.faq-item');
        const isOpen = btn.getAttribute('aria-expanded') === 'true';
        // close all in same category
        item.closest('.faq-items').querySelectorAll('.faq-item').forEach(i => {
            i.querySelector('.faq-question').setAttribute('aria-expanded', 'false');
            i.classList.remove('open');
        });
        if (!isOpen) {
            btn.setAttribute('aria-expanded', 'true');
            item.classList.add('open');
        }
    });
});
</script>

<style>
/* =========================================================
   FAQ PAGE STYLES
========================================================= */
.page-hero { position: relative; background: linear-gradient(135deg, var(--primary) 0%, var(--primary-mid) 100%); padding: 120px 0 80px; overflow: hidden; }
.page-hero::before { content: ''; position: absolute; inset: 0; background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E"); }
.page-hero-inner { position: relative; text-align: center; }
.page-hero-title { font-family: var(--font-heading); font-size: clamp(2rem, 5vw, 3.5rem); font-weight: 700; color: var(--white); margin-bottom: 1rem; }
.breadcrumb-nav { display: flex; align-items: center; justify-content: center; gap: 0.5rem; font-size: 0.9rem; }
.breadcrumb-nav a { color: var(--accent); text-decoration: none; }
.breadcrumb-nav i { color: rgba(255,255,255,0.4); font-size: 0.7rem; }
.breadcrumb-nav span { color: rgba(255,255,255,0.7); }

.section-label { display: inline-block; background: rgba(232,146,10,0.12); color: var(--accent); font-size: 0.8rem; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; padding: 6px 16px; border-radius: 20px; margin-bottom: 1rem; }
.section-title { font-family: var(--font-heading); font-size: clamp(1.8rem, 3vw, 2.6rem); font-weight: 700; color: var(--primary); margin-bottom: 1rem; line-height: 1.2; }
.section-title span { color: var(--accent); }
.section-subtitle { color: var(--text-mid); max-width: 600px; margin: 0 auto; line-height: 1.7; }
.section-header, .faq-intro { text-align: center; }

.faq-section { padding: 80px 0 100px; }
.faq-intro { margin-bottom: 60px; }
.faq-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 40px; }

.faq-category { background: var(--white); border-radius: 16px; border: 1px solid var(--border-light); overflow: hidden; }
.faq-cat-header { display: flex; align-items: center; gap: 12px; background: linear-gradient(135deg, var(--primary), var(--primary-mid)); padding: 20px 24px; }
.faq-cat-header i { font-size: 1.2rem; color: var(--accent); }
.faq-cat-header h3 { font-family: var(--font-heading); font-size: 1.1rem; font-weight: 700; color: var(--white); margin: 0; }

.faq-items { padding: 0 24px 16px; }
.faq-item { border-bottom: 1px solid var(--border-light); }
.faq-item:last-child { border-bottom: none; }

.faq-question {
    width: 100%; background: none; border: none;
    display: flex; align-items: center; justify-content: space-between;
    gap: 12px; padding: 18px 0;
    font-family: var(--font-body); font-size: 0.9rem; font-weight: 700;
    color: var(--primary); cursor: pointer; text-align: left;
    transition: color 0.2s;
}
.faq-question:hover { color: var(--accent); }
.faq-icon { font-size: 0.75rem; color: var(--accent); flex-shrink: 0; transition: transform 0.3s; }
.faq-item.open .faq-icon { transform: rotate(45deg); }

.faq-answer {
    max-height: 0; overflow: hidden;
    transition: max-height 0.35s ease, padding 0.25s;
}
.faq-item.open .faq-answer { max-height: 300px; padding-bottom: 16px; }
.faq-answer p { font-size: 0.875rem; color: var(--text-mid); line-height: 1.7; margin: 0; }
.faq-answer p a { color: var(--accent); text-decoration: none; font-weight: 600; }
.faq-answer p a:hover { text-decoration: underline; }

/* Help section */
.faq-help-section { padding: 0 0 100px; }
.faq-help-card {
    background: var(--primary); border-radius: 20px;
    padding: 60px 40px; text-align: center;
    max-width: 700px; margin: 0 auto;
}
.faq-help-icon { font-size: 3rem; color: var(--accent); display: block; margin-bottom: 1.5rem; }
.faq-help-card h2 { font-family: var(--font-heading); font-size: 2rem; font-weight: 700; color: var(--white); margin-bottom: 1rem; }
.faq-help-card p { color: rgba(255,255,255,0.7); line-height: 1.7; margin-bottom: 2rem; }
.faq-help-actions { display: flex; gap: 16px; justify-content: center; flex-wrap: wrap; }
.cta-btn-primary { background: var(--accent); color: var(--white); padding: 13px 30px; border-radius: 8px; font-weight: 700; text-decoration: none; transition: background 0.25s, transform 0.2s; }
.cta-btn-primary:hover { background: var(--accent-dark); transform: translateY(-2px); }
.cta-btn-outline { background: transparent; border: 2px solid rgba(255,255,255,0.5); color: var(--white); padding: 11px 30px; border-radius: 8px; font-weight: 700; text-decoration: none; transition: border-color 0.2s, background 0.2s; }
.cta-btn-outline:hover { border-color: var(--white); background: rgba(255,255,255,0.1); }

@media (max-width: 800px) { .faq-grid { grid-template-columns: 1fr; } .faq-help-card { padding: 40px 24px; } }
</style>

@include('home.footer')
