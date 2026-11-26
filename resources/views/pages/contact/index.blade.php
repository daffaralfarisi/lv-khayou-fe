@extends('layouts.main')

@section('content')
<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->

@include('pages.contact.header')

<style>
    .contact-section {
        padding: 80px 0;
    }
    
    .contact-hero {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 100px 0;
        text-align: center;
        position: relative;
        overflow: hidden;
    }
    
    .contact-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0,0,0,0.1);
        z-index: 1;
    }
    
    .contact-hero .container {
        position: relative;
        z-index: 2;
    }
    
    .contact-hero h1 {
        font-size: 3rem;
        font-weight: 700;
        margin-bottom: 20px;
        text-shadow: 0 2px 4px rgba(0,0,0,0.3);
    }
    
    .contact-hero p {
        font-size: 1.2rem;
        margin-bottom: 0;
        opacity: 0.95;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
    }
    
    .contact-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 80px;
        align-items: start;
    }
    
    .contact-form-section {
        background: white;
        padding: 50px;
        border-radius: 20px;
        box-shadow: 0 20px 40px rgba(0,0,0,0.08);
        border: 1px solid #f1f5f9;
    }
    
    .form-title {
        font-size: 2rem;
        font-weight: 700;
        color: #1f2937;
        margin-bottom: 8px;
    }
    
    .form-subtitle {
        color: #6b7280;
        margin-bottom: 40px;
        font-size: 1.1rem;
    }
    
    .form-group {
        margin-bottom: 24px;
    }
    
    .form-label {
        display: block;
        font-weight: 600;
        color: #374151;
        margin-bottom: 8px;
        font-size: 14px;
    }
    
    .form-control {
        width: 100%;
        padding: 16px 20px;
        border: 2px solid #e5e7eb;
        border-radius: 12px;
        font-size: 16px;
        transition: all 0.3s ease;
        background: #fff;
    }
    
    .form-control:focus {
        outline: none;
        border-color: #667eea;
        box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        transform: translateY(-1px);
    }
    
    .form-control::placeholder {
        color: #9ca3af;
    }
    
    .form-select {
        appearance: none;
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='m6 8 4 4 4-4'/%3e%3c/svg%3e");
        background-position: right 12px center;
        background-repeat: no-repeat;
        background-size: 16px;
        padding-right: 48px;
    }
    
    .form-textarea {
        min-height: 120px;
        resize: vertical;
    }
    
    .btn-submit {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 16px 40px;
        border: none;
        border-radius: 50px;
        font-weight: 600;
        font-size: 16px;
        cursor: pointer;
        transition: all 0.3s ease;
        width: 100%;
    }
    
    .btn-submit:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3);
    }
    
    .btn-submit:disabled {
        opacity: 0.6;
        cursor: not-allowed;
        transform: none;
    }
    
    .contact-info-section {
        padding: 20px 0;
    }
    
    .contact-cards {
        display: grid;
        gap: 30px;
        margin-bottom: 50px;
    }
    
    .contact-card {
        background: white;
        padding: 40px 30px;
        border-radius: 16px;
        text-align: center;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        transition: all 0.3s ease;
        border: 1px solid #f1f5f9;
    }
    
    .contact-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.12);
    }
    
    .contact-icon {
        width: 70px;
        height: 70px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        font-size: 1.8rem;
        color: white;
    }
    
    .contact-card h3 {
        font-size: 1.3rem;
        font-weight: 600;
        color: #1f2937;
        margin-bottom: 12px;
    }
    
    .contact-card p {
        color: #6b7280;
        margin-bottom: 16px;
        line-height: 1.6;
    }
    
    .contact-link {
        color: #667eea;
        text-decoration: none;
        font-weight: 600;
        transition: color 0.2s ease;
    }
    
    .contact-link:hover {
        color: #4f46e5;
    }
    
    .office-hours {
        background: #f8fafc;
        padding: 30px;
        border-radius: 16px;
        margin-bottom: 40px;
    }
    
    .office-hours h4 {
        font-size: 1.4rem;
        font-weight: 600;
        color: #1f2937;
        margin-bottom: 20px;
        text-align: center;
    }
    
    .hours-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .hours-item {
        display: flex;
        justify-content: between;
        padding: 8px 0;
        border-bottom: 1px solid #e5e7eb;
    }
    
    .hours-item:last-child {
        border-bottom: none;
    }
    
    .hours-day {
        font-weight: 600;
        color: #374151;
        flex: 1;
    }
    
    .hours-time {
        color: #6b7280;
    }
    
    .social-section {
        text-align: center;
    }
    
    .social-title {
        font-size: 1.4rem;
        font-weight: 600;
        color: #1f2937;
        margin-bottom: 20px;
    }
    
    .social-links {
        display: flex;
        justify-content: center;
        gap: 20px;
        flex-wrap: wrap;
    }
    
    .social-link {
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        text-decoration: none;
        font-size: 1.2rem;
        transition: all 0.3s ease;
    }
    
    .social-link:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 16px rgba(102, 126, 234, 0.3);
        color: white;
    }
    
    .map-section {
        margin-top: 80px;
        text-align: center;
    }
    
    .map-title {
        font-size: 2rem;
        font-weight: 700;
        color: #1f2937;
        margin-bottom: 40px;
    }
    
    .map-container {
        background: #f8fafc;
        border-radius: 16px;
        padding: 40px;
        border: 1px solid #e5e7eb;
    }
    
    .map-placeholder {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 100px 20px;
        border-radius: 12px;
        text-align: center;
    }
    
    .map-placeholder h4 {
        font-size: 1.5rem;
        margin-bottom: 16px;
    }
    
    .map-placeholder p {
        opacity: 0.9;
        margin-bottom: 20px;
    }
    
    .faq-section {
        background: #f8fafc;
        padding: 80px 0;
        margin-top: 80px;
    }
    
    .faq-title {
        font-size: 2.5rem;
        font-weight: 700;
        text-align: center;
        margin-bottom: 60px;
        color: #1f2937;
    }
    
    .faq-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
        gap: 30px;
    }
    
    .faq-item {
        background: white;
        padding: 30px;
        border-radius: 16px;
        box-shadow: 0 4px 6px rgba(0,0,0,0.05);
    }
    
    .faq-question {
        font-size: 1.2rem;
        font-weight: 600;
        color: #1f2937;
        margin-bottom: 12px;
    }
    
    .faq-answer {
        color: #6b7280;
        line-height: 1.6;
    }
    
    .response-message {
        padding: 16px 20px;
        border-radius: 8px;
        margin-bottom: 20px;
        display: none;
    }
    
    .response-success {
        background: #d1fae5;
        color: #065f46;
        border: 1px solid #a7f3d0;
    }
    
    .response-error {
        background: #fee2e2;
        color: #991b1b;
        border: 1px solid #fca5a5;
    }
    
    @media (max-width: 1024px) {
        .contact-grid {
            gap: 50px;
        }
        
        .contact-form-section {
            padding: 40px;
        }
    }
    
    @media (max-width: 768px) {
        .contact-hero h1 {
            font-size: 2.5rem;
        }
        
        .contact-grid {
            grid-template-columns: 1fr;
            gap: 40px;
        }
        
        .contact-form-section {
            padding: 30px 20px;
        }
        
        .social-links {
            gap: 15px;
        }
        
        .faq-grid {
            grid-template-columns: 1fr;
        }
        
        .faq-item {
            padding: 20px;
        }
    }
    
    @media (max-width: 480px) {
        .contact-hero {
            padding: 60px 0;
        }
        
        .contact-section {
            padding: 50px 0;
        }
        
        .map-placeholder {
            padding: 60px 20px;
        }
    }
</style>

<!-- Hero Section -->
<section class="contact-hero">
    <div class="container">
        <h1>Get in Touch</h1>
        <p>Have questions about our products or need personalized workspace advice? We're here to help you create the perfect setup.</p>
    </div>
</section>

<!-- Main Contact Section -->
<section class="contact-section">
    <div class="container">
        <div class="contact-grid">
            <!-- Contact Form -->
            <div class="contact-form-section">
                <h2 class="form-title">Send us a Message</h2>
                <p class="form-subtitle">Fill out the form below and we'll get back to you within 24 hours.</p>
                
                <div class="response-message response-success" id="successMessage">
                    <i class="fas fa-check-circle"></i> Thank you for your message! We'll get back to you soon.
                </div>
                
                <div class="response-message response-error" id="errorMessage">
                    <i class="fas fa-exclamation-circle"></i> Sorry, there was an error sending your message. Please try again.
                </div>
                
                <form id="contactForm" onsubmit="submitContactForm(event)">
                    <div class="form-group">
                        <label for="name" class="form-label">Full Name *</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Your full name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email" class="form-label">Email Address *</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="your.email@example.com" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="subject" class="form-label">Subject *</label>
                        <select id="subject" name="subject" class="form-control form-select" required>
                            <option value="">Select a topic</option>
                            <option value="product-inquiry">Product Inquiry</option>
                            <option value="technical-support">Technical Support</option>
                            <option value="order-status">Order Status</option>
                            <option value="custom-solution">Custom Solution</option>
                            <option value="partnership">Partnership</option>
                            <option value="media-press">Media & Press</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="company" class="form-label">Company (Optional)</label>
                        <input type="text" id="company" name="company" class="form-control" placeholder="Your company name">
                    </div>
                    
                    <div class="form-group">
                        <label for="message" class="form-label">Message *</label>
                        <textarea id="message" name="message" class="form-control form-textarea" placeholder="Tell us how we can help you..." required></textarea>
                    </div>
                    
                    <button type="submit" class="btn-submit" id="submitBtn">
                        <span class="btn-text">Send Message</span>
                        <span class="btn-loading" style="display: none;">
                            <i class="fas fa-spinner fa-spin"></i> Sending...
                        </span>
                    </button>
                </form>
            </div>
            
            <!-- Contact Information -->
            <div class="contact-info-section">
                <div class="contact-cards">
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h3>Email Us</h3>
                        <p>Get in touch via email for any inquiries or support needs.</p>
                        <a href="mailto:hello@khayou.com" class="contact-link">hello@khayou.com</a>
                    </div>
                    
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <h3>Call Us</h3>
                        <p>Speak directly with our customer support team.</p>
                        <a href="tel:+1234567890" class="contact-link">+1 (234) 567-890</a>
                    </div>
                    
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h3>Visit Us</h3>
                        <p>Come see our products in person at our showroom.</p>
                        <a href="#map" class="contact-link">123 Design Street, Creative District<br>San Francisco, CA 94102</a>
                    </div>
                    
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-comments"></i>
                        </div>
                        <h3>Live Chat</h3>
                        <p>Chat with us in real-time for instant support.</p>
                        <a href="#" class="contact-link" onclick="openLiveChat()">Start Live Chat</a>
                    </div>
                </div>
                
                <!-- Office Hours -->
                <div class="office-hours">
                    <h4>Office Hours</h4>
                    <ul class="hours-list">
                        <li class="hours-item">
                            <span class="hours-day">Monday - Friday</span>
                            <span class="hours-time">9:00 AM - 6:00 PM PST</span>
                        </li>
                        <li class="hours-item">
                            <span class="hours-day">Saturday</span>
                            <span class="hours-time">10:00 AM - 4:00 PM PST</span>
                        </li>
                        <li class="hours-item">
                            <span class="hours-day">Sunday</span>
                            <span class="hours-time">Closed</span>
                        </li>
                    </ul>
                </div>
                
                <!-- Social Media -->
                <div class="social-section">
                    <h4 class="social-title">Follow Us</h4>
                    <div class="social-links">
                        <a href="#" class="social-link" title="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-link" title="Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-link" title="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="social-link" title="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="social-link" title="YouTube">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Map Section -->
        <div class="map-section" id="map">
            <h3 class="map-title">Find Our Showroom</h3>
            <div class="map-container">
                <div class="map-placeholder">
                    <h4><i class="fas fa-map-marked-alt"></i> Interactive Map</h4>
                    <p>123 Design Street, Creative District<br>San Francisco, CA 94102</p>
                    <a href="https://maps.google.com/?q=123+Design+Street+San+Francisco+CA" target="_blank" class="btn-outline-custom" style="display: inline-block; margin-top: 16px; color: white; border-color: white;">
                        Open in Google Maps
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <h2 class="faq-title">Frequently Asked Questions</h2>
        
        <div class="faq-grid">
            <div class="faq-item">
                <h4 class="faq-question">What's your return policy?</h4>
                <p class="faq-answer">We offer a 30-day return policy on all products. Items must be in original condition with all packaging included.</p>
            </div>
            
            <div class="faq-item">
                <h4 class="faq-question">Do you ship internationally?</h4>
                <p class="faq-answer">Yes, we ship to over 25 countries worldwide. Shipping costs and delivery times vary by location.</p>
            </div>
            
            <div class="faq-item">
                <h4 class="faq-question">Can I customize products?</h4>
                <p class="faq-answer">We offer customization options for many of our products. Contact us to discuss your specific needs and requirements.</p>
            </div>
            
            <div class="faq-item">
                <h4 class="faq-question">What materials do you use?</h4>
                <p class="faq-answer">We use premium, sustainably-sourced materials including American Walnut, Oak, and high-grade aluminum in our products.</p>
            </div>
            
            <div class="faq-item">
                <h4 class="faq-question">How long is the warranty?</h4>
                <p class="faq-answer">All Khayou products come with a 2-year warranty covering manufacturing defects and normal wear and tear.</p>
            </div>
            
            <div class="faq-item">
                <h4 class="faq-question">Do you offer installation services?</h4>
                <p class="faq-answer">Most of our products are designed for easy self-assembly. However, we can recommend professional installers in your area if needed.</p>
            </div>
        </div>
    </div>
</section>

<script>
    function submitContactForm(event) {
        event.preventDefault();
        
        const submitBtn = document.getElementById('submitBtn');
        const btnText = submitBtn.querySelector('.btn-text');
        const btnLoading = submitBtn.querySelector('.btn-loading');
        const successMessage = document.getElementById('successMessage');
        const errorMessage = document.getElementById('errorMessage');
        
        // Hide any previous messages
        successMessage.style.display = 'none';
        errorMessage.style.display = 'none';
        
        // Show loading state
        submitBtn.disabled = true;
        btnText.style.display = 'none';
        btnLoading.style.display = 'inline';
        
        // Get form data
        const formData = new FormData(event.target);
        const data = {
            name: formData.get('name'),
            email: formData.get('email'),
            subject: formData.get('subject'),
            company: formData.get('company'),
            message: formData.get('message')
        };
        
        // Simulate form submission (replace with actual API call)
        setTimeout(() => {
            // Reset button state
            submitBtn.disabled = false;
            btnText.style.display = 'inline';
            btnLoading.style.display = 'none';
            
            // Simulate success (you can implement actual form submission here)
            if (Math.random() > 0.1) { // 90% success rate for demo
                successMessage.style.display = 'block';
                document.getElementById('contactForm').reset();
                
                // Scroll to success message
                successMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
            } else {
                errorMessage.style.display = 'block';
                errorMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        }, 2000);
        
        // Log form data (for development)
        console.log('Contact form submitted:', data);
    }
    
    function openLiveChat() {
        // Implement live chat functionality here
        alert('Live chat feature coming soon! Please use email or phone for immediate assistance.');
    }
    
    // Auto-hide messages after 10 seconds
    function autoHideMessage(element) {
        setTimeout(() => {
            if (element.style.display === 'block') {
                element.style.display = 'none';
            }
        }, 10000);
    }
    
    // Form validation enhancement
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('contactForm');
        const inputs = form.querySelectorAll('input, select, textarea');
        
        inputs.forEach(input => {
            input.addEventListener('blur', function() {
                if (this.hasAttribute('required') && !this.value.trim()) {
                    this.style.borderColor = '#ef4444';
                } else {
                    this.style.borderColor = '#e5e7eb';
                }
            });
            
            input.addEventListener('focus', function() {
                this.style.borderColor = '#667eea';
            });
        });
    });
</script>

@endsection

