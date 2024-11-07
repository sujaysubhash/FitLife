<?php

// Database connection
$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "fitlife";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$_SESSION = [];
session_unset();
session_destroy();

header("Location: logingSample.php")



?>