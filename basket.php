<?php
include 'inc/config.php';
$id=$_POST['id'];
$number=$_POST['number'];
$sqlA="update tbl_product set buy=buy+'".$number."' where id='".$id."'";
$stmtA=$link->prepare($sqlA);
$stmtA->execute();
if (isset($_COOKIE['ghab_taji'])){
    $cookie=$_COOKIE['ghab_taji'];
    $sql="select * from tbl_basket where cookiename='".$cookie."' and id_P='".$id."'";
    $stmt=$link->prepare($sql);
    $stmt->execute();
    $num=$stmt->rowCount();
    if ($num == 0){
        $sql="INSERT INTO `tbl_basket` (`id`, `cookiename`, `id_P`, `numbers` ,`T_buy`) VALUES (NULL, '".$cookie."', '$id', '$number' ,0 )";
        $stmt=$link->prepare($sql);
        $stmt->execute();
    }else{
        $sql="update tbl_basket set numbers=numbers+'".$number."' where cookiename='".$cookie."' and id_P='".$id."'";
        $stmt=$link->prepare($sql);
        $stmt->execute();
    }
}else{
    $rand=microtime(true).rand(1,100);
    setcookie('ghab_taji' , $rand , time()+999999999 , '/');
    $sql="INSERT INTO `tbl_basket` (`id`, `cookiename`, `id_P`, `numbers` ,`T_buy`) VALUES (NULL, '$rand', '$id', '$number' ,0 )";
    $stmt=$link->prepare($sql);
    $stmt->execute();

}
