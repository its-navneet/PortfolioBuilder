<?php

$host = 'mysql-40976-0.cloudclusters.net';
$db   = 'PortfolioBuilder';
$user = 'admin';
$pass = 'I7DUlO18';
$port = "19938";



$link = "mysql:host=$host;dbname=$db;port=$port";

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>
