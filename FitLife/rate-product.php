<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>FitLife - Product Rating</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="./assets/img/icon.webp" rel="icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">
    <style>
        .form-group {
            margin-block-end: 1.5rem;
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
                    <li><a href="shop.php" class="active">Shop</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="community.php">Community</a></li>
                    <li><a href="support.php">Support</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </header>
    <!--end header -->
    <?php
        $nameErr = $emailErr = $ratingErr = $commentErr = "";
        $name = $email = $rating = $comment = "";
        $isRated = false;
        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            // Validate name
            if (empty($_POST["name"])) {
                $nameErr = "Name is required";
            } else {
                $name = htmlspecialchars(trim($_POST["name"]));
                if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                    $nameErr = "Only letters and white space allowed";
                }
            }
        
            // Validate email
            if (empty($_POST["email"])) {
                $emailErr = "Email is required";
            } else {
                $email = htmlspecialchars(trim($_POST["email"]));
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Invalid email format";
                }
            }
        
            // Validate rating
            if (empty($_POST["rating"])) {
                $ratingErr = "Rating is required";
            } else {
                $rating = htmlspecialchars(trim($_POST["rating"]));
                if (!in_array($rating, ["1", "2", "3", "4", "5"])) {
                    $ratingErr = "Invalid rating selected";
                }
            }
        
            // Validate comment
            if (empty($_POST["comment"])) {
                $commentErr = "Comment is required";
            } else {
                $comment = htmlspecialchars(trim($_POST["comment"]));
                if (strlen($comment) < 5) {
                    $commentErr = "Comment must be at least 5 characters long";
                }
            }

            if (empty($nameErr) && empty($emailErr) && empty($ratingErr) && empty($commentErr))
                {
                    $isRated = true;
                } 
        
        }
    ?>
    <main style="margin-block-start: 50px;">
        <section class="rating-area">
            <div class="container">
                <div class="join">
                    <h1 class="join-head text-center">Rate Product</h1>
                </div>
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" onsubmit="return validateRatingForm()">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input id="name" type="text" name="name" class="form-control" required>
                    <span class="text-danger"><?php echo $nameErr; ?></span>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input id="email" type="email" name="email" class="form-control" required>
                    <span class="text-danger"><?php echo $emailErr; ?></span>
                </div>
                <div class="form-group">
                    <label for="rating">Rating:</label>
                    <select id="rating" name="rating" class="form-control" required>
                        <option value="">Select Rating</option>
                        <option value="1">1 Star</option>
                        <option value="2">2 Stars</option>
                        <option value="3">3 Stars</option>
                        <option value="4">4 Stars</option>
                        <option value="5">5 Stars</option>
                    </select>
                    <span class="text-danger"><?php echo $ratingErr; ?></span>
                </div>
                <div class="form-group">
                    <label for="comment">Comment:</label>
                    <textarea id="comment" name="comment" class="form-control" rows="4" required></textarea>
                    <span class="text-danger"><?php echo $commentErr; ?></span>
                </div>
                    <div>
                        <input type="submit" name="submit" value="Submit Rating" class="btn btn-primary">
                    </div>
            </form>
            </div>
        </section>

        <?php if ($isRated == true): ?>
            <div class="alert alert-success md-4 text-center" style="margin-block-end:2rem;">
                Thankyou for your rating!
            </div>
        <?php endif; ?>
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

    <!-- Form validation -->
    <script>
        function validateRatingForm() {
            let name = document.getElementById('name').value;
            let email = document.getElementById('email').value;
            let rating = document.getElementById('rating').value;
            let comment = document.getElementById('comment').value;

            if (name === "" || email === "" || rating === "" || comment === "") {
                alert("All fields must be filled out");
                return false;
            }
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email)) {
                alert("Please enter a valid email address.");
                return false;
            }
            return true;
        }
    </script>

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
