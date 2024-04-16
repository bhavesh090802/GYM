<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym-Trainers</title>
    <link rel="stylesheet" href="assets/home.css">
    <link rel="stylesheet" href="assets/trainers.css">
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

    <section class="trainers" id="trainers">

        <h1 class="heading"> <span>expert trainers</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="https://www.telegraph.co.uk/content/dam/health-fitness/2019/10/18/DSC6660_trans_NvBQzQNjv4BqgsaO8O78rhmZrDxTlQBjdEbgHFEZVI1Pljic_pW9c90.jpg?imwidth=480" alt="">
                <div class="content">
                    <span>expert trainer</span>
                    <h3>Luke Zocchi</h3>
                    <div class="share">
                    <a href="https://facebook.com" class="fab fa-facebook-f" target="blank"></a>
                    <a href="https://twitter.com" class="fab fa-twitter" target="blank"></a>
                    <a href="https://linkedin.com" class="fab fa-linkedin" target="blank"></a>
                    </div>
                </div>
            </div>

            <div class="box">
                <img src="http://starsunfolded.com/wp-content/uploads/2017/11/Rakesh-Udiyar.....jpg" alt="">
                <div class="content">
                    <span>expert trainer</span>
                    <h3>Rakesh Udiyar</h3>
                    <div class="share">
                    <a href="https://facebook.com" class="fab fa-facebook-f" target="blank"></a>
                    <a href="https://twitter.com" class="fab fa-twitter" target="blank"></a>
                    <a href="https://linkedin.com" class="fab fa-linkedin" target="blank"></a>
                    </div>
                </div>
            </div>

            <div class="box">
                <img src="https://www.health-yogi.com/wp-content/uploads/2019/10/IMG_20191016_000530.jpg" alt="">
                <div class="content">
                    <span>expert trainer</span>
                    <h3>Alexia Clark</h3>
                    <div class="share">
                    <a href="https://facebook.com" class="fab fa-facebook-f" target="blank"></a>
                    <a href="https://twitter.com" class="fab fa-twitter" target="blank"></a>
                    <a href="https://linkedin.com" class="fab fa-linkedin" target="blank"></a>
                    </div>
                </div>
            </div>

            <div class="box">
                <img src="https://cdn.shopify.com/s/files/1/2958/7314/articles/shaun-stafford-talks-about-protein_2c25c766-9b63-4f3a-b6a5-81996727bec3_1600x.jpg?v=1523953985" alt="">
                <div class="content">
                    <span>expert trainer</span>
                    <h3>Shaun Stafford</h3>
                    <div class="share">
                    <a href="https://facebook.com" class="fab fa-facebook-f" target="blank"></a>
                    <a href="https://twitter.com" class="fab fa-twitter" target="blank"></a>
                    <a href="https://linkedin.com" class="fab fa-linkedin" target="blank"></a>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="gym.js"></script>
</body>

</html>