<!--
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Header Menu</title>
  <style>
    /* ===== HEADER STYLES ===== */
    header {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(15px);
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 60px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.2);
      z-index: 10;
      transition: background 0.4s ease, box-shadow 0.4s ease;
    }

    header:hover {
      background: rgba(255, 255, 255, 0.2);
      box-shadow: 0 4px 20px rgba(0,0,0,0.3);
    }

    /* ===== LOGO ===== */
    .logo {
      font-size: 1.5rem;
      font-weight: bold;
      color: #fff;
      letter-spacing: 1px;
      transition: color 0.3s ease;
    }

    .logo:hover {
      color: #ffdaff;
    }

    /* ===== NAVIGATION ===== */
    nav ul {
      list-style: none;
      display: flex;
      gap: 30px;
      margin: 0;
      padding: 0;
    }

    nav ul li a {
      text-decoration: none;
      color: #fff;
      font-weight: 500;
      letter-spacing: 0.5px;
      position: relative;
      transition: color 0.3s ease;
    }

    /* Hover underline animation */
    nav ul li a::after {
      content: '';
      position: absolute;
      left: 0;
      bottom: -5px;
      width: 0;
      height: 2px;
      background: linear-gradient(90deg, #a044ff, #6a11cb);
      transition: width 0.3s ease;
    }

    nav ul li a:hover::after {
      width: 100%;
    }

    nav ul li a:hover {
      color: #c8a2ff;
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 500px) {
      header {
        flex-direction: column;
        padding: 15px 20px;
      }

      nav ul {
        flex-direction: column;
        gap: 10px;
        align-items: center;
      }
    }
    .Main{
        color:rgba(0,0,0,0.4);
        text-decoration:none;
        left:300px;
        font-size:30px;
    }
  </style>
</head>
<body>
  <header>
    <div class="logo"><a class="Main" href ="Registration.php">Main</a> </div>
    <nav>
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="products.php">Products</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </nav>
  </header>
</body>
</html>
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>David's Aviation Header</title>

    <style>
        /* ========================================= */
        /* === GLOBAL RESET AND HEADER SETUP ==== */
        /* ========================================= */

body {
    margin: 0;
    padding: 0;
    min-height: 100vh; /* Changed from height to min-height */
}

        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background: #4a0f8c; /* Deep purple */
            border-bottom: 3px solid;
            border-image: linear-gradient(90deg, #6a11cb, #2575fc) 1;
            
            /* KEY FIX: Set items next to each other, pushed to the sides */
            display: flex;
            justify-content: space-between; 
            align-items: center;
            
            /* Reduced padding to minimize space */
            padding: 10px 2%; 
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.5);
            z-index: 100;
            height: 60px;
        }

        /* ========================================= */
        /* === LOGO (from logo.php) ==== */
        /* ========================================= */

        .logo-group {
             /* Ensures the image and text are aligned and flush against the header edge */
            display: flex;
            align-items: center;
            margin: 0;
            padding: 0;
        }

        .aviation-logo {
            display: block;
            width: 50px; 
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            /* KEY FIX: Zero margin/padding */
            padding: 0;
            margin: 0; 
            border: none;
            
            /* Animations */
            animation: fadeInRotate 2s ease-out forwards;
            opacity: 0;
            transition: transform 0.3s ease-in-out, filter 0.3s ease-in-out;
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

        .logo-section {
            color: #ffffff; 
            font-size: 1.5rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 3px;
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.7); 
            text-decoration: none; 
            transition: color 0.3s ease, text-shadow 0.3s ease;
            margin-left: 10px; 
        }

        /* ========================================= */
        /* === NAVIGATION (UL/LI) ==== */
        /* ========================================= */

        nav ul {
            list-style: none;
            display: flex;
            gap: 25px;
            
            /* KEY FIX: REMOVED ALL MARGIN/PADDING */
            margin: 0; 
            margin-right:90px;
            padding: 0;
        }

        nav ul li a {
            text-decoration: none;
            color: #fff;
            font-weight: 500;
            padding: 5px 0;
            position: relative;
            transition: color 0.3s ease;
        }

        /* Gradient Underline Effect */
        nav ul li a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 3px;
            background: linear-gradient(90deg, #2575fc, #6a11cb);
            border-radius: 2px;
            transition: width 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
        }

        nav ul li a:hover::after,
        nav ul li a.active::after {
            width: 100%;
        }

        nav ul li a:hover {
            color: #d0d0ff;
        }

        /* ========================================= */
        /* ===== RESPONSIVE (Stack and Center) ===== */
        /* ========================================= */

        @media (max-width: 568px) {
            header {
                flex-direction: column; 
                padding: 10px 20px 15px 20px;
                height: auto;
            }
            nav ul {
                justify-content: center;
                gap: 15px;
                margin-top: 10px; 
            }
        }
    </style>
</head>
<body>
    <header>
  


  <style>
    /* --- BODY --- */
   
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
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About</a></li> 
                <li><a href="products.php">Products</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="Registration.php">Sign Up</a></li>
            </ul>
        </nav>
    </header>
    
</body>
</html>


