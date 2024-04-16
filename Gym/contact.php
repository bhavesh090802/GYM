<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym-Contact Us</title>
    <link rel="stylesheet" href="assets/home.css">
    <link rel="stylesheet" href="assets/contact.css">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
</head>

<body>
    <header class="header">
        <a href="home.php" class="logo"><img src="assets/logo.png" alt=""></a>
        <nav class="navbar">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="home.php">Home</a>
            <a href="gallery.php">Gallery</a>
            <a href="features.php">Features</a>
            <a href="pricing.php">Pricing</a>
            <a href="trainers.php">Trainers</a>
            <a href="about.php">About Us</a>
            <a href="logout.php"><?php session_start();
                                    echo $_SESSION['NAME'] ?></a>
        </nav>
    </header>

    <br><br><br><br><br><br><br><br><br><br><br><br><br>

    <section class="footer">
        <h2>CONTACT US</h2>
        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a class="links" href="home.php">Home</a>
                <a class="links" href="gallery.php">Gallery</a>
                <a class="links" href="features.php">Features</a>
                <a class="links" href="pricing.php">Pricing</a>
                <a class="links" href="trainers.php">Trainers</a>
                <a class="links" href="about.php">About Us</a>
            </div>

            <div class="box">
                <h3>opening hours</h3>
                <p> Monday : <i> 5:00am - 10:00pm </i> </p>
                <p> Tuesday : <i> 5:00am - 10:00pm </i> </p>
                <p> Wednesday : <i> 5:00am - 10:00pm </i> </p>
                <p> Thursday : <i> 5:00am - 10:00pm </i> </p>
                <p> Friday : <i> 5:00am - 10:00pm </i> </p>
                <p> Saturday : <i> 5:00am - 10:00pm </i> </p>
                <p> Sunday : <i> closed </i> </p>
            </div>

            <div class="box">
                <h3>opening hours</h3>
                <p> <i class="fas fa-phone"></i> +91-9654587952 </p>
                <p> <i class="fas fa-phone"></i> +080-9851655620 </p>
                <p> <i class="fas fa-envelope"></i> bkarapu@gmail.com </p>
                <p> <i class="fas fa-map"></i> Bangalore, India - 560049 </p>
                <div class="share">
                    <a href="https://facebook.com" class="fab fa-facebook-f" target="blank"></a>
                    <a href="https://twitter.com" class="fab fa-twitter" target="blank"></a>
                    <a href="https://linkedin.com" class="fab fa-linkedin" target="blank"></a>
                </div>
            </div>

        </div>

    </section>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="gym.js"></script>
</body>

</html>