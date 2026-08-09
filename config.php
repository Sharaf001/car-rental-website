<?php
$host = getenv('DB_HOST') ?: 'localhost';
$user = getenv('DB_USER') ?: 'root';
$pass = getenv('DB_PASS') ?: '';
$db   = getenv('DB_NAME') ?: 'car_rental';

$pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
?>
