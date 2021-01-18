<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <link rel="stylesheet" href="css/class_shit.css">
    <link rel="stylesheet" href="css/slide.css">
    <link rel="stylesheet" href="tools/slick-theme.css">
    <link rel="stylesheet" href="tools/slick.css">
    <script src="tools/jquery-3.3.1.min.js"></script>

</head>
<body>
<div id="container" class="container_S">
    <div  class="row_S">
        <div class="single-item">
            <?php
            include 'inc/slider.php'
            ?>
        </div>
        <div id="emt">
            <div class="wow animate__animated animate__zoomIn" id="vitrin">
                <p>ارسال سریع</p>
            </div>
            <div class="wow animate__animated animate__zoomIn" id="vitrin1">
                <p>ارسال به کل کشور</p>
            </div>
            <div class="wow animate__animated animate__zoomIn" id="vitrin2">
                <p>تخفیف های ویژه</p>
            </div>
        </div>

    </div>
</div>
</body>
<script src="tools/wow.min.js"></script>
<script>
    new WOW().init();
</script>
<script src="tools/slick.min.js"></script>
<script src="java/slider.js"></script>
</html>
