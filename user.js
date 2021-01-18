function check_taji() {
    var error = 0;
    var name = $('input[name=username]').val();
    var pass = $('input[name=password]').val();
    var code = $('input[name=captcha]').val();
    if (name == '') {
        error = 1;
        $('input[name=username]').css({"border-bottom": "2px #ff0800 solid"});
        $('input[name=username]').val('نام کاربری وارد نشده است')
    } else {
        $('input[name=username]').addClass('ok');
    }
    if (pass == '') {
        error = 1;
        $('input[name=password]').css({"border-bottom": "1px #ff0800 solid"});
    } else {
        $('input[name=password]').addClass('ok');
    }
    if (pass.length < 8) {
        error = 1;
        $('input[name=password]').css({"border-bottom": "1px #ff8400 solid"});
    } else {
        $('input[name=password]').addClass('ok');
    }
    if (code == '') {
        error = 1;
        $('input[name=captcha]').css({"border-bottom": "1px #ff0800 solid"});
        $('input[name=captcha]').val('کد امنیتی وارد نشده است')
    } else {
        $('input[name=captcha]').addClass('ok');
    }
    if (error == 0) {

        $.ajax({
            url: "check_page_user.php",
            data: {code: code, name: name, pass: pass},
            type: "POST",
        }).done(function (msg) {
            if (msg == 'page_user') {
                $("#error").show(500);
                $("#btn_err").click(function () {
                    $("#error").hide(500);
                })
            }
            if (msg == 'panel_user') {
                window.location.href = msg + '.php?user=edit_pass'

            }
        });
    }

    if (error == 1) {
        return false;
    }

}