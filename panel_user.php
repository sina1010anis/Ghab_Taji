<?php session_start(); ?>
<?php
if (!isset($_SESSION['email_taji'])){
    header("location: page_user.php");
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?php
        include "title.php";
        ?>
    </title>
    <link rel="stylesheet" href="css/class_shit.css">
    <link rel="stylesheet" href="css/panel_user.css">
    <script src="https://kit.fontawesome.com/d4c29863c5.js" crossorigin="anonymous"></script>
</head>
<body>
<?php include "header.php"; ?>
<div id="container" class="container_S">
    <div class="row_S">
        <div id="col_all">
            <div id="col_menu">
                <ul>
                    <h2><?php echo $_SESSION['email_taji']?>  پنل کاربری <i class="fas fa-lock-open"></i></h2>
                    <li><a href="?user=edit_pass">تغییر پسورد <i class="fas fa-angle-left"></i></a></li>
                    <li><a href="?user=message">پیام های مدیر <i class="fas fa-angle-left"></i></a></li>
                    <li><a href="?user=support">ارتباط با مدیر<i class="fas fa-angle-left"></i></a></li>
                    <li><a href="?user=basket">سبد خرید(خرید نهایی) <i class="fas fa-angle-left"></i></a></li>
                    <li><a href="?user=buy">پیگیری سفارشات <i class="fas fa-angle-left"></i></a></li>
                    <li><a href="?user=exit">خروج از پنل کاربری <i class="fas fa-angle-left"></i></a></li>
                </ul>
            </div>
            <div id="col_panel">
                <?php
                    include 'click_user_panel.php';
                ?>
            </div>
        </div>
    </div>
</div>
<?php
    include 'footer.php'
?>
</body>
</html>