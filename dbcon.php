<?php
// Connection

$servername = "127.0.0.1";
$username = "root";
$password = "admin";
$dbname = "bella_sample";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>