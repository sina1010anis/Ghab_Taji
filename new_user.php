<?php
session_start();
include_once "inc/config.php";
$name = $_POST['name'];
$email = $_POST['email'];
$code = $_POST['code'];
$pass = $_POST['pass'];
$password = md5($pass);
$pass2 = $_POST['pass2'];
$city = $_POST['city'];
$mobile = $_POST['mobile'];
if (empty($name) || empty($email) || empty($code) || empty($pass) || empty($pass2) || $pass !== $pass2) {
    echo "page_user_new";
} else {
    if ($_SESSION['captcha_code_taji'] == $_POST['code']) {
        $sql = "select * from tbl_user_s where email_U='" . $email . "' or mobile_U='" . $mobile . "'";
        $stmt = $link->prepare($sql);
        $stmt->execute();
        $num = $stmt->rowCount();
        if ($num == 1) {
            echo "err";
        } else {
            $_SESSION['user_taji']=$_POST['name'];
            $sqlA = "INSERT INTO `tbl_user_s` (`id`, `name_U`, `email_U`, `password_U`, `mobile_U`, `city_U`) VALUES (NULL, ?, ?, ?, ?, ?);";
            $stmtA = $link->prepare($sqlA);
            $stmtA->bindValue(1, $name);
            $stmtA->bindValue(2, $email);
            $stmtA->bindValue(3, $password);
            $stmtA->bindValue(4, $mobile);
            $stmtA->bindValue(5, $city);
            $stmtA->execute();
            echo "page_user";
        }

    }
}



