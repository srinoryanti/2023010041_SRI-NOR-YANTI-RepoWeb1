<?php
// Server configuration
$host = 'localhost'; // Server hostname
$user = 'root';      // Database username
$pass = '';          // Database password
$database = 'crudyanti'; // Database name

// Establishing connection to the database
$conn = mysqli_connect($host, $user, $pass, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
