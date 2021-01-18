<?php
include 'config.php';
$sql="select * from tbl_img_slide";
$stmt=$link->prepare($sql);
$stmt->execute();
while ($n=$stmt->fetch(PDO::FETCH_ASSOC)){
    $img=$n['img'];
    echo '
                    <img style="border-radius: 10px;"  width="100%" height="100%" src="'.$img.'" alt="">
                    ';
}