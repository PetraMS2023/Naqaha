    <!-- Start Header -->
    <div class="header">
        <div class="container">
            <div class="top">
                <div class="logo">
                    <img src="./media/logos/logo-header-ar.png" alt="">
                </div>
                <div class="search">
                    <input type="text" name="" id="" placeholder="بحث">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div>
            <div class="bottom">
                <div class="nav">
                    <ul>
                        <li>
                            <a href="./index-ar.php">الرئيسية</a>
                        </li>
                        <li>
                            <a href="./pages-ar/about.php">معلومات عنا</a>
                        </li>
                        <li>
                            <a href="./pages-ar/doctor.php">الاطباء</a>
                        </li>
                        <li>
                            <a href="./pages-ar/departments.php">الاقسام الطبية</a>
                        </li>
                        <li>
                            <a href="./pages-ar/contact.php">اتصل بنا</a>
                        </li>
                    </ul>
                </div>
                <?php include  "parts/profile2.php" ?>

                <div class="bar-icon" onclick="toggleMenu()">
                    <i class="fas fa-bars menu-icon"></i>
                </div>
                <div class="menu-items" id="menuItems">
                    <ul>
                        <li>
                            <a href="./index-ar.php">الرئيسية</a>
                        </li>
                        <li>
                            <a href="./pages-ar/about.php">معلومات عنا</a>
                        </li>
                        <li>
                            <a href="./pages-ar/products.php">الاطباء</a>
                        </li>
                        <li>
                            <a href="./pages-ar/departments.php">الاقسام الطبية</a>
                        </li>
                        <li>
                            <a href="./pages-ar/contact.php">اتصل بنا</a>
                        </li>
                    </ul>
                    <div class="icons" onclick="toggleMenu()">
                        <i id="closeicon" class="fas fa-times close-icon"></i>
                    </div>
                    <div class="mLinks">
                        <div class="drop">
                            <a href="##">
                                <img class="lang" src="./media/icons/world-lang.svg" alt="" />AR</a>
                            <span class="dropMenu">
                                <a class="dropbottom" href="./index.php"><img class="lang"
                                        src="./media/icons/white-lang.svg" alt="" /> EN
                                </a>
                            </span>
                        </div>
                    </div>
                    <div class="log-lang">
                        <div class="login">
                            <img src="./media/icons/login.svg" alt="">
                            <span>
                                <a href="./pages-en/create-account.php">انشاء حساب</a>
                                <span>/</span>
                                <a href="./pages-en/registration.php">تسجيل الدخول</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header -->