<?php
session_start();

require '../connect/db_connect.php';

?>

<!-- Include header -->
<?php
  include './includes/header.php';
?>
<!-- Include header -->

<!-- Include navigation -->
<?php
  include './includes/nav.php';
?>
<!-- Include navigation -->


<!-- Data tables -->
<div class="container mt-5">
  <div class="card">
    <div class="card-header">
      <p class="fs-3">History of customer</p>
      <a href="./customers.php" class="btn btn-info">Back</a>
    </div>
    <div class="card-body">

      <!-- Message alert -->
      <?php
        include './message.php';
      ?>
      <!-- Message alert -->

      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>No. #</th>
            <th>Fullname</th>
            <th>Phone no#</th>
            <th>Service</th>
            <th>Date</th>
            <th>Time</th>
          </tr>
        </thead>
        <tbody>

          <!-- SQL query to get the data from the database -->
          <?php

            // GET variable customer id
            $customer_id = $_GET['customer_id_history'];

            // Perform a mysql query
            $appointment_query = "SELECT sc.customer_id, sa.appointments_id, sc.fullname, sc.phone, ss.service_name, sa.service_date, sa.service_time FROM salon_customer sc JOIN salon_appointments sa ON sc.customer_id = sa.customer_id LEFT JOIN salon_services ss ON ss.services_id = sa.services_id WHERE sc.customer_id = '$customer_id' ";

            // Connect the performed query to the db connection thru mysqli_query
            $query_appointment_run = mysqli_query($conn, $appointment_query);

            // If the rows of the running query is gt 0 
            if(mysqli_num_rows($query_appointment_run) > 0){
              // then loop thru to each data in that table
              foreach($query_appointment_run as $i => $appointment){
          ?>
          <tr>
            <td scope="row"><?php echo $i + 1 ?></td>
            <td><?= $appointment['fullname'] ?></td>
            <td class="text-center"><?= $appointment['phone'] ?></td>
            <td class="text-center"><?= $appointment['service_name'] ?></td>
            <td class="text-center">
              <?php
                $dateFormat = DateTime::createFromFormat('Y-m-d', $appointment['service_date']);
                $formattedDate = $dateFormat->format('F j, Y');
              ?>
              <?php echo $formattedDate ?>
            </td>
            <td class="text-center">
              <?php
                if($appointment['service_time'] < 12){
                  echo $appointment['service_time'] . ' AM';
                } elseif($appointment['service_time'] >= 12){
                  echo $appointment['service_time'] . ' PM';
                }
              ?>
            </td>
          </tr>

          <?php
              }
            } else{
              echo "<h5>No record found.</h5>";
            }
          ?>

        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- Data tables -->


<!-- Include footer -->
<?php
  include './includes/footer.php';
?>
<!-- Include footer -->