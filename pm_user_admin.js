$("#send_pm").click(function () {
    var er = 0;
    var text = $("#text_pm").val();
    if (text == '') {
        er = 1;
        $("#text_pm").css({"border": "1px red solid"});
    } else {
        er = 0;
        $("#text_pm").css({"border": "1px #858585 solid"});
    }
    if (er == 0) {
        $.post("pm_user.php", {text: text, send: true}).done(function (msg) {
            if (msg == 'ok') {
                $("#ok_P").show(200);
            }
            $("#btn_err").click(function () {
                $(this).parent('#ok_P').hide(200)
            });
        })
    }
    if (er == 1) {
        return false;
    }
});
$("#btn_new_pm").click(function () {
    $("#need_send_pm").show(300);
    $("#need_pm").show(300);
});
$(".fa-times-circle").click(function () {
    $("#need_send_pm").hide(300);
    $("#need_pm").hide(300);
});