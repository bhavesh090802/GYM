<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym-Pricing</title>
    <link rel="stylesheet" href="assets/home.css">
    <link rel="stylesheet" href="assets/pricing.css">
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

    <br><br><br><br><br><br><br><br><br><br>
    <section class="pricing" id="pricing">

    <div class="information">
        <span>pricing plan</span>
        <h3>affordable pricing plan for your</h3>   
        <p> <i class="fas fa-check"></i> cardio exercise </p>
        <p> <i class="fas fa-check"></i> weight lifting </p>
        <p> <i class="fas fa-check"></i> diet plans </p>
        <p> <i class="fas fa-check"></i> overall results </p>
        <a href="contact.php" class="btn">all pricing</a>
    </div>

    <div class="plan basic">
        <h3>basic plan</h3>
        <div class="price"><span>Rs</span>800<span>/mo</span></div>
       <div class="list">
        <p> <i class="fas fa-check"></i> personal training </p>
        <p> <i class="fas fa-check"></i> cardio exercise </p>
        <p> <i class="fas fa-check"></i> weight lifting </p>
        <p> <i class="fas fa-check"></i> diet plans </p>
        <p> <i class="fas fa-check"></i> overall results </p>
       </div>
       <a href="contact.php" class="btn">get started</a>
    </div>

    <div class="plan">
        <h3>premium plan</h3>
        <div class="price"><span>Rs</span>2000<span>/mo</span></div>
       <div class="list">
        <p> <i class="fas fa-check"></i> personal training </p>
        <p> <i class="fas fa-check"></i> cardio exercise </p>
        <p> <i class="fas fa-check"></i> weight lifting </p>
        <p> <i class="fas fa-check"></i> diet plans </p>
        <p> <i class="fas fa-check"></i> overall results </p>
       </div>
       <a href="contact.php" class="btn">get started</a>
    </div>

</section>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="gym.js"></script>
</body>

</html>