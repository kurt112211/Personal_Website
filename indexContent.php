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
  <title>Promotional Content</title>

  <!-- Reuse background and theme from index.css -->
  <link rel="stylesheet" href="index.css">

  <style>
    /* ===== PAGE CONTAINER ===== */
    body {
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
      color: white;
    }

    .content-section {
      width: 90%;
      margin: 100px auto;
      text-align: center;
    }

    .content-section h1 {
      font-size: 2.5rem;
      margin-bottom: 30px;
      text-shadow: 0 2px 10px rgba(0,0,0,0.4);
    }

    /* ===== FLEXBOX IMAGE ROW ===== */
    .image-row {
      display: flex;
      justify-content: center; /* align items in the center */
      align-items: flex-start;
      gap: 40px;
      flex-wrap: wrap; /* wrap on smaller screens */
      margin-top: 40px;
    }

    .indeximg2 {
      background: rgba(0,0,0,0.3);
      border-radius: 15px;
      padding: 15px;
      width: 250px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .indeximg2:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.5);
    }

    .indeximg2 img {
      width: 100%;
      height: auto;
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.4);
    }

    .indeximg2 p {
      margin-top: 10px;
      font-size: 0.95rem;
      color: #f5f5f5;
    }

    /* ===== RESPONSIVE DESIGN ===== */
    @media (max-width: 768px) {
      .indeximg2 {
        width: 200px;
      }
      .content-section h1 {
        font-size: 2rem;
      }
    }
  </style>
</head>

<body>

  <div class="content-section">
    <h1>🔥 Promotional Offers 🔥</h1>

    <div class="image-row">
      <div class="indeximg2">
        <img src="images/download (9).jpg" alt="Promo 1">
        <p>Special Offer: Limited Time Sale!</p>
      </div>

      <div class="indeximg2">
        <img src="images/download (9).jpg" alt="Promo 2">
        <p>Exclusive Deal: Buy 1 Get 1 Free!</p>
      </div>

      <div class="indeximg2">
        <img src="images/download (9).jpg" alt="Promo 3">
        <p>Hot Discounts: Up to 50% Off!</p>
      </div>
    </div>
  </div>

</body>
</html>
