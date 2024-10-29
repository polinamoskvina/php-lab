<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Получение настроек из cookies
$bg_color = isset($_COOKIE['bg_color']) ? $_COOKIE['bg_color'] : 'white';
$font_color = isset($_COOKIE['font_color']) ? $_COOKIE['font_color'] : 'black';
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-color: <?php echo $bg_color; ?>;
            color: <?php echo $font_color; ?>;
        }
    </style>
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['username']; ?></h1>
    <a href="logout.php">Logout</a>
</body>
</html>
