<?php
session_start();
$user_id = $_SESSION['user_id'];
$cart=$_SESSION['cart'];



?>

  <?php
@include 'config.php';
$select_user = mysqli_query($conn, "SELECT * FROM `users` WHERE Id = '$user_id'") or die('query failed');
      if(mysqli_num_rows($select_user) > 0){
         $fetch_user = mysqli_fetch_assoc($select_user);
      };
   ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AIU Bakery</title>

    <!-- swiper link  -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />

    <!-- cdn icon link  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <!-- custom css file  -->
    <link rel="stylesheet" href="stylee.css" />
  </head>

  <body>
    <!-- header section start here  -->
    <header class="header">
      <div class="logoContent">
        <a href="#" class="logo"><img src="images/logo2.PNG" alt="" /></a>
        <h1 class="logoName">AIU Bakery</h1>
      </div>

      <nav class="navbar">
        <a href="#home">home</a>
        <a href="products.php">product</a>
        <a href="logout.php">Logout</a>
        <a href="#contact">contact</a>
        <p>
        <?php echo  $_SESSION['name']; ?>
        </p>

      </nav>
    </header>
    <!-- header section end here  -->

    <!-- home section start here  -->
    <section class="home" id="home">
      <div class="homeContent">
        <h2>Welcome to AIU Bakery</h2>
      </div>
    </section>

    <!-- home section end here  -->

    <!-- product section start here  -->
    <!-- <section class="product" id="product">
      <div class="heading">
        <h2>Our Products</h2>
      </div>
      <div class="swiper product-row">
        <div class="swiper-wrapper">
          <div class="swiper-slide box1">
            <div class="orderNow">
              <a href="admin_page.php"> See Products</a>
            </div>
          </div>

          <div class="swiper-slide box2">
            <div class="orderNow">
              <a href="admin_update.php"> See Products</a>
            </div>
          </div>
          <div class="swiper-slide box3">
            <div class="orderNow">
              <a href="admin_update.php"> See Products</a>
            </div>
          </div>
          <div class="swiper-slide box4">
            <div class="orderNow">
              <a href="tes.php"> See Products</a>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <!-- product section end here  -->

  
    <!-- newsletter section ends here  -->

    <!-- footer section start here  -->

    <footer class="footer" id="contact">
      <div class="box-container">
        <div class="mainBox"></div>
        <div class="box">
          <h3>Quick link</h3>
          <a href="#home"> <i class="fas fa-arrow-right"></i>Home</a>
          <a href="#product"> <i class="fas fa-arrow-right"></i>product</a>
          <a href="#login "> <i class="fas fa-arrow-right"></i>Login</a>
          <a href="#contact"> <i class="fas fa-arrow-right"></i>contact</a>
        </div>

        <div class="box">
          <h3>Contact Info</h3>
          <a href=""> <i class="fas fa-phone"></i>+963 933 555 222</a>
          <a href=""> <i class="fas fa-envelope"></i>Aiu_Bakery@gmail.com</a>
        </div>
      </div>

      <div class="credit">
        created by <span>Feras Almazloum | Ghaith Aboadla </span>
      </div>
    </footer>

    <!-- swiper js link  -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- custom js file  -->
    <script src="index.js"></script>
  </body>
</html>
