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

  

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-12 mt-5">
        <a href="./customers.php" class="btn btn-secondary">Back</a>
        <p class="fs-3 text-center">Update the customer account</p>
      </div>
      <div class="card">
        <div class="card-body">

          <!-- Update mysqli code -->
          <?php
            if(isset($_GET['customer_id'])){

              $customer_id = mysqli_real_escape_string($conn, $_GET['customer_id']);
              
              // Update query sql
              $update_query = "SELECT * FROM salon_customer WHERE customer_id = '$customer_id' ";

              // Run the query update sql
              $update_run = mysqli_query($conn, $update_query);

              if(mysqli_num_rows($update_run) > 0){
                
                $customer = mysqli_fetch_array($update_run);
                // print_r($service);

          ?>
          <!-- Update mysqli code -->

          <form action="./code.php" method="POST">
            <input type="hidden" name="customer_id" value="<?= $customer['customer_id'] ?>" class="form-control">
            <div class="mb-3">
              <label for="">Fullname</label>
              <input type="text" name="c_fullname" value="<?= $customer['fullname'] ?>" class="form-control" require>
            </div>
            <div class="mb-3">
              <label for="">Phone no#</label>
              <input type="text" name="c_phone" value="<?= $customer['phone'] ?>" class="form-control" require>
            </div>
            <div class="mb-3">
              <label for="">Email</label>
              <input type="text" name="c_email" value="<?= $customer['email'] ?>" class="form-control" require>
            </div>
            <div class="mb-3">
              <button type="submit" name="update_customer" class="btn btn-success float-end">Update</button>
            </div>
          </form>
        </div>
        
        <?php
            } else{
              echo "No such service id found.";
            }
          }
        ?>

      </div>
    </div>
  </div>


<!-- Include navigation -->
<?php
  include './includes/footer.php';
?>
<!-- Include navigation -->
