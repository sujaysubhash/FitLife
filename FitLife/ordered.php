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
  <style>
    body {
            background-color: #f8f9fa;
        }
        .content-container {
            margin-top: 50px;
            padding: 20px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .success-message {
            color: var(--accent-color);
            font-size: 24px;
            margin-bottom: 20px;
        }
        .order-details {
            margin-top: 20px;
        }
  </style>
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
  <!-- main -->
<main>
    <div class="content-container container" style="margin-top:8rem; margin-bottom:3rem;">
        <div>
            <h1 class="success-message">Order Placed Successfully!</h1>
            <p>Thankyou for your order! Your order has been placed successfully</p>
        </div>
        <div>
            <h4>Order Details:</h4>
            <div class="order-details">
                <p><strong>Product Name:</strong>[product name]</p>
                <p><strong>Quantity:</strong>[product quantity]</p>
                <p><strong>Total Amount:</strong>$[amount]</p>
                <p><strong>Order ID:</strong>[order id]</p>
                <p><strong>Shipping Address:</strong></p>
                <p>[User name]</p>
                <p>[Address]</p>
                <p>[City, State, Pin]</p>
            </div>
        <div class="text-center">
            <a href="index.php" class="btn btn-primary">Return to Home</a>
            <a href="shop.php" class="btn btn-secondary">Continue Shopping</a>
        </div>
    </div>

    </div>
</main>

<!-- end main -->

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
