<?php
$cfg['ForceSSL'] = false; 
$cfg['SessionSavePath'] = '/tmp';
?>

<?php
/* Database connexion */
define(constant_name: 'DB_SERVER', value: 'localhost');
define(constant_name: 'DB_USERNAME', value: 'root');
define(constant_name: 'DB_PASSWORD', value: 'root');
define(constant_name: 'DB_NAME', value: 'phpcrud');


$link = mysqli_connect(hostname: DB_SERVER, username: DB_USERNAME, password: DB_PASSWORD, database: DB_NAME);


if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>