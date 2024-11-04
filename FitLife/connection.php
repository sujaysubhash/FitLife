<?php
    $username = "127.0.0.1";
    $servername = "localhost";
    $password = "root";
    $database = "fitlife";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn)
        {
            print("Database Connection error");
        }
    else
        {
            print("Database connected successfully");
        }

?>