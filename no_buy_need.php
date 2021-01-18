<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/ok_send.css">
    <title>Document</title>
</head>
<body>
<?php
include 'header.php'
?>
<?php
include 'inc/config.php';
$sql="select * from tbl_buy where cookiename='".$_COOKIE['ghab_taji']."'  and date='".$_SESSION['time']."'";
$stmt=$link->prepare($sql);
$stmt->execute();
$n=$stmt->fetch(PDO::FETCH_ASSOC);
?>
<div id="container" class="container_S">
    <div class="row_S">
        <p align="center">
            <i class="far fa-tired"></i>

        </p>
        <h3 style="color: #ff5853" id="pm_ok"> پرداخت با مشکل مواجه شده </h3>
        <div style="background-color: #ff5853" id="btn_back_site" >بازگشت به پنل کاربری</div>
    </div>
</div>
</body>
<script>
    $('#btn_back_site').click(function () {
        window.location.href='http://localhost/s1/ghab_taji/factor.php';
    })
</script>
</html>
