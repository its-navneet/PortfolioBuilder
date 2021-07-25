<?php
/*
This file contains database configuration assuming you are running mysql using user "root" and password ""
*/

define('DB_SERVER', 'ql300.epizy.com');
define('DB_USERNAME', 'epiz_29185437');
define('DB_PASSWORD', '6J6kLN3YRMCzcFE');
define('DB_NAME', 'epiz_29185437_spectrumproject');

// Try connecting to the Database
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
