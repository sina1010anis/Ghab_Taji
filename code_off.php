<?php
include 'inc/config.php';
$code=$_POST['code_off'];
$sql="select * from tbl_off where code='".$code."'";
$stmt=$link->prepare($sql);
$stmt->execute();
$num=$stmt->rowCount();
$n=$stmt->fetch(PDO::FETCH_ASSOC);
if ($num == 1){
    echo $n['off'];
}else{
    echo 'err';
}