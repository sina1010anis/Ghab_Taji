<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/class_shit.css">
    <link rel="stylesheet" href="css/message.css">
    <link rel="stylesheet" href="tools/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/d4c29863c5.js" crossorigin="anonymous"></script>
</head>
<body>
<div id="container" class="container_S">
    <div class="row_S">
        <div style="max-height: 500px;overflow-y: scroll" id="edit_pass">
            <div id="model">
                <h2>پیام های مدیر <i class="fas fa-envelope"></i></h2>
            </div>
            <table class="table table-hover">
                <tr id="top">
                    <th>ایدی پیام</th>
                    <th>موضوع پیام</th>
                    <th>متن پیام</th>
                    <th>تاریخ ارسال شده</th>
                </tr>
                <?php
                include "inc/config.php";
                include "tools/jdf.php";
                $sql="select * from tbl_pm_admin where email_user='".$_SESSION['email_taji']."' or email_user='all'";
                $stmt=$link->prepare($sql);
                $stmt->execute();
                while ($n=$stmt->fetch(PDO::FETCH_ASSOC)){
                    $title=$n['titel_pm'];
                    $id=$n['id'];
                    $text=$n['text_pm'];
                    $date=jdate('Y/n/j');
                    echo '
                                    <tr class="tr_t">
                    <th>'.$id.'</th>
                    <th>'.$title.'</th>
                    <th>'.$text.'</th>
                    <th>'.$date.'</th>
                </tr>
                    ';
                }
                ?>

            </table>

        </div>
    </div>
</div>
</body>
</html>