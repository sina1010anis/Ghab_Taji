<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/class_shit.css">
    <link rel="stylesheet" href="css/edit_email.css">
    <link rel="stylesheet" href="css/basket_f.css">
    <script src="https://kit.fontawesome.com/d4c29863c5.js" crossorigin="anonymous"></script>
    <script src="tools/jquery-3.3.1.min.js"></script>
</head>
<body>
<div id="container" class="container_S">
    <div class="row_S">
        <div id="edit_pass">
            <div id="model">
                <h2>سبد خرید <i class="fas fa-shopping-bag"></i></h2>
            </div>
            <div id="view_basket_f">
                <ul class="ul">
                    <?php
                        include 'inc/view_basket_d.php'
                    ?>

                </ul>
            </div>
        </div>
        <span id="sum_number_S">تعداد کل:<span>25</span></span>
        <span id="sum_price_S">قیمت کل :<span></span></span>
        <a href="factor.php" id="buy_S">خرید نهایی</a>

    </div>
</div>
</body>
<script src="java/t_proce.js"></script>
</html>