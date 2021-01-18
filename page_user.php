<?php session_start(); ?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/user.css">
    <script src="https://kit.fontawesome.com/d4c29863c5.js" crossorigin="anonymous"></script>
    <script src="tools/jquery-3.3.1.min.js"></script>
</head>
<body>
<?php include 'header.php' ?>

<div id="row_s">
    <div id="page_user_new">
        <h4>ورود به سایت</h4>
        <img id="logo" src="img/logo.png" width="100px" height="100px" alt="">
        <div id="form">
            <input class="input" type="email" name="username" placeholder="ایمیل">
            <input class="input" type="password" name="password" placeholder="پسورد">
            <img src="captcha.php" alt="">
            <input class="input" type="text" name="captcha" placeholder="کد امنیتی">
            <input id="btn_log" type="submit" onclick="check_taji()" name="btn_log" value="تایید">
        </div>
    </div>
</div>
<div id="error">
    <p align="center">
        <i class="far fa-times-circle"></i>
    </p>
    <h3 align="center">ایمیل یا پسورد یا کد امنیتی اشتباه وارد شده است</h3>
    <p id="btn_err" align="center">باشه</p>
</div>
</body>
<script src="user.js"></script>
</html>
