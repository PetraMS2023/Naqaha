<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Logo In Browser -->
    <link rel="sortcut icon" type="image/jpg" href="../media/logos/logo browser.png" />
    <!-- Font Awesome Library -->
    <link rel="stylesheet" href="../CSS/all.min.css" />
    <!-- Render All Element Normally -->
    <link rel="stylesheet" href="../CSS/normalize.css" />
    <!-- Main Template CSS -->
    <link rel="stylesheet" href="../CSS/design.css" />
    <!-- Slider File CSS -->
    <link rel="stylesheet" href="../js/swiper-bundle.min.css" />
    <!-- SCSS File -->
    <link rel="stylesheet" href="../scss/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Create Account</title>
</head>
<body>
    <!-- Start Back -->
    <div class="back-to">
        <a href="../index.php">Go To Webpages</a>
    </div>
    <!-- End Back -->
    <!-- Start Page -->
    <div class="log">
        <div class="left-slid">
            <div class="logo">
                <img src="../media/logos/logo.svg" alt="">
            </div>
            <div class="bottom">
                <img class="image1" src="../media/back-doctor-login.png" alt="">
                <img class="image2" src="../media/doctor-login.png" alt="">
            </div>
        </div>
        <div class="content">
            <div class="container">
                <div class="title">
                    <h2>Create Account</h2>
                    <p>Register by entering the information below</p>
                </div>
                <form action="../backend/CreateAccount.php" method="POST">
                  <div class="inputs">
                      <div class="inps">
                          <div class="inp">
                              <label for="name">Name :</label>
                              <input type="text" name="name" id="name" required>
                          </div>
                          <div class="inp">
                              <label for="email">Email :</label>
                              <input type="email" name="email" id="email" required>
                          </div>
                      </div>
                      <div class="inps">
                          <div class="inp">
                              <label for="phone_number">Phone number :</label>
                              <input type="text" name="phone_number" id="phone_number" required>
                          </div>
                          <div class="inp">
                              <label for="password">Password :</label>
                              <input type="password" name="password" id="password" required>
                          </div>
                      </div>
                      <div class="inps">
                          <div class="inp">
                              <label for="age">Age :</label>
                              <input type="text" name="age" id="age" required>
                          </div>
                          <div class="inp gen">
                              <label for="gender">Gender :</label>
                              <div class="gen">
                                  <div class="male">
                                      <input type="radio" name="gender" value="male" id="male" required>
                                      <img src="../media/male.svg" alt="">
                                  </div>
                                  <div class="female">
                                      <input type="radio" name="gender" value="female" id="female" required>
                                      <img src="../media/female.svg" alt="">
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="terms">
                      <input type="checkbox" name="terms_agreed" id="terms_agreed" required>
                      <p> Yes, I understand and agree Terms & Conditions.</p>
                  </div>
                  <div class="sub">
                      <button type="submit">Send</button>
                      <span>Already have an Account. <a href="../pages-en/registration.php">Login Now</a></span>
                  </div>
              </form>

            </div>
        </div>
    </div>
    <!-- End Page -->
    <!-- Start JS Files -->
 
    <script src="../js/scroll.js"></script>
    <script src="../js/swiper-bundle.min.js"></script>
    <script src="../js/swiper.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/sc.js"></script>
    <!-- End JS Files -->
</body>
</html>