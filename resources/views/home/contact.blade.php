@include('home.header')

{{-- ======================================================
     SANTASHIP LOGISTICS — CONTACT PAGE
====================================================== --}}

{{-- PAGE HERO --}}
<section class="page-hero">
    <div class="container page-hero-inner">
        <h1 class="page-hero-title">Contact Us</h1>
        <nav class="breadcrumb-nav" aria-label="breadcrumb">
            <a href="{{ url('/') }}">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>Contact</span>
        </nav>
    </div>
</section>

{{-- CONTACT SECTION --}}
<section class="contact-section">
    <div class="container">
        <div class="contact-grid">

            {{-- Contact Info --}}
            <div class="contact-info-col" data-aos="fade-right">
                <div class="section-label">Get In Touch</div>
                <h2 class="section-title">We'd Love to <span>Hear From You</span></h2>
                <p class="contact-intro">Whether you have a question about our services, need a shipping quote, or want to track a shipment — our team is ready to help, 24 hours a day, 7 days a week.</p>

                <div class="contact-details">
                    <div class="contact-detail-item">
                        <div class="detail-icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div>
                            <h4>Head Office</h4>
                            <p>Santaship Logistics Company Limited<br>West Africa Operations Centre</p>
                        </div>
                    </div>
                    <div class="contact-detail-item">
                        <div class="detail-icon"><i class="fas fa-phone-alt"></i></div>
                        <div>
                            <h4>Phone / WhatsApp</h4>
                            <p><a href="tel:+2348000000000">+234 800 000 0000</a></p>
                        </div>
                    </div>
                    <div class="contact-detail-item">
                        <div class="detail-icon"><i class="fas fa-envelope"></i></div>
                        <div>
                            <h4>Email Us</h4>
                            <p><a href="mailto:support@santashiplogistics.org">support@santashiplogistics.org</a></p>
                        </div>
                    </div>
                    <div class="contact-detail-item">
                        <div class="detail-icon"><i class="fas fa-clock"></i></div>
                        <div>
                            <h4>Working Hours</h4>
                            <p>Monday – Friday: 8:00 AM – 6:00 PM<br>Saturday: 9:00 AM – 2:00 PM</p>
                        </div>
                    </div>
                </div>

                <div class="contact-social">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="Twitter/X"><i class="fab fa-x-twitter"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

            {{-- Contact Form --}}
            <div class="contact-form-col" data-aos="fade-left">
                @if(session('success'))
                    <div class="form-alert form-alert-success">
                        <i class="fas fa-check-circle"></i>
                        {{ session('success') }}
                    </div>
                @endif

                <div class="contact-form-card">
                    <h3>Send Us a Message</h3>
                    <form action="{{ route('contact.send') }}" method="POST" class="contact-form">
                        @csrf

                        <div class="form-row">
                            <div class="form-group">
                                <label for="text-440">Full Name <span class="required">*</span></label>
                                <div class="input-wrap">
                                    <i class="fas fa-user input-icon"></i>
                                    <input type="text" id="text-440" name="text-440"
                                        value="{{ old('text-440') }}"
                                        placeholder="John Doe"
                                        class="{{ $errors->has('text-440') ? 'is-error' : '' }}"
                                        required>
                                </div>
                                @error('text-440')
                                    <span class="field-error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number <span class="required">*</span></label>
                                <div class="input-wrap">
                                    <i class="fas fa-phone input-icon"></i>
                                    <input type="tel" id="phone" name="phone"
                                        value="{{ old('phone') }}"
                                        placeholder="+1 234 567 8900"
                                        class="{{ $errors->has('phone') ? 'is-error' : '' }}"
                                        required>
                                </div>
                                @error('phone')
                                    <span class="field-error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email">Email Address <span class="required">*</span></label>
                            <div class="input-wrap">
                                <i class="fas fa-envelope input-icon"></i>
                                <input type="email" id="email" name="email"
                                    value="{{ old('email') }}"
                                    placeholder="john@example.com"
                                    class="{{ $errors->has('email') ? 'is-error' : '' }}"
                                    required>
                            </div>
                            @error('email')
                                <span class="field-error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="shipment">AWB / Tracking Number</label>
                            <div class="input-wrap">
                                <i class="fas fa-barcode input-icon"></i>
                                <input type="text" id="shipment" name="shipment"
                                    value="{{ old('shipment') }}"
                                    placeholder="Optional — if enquiring about a shipment"
                                    class="{{ $errors->has('shipment') ? 'is-error' : '' }}">
                            </div>
                            @error('shipment')
                                <span class="field-error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="message">Your Message <span class="required">*</span></label>
                            <textarea id="message" name="message" rows="5"
                                placeholder="Tell us how we can help you…"
                                class="{{ $errors->has('message') ? 'is-error' : '' }}"
                                required>{{ old('message') }}</textarea>
                            @error('message')
                                <span class="field-error">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="form-submit-btn">
                            <i class="fas fa-paper-plane"></i> Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* =========================================================
   CONTACT PAGE STYLES
========================================================= */
/* Page Hero (reused pattern) */
.page-hero {
    position: relative;
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-mid) 100%);
    padding: 120px 0 80px;
    overflow: hidden;
}
.page-hero::before {
    content: '';
    position: absolute; inset: 0;
    background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}
.page-hero-inner { position: relative; text-align: center; }
.page-hero-title {
    font-family: var(--font-heading); font-size: clamp(2rem, 5vw, 3.5rem);
    font-weight: 700; color: var(--white); margin-bottom: 1rem;
}
.breadcrumb-nav {
    display: flex; align-items: center; justify-content: center;
    gap: 0.5rem; font-size: 0.9rem;
}
.breadcrumb-nav a { color: var(--accent); text-decoration: none; }
.breadcrumb-nav a:hover { text-decoration: underline; }
.breadcrumb-nav i { color: rgba(255,255,255,0.4); font-size: 0.7rem; }
.breadcrumb-nav span { color: rgba(255,255,255,0.7); }

/* Contact Section */
.contact-section { padding: 90px 0 100px; }
.contact-grid {
    display: grid;
    grid-template-columns: 1fr 1.4fr;
    gap: 70px;
    align-items: start;
}

/* Info Column */
.contact-intro {
    color: var(--text-mid); line-height: 1.8;
    margin-bottom: 2.5rem; margin-top: 1rem;
}
.contact-details { margin-bottom: 2rem; }
.contact-detail-item {
    display: flex;
    gap: 16px;
    margin-bottom: 1.6rem;
}
.detail-icon {
    width: 46px; height: 46px; flex-shrink: 0;
    background: linear-gradient(135deg, var(--primary), var(--primary-mid));
    border-radius: 12px;
    display: flex; align-items: center; justify-content: center;
}
.detail-icon i { color: var(--accent); font-size: 1rem; }
.contact-detail-item h4 {
    font-family: var(--font-heading); font-size: 0.9rem;
    font-weight: 700; color: var(--primary);
    text-transform: uppercase; letter-spacing: 0.5px; margin: 0 0 4px;
}
.contact-detail-item p { font-size: 0.9rem; color: var(--text-mid); margin: 0; line-height: 1.5; }
.contact-detail-item p a { color: var(--accent); text-decoration: none; }
.contact-detail-item p a:hover { text-decoration: underline; }

.contact-social { display: flex; gap: 12px; }
.contact-social a {
    width: 40px; height: 40px;
    border-radius: 8px;
    background: var(--bg-light);
    border: 1px solid var(--border-light);
    display: flex; align-items: center; justify-content: center;
    color: var(--text-mid);
    font-size: 0.9rem;
    text-decoration: none;
    transition: background 0.25s, color 0.25s, border-color 0.25s;
}
.contact-social a:hover { background: var(--accent); color: var(--white); border-color: var(--accent); }

/* Section Labels (local) */
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
    font-size: clamp(1.8rem, 3vw, 2.4rem);
    font-weight: 700; color: var(--primary);
    margin-bottom: 0; line-height: 1.2;
}
.section-title span { color: var(--accent); }

/* Form Card */
.form-alert {
    display: flex; align-items: center; gap: 10px;
    padding: 14px 18px; border-radius: 10px;
    font-size: 0.9rem; font-weight: 600;
    margin-bottom: 1.5rem;
}
.form-alert-success { background: #f0fff4; color: #276749; border: 1px solid #9ae6b4; }

.contact-form-card {
    background: var(--white);
    border-radius: 20px;
    padding: 44px 40px;
    box-shadow: 0 8px 40px rgba(13,27,42,0.1);
    border: 1px solid var(--border-light);
}
.contact-form-card h3 {
    font-family: var(--font-heading); font-size: 1.4rem;
    font-weight: 700; color: var(--primary);
    margin-bottom: 1.8rem;
    padding-bottom: 1.4rem;
    border-bottom: 1px solid var(--border-light);
}

.form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
.form-group { margin-bottom: 1.2rem; }
.form-group label {
    display: block; font-weight: 700; font-size: 0.875rem;
    color: var(--text-dark); margin-bottom: 0.5rem;
}
.required { color: var(--accent); }
.input-wrap { position: relative; }
.input-icon {
    position: absolute; left: 14px; top: 50%;
    transform: translateY(-50%);
    color: var(--text-light); font-size: 0.9rem;
    pointer-events: none;
}
.contact-form input,
.contact-form textarea {
    width: 100%; border: 2px solid var(--border-light);
    border-radius: 10px; padding: 13px 14px 13px 40px;
    font-size: 0.9rem; font-family: var(--font-body);
    color: var(--text-dark); outline: none;
    transition: border-color 0.25s, box-shadow 0.25s;
    box-sizing: border-box;
}
.contact-form textarea {
    padding-left: 14px; resize: vertical; min-height: 120px;
}
.contact-form input:focus,
.contact-form textarea:focus {
    border-color: var(--accent);
    box-shadow: 0 0 0 4px rgba(232,146,10,0.12);
}
.contact-form input.is-error,
.contact-form textarea.is-error { border-color: #e53e3e; }
.field-error { font-size: 0.8rem; color: #e53e3e; margin-top: 4px; display: block; }

.form-submit-btn {
    width: 100%; height: 54px;
    display: flex; align-items: center; justify-content: center; gap: 10px;
    background: var(--accent); color: var(--white);
    border: none; border-radius: 10px;
    font-size: 1rem; font-weight: 700; font-family: var(--font-body);
    cursor: pointer; transition: background 0.25s, transform 0.2s;
    margin-top: 0.5rem;
}
.form-submit-btn:hover { background: var(--accent-dark); transform: translateY(-2px); }

@media (max-width: 900px) {
    .contact-grid { grid-template-columns: 1fr; gap: 50px; }
}
@media (max-width: 600px) {
    .form-row { grid-template-columns: 1fr; }
    .contact-form-card { padding: 28px 20px; }
}
</style>

@include('home.footer')
