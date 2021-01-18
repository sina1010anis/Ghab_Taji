function f() {
    var number_f=0;
    $("#number_f span").each(function () {
        number_f=number_f+(parseInt($(this).text()))
    });
    $("#sum_number_S span").text(number_f);
}
function f2() {
    var number_s=0;
    var price_s=0;
    var total_s=0;
    $("#view_basket_f .ul li").each(function () {
        number_s=$(this).find('#number_f span').text();
        price_s=$(this).find('#price_f span').text();
        total_s=total_s+(parseInt(number_s)*parseInt(price_s));

    });
    $("#sum_price_S span").text(total_s);
}
f();
f2();
function f3() {
    var numbers_S=$("#sum_price_S span").text();
    if (numbers_S == 0){
        $("#buy_S").hide();
    }else {
        $("#buy_S").show();
    }
}
f3();