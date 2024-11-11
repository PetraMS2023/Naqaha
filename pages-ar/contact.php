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
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Contact Nqaha</title>
</head>

<body>
<?php include  "../parts/ar/Header.php" ?>

    <!-- Start Landing -->
    <div class="landing">
        <div class="container">
            <div class="title btmAni25002">اتصل بنا</div>
            <div class="sub-title btmAni20002">
                <span>الرئيسية / </span>
                <span class="super">اتصل بنا</span>
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
    <!-- Start Contact -->
    <div class="contact-page">
        <div class="container js-scroll fade-btm">
            <div class="contact-section">
                <div class="left">
                    <div class="cont">
                        <div class="info">
                            <i class="fa-regular fa-envelope"></i>
                            <a href="mailto:fghz2014@gmail.com">fghz2014@gmail.com</a>
                        </div>
                        <div class="info">
                            <i class="fa-solid fa-phone-volume"></i>
                            <a href="tel:+962 78 5112 227">+962 78 5112 227</a>
                        </div>
                        <div class="info">
                            <i class="fa-solid fa-location-dot"></i>
                            <a href="https://maps.app.goo.gl/ELWCDYPLhVCtUpST8">Amman -jordan-First circle</a>
                        </div>
                    </div>
                    <div class="location-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3385.38343838272!2d35.92032627562885!3d31.950492874019986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzHCsDU3JzAxLjgiTiAzNcKwNTUnMjIuNCJF!5e0!3m2!1sen!2sjo!4v1711870682002!5m2!1sen!2sjo"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="right">
                    <form method="POST" action="../backend/insert_contact.php">
                        <label for="fullName">الاسم الكامل :</label>
                        <input type="text" name="full_name" id="fullName" required>
                        <label for="email">البريد الالكتروني :</label>
                        <input type="email" name="email" id="email" required>
                        <label for="message">رسالة :</label>
                        <textarea name="message" id="message"></textarea>
                        <button type="submit">ارسال</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->
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
                        للاختبار للختبار  للاختبار للختبار  للاختبار للختبار  للاختبار للختبار 
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
    <!-- End JS Files -->
</body>

</html>