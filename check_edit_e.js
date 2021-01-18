$("#btn_edit_pass").click(function () {
    var err = 0;
    var email_E = $('input[name=email_old]').val();
    var pass_E = $('input[name=password_old]').val();
    var email_new_E = $('input[name=email_new]').val();
    if (email_E == '') {
        err = 1;
        $('input[name=email_old]').css({"border": "1px red solid"})
    } else {
        $('input[name=email_old]').css({"border": "1px #9b9b9b solid"})
    }
    if (pass_E == '') {
        err = 1;
        $('input[name=password_old]').css({"border": "1px red solid"})
    } else {
        $('input[name=password_old]').css({"border": "1px #9b9b9b solid"})
    }
    if (pass_E.length < 8) {
        err = 1;
        $('input[name=password_old]').css({"border": "1px red solid"});
        $("#err_pass").text('پسورد باید بیشتر از 8 کاکتر باشد')
    } else {
        $('input[name=password_old]').css({"border": "1px #9b9b9b solid"})
    }
    if (email_new_E == '') {
        err = 1;
        $('input[name=email_new]').css({"border": "1px red solid"})
    } else {
        $('input[name=email_new]').css({"border": "1px #9b9b9b solid"})
    }
    if (err == 0) {
        $.ajax({
            url: "check_edit_email.php",
            type: "POST",
            data: {email_E: email_E, pass_E: pass_E, email_new_E: email_new_E}
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