<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>FitLife - Edit Profile</title>
    <meta name="description" content="Registration page for FitLife">
    <meta name="keywords" content="registration, FitLife">

    <!-- Favicons -->
    <link href="./assets/img/icon.webp" rel="icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <style>
        .error {
            color: red;
            margin-left: 5px;
        }
        .alert-success {
            background-color: #d4edda;
            color: #155724;
            padding: 10px;
            border-radius: 5px;
        }
        .alert-warning {
            background-color: #fff3cd;
            color: #856404;
            padding: 10px;
            border-radius: 5px;
        }
        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            padding: 10px;
            border-radius: 5px;
        }
        .result-container
        {
        display:flex;
        justify-content:center;
        }
       
        .bmi-result {
            font-weight: bold;
            margin-top: 20px;
        }
        .join {
            display: flex;
            justify-content: center;
            margin: 10px 0 0 0;
        }
        .join-head {
            font-weight: bold;
        }
        .result-head {
            font-weight: bold;
            font-size:20px;
            color: black;
        }
        .final-result
        {
        color:var(--accent-color);
        }
    </style>
</head>

<body class="register-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
            <a href="index.php" class="logo d-flex align-items-center">
                <h1 class="sitename">Fit<span>Life</span></h1>
            </a>
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="community.php">Community</a></li>
                    <li><a href="suppliers.php">Suppliers</a></li>
                    <li><a href="support.php">Support</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </header>

    <?php
    session_start();

    $servername = "localhost";
    $username = "admin"; 
    $password = "admin"; 
    $dbname = "fitlife"; 
    
    // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
        if ($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }
    // PHP Code for Registration Form Handling
    $nameErr = $emailErr = $passwordErr = $heightErr = $weightErr = "";
    $name = $email = $password = $height = $weight = $category = "";
    $bmi = $output = $alertClass = "";
    $recommendations = "";

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

            // Determine the weight status and recommendations
            if ($bmi < 18.5) {
                $output = "Under Weight";
                $alertClass = "alert-danger";
                $category = "Weight Training";
                $recommendations = "Increase calorie intake with nutrient-dense foods: <ul>
                    <li>Nuts and Nut Butters: Almonds, walnuts, and peanut butter.</li>
                    <li>Whole Grains: Oats, quinoa, and brown rice.</li>
                    <li>Dairy Products: Full-fat yogurt, cheese, and milk.</li>
                    <li>Avocado: Packed with healthy fats.</li>
                    <li>Protein Shakes: Add protein powders to smoothies.</li>
                </ul>";
            } elseif ($bmi < 24.9) {
                $output = "Normal Weight";
                $alertClass = "alert-success";
                $category = "Weight Training";
                $recommendations = "Maintain a balanced diet: <ul>
                    <li>Fruits and Vegetables: A variety of colors.</li>
                    <li>Lean Proteins: Chicken, fish, beans.</li>
                    <li>Whole Grains: Brown rice, quinoa.</li>
                    <li>Healthy Fats: Olive oil, avocados, fatty fish.</li>
                    <li>Hydration: Plenty of water.</li>
                </ul>";
            } elseif ($bmi < 29.9) {
                $output = "Over Weight";
                $alertClass = "alert-warning";
                $category = "Cardio with weight training";
                $recommendations = "Focus on weight management: <ul>
                    <li>Vegetables: Non-starchy options like spinach and broccoli.</li>
                    <li>Lean Proteins: Skinless poultry, fish, legumes.</li>
                    <li>Whole Grains: Opt for whole grains but watch portion sizes.</li>
                    <li>Healthy Snacks: Nuts in moderation, Greek yogurt.</li>
                    <li>Limit Sugary Drinks: Reduce soda and high-calorie beverages.</li>
                </ul>";
            } else {
                $output = "OBESE";
                $alertClass = "alert-danger";
                $category = "Cardio Workout";
                $recommendations = "Focus on weight management: <ul>
                    <li>Vegetables: Non-starchy veggies for low-calorie options.</li>
                    <li>Lean Proteins: Tofu to promote satiety.</li>
                    <li>Healthy Snacks: Greek yogurt, hummus with veggies.</li>
                    <li>Limit Sugary Drinks: Reduce soda and high-calorie beverages.</li>
                </ul>";
            }

            $user_id = $_SESSION['user_id'];
            $userQuery = "SELECT * FROM userdetails WHERE user_id = '$user_id'";
            $userResult = $conn->query($userQuery);

            if ($userResult->num_rows > 0) {
                // If the user exists, update their profile details
                $profileUpdate = "UPDATE profiledetails SET bmi = '$bmi', weight = '$weight', height = '$height', dietary_restrictions = '$category', last_modified_date = CURDATE(), Fitness_objective = '$recommendations' WHERE user_id = '$user_id'";
    
                if ($conn->query($profileUpdate) === TRUE) {
                    echo "<script>alert('Profile updated successfully');</script>";
                } else {
                    echo "Error updating profile: " . $conn->error;
                }
            } else {
                // If the user doesn't exist, insert new user details and profile details
                $userInsert = "INSERT INTO userdetails (role, name, email, password) VALUES ('user', '$name', '$email', '$password')";
                $conn->query($userInsert);
    
                // Get the new user's ID (last inserted user ID)
                $user_id = $conn->insert_id;
    
                // Insert profile details
                $profileInsert = "INSERT INTO profiledetails (user_id, bmi, weight, height, dietary_restrictions, last_modified_date, Fitness_objective) VALUES ('$user_id', '$bmi', '$weight', '$height', '$category', CURDATE(), '$recommendations')";
                if ($conn->query($profileInsert) === TRUE) {
                    echo "<script>alert('Profile created successfully');</script>";
                } else {
                    echo "Error inserting profile: " . $conn->error;
                }
            }
            $conn->close();

        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

   <!-- Registration Form Start -->
<section class="register-area">
    <div class="container">
        <br>
        <div class="join">
            <h1 class="join-head">Join FitLife</h1>
        </div>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="form-group">
                <label for="height">Height (cm):</label>
                <input type="number" name="height" class="form-control" value="<?php echo $height;?>" step="1" min="0" max="300">
                <span class="error"><?php echo $heightErr;?></span>
            </div>
            <div class="form-group">
                <label for="weight">Weight (kg):</label>
                <input type="number" name="weight" class="form-control" value="<?php echo $weight;?>" step="1" min="0" max="700">
                <span class="error"><?php echo $weightErr;?></span>
            </div>
            <div class="form-group">
                <label for="category">Food Category:</label>
                <select name="food_category" class="form-control">
                    <option value="">Select</option>
                    <option value="Veg" <?php if (isset($food_category) && $food_category == "Veg") echo 'selected'; ?>>Veg</option>
                    <option value="Non-Veg" <?php if (isset($food_category) && $food_category == "Non-Veg") echo 'selected'; ?>>Non-Veg</option>
                </select>
                <br>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Register" class="btn btn-primary">
            </div>
        </form>

        <!-- BMI Result and Recommendations Display -->
        <?php if (!empty($output)): ?>
          <div class="result-container">
            <div class="bmi-result <?php echo $alertClass; ?>">
                <h1 class="result-head">
                    Your BMI is <?php echo number_format($bmi, 2); ?> and you are classified as <strong class="final-result"><?php echo $output; ?></strong><br>
                    Your workout is categorized as <strong class="final-result"><?php echo $category; ?></strong><br>
                </h1>
                <div><?php echo $recommendations; ?></div>
               </div>
            </div>
        <?php endif; ?>
    </div>
</section>
<!-- Registration Form End -->

<footer id="footer" class="footer light-background">
    <div class="container">
        <div class="row gy-3">
            <div class="col-lg-3 col-md-6 d-flex">
                <i class="bi bi-geo-alt icon"></i>
                <div class="address">
                    <h4>Address</h4>
                    <p>56H5+H4F, Aluva, Kerala 683101, India</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex">
                <i class="bi bi-envelope icon"></i>
                <div class="email">
                    <h4>Email</h4>
                    <p>info@fitlife.com</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex">
                <i class="bi bi-phone icon"></i>
                <div class="phone">
                    <h4>Phone</h4>
                    <p>+91 123 456 7890</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex">
                <i class="bi bi-clock icon"></i>
                <div class="hours">
                    <h4>Opening Hours</h4>
                    <p>Mon-Fri: 9AM - 6PM</p>
                    <p>Sat-Sun: Closed</p>
                </div>
            </div>
        </div>
    </div>
</footer>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Main JS File -->
    <script src="./assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>
</html>
