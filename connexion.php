<?php
$servername = "db";
$username = "myphp";
$password = "mypassword";
$database ="futgestion";
$conn = mysqli_connect($servername, $username, $password,$database);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//  echo "Connected successfully";


?>