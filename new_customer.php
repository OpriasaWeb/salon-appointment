<?php
session_start();

require './connect/db_connect.php';



?>

  <!-- Include the header.php -->
  <?php require_once './includes/header.php' ?>

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6 mt-5">
        <div class="image-reg">
          <p class="fs-3">Register your account:</p>
          <form action="./code.php" method="POST">
            <div class="mb-3">
              <label for="" class="form-label">Fullname</label>
              <input type="text" class="form-control" name="fullname" id="">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Email address</label>
              <input type="email" class="form-control" name="email_address" id="">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Phone no. #</label>
              <input type="phone" class="form-control" name="phone_number" id="">
            </div>
            <a href="./index.php" class="btn btn-info">Back</a>
            <button class="btn btn-success float-end" name="register_acc" type="submit">Register</button>
          </form>
          
        </div>
      </div>
      <div class="col-md-6">
        <img src="./images/register.png" class="img-fluid " alt="">
      </div>
    </div>
  </div>






  <!-- Include the footer.php -->
  <?php require_once './includes/footer.php' ?>