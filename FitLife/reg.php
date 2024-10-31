<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $role = $_POST['role'];
        $address = $_POST['address'];

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "fitlife";

        $conn = new mysqli($servername, $username, $password, $database);

        if($conn->connect_error)
            {
                die("Connection Failed...".$conn->connect_error());
            }
            $sql = "INSERT INTO UserDetails (role, name, email, password, address) VALUES (?, ?, ?, ?, ?)";

            // Initialize the prepared statement
            $stmt = $conn->prepare($sql);
        
            // Bind the PHP variables to the placeholders in the SQL query
            $stmt->bind_param("sssss", $name, $email, $password, $role, $address);
        
            // Execute the statement
            if ($stmt->execute()) {
                echo "Registration successful!";
            } else {
                echo "Error: " . $stmt->error;
            }
        
            // Close the statement and connection
            $stmt->close();
            $conn->close();

    }
?>