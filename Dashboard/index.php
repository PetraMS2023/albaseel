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
  <link rel="stylesheet" href="./scss/style.css">
  <title>AL BASEEL PROPERTIES</title>
</head>

<body>
  <!-- Start Nav -->
  <nav class="nav">
    <div class="logo">
      <img class="imgg" src="./media/nav-logo.svg" alt="">
      <i class="fa-regular fa-bars" id="menu"></i>
      <span>الدخول الى لوحة التحكم</span>
    </div>
    <a href="##">الذهاب الى الموقع <img src="./media/icons/website.png" alt=""></a>
  </nav>
  <!-- End Nav -->
<div class="home">
  <div class="login">
    <img src="./media/login-logo.svg" alt="">
    <h2>تسجيل الدخول</h2>
    <form action="../backend/login.php" method="post" class="form">
        <div class="input">
            <span>البريد الالكتروني :</span>
            <input type="text" name="email" spellcheck="false" placeholder="البريد الالكتروني" required>
        </div>
        <div class="input">
            <span>كلمة المرور :</span>
            <input type="password" name="password" placeholder="كلمة المرور" required>
        </div>
        <button type="submit">تسجيل الدخول</button>
    </form>
  </div>
</div>
</body>
<script src="./js/main.js"></script>
<script src="./js/scroll.js"></script>


</html>