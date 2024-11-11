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
    <!-- Main CSS AR -->
    <link rel="stylesheet" href="../CSS/ar-design.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <title>Doctor Nqaha</title>
</head>

<body>
<?php include  "../parts/ar/Header.php" ?>

    <!-- Start Landing -->
    <div class="landing">
        <div class="container">
            <div class="title btmAni25002">الاطباء</div>
            <div class="sub-title btmAni20002">
                <span>الرئيسية / </span>
                <span class="super">الاطباء</span>
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
    <!-- Start Doctors -->
    <div class="doctor-page">
        <div class="container">
            <div class="centerBox">
                <div class="box workPage">
                    <div class="filtW">
                        <div class="swiper filterSw">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="filter active" data-filter="all">إظهار الكل</div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="filter" data-filter="general-medicine">الطب العام</div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="filter" data-filter="general-surgery">الجراحة العامة</div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="filter" data-filter="pediatrics">طب الأطفال</div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="filter" data-filter="internal-medicine">الطب الباطني</div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="filter" data-filter="cardiovasculaire">قسم القلب والأوعية الدموية</div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="filter" data-filter="oncology">علم الأورام</div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="filter" data-filter="neurology">علم الأعصاب</div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="filter" data-filter="bones-joints">العظام والمفاصل</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="depa">
                <a href="../pages-ar/doctor-profile.php" class="doctor">
                    <div class="doc js-scroll fade-top" data-category="general-medicine">
                        <img src="../media/doctor.jpg" alt="">
                    </div>
                    <div class="text js-scroll fade-btm">
                        <div class="name">Dr. Aimee Devlin</div>
                        <p>
                            Psychiatrist
                        </p>
                    </div>
                </a>
                <a href="../pages-ar/doctor-profile.php" class="doctor">
                    <div class="doc js-scroll fade-top" data-category="oncology">
                        <img src="../media/doctor.jpg" alt="">
                    </div>
                    <div class="text js-scroll fade-btm">
                        <div class="name">Dr. Aimee Devlin</div>
                        <p>
                            Psychiatrist
                        </p>
                    </div>
                </a>
                <a href="../pages-ar/doctor-profile.php" class="doctor">
                    <div class="doc js-scroll fade-top" data-category="pediatrics">
                        <img src="../media/doctor.jpg" alt="">
                    </div>
                    <div class="text js-scroll fade-btm">
                        <div class="name">Dr. Aimee Devlin</div>
                        <p>
                            Psychiatrist
                        </p>
                    </div>
                </a>
                <a href="../pages-ar/doctor-profile.php" class="doctor">
                    <div class="doc js-scroll fade-top" data-category="pediatrics">
                        <img src="../media/doctor.jpg" alt="">
                    </div>
                    <div class="text js-scroll fade-btm">
                        <div class="name">Dr. Aimee Devlin</div>
                        <p>
                            Psychiatrist
                        </p>
                    </div>
                </a>
                <a href="../pages-ar/doctor-profile.php" class="doctor">
                    <div class="doc js-scroll fade-top" data-category="cardiovascular">
                        <img src="../media/doctor.jpg" alt="">
                    </div>
                    <div class="text js-scroll fade-btm">
                        <div class="name">Dr. Aimee Devlin</div>
                        <p>
                            Psychiatrist
                        </p>
                    </div>
                </a>
                <a href="../pages-ar/doctor-profile.php" class="doctor">
                    <div class="doc js-scroll fade-top" data-category="cardiovascular">
                        <img src="../media/doctor.jpg" alt="">
                    </div>
                    <div class="text js-scroll fade-btm">
                        <div class="name">Dr. Aimee Devlin</div>
                        <p>
                            Psychiatrist
                        </p>
                    </div>
                </a>
                <a href="../pages-ar/doctor-profile.php" class="doctor">
                    <div class="doc js-scroll fade-top" data-category="neurology">
                        <img src="../media/doctor.jpg" alt="">
                    </div>
                    <div class="text js-scroll fade-btm">
                        <div class="name">Dr. Aimee Devlin</div>
                        <p>
                            Psychiatrist
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- End Doctors -->
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
                        للاختبار للختبار للاختبار للختبار للاختبار للختبار للاختبار للختبار
                    </p>
                </div>
                <div class="right">
                    <div class="helpful-link">
                        <div class="title">روابط مفيدة</div>
                        <ul>
                            <li>
                                <img src="../media/icons/arrow-footer.svg" alt="">
                                <a href="../index-ar.php">الرئيسية</a>
                            </li>
                            <li>
                                <img src="../media/icons/arrow-footer.svg" alt="">
                                <a href="../pages-ar/about.php">معلومات عنا</a>
                            </li>
                            <li>
                                <img src="../media/icons/arrow-footer.svg" alt="">
                                <a href="../pages-ar/doctor.php">الاطباء</a>
                            </li>
                            <li>
                                <img src="../media/icons/arrow-footer.svg" alt="">
                                <a href="../pages-ar/departments.php">الاقسام الطبية</a>
                            </li>
                            <li>
                                <img src="../media/icons/arrow-footer.svg" alt="">
                                <a href="../pages-ar/contact.php">اتصل بنا</a>
                            </li>
                        </ul>
                    </div>
                    <div class="contact-us">
                        <div class="title">اتصل بنا</div>
                        <ul>
                            <li>
                                <img src="../media/icons/location-footer.svg" alt="">
                                <a href="https://maps.app.goo.gl/3bH47JZtEmXNneqU6?g_st=iw">North Marka, Street Fuheis,
                                    عمان</a>
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
                            <a href="#">
                                <img src="../media/icons/twiter-footer.svg" alt="">
                            </a>
                            <a href="#">
                                <img src="../media/icons/whatsapp.svg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom">
            <p>
                حقوق التأليف والنشر تصميم © NQAHA. جميع الحقوق محفوظة
                تم التطوير بواسطة <a href="https://petra-ms.com/"> Petra MS</a>
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
    <script src="../js/doctor-fillter.js"></script>
    <!-- End JS Files -->
</body>

</html>