<?php
function eVip($me){
    if (is_array($me)){
        echo "<div style='font-family: Arial;background-color: #8796ff;margin:0 50px 10px 50px;text-align: center;border-radius: 10px;color: white;border: #888888 2px solid'>";
        echo "<pre>";
        print_r($me);
        echo "</pre>";
        echo "</div>";
    }if (is_string($me)){
        echo "<div style='font-family: Arial;background-color: #fff168;margin:0 50px 10px 50px;text-align: center;border-radius: 10px;color: #000000;border: #888888 2px solid'>";
        echo "<pre>";
        echo $me;
        echo "</pre>";
        echo "</div>";
    }
}
function eError($me){
    echo "<div style='position: relative;top: 50px;font-family: Arial;background-color: #ff8f7b;margin:0 50px 10px 50px;text-align: center;border-radius: 10px;color: white;border: #ff0000 2px solid'>";
    echo "<pre>";
    echo $me;
    echo "</pre>";
    echo "</div>";
}
function eView($me){
    echo "<div style='position: relative;top: 50px;font-family: Arial;background-color: #706eff;margin:0 50px 10px 50px;text-align: center;border-radius: 10px;color: #000000;border: #1200ff 2px solid'>";
    echo "<h3>";
    echo $me;
    echo "</h3>";
    echo "</div>";
}
function eOk($me){
    echo "<div style='font-family: Arial;background-color: #81ff66;margin:0 50px 10px 50px;text-align: center;border-radius: 10px;color: #000000;border: #64ff00 2px solid'>";
    echo "<h3>";
    echo $me;
    echo "</h3>";
    echo "</div>";
}
function SQL_ERROR($model){
    $model->setAttributo(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}


