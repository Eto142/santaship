@include('home.header')

{{-- ======================================================
     SANTASHIP LOGISTICS — TEAM PAGE
====================================================== --}}

{{-- PAGE HERO --}}
<section class="page-hero">
    <div class="container page-hero-inner">
        <h1 class="page-hero-title">Our Team</h1>
        <nav class="breadcrumb-nav" aria-label="breadcrumb">
            <a href="{{ url('/') }}">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>Our Team</span>
        </nav>
    </div>
</section>

{{-- TEAM INTRO --}}
<section class="team-intro-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <div class="section-label">The People Behind the Brand</div>
            <h2 class="section-title">Meet Our <span>Leadership Team</span></h2>
            <p class="section-subtitle">Experienced logistics professionals dedicated to delivering excellence across every shipment, every single day.</p>
        </div>
    </div>
</section>

{{-- TEAM GRID --}}
<section class="team-grid-section">
    <div class="container">
        <div class="team-grid">

            <div class="team-card" data-aos="fade-up" data-aos-delay="0">
                <div class="team-photo">
                    <div class="team-photo-placeholder"><i class="fas fa-user"></i></div>
                </div>
                <div class="team-info">
                    <h3>Klaus Müller</h3>
                    <span class="team-role">Chief Executive Officer</span>
                    <p>With over 22 years in international freight and supply chain management, Klaus leads Santaship Logistics from our headquarters in Frankfurt, driving strategic growth across Europe and beyond.</p>
                    <div class="team-social">
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" aria-label="Email"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>

            <div class="team-card" data-aos="fade-up" data-aos-delay="80">
                <div class="team-photo">
                    <div class="team-photo-placeholder"><i class="fas fa-user"></i></div>
                </div>
                <div class="team-info">
                    <h3>Sophie Laurent</h3>
                    <span class="team-role">Operations Director</span>
                    <p>Based in Paris, Sophie oversees end-to-end freight operations across Europe. Her experience spans air cargo, ocean freight, and multimodal logistics across 40+ countries.</p>
                    <div class="team-social">
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" aria-label="Email"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>

            <div class="team-card" data-aos="fade-up" data-aos-delay="160">
                <div class="team-photo">
                    <div class="team-photo-placeholder"><i class="fas fa-user"></i></div>
                </div>
                <div class="team-info">
                    <h3>James Thornton</h3>
                    <span class="team-role">Head of Customs &amp; Compliance</span>
                    <p>A former UK Border Force officer, James brings 18 years of regulatory expertise. He ensures every shipment clears customs efficiently, meeting EU, UK, and international trade compliance standards.</p>
                    <div class="team-social">
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" aria-label="Email"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>

            <div class="team-card" data-aos="fade-up" data-aos-delay="0">
                <div class="team-photo">
                    <div class="team-photo-placeholder"><i class="fas fa-user"></i></div>
                </div>
                <div class="team-info">
                    <h3>Emily Hartmann</h3>
                    <span class="team-role">Customer Experience Manager</span>
                    <p>Emily leads our client support operations from our Hamburg office, ensuring every customer receives prompt, professional service at every stage of their shipment journey.</p>
                    <div class="team-social">
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" aria-label="Email"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>

            <div class="team-card" data-aos="fade-up" data-aos-delay="80">
                <div class="team-photo">
                    <div class="team-photo-placeholder"><i class="fas fa-user"></i></div>
                </div>
                <div class="team-info">
                    <h3>Marco Ricci</h3>
                    <span class="team-role">Regional Manager — Southern Europe</span>
                    <p>Operating from Milan, Marco manages logistics partnerships and port operations across Italy, Spain, and the wider Mediterranean corridor, ensuring seamless last-mile connectivity.</p>
                    <div class="team-social">
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" aria-label="Email"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>

            <div class="team-card" data-aos="fade-up" data-aos-delay="160">
                <div class="team-photo">
                    <div class="team-photo-placeholder"><i class="fas fa-user"></i></div>
                </div>
                <div class="team-info">
                    <h3>Lena Becker</h3>
                    <span class="team-role">IT &amp; Tracking Systems Lead</span>
                    <p>Lena architected Santaship's real-time shipment tracking platform from our Berlin tech hub. She maintains 99.9% system uptime and leads all digital transformation initiatives across the business.</p>
                    <div class="team-social">
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" aria-label="Email"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- JOIN THE TEAM --}}
<section class="join-section">
    <div class="container">
        <div class="join-card" data-aos="fade-up">
            <div class="join-icon"><i class="fas fa-users"></i></div>
            <h2>Want to Join Our Team?</h2>
            <p>We're always looking for passionate logistics professionals to grow with us. Send your CV and a cover letter — we'd love to hear from you.</p>
            <a href="{{ url('/contact') }}" class="join-btn">Get in Touch</a>
        </div>
    </div>
</section>

<style>
/* =========================================================
   TEAM PAGE STYLES
========================================================= */
.page-hero {
    position: relative;
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-mid) 100%);
    padding: 120px 0 80px; overflow: hidden;
}
.page-hero::before {
    content: ''; position: absolute; inset: 0;
    background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}
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
.section-subtitle { color: var(--text-mid); max-width: 600px; margin: 0 auto; line-height: 1.7; }
.section-header { text-align: center; margin-bottom: 20px; }

.team-intro-section { padding: 80px 0 40px; }
.team-grid-section { padding: 40px 0 100px; }
.team-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; }

.team-card {
    background: var(--white);
    border-radius: 16px;
    overflow: hidden;
    border: 1px solid var(--border-light);
    transition: box-shadow 0.3s, transform 0.3s;
}
.team-card:hover { box-shadow: 0 12px 40px rgba(0,0,0,0.1); transform: translateY(-4px); }
.team-photo {
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-mid) 100%);
    height: 200px;
    display: flex; align-items: center; justify-content: center;
}
.team-photo-placeholder i { font-size: 5rem; color: rgba(255,255,255,0.15); }
.team-info { padding: 24px; }
.team-info h3 { font-family: var(--font-heading); font-size: 1.15rem; font-weight: 700; color: var(--primary); margin-bottom: 4px; }
.team-role { display: inline-block; font-size: 0.8rem; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 0.8rem; }
.team-info p { font-size: 0.875rem; color: var(--text-mid); line-height: 1.6; margin-bottom: 1rem; }
.team-social { display: flex; gap: 8px; }
.team-social a {
    width: 34px; height: 34px;
    background: var(--bg-light); border-radius: 8px;
    display: flex; align-items: center; justify-content: center;
    color: var(--text-mid); font-size: 0.8rem;
    text-decoration: none;
    transition: background 0.2s, color 0.2s;
}
.team-social a:hover { background: var(--accent); color: var(--white); }

/* Join section */
.join-section { padding: 60px 0 100px; }
.join-card {
    background: var(--primary);
    border-radius: 20px;
    padding: 60px 40px;
    text-align: center;
    max-width: 700px;
    margin: 0 auto;
}
.join-icon { width: 70px; height: 70px; background: rgba(232,146,10,0.15); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; }
.join-icon i { font-size: 1.6rem; color: var(--accent); }
.join-card h2 { font-family: var(--font-heading); font-size: 2rem; font-weight: 700; color: var(--white); margin-bottom: 1rem; }
.join-card p { color: rgba(255,255,255,0.7); line-height: 1.7; margin-bottom: 2rem; max-width: 500px; margin-left: auto; margin-right: auto; }
.join-btn {
    display: inline-block;
    background: var(--accent); color: var(--white);
    padding: 14px 36px; border-radius: 8px;
    font-weight: 700; text-decoration: none;
    transition: background 0.25s, transform 0.2s;
}
.join-btn:hover { background: var(--accent-dark); transform: translateY(-2px); }

@media (max-width: 900px) { .team-grid { grid-template-columns: 1fr 1fr; } }
@media (max-width: 600px) { .team-grid { grid-template-columns: 1fr; } .join-card { padding: 36px 20px; } }
</style>

@include('home.footer')
