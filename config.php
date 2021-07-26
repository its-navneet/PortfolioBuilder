<?php
$dbservername = "mysql-40976-0.cloudclusters.net";
$dbusername = "admin";
$dbpassword = "I7DUlO18";
$dbname   = "PortfolioBuilder";
$dbServerPort = "19938";

// Create connection
$link = new mysqli($dbservername, $dbusername, $dbpassword, $dbname, $dbServerPort,);

// Check connection
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
