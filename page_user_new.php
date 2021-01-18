<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/user_N.css">
    <script src="https://kit.fontawesome.com/d4c29863c5.js" crossorigin="anonymous"></script>
    <script src="tools/jquery-3.3.1.min.js"></script>
</head>
<body>
<?php include 'header.php' ?>
<div id="row_s">
    <div id="page_user_new">
        <h4>عضویت در قاب تاجی</h4>
        <img id="logo" src="img/logo.png" width="100px" height="100px" alt="">
        <div id="form">
            <input class="input" type="text" name="username_N" placeholder="نام کاربری">
            <input class="input" type="email" name="email_N" placeholder="ایمیل">
            <input class="input" type="password" name="password_N" placeholder="پسورد">
            <input class="input" type="password" name="rePassword_N" placeholder="تکرار پسورد">
            <input class="input" type="text" name="mobile_N" placeholder="شماره موبایل">
            <input class="input" type="password" name="city" placeholder="نام استان(اختیاری)">
            <img src="captcha.php" alt="">
            <input class="input" type="text" name="captcha_cod" placeholder="کد امنیتی">
            <input id="btn_log" type="submit" onclick="check_taji_N()" name="btn_log" value="ثبت نام">
        </div>
        <div id="err">
            <p align="center">
                <i class="far fa-times-circle"></i>
            </p>
            <h3 align="center">ایمیل یا شماره تلفن وارد شده در سیستم موجود میباشد</h3>
            <p id="btn_err" align="center">باشه</p>
        </div>
        <div id="ok">
            <p align="center">
                <i class="far fa-check-circle"></i>
            </p>
            <h3 align="center">شما با موفقیت ثبت نام شدید</h3>
            <p id="btn_err" align="center">رفتن به پنل کاربری</p>
        </div>
    </div>
</div>
</body>
<script src="user_N.js"></script>
</html>
