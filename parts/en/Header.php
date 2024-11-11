<!-- Start Header -->
<div class="header">
        <div class="container">
            <div class="top">
                <div class="logo">
                    <img src="../media/logos/logo-headar.png" alt="">
                </div>
                <div class="search">
                    <input type="text" name="" id="" placeholder="search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div>
            <div class="bottom">
                <div class="nav">
                    <ul>
                        <li >
                            <a  href="../index.php">home</a>
                        </li>
                        <li>
                            <a href="about.php">About us</a>
                        </li>
                        <li>
                            <a href="doctor.php">doctors</a>
                        </li>
                        <li>
                            <a href="departments.php">Medical departments</a>
                        </li>
                        <li>
                            <a href="contact.php">contact us</a>
                        </li>
                    </ul>
                </div>

                <?php include  "profile.php" ?>

                <div class="bar-icon" onclick="toggleMenu()">
                    <i class="fas fa-bars menu-icon"></i>
                </div>
                <div class="menu-items" id="menuItems">
                    <ul>
                        <li>
                            <a href="../index.php">Home</a>
                        </li>
                        <li>
                            <a href="../pages-en/about.php">About us</a>
                        </li>
                        <li>
                            <a href="../pages-en/products.php">doctors</a>
                        </li>
                        <li>
                            <a href="../pages-en/departments.php">Medical departments</a>
                        </li>
                        <li>
                            <a href="../pages-en/contact.php">contact us</a>
                        </li>
                    </ul>
                    <div class="icons" onclick="toggleMenu()">
                        <i id="closeicon" class="fas fa-times close-icon"></i>
                    </div>
                    <div class="mLinks">
                        <div class="drop">
                            <a href="##">
                                <img class="lang" src="../media/icons/world-lang.svg" alt="" />EN</a>
                            <span class="dropMenu">
                                <a class="dropbottom" href="../index-ar.php"><img class="lang"
                                        src="../media/icons/white-lang.svg" alt="" /> AR
                                </a>
                            </span>
                        </div>
                    </div>
                    <div class="log-lang">
                        <div class="login">
                            <img src="../media/icons/login.svg" alt="">
                            <span>
                                <a href="../pages-en/create-account.php">sign up</a>
                                <span>/</span>
                                <a href="../pages-en/registration.php">sign in</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header -->