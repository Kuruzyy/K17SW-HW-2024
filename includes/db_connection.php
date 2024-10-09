<?php
try {
    // Correct the path to point to the 'database' directory
    $pdo = new PDO('sqlite:' . __DIR__ . '/../database/database.db');
    // Set error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // If successful, output this message
    echo "Connected to database successfully.";
} catch (PDOException $e) {
    // Catch any errors and display the exception message
    echo "Error while connecting to the database: " . $e->getMessage();
}
