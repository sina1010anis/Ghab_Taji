$("#btn_buy_fd").click(function () {
    var err=0;
    var product=$(".table-hover .font_C .name").text();
    var number=$(".table-hover .font_C .number_f").text();
    var family=$("input[name=family]").val();
    var name=$("input[name=name]").val();
    var location=$("input[name=location]").val();
    var mobile_home=$("input[name=mobile_home]").val();
    var city=$("input[name=city]").val();
    var mobile=$("input[name=mobile]").val();
    var family_s=$("input[name=family]");
    var sum_price=$(".total_price").text();
    var name_s=$("input[name=name]");
    var location_s=$("input[name=location]");
    var mobile_home_s=$("input[name=mobile_home]");
    var city_s=$("input[name=city]");
    var mobile_s=$("input[name=mobile]");
    if (family === ''){
        err=1;
        family_s.css({"border-bottom" : "1px red solid"});
        family_s.val('این فیلد خالی است');
    }else {
        family_s.css({"border-bottom" : "1px black solid"})
    }
    if (name === ''){
        err=1;
        name_s.css({"border-bottom" : "1px red solid"});
        name_s.val('این فیلد خالی است');
    }else {
        name_s.css({"border-bottom" : "1px black solid"})
    }
    if (location === ''){
        err=1;
        location_s.css({"border-bottom" : "1px red solid"});
        location_s.val('این فیلد خالی است');
    }else {
        location_s.css({"border-bottom" : "1px black solid"})
    }
    if (isNaN(mobile)){
        err=1;
        mobile_s.css({"border-bottom" : "1px red solid"});
        mobile_s.val('این فیلد فقط باید عدد باشد');
    }else {
        mobile_s.css({"border-bottom" : "1px black solid"})
    }
    if (isNaN(mobile_home)){
        err=1;
        mobile_home_s.css({"border-bottom" : "1px red solid"});
        mobile_home_s.val('این فیلد فقط باید عدد باشد');
    }else {
        mobile_home_s.css({"border-bottom" : "1px black solid"})
    }
    if (mobile === ''  ){
        err=1;
        mobile_s.css({"border-bottom" : "1px red solid"});
        mobile_s.val('این فیلد خالی است');
    }else {
        mobile_s.css({"border-bottom" : "1px black solid"})
    }
    if (city === ''){
        err=1;
        city_s.css({"border-bottom" : "1px red solid"});
        city_s.val('این فیلد خالی است');
    }else {
        city_s.css({"border-bottom" : "1px black solid"})
    }
    if (err == 1){
        return false;
    }
    if (err == 0){
        $.ajax({
            url:'send_buy_bank.php',
            type:"POST",
            data:{sum_price:sum_price , product:product , number:number , family:family , name:name , location:location , mobile_home:mobile_home , city:city , mobile:mobile},
        }).done(function (msg) {
            if (msg == 'err'){
                alert('مشکلی در ارسال اطلعات پیش اماده با پشتیبانی تماس بگیرید')
            }if (msg == 'ok'){
                $("#ok_send").show(200);
                $("#need_pm").show(200);
            }
        });
    }
});
$("#btn_off").click(function () {
    var code_off=$("#input_off").val();
    if (code_off == ''){
        $("#err_code_off").show(200);
        $("#need_pm").show(200);
        $("#btn_err").click(function () {
            $("#err_code_off").hide(200);
            $("#need_pm").hide(200);
        });
    }else {
        $.post("code_off.php" , {code_off:code_off}).done(function (msg) {
            if (msg == 'err'){
                $("#err_code_off_2").show(200);
                $("#need_pm").show(200);
                $("#btn_err_2").click(function () {
                    $("#err_code_off_2").hide(200);
                    $("#need_pm").hide(200);
                });
            }if (msg >0){
                $("#ok").show(200);
                $("#need_pm").show(200);
                $("#btn_err_3").click(function () {
                    $("#ok").hide(200);
                    $("#need_pm").hide(200);
                });
                $(".off").text(msg);
                var total_off=parseInt($(".to_price").text());
                var price_send=parseInt($(".send_price").text());
                var total=total_off*(msg/100);
                var t_P=(total_off-total)+price_send;
                $(".total_price").text(t_P);
            }
        })
    }
});
function f() {
    var number_f = 0;
    $(".number_f").each(function () {
        number_f = number_f + (parseInt($(this).text()))
    });
    $("#sum_number_F").text(number_f);

}

function f1() {
    var number_e = 0;
    var price_e = 0;
    var total_e = 0;
    $(".table-hover .font_C").each(function () {
        number_e = $(this).find('#number_f').text();
        price_e = $(this).find('#price_f').text();
        total_e = total_e + (parseInt(number_e) * parseInt(price_e));

    });
    $("#sum_price_F").text(total_e);
    $(".to_price").text(total_e);
    var total_off=parseInt($(".to_price").text());
    var price_send=parseInt($(".send_price").text());
    $(".total_price").text(total_off+price_send);
}

f();
f1();