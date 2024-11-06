<?php
require '../backend/db_connection.php';

if (isset($_GET['id'])) {
    $project_id = $_GET['id'];

    
    $sql = "SELECT * FROM projects WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $project_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $project = $result->fetch_assoc();

    
    $sql = "SELECT * FROM project_images WHERE project_id = ? AND image_type = 'before'";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $project_id);
    $stmt->execute();
    $before_images = $stmt->get_result();

    
    $sql = "SELECT * FROM project_images WHERE project_id = ? AND image_type = 'after'";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $project_id);
    $stmt->execute();
    $after_images = $stmt->get_result();

    $stmt->close();
    $conn->close();
} else {
    echo "Project ID is not set.";
    exit();
}
?>


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
    <title>AlBaseel Properties Project</title>
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
                    <li>
                        <a href="../pages/about.php">about us</a>
                    </li>
                    <li>
                        <a href="../pages/services.php">services</a>
                    </li>
                    <li class="active">
                        <a class="active" href="../pages/project.php">Project</a>
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
                        <a href="../ar-pages/Progect_Page.php"><img class="lang" src="../media/icons/world.svg" alt="" /> AR
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
                            <a href="../ar-pages/Progect_Page.php"><img class="lang" src="../media/icons/white-worle.svg" alt="" /> AR
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
    <!-- Start Landing Project -->
    <div class="details">
        <div class="container">
            <div class="title"><?php echo $project['project_name']; ?></div>
            <div class="de">
                <ul>
                    <li><?php echo $project['project_description']; ?></li>
                </ul>
            </div>
            <div class="price">
                <a class="co" href="contact.php">contact us</a>
            </div>
            <div class="map" style="display: none;>
                <iframe src=" <?php echo $project['project_location']; ?> " width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="title">Pictures</div>
            <div class="gallery-befor">
                <?php
                while ($row = $before_images->fetch_assoc()) {
                    echo '<img src="' . $row['image_path'] . '" alt="Before Image">';
                }
                ?>
            </div>
            <div class="title" style="display: none;">Pictures After</div>

            <div class="gallery-after" style="display: none;>
                <?php
                while ($row = $after_images->fetch_assoc()) {
                    echo '<img src="' . $row['image_path'] . '" alt="After Image">';
                }
                ?>
            </div>
        </div>
    </div>
    <!-- End Landing Project -->
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
    <script src="../js/project.js"></script>
    <!-- End JS Files -->
</body>

</html>