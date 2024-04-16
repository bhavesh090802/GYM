<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gym-Gallery</title>
  <link rel="stylesheet" href="assets/home.css">
  <link rel="stylesheet" href="assets/gallery.css">
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
      <!-- <div class="icon menu-btn">
                <i class="fas fa-bars"></i>
            </div> -->
    </nav>
  </header>
<br><br><br><br><br><br>
  <section class="gallery" id="gallery">
    <div class="swiper gallery">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="https://media.blogto.com/articles/20210221-KXCoffeeGym29.jpg?w=2048&cmd=resize_then_crop&height=1365&quality=70" />
        </div>
        <div class="swiper-slide">
          <img src="https://i94westchamber.org/wp-content/uploads/2020/02/Depositphotos_90178668_s-2019.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://www.thehealthy.com/wp-content/uploads/2018/08/shutterstock_713186611.jpg?fit=700,467" />
        </div>
        <div class="swiper-slide">
          <img src="https://www.muscleandfitness.com/wp-content/uploads/2018/11/Group-Fitness-Class-Performing-A-Variety-Of-Exercises-1.jpg?quality=86&strip=all" />
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </section>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="gym.js"></script>
</body>

</html>