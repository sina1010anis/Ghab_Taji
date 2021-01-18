<?php
if (isset($_COOKIE['ghab_taji'])) {
    include 'config.php';
    $sql = "select * from tbl_basket where cookiename='" . $_COOKIE['ghab_taji'] . "'";
    $stmt = $link->prepare($sql);
    $stmt->execute();
    while ($n = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $number = $n['numbers'];
        $id_P = $n['id_P'];
        $id = $n['id'];
        $sqlA = "select * from tbl_product where id='" . $id_P . "'";
        $stmtA = $link->prepare($sqlA);
        $stmtA->execute();
        $nA = $stmtA->fetch(PDO::FETCH_ASSOC);
        $name = $nA['name'];
        $price = $nA['price'];
        echo '
                                <tr class="font_C">
                <th class="name">(' . $name . ')</th>
                <th id="number_f" class="number_f">' . $number . ' </th>
                <th id="price_f" class="price_f">' . $price . '</th>
            </tr>
                    ';
    }
}