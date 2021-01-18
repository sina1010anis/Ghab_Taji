<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/class_shit.css">
    <link rel="stylesheet" href="css/Sample.css">
    <link rel="stylesheet" href="css/DE_S.css">
    <script src="tools/jquery-3.3.1.min.js"></script>
</head>
<body>
<div id="container" class="container_S">
    <div class="row_S">
        <div id="view_S">
            <ul class="ul">
                <?php
                include 'inc/config.php';
                $sql="select * from tbl_product where model=2";
                $stmt=$link->prepare($sql);
                $stmt->execute();
                while ($n=$stmt->fetch(PDO::FETCH_ASSOC)){
                    $name=$n['name'];
                    $id=$n['id'];
                    $COMP=$n['COMP'];
                    $img=$n['img'];
                    echo '
                                    <li>
                    <img src="'.$img.'" alt="">
                    <span id="name_item">'.$name.'</span>
                    <div id="COMP_item">'.$COMP.'</div>
                    <div class="btn_buy_item">اضافه  به سبد خرید <i class="fas fa-cart-arrow-down"></i></div>
                    <div id="need_buy">
                    <input type="number" class="number_item" name="number_item" value="1" id="number_item '.$id.'" placeholder="تعداد">
                    <div class="btn_buy_item_f " id="'.$id.'"><i class="fas fa-cart-plus"></i></div>
</div>
                </li>
                    ';
                }
                ?>

            </ul>
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
</body>
<script src="item_basket.js"></script>
</html>