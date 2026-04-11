<?php
session_start();
include 'config.php';
include 'header.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $email    = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm  = $_POST['confirm'];

    if ($password !== $confirm) {
        $error = "Passwords do not match.";
    } else {
        $check = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $check->bind_param("s", $email);
        $check->execute();
        $result = $check->get_result();

        if ($result->num_rows > 0) {
            $error = "Email already registered.";
        } else {
            $hash = password_hash($password, PASSWORD_BCRYPT);
            $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $username, $email, $hash);

            if ($stmt->execute()) {
                $_SESSION['success'] = "Registration successful! Please login.";
                header("Location: Login.php");
                exit;
            } else {
                $error = "Something went wrong.";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register | User System</title>
  <link rel="stylesheet" href="RegLogBG.css">
</head>
<body>
<div class="container">
  <h2>Create Account</h2>
  <?php if(isset($error)) echo "<p class='error'>$error</p>"; ?>
  <form method="POST">
    <label>Username</label>
    <input type="text" name="username" required>

    <label>Email</label>
    <input type="email" name="email" required>

    <label>Password</label>
    <input type="password" name="password" required>

    <label>Confirm Password</label>
    <input type="password" name="confirm" required>

    <button type="submit">Register</button>
    <p>Already have an account? <a href="Login.php">Login</a></p>


  </form>
</div>

<div class="animation-box">
  <div class="logo-circle">
    <span class="logo-text">MyLogo</span>
  </div>
</div>



<style>
    /* ===== Right-Side Animation Box ===== */
.animation-box {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  max-width: 400px; /* same width as .container */
  height: 400px;    /* same height as registration box */
  margin-left: 340px;
  position: relative;
}

/* ===== Animated Logo Circle ===== */
.logo-circle {
  width: 320px;
  height: 320px;
  border-radius: 50%;
  background: radial-gradient(circle at center, rgba(255,255,255,0.3), rgba(255,255,255,0.05));
  border: 3px solid rgba(255,255,255,0.4);
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;
  overflow: hidden;
  animation: glowRotate 6s linear infinite;
  box-shadow: 0 0 25px rgba(162, 93, 255, 0.6);
}

/* ===== Logo Text ===== */
.logo-text {
  font-size: 2rem;
  font-weight: bold;
  color: #fff;
  text-shadow: 0 0 10px #c77dff, 0 0 20px #9d4edd;
  animation: pulseText 3s ease-in-out infinite;
}

/* ===== Animations ===== */
@keyframes glowRotate {
  0% { box-shadow: 0 0 20px #6a11cb, inset 0 0 15px #2575fc; transform: rotate(0deg); }
  50% { box-shadow: 0 0 35px #a044ff, inset 0 0 25px #6a11cb; transform: rotate(180deg); }
  100% { box-shadow: 0 0 20px #6a11cb, inset 0 0 15px #2575fc; transform: rotate(360deg); }
}

@keyframes pulseText {
  0%, 100% { text-shadow: 0 0 10px #c77dff, 0 0 20px #9d4edd; opacity: 1; }
  50% { text-shadow: 0 0 25px #b5179e, 0 0 40px #7209b7; opacity: 0.8; }
}

/* ===== Responsive for Small Screens ===== */
@media (max-width: 868px) {
  .wrapper {
    flex-direction: column;
    align-items: center;
  }

  .animation-box {
    margin-left: 0;
    margin-top: 40px;
  }
  .logo-circle {
  width: 320px;
  height: 320px;
  border-radius: 50%;
  background: radial-gradient(circle at center, rgba(255,255,255,0.3), rgba(255,255,255,0.05));
  border: 3px solid rgba(255,255,255,0.4);
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;
  left:50px;
  top:;
  overflow: hidden;
  animation: glowRotate 6s linear infinite;
  box-shadow: 0 0 25px rgba(162, 93, 255, 0.6);
}
}

</style>


</body>
</html>
