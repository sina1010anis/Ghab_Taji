<?php
session_start();
include "inc/config.php";
include_once 'check_text.php';
include "tools/jdf.php";
$date=jdate('Y/n/j H:i:s');
if (empty($_POST['text'])){
    echo 'پیامی ارسال نشده';
}else{
   $email=$_SESSION['email_taji'];
   $sql="INSERT INTO `tbl_pm_admin_user` (`id`, `email_user`, `pm`, `date`) VALUES (NULL, '$email', '".$_POST['text']."', '$date')";
   $stmt=$link->prepare($sql);
   $stmt->execute();
   echo 'ok';
}