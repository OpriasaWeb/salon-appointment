<?php
session_start();


?>


    <!-- Include the header.php -->
    <?php require_once './includes/header.php' ?>

    <!-- Service forms -->
    <section class="service">
        <div class="container">
            <div class="row">
                <div class="card w-75 mb-3">
                    <div class="card-body">
                        <h5 class="card-title mb-4">New customer register</h5>
                        <form action="" method="POST">
                            <div class="form-floating mb-3">
                                <input class="form-control" id="floatingInput" placeholder="name@example.com" disabled>
                                <label for="floatingInput">Haircut men - 100 pesos</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingPassword" placeholder="text">
                                <label for="floatingPassword">Fullname</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Number: 09*********</label>
                            </div>
                            <div class="form-floating">
                                <input type="email" class="form-control" id="floatingPassword" placeholder="email">
                                <label for="floatingPassword">Email</label>
                            </div>
                            <button type="submit" class="btn btn-success">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
