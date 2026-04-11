<?php
session_start();
session_unset();
session_destroy();
header("Location: LogIn.php");
include 'config.php';
exit;
?>
