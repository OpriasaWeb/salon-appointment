<?php
session_start();

require_once '../connect/db_connect.php';

// Admin login code
if(isset($_POST['email']) && isset($_POST['password'])){

    // Data validation
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // Validate the email and password that being entered
    $admin_email = validate($_POST['email']);
    $admin_password = validate($_POST['password']);

    // If the fullname and password is empty
    if(empty($admin_email) && empty($admin_password)){
        header("Location: index.php?error=Empty input, try again.");
        exit();
    } else{
        $sql = "SELECT * FROM salon_appointment WHERE email='$admin_email' AND password='$admin_password' ";

        $result = mysqli_query($db, $sql);

        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if($row['email'] === $admin_email){
                $_SESSION['email'] = $row['email'];
                header("Location: dashboard.php");
                exit();
            }
        }else{
            header("Location: index.php?error=Incorrect email or password");
            exit();
        }
        
    }

}else {
    header("Location: index.php");
    exit();
}



?>