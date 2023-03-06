<?php
session_start();

// Database connection - PDO
require_once '../connect/db_connect.php';


?>
    
    
    
    
    <!-- Include the header.php -->
    <?php require_once '../includes/header.php' ?>

    <div class="container m-auto">
        <?php if(isset($_GET['error'])): ?>
        <h5 class="alert alert-success text-center error"><?= $_GET['error']; ?></h5>
        <?php 
        endif; 
        ?>
        <form action="" method="post">

        </form>
        <form class="row g-3" action="" method="post" id="login_form">
            <p class="fs-2">Admin login - Salon Appointment</p>
            <div class="col-md-4">
                <label for="validationDefault01" class="form-label">Email</label>
                <input type="text" class="form-control" name="email" id="validationDefault01" value="" required>
            </div>
            <div class="col-md-4">
                <label for="validationDefault02" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="validationDefault02" value="" required>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit" name="admin_login" value="login" id="admin_login_button">Login</button>
            </div>
        </form>
    </div>



    <!-- Prevent the going back after logout -->
    <script type="text/javascript">
        function preventBack(){
            window.history.forward()
        };
        setTimeout("preventBack()", 0);
        window.onunload=function(){
            null;
        }
    </script>
<!-- 
    <script type="text/javascript">
        $(document).ready(function(){
            $("#admin_login_button").click(function(e){
                if($("#login_form")[0].checkValidity()){
                    e.preventDefault();

                    $(this).val('Please wait...');
                    $.ajax({
                        url: 'php/admin_action.php',
                        method: 'post',
                        data: $("#login_form").serialize()+'&action=adminLogin',
                        success:function(response){
                            console.log(response);
                        }
                    })
                }
            });
        });
    </script> -->

    <!-- Include the footer.php -->
    <?php require_once '../includes/footer.php' ?>