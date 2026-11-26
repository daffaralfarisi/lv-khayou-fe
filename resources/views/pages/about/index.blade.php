@extends('layouts.main')

@section('content')
<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->

@include('pages.about.header')

<style>
    .about-section {
        padding: 30px 0;
    }
    
    .about-hero {
        background: #de9c43;
        color: white;
        padding: 120px 0;
        text-align: center;
        position: relative;
        overflow: hidden;
    }
    
    .about-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0,0,0,0.1);
        z-index: 1;
    }
    
    .about-hero .container {
        position: relative;
        z-index: 2;
    }
    
    .about-hero h1 {
        font-size: 3.5rem;
        font-weight: 700;
        margin-bottom: 24px;
        text-shadow: 0 2px 4px rgba(0,0,0,0.3);
    }
    
    .about-hero p {
        font-size: 1.25rem;
        margin-bottom: 32px;
        opacity: 0.95;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
    }
    
    .floating-shapes {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        overflow: hidden;
        z-index: 1;
    }
    
    .shape {
        position: absolute;
        background: rgba(255,255,255,0.1);
        border-radius: 50%;
        animation: float 6s ease-in-out infinite;
    }
    
    .shape:nth-child(1) {
        width: 80px;
        height: 80px;
        top: 20%;
        left: 10%;
        animation-delay: 0s;
    }
    
    .shape:nth-child(2) {
        width: 120px;
        height: 120px;
        top: 60%;
        right: 15%;
        animation-delay: 2s;
    }
    
    .shape:nth-child(3) {
        width: 60px;
        height: 60px;
        bottom: 30%;
        left: 20%;
        animation-delay: 4s;
    }
    
    @keyframes float {
        0%, 100% { transform: translateY(0px) rotate(0deg); }
        50% { transform: translateY(-20px) rotate(180deg); }
    }
    
    .section-title {
        font-size: 2.5rem;
        font-weight: 700;
        text-align: center;
        margin-bottom: 60px;
        color: #1f2937;
        position: relative;
    }
    
    .section-title::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: #de9c43;
        border-radius: 2px;
    }
    
    .story-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
        align-items: center;
        margin-bottom: 80px;
    }
    
    .story-content h3 {
        font-size: 2rem;
        font-weight: 600;
        color: #1f2937;
        margin-bottom: 24px;
    }
    
    .story-content p {
        font-size: 1.1rem;
        line-height: 1.8;
        color: #6b7280;
        margin-bottom: 20px;
    }
    
    .story-image {
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
    }
    
    .story-image:hover {
        transform: translateY(-8px);
    }
    
    .story-image img {
        width: 100%;
        height: 550px;
        object-fit: cover;
        transition: transform 0.3s ease;
    }
    
    .story-image:hover img {
        transform: scale(1.05);
    }
    
    .values-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 40px;
        margin-top: 60px;
    }
    
    .value-card {
        background: white;
        padding: 40px 30px;
        border-radius: 16px;
        text-align: center;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        transition: all 0.3s ease;
        border: 1px solid #f1f5f9;
    }
    
    .value-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.15);
    }
    
    .value-icon {
        width: 80px;
        height: 80px;
        background: #de9c43;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 24px;
        font-size: 2rem;
        color: white;
    }
    
    .value-card h4 {
        font-size: 1.5rem;
        font-weight: 600;
        color: #1f2937;
        margin-bottom: 16px;
    }
    
    .value-card p {
        color: #6b7280;
        line-height: 1.6;
    }
    
    .team-section {
        background: #f8fafc;
        padding: 80px 0;
    }
    
    .team-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 40px;
        margin-top: 60px;
    }
    
    .team-card {
        background: white;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        transition: all 0.3s ease;
    }
    
    .team-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.15);
    }
    
    .team-image {
        height: 300px;
        background: #de9c43;
        position: relative;
        overflow: hidden;
    }
    
    .team-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }
    
    .team-card:hover .team-image img {
        transform: scale(1.1);
    }
    
    .team-info {
        padding: 30px;
        text-align: center;
    }
    
    .team-name {
        font-size: 1.25rem;
        font-weight: 600;
        color: #1f2937;
        margin-bottom: 8px;
    }
    
    .team-role {
        color: #de9c43;
        font-weight: 500;
        margin-bottom: 16px;
    }
    
    .team-bio {
        color: #6b7280;
        font-size: 0.95rem;
        line-height: 1.6;
    }
    
    .stats-section {
        background: linear-gradient(135deg, #1f2937 0%, #374151 100%);
        color: white;
        padding: 80px 0;
        text-align: center;
    }
    
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 40px;
        margin-top: 60px;
    }
    
    .stat-item {
        padding: 20px;
    }
    
    .stat-number {
        font-size: 3rem;
        font-weight: 700;
        color: #fbbf24;
        margin-bottom: 8px;
        display: block;
    }
    
    .stat-label {
        font-size: 1.1rem;
        opacity: 0.9;
    }
    
    .cta-section {
        background: white;
        padding: 100px 0;
        text-align: center;
    }
    
    .cta-content {
        max-width: 600px;
        margin: 0 auto;
    }
    
    .cta-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: #1f2937;
        margin-bottom: 24px;
    }
    
    .cta-text {
        font-size: 1.2rem;
        color: #6b7280;
        margin-bottom: 40px;
        line-height: 1.6;
    }
    
    .cta-buttons {
        display: flex;
        gap: 20px;
        justify-content: center;
        flex-wrap: wrap;
    }
    
    .btn-primary-custom {
        background: #de9c43;
        color: white;
        padding: 16px 32px;
        border-radius: 50px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
        border: none;
        font-size: 1.1rem;
    }
    
    .btn-primary-custom:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3);
        color: white;
    }
    
    .btn-outline-custom {
        border: 2px solid #de9c43;
        color: #de9c43;
        padding: 14px 32px;
        border-radius: 50px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
        background: transparent;
        font-size: 1.1rem;
    }
    
    .btn-outline-custom:hover {
        background: #de9c43;
        color: white;
        transform: translateY(-2px);
    }
    
    @media (max-width: 768px) {
        .about-hero h1 {
            font-size: 2.5rem;
        }
        
        .section-title {
            font-size: 2rem;
        }
        
        .story-grid {
            grid-template-columns: 1fr;
            gap: 40px;
        }
        
        .story-grid:nth-child(even) .story-content {
            order: 2;
        }
        
        .story-grid:nth-child(even) .story-image {
            order: 1;
        }
        
        .cta-buttons {
            flex-direction: column;
            align-items: center;
        }
        
        .btn-primary-custom,
        .btn-outline-custom {
            width: 100%;
            max-width: 300px;
        }
    }
</style>
<!-- Founder Introduction Section -->
<section class="about-section" id="founder-intro">
        <div class="container">
                <h2 class="section-title">About Khayou</h2>

                <div class="story-grid" style="align-items:center;">
                        <div class="story-image" style="max-width:440px; margin:auto;">
                                <img src="{{ asset('images/team/founder-khayou.jpg') }}" alt="Alex Chen - Pendiri & CEO" onerror="this.src='{{ asset('images/team/team-1-6.jpg') }}'">
                        </div>

                        <div class="story-content">
                                <h3>Muhammad Rizki Khaira</h3>
                                <p class="team-role" style="color:#de9c43;font-weight:600;margin-top:6px;">Founder & Owner</p>

                                <p>Rizki is a Product Design graduate (Class of 2019) who has now founded and developed a furniture business under the brand Khayou. Established in 2025, Khayou carries a simple vision: to create workspace setup solutions that are functional, beautiful, and durable. With approximately five years of experience working in the hospitality industry as a Field QC and Manufacturing QA, he leads a team that prioritizes quality, sustainability, and user experience in every product.</p>

                                <blockquote style="margin-top:18px;font-style:italic;color:#374151;border-left:4px solid #de9c43;padding-left:16px;">
                                        "Where design meets function, life gets easier."
                                </blockquote>
                        </div>
                </div>
        </div>
</section>
<!-- Our Story Section -->
<section class="about-section">
    <div class="container">
        <h2 class="section-title">Our Story</h2>        
        <div class="story-grid">
            <div class="story-content">
                <h3>Founded on Innovation</h3>
                <p>Khayou was born from a simple observation: in this era of rapid technological advancement, we realized that professionals are spending more time at their desks than ever before, yet their workspace layouts remain static and uninspiring.

What began as a passionate project to create the perfect deskshelf has now evolved into a comprehensive ecosystem of workspace solutions, each crafted with meticulous attention to detail and user experience.
</p>
            </div>
            <div class="story-image">
                <img src="{{ asset('images/backgrounds/ls1.webp') }}" alt="Khayou founding story" onerror="this.src='{{ asset('images/backgrounds/ls1.webp') }}'">
            </div>
        </div>
        
        <div class="story-grid">
            <div class="story-image">
                <img src="{{ asset('images/backgrounds/ls2.webp') }}" alt="Modern workspace setup" onerror="this.src='{{ asset('images/backgrounds/ls1.webp') }}'">
            </div>
            <div class="story-content">
                <h3>Designing for Life</h3>
                <p>We believe that your workspace should adapt to your life, not the other way around. Every Khayou product is designed with modularity and flexibility in mind, allowing you to create a setup that truly works for you.</p>
                <p>From our signature Setup Cockpit series to our innovative cable management solutions, each product undergoes rigorous testing and refinement to ensure it meets our exacting standards for quality and functionality.</p>
            </div>
        </div>
    </div>
</section>

<!-- Our Values Section -->
<section class="about-section" style="background: #f8fafc;">
    <div class="container">
        <h2 class="section-title">Our Values</h2>
        
        <div class="values-grid">
            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <h4>Innovation</h4>
                <p>We constantly push the boundaries of workspace design, incorporating cutting-edge materials and forward-thinking concepts to create products that anticipate future needs.</p>
            </div>
            
            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-leaf"></i>
                </div>
                <h4>Sustainability</h4>
                <p>Environmental responsibility is at the core of our design philosophy. We use sustainably sourced materials.</p>
            </div>
            
            {{-- <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h4>Community</h4>
                <p>We believe in building lasting relationships with our customers, listening to their feedback, and creating products that truly serve their evolving workspace needs.</p>
            </div> --}}
            
            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-gem"></i>
                </div>
                <h4>Quality</h4>
                <p>Every Khayou product is built to last, using premium materials and precise manufacturing processes that ensure durability and long-term satisfaction.</p>
            </div>
            
            {{-- <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-puzzle-piece"></i>
                </div>
                <h4>Modularity</h4>
                <p>We design products that work together seamlessly, allowing you to build and expand your workspace setup as your needs evolve over time.</p>
            </div>
            
            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-heart"></i>
                </div>
                <h4>Passion</h4>
                <p>Our love for great design and exceptional craftsmanship drives everything we do, from initial concept to final delivery to your door.</p>
            </div> --}}
        </div>
    </div>
</section>


<!-- Call to Action Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2 class="cta-title">Ready to Transform Your Workspace?</h2>
            <p class="cta-text">Experience the elegance of thoughtful design that transforms work into something more meaningful.</p>
            
            <div class="cta-buttons">
                <a href="/shop/khayou-set-bundle" class="btn-primary-custom">Shop Now</a>
                <a href="#contact" class="btn-outline-custom js-scroll-to-contact">Get in Touch</a>
                <script>
                document.addEventListener('click', function(e){
                        const btn = e.target.closest('.js-scroll-to-contact');
                        if (!btn) return;
                        e.preventDefault();
                        const id = btn.getAttribute('href');
                        const target = document.querySelector(id);
                        if (!target) return;

                        // cari header sticky jika ada, fallback ke 80px
                        const header = document.querySelector('.stricky-header') || document.querySelector('.main-menu') || document.querySelector('header');
                        const headerHeight = header ? header.offsetHeight : 80;
                        const extraOffset = 12; // jarak tambahan agar judul terlihat jelas

                        const top = target.getBoundingClientRect().top + window.pageYOffset - headerHeight - extraOffset;
                        window.scrollTo({ top, behavior: 'smooth' });
                });
                </script>
            </div>
        </div>
    </div>
</section>

<section class="contact pb-5" id="contact" style="padding: 60px 0; background: #f8fafc;">
        <div class="container">
                <h2 class="section-title">Contact Us</h2>
                <p style="text-align:center; max-width:600px; margin:0 auto; color:#6b7280; font-size:1.1rem; margin-bottom:40px;">
                        Have questions or need assistance? Our team is here to help you create the perfect workspace setup. Reach out to us anytime!
                </p>
                
                <style>
                        /* Contact form styling */
                        .contact-form-validated {
                                background: #ffffff;
                                padding: 28px;
                                border-radius: 12px;
                                box-shadow: 0 10px 30px rgba(15, 23, 42, 0.06);
                                border: 1px solid #eef2f6;
                        }

                        .contact-form-validated .form-group {
                                margin-bottom: 16px;
                        }

                        .contact-form-validated input[type="text"],
                        .contact-form-validated input[type="email"],
                        .contact-form-validated textarea {
                                width: 100%;
                                padding: 14px 16px;
                                border-radius: 10px;
                                border: 1px solid #e6e9ee;
                                background: #fbfdff;
                                font-size: 1rem;
                                color: #0f172a;
                                transition: border-color 0.18s ease, box-shadow 0.18s ease, transform 0.12s ease;
                                box-sizing: border-box;
                        }

                        .contact-form-validated textarea { 
                                min-height: 140px;
                                resize: vertical;
                        }

                        .contact-form-validated input::placeholder,
                        .contact-form-validated textarea::placeholder {
                                color: #9aa4b2;
                        }

                        .contact-form-validated input:focus,
                        .contact-form-validated textarea:focus {
                                outline: none;
                                border-color: #de9c43;
                                box-shadow: 0 8px 20px rgba(222,156,67,0.12);
                                transform: translateY(-1px);
                        }

                        .contact-form-validated .message-btn {
                                margin-top: 8px;
                        }

                        .contact-form-validated .thm-btn {
                                display: inline-block;
                                padding: 14px 30px;
                                border-radius: 50px;
                                background: #de9c43;
                                color: #fff;
                                font-weight: 600;
                                font-size: 1.05rem;
                                border: none;
                                cursor: pointer;
                                transition: transform 0.18s ease, box-shadow 0.18s ease;
                                text-decoration: none;
                        }

                        .contact-form-validated .thm-btn:hover,
                        .contact-form-validated .thm-btn:focus {
                                transform: translateY(-4px);
                                box-shadow: 0 12px 30px rgba(222,156,67,0.18);
                        }

                        /* Small helper text / error */
                        .contact-form-validated .help-text {
                                display: block;
                                font-size: 0.9rem;
                                color: #6b7280;
                                margin-top: -6px;
                        }

                        .contact-form-validated .error {
                                color: #dc2626;
                                font-size: 0.9rem;
                                margin-top: 6px;
                        }

                        @media (max-width: 576px) {
                                .contact-form-validated {
                                        padding: 18px;
                                }

                                .contact-form-validated .thm-btn {
                                        width: 100%;
                                        padding: 14px 18px;
                                }
                        }
                </style>

                <div style="max-width:600px; margin:0 auto;">
                                <form id="wa-contact-form" class="contact-form-validated" novalidate="novalidate">
                                                <div class="form-group">
                                                                <input id="wa-name" type="text" name="name" placeholder="Name" required="">
                                                </div>
                                                <div class="form-group">
                                                                <input id="wa-email" type="email" name="email" placeholder="Email" required="">
                                                </div>
                                                <div class="form-group">
                                                                <textarea id="wa-message" name="message" placeholder="Message..." required=""></textarea>
                                                </div>
                                                <div class="form-group message-btn" style="text-align:center;">
                                                                <button type="submit" class="thm-btn form-inner__btn">Submit Now</button>
                                                </div>
                                </form>
                </div>

                <script>
                (function(){
                        const form = document.getElementById('wa-contact-form');
                        const phone = '6282121080408'; // target WhatsApp number

                        form.addEventListener('submit', function(e){
                                e.preventDefault();

                                const name = document.getElementById('wa-name').value.trim();
                                const email = document.getElementById('wa-email').value.trim();
                                const message = document.getElementById('wa-message').value.trim();

                                // simple validation
                                if (!name || !email || !message) {
                                        alert('Silakan lengkapi semua isian sebelum mengirim.');
                                        return;
                                }

                                // build message (Indonesian)
                                const text = [
                                        'Halo Khayou,',
                                        '',
                                        'Nama: ' + name,
                                        'Email: ' + email,
                                        '',
                                        'Pesan:',
                                        message
                                ].join('\n');

                                const encoded = encodeURIComponent(text);
                                const url = 'https://wa.me/' + phone + '?text=' + encoded;

                                // open WhatsApp in new tab/window
                                window.open(url, '_blank');
                        });
                })();
                </script>
        </div>
</section>

@endsection

