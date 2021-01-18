<?php
session_start();
include 'inc/config.php';
include 'tools/jdf.php';
$name=$_POST['name'];
$date=jdate('Y:n:j');
$id=$_POST['id'];
$text=$_POST['text'];
$code=$_POST['code'];
if (empty($name) ||empty($text) ||empty($code) ||empty($id)){
    echo 'error : 109';
}else{
    if ($_SESSION['captcha_code_taji'] != $code){
        echo 'error : 405';
    }else{
        $sql = "INSERT INTO `tbl_pm_product` (`id`, `name`, `id_P`, `text` ,`date` , `V_S`) VALUES (NULL, ?, ?, ? , ? , ?)";
        $stmt=$link->prepare($sql);
        $stmt->bindValue(1,$name);
        $stmt->bindValue(2,$id);
        $stmt->bindValue(3,$text);
        $stmt->bindValue(4,$date);
        $stmt->bindValue(5,0);
        $stmt->execute();
        echo 'error : 200';
    }
}