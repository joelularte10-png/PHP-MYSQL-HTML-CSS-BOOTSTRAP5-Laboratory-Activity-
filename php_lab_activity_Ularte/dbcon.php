<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "php_db";

// Establish database connection using OOP MySQLi
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection status
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>