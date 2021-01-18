<?php session_start();
include 'inc/config.php';
include "inc/config.php";
$sqlC = "select * from tbl_product where id='" . $_GET['id_P'] . "'";
$stmtC = $link->prepare($sqlC);
$stmtC->execute();
$nC = $stmtC->fetch(PDO::FETCH_ASSOC);
$name = $nC['name'];
$id_SD = $nC['id'];
$price = $nC['price'];
$code = $nC['code'];
$item_1 = $nC['item_1'];
$item_2 = $nC['item_2'];
$item_3 = $nC['item_3'];
$item_4 = $nC['item_4'];
$item_5 = $nC['item_5'];
$COMP = $nC['COMP'];
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $name ?></title>
    <link rel="stylesheet" href="css/class_shit.css">
    <link rel="stylesheet" href="css/DE_S.css">
    <link rel="stylesheet" href="tools/slick-theme.css">
    <link rel="stylesheet" href="tools/slick.css">
</head>
<body>
<?php
include 'header.php';
?>
<div id="container" class="container_S">
    <div class="row_S">
        <div id="part_top">
            <div id="col_left_DE_A">
                <div class="slider-for" id="F_img">
                    <?php
                    include 'inc/config.php';
                    $sqlB = "select * from tbl_imgs where id_img='" . $_GET['id_P'] . "'";
                    $stmtB = $link->prepare($sqlB);
                    $stmtB->execute();
                    $nB = $stmtB->fetch(PDO::FETCH_ASSOC);
                    foreach ($nB as $i) {
                        echo '
                <img src="' . $nB['img'] . '" alt="">
                ';
                    }
                    ?>
                </div>
                <div class="slider-nav" id="G-img">
                    <?php
                    include 'inc/config.php';
                    $sqlA = "select * from tbl_imgs where id_img='" . $_GET['id_P'] . "'";
                    $stmtA = $link->prepare($sqlA);
                    $stmtA->execute();
                    $nA = $stmtA->fetch(PDO::FETCH_ASSOC);
                    foreach ($nA as $i) {
                        echo '
                <img src="' . $nA['img'] . '" alt="">
                ';
                    }
                    ?>
                </div>
            </div>
            <div id="col_right_DE_A">
                <?php

                ?>
                <h1 id="name_P"><?php echo $name ?></h1>
                <hr>
                <h4><i class="far fa-money-bill-alt"></i> قیمت :<?php echo $price ?>ریال </h4>
                <h5><i class="fas fa-barcode"></i> کد کالا :<?php echo $code ?>
                </h5>
                <hr>
                <ul>
                    <li><b>مشخصات کلی</b></li>
                    <li><b>سایز</b>:<?php echo $item_1 ?>5</li>
                    <li><b>کد فریم</b>:<?php echo $item_2 ?></li>
                    <li><b>جنس</b>:<?php echo $item_3 ?></li>
                    <li><b>یراق</b>:<?php echo $item_4 ?></li>
                    <li><b>شیشه و کارتن</b>:<?php echo $item_5 ?></li>
                </ul>
                <h4 style="margin-right: 0;color: #141414">توضیحات تکمیلی</h4>
                <p>
                    <?php echo $COMP ?>
                </p>
                <div id="part_sefaresh" style="">
                    <label id="label" for="number_basket">تعداد سفارش</label>
                    <input value="1" placeholder="تعداد" type="number" name="number" id="number_basket">
                    <div class="btn_buy" id="<?php echo $id_SD ?>" href="#">اضافه به سبد خرید</div>
                </div>
            </div>
        </div>
        <a href="#send_pm" id="text_com">
            (برای ثبت نظر جدید کلیک کنید)بخش نظرات</a>
        <div id="nzarat">
            <ul class="ul">
                <?php
                include 'inc/config.php';
                $sql="select * from tbl_pm_product where id_P='".$_GET['id_P']."' and V_S=1";
                $stmt=$link->prepare($sql);
                $stmt->execute();
                while ($n=$stmt->fetch(PDO::FETCH_ASSOC)){
                    $name=$n['name'];
                    $text=$n['text'];
                    $date=$n['date'];
                    $id=$n['id'];
                    $sqlA="select * from tbl_pm_admin_product where id_pm='".$id."'";
                    $stmtA=$link->prepare($sqlA);
                    $stmtA->execute();
                    $nA=$stmtA->fetch(PDO::FETCH_ASSOC);
                    $nameA=$nA['name'];
                    $textA=$nA['text'];
                    $id_P=$nA['id_pm'];
                    if (isset($id_P)){
                        echo '
                                    <li>
                    <div id="photo">
                        <i class="fas fa-user"></i>
                    </div>
                    <h4>'.$name.'</h4>
                    <h5>تاریخ ارسال شده:'.$date.'</h5>
                    <p>
                        '.$text.'
                    </p>
                    <hr style="opacity: 1">
                    <div id="photo">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h4 style="display: block">:مدیر</h4>
                    <p>
                        '.$textA.'
                    </p>
                </li>
                    ';
                    }
                    }


                ?>
            </ul>
            <span id="new_pm">ثبت نظر جدید</span>
        </div>

    </div>
</div>
<div id="err_W">
    <p align="center">
        <i class="far fa-times-circle"></i>
    </p>
    <h3 align="center">تعداد نباید کمتر از 1 باشد و بیشتر از 100 باشد</h3>
    <p id="btn_err" align="center">باشه</p>
</div>
<div id="ok_W">
    <p align="center">
        <i class="far fa-check-circle"></i>
    </p>
    <h3 align="center">این محصول به سبد خرید شما اضافه شد</h3>
    <a href="" id="btn_err" align="center">باشه</a>
</div>
<div id="need_err"></div>
<div id="need_pm_DE_S">
    <div id="send_pm">
        <i class="fas fa-times"></i>
        <input class="size_font" id="name_user" placeholder="نام کاربری" type="text" name="name">
        <textarea class="size_font" placeholder="متن پیام" id="pm_P"></textarea>
        <img src="captcha.php" alt="">
        <input class="size_font" id="captcha_pm_user" placeholder="کد امنیتی" type="text" name="name">
        <a class="<?php echo $_GET['id_P'] ?>" id="btn_send_pm" href="#">ارسال نظر</a>
    </div>
</div>
<div id="need_pm_ok">
    <p class="p" align="center"><i class="far fa-smile-wink"></i></p>
    <p align="center">نظر شما با موفقیت ثبت شد  برای نمایش  باید منتظر تایید مدیر باشد باتشکر</p>
    <p id="btn_F_pm" align="center">باشه</p>
</div>
<?php
include 'footer.php';
?>
<script src="pm_product.js"></script>
<script src="tools/slick.min.js"></script>
<script src="java/slid_DE.js"></script>
<script src="java/basket_DE.js"></script>
</body>
</html>
