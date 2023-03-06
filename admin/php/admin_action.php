<?php

require_once './admin_db.php';

// create new object name 'admin' using OOP
$admin = new Admin();

// Handle admin login ajax request
if(isset($_POST['action']) && $_POST['action'] == 'adminLogin'){
    print_r($POST);
}



class Admin extends Database{
    // Admin login
    public function admin_login($fullname, $password){
        $sql = "SELECT fullname, password FROM salon_admin WHERE fullname = :fullname AND password = :password";
        $statement = $this->conn->prepare($sql);
        $statement->execute(['fullname'=>$fullname, 'password'=>$password]);
        $row = $statement->fetch(PDO::FETCH_ASSOC);

        return $row;
    }
}



?>