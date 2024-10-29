<?php
session_start();
include 'db.php'; // Подключение к базе данных

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $bg_color = $_POST['bg_color'];
    $font_color = $_POST['font_color'];

    // Сохранение данных в базе данных
    $sql = "INSERT INTO users (username, password, bg_color, font_color) VALUES ('$username', '$password', '$bg_color', '$font_color')";
    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<form method="post">
    Username: <input type="text" name="username" required><br>
    Password: <input type="password" name="password" required><br>
    Background Color: <input type="text" name="bg_color" required><br>
    Font Color: <input type="text" name="font_color" required><br>
    <input type="submit" value="Register">
</form>
