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
        <a href="./services.php" class="btn btn-secondary">Back</a>
        <p class="fs-3 text-center">Update the service</p>
      </div>
      <div class="card">
        <div class="card-body">

          <!-- Update mysqli code -->
          <?php
            if(isset($_GET['service_id'])){
              $service_id = mysqli_real_escape_string($conn, $_GET['service_id']);
              
              // Update query sql
              $update_query = "SELECT * FROM salon_services WHERE services_id = '$service_id' ";

              // Run the query update sql
              $update_run = mysqli_query($conn, $update_query);

              if(mysqli_num_rows($update_run) > 0){
                
                $service = mysqli_fetch_array($update_run);
                // print_r($service);

          ?>
          <!-- Update mysqli code -->

          <form action="./code.php" method="POST">
            <input type="hidden" name="service_id" value="<?= $service['services_id'] ?>" class="form-control">
            <div class="mb-3">
              <label for="">Service name</label>
              <input type="text" name="service_name" value="<?= $service['service_name'] ?>" class="form-control" require>
            </div>
            <div class="mb-3">
              <label for="">Price</label>
              <input type="text" name="service_price" value="<?= $service['price'] ?>" class="form-control" require>
            </div>
            <div class="mb-3">
              <label for="">Availability</label>
              <select class="form-select form-select-sm mb-3" name="availability" aria-label=".form-select-sm example">
                <option value="<?php echo $service['availability'] ?>">

                <?php 
                  if($service['availability'] == 'true'){
                    echo 'Available';
                  ?>
                  <option value="false">Disable</option>
                <?php
                  } else{
                    echo "Disable";
                  ?>
                  <option value="true">Available</option>
                  <?php
                  }
                ?>
                </option>
                
              </select>
            </div>
            <div class="mb-3">
              <button type="submit" name="update_service" class="btn btn-success float-end">Update</button>
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
