$("#btn_edit_pass").click(function () {
    var err = 0;
    var email = $('input[name=email_old]').val();
    var pass = $('input[name=password_old]').val();
    var pass_new = $('input[name=password_new]').val();
    if (email == '') {
        err = 1;
        $('input[name=email_old]').css({"border": "1px red solid"})
    } else {
        $('input[name=email_old]').css({"border": "1px #9b9b9b solid"})
    }
    if (pass == '') {
        err = 1;
        $('input[name=password_old]').css({"border": "1px red solid"})
    } else {
        $('input[name=password_old]').css({"border": "1px #9b9b9b solid"})
    }
    if (pass.length < 8) {
        err = 1;
        $("#err_pass").text("پسورد باید بیشتر از 8 کاراکتر باشد");
        $('input[name=password_old]').css({"border": "1px #ff6a00 solid"})
    } else {
        $('input[name=password_old]').css({"border": "1px #9b9b9b solid"})
    }
    if (pass_new == '') {
        err = 1;
        $('input[name=password_new]').css({"border": "1px red solid"})
    } else {
        $('input[name=password_new]').css({"border": "1px #9b9b9b solid"})
    }
    if (pass_new.length < 8) {
        err = 1;
        $('input[name=password_new]').css({"border": "1px #ff6a00 solid"})
    } else {
        $('input[name=password_new]').css({"border": "1px #9b9b9b solid"})
    }
    if (err == 0) {
        $.ajax({
            url: "check_edit_pass.php",
            type: "POST",
            data: {email: email, pass: pass, pass_new: pass_new}
        }).done(function (msg) {
            if (msg == 'no') {
                $("#error").show(200);
                $("#error #btn_err").click(function () {
                    $(this).parent('#error').hide(200)
                });
            }
            if (msg == 'page_user') {
                $("#ok").show(200);
                $("#ok #btn_err").click(function () {
                    $(this).parent('#ok').hide(200);
                    window.location.href = msg + '.php';
                });
            }

        })
    }
    if (err == 1) {
        return false;
    }
});
