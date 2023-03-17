<?php

// Code - input from user

session_start();
require_once "./connect/db_connect.php";

// Register new customer account
if(isset($_POST['register_acc'])){

  $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
  $email_address = mysqli_real_escape_string($conn, $_POST['email_address']);
  $phone_number = mysqli_real_escape_string($conn, $_POST['phone_number']);

  $query_reg = "INSERT INTO salon_customer (fullname, phone, email)
                VALUES ('$fullname', '$phone_number', '$email_address')";

  $register_run = mysqli_query($conn, $query_reg);

  if($register_run){
    $_SESSION['message'] = "Successfully registered your account";
    header("Location: index.php");
    exit(0);
  }else{
    $_SESSION['message'] = "Failed to register. Please, try again.";
    header("Location: new_customer.php");
    exit(0);
  }
}
// Register new customer account



// Code - input from user

?>