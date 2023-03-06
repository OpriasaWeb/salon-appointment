<?php

class Database{
    
    private $dsn = "mysql:host=localhost;dbname=salon_appointment";
    private $user = 'root';
    private $pass = '';

    public $conn;

    public function __construct()
    {
        try{
            $this->conn = new PDO($this->dsn, $this->user, $this->pass);
            echo "Connected successfully to the salon database!";
        } catch (PDOException $e){
            echo "Error: " . $e->getMessage();
        }
        return $this->conn;
    }

    // Check input
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

}

$ob = new Database();


?>