<?php
include "config.php";
$sqlC = "select * from tbl_product where id='" . $_GET['id_P'] . "'";
$stmtC = $link->prepare($sqlC);
$stmtC->execute();
$nC = $stmtC->fetch(PDO::FETCH_ASSOC);
$name = $nC['name'];
$id = $nC['id'];
$price = $nC['price'];
$code = $nC['code'];
$item_1 = $nC['item_1'];
$item_2 = $nC['item_2'];
$item_3 = $nC['item_3'];
$item_4 = $nC['item_4'];
$item_5 = $nC['item_5'];
$COMP = $nC['COMP'];