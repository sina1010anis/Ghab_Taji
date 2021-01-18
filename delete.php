<?php
include_once 'inc/config.php';
$sql="DELETE FROM `tbl_basket` WHERE id='".$_POST['id']."'";
$stmt=$link->prepare($sql);
$stmt->execute();