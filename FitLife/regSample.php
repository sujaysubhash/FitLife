<?php
session_start(); // Start a session to store user data after login

// Database connection
$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "fitlife";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $duplicate = mysqli_query($conn, "SELECT * FROM user WHERE email =' $email' ");

        if(mysqli_num_rows($duplicate) > 0)
            {
                echo "<script>alert('Username already taken')</script>";
            }
        else
            {
                $query =  "INSERT INTO user VALUES('','$email','$password')";
                mysqli_query($conn, $query);
                echo "<script>alert('Username or Email has already taken')</script>";
            }


       
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login Form</h2>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Register">
    </form>
</body>
</html>