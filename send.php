<?php
session_start();
include_once("functions.php");
include 'inc/config.php';
$sql="select * from tbl_buy where date='".$_SESSION['time']."' and cookiename='".$_COOKIE['ghab_taji']."'";
$stmt=$link->prepare($sql);
$stmt->execute();
$n=$stmt->fetch(PDO::FETCH_ASSOC);
$price=$n['total_price'];
$MerchantID = 'XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX'; //Required
$Amount = $price; //Amount will be based on Toman - Required
$Description = 'توضیحات تراکنش تستی'; // Required
$Email = 'UserEmail@Mail.Com'; // Optional
$Mobile = '09123456789'; // Optional
$CallbackURL = 'http://localhost/s1/ghab_taji/ok_buy.php'; // Required


$client = new SoapClient('https://sandbox.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);

$result = $client->PaymentRequest(
    [
        'MerchantID' => $MerchantID,
        'Amount' => $Amount,
        'Description' => $Description,
        'Email' => $Email,
        'Mobile' => $Mobile,
        'CallbackURL' => $CallbackURL,
    ]
);

//Redirect to URL You can do it also by creating a form
if ($result->Status == 100) {
    Header('Location: https://sandbox.zarinpal.com/pg/StartPay/'.$result->Authority);
    $sqlA="update tbl_buy set T_buy=100 where date='".$_SESSION['time']."' and cookiename='".$_COOKIE['ghab_taji']."'";
    $stmtA=$link->prepare($sqlA);
    $stmtA->execute();
    $sqlB="update tbl_buy set token='".$Authority."' where date='".$_SESSION['time']."' and cookiename='".$_COOKIE['ghab_taji']."'";
    $stmtB=$link->prepare($sqlB);
    $stmtB->execute();
} else {
    echo'ERR: '.$result->Status;
    $sqlB="update tbl_buy set T_buy=404 where date='".$_SESSION['time']."' and cookiename='".$_COOKIE['ghab_taji']."'";
    $stmtB=$link->prepare($sqlB);
    $stmtB->execute();
}
/*    $MerchantID = 'XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX';  //Required
    $Amount = $price; //Amount will be based on Toman  - Required
    $Description = 'توضیحات تراکنش تستی';  // Required
    $Email = 'UserEmail@Mail.Com'; // Optional
    $Mobile = '09123456789'; // Optional
    $CallbackURL = 'verify.php';  // Required

    // URL also can be ir.zarinpal.com or de.zarinpal.com
    $client = new SoapClient('https://sandbox.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);

    $result = $client->PaymentRequest([
        'MerchantID'     => $MerchantID,
        'Amount'         => $Amount,
        'Description'    => $Description,
        'Email'          => $Email,
        'Mobile'         => $Mobile,
        'CallbackURL'    => $CallbackURL,
    ]);

    //Redirect to URL You can do it also by creating a form
    if ($result->Status == 100) {
        header('Location: https://sandbox.zarinpal.com/pg/StartPay/'.$result->Authority);
        $sqlA="update tbl_buy set T_buy=100 where date='".$_SESSION['time']."' and cookiename='".$_COOKIE['ghab_taji']."'";
        $stmtA=$link->prepare($sqlA);
        $stmtA->execute();
        $sqlB="update tbl_buy set token='".$Authority."' where date='".$_SESSION['time']."' and cookiename='".$_COOKIE['ghab_taji']."'";
        $stmtB=$link->prepare($sqlB);
        $stmtB->execute();
    } else {
        echo'ERR: '.$result->Status;
        $sqlB="update tbl_buy set T_buy=404 where date='".$_SESSION['time']."' and cookiename='".$_COOKIE['ghab_taji']."'";
        $stmtB=$link->prepare($sqlB);
        $stmtB->execute();
    }*/
