<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/class_shit.css">
    <link rel="stylesheet" href="css/all_product.css">
    <link rel="stylesheet" href="tools/slick-theme.css">
    <link rel="stylesheet" href="tools/slick.css">
    <link rel="stylesheet" href="tools/owl.theme.default.min.css">
    <link rel="stylesheet" href="tools/owl.carousel.min.css">
    <script src="https://kit.fontawesome.com/d4c29863c5.js" crossorigin="anonymous"></script>
</head>
<body>
<div id="container" class="container_S">
    <div class="row_S">
        <div id="all">
            <div id="need_banner_1">
                <div id="banner_1"></div>
                <span id="ax_1"></span>
                <span id="ax_2"></span>
            </div>

            <div id="product_top">
                <ul class="owl-carousel" id="product_A" style="margin: 0;padding: 0">
                    <?php
                    include "inc/product_1.php";
                    ?>

                </ul>
            </div>
            <div id="need_banner_2">
                <div id="banner_2"></div>
            </div>
            <div id="product_top">
                <ul class="owl-carousel" id="product_A" style="margin: 0;padding: 0">
                    <?php
                    include "inc/product_2.php";
                    ?>

                </ul>
            </div>
            <div id="need_banner_3">
                <div id="banner_3"></div>
            </div>
            <div id="product_top">
                <ul class="owl-carousel" id="product_A" style="margin: 0;padding: 0">
                    <?php
                    include "inc/product_3.php";
                    ?>

                </ul>
            </div>
        </div>
    </div>
</div>
</body>
<script src="tools/slick.min.js"></script>
<script src="tools/owl.carousel.min.js"></script>
<script src="java/product.js"></script>
</html>
