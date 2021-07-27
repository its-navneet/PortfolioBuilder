<?php
$host = "181.215.242.82";
$username = "admin";
$pass = "I7DUlO18";
$link = mysqli_connect($host, $username, $pass, "PortfolioBuilder");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


?>
