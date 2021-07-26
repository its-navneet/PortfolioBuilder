<?php
$servername = "mysql-40976-0.cloudclusters.net";
$username = "admin";
$password = "I7DUlO18";
$dbname   = "PortfolioBuilder";
$dbServerPort = "19938";

// Create connection
$link = new mysqli($servername, $username, $password, $dbname, $dbServerPort,);

// Check connection
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
