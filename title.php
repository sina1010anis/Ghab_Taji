<?php
switch ($_GET['user']){
    case 'edit_pass':
        echo 'تغییر پسورد';
        break;
    case 'edit_email':
        echo 'تغییر ایمیل';
        break;
    case 'basket':
        echo 'سبد خرید';
        break;
    case 'buy':
        echo 'محصولات خریداری شده';
        break;
    case 'message':
        echo 'پیام های مدیر';
        break;
    case 'support':
        echo 'ارتباط با مدیر';
        break;
}