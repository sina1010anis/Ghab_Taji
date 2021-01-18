<?php
include 'config.php';
if (isset($_COOKIE['ghab_taji'])){
    $sql="select * from tbl_basket where cookiename='".$_COOKIE['ghab_taji']."'";
    $stmt=$link->prepare($sql);
    $stmt->execute();
    while ($n=$stmt->fetch(PDO::FETCH_ASSOC)){
        $number=$n['numbers'];
        $id=$n['id'];
        $id_P=$n['id_P'];
        $sqlA="select * from tbl_product where id='".$id_P."'";
        $stmtA=$link->prepare($sqlA);
        $stmtA->execute();
        $nA=$stmtA->fetch(PDO::FETCH_ASSOC);
        $name=$nA['name'];
        $price=$nA['price'];
        $img=$nA['img'];
        echo '
                                                <li>
                        <img src="'.$img.'" alt="">
                        <p>مدل:'.$name .'</p>
                        <p id="number_s">تعداد:<span>'.$number.'</span></p>
                        <p>قیمت:'.$price.'</p>
                        <p><i id="'.$id.'" class="fas fa-trash-alt"></i></p>
                    </li>
                            ';
    }
}else{
    echo '
                        <i class="fab fa-creative-commons-zero"></i>
                        ';
}