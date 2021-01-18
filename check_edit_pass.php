<?php
session_start();
include_once 'inc/config.php';
$email_S=$_SESSION['email_taji'];
$pass=$_POST['pass'];
$password=md5($pass);
$pass_new=$_POST['pass_new'];
$password_new=md5($pass_new);
$sql="select * from tbl_user_s where email_U='".$email_S."' and password_U='".$password."'";
$stmt=$link->prepare($sql);
$stmt->execute();
$num=$stmt->rowCount();
if (isset($_SESSION['email_taji']) && $num == 1){
    $sqlA="update tbl_user_s set password_U='".$password_new."' where email_U='" . $email_S . "'";
    $stmtA=$link->prepare($sqlA);
    $stmtA->execute();
    echo 'page_user';
}else{
    echo 'no';
}
