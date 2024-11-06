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
    <!-- Main CSS Ar -->
    <link rel="stylesheet" href="../CSS-AR/desing-ar.css">
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
                        <a href="../index.ar.php">الرئيسية</a>
                    </li>
                    <li>
                        <a href="../ar-pages/about.php">معلومات عنا</a>
                    </li>
                    <li>
                        <a href="../ar-pages/services.php">الخدمات</a>
                    </li>
                    <li class="active">
                        <a class="active" href="../ar-pages/project.php">المشاريع</a>
                    </li>
                    <li>
                        <a href="../ar-pages/contact.php">اتصل بنا</a>
                    </li>
                </ul>
            </div>
            <div class="mLinks">
                <a href="tel:+962 79 925 6777">
                    <img src="../media/icons/mes.svg" alt="" />
                    <div class="ll">
                        <span>اتصل في اي وقت</span>
                        <span style="direction: ltr;">+962 7 9925 6777</span>
                    </div>
                </a>
                <div class="drop">
                    <a href="##">
                        <img class="lang" src="../media/icons/world.svg" alt="" />AR<img class="drop-icon"
                            src="../media/icons/black-arrow.svg" alt="" /></a>
                    <span class="dropMenu">
                        <a href="../pages/project.php"><img class="lang" src="../media/icons/world.svg" alt="" /> EN
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
                        <a href="../index.ar.php">الرئيسية</a>
                    </li>
                    <li>
                        <a href="../ar-pages/about.php">معلومات عنا</a>
                    </li>
                    <li>
                        <a href="../ar-pages/services.php">الخدمات</a>
                    </li>
                    <li>
                        <a href="../ar-pages/project.php">المشاريع</a>
                    </li>
                    <li>
                        <a href="../ar-pages/contact.php">اتصل بنا</a>
                    </li>
                </ul>
                <div class="mLinks">
                    <div class="drop">
                        <a href="##">
                            <img class="lang" src="../media/icons/white-worle.svg" alt="" />AR<img class="drop-icon"
                                src="../media/icons/white-arrow.svg" alt="" /></a>
                        <span class="dropMenu">
                            <a href="../pages/project.php"><img class="lang" src="../media/icons/white-worle.svg" alt="" /> EN
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
    <!-- Start Landing project -->
    <div class="landing-project">
        <div class="container">
            <div class="landing-title">
                <div class="super btmAni25002">ما الذي نفعله</div>
                <div class="sub btmAni20002">الرئيسية - <span>المشاريع</span></div>
            </div>
        </div>
    </div>
    <!-- End Landing project -->
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
    <!-- Start Project Page -->
  
    <?php
    require '../backend/db_connection.php';


    $sql = "SELECT projects.id, projects.project_name, projects.project_status, project_images.image_path 
                FROM projects 
                LEFT JOIN project_images 
                ON projects.id = project_images.project_id 
                AND project_images.image_type = 'before' 
                GROUP BY projects.id";

    $result = $conn->query($sql);
    ?>

    <div class="project-page">
        <div class="container">
            <div class="catu btmAni25002">
                <ul>
                    <li class="active">
                        <a id="all" href="#">كل المشاريع</a>
                    </li>
                    <li>
                        <a id="sold" href="#">المباعة</a>
                    </li>
                    <li>
                        <a id="available" href="#">المتاحة</a>
                    </li>
                </ul>
            </div>
            <div class="port js-scroll fade-top">
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $statusClass = $row['project_status'] === 'مشروع مباع' ? 'sold' : 'available';
                        echo '<div class="projects js-scroll fade-left all ' . $statusClass . '">';
                        echo '<img src="' . $row['image_path'] . '" alt="' . $row['project_name'] . '">';
                        echo '<a class="details-link" href="./Progect_Page.php?id=' . $row['id'] . '">details</a>';
                        echo '</div>';
                    }
                } else {
                    echo '<p>لا توجد مشاريع متاحة حاليا.</p>';
                }
                ?>
            </div>
        </div>
    </div>

    <!-- End Project Page -->
    <!-- Start Footer -->
    <div class="footer">
        <div class="container">
            <div class="top">
                <div class="left">
                    <div class="logo">
                        <img src="../media/logos/white-logo.svg" alt="">
                    </div>
                    <p>
                        توفير حلول استثمارية 
                        عقارية , يعمل بها كادر مؤهل في تحقيق سجل حافل من المشاريع التطويرية المتنوعة , واستقطاب شركاء 
                        محليين وإقليميين وتحقيق أفضل العائدات للزبائن والعملاء
                    </p>
                </div>
                <div class="right">
                    <div class="helpful-link">
                        <div class="title">روابط مفيدة</div>
                        <ul>
                            <li>
                                <img src="../media/icons/footer-arrow.svg" alt="">
                                <a href="../index.ar.php">الصفحة الرئيسية</a>
                            </li>
                            <li>
                                <img src="../media/icons/footer-arrow.svg" alt="">
                                <a href="../ar-pages/about.php">معلومات عنا</a>
                            </li>
                            <li>
                                <img src="../media/icons/footer-arrow.svg" alt="">
                                <a href="../ar-pages/services.php">الخدمات</a>
                            </li>
                            <li>
                                <img src="../media/icons/footer-arrow.svg" alt="">
                                <a href="../ar-pages/project.php">المشاريع</a>
                            </li>
                            <li>
                                <img src="../media/icons/footer-arrow.svg" alt="">
                                <a href="../ar-pages/contact.php">التواصل</a>
                            </li>
                        </ul>
                    </div>
                    <div class="contact-us">
                        <div class="title">اتصل بنا</div>
                        <ul>
                            <li>
                                <img src="../media/icons/location.svg" alt="">
                                <a href="https://maps.app.goo.gl/MA7FCDCvLxqzHk2U7">شارع وصفي التل، دوار الواحة، عمان، الأردن</a>
                            </li>
                            <li>
                                <img src="../media/icons/phone.svg" alt="">
                                <a  style="direction: ltr;" href="tel:+962 7 9925 6777">+962 7 9925 6777</a>
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
                حقوق الطبع والنشر تصميم © البسيل 2023. جميع الحقوق محفوظة
                تم تطويره بواسطة <a href="https://petra-ms.com/"> Petra MS</a>
            </p>
        </div>
    </div>
    <!-- End Footer -->
    <!-- Start JS Files -->

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const filterButtons = document.querySelectorAll(".catu ul li a");
            const projects = document.querySelectorAll(".projects");

            filterButtons.forEach(button => {
                button.addEventListener("click", function(event) {
                    event.preventDefault();

                    // إزالة الفئة 'active' من جميع الأزرار
                    filterButtons.forEach(btn => btn.classList.remove('active'));

                    // إضافة الفئة 'active' إلى الزر الحالي
                    this.classList.add('active');

                    // الحصول على الفئة لتصفية المشاريع
                    const filter = this.id;

                    projects.forEach(project => {
                        if (filter === 'all' || project.classList.contains(filter)) {
                            project.style.display = 'block';
                        } else {
                            project.style.display = 'none';
                        }
                    });
                });
            });
        });
    </script>

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