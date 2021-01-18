<?php
session_start();
include_once 'inc/config.php';
$name=$_POST['name'];
$pass=$_POST['pass'];
$password=md5($pass);
if ($_POST['code'] == '' || $_POST['name'] == '' ||$_POST['pass'] == '' ){
    echo 'page_user';
}else{
    if ($_SESSION['captcha_code_taji'] == $_POST['code']){
        $sql="select * from tbl_user_s where email_U='".$_POST['name']."' and password_U='".$password."'";
        $stmt=$link->prepare($sql);
        $stmt->execute();
        $num=$stmt->rowCount();
        if ($num == 1){
            $_SESSION['email_taji'] = $_POST['name'];
            echo 'panel_user';
        }else{
            echo 'page_user';
        }
    }else{
        echo 'page_user';
    }
}
