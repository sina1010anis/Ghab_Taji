<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/class_shit.css">
    <link rel="stylesheet" href="css/message.css">
    <link rel="stylesheet" href="css/pm_admin.css">
    <link rel="stylesheet" href="tools/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/d4c29863c5.js" crossorigin="anonymous"></script>
    <script src="tools/jquery-3.3.1.min.js"></script>
</head>
<body>
<div id="container" class="container_S">
    <div class="row_S">
        <div style="max-height: 500px;overflow-y: scroll" id="edit_pass">
            <div id="model">
                <h2>ارتباط با مدیر <i class="fas fa-exchange-alt"></i></h2>
            </div>
            <div id="view_pm">

                <table class="table table-bordered">
                    <tr>
                        <th class="font">کد پیام</th>
                        <th class="font">نام کاربر</th>
                        <th class="font">متن پیام</th>
                        <th class="font">تاریخ ارسال</th>
                    </tr>
                    <?php
                    include "inc/config.php";
                    include "tools/jdf.php";
                    $sql = "select * from tbl_pm_admin_user where email_user='" . $_SESSION['email_taji'] . "'";
                    $stmt = $link->prepare($sql);
                    $stmt->execute();
                    while ($n = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        $date = $n['date'];
                        $text = $n['pm'];
                        $id = $n['id'];
                        echo '
                                                                            <tr class="bu">
                                                        <th class="font_s">' . $id . '</th>
                                                        <th class="font_s">' . $_SESSION['email_taji'] . '</th>
                                                        <th class="font_s">' . $text . '</th>
                                                        <th class="font_s">' . $date . '</th>
                                                    </tr>
                                                        ';
                    }
                    ?>
                    <?php
                    include "inc/config.php";
                    $sqlA = "select * from tbl_pm_send_admin where user='" . $_SESSION['email_taji'] . "'";
                    $stmtA = $link->prepare($sqlA);
                    $stmtA->execute();
                    while ($n = $stmtA->fetch(PDO::FETCH_ASSOC)) {
                        $name = $n['name'];
                        $textA = $n['pm'];
                        echo '
                                            <tr class="ge">
                        <th class="font_s"></th>
                        <th class="font_s">' . $name . '</th>
                        <th class="font_s">' . $textA . '</th>
                        <th class="font_s"></th>
                    </tr>
                        ';
                    }
                    ?>
                </table>

            </div>
        </div>
        <span class="font" id="btn_new_pm"><span>ارسال پیام جدید </span> <i class="fas fa-envelope"></i></span>

    </div>
</div>
<div id="need_send_pm">
           <div id="chat">
               <i class="fas fa-times-circle"></i>
                <textarea class="font" placeholder="متن پیام" name="" id="text_pm" cols="30" rows="10"></textarea>
                <div id="send_pm" class="font">ارسال</div>
            </div>
</div>
<div id="need_pm"></div>
<div id="ok_P">
    <p align="center">
        <i class="far fa-check-circle"></i>
    </p>
    <h4 align="center">پیام شما با موفقیت ارسال شد لطفا منتظر جواب مدیر سایت باشید</h4>
    <p id="btn_err" align="center">باشه</p>
</div>
<script src="pm_user_admin.js"></script>
</body>
</html>
