<?php
//$servername = "localhost";
//$username = "username";
//$password = "password";
//$con=mysqli_connect("localhost","root","", "alyousuf");
$servername = "localhost";
$username = "agesd230_ads";
$password = "?v2mX%J#ZP1g";
$dbname = "agesd230_khaled";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>