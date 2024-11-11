<!DOCTYPE html>
<html lang="en">

<head>
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
    <title>Department Nqaha</title>
</head>

<body>
    <?php include  "../parts/en/Header.php";
    include '../admin/backend/Conn_db.php';
    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $sql = "SELECT DepartmentID, DepartmentNameEnglish, DepartmentNameArabic, CategoryID, SubcategoryID, DepartmentImage FROM departments";
    $result = $conn->query($sql);
    ?>


    <!-- Start Landing -->
    <div class="landing">
        <div class="container">
            <div class="title btmAni25002">Medical departments</div>
            <div class="sub-title btmAni20002">
                <span>Home / </span>
                <span class="super">Medical departments</span>
            </div>
        </div>
    </div>
    <!-- End Landing -->
    <!-- Start Go UP -->
    <div class="goTop js-scroll fade-btm">
        <span>
            <i class="fa-solid fa-angle-up"></i>
        </span>
    </div>
    <!-- End Go Up -->
    <!-- Start Departments -->
    <div class="departments-page">
        <div class="container">
            <div class="centerBox">
                <div class="box workPage">
                    <div class="filtW">
                        <div class="swiper filterSw">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="filter active" data-filter="all">Show All</div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="filter" data-filter="general-medicine">General Medicine</div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="filter" data-filter="general-surgery">General Surgery</div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="filter" data-filter="pediatrics">Pediatrics</div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="filter" data-filter="internal-medicine">Internal Medicine</div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="filter" data-filter="cardiovascular">Cardiovascular Department</div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="filter" data-filter="oncology">Oncology</div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="filter" data-filter="neurology">Neurology</div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="filter" data-filter="bones-joints">Bones and Joints</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dep">
                <?php while ($department = $result->fetch_assoc()) : ?>
                    <a href="./internal-medicine.php" class="new js-scroll fade-btm" data-category="general-medicine">
                        <div class="top">
                            <img src="<?php echo htmlspecialchars(str_replace('../../', '../', $department['DepartmentImage'])); ?>" alt="">
                        </div>
                        <div class="bottom">
                            <div class="title">
                                <?php echo htmlspecialchars($department['DepartmentNameEnglish']); ?>
                            </div>
                        </div>
                    </a>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
    <!-- End Departments -->
    <!-- Start Footer -->
    <div class="footer">
        <img class="back" src="../media/footer-back.svg" alt="">
        <div class="container">
            <div class="top">
                <div class="left">
                    <div class="logo">
                        <img src="../media/logos/logo-foooter.svg" alt="">
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                </div>
                <div class="right">
                    <div class="helpful-link">
                        <div class="title">helpful link</div>
                        <ul>
                            <li>
                                <img src="../media/icons/arrow-footer.svg" alt="">
                                <a href="../index.php">Home</a>
                            </li>
                            <li>
                                <img src="../media/icons/arrow-footer.svg" alt="">
                                <a href="../pages-en/about.php">about us</a>
                            </li>
                            <li>
                                <img src="../media/icons/arrow-footer.svg" alt="">
                                <a href="../pages-en/doctor.php">doctors</a>
                            </li>
                            <li>
                                <img src="../media/icons/arrow-footer.svg" alt="">
                                <a href="../pages-en/departments.php">Medical departments</a>
                            </li>
                            <li>
                                <img src="../media/icons/arrow-footer.svg" alt="">
                                <a href="../pages-en/contact.php">contact us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="contact-us">
                        <div class="title">Contact US</div>
                        <ul>
                            <li>
                                <img src="../media/icons/location-footer.svg" alt="">
                                <a href="https://maps.app.goo.gl/3bH47JZtEmXNneqU6?g_st=iw">North Marka, Street Fuheis,
                                    Amman</a>
                            </li>
                            <li>
                                <img src="../media/icons/phone-footer.svg" alt="">
                                <a href="tel:+962 7 8109 1090">+962 7 8109 1090</a>
                            </li>
                            <li>
                                <img src="../media/icons/phone-footer.svg" alt="">
                                <a href="tel:0048665092088">0048665092088</a>
                            </li>
                            <li>
                                <img src="../media/icons/email-footer.svg" alt="">
                                <a href="mailto:fghz2014@gmail.com">fghz2014@gmail.com</a>
                            </li>
                        </ul>
                        <div class="so">
                            <a href="#">
                                <img src="../media/icons/facebook.svg" alt="">
                            </a>
                            <a href="#">
                                <img src="../media/icons/instagrem.svg" alt="">
                            </a>
                            <a
                                href="#">
                                <img src="../media/icons/twiter-footer.svg" alt="">
                            </a>
                            <a
                                href="#">
                                <img src="../media/icons/whatsapp.svg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom">
            <p>
                Copyright Design © Nqaha. All right reserved
                Developed by <a href="https://petra-ms.com/"> Petra MS</a>
            </p>
        </div>
    </div>
    <!-- End Footer -->
    <!-- Start JS Files -->
    <script src="../js/main.js"></script>
    <script src="../js/swiper-bundle.min.js"></script>
    <script src="../js/swiper.js"></script>

    <script src="../js/scroll.js"></script>
    <script src="../js/sc.js"></script>
    <script src="../js/filters.js"></script>
    <!-- End JS Files -->
</body>

</html>