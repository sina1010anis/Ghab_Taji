<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="css/class_shit.css">
    <link rel="stylesheet" href="css/edit_email.css">
    <script src="tools/jquery-3.3.1.min.js"></script>
</head>
<body>
<div id="container" class="container_S">
    <div class="row_S">
        <div id="edit_pass">
            <div id="model">
                <h2>تغییر ایمیل <i class="fas fa-at"></i></h2>
            </div>
            <div id="form">
                <p>!فیلد ها را با دقت پر کنید</p>
                <p id="err_pass"></p>
                <input class="input" type="email" name="email_old" id="name_old" placeholder="ایمیل قدیمی">
                <input class="input" type="password" name="password_old" id="password_old" placeholder="پسورد">
                <input class="input" type="email" name="email_new" id="password_new" placeholder="ایمیل جدید">
                <input value="تغییر ایمیل"  class="input_btn" type="submit" name="btn_edit_pass" id="btn_edit_pass" onclick="edit_email()">
            </div>
            <p align="center">. بعد از تغییر ایمیل شما به صفحه ورود هدایت میشود <i class="fas fa-exclamation-circle"></i></p>
        </div>

    </div>
</div>
<div id="error">
    <p align="center">
        <i class="far fa-times-circle"></i>
    </p>
    <h3 align="center">ایمیل یا پسورد وارده شده اشتباه است</h3>
    <p id="btn_err" align="center">باشه</p>
</div>
<div id="ok">
    <p align="center">
        <i class="far fa-check-circle"></i>
    </p>
    <h3 align="center">ایمیل شما با موفقیت تغییر کرد</h3>
    <p id="btn_err" align="center">قبول</p>
</div>
</body>
<script src="check_edit_e.js"></script>
</html>
