<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/class_shit.css">
    <link rel="stylesheet" href="css/Sample.css">
</head>
<body>
<div id="container" class="container_S">
    <div class="row_S">
        <div id="view_S">
            <ul class="ul">
                <?php
                include 'inc/config.php';
                $sql="select * from tbl_product where model=1";
                $stmt=$link->prepare($sql);
                $stmt->execute();
                while ($n=$stmt->fetch(PDO::FETCH_ASSOC)){
                    $name=$n['name'];
                    $COMP=$n['COMP'];
                    $img=$n['img'];
                    echo '
                                    <li>
                    <img src="'.$img.'" alt="">
                    <span id="name_item">'.$name.'</span>
                    <div id="COMP_item">'.$COMP.'</div>
                </li>
                    ';
                }
                ?>

            </ul>
        </div>
    </div>
</div>
</body>
</html>