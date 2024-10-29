<?php
$servername = "localhost"; // Имя сервера
$username = "user"; // Имя пользователя базы данных
$password = "1234"; // Пароль
$dbname = "php_MOSKVINA"; // Имя базы данных

// Создание подключения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка подключения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
