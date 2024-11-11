<?php
include 'admin/backend/Conn_db.php';

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT NewsID, NewsTopicArabic, NewsTopicEnglish, NewsContentEnglish, NewsContentArabic, NewsDate, NewsImage FROM news";
$result = $conn->query($sql);


function getUserIP()
{
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
    <!-- Slider File CSS -->
    <link rel="stylesheet" href="./js/swiper-bundle.min.css" />
    <!-- SCSS File -->
    <link rel="stylesheet" href="./scss/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>NQAHA</title>
</head>

<body>
    <?php include  "./parts/Header_en.php" ?>

    <!-- Start Home -->
    <div class="home">
        <div class="container">
            <div class="title">
                <span class="one btmAni25002">We Are Here For You</span>
                <span class="two btmAni20002">Professional and Friendly</span>
                <span class="three btmAni3000"><span class="sp">Health Care</span>For You </span>
                <p class="btmAni2500">Try the medical flight now</p>
                <a href="./pages-en/trip.php" class="btn btmAni2000">
                    book now
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
                <div class="title">Not Just Better Care, But A Better Experience</div>
                <p>
                    We provide comprehensive medical care
                    that aims not only to improve your health but also
                    to enhance your overall experience. We pay attention
                    to every detail of your health journey, from reception
                </p>
            </div>
            <div class="into js-scroll fade-btm">
                <div class="title">Because Your Health Deserves the Best</div>
                <p>
                    We strive to offer exceptional medical care that
                    focuses on your comfort and well-being. Our dedicated
                    medical team works tirelessly to ensure you receive the best possible medical
                </p>
            </div>
            <div class="into js-scroll fade-btm">
                <div class="title">We Care About Your Health and Comfort</div>
                <p>
                    At our medical center, we aim to provide holistic care
                    that ensures not only your treatment but also your comfort and
                    well-being. With a team of dedicated doctors and specialists,
                    we guarantee you an excellent healthcare experience
                </p>
            </div>
        </div>
    </div>
    <!-- End Introduction -->
    <!-- Start About -->
    <div class="about">
        <div class="main-title">
            <span class="js-scroll fade-btm">about us</span>
            <p class="js-scroll fade-top">
                We provide health care at times that suit you
            </p>
        </div>
        <div class="container">
            <div class="image js-scroll fade-left">
                <img src="./media/about-home.png" alt="">
            </div>
            <div class="text">
                <p class="js-scroll fade-right">
                    nqaha Marketing Services LLC was established in 2024 in Amman, the Hashemite Kingdom of Jordan.
                    The company was able to create a health network to serve beneficiaries in the Kingdom and abroad
                </p>
                <a href="./pages-en/about.php" class="btn js-scroll fade-btm">
                    Read More
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
            <span class="js-scroll fade-btm">departments</span>
            <p class="js-scroll fade-top">
                Specialized medical departments for your health needs
            </p>
        </div>
        <div class="container">
            <div class="medicine">
                <div class="med js-scroll fade-top">
                    <img src="./media/internal.jpg" alt="">
                    <a href="./pages-en/departments.php">Internal Medicine</a>
                </div>
                <div class="med js-scroll fade-top">
                    <img src="./media/internal.jpg" alt="">
                    <a href="./pages-en/departments.php">Internal Medicine</a>
                </div>
                <div class="med js-scroll fade-top">
                    <img src="./media/internal.jpg" alt="">
                    <a href="./pages-en/departments.php">Internal Medicine</a>
                </div>
            </div>
            <a href="./pages-en/departments.php" class="btn js-scroll fade-btm">
                show more
                <div class="image">
                    <img src="./media/icons/right-arrow-btn.svg" alt="">
                </div>
            </a>
        </div>
    </div>
    <!-- End Departments -->
    <!-- Start Works -->
    <div class="work-s">
        <div class="title js-scroll fade-btm">How Nqaha works ?</div>
        <div class="container">
            <div class="w">
                <div class="r">
                    <div class="cr js-scroll fade-left">01</div>
                    <span>registration</span>
                </div>
                <img class="js-scroll fade-btm" src="./media/aroow-work-one.png" alt="">
                <div class="r">
                    <div class="cr js-scroll fade-top">02</div>
                    <span>make appointment</span>
                </div>
                <img class="js-scroll fade-btm" src="./media/aroow-work-two.png" alt="">
                <div class="r">
                    <div class="cr js-scroll fade-right">03</div>
                    <span>consulting a doctor</span>
                </div>
            </div>
            <a href="./pages-en/trip.php" class="btn js-scroll fade-btm">
                show more
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
            <span class="js-scroll fade-btm">hospitals</span>
            <p class="js-scroll fade-top">
                Centers of hope and healing, where hearts of compassion meet hands of skill
            </p>
        </div>
        <div class="container">
            <div class="hospital">
                <div class="prod js-scroll fade-left">
                    <img src="./media/host1.jpg" alt="" />
                    <div class="det">
                        <div class="title">Jordan University Hospital</div>
                        <div class="sub-tit">Amman</div>
                        <a href="./pages-en/hospitals.php" class="btn js-scroll fade-btm">
                            show more
                            <div class="image">
                                <img src="./media/icons/right-arrow.svg" alt="">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <a href="./pages-en/hospitals.php" class="btn js-scroll fade-btm">
                show More
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
            <span class="js-scroll fade-btm">lates news</span>
            <p class="js-scroll fade-top">
                A scientific discovery that promises to change the world of medicine
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
                <?php while ($news = $result->fetch_assoc()) : ?>
                    <div class="new js-scroll fade-btm">
                <div class="top">
                        <img src="<?php echo htmlspecialchars(str_replace('../../', '../', $news['NewsImage'])); ?>" alt="">
                        <div class="date">
                            <span class="number">
                            <?php echo htmlspecialchars($news['NewsDate']); ?>
                            </span>
                        </div>
                    </div>
                    <div class="bottom">
                        <div class="title">
                        <?php echo htmlspecialchars($news['NewsTopicEnglish']); ?>
                        </div>
                        <p>
                        <?php echo htmlspecialchars($news['NewsContentEnglish']); ?>
                        </p>
                    </div>
</div>
                <?php endwhile; ?>


                </div>
            </div>
            <a href="./pages-en/news.php" class="btn js-scroll fade-btm">
                Show More
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
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                </div>
                <div class="right">
                    <div class="helpful-link">
                        <div class="title">helpful link</div>
                        <ul>
                            <li>
                                <img src="./media/icons/arrow-footer.svg" alt="">
                                <a href="./index.php">Home</a>
                            </li>
                            <li>
                                <img src="./media/icons/arrow-footer.svg" alt="">
                                <a href="./pages-en/about.php">about us</a>
                            </li>
                            <li>
                                <img src="./media/icons/arrow-footer.svg" alt="">
                                <a href="./pages-en/doctor.php">doctor profile</a>
                            </li>
                            <li>
                                <img src="./media/icons/arrow-footer.svg" alt="">
                                <a href="./pages-en/departments.php">Medical departments</a>
                            </li>
                            <li>
                                <img src="./media/icons/arrow-footer.svg" alt="">
                                <a href="./pages-en/contact.php">contact us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="contact-us">
                        <div class="title">Contact US</div>
                        <ul>
                            <li>
                                <img src="./media/icons/location-footer.svg" alt="">
                                <a href="https://maps.app.goo.gl/3bH47JZtEmXNneqU6?g_st=iw">North Marka, Street Fuheis,
                                    Amman</a>
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
                            <a href="#">
                                <img src="./media/icons/twiter-footer.svg" alt="">
                            </a>
                            <a href="#">
                                <img src="./media/icons/whatsapp.svg" alt="">
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
    <script src="./js/main.js"></script>
    <script src="./js/swiper-bundle.min.js"></script>
    <script src="./js/swiper.js"></script>
    <script src="./js/scroll.js"></script>
    <script src="./js/sc.js"></script>
    <!-- End JS Files -->
</body>

</html>