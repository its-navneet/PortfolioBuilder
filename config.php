<?php

$host = 'mysql-40976-0.cloudclusters.net';
$db   = 'PortfolioBuilder';
$user = 'admin';
$pass = 'your password';
$port = "19938";
$charset = 'utf8mb4_0900_ai_ci';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset;port=$port";
try {
     $pdo = new \PDO($dsn, $user, $pass);
     echo "Connected successfully";
} catch (\PDOException $e) {
     echo "Connection failed: " . $e->getMessage();
}

?>
