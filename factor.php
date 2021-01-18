<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/class_shit.css">
    <link rel="stylesheet" href="css/factor.css">
    <link rel="stylesheet" href="tools/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/d4c29863c5.js" crossorigin="anonymous"></script>
    <script src="tools/jquery-3.3.1.min.js"></script>
</head>
<body>
<?php
include 'header.php'
?>
<div class="container_S">
    <div class="row_S">
        <table class="table table-hover">
            <tr class="font">
                <th>نام</th>
                <th>تعداد</th>
                <th>قیمت(ریال)</th>
            </tr>
            <?php
            include 'inc/factor_F.php'
            ?>
            <tr class="font_CA back">
                <th>جمع کل</th>
                <th id="sum_number_F"></th>
                <th id="sum_price_F"></th>
            </tr>
        </table>
        <div id="user">
            <span id="total_price">
            <h5 class="input h5_2">اطلعات فاکتور شما</h5>
                <br>                <br>

                <p align="right" class="p">قیمت کل</p>
                <p class="p_C to_price"></p>
                <hr>
                <p align="right" class="p">تخفیف(درصد)</p>
                <p class="p_C off">0</p>
                <hr>
                <p align="right" class="p">کد تخفیف</p>
                <input type="text" name="off" id="input_off">
                <button id="btn_off">تایید</button>
                <hr>
                <p align="right" class="p">هزینه ارسال</p>
                <p class="p_C send_price">25000</p>
                                <hr>
                <p align="right" class="p">مقدار پرداختی</p>
                <p class="p_C total_price P_CC"></p>
            </span>
            <span id="e_user">
                <h5 style="color: white" class="input h5">اطلعات شخصی</h5>
                <span id="col_left_F">
                    <label class="lab" for="family">نام خانوادگی:<span class="err_family"></span></label>
                    <input class="input border" id="family" placeholder="نام خانوادگی" type="text" name="family">
                    <label class="lab" for="location">ادرس:<span class="err_location"></span></label>
                    <input class="input border" id="location" type="text" placeholder="مثال : بلوار خیام شمالی - خیام 46 - پلاک 207-طبقه دوم" name="location">
                    <label class="lab" for="phone">تلفن منزل:<span class="err_phone"></span></label>
                    <input class="input border" id='phone' type="text" placeholder="تلفن منزل(اختیاری)" name="mobile_home">
                </span>
                <span id="col_right_F">
                    <label class="lab" for="name">نام:<span class="err_off"></span></label>
                    <input class="input border" id="name" type="text" placeholder="نام" name="name">
                    <label class="lab" for="city">نام شهر:<span class="err_city"></span></label>
                    <input class="input border" id="city" type="text" placeholder="مثل : مشهد" name="city">
                    <label class="lab" for="mobile">شماره همراه:<span class="err_mobile"></span></label>
                    <input class="input border" id="mobile" type="text" placeholder="شماره همراه" name="mobile">
                   <p class="eta">اطلعات بالا را با دقت پر کنید <i class="fas fa-exclamation"></i></p>
                    <p class="eta">اگر کد تخفیفی دارید در قسمت فاکتور اعمال کنید <i class="fas fa-exclamation"></i></p>
                    <a id="btn_buy_fd" href="#">تایید و پرداخت</a>
                </span>
            </span>


        </div>
    </div>
</div>
<div id="err_code_off">
    <p align="center">
        <i class="far fa-times-circle"></i>
    </p>
    <h3 align="center">کد تخفیف وارد نشده است</h3>
    <p id="btn_err" align="center">باشه</p>
</div>
<div id="err_code_off_2">
    <p align="center">
        <i class="far fa-times-circle"></i>
    </p>
    <h3 align="center">کد تخفیف صحیح نمی باشد</h3>
    <p id="btn_err_2" align="center">باشه</p>
</div>
<div id="ok">
   <p align="center">
        <i class="far fa-check-circle"></i>
    </p>
    <h3 align="center">کد تخفیف اعمال شد</h3>
    <p id="btn_err_3" align="center">باشه</p>
</div>
<div id="ok_send">
   <p align="center">
       <i class="fas fa-credit-card"></i>
    </p>
     <h3 align="center">اطلعات ارسال شد برای پراداخت به روی دکمه زیر کلیک کنید</h3>
    <a href="send.php" id="btn_err_4" align="center">درگاه پرداخت</a>
</div>
<div id="need_pm"></div>
<?php
include 'footer.php'
?>
</body>
<script src="send_em.js"></script>
</html>
