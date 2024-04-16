<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym-Home</title>
    <link rel="stylesheet" href="assets/home.css">
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

    <section class="home" id="home">

        <div class="swiper home-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide" style="background: url('https://wallpaperaccess.com/full/1108004.jpg') no-repeat;">
                    <div class="content">
                        <span>Commit to be fit</span>
                        <h3>It's no easy to loose your fitness and so hard to gain it back.</h3>
                        <a href="contact.php" class="btn">get started</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url('https://wallpaperaccess.com/full/1245044.jpg') no-repeat;">
                    <div class="content">
                        <span>Commit to be fit</span>
                        <h3>It's no easy to loose your fitness and so hard to gain it back.</h3>
                        <a href="contact.php" class="btn">get started</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url('https://c4.wallpaperflare.com/wallpaper/206/268/839/pose-muscle-muscle-rod-press-hd-wallpaper-preview.jpg') no-repeat;">
                    <div class="content">
                        <span>Commit to be fit</span>
                        <h3>It's no easy to loose your fitness and so hard to gain it back.</h3>
                        <a href="contact.php" class="btn">get started</a>
                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>

    </section>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="gym.js"></script>
</body>

</html>