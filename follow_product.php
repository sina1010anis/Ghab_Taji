<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/class_shit.css">
    <link rel="stylesheet" href="css/edit_email_S.css">
    <link rel="stylesheet" href="css/basket_f.css">
    <script src="tools/jquery-3.3.1.min.js"></script>
    <script src="https://kit.fontawesome.com/d4c29863c5.js" crossorigin="anonymous"></script>

</head>
<body>
<div id="container" class="container_S">
    <div class="row_S">
        <div id="edit_pass">
            <div id="model">
                <h2>پیگیری محصولات <i class="fas fa-cart-arrow-down"></i></h2>
            </div>
            <ul class="ul_D">
                <?php
                if (isset($_COOKIE['ghab_taji'])) {
                    include 'inc/config.php';
                    $sql = "select * from tbl_buy where cookiename='" . $_COOKIE['ghab_taji'] . "' ORDER BY `tbl_buy`.`id` DESC";
                    $stmt = $link->prepare($sql);
                    $stmt->execute();
                    while ($n = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        $name = $n['product_buy'];
                        $T_buy = $n['T_buy'];
                        $date = $n['date'];
                        $status = $n['status'];
                        $code = $n['code_t'];
                        echo '
                        
                                        <li>
                    <p class="btn_view_product">محصولات سفارش داده شده <i class="fas fa-caret-down"></i></p>
                    <p class="btn_date_product">تاریخ سفارش <i class="fas fa-caret-down"></i></p>
                    <p class="btn_code_product">کد سفارش <i class="fas fa-caret-down"></i></p>
                    <p class="btn_buy_product">پرداخت <i class="fas fa-caret-down"></i></p>
                    <p class="btn_status_product">وضعیت <i class="fas fa-caret-down"></i></p>
                    <div id="name_product">
                        <p>' . $name . '</p>
                    </div>
                    <div id="date_product">
                        <p>' . $date . '</p>
                    </div>
                    <div id="code_product">
                        <p>' . $code . '</p>
                    </div>
                    
                    <div id="status_product">
                ';
                        if ($status == 0 ){
                            echo '<p>تایید سفارش</p>';
                        }if ($status == 1){
                            echo '<p>در حال اماده سازی سفارش</p>';
                        }if ($status == 2){
                            echo '<p>خروج از فروشگاه</p>';
                        }if ($status == 3){
                            echo '<p>تحویل به پست</p>';
                        }if ($status == 4){
                            echo '<p>محصول به دست مشتری رسیده است</p>';
                        }


                        echo '</div>';
                    echo '<div id="buy_product">';
                        if ($T_buy == 0 ){
                            echo '<p>منتظر پرداخت </p>';
                        }if ($T_buy == 200){
                            echo '<p>پرداخت شده</p>';
                        }if ($T_buy == 404){
                            echo '<p>پرداخت با خطلا مواجه شده</p>';
                        }

                    echo '</div>
</li>
';


                        

                    }
                }
                ?>

            </ul>
        </div>
    </div>
</div>
</body>
<script src="java/status_product.js"></script>
</html>
