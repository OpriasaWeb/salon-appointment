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
        <p class="fs-3 text-center">Add new service</p>
      </div>
      <div class="card">
        <div class="card-body">
          <form action="./code.php" method="POST">
            <div class="mb-3">
              <label for="">Service name</label>
              <input type="text" name="service_name" class="form-control" require>
            </div>
            <div class="mb-3">
              <label for="">Price</label>
              <input type="text" name="service_price" class="form-control" require>
            </div>
            <div class="mb-3">
              <label for="">Availability</label>
              <select class="form-select form-select-sm mb-3" name="availability" aria-label=".form-select-sm example">
                <option value="true">Available</option>
                <option value="false">Disable</option>
              </select>
            </div>
            <div class="mb-3">
              <button type="submit" name="add_service" class="btn btn-primary float-end">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


<!-- Include navigation -->
<?php
  include './includes/footer.php';
?>
<!-- Include navigation -->
