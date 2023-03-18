<?php
session_start();

// Database connection - PDO
require_once './connect/db_connect.php';

// Book appointment
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
      header("Location: old_customer.php?phone_appointment=$book_phone");
      exit(0);
    }
}
// Book appointment

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

    <!-- FRONT BANNER -->
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto">
                <img src="./images/salon1.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>
    <!-- FRONT BANNER -->

    <hr class="mt-2">
    <hr>

    <!-- CONTACT -->
    <div class="container" id="contact">
        <div class="row">
            <div class="col-md-6 mt-5">
                <p class="fs-3">Contact us:</p>
                <div class="mb-3">
                    <label for=""><i class="fa-solid fa-hashtag"></i></label>
                    <p class="fs-5">+63 9699855452</p>
                </div>
                <div class="mb-3">
                    <label for=""><i class="fa-solid fa-hashtag"></i></label>
                    <p class="fs-5">+63 9254587889</p>
                </div>
                <div class="mb-3">
                    <label for=""><i class="fa-solid fa-location-dot"></i></label>
                    <p class="fs-5">235 Balatasan St., Don Galo, Parañaque City</p>
                </div>
                <div class="mb-3 d-flex justify-content-evenly">
                    <a href="" class="btn btn-sm btn-primary mr-3"><i class="fa-brands fa-facebook-messenger"></i></a>
                    <a href="" class="btn btn-sm btn-primary ml-3"><i class="fa-brands fa-tiktok"></i></a>
                    <a href="" class="btn btn-sm btn-primary ml-3"><i class="fa-brands fa-linkedin"></i></a>
                </div>
                <p class="fs-4 mt-3">We are happy to serve you!</p>
            </div>
            <div class="col-md-6">
                <img src="./images/salon5.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>
    <!-- CONTACT -->

    <hr class="mt-2">
    <hr>

    <!-- HISTORY -->
    <div class="container" id="history">
        <p class="fs-3">History of Beauty Salon</p>
        <p class="fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus minima ut totam nemo tempore quia facilis ea repellendus, ipsa temporibus esse tenetur sit iure. In perferendis cum earum enim incidunt delectus, veritatis neque maiores illum commodi iusto reiciendis. Neque maiores tenetur, error facere veritatis dolorem ut harum totam magni voluptates autem aliquam quae culpa dolor, ipsa debitis, dolores aperiam eligendi voluptatem quod quis facilis et nisi. Sit rerum, dignissimos incidunt optio perspiciatis, placeat sunt, architecto dolorem quia eum quam atque ipsa nostrum soluta sequi? Accusantium natus nemo soluta cumque, similique, labore maiores sapiente non at voluptate dolorum corrupti ad modi?</p>
        <button type="button" class="btn btn-success float-end mb-3" data-bs-toggle="modal" data-bs-target="#readMore">
            Read more
        </button>
    </div>
    <!-- HISTORY -->

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


    <!-- Modal read more -->
    <!-- Vertically centered scrollable modal -->
    <div class="modal" tabindex="-1" id="readMore"> <!-- ID modal depends on the id service from database -->
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">History of Beauty Salon</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="fs-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus minima ut totam nemo tempore quia facilis ea repellendus, ipsa temporibus esse tenetur sit iure. In perferendis cum earum enim incidunt delectus, veritatis neque maiores illum commodi iusto reiciendis. Neque maiores tenetur, error facere veritatis dolorem ut harum totam magni voluptates autem aliquam quae culpa dolor, ipsa debitis, dolores aperiam eligendi voluptatem quod quis facilis et nisi. Sit rerum, dignissimos incidunt optio perspiciatis, placeat sunt, architecto dolorem quia eum quam atque ipsa nostrum soluta sequi? Accusantium natus nemo soluta cumque, similique, labore maiores sapiente non at voluptate dolorum corrupti ad modi?</p>

                <p class="fs-6">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est saepe aut porro neque. Beatae accusamus illum velit perspiciatis nulla cum qui. Eligendi exercitationem laborum praesentium, deleniti rem veritatis ratione? Beatae sit odit dicta iure, quasi facilis, laudantium quis dolorem tempore quos error culpa? Veritatis doloribus minus sequi repellat quam, esse perferendis harum eligendi? Sequi, in!</p>

                <p class="fs-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo quidem assumenda vero fugiat et ratione velit beatae qui, illo odio, cupiditate doloremque. Alias asperiores ipsum nesciunt optio ullam quisquam cum itaque blanditiis, natus, deserunt eos consequatur rem. Molestiae recusandae voluptate ex aliquid nisi vel distinctio veritatis quasi repellat magni delectus commodi fugiat itaque maiores ut iste accusamus, totam atque sequi? Nam fugiat omnis deserunt similique quo, accusamus adipisci voluptatibus. Doloremque veniam ea nesciunt officiis earum libero eaque odit distinctio ipsum quam officia quod, obcaecati tenetur facere laboriosam suscipit at similique inventore eveniet dolorem? Fuga aliquam eos amet cumque, itaque eveniet veniam voluptates maxime tempore voluptas iure in iste quam architecto culpa saepe nobis, quo nam praesentium odio ipsum! Voluptas, quae?</p>

            </div>
            </div>
        </div>
    </div>
    <!-- Modal read more -->

    <!-- Include the footer.php -->
    <?php require_once './includes/footer.php' ?>



    
