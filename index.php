<?php
    $dsn = 'mysql:host=db;dbname=car_service;charset=utf8';
    $user = 'root';
    $password = 'secret';

    try {
        $pdo = new PDO($dsn, $user, $password);
        echo "Successful connection!";
    } catch (PDOException $e) {
        echo "Connection error: " . $e->getMessage();
    }
?>
