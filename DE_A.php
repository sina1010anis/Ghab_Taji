<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/class_shit.css">
    <link rel="stylesheet" href="css/DE_A.css">
    <link rel="stylesheet" href="tools/slick-theme.css">
    <link rel="stylesheet" href="tools/slick.css">
    <script src="https://kit.fontawesome.com/d4c29863c5.js" crossorigin="anonymous"></script>
</head>
<body>
<?php
include_once 'header.php';
?>

<div id="container" class="container_S">
    <div class="row_S">
        <div id="need_A">
            <div id="DE_A">
                <span id="col_1">
                  <div class="slider-for" id="F_img">
                        <img class="img_M" src="img/test3.jpg" alt="">
                        <img class="img_M" src="img/test3.jpg" alt="">
                        <img class="img_M" src="img/test2.jpg" alt="">
                        <img class="img_M" src="img/test2.jpg" alt="">
                  </div>
                    <div class="slider-nav" id="G_img">
                        <img src="img/test3.jpg" alt="">
                        <img src="img/test3.jpg" alt="">
                        <img src="img/test2.jpg" alt="">
                        <img src="img/test2.jpg" alt="">
                    </div>
                </span>
                <span id="col_2">
                    <h1 id="name_product">آریا</h1>
                    <hr>
                    <h4 id="code_P">کد محصول:cdg1554</h4>
                    <p>قیمت :250000 ریال</p>
                    <hr>
                    <ul class="ul">
                        <li><b>سایز</b> : 52*56</li>
                        <li><b>نوع فریم</b> : پوست گردویی</li>
                        <li><b>جنس طرح</b> : ابریشمی</li>
                        <li><b>ضخامت شیشه</b> : 3میل</li>
                        <li><b>ضخامت شیشه</b> : 3میل</li>
                        <li><b>ضخامت شیشه</b> : 3میل</li>
                        <li><b>ضخامت شیشه</b> : 3میل</li>
                        <li><b>ضخامت شیشه</b> : 3میل</li>
                        <li><b>ضخامت شیشه</b> : 3میل</li>
                    </ul>
                    <h4>توضیحات</h4>
                    <p>
                        سلام این یک متن تست است که برای ازمایش این بخش نوشته شده و هیج ربطی به کاراری های این سایت ندرادسلام این یک متن تست است که برای ازمایش این بخش نوشته شده و هیج ربطی به کاراری های این سایت ندرادسلام این یک متن تست است که برای ازمایش این بخش نوشته شده و هیج ربطی به کاراری های این سایت ندرادسلام این یک متن تست است که برای ازمایش این بخش نوشته شده و هیج ربطی به کاراری های این سایت ندرادسلام این یک متن تست است که برای ازمایش این بخش نوشته شده و هیج ربطی به کاراری های این سایت ندرادسلام این یک متن تست است که برای ازمایش این بخش نوشته شده و هیج ربطی به کاراری های این سایت ندراد
                    </p>
                </span>
            </div>
        </div>
        <div id="part_basket"></div>
    </div>
</div>


<?php
include_once 'footer.php';
?>
</body>
<script src="tools/slick.min.js"></script>
<script>
    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: true,
        centerMode: true,
        focusOnSelect: true
    });
</script>
</html>