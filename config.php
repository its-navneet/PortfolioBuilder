<?php
/*
This file contains database configuration assuming you are running mysql using user "root" and password ""
*/

define('DB_SERVER', 'mysql-40953-0.cloudclusters.net');
define('DB_USERNAME', 'admin');
define('DB_PASSWORD', 'WObNJwOT');
define('DB_NAME', 'PortfolioBuilder');

// Try connecting to the Database
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
