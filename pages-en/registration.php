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
    <title>Registration</title>
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
                    <h2>welcome back</h2>
                    <p>Login by entering the information below</p>
                </div>
                <form action="../backend/login.php" method="POST">
                  <div class="inputs">
                      <div class="inps">
                          <div class="inp">
                              <label for="email">Email :</label>
                              <input type="email" name="email" id="email" required>
                          </div>
                      </div>
                      <div class="inps">
                          <div class="inp">
                              <label for="password">Password :</label>
                              <input type="password" name="password" id="password" required>
                          </div>
                      </div>
                  </div>
                  <div class="forgot">
                      <a href="../pages-en/forgot.php">Forgot Password?</a>
                  </div>
                  <div class="sub-registration">
                      <button type="submit">Send</button>
                      <a href="../pages-en/create-account.php">Create account</a>
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