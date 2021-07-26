<?php

$host = 'mysql-40976-0.cloudclusters.net';
$db   = 'PortfolioBuilder';
$user = 'admin';
$pass = 'I7DUlO18';
$port = "19938";



$link = "mysql:host=$host;dbname=$db;port=$port";
try {
     $pdo = new \PDO($dsn, $user, $pass);
     echo "Connected successfully";
} catch (\PDOException $e) {
     echo "Connection failed: " . $e->getMessage();
}

?>
