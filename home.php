<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: Login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Home | User System</title>
  <link rel="stylesheet" href="index.css">
</head>
<body>
  <Br>
</Br>
<div class="container">
  <h2>Welcome, <?php echo htmlspecialchars($_SESSION['user']); ?>!</h2>
  <p>You are successfully logged in.</p>
  <a href="logout.php" class="logout">Logout</a>
</div>
</body>
</html>
