<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Logo In Browser -->
    <link rel="sortcut icon" type="image/jpg" href="./media/logos/logo Browser.svg" />
    <!-- Font Awesome Library -->
    <link rel="stylesheet" href="./CSS/all.min.css" />
    <!-- Render All Element Normally -->
    <link rel="stylesheet" href="./CSS/normalize.css" />
    <!-- Main Template CSS -->
    <link rel="stylesheet" href="./CSS/design.css" />
    <!-- Slider File CSS -->
    <link rel="stylesheet" href="./js/swiper-bundle.min.css" />
    <!-- SCSS File -->
    <link rel="stylesheet" href="./CSS/style.css" />
    <title>AlBaseel Properties</title>
</head>

<body>
    <!-- Start Nav -->
    <div class="nav">
        <div class="container">
            <div class="logo">
                <img src="./media/logos/./logo.svg" alt="" />
            </div>
            <div class="navigation">
                <ul>
                    <li class="active">
                        <a class="active" href="./index.php">Home</a>
                    </li>
                    <li>
                        <a href="./pages/about.php">about us</a>
                    </li>
                    <li>
                        <a href="./pages/services.php">services</a>
                    </li>
                    <li>
                        <a href="./pages/project.php">Project</a>
                    </li>
                    <li>
                        <a href="./pages/contact.php">contact us</a>
                    </li>
                </ul>
            </div>
            <div class="mLinks">
                <a href="tel:+962 7 9925 6777">
                    <img src="./media/icons/mes.svg" alt="" />
                    <div class="ll">
                        <span>call anytime</span>
                        <span>+962 7 9925 67777</span>
                    </div>
                </a>
                <div class="drop">
                    <a href="##">
                        <img class="lang" src="./media/icons/world.svg" alt="" />EN<img class="drop-icon"
                            src="./media/icons/black-arrow.svg" alt="" /></a>
                    <span class="dropMenu">
                        <a href="./index.ar.php"><img class="lang" src="./media/icons/world.svg" alt="" /> AR
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
                        <a href="./index.php">Home</a>
                    </li>
                    <li>
                        <a href="./pages/about.php">about us</a>
                    </li>
                    <li>
                        <a href="./pages/services.php">services</a>
                    </li>
                    <li>
                        <a href="./pages/project.php">Project</a>
                    </li>
                    <li>
                        <a href="./pages/contact.php">contact us</a>
                    </li>
                </ul>
                <div class="mLinks">
                    <div class="drop">
                        <a href="##">
                            <img class="lang" src="./media/icons/white-worle.svg" alt="" />EN<img class="drop-icon"
                                src="./media/icons/white-arrow.svg" alt="" /></a>
                        <span class="dropMenu">
                            <a href="./index.ar.php"><img class="lang" src="./media/icons/white-worle.svg" alt="" /> AR
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
    <!-- Start Slider -->
    <div class="home">

        <?php
        require './backend/db_connection.php';


        $sql = "SELECT * FROM slider_images";
        $result = $conn->query($sql);
        ?>

        <div class="swInner">
            <div class="swiper mySwiper2">
                <div class="swiper-wrapper">
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<div class='swiper-slide'>";
                            echo "<img src='" . $row['image_path'] . "' alt='Slider Image'>";
                            echo "</div>";
                        }
                    } else {
                        echo "<p>لا توجد صور متاحة حاليا.</p>";
                    }
                    ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div class="text">
            <div class="title btmAni25002">
                Al baseel
                <span>properties</span>
            </div>
            <p>
                <span class="btmAni20002">Properties development</span>
                <span class="btmAni3000">Residential lands</span>
                <span class="btmAni2500">Investment landst</span>
            </p>
        </div>
        <div class="next">
            <span>
                <svg viewBox="0 0 21 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M-1.53775e-07 1.75899C-8.59591e-08 0.983257 0.844905 0.502919 1.51148 0.899692L19.5564 11.6407C20.2077 12.0284 20.2077 12.9716 19.5564 13.3593L1.51148 24.1003C0.844904 24.4971 -2.09961e-06 24.0167 -2.03179e-06 23.241L-1.53775e-07 1.75899Z"
                        fill="#007DC2" />
                </svg>
            </span>
        </div>
        <div class="prev">
            <span>
                <svg viewBox="0 0 21 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path id="Arrow 1 (Stroke)" fill-rule="evenodd" clip-rule="evenodd"
                        d="M21 23.241C21 24.0167 20.1551 24.4971 19.4885 24.1003L1.44361 13.3593C0.792258 12.9716 0.792257 12.0284 1.44361 11.6407L19.4885 0.899694C20.1551 0.502922 21 0.983259 21 1.75899L21 23.241Z"
                        fill="#007DC2" />
                </svg>
            </span>
        </div>
    </div>
    </div>
    <!-- End Slider -->
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
    <!-- Start About -->
    <div class="about">
        <div class="main-title">
            <span class="js-scroll fade-top">About Us</span>
            <p class="js-scroll fade-btm">Who We Are</p>
        </div>
        <div class="container">
            <div class="left js-scroll fade-right">
                <p>
                    The AlBaseel Properties Investment and Development Company was
                    established in 2013 in the Jordanian capital, Amman, as part of a
                    vision to enhance the Jordanian real estate sector and provide real
                    estate investment solutions. It operates with a qualified team to
                    achieve a robust record of diverse development projects, attract
                    local and regional partners, and achieve optimal returns for clients
                    and customers.
                </p>
                <a class="btn" href="./pages/about.php">Read More</a>
            </div>
            <div class="right js-scroll fade-left">
                <div class="image">
                    <img src="./media/icons/about-logo.svg" alt="" />
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->
    <!-- Start Services -->
    <div class="services">
        <div class="main-title">
            <span class="js-scroll fade-top">Services</span>
            <p class="js-scroll fade-btm">What We Do</p>
        </div>
        <div class="container">
            <div class="left js-scroll fade-right">
                <div class="sr">
                    <div class="serv">
                        <div class="title">Real Estate Development</div>
                        <p>
                            We provide services to enhance and develop residential and
                            investment properties, to achieve added value and improve
                            quality of living.
                        </p>
                    </div>
                    <div class="serv">
                        <div class="title">Financing and Facilitating Land Sales</div>
                        <p>
                            We offer streamlined financing solutions and assist in land
                            sales processes, facilitating economic development and growth
                        </p>
                    </div>
                </div>
                <a class="btn" href="./pages/services.php">Read More</a>
            </div>
            <div class="right js-scroll fade-left">
                <div class="image">
                    <img src="./media/services.jpg" alt="" />
                </div>
            </div>
        </div>
    </div>
    <!-- End Services -->
    <!-- Start Project -->

    <?php
    require './backend/db_connection.php';


    $sql = "SELECT projects.id, projects.project_name, project_images.image_path 
            FROM projects 
            LEFT JOIN project_images 
            ON projects.id = project_images.project_id 
            AND project_images.image_type = 'before' 
            GROUP BY projects.id 
            LIMIT 6";

    $result = $conn->query($sql);
    ?>

    <div class="project">
        <div class="main-title">
            <span class="js-scroll fade-top">PROJECT</span>
            <p class="js-scroll fade-btm">See What We're Working On</p>
        </div>
        <div class="container">
            <div class="port js-scroll fade-top">
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="projects js-scroll fade-right">';
                        echo '<img src="' . $row['image_path'] . '" alt="' . $row['project_name'] . '">';
                        echo '<a class="details-link" href="./pages/Progect_Page.php?id=' . $row['id'] . '">details</a>';
                        echo '</div>';
                    }
                } else {
                    echo '<p>لا توجد مشاريع متاحة حاليا.</p>';
                }
                ?>
            </div>
            <a class="btn" href="./pages/project.php">Show More</a>
        </div>
    </div>
    <!-- End Project -->
    <!-- Strat Stattistics -->

    <?php
    require './backend/db_connection.php';


    $sql = "SELECT * FROM statistics LIMIT 1";
    $result = $conn->query($sql);
    $statistics = $result->fetch_assoc();
    ?>

    <div class="statistics">
        <div class="main-title">
            <span class="js-scroll fade-top">STATISTICS</span>
            <p class="js-scroll fade-btm">Key Performance Indicators</p>
        </div>
        <div class="container">
            <div class="section">
                <div class="box sec">
                    <div class="counter">
                        <div class="counterCard js-scroll fade-btm">
                            <img src="./media/icons/team.svg" alt="">
                            <h1 data-num="<?php echo isset($statistics['members']) ? $statistics['members'] : ''; ?>">0
                            </h1>
                            <span>Team Members</span>
                        </div>
                        <div class="counterCard js-scroll fade-btm">
                            <img src="./media/icons/clint.svg" alt="">
                            <h1 data-num="<?php echo isset($statistics['clients']) ? $statistics['clients'] : ''; ?>">0
                            </h1>
                            <span>Our Clint</span>
                        </div>
                        <div class="counterCard js-scroll fade-btm">
                            <img src="./media/icons/project.svg" alt="">
                            <h1 data-num="<?php echo isset($statistics['projects']) ? $statistics['projects'] : ''; ?>">
                                0</h1>
                            <span>projects</span>
                        </div>
                        <div class="counterCard js-scroll fade-btm">
                            <img src="./media/icons/feedback.svg" alt="">
                            <h1
                                data-num="<?php echo isset($statistics['customer_feedback']) ? $statistics['customer_feedback'] : ''; ?>">
                                0</h1>
                            <span>Client’s Feedback</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Stattistics -->
    <!-- Start Footer -->
    <div class="footer">
        <div class="container">
            <div class="top">
                <div class="left">
                    <div class="logo">
                        <img src="./media/logos/white-logo.svg" alt="">
                    </div>
                    <p>
                        Al-Baseel properties Management and Development Company specializes in land development, housing
                        construction, and installment sales
                    </p>
                </div>
                <div class="right">
                    <div class="helpful-link">
                        <div class="title">helpful link</div>
                        <ul>
                            <li>
                                <img src="./media/icons/footer-arrow.svg" alt="">
                                <a href="./index.php">Home Page</a>
                            </li>
                            <li>
                                <img src="./media/icons/footer-arrow.svg" alt="">
                                <a href="./pages/about.php">about us</a>
                            </li>
                            <li>
                                <img src="./media/icons/footer-arrow.svg" alt="">
                                <a href="./pages/services.php">services</a>
                            </li>
                            <li>
                                <img src="./media/icons/footer-arrow.svg" alt="">
                                <a href="./pages/project.php">Project</a>
                            </li>
                            <li>
                                <img src="./media/icons/footer-arrow.svg" alt="">
                                <a href="./pages/contact.php">contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="contact-us">
                        <div class="title">Contact US</div>
                        <ul>
                            <li>
                                <img src="./media/icons/location.svg" alt="">
                                <a href="https://maps.app.goo.gl/MA7FCDCvLxqzHk2U7">Wasfi Al Tal Street, AL-Waha Circle,
                                    Amman, Jordan</a>
                            </li>
                            <li>
                                <img src="./media/icons/phone.svg" alt="">
                                <a href="tel:+962 7 9925 6777">+962 7 9925 6777</a>
                            </li>
                            <li>
                                <img src="./media/icons/email.svg" alt="">
                                <a href="mailto:info@albaseel.com">info@albaseel.com</a>
                            </li>
                        </ul>
                        <div class="so">
                            <a href="https://web.facebook.com/baseel.Real.Estate.Co/">
                                <img src="./media/icons/face-footer.svg" alt="">
                            </a>
                            <a href="https://www.instagram.com/albaseelrealestate/">
                                <img src="./media/icons/footer-insta.svg" alt="">
                            </a>
                            <a
                                href="https://api.whatsapp.com/send/?phone=%2B962795000027&text&type=phone_number&app_absent=0">
                                <img src="./media/icons/footer-whats.svg" alt="">
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
    <script src="./js/counter.js"></script>
    <script src="./js/scroll.js"></script>
    <script src="./js/swiper-bundle.min.js"></script>
    <script src="./js/swiper.js"></script>
    <script src="./js/main.js"></script>
    <script src="./js/sc.js"></script>
    <!-- End JS Files -->
</body>

</html>