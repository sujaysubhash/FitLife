<?php
    // Database connection
    $servername="localhost";
    $username="root";
    $password="";
    $database="fitlife";

    // Database connection 
    $conn = mysqli_connect($servername,$username,$password,$database);

    //checking the connection

    if (!$conn) 
        {
            echo "Unable to connect".mysqli_connect_error();
        }
    else
        {
            if($_SERVER['REQUEST_METHOD']=='POST')
                {
                    $message=$_POST['msg'];
                    //insert the message into table
                    $sql = "INSERT INTO messages (message) VALUES ('$message')";
                    
                    //checking the connection and the query
                    if(mysqli_query($conn,$sql))
                        {
                            echo "Message updated successfully";
                        }
                    else
                        {
                            echo "Error Occured:".mysqli_error($conn);
                        }
                }
        }   
        //closing the connection
        mysqli_close($conn);

?>