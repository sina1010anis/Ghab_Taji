<?php
include 'inc/config.php';
$sql="select * from tbl_menu ORDER BY `tbl_menu`.`id` ASC";
$stmt=$link->prepare($sql);
$stmt->execute();
while ($n=$stmt->fetch(PDO::FETCH_ASSOC)){
    $name=$n['name'];
    $icon=$n['icon'];
    $href=$n['href'];
    echo '
                    <li><a href="'.$href.'">'.$name.' <i class="'.$icon.'"></i></a></li>
                    ';
}