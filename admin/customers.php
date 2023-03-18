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
      <p class="fs-3">Customer registered in salon</p>
      <a href="./dashboard.php" class="btn btn-info">Back</a>
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
            <th>Email</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

          <!-- SQL query to get the data from the database -->
          <?php
            // Perform a mysql query
            $query_select = "SELECT * FROM salon_customer";

            // Connect the performed query to the db connection thru mysqli_query
            $query_select_run = mysqli_query($conn, $query_select);

            // If the rows of the running query is gt 0 
            if(mysqli_num_rows($query_select_run) > 0){
              // then loop thru to each data in that table
              foreach($query_select_run as $i => $customer){
              
          ?>

          <tr>
            <td scope="row"><?php echo $i + 1 ?></td>
            <td><?= $customer['fullname'] ?></td>
            <td class="text-center"><?= $customer['phone'] ?></td>
            <td class="text-center"><?= $customer['email'] ?></td>
            <td class="text-center">
              <a href="./customer_history.php?customer_id_history=<?php echo $customer['customer_id']; ?>" class="btn btn-sm btn-info">View</a>
              <a href="./update_customer.php?customer_id=<?php echo $customer['customer_id']; ?>" class="btn btn-sm btn-primary">Update</a>
              <form action="./code.php" method="POST" class="d-inline">
                <button type="submit" name="delete_customer" value="<?= $customer['customer_id']; ?>" class="btn btn-sm btn-danger">Delete</button>
              </form>
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