<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "fitlife";  

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert message if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $title = $conn->real_escape_string($_POST['title']);
    $content = $conn->real_escape_string($_POST['content']);

    $sql = "INSERT INTO admin_messages (title, content) VALUES ('$title', '$content')";

    if ($conn->query($sql) === TRUE) {
        echo "Message sent successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>
