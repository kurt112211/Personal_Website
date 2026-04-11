<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>David's Aviation Logo Animation</title>

  <style>
    /* --- BODY --- */
    body {
      margin: 0;
      padding: 0;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: transparent; /* no color behind */
    }

    /* --- LOGO --- */
    .aviation-logo {
      display: block;
      width: 55px;      /* adjust to your desired size */
      height: 55px;
      border-radius: 50%; /* makes it circular */
      object-fit: cover;  /* crop to fit inside circle */
      background: none;   /* remove any background */
      padding: 0;
      margin: 0;
      border: none;
      animation: fadeInRotate 2s ease-out forwards;
      opacity: 0;
      transition: transform 0.3s ease-in-out, filter 0.3s ease-in-out;
      position:static;
    }

    /* Hover effect */
    .aviation-logo:hover {
      transform: scale(1.05);
      filter: drop-shadow(0 10px 15px rgba(0, 50, 100, 0.3));
    }

    /* Entry animation */
    @keyframes fadeInRotate {
      0% {
        opacity: 0;
        transform: scale(0.9) rotate(5deg);
      }
      100% {
        opacity: 1;
        transform: scale(1) rotate(0deg);
      }
    }
  </style>
</head>

<body>
 <div class="logo-group">
    <img src="images/download (A1).jpg" alt="David's Aviation Company Logo" class="aviation-logo" />

    <a href="index.php" class="logo-section">
        AURORA SITE
    </a>
</div>
</body>
</html>
