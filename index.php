<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/d4c29863c5.js" crossorigin="anonymous"></script>
    <title>قاب تاجی</title>
</head>
<body>
<?php include_once 'icon.php'?>
<?php include_once 'header.php'?>
<?php include_once 'menu.php' ?>
<?php include_once 'slider.php'?>
<?php
if (@$_GET['model']=='Sample'){
    include_once 'Sample.php';
}if (@$_GET['model']=='palette'){
    include_once 'palette.php';
}if (empty(@$_GET['model'])){
    include_once 'product.php';
}
if (@$_GET['model']=='model'){
    include_once 'model.php';
}if (@$_GET['model']=='puzzle'){
    include_once 'puzzle.php';
}
if (@$_GET['model']=='set_puzzle'){
    include_once 'set_puzzle.php';
}if (@$_GET['model']=='mirror'){
    include_once 'mirror.php';
}
if (@$_GET['model']=='tools'){
    include_once 'tools.php';
}
?>
<?php include_once 'footer.php' ?>
</body>
</html>
