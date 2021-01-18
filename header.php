<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/class_shit.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/d4c29863c5.js" crossorigin="anonymous"></script>
    <script src="tools/jquery-3.3.1.min.js"></script>
</head>
<body>
<div id="container" class="container_S">
    <div class="row_S">
        <div id="col_left">
            <a href="page_user.php">ورود <i class="fas fa-user"></i></a>
            <a href="page_user_new.php">ثبت نام <i class="fas fa-user-plus"></i></a>
        </div>
        <div id="col_right">
            <a href="#"><i class="fas fa-shopping-bag"></i></a>
            <a id="sum_number" href="#"></a>
            <div id="view_basket">
                <ul style="margin: 0;padding: 0">
                    <?php
                        include 'inc/view_basket.php';
                    ?>
                </ul>
            </div>
        </div>

    </div>
</div>
<div id="need_basket"></div>
<div id="alert_delete">
    <i class="fas fa-exclamation-circle"></i>
    <p>ایا از حذف این محصول اطمینان دارد ؟ </p>
    <a href="" id="yes">بله</a>
    <p id="no">بستن این پیغام</p>
</div>
</body>
<script src="java/basket.js"></script>
<script>
    function f3(){
        var number=0;
        $("#number_s span").each(function () {
            number=number+(parseInt($(this).text()));
        });
        $("#sum_number").text(number);
    }
    f3();
    $(".fa-trash-alt").click(function () {
        var id=$(this).attr('id');
        $("#alert_delete").show(200);
        $("#yes").click(function () {
            $("#alert_delete").hide(200);
            $.ajax({
                url:"delete.php",
                type:"POST",
                data:{id:id},
            }).done(function (msg) {
            });
        });
        $("#no").click(function () {
            $("#alert_delete").hide(200);
        })
    });
</script>
</html>