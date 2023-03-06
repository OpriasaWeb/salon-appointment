<?php

$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'salon_appointment';

$dsn = 'mysql:host='. $host .';dbname='. $dbname;

// Create PDO instance
$pdo = new PDO($dsn, $user, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


// mysqli instance
$db = mysqli_connect($host,$user,$password,$dbname);
?>