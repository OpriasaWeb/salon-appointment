<?php
session_start();

// Database connection - PDO
require_once './connect/db_connect.php';

if(isset($_GET['enter_phone'])){

    $book_phone = mysqli_real_escape_string($conn, $_GET['book_phone']);

    $query_book = "SELECT * FROM salon_customer WHERE phone = '$book_phone' ";

    $result_query = mysqli_query($conn, $query_book);

    // if($result_query){
    //     $row = mysqli_num_rows($result_query);
    //     if($row){
    //         echo "<br>";
    //         echo "<br>";
    //         echo "<br>";
    //         echo "<br>";
    //         printf("Number of rows in the table: " . $row);
    //     }
        // mysqli_free_result($result_query);
    // }

    // $row = mysqli_num_rows($result_query);

    // if($row){
        // header("Location: old_customer.php");
    //     printf("Number of row in the table : " . $row);
    // } else{
        // header("Location: new_customer.php");
    // }

    if(mysqli_num_rows($result_query) == 0){
      $_SESSION['message'] = "Good day!";
      $_SESSION['message'] = mysqli_num_rows($result_query);
      header("Location: new_customer.php");
    } else{
      $_SESSION['message'] = "Good day! You can now book.";
      $_SESSION['message'] = mysqli_num_rows($result_query);
      header("Location: old_customer.php");
      exit(0);
    }
}

?>



    <!-- Include the header.php -->
    <?php require_once './includes/header.php' ?>

    <!-- Include the nav.php -->
    <?php require_once './includes/nav.php' ?>

    <?php
    echo "<br>";
    echo "<br>";
    echo "<br>";
    ?>

    <!-- Message session -->
    <!-- <?php require_once './message.php' ?> -->

    <!-- Modal -->
    <div class="modal" tabindex="-1" id="exampleModal"> <!-- ID modal depends on the id service from database -->
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Enter your phone number</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="GET">
                    <input type="text" class="form-control" name="book_phone" placeholder="09+" required>
                    <button type="submit" name="enter_phone" class="btn btn-sm btn-primary float-end mt-3">Enter</button>
                </form>
            </div>
            </div>
        </div>
    </div>

    <!-- Include the footer.php -->
    <?php require_once './includes/footer.php' ?>



    
