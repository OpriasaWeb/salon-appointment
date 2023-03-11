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
        <div class="card mt-5">
            <div class="card-header p-3">
                <p class="fs-2">Salon appointment - admin login</p>
                <!-- Message alert -->
                <?php    
                    include './message.php';
                ?>
                <!-- Message alert -->
            </div>
            <div class="card-body center">
                <form class="row g-3" action="./code.php" method="POST" id="login_form">
                    
                    <div class="col-md-6">
                        <label for="validationDefault01" class="form-label"><i class="fa-solid fa-circle-user"></i> Email</label>
                        <input type="email" class="form-control" name="admin_email" id="validationDefault01" value="" required>
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefault02" class="form-label"><i class="fa-solid fa-lock"></i> Password</label>
                        <input type="password" class="form-control" name="admin_password" id="validationDefault02" value="" required>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary float-end" type="submit" name="admin_login" value="admin_login" id="admin_login_button">Login</button>
                    </div>
                </form>
            </div>
        </div>
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