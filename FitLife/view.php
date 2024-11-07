<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>FitLife</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="./assets/img/icon.webp" rel="icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body class="index-page">

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
session_start(); // Start the session

// Database connection
$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "fitlife";

$conn = new mysqli($servername, $username, $password, $dbname);
$name = $email = $fitness_objective = $BMi = $weight = $height = $dietary_restrictions= "";

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the user is logged in
if (isset($_SESSION['login']) && $_SESSION['login'] === true) {
    // Get user ID from session
    $user_id = $_SESSION['user_id'];

    // Query to fetch user details from the database
$query = "SELECT bmi, weight, height, dietary_restrictions, Fitness_objective FROM profiledetails";
$result = $conn->query($query);

$query1 = "SELECT name, email FROM userdetails";
$result1 = $conn->query($query1);

// Fetch user details
if($result1->num_rows > 0) {
    $row1 = $result1->fetch_assoc();
    $name = $row1['name'];
    $email = $row1['email'];
} else {
    echo "No user data found.";
}

// Fetch profile details
if ($result->num_rows > 0) {
    // Fetch the user's profile data
    $row = $result->fetch_assoc();

    // Assign variables for displaying
    $fitness_objective = html_entity_decode($row['Fitness_objective']); 
    $BMI = $row['bmi'];
    $weight = $row['weight'];
    $height = $row['height'];
    $dietary_restrictions = $row['dietary_restrictions'];

} else {
    echo "No profile data found.";
}
} else {
    // Redirect to login page if not logged in
    header("Location: admin-login.php");
    exit();
}
?>

<!-- Main Content -->
<main id="main" class="main">
  <div class="container py-5" style="margin-top: 80px;">
    <div class="profile-container card p-4 shadow" style="max-width: 600px; margin: auto;">
      <h2 class="text-center mb-4">Your Profile</h2>
      
      <!-- Profile Information Section -->
      <div class="profile-info">
        <p><strong>Name:</strong> <?php echo htmlspecialchars($name); ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
        <p><strong>Fitness Objective:</strong> <?php echo $fitness_objective; ?></p> 
        <p><strong>BMI:</strong> <?php echo htmlspecialchars($BMI); ?></p>
        <p><strong>Weight:</strong> <?php echo htmlspecialchars($weight); ?> kg</p>
        <p><strong>Height:</strong> <?php echo htmlspecialchars($height); ?> cm</p>
        <p><strong>Dietary Restrictions:</strong> <?php echo htmlspecialchars($dietary_restrictions); ?></p>
      </div>

      <!-- Edit Profile Link -->
      <div class="text-center mt-4">
        <a href="edit-profile.php" class="btn btn-primary">Edit Profile</a>
      </div>
    </div>
  </div>
</main>
  
<!-- footer  -->
  <footer id="footer" class="footer light-background">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div class="address">
            <h4>Address</h4>
            <p>56H5+F7W, North Paravur</p>
            <p>Kerala, 683513</p>
            <p></p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Contact</h4>
            <p>
              <strong>Phone:</strong> <span>+91 97470372 </span><br>
              <strong>Email:</strong> <span>info@fitlife.com</span><br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Contact Timings</h4>
            <p>
              <strong>Mon-Sat:</strong> <span>5:30AM - 9:30PM</span><br>
              <strong>Sunday</strong>: <span>Not Available</span>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">FitLife</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        Designed by <a href="#">Team FitLife</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>