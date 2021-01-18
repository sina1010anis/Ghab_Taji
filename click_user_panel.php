<?php
switch ($_GET['user']){
    case 'edit_pass':
        include_once 'user_edit_pass.php';
        break;
    case 'edit_email':
        include_once 'user_edit_email.php';
        break;
    case 'message':
        include_once 'message.php';
        break;
    case 'support':
        include_once 'support.php';
        break;
    case 'basket':
        include_once 'user_basket.php';
        break;
    case 'buy':
        include_once 'follow_product.php';
        break;
    case 'exit':
        header("location: index.php");
        break;
}