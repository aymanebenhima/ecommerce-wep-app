<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$host = "localhost";
$username = "root";
$password = "admin";
$dbname = "ecommerce-web-app";
$connect = mysqli_connect($host, $username, $password, $dbname);
 
// Check connection
if(!$connect){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Print host information
// echo "Connect Successfully. Host info: " . mysqli_get_host_info($connect);
?>