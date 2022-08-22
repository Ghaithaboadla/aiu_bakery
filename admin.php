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
              <form action="admin_val.php" method="POST">
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
    </body>
</html>