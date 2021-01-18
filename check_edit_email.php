<?php
session_start();
include_once 'inc/config.php';
$email_E = $_SESSION['email_taji'];
$pass_E = $_POST['pass_E'];
$password_E = md5($pass_E);
$email_new = $_POST['email_new_E'];
$sql = "select * from tbl_user_s where email_U='" . $email_E . "' and password_U='" . $password_E . "'";
$stmt = $link->prepare($sql);
$stmt->execute();
$num = $stmt->rowCount();
if ($num == 1) {
    $sqlA = "update tbl_user_s set email_U='" . $email_new . "' where email_U='" . $email_E . "'";
    $stmtA = $link->prepare($sqlA);
    $stmtA->execute();
    echo 'page_user';
} else {
    echo 'no';
}