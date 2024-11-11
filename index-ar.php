<?php
include 'admin/backend/Conn_db.php';

function getUserIP() {
    if (isset($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    } elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        return $_SERVER['REMOTE_ADDR'];
    }
}

$ip_address = getUserIP();
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'Direct';
$language = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
$page_visited = $_SERVER['REQUEST_URI'];

// Insert data into database
$sql = "INSERT INTO visitors (IPAddress, UserAgent, Referer, Language, PageVisited) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss", $ip_address, $user_agent, $referer, $language, $page_visited);

$stmt->execute();

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Logo In Browser -->
    <link rel="sortcut icon" type="image/jpg" href="./media/logos/logo browser.png" />
    <!-- Font Awesome Library -->
    <link rel="stylesheet" href="./CSS/all.min.css" />
    <!-- Render All Element Normally -->
    <link rel="stylesheet" href="./CSS/normalize.css" />
    <!-- Main Template CSS -->
    <link rel="stylesheet" href="./CSS/design.css" />
        <link rel="stylesheet" href="./CSS/ar-design.css" />
    <!-- Slider File CSS -->
    <link rel="stylesheet" href="./js/swiper-bundle.min.css" />
    <!-- SCSS File -->
    <link rel="stylesheet" href="./scss/style.css" />
    <!-- Main CSS AR -->
    <link rel="stylesheet" href="./css/ar-design.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>NQAHA</title>
</head>

<body>
<?php include  "./parts/Header_ar.php" ?>
    <!-- Start Home -->
    <div class="home">
        <div class="container">
            <div class="title">
                <span class="one btmAni25002">نحن هنا من أجلك</span>
                <span class="two btmAni20002">محترفون وودودون</span>
                <span class="three btmAni3000"><span class="sp">رعاية صحية</span> من أجلك</span>
                <p class="btmAni2500">جرّب الرحلة الطبية الآن</p>
                <a href="./pages-ar/trip.php" class="btn btmAni2000">
                    احجز الآن
                    <div class="image">
                        <img src="./media/icons/right-arrow.svg" alt="">
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- End Home -->
    <!-- Start Go UP -->
    <div class="goTop js-scroll fade-btm">
        <span>
            <i class="fa-solid fa-angle-up"></i>
        </span>
    </div>
    <!-- End Go Up -->
    <!-- Start Introduction -->
    <div class="intro">
        <div class="container">
            <div class="into js-scroll fade-btm">
                <div class="title">ليس فقط رعاية أفضل، بل تجربة أفضل</div>
                <p>
                    نحن نقدم رعاية طبية شاملة تهدف إلى تحسين صحتك 
                    وتعزيز تجربتك العامة. نهتم بكل تفصيل من رحلتك الصحية، 
                    بدءاً من الاستقبال.
                </p>
            </div>
            <div class="into js-scroll fade-btm">
                <div class="title">لأن صحتك تستحق الأفضل</div>
                <p>
                    نسعى لتقديم رعاية طبية استثنائية تركز على راحتك 
                    ورفاهيتك. يعمل فريقنا الطبي الم dedicated بكل جد 
                    لضمان حصولك على أفضل رعاية طبية ممكنة.
                </p>
            </div>
            <div class="into js-scroll fade-btm">
                <div class="title">نحن نهتم بصحتك وراحتك</div>
                <p>
                    في مركزنا الطبي، نهدف إلى توفير رعاية شاملة 
                    تضمن ليس فقط علاجك بل أيضاً راحتك ورفاهيتك. 
                    مع فريق من الأطباء والأخصائيين الم dedicated، 
                    نضمن لك تجربة رعاية صحية ممتازة.
                </p>
            </div>
        </div>
    </div>
    <!-- End Introduction -->
    <!-- Start About -->
    <div class="about">
        <div class="main-title">
            <span class="js-scroll fade-btm">معلومات عنا</span>
            <p class="js-scroll fade-top">
                نقدم الرعاية الصحية في الأوقات التي تناسبك
            </p>
        </div>
        <div class="container">
            <div class="image js-scroll fade-left">
                <img src="./media/about-home.png" alt="">
            </div>
            <div class="text">
                <p class="js-scroll fade-right">
                    تم تأسيس شركة قنوان لخدمات التسويق ذ.م.م في عام 2024 في عمان، المملكة الأردنية الهاشمية.
                    تمكنت الشركة من إنشاء شبكة صحية لخدمة المستفيدين في المملكة وخارجها.
                </p>
                <a href="./pages-ar/about.php" class="btn js-scroll fade-btm">
                    اقرأ المزيد
                    <div class="image">
                        <img src="./media/icons/right-arrow.svg" alt="">
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- End About -->
    <!-- Start Departments -->
    <div class="departments">
        <div class="main-title">
            <span class="js-scroll fade-btm">الأقسام</span>
            <p class="js-scroll fade-top">
                أقسام طبية متخصصة لتلبية احتياجاتك الصحية
            </p>
        </div>
        <div class="container">
            <div class="medicine">
                <div class="med js-scroll fade-top">
                    <img src="./media/internal.jpg" alt="">
                    <a href="./pages-en/departments.php">الطب الباطني</a>
                </div>
                <div class="med js-scroll fade-top">
                    <img src="./media/internal.jpg" alt="">
                    <a href="./pages-en/departments.php">الطب الباطني</a>
                </div>
                <div class="med js-scroll fade-top">
                    <img src="./media/internal.jpg" alt="">
                    <a href="./pages-en/departments.php">الطب الباطني</a>
                </div>
            </div>
            <a href="./pages-en/departments.php" class="btn js-scroll fade-btm">
                عرض المزيد
                <div class="image">
                    <img src="./media/icons/right-arrow-btn.svg" alt="">
                </div>
            </a>
        </div>
    </div>
    <!-- End Departments -->
    <!-- Start Works -->
    <div class="work-s">
        <div class="title js-scroll fade-btm">كيف يعمل نقاهة؟</div>
        <div class="container">
            <div class="w">
                <div class="r">
                    <div class="cr js-scroll fade-left">01</div>
                    <span>التسجيل</span>
                </div>
                <img class="js-scroll fade-btm" src="./media/aroow-work-one-ar.png" alt="">
                <div class="r">
                    <div class="cr js-scroll fade-top">02</div>
                    <span>تحديد موعد</span>
                </div>
                <img class="js-scroll fade-btm" src="./media/aroow-work-two-ar.png" alt="">
                <div class="r">
                    <div class="cr js-scroll fade-right">03</div>
                    <span>استشارة طبيب</span>
                </div>
            </div>
            <a href="./pages-en/trip.php" class="btn js-scroll fade-btm">
                عرض المزيد
                <div class="image">
                    <img src="./media/icons/right-arrow.svg" alt="">
                </div>
            </a>
        </div>
    </div>
    <!-- End Works -->
    <!-- Start Hospitals -->
    <div class="hospitals">
        <div class="main-title">
            <span class="js-scroll fade-btm">المستشفيات</span>
            <p class="js-scroll fade-top">
                مراكز الأمل والشفاء، حيث تلتقي قلوب الرحمة بأيدي المهارة
            </p>
        </div>
        <div class="container">
            <div class="hospital">
                <div class="prod js-scroll fade-left">
                    <img src="./media/host1.jpg" alt="" />
                    <div class="det">
                        <div class="title">مستشفى الجامعة الاردنية</div>
                        <div class="sub-tit">عمان</div>
                        <a href="./pages-ar/hospitals.php" class="btn js-scroll fade-btm">
                            عرض المزيد
                            <div class="image">
                                <img src="./media/icons/right-arrow.svg" alt="">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="prod js-scroll fade-left">
                    <img src="./media/host1.jpg" alt="" />
                    <div class="det">
                        <div class="title">مستشفى الجامعة الاردنية</div>
                        <div class="sub-tit">عمان</div>
                        <a href="./pages-ar/hospitals.php" class="btn js-scroll fade-btm">
                            عرض المزيد
                            <div class="image">
                                <img src="./media/icons/right-arrow.svg" alt="">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="prod js-scroll fade-left">
                    <img src="./media/host1.jpg" alt="" />
                    <div class="det">
                        <div class="title">مستشفى الجامعة الاردنية</div>
                        <div class="sub-tit">عمان</div>
                        <a href="./pages-ar/hospitals.php" class="btn js-scroll fade-btm">
                            عرض المزيد
                            <div class="image">
                                <img src="./media/icons/right-arrow.svg" alt="">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <a href="./pages-ar/hospitals.php" class="btn js-scroll fade-btm">
                عرض المزيد
                <div class="image">
                    <img src="./media/icons/right-arrow.svg" alt="">
                </div>
            </a>
        </div>
    </div>
    <!-- End Hospitals -->
    <!-- Start News -->
    <div class="news">
        <div class="main-title">
            <span class="js-scroll fade-btm">أحدث الأخبار</span>
            <p class="js-scroll fade-top">
                اكتشاف علمي يعد بتغيير عالم الطب
            </p>
        </div>
        <div class="container">
            <div class="section js-scroll fade-btm">
                <div class="box ads">
                    <div class="swiper adsSw">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="./media/news.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="./media/news.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="./media/news.jpg" alt="">
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
            <div class="ne">
                <div class="new js-scroll fade-btm">
                    <div class="top">
                        <img src="./media/nn.jpg" alt="">
                        <div class="date">
                            <span class="number">29</span>
                            <span>فبراير 2024</span>
                        </div>
                    </div>
                    <div class="bottom">
                        <div class="title">أحدث مدونة مع صورة بيانية</div>
                        <p>
                            لوريم إيبسوم هو نص شكلي يستخدم في صناعة الطباعة والتنضيد.
                            لوريم إيبسوم هو نص شكلي يستخدم في صناعة الطباعة والتنضيد.
                            لوريم إيبسوم هو نص شكلي يستخدم في صناعة الطباعة والتنضيد.
                        </p>
                    </div>
                </div>
                <div class="new js-scroll fade-btm">
                    <div class="top">
                        <img src="./media/nn.jpg" alt="">
                        <div class="date">
                            <span class="number">29</span>
                            <span>فبراير 2024</span>
                        </div>
                    </div>
                    <div class="bottom">
                        <div class="title">أحدث مدونة مع صورة بيانية</div>
                        <p>
                            لوريم إيبسوم هو نص شكلي يستخدم في صناعة الطباعة والتنضيد.
                            لوريم إيبسوم هو نص شكلي يستخدم في صناعة الطباعة والتنضيد.
                            لوريم إيبسوم هو نص شكلي يستخدم في صناعة الطباعة والتنضيد.
                        </p>
                    </div>
                </div>
                <div class="new js-scroll fade-btm">
                    <div class="top">
                        <img src="./media/nn.jpg" alt="">
                        <div class="date">
                            <span class="number">29</span>
                            <span>فبراير 2024</span>
                        </div>
                    </div>
                    <div class="bottom">
                        <div class="title">أحدث مدونة مع صورة بيانية</div>
                        <p>
                            لوريم إيبسوم هو نص شكلي يستخدم في صناعة الطباعة والتنضيد.
                            لوريم إيبسوم هو نص شكلي يستخدم في صناعة الطباعة والتنضيد.
                            لوريم إيبسوم هو نص شكلي يستخدم في صناعة الطباعة والتنضيد.
                        </p>
                    </div>
                </div>
                <div class="new js-scroll fade-btm">
                    <div class="top">
                        <img src="./media/nn.jpg" alt="">
                        <div class="date">
                            <span class="number">29</span>
                            <span>فبراير 2024</span>
                        </div>
                    </div>
                    <div class="bottom">
                        <div class="title">أحدث مدونة مع صورة بيانية</div>
                        <p>
                            لوريم إيبسوم هو نص شكلي يستخدم في صناعة الطباعة والتنضيد.
                            لوريم إيبسوم هو نص شكلي يستخدم في صناعة الطباعة والتنضيد.
                            لوريم إيبسوم هو نص شكلي يستخدم في صناعة الطباعة والتنضيد.
                        </p>
                    </div>
                </div>
            </div>
            <a href="./pages-ar/news.php" class="btn js-scroll fade-btm">
                عرض المزيد
                <div class="image">
                    <img src="./media/icons/right-arrow.svg" alt="">
                </div>
            </a>
        </div>
    </div>    
    <!-- End News -->
    <!-- Start Footer -->
    <div class="footer">
        <img class="back" src="./media/footer-back.svg" alt="">
        <div class="container">
            <div class="top">
                <div class="left">
                    <div class="logo">
                        <img src="./media/logos/logo-foooter.svg" alt="">
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
                                <img src="./media/icons/arrow-footer.svg" alt="">
                                <a href="./index.php">الرئيسية</a>
                            </li>
                            <li>
                                <img src="./media/icons/arrow-footer.svg" alt="">
                                <a href="./pages-en/about.php">معلومات عنا</a>
                            </li>
                            <li>
                                <img src="./media/icons/arrow-footer.svg" alt="">
                                <a href="./pages-en/doctor.php">الاطباء</a>
                            </li>
                            <li>
                                <img src="./media/icons/arrow-footer.svg" alt="">
                                <a href="./pages-en/departments.php">الاقسام الطبية</a>
                            </li>
                            <li>
                                <img src="./media/icons/arrow-footer.svg" alt="">
                                <a href="./pages-en/contact.php">اتصل بنا</a>
                            </li>
                        </ul>
                    </div>
                    <div class="contact-us">
                        <div class="title">اتصل بنا</div>
                        <ul>
                            <li>
                                <img src="./media/icons/location-footer.svg" alt="">
                                <a href="https://maps.app.goo.gl/3bH47JZtEmXNneqU6?g_st=iw">North Marka, Street Fuheis,
                                    عمان</a>
                            </li>
                            <li>
                                <img src="./media/icons/phone-footer.svg" alt="">
                                <a href="tel:+962 7 8109 1090">+962 7 8109 1090</a>
                            </li>
                            <li>
                                <img src="./media/icons/phone-footer.svg" alt="">
                                <a href="tel:0048665092088">0048665092088</a>
                            </li>
                            <li>
                                <img src="./media/icons/email-footer.svg" alt="">
                                <a href="mailto:fghz2014@gmail.com">fghz2014@gmail.com</a>
                            </li>
                        </ul>
                        <div class="so">
                            <a href="#">
                                <img src="./media/icons/facebook.svg" alt="">
                            </a>
                            <a href="#">
                                <img src="./media/icons/instagrem.svg" alt="">
                            </a>
                            <a
                                href="#">
                                <img src="./media/icons/twiter-footer.svg" alt="">
                            </a>
                            <a
                                href="#">
                                <img src="./media/icons/whatsapp.svg" alt="">
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
    <script src="./js/main.js"></script>
    <script src="./js/swiper-bundle.min.js"></script>
    <script src="./js/swiper.js"></script>
 
    <script src="./js/scroll.js"></script>
    <script src="./js/sc.js"></script>
    <!-- End JS Files -->
</body>

</html>