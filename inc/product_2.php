<?php
include 'config.php';
$sql = "select * from tbl_product ORDER BY `tbl_product`.`id` DESC";
$stmt = $link->prepare($sql);
$stmt->execute();
while ($n = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $id = $n['id'];
    $name = $n['name'];
    $img = $n['img'];
    $price = $n['price'];
    echo '
                <li class="sl65" id="' . $id . '">
                <a style="text-decoration: none;color: #353535" href="DE_S.php?id_P='.$id.'">
                <img src="'.$img.'" alt="">
                <span id="name_PS" >'.$name.'</span>
                <span id="price_PS" align="center">ریال:'.$price.'</span>    
                </a>
</li>
                        ';

}