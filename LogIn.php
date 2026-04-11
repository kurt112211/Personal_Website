<?php
session_start();
include 'config.php';
// The header already starts the <html> and <body> tags
include 'header.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user['username'];
            header("Location: home.php");
            exit;
        } else { $error = "Invalid password."; }
    } else { $error = "No account found."; }
}
?>

<div class="login-page-bg">
    <div class="page-wrapper">
        <div class="container">
            <h2>Welcome Back</h2>
            <?php if(isset($error)) echo "<p class='error-msg'>$error</p>"; ?>
            
            <form method="POST">
                <label>Email Address</label>
                <input type="email" name="email" required placeholder="example@mail.com">

                <label>Password</label>
                <input type="password" name="password" required placeholder="••••••••">

                <button type="submit" class="auth-btn">Login</button>
                <p class="switch-form">
                    New here? <a href="Registration.php">Create Account</a>
                </p>
            </form>
        </div>

        <div class="animation-box">
            <div class="logo-circle">
                <span class="logo-text">AURORA</span>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

<style>
    /* Force background over the whole page including under header */
    .login-page-bg {
        background: linear-gradient(135deg, #6a11cb 0%, #032c71 100%);
        min-height: 100vh;
        width: 100%;
        margin-top: 0; 
        padding-top: 80px; /* Space for your fixed header */
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .page-wrapper {
        display: flex;
        width: 100%;
        max-width: 1100px;
        justify-content: space-around;
        align-items: center;
        padding: 20px;
    }

    .container {
        background: rgba(255, 255, 255, 0.12);
        backdrop-filter: blur(15px);
        padding: 40px;
        border-radius: 20px;
        box-shadow: 0 15px 35px rgba(0,0,0,0.3);
        width: 100%;
        max-width: 380px;
        color: #fff;
        border: 1px solid rgba(255,255,255,0.1);
    }

    input {
        width: 100%;
        padding: 12px;
        margin-top: 8px;
        border: none;
        border-radius: 8px;
        background: rgba(255,255,255,0.15);
        color: #fff;
        box-sizing: border-box;
    }

    .auth-btn {
        width: 100%;
        margin-top: 25px;
        background: linear-gradient(90deg, #a044ff, #6a11cb);
        color: white;
        padding: 12px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        font-weight: bold;
    }

    .logo-circle {
        width: 300px; height: 300px;
        border-radius: 50%;
        border: 2px solid rgba(255,255,255,0.3);
        display: flex; justify-content: center; align-items: center;
        animation: rotateLogo 10s linear infinite;
        box-shadow: 0 0 30px rgba(106, 17, 203, 0.5);
    }

    @keyframes rotateLogo { from { transform: rotate(0deg); } to { transform: rotate(360deg); } }

    .switch-form { text-align: center; margin-top: 20px; }
    .switch-form a { color: #c77dff; text-decoration: none; font-weight: bold; }
    .error-msg { color: #ff8888; text-align: center; }

    @media (max-width: 868px) {
        .animation-box { display: none; }
    }
</style>