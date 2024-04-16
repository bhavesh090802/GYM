<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym-About Us</title>
    <link rel="stylesheet" href="assets/home.css">
    <link rel="stylesheet" href="assets/about.css">
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

    <br><br><br><br><br><br><br><br><br><br><br><br>
    <section class="about" id="about">

        <div class="image">
            <img src="http://cdn.shopify.com/s/files/1/1876/4703/articles/shutterstock_1822989113_1345db6b-061e-4235-b5c9-2f26601a8395_600x.jpg?v=1632931754" alt="">
        </div>

        <div class="content">
            <span>about us</span>
            <h3 class="title">Every day is a chance to become better</h3>
            <p>our goal is to assist you in reaching your weight loss, fitness and nutritional goals. </p>
            <div class="box-container">
                <div class="box">
                    <h3><i class="fas fa-check"></i>Our Goals</h3>
                    <p>1. To maintain a reputable and untarnished reputation in the community. <br>
                        2. To provide quality service.<br>
                        3. To offer better prices and services in comparison to competitors. <br>
                        4. Providing bootcamps in areas of Durban where this is not accessible.</p>
                </div>
                <div class="box">
                    <h3><i class="fas fa-check"></i>Our Services</h3>
                    <p>Our services offer wellness and fitness weight loss programs as well as the following: <br>
                        1. Tailor-Made Diet plans to suit your body. <br>
                        2. Live virtual online personal training. <br>
                        3. Bootcamps. <br>
                        4. Weekly Weigh-In’s. <br>
                        5. Motivational Coaching & Guidance.</p>
                </div>
            </div>
        </div>

    </section>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="gym.js"></script>
</body>

</html>