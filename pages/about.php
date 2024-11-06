<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Logo In Browser -->
    <link rel="sortcut icon" type="image/jpg" href="../media/logos/logo Browser.svg" />
    <!-- Font Awesome Library -->
    <link rel="stylesheet" href="../CSS/all.min.css" />
    <!-- Render All Element Normally -->
    <link rel="stylesheet" href="../CSS/normalize.css" />
    <!-- Main Template CSS -->
    <link rel="stylesheet" href="../CSS/design.css" />
    <!-- Slider File CSS -->
    <link rel="stylesheet" href="../js/swiper-bundle.min.css" />
    <!-- SCSS File -->
    <link rel="stylesheet" href="../CSS/style.css" />
    <title>AlBaseel Properties About</title>
</head>

<body>
    <!-- Start Nav -->
    <div class="nav">
        <div class="container">
            <div class="logo">
                <img src="../media/logos/./logo.svg" alt="" />
            </div>
            <div class="navigation">
                <ul>
                    <li>
                        <a href="../index.php">Home</a>
                    </li>
                    <li class="active">
                        <a class="active" href="../pages/about.php">about us</a>
                    </li>
                    <li>
                        <a href="../pages/services.php">services</a>
                    </li>
                    <li>
                        <a href="../pages/project.php">Project</a>
                    </li>
                    <li>
                        <a href="../pages/contact.php">contact us</a>
                    </li>
                </ul>
            </div>
            <div class="mLinks">
                <a href="tel:+962 79 925 6777">
                    <img src="../media/icons/mes.svg" alt="" />
                    <div class="ll">
                        <span>call anytime</span>
                        <span>+962 7 9925 6777</span>
                    </div>
                </a>
                <div class="drop">
                    <a href="##">
                        <img class="lang" src="../media/icons/world.svg" alt="" />EN<img class="drop-icon"
                            src="../media/icons/black-arrow.svg" alt="" /></a>
                    <span class="dropMenu">
                        <a href="../ar-pages/about.php"><img class="lang" src="../media/icons/world.svg" alt="" /> AR
                        </a>
                    </span>
                </div>
            </div>
            <div class="bar-icon">
                <i class="fa-solid fa-bars menu-icon"></i>
            </div>
            <div class="menu-items">
                <ul>
                    <li>
                        <a href="../index.php">Home</a>
                    </li>
                    <li>
                        <a href="../pages/about.php">about us</a>
                    </li>
                    <li>
                        <a href="../pages/services.php">services</a>
                    </li>
                    <li>
                        <a href="../pages/project.php">Project</a>
                    </li>
                    <li>
                        <a href="../pages/contact.php">contact us</a>
                    </li>
                </ul>
                <div class="mLinks">
                    <div class="drop">
                        <a href="##">
                            <img class="lang" src="../media/icons/white-worle.svg" alt="" />EN<img class="drop-icon"
                                src="../media/icons/white-arrow.svg" alt="" /></a>
                        <span class="dropMenu">
                            <a href="../ar-pages/about.php"><img class="lang" src="../media/icons/white-worle.svg" alt="" /> AR
                            </a>
                        </span>
                    </div>
                </div>
                <div class="icons">
                    <i class="fa-solid fa-xmark close-icon"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- End Nav --> 
    <!-- Start Landing About -->
    <div class="landing-about">
        <div class="container">
            <div class="landing-title">
                <div class="super btmAni25002">Who We Are</div>
                <div class="sub btmAni20002">HOME - <span>ABOUT US</span></div>
            </div>
        </div>
    </div>
    <!-- End Landing About -->
    <!-- Start Bar -->
    <div class="bar"></div>
    <!-- End Bar -->
    <!-- Start Go UP -->
    <div class="goTop">
        <span>
            <i class="fa-solid fa-angle-up"></i>
        </span>
    </div>
    <!-- End Go Up -->
    <!-- Start About Page -->

    <?php
        require '../backend/db_connection.php';

        
        $sql = "SELECT * FROM about_us LIMIT 1";
        $result = $conn->query($sql);
        $about_us = $result->fetch_assoc();
      ?>

    <div class="about-page">
        <div class="container">
            <div class="info">
                <div class="title js-scroll fade-top">about al-baseel</div>
                <p class="js-scroll fade-btm">
                    <?php echo isset($about_us['about_en']) ? $about_us['about_en'] : ''; ?>
                </p>
            </div>
            <div class="info">
                <div class="title js-scroll fade-top">Our vision</div>
                <p class="js-scroll fade-btm">
                    Bassel's vision revolves around selecting promising investment 
                    properties, developing them, and adding value, all through a comprehensive 
                    range of services across every stage of development. This leads to the 
                    creation of a final real estate product that meets various customer aspirations, 
                    catering to their diverse desires and interests. We aim to provide synchronized 
                    investment solutions aligned with the company's progressive vision.
                </p>
            </div>
            <div class="info">
                <div class="title js-scroll fade-top">Our mission</div>
                <p class="js-scroll fade-btm">
                    The Bassel Company aims to enhance the Jordanian real estate sector and contribute 
                    top-tier real estate products to the local market. We strive to provide integrated 
                    real estate services that exceed the expectations of our clients, whom we prioritize 
                    preserving. We seek to foster a partnership concept between the company and its clients, 
                    benefiting both parties and improving our workforce's capabilities, thereby enhancing our 
                    services and expanding our distinguished projects to serve a broader clientele.
                </p>
            </div>
        </div>
    </div>
    <!-- End About Page -->
    <!-- Start Footer -->
    <div class="footer">
        <div class="container">
            <div class="top">
                <div class="left">
                    <div class="logo">
                        <img src="../media/logos/white-logo.svg" alt="">
                    </div>
                    <p>
                        Al-Baseel properties Management and Development Company specializes in land development, housing construction, and installment sales
                    </p>
                </div>
                <div class="right">
                    <div class="helpful-link">
                        <div class="title">helpful link</div>
                        <ul>
                            <li>
                                <img src="../media/icons/footer-arrow.svg" alt="">
                                <a href="../index.php">Home Page</a>
                            </li>
                            <li>
                                <img src="../media/icons/footer-arrow.svg" alt="">
                                <a href="../pages/about.php">about us</a>
                            </li>
                            <li>
                                <img src="../media/icons/footer-arrow.svg" alt="">
                                <a href="../pages/services.php">services</a>
                            </li>
                            <li>
                                <img src="../media/icons/footer-arrow.svg" alt="">
                                <a href="../pages/project.php">Project</a>
                            </li>
                            <li>
                                <img src="../media/icons/footer-arrow.svg" alt="">
                                <a href="../pages/contact.php">contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="contact-us">
                        <div class="title">Contact US</div>
                        <ul>
                            <li>
                                <img src="../media/icons/location.svg" alt="">
                                <a href="https://maps.app.goo.gl/MA7FCDCvLxqzHk2U7">Wasfi Al Tal Street, AL-Waha Circle, Amman, Jordan</a>
                            </li>
                            <li>
                                <img src="../media/icons/phone.svg" alt="">
                                <a href="tel:+962 79 925 6777">+962 79 925 6777</a>
                            </li>
                            <li>
                                <img src="../media/icons/email.svg" alt="">
                                <a href="mailto:info@albaseel.com">info@albaseel.com</a>
                            </li>
                        </ul>
                        <div class="so">
                            <a href="https://web.facebook.com/baseel.Real.Estate.Co/">
                                <img src="../media/icons/face-footer.svg" alt="">
                            </a>
                            <a href="https://www.instagram.com/albaseelrealestate/">
                                <img src="../media/icons/footer-insta.svg" alt="">
                            </a>
                            <a href="https://api.whatsapp.com/send/?phone=%2B962795000027&text&type=phone_number&app_absent=0">
                                <img src="../media/icons/footer-whats.svg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom">
            <p>
                Copyright Design © Al-BASEEL 2023. All right reserved
                Developed by <a href="https://petra-ms.com/"> Petra MS</a>
            </p>
        </div>
    </div>
    <!-- End Footer -->
    <!-- Start JS Files -->
    <script src="../js/counter.js"></script>
    <script src="../js/scroll.js"></script>
    <script src="../js/swiper-bundle.min.js"></script>
    <script src="../js/swiper.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/sc.js"></script>
    <!-- End JS Files -->
</body>

</html>