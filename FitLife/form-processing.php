<?php
// Initialize variables
$nameErr = $emailErr = $passwordErr = $heightErr = $weightErr = "";
$name = $email = $password = $height = $weight = "";
$bmi = $output = $alertClass = "";

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate name
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }

    // Validate email
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
    }

    // Validate password
    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = test_input($_POST["password"]);
    }

    // Validate height
    if (empty($_POST["height"])) {
        $heightErr = "Height is required";
    } else {
        $height = test_input($_POST["height"]);
    }

    // Validate weight
    if (empty($_POST["weight"])) {
        $weightErr = "Weight is required";
    } else {
        $weight = test_input($_POST["weight"]);
    }

    // Calculate BMI if no errors
    if (empty($nameErr) && empty($emailErr) && empty($passwordErr) && empty($heightErr) && empty($weightErr)) {
        $mtheight = (float)$height / 100; // Convert height to meters
        $bmi = (float)$weight / ($mtheight * $mtheight);

        // Determine the weight status
        if ($bmi <= 18.5) {
            $output = "Under Weight";
            $alertClass = "alert-danger";
        } elseif ($bmi <= 24.9) {
            $output = "Normal Weight";
            $alertClass = "alert-success";
        } elseif ($bmi <= 29.9) {
            $output = "Over Weight";
            $alertClass = "alert-warning";
        } else {
            $output = "OBESE";
            $alertClass = "alert-danger";
        }

        echo "<div class='$alertClass'>Your BMI is " . number_format($bmi, 2) . " and you are classified as: $output</div>";
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
