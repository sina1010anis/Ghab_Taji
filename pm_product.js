$("#btn_send_pm").click(function () {
    var err = 0;
    var name = $("#name_user").val();
    var text = $("#pm_P").val();
    var code = $("#captcha_pm_user").val();
    var id = $(this).attr('class');
    if (name == '') {
        err = 1;
        $("#name_user").css({"border": "red 1px solid"})
    } else {
        $("#name_user").css({"border": "#eee 1px solid"})
    }
    if (text == '') {
        err = 1;
        $("#pm_P").css({"border": "red 1px solid"})
    } else {
        $("#pm_P").css({"border": "#eee 1px solid"})
    }
    if (code == '') {
        err = 1;
        $("#captcha_pm_user").css({"border": "red 1px solid"})
    } else {
        $("#captcha_pm_user").css({"border": "#eee 1px solid"})
    }
    if (err == 0) {
        $.ajax({
            url: "send_pm_DE_S.php",
            data: {name: name, id: id, text: text, code: code},
            type: "POST"
        }).done(function (msg) {
            if (msg == 'error : 405') {
                alert('کد امنیتی اشتباه وارد شده است');
            }
            if (msg == 'error : 109') {
                alert('یکی از فیلد ها خالی است');
            }
            if (msg == 'error : 200') {
                $("#need_pm_ok").show(200);
                $("#need_pm_DE_S").hide(200);
                $("#btn_F_pm").click(function () {
                    $("#need_pm_ok").hide(200);
                    $("#need_err").hide(200)
                });
            }
        });
    }
    if (err == 1) {
        return false;
    }

});
$("#new_pm").click(function () {
    $("#need_pm_DE_S").show(200);
    $("#need_err").show(200);
});
$(".fa-times").click(function () {
    $("#need_pm_DE_S").hide(200);
    $("#need_err").hide(200);
});