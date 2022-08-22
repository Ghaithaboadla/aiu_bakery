
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
        <a href="viewprod.php">product</a>
        <a href="#login">Login</a>
        <a href="#contact">contact</a>
        <p>
        <!-- <?php echo  $_SESSION['name']; ?> -->
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
              <a href="products.php"> See Products</a>
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

    <!-- login section start here  -->

    <section class="login" id="login">
      <div class="container">
        <input type="checkbox" id="flip" />
        <div class="cover">
          <div class="front">
            <img src="images/bakk.webp" alt="" />
            <div class="text"></div>
          </div>
          <div class="back">
            <img class="backImg" src="images/backImg.jpg" alt="" />
            <div class="text">
              <span class="text-1"
                >Complete miles of journey <br />
                with one step</span
              >
              <span class="text-2">Let's get started</span>
            </div>
          </div>
        </div>
        <div class="forms">
          <div class="form-content">
            <div class="login-form">
              <div class="title">Login</div>
              <form action="vlaidation.php" method="POST">
                <div class="input-boxes">
                  <div class="input-box">
                    <i class="fas fa-envelope"></i>
                    <input type="text" name="user" placeholder="E-mail" required />
                  </div>
                  <div class="input-box">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="pass" placeholder=" password" required />
                  </div>
                  <div class="text"><a href="#">Forgot password?</a></div>
                  <div class="button input-box">
                    <input type="submit" value="Login" />
                  </div>
                  <div class="text sign-up-text">
                    Don't have an account? <label for="flip">Register</label>
                  </div>
                </div>
              </form>
            </div>
            <div class="signup-form">
              <div class="title">Signup</div>
              <form action="registration.php" method="POST"   >
                <div class="input-boxes">
                  <div class="input-box">
                    <i class="fas fa-envelope"></i>
                    <input type="text"  name="user" placeholder="Enter  email" required />
                  </div>
                  <div class="input-box">
                    <i class="fas fa-lock"></i>
                    <input
                      type="password"
                      name="pass"
                      placeholder="Enter  password"
                      required
                    />
                  </div>
                  <div class="button input-box">
                    <input type="submit" value="Sumbit" />
                  </div>
                  <div class="text sign-up-text">
                    Already have an account? <label for="flip">Login now</label>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
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
