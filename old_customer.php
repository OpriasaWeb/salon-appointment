<?php
session_start();

require './connect/db_connect.php';



?>

  <!-- Include the header.php -->
  <?php require_once './includes/header.php' ?>

  <!-- Message session -->
  <!-- <?php require_once './message.php' ?> -->

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6 mt-5">
        <p class="fs-3">Appointment booking</p>
        <p class="fs-5">Hello, Jeremy!</p>
        <form action="./code.php" method="POST">

          <!-- Debugging - code later -->
            <!-- Get rid of code.php in the user panel -->
            <!-- Put all of the php code in the index file -->
            <!-- So that the get method should work and get the info from the index to old_customer php file -->
          <!-- Debugging - code later -->
          
          <!-- Get the id of the phone user -->
          <div class="mb-3">

            <!-- ID of customer -->
            <?php

              $phone_get = $_GET['phone_appointment'];

              $query_get = "SELECT customer_id FROM salon_customer WHERE phone = '$phone_get' ";

              $query_run = mysqli_query($conn, $query_get);

              if(mysqli_num_rows($query_run) > 0){
                while($id_customer = mysqli_fetch_array($query_run)){
            ?>
            <!-- ID of customer -->

            <input type="hidden" class="form-control" name="customer_id" value="<?php echo $id_customer['customer_id'] ?>">

            <?php
                }
              }
            ?>

          </div>
          <!-- ------------------------------------------------ -->
          <!-- SERVICES -->
          <div class="mb-3">
            <label for="" class="form-label">Services</label>
            <select class="form-select" name="service" aria-label="Default select example">
            <option selected>Choose service</option>

            <?php
              // SQL query to get all from salon services data
              $services_query = "SELECT * FROM salon_services";

              // Run the query using mysqli_query
              $services_run = mysqli_query($conn, $services_query);

              // If the run query is greated than 1,
              if(mysqli_num_rows($services_run) > 0){
                // while there is data that are fetching, the condition is true
                while($services = mysqli_fetch_array($services_run)){
            ?>
              <option value="<?php echo $services['services_id'] ?>"><?php echo $services['service_name'] ?> - <?php echo $services['price'] ?></option>
            
            <?php
                }
              }
            ?>
            </select>
          </div>
          <!-- SERVICES -->
          <!-- ------------------------------------------------ -->
          <div class="mb-3">
            <label for="" class="form-label">Date of appointment</label>
            <input type="date" class="form-control" name="date_appointment" id="date_input" required>
          </div>
          <div class="mb-3">
            <!-- Opening hours 9:00am and closing time is 6:00pm -->
            <label for="" class="form-label" >Time of appointment (9:00am to 6:00pm)</label>
            <input type="time" min="09:00" max="18:00" value="09:00" class="form-control" name="time_appointment" id="appt-time" required> 
            <span class="validity"></span>
          </div>
          <a href="./index.php" class="btn btn-info">Back</a>
          <button class="btn btn-primary float-end" name="book_appointment" type="submit">Book</button>
        </form>
      </div>
      <div class="col-md-6">
        <div class="image-reg">
          <img src="./images/salon2.png" class="img-fluid " alt="">
        </div>
      </div>
    </div>
  </div>





  <!-- Include the footer.php -->
  <?php require_once './includes/footer.php' ?>