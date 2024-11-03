
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    
    $conn = mysqli_connect($servername,$username,$password);

    if($conn->connect_error())
        {
            die("Connection Failed".$conn->connect_error());
        }
    else
        {
            echo "Connection Successfull";
        }
?>