<?php

// Database connection
$conn = mysqli_connect("localhost", "root", "", "salon_appointment");

// If the connection to database failed, print the error
if(!$conn){
  die("Connection failed." . mysqli_connect_errno());
}

?>