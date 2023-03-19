<?php
session_start();

require_once "../connect/db_connect.php";

echo "Dashboard";

?>

  <!-- Header includes -->
  <?php
    include 'includes/header.php';
  ?>

  <!-- Navigation includes -->
  <?php
    include 'includes/nav.php';
  ?>





  <!-- <div class="alert alert-warning alert-dismissible fade show mt-5" role="alert">
      <strong>You are most welcome,</strong> <?= $_SESSION['message']; ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div> -->

  <div class="container mt-5">

    <!-- Exact time -->
    <?php
      echo "<br>";
      date_default_timezone_set('Asia/Manila');
      echo "<span style='color:green;font-weight:bold;'>Date: </span>". date('F j, Y g:i:a');
      echo "<br>";
      echo "<br>";
    ?>
    <!-- Exact time -->
    <div class="row">
      <div class="col-md-6">
        <div class="card p-3">
          <p class="fs-5">Registered customers</p>

          <?php
            // Query to the count the number of registered customer using aggregate function - COUNT
            // And named it as count so that the return has its own name column
            $query_customer = "SELECT COUNT(sc.customer_id) as count FROM salon_customer sc";

            // Run the query and store the result
            $customer_query_run = mysqli_query($conn, $query_customer);

            // Retrieve the count from the result set
            $row = mysqli_fetch_assoc($customer_query_run);
            $count = $row['count'];
          ?>

          <p class="fs-3 m-auto text-bold"><?= $count ?></p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card p-3">
          <p class="fs-5">Appointment today</p>

          <?php
            // Query to the count the number of registered customer using aggregate function - COUNT
            // And named it as appointment so that the return has its own name column
            $appointment_today = "SELECT COUNT(sa.appointments_id) as appointment 
                                  FROM salon_appointments sa
                                  WHERE service_date = CURRENT_DATE() AND TIME(service_out) = '' ";

            // Run the query and store the result
            $appointment_query_run = mysqli_query($conn, $appointment_today);

            // Retrieve the count from the result set
            $row = mysqli_fetch_assoc($appointment_query_run);
            $appointment = $row['appointment'];
          ?>

          <p class="fs-3 m-auto text-bold"><?= $appointment ?></p>
          <?php
            mysqli_free_result($appointment_query_run);
          ?>
        </div>
      </div>
      
    </div>
  </div>

  <?php
    echo "<br>";
  ?>

  <!-- Income today and this month and tips -->
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-4">
        <div class="card p-2">
          <p class="fs-5">Income this day</p>

          <?php
            // Query to the count the number of registered customer using aggregate function - COUNT
            // And named it as total so that the return has its own name column
            $total_today = "SELECT sa.services_id, ss.services_id, SUM(ss.price) as total
                                FROM salon_appointments sa 
                                JOIN salon_services ss ON sa.services_id = ss.services_id 
                                WHERE sa.service_date = CURRENT_DATE();";

            // Run the query and store the result
            $total_today_income = mysqli_query($conn, $total_today);

            // Retrieve the count from the result set
            $row = mysqli_fetch_assoc($total_today_income);
            $income_today = $row['total'];
          ?>
          <!-- Print the total to HTML -->
          <p class="fs-3 m-auto"><?= $income_today ?> pesos</p>
        </div>
      </div>

      <!-- Admin image -->
      <div class="col-md-4 m-auto">
        <img src="../images/admin_salon.png" class="img-fluid" alt="">
      </div>
      <!-- Admin image -->

      <div class="col-md-4">
        <div class="card p-2">
          <p class="fs-5">Income this month</p>

          <?php
            // Query to the count the number of registered customer using aggregate function - COUNT
            // And named it as total so that the return has its own name column
            $total_today = "SELECT sa.services_id, ss.services_id, SUM(ss.price) as total
                                FROM salon_appointments sa 
                                JOIN salon_services ss ON sa.services_id = ss.services_id 
                                WHERE MONTH(sa.service_date) = MONTH(CURRENT_DATE()) AND YEAR(sa.service_date) = YEAR(CURRENT_DATE())";

            // Run the query and store the result
            $total_today_income = mysqli_query($conn, $total_today);

            // Retrieve the count from the result set
            $row = mysqli_fetch_assoc($total_today_income);
            $income_today = $row['total'];
          ?>

          <p class="fs-3 m-auto"><?= $income_today ?> pesos</p>
        </div>
      </div>

    </div>
  </div>
  <!-- Income today and this month and tips -->


  <!-- Prevent the going back after logout -->
  <script type="text/javascript">
    function preventBack(){
        window.history.forward()
    };
    setTimeout("preventBack()", 0);
    window.onunload=function(){
        null;
    }
  </script>
  <!-- Prevent the going back after logout -->


  <!-- Footer includes -->
  <?php
    include 'includes/footer.php';
  ?>


</body>
</html>