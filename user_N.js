function check_taji_N() {
    var error=0;
    var name = $('input[name=username_N]').val();
    var email = $('input[name=email_N]').val();
    var pass = $('input[name=password_N]').val();
    var mobile = $('input[name=mobile_N]').val();
    var pass2 = $('input[name=rePassword_N]').val();
    var city = $('input[name=city]').val();
    var code = $('input[name=captcha_cod]').val();

    if (mobile == ''){
        error=1;
        $('input[name=mobile_N]').css({"border-bottom" : "1px #ff0800 solid"});
        $('input[name=mobile_N]').val('شماره موبایل وارد نشده است')
    }else {
        $('input[name=mobile_N]').addClass('ok');
    }
    if (name == ''){
        error=1;
        $('input[name=username_N]').css({"border-bottom" : "1px #ff0800 solid"});
        $('input[name=username_N]').val('نام کاربری وارد نشده است')
    }else {
        $('input[name=username_N]').addClass('ok');
    }
    if (email == ''){
        error=1;
        $('input[name=email_N]').css({"border-bottom" : "1px #ff0800 solid"});
        $('input[name=email_N]').val('ایمیل وارد نشده است')
    }else {
        $('input[name=email_N]').addClass('ok');
    }
    if (pass == ''){
        error=1;
        $('input[name=password_N]').css({"border-bottom" : "1px #ff0800 solid"});
    }else {
        $('input[name=password_N]').addClass('ok');
    }
    if (pass.length<8){
        error=1;
        $('input[name=password_N]').css({"border-bottom" : "1px #ff0800 solid"});
    }else {
        $('input[name=password_N]').addClass('ok');
    }
    if (pass !== pass2){
        error=1;
        $('input[name=repassword_N]').css({"border-bottom" : "1px #ff0800 solid"});
        $('input[name=password_N]').css({"border-bottom" : "1px #ff0800 solid"});
    }else {
        $('input[name=repassword_N]').addClass('ok');
        $('input[name=password_N]').addClass('ok');
    }
    if (pass2 == ''){
        error=1;
        $('input[name=rePassword_N]').css({"border-bottom" : "1px #ff0800 solid"});
    }else {
        $('input[name=rePassword_N]').addClass('ok');
    }
    if (pass2.length<8){
        error=1;
        $('input[name=rePassword_N]').css({"border-bottom" : "1px #ff0800 solid"});
    }else {
        $('input[name=rePassword_N]').addClass('ok');
    }
    if (code == ''){
        error=1;
        $('input[name=captcha_cod]').css({"border-bottom" : "1px #ff0800 solid"});
        $('input[name=captcha_cod]').val("کد امنیتی وارد نشده است")
    }else {
        $('input[name=captcha_cod]').addClass('ok');
    }
    if(error==0){
        $.ajax({
            url:"new_user.php",
            data:{email:email , code:code , name:name , pass:pass , pass2:pass2 , city:city , mobile:mobile},
            type:"POST"
        }).done(function (msg) {
                if (msg == 'page_user_new' || msg == 'page_user'){
                    $("#ok").show(500);
                    $("#ok #btn_err").click(function () {
                        $("#ok").hide(500);
                        window.location.href = msg+".php";
                    })
                }else {
                    $("#err").show(500);
                    $("#btn_err").click(function () {
                        $("#err").hide(500);
                    })
                }
/*            if(msg == 'err'){
                $("#err").show(500);
                $("#btn_err").click(function () {
                    $("#err").hide(500)
                });
            }else {

            }*/

        }).find(function (msg) {

        })
    }

    if (error == 1){
        return false;
    }

}