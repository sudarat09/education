<?php

// server
// $servername = "us-cdbr-east-05.cleardb.net";
// $username = "b75b79dccf2c1c";
// $password = "cc746e84";
// $database="heroku_67a8f7daac85d18";

// local
$servername = "localhost";
$username = "root";
$password = "12345678";
$database="table_file";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);
// Change character set to utf8
mysqli_set_charset($conn,"utf8");
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
} 
?>