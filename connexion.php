<?php
$servername = "localhost";
$username = "myuser";
$password = "mypassword";
$database ="futgestion";
try{
$connexion = mysqli_connect(hostname: $servername, username: $username, password: $password, database: $database);
}
catch(Exception $e){
    
}
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
  echo "Connected successfully";
?>