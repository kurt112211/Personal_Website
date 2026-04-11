<?php
session_start();
include 'config.php';
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aurora | Home</title>
    <style>
        /* === BASE STYLES === */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%) !important;
            color: white;
            overflow-x: hidden;
            height: auto !important;
        }

        .content-wrapper {
            position: relative;
            z-index: 1;
            padding-top: 80px; /* Offset for fixed header */
        }

        /* === SLIDER === */
        .slider {
            position: relative;
            width: 90%;
            height: 60vh;
            margin: 0 auto;
            overflow: hidden;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
            background: rgba(0,0,0,0.2);
        }

        .slides {
            display: flex;
            width: 100%;
            height: 100%;
            transition: transform 0.4s ease-in-out;
        }

        .slide { min-width: 100%; height: 100%; }
        .slide img { width: 100%; height: 100%; object-fit: cover; }

        /* === SLIDER ARROWS === */
        .arrow {
            position: absolute;
            top: 35%; /* Centered relative to slider height */
            transform: translateY(-50%);
            font-size: 2.5rem;
            color: white;
            background: rgba(0,0,0,0.3);
            border: none;
            cursor: pointer;
            padding: 15px;
            border-radius: 50%;
            z-index: 100;
            transition: 0.3s;
        }
        .arrow:hover { background: rgba(160, 68, 255, 0.8); }
        .arrow.left { left: 2%; }
        .arrow.right { right: 2%; }

        .dots-container { text-align: center; margin: 15px 0; }
        .dot {
            height: 10px; width: 10px; margin: 0 5px;
            background-color: rgba(255, 255, 255, 0.3);
            border-radius: 50%; display: inline-block; cursor: pointer;
        }
        .dot.active { background-color: #fff; transform: scale(1.3); }

        /* === MAIN CONTENT AREA === */
        .scrollable-content {
            width: 90%;
            max-width: 1200px;
            margin: 40px auto;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 40px;
            border-radius: 20px;
            position: relative;
            border: 1px solid rgba(255,255,255,0.1);
        }

        .indeximg {
            float: right;
            width: 35%;
            margin-left: 30px;
            background: rgba(255, 255, 255, 0.1);
            padding: 15px;
            border-radius: 15px;
            text-align: center;
        }
        .indeximg img { width: 100%; border-radius: 10px; }

        .content1 {
            width: 55%;
            margin-bottom: 20px;
            background: rgba(255, 255, 255, 0.05);
            padding: 20px;
            border-radius: 12px;
        }

        /* === PROMO ROW (Bottom) === */
        .promo-section { text-align: center; padding: 60px 5%; }
        .image-row {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
            margin-top: 30px;
        }
        .indeximg2 {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            padding: 20px;
            width: 300px;
            transition: 0.3s;
        }
        .indeximg2:hover { transform: translateY(-10px); background: rgba(255, 255, 255, 0.2); }
        .indeximg2 img { width: 100%; border-radius: 10px; }

        /* === RESPONSIVE === */
        @media (max-width: 868px) {
            .indeximg { float: none; width: 100%; margin: 0 0 20px 0; }
            .content1 { width: 100%; }
            .slider { height: 40vh; }
            .arrow { top: 30%; }
        }
    </style>
</head>
<body>

<div class="content-wrapper">
    <div class="slider">
        <div class="slides">
            <div class="slide"><img src="images/download (17).jpg" alt="Slide 1"></div>
            <div class="slide"><img src="images/download (15).jpg" alt="Slide 2"></div>
            <div class="slide"><img src="images/download (18).jpg" alt="Slide 3"></div>
        </div>
    </div>
    
    <div class="dots-container" id="dots"></div>

    <button class="arrow left" onclick="moveSlide(-1)">&#10094;</button>
    <button class="arrow right" onclick="moveSlide(1)">&#10095;</button>

    <div class="scrollable-content">
        <div class="indeximg">
            <img src="images/download (9).jpg" alt="Promo">
            <p><strong>Limited Time Sale!</strong></p>
        </div>
        
        <h2>Explore Aurora Services</h2>
        <p>Welcome to the digital frontier. Our platform provides high-performance solutions for modern businesses.</p>

        <div class="content1">
            <h3>Custom Development</h3>
            <p>We build tailored applications that scale with your growth and handle high-traffic demands.</p>
        </div>

        <div class="content1">
            <h3>Cloud Infrastructure</h3>
            <p>Reliable, secure, and lightning-fast hosting designed for the next generation of web apps.</p>
        </div>
        <div style="clear:both;"></div>
    </div>

    <section class="promo-section">
        <h1>🔥 Promotional Offers 🔥</h1>
        <div class="image-row">
            <div class="indeximg2">
                <img src="images/download (9).jpg" alt="Offer 1">
                <p>Buy 1 Get 1 Free on Licenses</p>
            </div>
            <div class="indeximg2">
                <img src="images/download (9).jpg" alt="Offer 2">
                <p>50% Off Annual Plans</p>
            </div>
            <div class="indeximg2">
                <img src="images/download (9).jpg" alt="Offer 3">
                <p>Free Consultation Session</p>
            </div>
        </div>
    </section>
</div>

<script>
    const slidesContainer = document.querySelector('.slides');
    const slides = document.querySelectorAll('.slide');
    const dotsContainer = document.getElementById('dots');
    let currentIndex = 0;

    // Create dots
    slides.forEach((_, i) => {
        const dot = document.createElement('span');
        dot.classList.add('dot');
        dot.onclick = () => goToSlide(i);
        dotsContainer.appendChild(dot);
    });

    function updateUI() {
        slidesContainer.style.transform = `translateX(-${currentIndex * 100}%)`;
        const dots = document.querySelectorAll('.dot');
        dots.forEach((d, i) => d.classList.toggle('active', i === currentIndex));
    }

    function moveSlide(step) {
        currentIndex = (currentIndex + step + slides.length) % slides.length;
        updateUI();
    }

    function goToSlide(index) {
        currentIndex = index;
        updateUI();
    }

    updateUI();
    setInterval(() => moveSlide(1), 5000); // Auto-slide
</script>

<?php include('footer.php'); ?>
</body>
</html>