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

// Book an appointment
if(isset($_POST['book_appointment'])){

  $customer_id = mysqli_real_escape_string($conn, $_POST['customer_id']);
  $service = mysqli_real_escape_string($conn, $_POST['service']);
  $date_appointment = mysqli_real_escape_string($conn, $_POST['date_appointment']);
  $time_appointment = mysqli_real_escape_string($conn, $_POST['time_appointment']);

  $appointment_query = "INSERT INTO salon_appointments (customer_id, services_id, service_date, service_time) 
                        VALUES ('$customer_id', '$service', '$date_appointment', '$time_appointment')";
  
  $appointment_run = mysqli_query($conn, $appointment_query);

  if($appointment_run){
    $_SESSION['message'] = "Successfully book your appointment.";
    header("Location: index.php");
    exit(0);
  }else{
    $_SESSION['message'] = "Failed to book. Please, try again.";
    header("Location: old_customer.php");
    exit(0);
  }



}
// Book an appointment



// Code - input from user

?>