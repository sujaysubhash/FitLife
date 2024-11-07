<?php
    $servername = "localhost";
    $username = "admin";
    $password = "admin";
    $dbname = "fitlife";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if(!empty($_SESSION['User_ID']))
        {
            $id = $_SESSION['User_ID'];
            $result = mysqli_query($conn, "SELECT * FROM user WHERE User_ID = '$id'");
            $row = mysqli_fetch_assoc($result);
        }
    else
        {
            header("Location: loginSample.php");
        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>