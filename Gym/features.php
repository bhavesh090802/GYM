<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym-Features</title>
    <link rel="stylesheet" href="assets/home.css">
    <link rel="stylesheet" href="assets/features.css">
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
    <br><br><br><br><br><br><br><br><br><br><br>

    <section class="features" id="features">



        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="https://www.intowellness.in/wp-content/uploads/2019/09/5-Things-to-Consider-Before-Buying-Gym-Equipment.jpg" alt="">
                </div>
                <div class="content">
                    <!-- <img src="images/icon1.png" alt=""> -->
                    <h3>High-Quality Exercise Equipment </h3>
                    <p>Standard gym equipment includes dumbbells, weight machines, kettlebells, squat racks, and cardio equipment.</p>
                    <!-- <a href="#" class="btn">read more</a> -->
                </div>
            </div>

            <div class="box second">
                <div class="image">
                    <img src="https://www.world-team-cup.com/wp-content/uploads/2021/08/fitness-W-1200X620-1.jpg" alt="">
                </div>
                <div class="content">
                    <!-- <img src="images/icon2.png" alt=""> -->
                    <h3>Well-Designed Space and Facility</h3>
                    <p>The space and standard of the facility are an integral part of a fitness business. The facility are clean, well-maintained, and be large enough to allow for social distancing.</p>
                    <!-- <a href="#" class="btn">read more</a> -->
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="https://pages.zogics.com/hubfs/how-to-clean-gym-equipment_header2.jpg" alt="">
                </div>
                <div class="content">
                    <!-- <img src="images/icon3.png" alt=""> -->
                    <h3>Cleanliness and Maintenance </h3>
                    <p>All areas of the facility and equipment are cleaned and maintained regularly. Equipment should be cleaned and disinfected between use and all high touchpoints need to be considered.</p>
                    <!-- <a href="#" class="btn">read more</a> -->
                </div>
            </div>

        </div>

    </section>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="gym.js"></script>
</body>

</html>