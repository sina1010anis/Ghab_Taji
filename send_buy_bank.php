<?php
session_start();
include 'inc/config.php';
include 'tools/jdf.php';
$product = $_POST['product'];
$number = $_POST['number'];
$family = $_POST['family'];
$name = $_POST['name'];
$location = $_POST['location'];
$mobile_home = $_POST['mobile_home'];
$city = $_POST['city'];
$mobile = $_POST['mobile'];
$sum_price = $_POST['sum_price'];
$date = jdate('Y/n/j H:i:s f');
$username=$_SESSION['email_taji'];
if (isset($_COOKIE['ghab_taji'])) {
    $sql = "INSERT INTO `tbl_buy` (`id`, `name_user`, `family_user`, `city_user`, `location_user`, `mobile_yser`, `phoneHome_user`, `T_buy`, `cookiename`, `user_name`, `date` , `product_buy` , `number_buy` , `total_price` , `token` , `code_t` , `status`)
        VALUES (NULL, ? , ? , ? , ? ,? , ? , ? , ? , ? , ? , ? , ? ,? ,? , ? , ?)";
    $stmt = $link->prepare($sql);
    $stmt->bindValue(1,$name);
    $stmt->bindValue(2,$family);
    $stmt->bindValue(3,$city);
    $stmt->bindValue(4,$location);
    $stmt->bindValue(5,$mobile);
    $stmt->bindValue(6,$mobile_home);
    $stmt->bindValue(7,0);
    $stmt->bindValue(8,$_COOKIE['ghab_taji']);
    $stmt->bindValue(9,$username);
    $stmt->bindValue(10,$date);
    $stmt->bindValue(11,$product);
    $stmt->bindValue(12,$number);
    $stmt->bindValue(13,$sum_price);
    $stmt->bindValue(14,0);
    $stmt->bindValue(15,0);
    $stmt->bindValue(16,0);
    $stmt->execute();
    $_SESSION['time']=$date;
    echo 'ok';
}else{
    echo 'err';
}