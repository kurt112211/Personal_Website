<?php 
// This file contains the HTML and CSS for the site footer. 
?>

<style>
    /* ========================================= */
    /* ======== DEEP PURPLE FOOTER STYLES ====== */
    /* ========================================= */

    .main-footer {
        /* Fixed position, or you can use standard flow. Using standard flow for scrollable content. */
        width: 92%;
        background: #4a0f8c; 
        color: #ffffff;
        padding: 40px 4%;
        box-shadow: 0 -5px 15px rgba(0, 0, 0, 0.4);
        border-top: 3px solid transparent;
        /* Matches the gradient border from the header */
        border-image: linear-gradient(90deg, #2575fc, #6a11cb) 1; 
        font-family: Arial, sans-serif;
    }

    .footer-content {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        max-width: 1200px;
        margin: 0 auto;
        flex-wrap: wrap;
        gap: 30px;
    }

    .footer-section {
        flex: 1;
        min-width: 200px;
        margin-bottom: 20px;
    }

    /* Logo/Title style matching the header glow */
    .footer-title {
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 20px;
        color: #ffffff;
        text-transform: uppercase;
        letter-spacing: 2px;
        text-shadow: 0 0 8px rgba(255, 255, 255, 0.5); /* Subtle white glow */
    }

    /* Links and Navigation */
    .footer-section h3 {
        font-size: 1.1rem;
        font-weight: 600;
        margin-bottom: 15px;
        /* Uses the blue end of your gradient */
        color: #2575fc; 
        border-left: 3px solid #6a11cb;
        padding-left: 10px;
    }

    .footer-section ul {
        list-style: none;
        padding: 0;
    }

    .footer-section ul li {
        margin-bottom: 8px;
    }

    .footer-section a {
        color: rgba(255, 255, 255, 0.8);
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .footer-section a:hover {
        color: #d0d0ff; /* Subtle purple hover */
        text-decoration: underline;
    }

    /* Social Icons Section */
    .social-links {
        display: flex;
        gap: 15px;
        margin-top: 10px;
    }

    .social-links a {
        color: #ffffff;
        font-size: 1.5rem;
        opacity: 0.7;
        transition: opacity 0.3s ease, transform 0.3s ease;
    }

    .social-links a:hover {
        opacity: 1;
        transform: scale(1.1);
        color: #6a11cb; /* Highlight with your primary purple */
    }

    /* Copyright Bar */
    .footer-bottom {
        text-align: center;
        padding-top: 20px;
        margin-top: 30px;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        font-size: 0.85rem;
        color: rgba(255, 255, 255, 0.6);
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 468px) {
        .footer-content {
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .footer-section {
            min-width: 100%;
            margin-bottom: 25px;
        }
        
        .footer-section h3 {
            border-left: none;
            padding-left: 0;
        }

        .social-links {
            justify-content: center;
        }
        
    }
</style>

<footer class="main-footer">
    <div class="footer-content">
        
        <!-- Section 1: Brand/Contact -->
        <div class="footer-section">
            <div class="footer-title">AURORA SITE</div>
            <p style="font-size:0.9rem;">Elevating digital experiences with modern design and technology.</p>
            <p style="margin-top: 10px;">Email: <a href="mailto:info@aurora.com">info@aurora.com</a></p>
            <p>Phone: (555) 123-4567</p>
        </div>

        <!-- Section 2: Quick Links -->
        <div class="footer-section">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">Our Story</a></li>
                <li><a href="products.php">Services</a></li>
                <li><a href="contact.php">Support</a></li>
            </ul>
        </div>

        <!-- Section 3: Legal & Resources -->
        <div class="footer-section">
            <h3>Resources</h3>
            <ul>
                <li><a href="faq.php">FAQ</a></li>
                <li><a href="privacy.php">Privacy Policy</a></li>
                <li><a href="terms.php">Terms of Use</a></li>
                <li><a href="sitemap.php">Sitemap</a></li>
            </ul>
        </div>

        <!-- Section 4: Social Media (Requires FontAwesome or equivalent for icons) -->
        <div class="footer-section">
            <h3>Connect</h3>
            <!-- Placeholder icons using text/emoji, replace with FontAwesome or SVG in real app -->
            <div class="social-links">
                <a href="#" aria-label="Facebook">📘</a>
                <a href="#" aria-label="Twitter">🐦</a>
                <a href="#" aria-label="LinkedIn">🔗</a>
                <a href="#" aria-label="Instagram">📸</a>
            </div>
        </div>

    </div>

    <div class="footer-bottom">
        &copy; <?php echo date("Y"); ?> AURORA SITE. All rights reserved.
    </div>
</footer>