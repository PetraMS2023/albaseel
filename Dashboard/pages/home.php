<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: ../index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../media/nav-logo.svg" type="image/x-icon" />
  <link rel="shortcut icon" href="../media/nav-logo.svg" />
  <link rel="apple-touch-icon" href="../media/nav-logo.svg" />
  <meta name="color-scheme" content="light only">
  <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/all.css">
  <link rel="stylesheet" href="../scss/style.css">
  <title>AL BASEEL PROPERTIES</title>
</head>

<body>
    <!-- Start Nav -->
    <nav class="nav">
      <div class="logo">
        <img class="imgg" src="../media/nav-logo.svg" alt="">
        <i class="fa-regular fa-bars" id="menu"></i>
        <span>لوحة التحكم</span>
      </div>
      <a href="##">الذهاب الى الموقع <img src="../media/icons/website.png" alt=""></a>
    </nav>
    <!-- End Nav -->
    
  <div class="dcont">
    <div class="navCont">
      <ul class="nLinks">
        <li><a class="nLink active" href="./home.php">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M23.3553 10.4388C23.3548 10.4383 23.3542 10.4377 23.3537 10.4372L13.5626 0.647461C13.1452 0.22998 12.5904 0 12.0001 0C11.4099 0 10.8551 0.229797 10.4376 0.647278L0.65158 10.4321C0.648284 10.4354 0.644988 10.4388 0.641692 10.4421C-0.215329 11.304 -0.213864 12.7024 0.645903 13.5621C1.0387 13.955 1.5575 14.1826 2.11218 14.2064C2.1347 14.2086 2.15741 14.2097 2.1803 14.2097H2.57054V21.4144C2.57054 22.84 3.73063 24 5.1568 24H8.98739C9.37561 24 9.69059 23.6852 9.69059 23.2969V17.6484C9.69059 16.9979 10.2198 16.4687 10.8705 16.4687H13.1298C13.7805 16.4687 14.3097 16.9979 14.3097 17.6484V23.2969C14.3097 23.6852 14.6245 24 15.0129 24H18.8435C20.2697 24 21.4298 22.84 21.4298 21.4144V14.2097H21.7916C22.3816 14.2097 22.9365 13.9799 23.3542 13.5624C24.2149 12.7013 24.2153 11.3005 23.3553 10.4388Z" fill="#757A89"/>
            </svg>
            الصفحة الرئيسية
          </a></li>
          <li><a class="nLink" href="./project.php">
            <i class="fa-solid fa-diagram-project"></i>
            المشاريع 
        </a></li>
          <li><a class="nLink" href="./emails.php">
            <svg width="25" height="18" viewBox="0 0 25 18" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M24.7869 1.7168L17.4539 9.00258L24.7869 16.2884C24.9194 16.0113 24.9999 15.705 24.9999 15.3779V2.62724C24.9999 2.30012 24.9194 1.99386 24.7869 1.7168Z" fill="#757A89"/>
              <path d="M22.8742 0.500488H2.94536C2.61823 0.500488 2.31198 0.580912 2.03491 0.713472L11.4073 10.0386C12.236 10.8673 13.5836 10.8673 14.4123 10.0386L23.7847 0.713472C23.5076 0.580912 23.2013 0.500488 22.8742 0.500488Z" fill="#757A89"/>
              <path d="M1.0333 1.7168C0.900736 1.99386 0.820312 2.30012 0.820312 2.62724V15.3779C0.820312 15.7051 0.900736 16.0114 1.0333 16.2884L8.36631 9.00258L1.0333 1.7168Z" fill="#757A89"/>
              <path d="M16.4519 10.001L15.4142 11.0386C14.0334 12.4195 11.7866 12.4195 10.4058 11.0386L9.36817 10.001L2.03516 17.2868C2.31222 17.4193 2.61848 17.4997 2.9456 17.4997H22.8744C23.2016 17.4997 23.5078 17.4193 23.7849 17.2868L16.4519 10.001Z" fill="#757A89"/>
              </svg>
              البريد الوارد 
          </a></li>
          <li class="logOut"><a href="../../backend/logout.php">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9998 12.9998C14.4469 12.9998 13.9999 13.4479 13.9999 13.9997V17.9998C13.9999 18.5508 13.5519 18.9997 12.9998 18.9997H9.99984V3.9999C9.99984 3.1459 9.45583 2.38291 8.63791 2.09892L8.34183 1.99986H12.9998C13.5519 1.99986 13.9999 2.44883 13.9999 2.99997V5.99994C13.9999 6.55181 14.4469 6.99987 14.9998 6.99987C15.5528 6.99987 15.9998 6.55181 15.9998 5.99994V2.99997C15.9998 1.34599 14.6538 0 12.9998 0H2.24998C2.21189 0 2.18003 0.0170287 2.14304 0.0219724C2.09489 0.0179442 2.04893 0 2.00004 0C0.897024 0 0 0.896841 0 1.99986V19.9997C0 20.8537 0.544001 21.6167 1.36192 21.9007L7.37999 23.9067C7.58397 23.9697 7.78685 23.9998 7.99998 23.9998C9.10299 23.9998 9.99984 23.1027 9.99984 21.9997V20.9998H12.9998C14.6538 20.9998 15.9998 19.6538 15.9998 17.9998V13.9997C15.9998 13.4479 15.5528 12.9998 14.9998 12.9998Z" fill="#028DCF"/>
              <path d="M23.707 9.29268L19.7069 5.29278C19.4211 5.00677 18.991 4.92071 18.6171 5.07562C18.2441 5.23071 18 5.59563 18 5.99974V8.99971H14.0001C13.4481 8.99971 13 9.44758 13 9.99964C13 10.5517 13.4481 10.9996 14.0001 10.9996H18V13.9995C18 14.4036 18.2441 14.7686 18.6171 14.9237C18.991 15.0786 19.4211 14.9925 19.7069 14.7067L23.707 10.7066C24.0979 10.3157 24.0979 9.6836 23.707 9.29268Z" fill="#028DCF"/>
              </svg>            
              تسجيل الخروج
            </a></li>
            
      </ul>
    </div>

    <div class="mainCont" id="main">
<!-- Start Main Content -->
        <?php
        require '../../backend/db_connection.php';

        
        $sql = "SELECT COUNT(*) as total FROM contact_form";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $total_records = $row['total'];

        $conn->close();
        ?>

      <div class="conta p30">
        <h3>اهلا بكم في لوحة التحكم</h3>
        <div class="cons">
          <div class="itm mi">
            <img src="../media/icons/mail.png" alt="">
            <span>البـريد الوارد  </span>
            <h1><?php echo $total_records; ?></h1>
          </div>
        </div>
      </div>
      <div class="conta p30">
        <h3>اختصارات سريعة :</h3>
        <div class="cons">
          <a href="./about-us.php" class="itm flink">
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M31.6668 20C30.7452 20 30.0002 20.7468 30.0002 21.6666V35.0002C30.0002 35.9184 29.2535 36.6667 28.3336 36.6667H5.00004C4.07993 36.6667 3.33346 35.9184 3.33346 35.0002V11.6665C3.33346 10.7483 4.07993 9.99996 5.00004 9.99996H18.3336C19.2552 9.99996 20.0002 9.25319 20.0002 8.33339C20.0002 7.41327 19.2552 6.6665 18.3336 6.6665H5.00004C2.24336 6.6665 0 8.90987 0 11.6665V35.0002C0 37.7568 2.24336 40.0002 5.00004 40.0002H28.3336C31.0903 40.0002 33.3337 37.7568 33.3337 35.0002V21.6666C33.3337 20.745 32.5884 20 31.6668 20Z" fill="#757A89"/>
              <path d="M15.6271 18.4807C15.5106 18.5973 15.4321 18.7456 15.3989 18.9055L14.2206 24.7991C14.1656 25.0722 14.2523 25.3539 14.4488 25.5523C14.6072 25.7107 14.8205 25.7955 15.0391 25.7955C15.0922 25.7955 15.1474 25.7906 15.2023 25.779L21.0941 24.6007C21.2574 24.5672 21.4057 24.489 21.5207 24.3722L34.7075 11.1854L28.8157 5.29395L15.6271 18.4807Z" fill="#757A89"/>
              <path d="M38.7798 1.21881C37.1551 -0.406268 34.5116 -0.406268 32.8881 1.21881L30.5815 3.52534L36.4733 9.41711L38.7798 7.11027C39.5666 6.32535 40 5.27859 40 4.1653C40 3.05201 39.5666 2.00525 38.7798 1.21881Z" fill="#757A89"/>
              </svg>
            <span>من نحن</span>
          </a>
          <a href="./contact-info.php" class="itm flink">
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M31.6668 20C30.7452 20 30.0002 20.7468 30.0002 21.6666V35.0002C30.0002 35.9184 29.2535 36.6667 28.3336 36.6667H5.00004C4.07993 36.6667 3.33346 35.9184 3.33346 35.0002V11.6665C3.33346 10.7483 4.07993 9.99996 5.00004 9.99996H18.3336C19.2552 9.99996 20.0002 9.25319 20.0002 8.33339C20.0002 7.41327 19.2552 6.6665 18.3336 6.6665H5.00004C2.24336 6.6665 0 8.90987 0 11.6665V35.0002C0 37.7568 2.24336 40.0002 5.00004 40.0002H28.3336C31.0903 40.0002 33.3337 37.7568 33.3337 35.0002V21.6666C33.3337 20.745 32.5884 20 31.6668 20Z" fill="#757A89"/>
              <path d="M15.6271 18.4807C15.5106 18.5973 15.4321 18.7456 15.3989 18.9055L14.2206 24.7991C14.1656 25.0722 14.2523 25.3539 14.4488 25.5523C14.6072 25.7107 14.8205 25.7955 15.0391 25.7955C15.0922 25.7955 15.1474 25.7906 15.2023 25.779L21.0941 24.6007C21.2574 24.5672 21.4057 24.489 21.5207 24.3722L34.7075 11.1854L28.8157 5.29395L15.6271 18.4807Z" fill="#757A89"/>
              <path d="M38.7798 1.21881C37.1551 -0.406268 34.5116 -0.406268 32.8881 1.21881L30.5815 3.52534L36.4733 9.41711L38.7798 7.11027C39.5666 6.32535 40 5.27859 40 4.1653C40 3.05201 39.5666 2.00525 38.7798 1.21881Z" fill="#757A89"/>
              </svg>
            <span>جدول الاحصائيات</span>
          </a>
          <a href="./setting.php" class="itm flink">
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M31.6668 20C30.7452 20 30.0002 20.7468 30.0002 21.6666V35.0002C30.0002 35.9184 29.2535 36.6667 28.3336 36.6667H5.00004C4.07993 36.6667 3.33346 35.9184 3.33346 35.0002V11.6665C3.33346 10.7483 4.07993 9.99996 5.00004 9.99996H18.3336C19.2552 9.99996 20.0002 9.25319 20.0002 8.33339C20.0002 7.41327 19.2552 6.6665 18.3336 6.6665H5.00004C2.24336 6.6665 0 8.90987 0 11.6665V35.0002C0 37.7568 2.24336 40.0002 5.00004 40.0002H28.3336C31.0903 40.0002 33.3337 37.7568 33.3337 35.0002V21.6666C33.3337 20.745 32.5884 20 31.6668 20Z" fill="#757A89"/>
              <path d="M15.6271 18.4807C15.5106 18.5973 15.4321 18.7456 15.3989 18.9055L14.2206 24.7991C14.1656 25.0722 14.2523 25.3539 14.4488 25.5523C14.6072 25.7107 14.8205 25.7955 15.0391 25.7955C15.0922 25.7955 15.1474 25.7906 15.2023 25.779L21.0941 24.6007C21.2574 24.5672 21.4057 24.489 21.5207 24.3722L34.7075 11.1854L28.8157 5.29395L15.6271 18.4807Z" fill="#757A89"/>
              <path d="M38.7798 1.21881C37.1551 -0.406268 34.5116 -0.406268 32.8881 1.21881L30.5815 3.52534L36.4733 9.41711L38.7798 7.11027C39.5666 6.32535 40 5.27859 40 4.1653C40 3.05201 39.5666 2.00525 38.7798 1.21881Z" fill="#757A89"/>
              </svg>
            <span>الاعدادات</span>
          </a>
        </div>
      </div>
      <!-- End Main Content -->
    </div>
  </div>
</body>
<script src="../js/main.js"></script>
<script src="../js/links.js"></script>

</html>