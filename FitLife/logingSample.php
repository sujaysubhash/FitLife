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

        $result = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");

        $row = mysqli_fetch_assoc($result);
        
        if(mysqli_num_rows($result) > 0)
            {
                if($password == $row['password'])
                    {
                        $_SESSION['login'] = true;
                        $_SESSION['User_ID'] = $row["User_ID"];

                        // Insert the login attempt into the login table
                        $loginInsert = "INSERT INTO login (email, password) VALUES ('$email', '{$row['password']}')";
                        mysqli_query($conn, $loginInsert);

                        header("Location:index.php");
                    }
                else
                    {
                        echo "<script>alert('Wrong Password')</script>";
                    }
            }
        else 
            {
                echo "<script>alert('Username has not registered')</script>";
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

        <button type="submit"  name="submit">Login</button>
    </form>
</body>
</html>
