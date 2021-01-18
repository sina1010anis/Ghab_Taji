<?php
session_start();
$captcha_num = rand(1000, 9999);
$_SESSION['captcha_code_taji'] = $captcha_num;
$font_size = 30;
$img_width = 150;
$img_height = 50;
header('Content-type: image/jpeg');
$image = imagecreate($img_width, $img_height);
imagecolorallocate($image, 255, 255, 255);
$text_color = imagecolorallocate($image, 95, 27, 185);
imagettftext($image, $font_size,8 , 30, 30, $text_color, __DIR__ . '/sahel.ttf', $captcha_num);
imagejpeg($image);