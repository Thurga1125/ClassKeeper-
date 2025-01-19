<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Include the Database class
require_once "Database.php";

// Create an instance of the Database class
$db = new Database();

// Check if the connection is successful
if ($db->conn) {
    echo "Connected successfully to the database.";
} else {
    echo "Failed to connect to the database.";
}
?>
