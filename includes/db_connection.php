<?php
$host = 'localhost'; // or the IP address of your database server
$dbname = 'happy_u_competition'; // The database you created
$username = 'your_username'; // e.g., 'root'
$password = 'your_password'; // e.g., '' or 'root'

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
