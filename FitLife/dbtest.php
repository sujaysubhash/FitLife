<?php
$servername = "localhost";
$username = "root";
$password = "root"; // Default for XAMPP is usually empty
$database = "fitlife";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
