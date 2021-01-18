<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
if (isset($_POST['btn'])){
    $name=$_FILES['file']['name'];
    $format=$_FILES['file']['type'];
    $tmp=$_FILES['file']['tmp_name'];
    $size=$_FILES['file']['size']/1024;
    $name_vip=$name . rand(1,200);
    if (is_uploaded_file($tmp)){
        $type=array('image/png' , 'image/jpeg' , 'image/jpg');
        if (in_array($format , $type)){
            if (move_uploaded_file($tmp , 'img/'.$name_vip)){
                echo 'ok';
            }else{
                echo 'no';
            }
        }else{
            echo 'no';
        }
    }else{
        echo 'no';
    }
}else{
    echo 'no';
}
?>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file" id="file">
    <button name="btn" type="submit">ارسال</button>
</form>
</body>
</html>