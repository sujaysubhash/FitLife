<?php
// Database connection
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

// Handle form submission to insert new messages
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['title'], $_POST['content'])) {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    $sent_date = date("Y-m-d H:i:s"); // Current date and time

    // Insert the message into the database
    $query = "INSERT INTO admin_messages (title, content, sent_date) VALUES ('$title', '$content', '$sent_date')";
    if (mysqli_query($conn, $query)) {
        $message = "Message sent successfully!";
    } else {
        $message = "Error sending message: " . mysqli_error($conn);
    }
}

// Fetch all messages from the database
$query = "SELECT * FROM admin_messages ORDER BY sent_date DESC";
$result = mysqli_query($conn, $query);
$messages = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

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

      <a href="index.html" class="logo d-flex align-items-center">
        <h1 class="sitename">Fit<span>Life</span></h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li class="dropdown"><a href="#"><span>Profile</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
              <li><a href="./register.php">Member</a></li>
              <li><a href="./guest-register.php">Guest</a></li>
            </ul>
          </li>
          <li><a href="shop.php">Shop</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="community.php">Community</a></li>
          <li><a href="support.php">Support</a></li>
        </ul>

        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <!-- main -->
  <main class="main">
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Admin Panel - Community Messages</h1>
              <p class="mb-0">Send motivational messages and updates to the community</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Admin Message Section -->
    <section id="admin-messages" class="admin-messages section">
      <div class="container">
        <div class="row gy-4">
       
          <!-- Message Input Form -->
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="admin-message-form">
              <h3>Send a New Message</h3>
              <?php
                if (isset($message)) {
                    echo "<div class='alert alert-info'>$message</div>";
                }
              ?>
              <form action="admin.php" method="POST">
                  <div class="form-group mb-3">
                    <label for="message-title" class="form-label">Message Title</label>
                    <input type="text" id="message-title" name="title" class="form-control" placeholder="Enter message title" required>
                  </div>
                  <div class="form-group mb-3">
                    <label for="message-content" class="form-label">Message Content</label>
                    <textarea id="message-content" name="content" class="form-control" rows="5" placeholder="Type your message here..." required></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Send Message</button>
              </form>
            </div>
          </div><!-- End Message Input Form -->

          <!-- Sent Messages Display -->
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="admin-message-list">
              <h3>Previous Messages</h3>
              <ul class="list-group">
                <?php
                  if ($messages) {
                      foreach ($messages as $message) {
                          echo "<li class='list-group-item'>
                                  <h5 class='mb-1'>" . htmlspecialchars($message['title']) . "</h5>
                                  <p class='mb-1'>" . htmlspecialchars($message['content']) . "</p>
                                  <small>Sent on " . $message['sent_date'] . "</small>
                                </li>";
                      }
                  } else {
                      echo "<li class='list-group-item'>No messages found.</li>";
                  }
                ?>
              </ul>
            </div>
          </div><!-- End Sent Messages Display -->

        </div>
      </div>
    </section>
  </main>

  <!-- footer -->
  <footer id="footer" class="footer light-background">
    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div class="address">
            <h4>Address</h4>
            <p>56H5+F7W, North Paravur</p>
            <p>Kerala, 683513</p>
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
        Designed by <a href="#">Team FitLife</a>
      </div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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