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
    .form-group
    {
      margin-block-end:1.5rem;
    }

  </style>
</head>

<body class="index-page">
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="./index.php" class="logo d-flex align-items-center">
        <h1 class="sitename">Fit<span>Life</span></h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li class="dropdown"><a href="#"><span>Profile</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
              <li class="dropdown"><a href="#"><span>Registration</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="./register.php">Member</a></li>
                  <li><a href="./guest-register.php">Guest</a></li>
                </ul>
              <li class="dropdown"><a href="#"><span>Login</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="./member.php">Member</a></li>
                  <li><a href="./guest.php">Guest</a></li>
                  <li><a href="./admin-login.php">Admin</a></li>
                </ul>
              </li>
              <li><a href="./view.php">View Profile</a></li>
              <li><a href="edit-profile.php">Edit Profile</a></li>
              <li><a href="./logout.php">Logout</a></li>
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
<!--end header -->

<main style ="margin-block-start: 50px;">
    <section class="register-area">
            <div class="container">
                <div class="join">
                    <h1 class=" join-head text-center">Order Summary</h1>
                </div>
                <form method="POST" action="./ordered.php" onsubmit="return validateForm()">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input id="name" type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input id="email" type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone:</label>
                        <input id="phone" type="number" name="phone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="address">Address:</label>
                        <input id="address" type="text" name="address" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="pincode">Pincode:</label>
                        <input id="pincode" type="number" name="pincode" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="housenumber">House Number:</label>
                        <input id="housenumber" type="number" name="housenumber" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="landmark">Landmark:</label>
                        <input id="landmark" type="text" name="landmark" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="addresstype">Address Type:</label>
                        <select name="addresstype" class="form-control">
                            <option value="">Select</option>
                            <option value="Home" >Home</option>
                            <option value="Work" >Work</option>
                        </select>
                    </div>
                    <div>
                        <input type="submit" name="submit" value="Place Order" class="btn btn-primary">
                    </div>
                </form>
            </div>
    </section>
</main>

<!-- footer section -->
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

<!-- Form validation -->
<script>
    function validateForm()
      {
         let name = document.getElementById('name').value;
         let email = document.getElementById('email').value;
         let phone = document.getElementById('phone').value;
         let address = document.getElementById('address').value;
         let pincode = document.getElementById('pincode').value;
         let housenumber = document.getElementById('housenumber').value;
         let landmark = document.getElementById('landmark').value;

         if(name === "" || email === "" || phone === "" || address === "" || pincode === "" || housenumber === "" || landmark === "")
            {
              alert("All the fields must be filled out");
              return false;
            }
          const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
         if(!emailPattern.test(email))
            {
              alert("Please enter a valid email address.");
              return false;
            }
           const phonePattern =  /^\d{10}$/;
          if(!phonePattern.test(phone))
            {
              alert("Please enter a valid phone number having 10 digits.");
              return false;
            }
          const pincodePattern =  /^\d{6}$/;
          if(!pincodePattern.test(pincode))
            {
              alert("Enter a valid pincode");
              return false;
            }
          if(isNaN(housenumber))
            {
              alert("House number must be a numeric value");
              return false;
            }
          
          // if the all the inputs are valid
          return true;
          
      }

</script>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></scrip>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>

<!-- Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>