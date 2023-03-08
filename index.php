<?php
session_start();

// Database connection - PDO
require_once './connect/db_connect.php';

echo "Salon Appointment";


?>



    <!-- Include the header.php -->
    <?php require_once './includes/header.php' ?>

    <!-- Include the nav.php -->
    <?php require_once './includes/nav.php' ?>


    <!-- Modal -->
    <div class="modal" tabindex="-1" id="exampleModal"> <!-- ID modal depends on the id service from database -->
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Are you an old or new customer?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <a href="" class="btn btn-primary">Old customer</a>
                <a href="" class="btn btn-success ml-3">New customer</a>
            </div>
            </div>
        </div>
    </div>

    <!-- Include the footer.php -->
    <?php require_once './includes/footer.php' ?>



    
