@include('home.header')

{{-- ======================================================
     SANTASHIP LOGISTICS — BOOK A SHIPMENT PAGE
====================================================== --}}

{{-- PAGE HERO --}}
<section class="page-hero">
    <div class="container page-hero-inner">
        <h1 class="page-hero-title">Book a Shipment</h1>
        <nav class="breadcrumb-nav" aria-label="breadcrumb">
            <a href="{{ url('/') }}">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>Book</span>
        </nav>
    </div>
</section>

{{-- BOOKING OPTIONS --}}
<section class="book-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <div class="section-label">Start Your Shipment</div>
            <h2 class="section-title">Choose Your <span>Booking Method</span></h2>
            <p class="section-subtitle">Book online using our quick form, or contact our team for personalised assistance with complex or bulk shipments.</p>
        </div>

        <div class="book-options-grid">
            {{-- Online Booking --}}
            <div class="book-option-card featured" data-aos="fade-up" data-aos-delay="0">
                <div class="book-option-icon">
                    <i class="fas fa-laptop"></i>
                </div>
                <h3>Book Online</h3>
                <p>Complete our secure online booking form in minutes. Enter shipment details, shipper and receiver information, and we'll generate your AWB immediately.</p>
                <ul class="book-option-list">
                    <li><i class="fas fa-check"></i> Instant AWB generation</li>
                    <li><i class="fas fa-check"></i> PDF receipt &amp; tracking number</li>
                    <li><i class="fas fa-check"></i> Available 24/7</li>
                </ul>
                <a href="{{ route('shipment.create') }}" class="book-option-btn primary">
                    <i class="fas fa-arrow-right"></i> Book Now
                </a>
            </div>

            {{-- Contact for Quote --}}
            <div class="book-option-card" data-aos="fade-up" data-aos-delay="100">
                <div class="book-option-icon">
                    <i class="fas fa-headset"></i>
                </div>
                <h3>Request a Quote</h3>
                <p>Not sure which service you need? Talk to our logistics experts. We'll assess your requirements and provide a tailored solution with a competitive quote.</p>
                <ul class="book-option-list">
                    <li><i class="fas fa-check"></i> Personalised consultation</li>
                    <li><i class="fas fa-check"></i> Bulk &amp; commercial rates</li>
                    <li><i class="fas fa-check"></i> Expert guidance</li>
                </ul>
                <a href="{{ url('/contact') }}" class="book-option-btn outline">
                    <i class="fas fa-envelope"></i> Contact Us
                </a>
            </div>

            {{-- Track existing --}}
            <div class="book-option-card" data-aos="fade-up" data-aos-delay="200">
                <div class="book-option-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <h3>Track a Shipment</h3>
                <p>Already have a booking? Enter your AWB or tracking number to get real-time status updates on your current shipments from anywhere.</p>
                <ul class="book-option-list">
                    <li><i class="fas fa-check"></i> Live milestone updates</li>
                    <li><i class="fas fa-check"></i> Full journey history</li>
                    <li><i class="fas fa-check"></i> Proof of delivery</li>
                </ul>
                <a href="{{ url('/track-now') }}" class="book-option-btn outline">
                    <i class="fas fa-search"></i> Track Now
                </a>
            </div>
        </div>
    </div>
</section>

{{-- WHAT YOU'LL NEED --}}
<section class="book-info-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <div class="section-label">Before You Book</div>
            <h2 class="section-title">What You'll <span>Need to Prepare</span></h2>
        </div>
        <div class="book-info-grid">
            <div class="book-info-item" data-aos="fade-up" data-aos-delay="0">
                <i class="fas fa-user-circle"></i>
                <h4>Shipper Details</h4>
                <p>Full name, company, address, city, country, and contact phone number for the sender.</p>
            </div>
            <div class="book-info-item" data-aos="fade-up" data-aos-delay="60">
                <i class="fas fa-user-check"></i>
                <h4>Receiver Details</h4>
                <p>Full name, company, delivery address, city, and destination country for the recipient.</p>
            </div>
            <div class="book-info-item" data-aos="fade-up" data-aos-delay="120">
                <i class="fas fa-box"></i>
                <h4>Package Info</h4>
                <p>Weight, dimensions (L × W × H), package type, quantity, and description of the goods.</p>
            </div>
            <div class="book-info-item" data-aos="fade-up" data-aos-delay="180">
                <i class="fas fa-file-invoice"></i>
                <h4>Commercial Value</h4>
                <p>Declared value of the shipment and currency for customs and insurance purposes.</p>
            </div>
        </div>
    </div>
</section>

<style>
/* =========================================================
   BOOK PAGE STYLES
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
.section-header { text-align: center; margin-bottom: 50px; }

.book-section { padding: 90px 0; }
.book-options-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; }

.book-option-card {
    background: var(--white); border-radius: 18px;
    padding: 40px 30px;
    border: 2px solid var(--border-light);
    display: flex; flex-direction: column;
    transition: border-color 0.3s, box-shadow 0.3s;
}
.book-option-card:hover { border-color: var(--accent); box-shadow: 0 12px 40px rgba(0,0,0,0.08); }
.book-option-card.featured { border-color: var(--accent); box-shadow: 0 8px 30px rgba(232,146,10,0.15); }

.book-option-icon {
    width: 64px; height: 64px;
    background: linear-gradient(135deg, var(--primary), var(--primary-mid));
    border-radius: 14px;
    display: flex; align-items: center; justify-content: center;
    margin-bottom: 1.4rem;
}
.book-option-icon i { font-size: 1.6rem; color: var(--accent); }
.book-option-card h3 { font-family: var(--font-heading); font-size: 1.3rem; font-weight: 700; color: var(--primary); margin-bottom: 0.8rem; }
.book-option-card p { font-size: 0.9rem; color: var(--text-mid); line-height: 1.7; margin-bottom: 1.4rem; flex: 1; }

.book-option-list { list-style: none; padding: 0; margin: 0 0 2rem; }
.book-option-list li { display: flex; align-items: center; gap: 8px; font-size: 0.875rem; color: var(--text-dark); padding: 5px 0; }
.book-option-list li i { color: var(--accent); font-size: 0.75rem; }

.book-option-btn {
    display: flex; align-items: center; justify-content: center; gap: 8px;
    padding: 13px 24px; border-radius: 10px;
    font-weight: 700; font-size: 0.95rem;
    text-decoration: none; transition: all 0.25s;
    margin-top: auto;
}
.book-option-btn.primary { background: var(--accent); color: var(--white); }
.book-option-btn.primary:hover { background: var(--accent-dark); transform: translateY(-2px); }
.book-option-btn.outline { border: 2px solid var(--accent); color: var(--accent); }
.book-option-btn.outline:hover { background: var(--accent); color: var(--white); }

/* Info Section */
.book-info-section { padding: 0 0 100px; background: var(--bg-light); padding-top: 80px; }
.book-info-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px; }
.book-info-item { text-align: center; padding: 30px 20px; background: var(--white); border-radius: 14px; border: 1px solid var(--border-light); }
.book-info-item i { font-size: 2rem; color: var(--accent); display: block; margin-bottom: 1rem; }
.book-info-item h4 { font-family: var(--font-heading); font-size: 1rem; font-weight: 700; color: var(--primary); margin-bottom: 0.5rem; }
.book-info-item p { font-size: 0.85rem; color: var(--text-mid); line-height: 1.6; }

@media (max-width: 900px) { .book-options-grid { grid-template-columns: 1fr; } .book-info-grid { grid-template-columns: 1fr 1fr; } }
@media (max-width: 600px) { .book-info-grid { grid-template-columns: 1fr; } }
</style>

@include('home.footer')
