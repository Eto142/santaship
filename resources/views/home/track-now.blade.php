@include('home.header')

{{-- ======================================================
     SANTASHIP LOGISTICS — TRACK NOW PAGE
====================================================== --}}

{{-- PAGE HERO --}}
<section class="page-hero">
    <div class="container page-hero-inner">
        <h1 class="page-hero-title">Track Your Shipment</h1>
        <nav class="breadcrumb-nav" aria-label="breadcrumb">
            <a href="{{ url('/') }}">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>Track Now</span>
        </nav>
    </div>
</section>

{{-- TRACKING FORM SECTION --}}
<section class="tracking-section">
    <div class="container">
        <div class="tracking-wrapper" data-aos="fade-up">
            <div class="tracking-card">
                <div class="tracking-card-header">
                    <div class="tracking-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <div>
                        <h2>Enter Tracking Number</h2>
                        <p>Enter your AWB / Tracking Number below to get real-time shipment updates.</p>
                    </div>
                </div>

                {{-- Error from failed tracking --}}
                @if ($errors->has('tracking_number'))
                    <div class="track-alert track-alert-error">
                        <i class="fas fa-exclamation-circle"></i>
                        {{ $errors->first('tracking_number') }}
                    </div>
                @endif

                <form action="{{ route('shipment.track') }}" method="POST" class="track-form">
                    @csrf
                    <div class="track-input-group">
                        <label for="tracking_number" class="track-label">
                            AWB / Tracking Number <span class="required">*</span>
                        </label>
                        <div class="track-input-row">
                            <div class="track-input-wrap">
                                <i class="fas fa-barcode track-input-icon"></i>
                                <input
                                    type="text"
                                    id="tracking_number"
                                    name="tracking_number"
                                    value="{{ old('tracking_number') }}"
                                    placeholder="e.g. SSL-A1B2C3D4"
                                    autocomplete="off"
                                    required
                                    class="track-input {{ $errors->has('tracking_number') ? 'is-error' : '' }}"
                                >
                            </div>
                            <button type="submit" class="track-btn">
                                <i class="fas fa-search"></i>
                                Track Shipment
                            </button>
                        </div>
                        <p class="track-hint">Your tracking number can be found on your shipment confirmation email or invoice.</p>
                    </div>
                </form>
            </div>

            {{-- How to track info cards --}}
            <div class="tracking-info-cards">
                <div class="info-card" data-aos="fade-up" data-aos-delay="0">
                    <div class="info-card-icon"><i class="fas fa-receipt"></i></div>
                    <h4>Find Your Number</h4>
                    <p>Your tracking number is on your booking confirmation email, shipment receipt, or invoice from Santaship Logistics.</p>
                </div>
                <div class="info-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="info-card-icon"><i class="fas fa-route"></i></div>
                    <h4>Live Tracking Updates</h4>
                    <p>Get real-time status updates including departure, customs, in-transit, and delivery milestones for your shipment.</p>
                </div>
                <div class="info-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="info-card-icon"><i class="fas fa-headset"></i></div>
                    <h4>Need Help?</h4>
                    <p>Can't find your shipment? Our team is available 24/7. <a href="{{ url('/contact') }}">Contact us</a> and we'll assist you immediately.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- TRUST BAND --}}
<section class="trust-band">
    <div class="container">
        <div class="trust-items">
            <div class="trust-item"><i class="fas fa-lock"></i><span>Secure &amp; Private</span></div>
            <div class="trust-item"><i class="fas fa-clock"></i><span>Real-Time Updates</span></div>
            <div class="trust-item"><i class="fas fa-globe"></i><span>150+ Countries Tracked</span></div>
            <div class="trust-item"><i class="fas fa-bell"></i><span>Milestone Notifications</span></div>
        </div>
    </div>
</section>

<style>
/* =========================================================
   TRACK-NOW PAGE STYLES
========================================================= */
/* Page Hero reused */
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

/* Tracking Section */
.tracking-section { padding: 80px 0 60px; }
.tracking-wrapper { max-width: 860px; margin: 0 auto; }

.tracking-card {
    background: var(--white);
    border-radius: 20px;
    padding: 48px;
    box-shadow: 0 8px 40px rgba(13,27,42,0.1);
    margin-bottom: 40px;
    border: 1px solid var(--border-light);
}
.tracking-card-header {
    display: flex;
    align-items: center;
    gap: 20px;
    margin-bottom: 2rem;
    padding-bottom: 2rem;
    border-bottom: 1px solid var(--border-light);
}
.tracking-icon {
    width: 60px; height: 60px; flex-shrink: 0;
    background: linear-gradient(135deg, var(--primary), var(--primary-mid));
    border-radius: 14px;
    display: flex; align-items: center; justify-content: center;
}
.tracking-icon i { font-size: 1.5rem; color: var(--accent); }
.tracking-card-header h2 {
    font-family: var(--font-heading); font-size: 1.5rem;
    font-weight: 700; color: var(--primary); margin: 0 0 4px;
}
.tracking-card-header p { color: var(--text-mid); margin: 0; font-size: 0.9rem; }

.track-alert {
    display: flex; align-items: center; gap: 10px;
    padding: 14px 18px;
    border-radius: 10px;
    margin-bottom: 1.5rem;
    font-size: 0.9rem;
    font-weight: 600;
}
.track-alert-error { background: #fff5f5; color: #c53030; border: 1px solid #fed7d7; }
.track-alert i { flex-shrink: 0; }

.track-label {
    display: block;
    font-weight: 700;
    color: var(--text-dark);
    margin-bottom: 0.7rem;
    font-size: 0.95rem;
}
.required { color: var(--accent); }

.track-input-row {
    display: flex;
    gap: 12px;
    align-items: stretch;
}
.track-input-wrap {
    flex: 1;
    position: relative;
}
.track-input-icon {
    position: absolute;
    left: 16px; top: 50%;
    transform: translateY(-50%);
    color: var(--text-light);
    font-size: 1rem;
    pointer-events: none;
}
.track-input {
    width: 100%; height: 56px;
    border: 2px solid var(--border-light);
    border-radius: 10px;
    padding: 0 16px 0 44px;
    font-size: 1rem;
    font-family: var(--font-body);
    color: var(--text-dark);
    transition: border-color 0.25s, box-shadow 0.25s;
    outline: none;
    box-sizing: border-box;
}
.track-input:focus {
    border-color: var(--accent);
    box-shadow: 0 0 0 4px rgba(232,146,10,0.12);
}
.track-input.is-error { border-color: #e53e3e; }

.track-btn {
    display: flex; align-items: center; gap: 8px;
    padding: 0 28px;
    background: var(--accent);
    color: var(--white);
    border: none;
    border-radius: 10px;
    font-size: 0.95rem;
    font-weight: 700;
    font-family: var(--font-body);
    cursor: pointer;
    transition: background 0.25s, transform 0.2s;
    white-space: nowrap;
}
.track-btn:hover { background: var(--accent-dark); transform: translateY(-1px); }
.track-hint { font-size: 0.8rem; color: var(--text-light); margin-top: 10px; }

/* Info Cards */
.tracking-info-cards {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
}
.info-card {
    background: var(--white);
    border-radius: 14px;
    padding: 28px;
    border: 1px solid var(--border-light);
    text-align: center;
    transition: border-color 0.3s, box-shadow 0.3s;
}
.info-card:hover {
    border-color: var(--accent);
    box-shadow: 0 8px 24px rgba(232,146,10,0.1);
}
.info-card-icon {
    width: 56px; height: 56px;
    background: var(--bg-light);
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    margin: 0 auto 1rem;
}
.info-card-icon i { font-size: 1.3rem; color: var(--accent); }
.info-card h4 {
    font-family: var(--font-heading);
    font-size: 1rem; font-weight: 700;
    color: var(--primary); margin-bottom: 0.6rem;
}
.info-card p { font-size: 0.85rem; color: var(--text-mid); line-height: 1.6; }
.info-card p a { color: var(--accent); text-decoration: none; font-weight: 600; }
.info-card p a:hover { text-decoration: underline; }

/* Trust Band */
.trust-band {
    background: var(--primary);
    padding: 40px 0;
    margin-bottom: 0;
}
.trust-items {
    display: flex;
    justify-content: center;
    gap: 60px;
    flex-wrap: wrap;
}
.trust-item {
    display: flex; align-items: center; gap: 10px;
    color: rgba(255,255,255,0.8);
    font-size: 0.9rem; font-weight: 600;
}
.trust-item i { color: var(--accent); font-size: 1.1rem; }

@media (max-width: 700px) {
    .tracking-card { padding: 28px 20px; }
    .tracking-card-header { flex-direction: column; align-items: flex-start; }
    .track-input-row { flex-direction: column; }
    .track-btn { height: 52px; justify-content: center; }
    .tracking-info-cards { grid-template-columns: 1fr; }
    .trust-items { gap: 24px; }
}
</style>

@include('home.footer')
