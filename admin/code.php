<?php
session_start();
require_once "../connect/db_connect.php";

// Admin login
if(isset($_POST['admin_login'])){

  $email_admin = mysqli_real_escape_string($conn, $_POST['admin_email']);
  $pass_admin = mysqli_real_escape_string($conn, $_POST['admin_password']);
  
  $query = "SELECT * FROM salon_admin WHERE email = '$email_admin' AND password = '$pass_admin' ";

  $result_query = mysqli_query($conn, $query);

  if(mysqli_num_rows($result_query) == 1){
    $_SESSION['message'] = $_POST['admin_email'];
    header("Location: dashboard.php");
  } else{
    $_SESSION['message'] = "Please re-enter your gmail and password.";
    header("Location: index.php");
    exit(0);
  }

  // if($query_run){
  //   $_SESSION['message'] = "Hello!";
  //   header("Location: dashboard.php");
  //   exit(0);
  // } else{
  //     $_SESSION['message'] = "Please re-enter your gmail and password.";
  //     header("Location: dashboard.php");
  //     exit(0);
  // }
}

// Admin logout
if(isset($_POST['logout_admin'])){
  session_destroy();
  header("Location: index.php");
}



?>