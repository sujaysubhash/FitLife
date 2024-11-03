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


  <!-- Google icon -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=currency_rupee" />

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

      <a href="./index.php" class="logo d-flex align-items-center">
        <h1 class="sitename">Fit<span>Life</span></h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php" class="active">Home</a></li>
          <li class="dropdown"><a href="#"><span>Profile</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="register.php">Registration</a></li>
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

<!-- main section-->
  <main id="product-detail" class="container" style="margin-block:10vh;">
    <div class="row">
      <div class="col-md-6">
        <img id="productImage" src="" alt="Product Image" class="img-fluid">
      </div>
      <div class="col-md-6"  style="margin-block:15vh;">
        <h2 class="fw-bold"  id="productName">Product Name</h2>
        <p class="fw-bold" id="productPrice">Price</p>
        <p id="productDescription">Description</p>
        <p id="productDetails">Details</p>
        <div class="d-flex justify-content-center gap-5 p-5">
            <button id="buyNowButton" type="button" style="background:var(--accent-color)" class="text-light fw-bold btn px-5 py-4 px-4">Buy Now</button>
            <button type="button" style="background:var(--accent-color)" class="text-light fw-bold btn px-5 py-4 px-4 ">Rate Product</button>
        </div>
      </div>
    </div>  
  </main>

  <!-- Script to Fetch Product Data -->
  <script>
    const products = {
        1: {
            name: "MuscleBlaze Fit High Protein Oats",
            price: "299",
            description: "High Protein Oats in Dark Chocolate flavor.",
            details: "Brand: MuscleBlaze | Diet Type: Veg | Specialty: Gluten-Free | Quantity: 400g",
            image: "assets/img/properties/oats.webp"
        },
        2: {
            name: "MuscleBlaze Omega 3 Fish Oil Gold",
            price: "359",
            description: "Omega 3 Fish Oil supplement.",
            details: "Brand: MuscleBlaze | Diet Type: Non-Veg | Specialty: Fish Oil | Weight: 60g",
            image: "assets/img/properties/fish-oil.jpg"
        },
        3: {
            name: "Wellcore-Pure Micronised Creatine Monohydrate Powder",
            price: "1299",
            description: "Micronized creatine monohydrate for enhanced workout performance.",
            details: "Brand: Wellcore | Type: Creatine | Form: Powder | Quantity: 250g",
            image: "assets/img/properties/Wellcore.jpg"
        },
        4: {
        name: "Lifelong Adjustable Dumbbell for Home Gym",
        price: "6100",
        description: "Adjustable dumbbell for home gym use.",
        details: "Brand: Lifelong | Type: Adjustable Dumbbell | Weight: 25kg | Quantity: 1",
        image: "assets/img/properties/dumbel.jpg"
        },
        5: {
            name: "Bodyband Pushup Board",
            price: "399",
            description: "Pushup board for multiple workout positions.",
            details: "Brand: BodyBand | Type: Pushup Stand | Weight Capacity: 120kg | Dimensions: 30L x 15W x 5H cm",
            image: "assets/img/properties/pushupeq.jpg"
        },
        6: {
            name: "Star X PRO PVC Weight 10kg with Dumbbell Rod",
            price: "397",
            description: "Lightweight dumbbell set with rod.",
            details: "Brand: StarX | Color: Black | Specialty: Lightweight | Quantity: 10kg",
            image: "assets/img/properties/newDumbel.jpg"
        },
        7: {
            name: "MuscleBlaze Super Gainer XXL Muscle Mass High Protein Gainer",
            price: "2899",
            description: "High protein gainer for muscle mass support.",
            details: "Brand: MuscleBlaze | Type: Protein | Form: Powder | Diet Type: Vegetarian",
            image: "assets/img/properties/gainer.jpg"
        },
        8: {
            name: "Boldfit Gym Shaker Pro Cyclone Shaker Bottle",
            price: "398",
            description: "Pro cyclone shaker bottle for gym use.",
            details: "Brand: Boldfit | Material: Plastic | Color: Black | Capacity: 500ml",
            image: "assets/img/properties/shaker1.jpg"
        },
        9: {
            name: "Optimum Nutrition Gold Whey Protein Powder for Muscle Support & Recovery",
            price: "2219",
            description: "Whey protein powder for muscle support and recovery.",
            details: "Brand: Nutrabay | Type: Whey | Diet: Vegetarian | Quantity: 1000g",
            image: "assets/img/properties/whey-protein.jpg"
        },
        10: {
            name: "Boldfit Bold Gym Shaker Bottle 700ml Shaker",
            price: "279",
            description: "700ml shaker bottle for gym use.",
            details: "Brand: Boldfit | Material: Plastic | Color: Black | Capacity: 700ml",
            image: "assets/img/properties/shaker.jpg"
        },
        11: {
            name: "Creatine HCl Pre Workout Supplement Creatine",
            price: "1199",
            description: "Pre-workout creatine supplement for enhanced performance.",
            details: "Brand: Prosupps | Type: Creatine | Flavor: Unflavored | Weight: 90g",
            image: "assets/img/properties/creatine.jpg"
        },
        12: {
            name: "LiveEZ Anti-Skid Yoga Mat with Carry Bag (10mm)",
            price: "649",
            description: "Anti-skid yoga mat with carry bag.",
            details: "Brand: LiveEZ | Type: Yoga Mat | Thickness: 10mm | Color: Blue",
            image: "./assets/img/properties/yoga mats.jpg"
        }
    };


    // Get product ID from URL
    const urlParams = new URLSearchParams(window.location.search);
    const productID = urlParams.get('id');

    if (productID && products[productID]) {
        document.getElementById("productName").textContent = products[productID].name;
        document.getElementById("productPrice").textContent = "Price : " + products[productID].price;
        document.getElementById("productDescription").textContent = products[productID].description;
        document.getElementById("productDetails").textContent = products[productID].details;
        document.getElementById("productImage").src = products[productID].image;
    } else {
        document.getElementById("product-detail").innerHTML = "<p>Product not found.</p>";
    }

    // Script to buy products
    document.getElementById('buyNowButton').addEventListener("click", function() {
        window.location.href = "buy-product.php";
    });
  </script>

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
</body>
</html>
