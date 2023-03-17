<?php
session_start();

// Database connection - PDO
require_once './connect/db_connect.php';

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
                <h5 class="modal-title">Enter your phone number</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="./code.php" method="GET">
                    <input type="text" class="form-control" name="book_phone" placeholder="09+" required>
                    <button type="submit" name="enter_phone" class="btn btn-sm btn-primary float-end mt-3">Enter</button>
                </form>
            </div>
            </div>
        </div>
    </div>

    <!-- Include the footer.php -->
    <?php require_once './includes/footer.php' ?>



    
