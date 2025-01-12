<?php
class Database 
{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "attendance_db";
    public $conn = null;

    // Constructor
    public function __construct() {
        try {
            $this->conn = new PDO(
                "mysql:host=$this->servername;dbname=$this->dbname",
                $this->username,
                $this->password
            );
            // Set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Connected successfully<br>";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
?>
