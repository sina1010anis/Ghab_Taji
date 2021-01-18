$(".btn_view_product").hover(function () {
    $(this).parent('li').find('#name_product').stop().slideToggle(200)
});
$(".btn_date_product").hover(function () {
    $(this).parent('li').find('#date_product').stop().slideToggle(200)
});
$(".btn_code_product").hover(function () {
    $(this).parent('li').find('#code_product').stop().slideToggle(200)
});
$(".btn_status_product").hover(function () {
    $(this).parent('li').find('#status_product').stop().slideToggle(200)
});
$(".btn_buy_product").hover(function () {
    $(this).parent('li').find('#buy_product').stop().slideToggle(200)
});