<?php
include 'config.php';
if (isset($_COOKIE['ghab_taji'])) {
    $sql = "select * from tbl_basket where cookiename='" . $_COOKIE['ghab_taji'] . "'";
    $stmt = $link->prepare($sql);
    $stmt->execute();
    while ($n = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $number = $n['numbers'];
        $id = $n['id'];
        $id_P = $n['id_P'];
        $sqlA = "select * from tbl_product where id='" . $id_P . "'";
        $stmtA = $link->prepare($sqlA);
        $stmtA->execute();
        $nA = $stmtA->fetch(PDO::FETCH_ASSOC);
        $name = $nA['name'];
        $price = $nA['price'];
        $img = $nA['img'];
        $code = $nA['code'];
        echo '
                            <li>
                        <img src="'.$img.'" alt="">
                        <span id="name_D">مدل:' . $name . '</span>
                        <span>کد:' . $code . '</span>
                        <span id="number_f">تعداد:<span>'.$number.'</span></span>
                        <span id="price_f">قیمت:<span>'.$price.'</span></span>
                    </li>
        ';
    }
}