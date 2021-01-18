<?php
session_start();
include 'inc/config.php';
$sql="select * from tbl_buy where date='".$_SESSION['time']."' and cookiename='".$_COOKIE['ghab_taji']."'";
$stmt=$link->prepare($sql);
$stmt->execute();
$n=$stmt->fetch(PDO::FETCH_ASSOC);
$price=$n['total_price'];
    $MerchantID = 'XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX';
    $Amount = $price; //Amount will be based on Toman
    $Authority = $_GET['Authority'];

    if ($_GET['Status'] == 'OK') {
        // URL also can be ir.zarinpal.com or de.zarinpal.com
        $client = new SoapClient('https://sandbox.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);

        $result = $client->PaymentVerification([
            'MerchantID'     => $MerchantID,
            'Authority'      => $Authority,
            'Amount'         => $Amount,
        ]);

        if ($result->Status == 100) {
            echo 'Transation success. RefID:'.$result->RefID;
            $sqlA="update tbl_buy set token='".$Authority."' where date='".$_SESSION['time']."' and cookiename='".$_COOKIE['ghab_taji']."'";
            $stmtA=$link->prepare($sqlA);
            $stmtA->execute();
            $sqlA="update tbl_buy set T_buy=200 where date='".$_SESSION['time']."' and cookiename='".$_COOKIE['ghab_taji']."'";
            $stmtA=$link->prepare($sqlA);
            $stmtA->execute();

        } else {
            echo 'Transation failed. Status:'.$result->Status;
            $sqlB="update tbl_buy set T_buy=404 where date='".$_SESSION['time']."' and cookiename='".$_COOKIE['ghab_taji']."'";
            $stmtB=$link->prepare($sqlB);
            $stmtB->execute();
        }
    } else {
        echo 'Transaction canceled by user';
        $sqlB="update tbl_buy set T_buy=404 where date='".$_SESSION['time']."' and cookiename='".$_COOKIE['ghab_taji']."'";
        $stmtB=$link->prepare($sqlB);
        $stmtB->execute();
    }
