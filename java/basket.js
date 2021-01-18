$(".fa-shopping-bag").click(function () {
    $("#view_basket").stop().slideToggle(500);
    $("#need_basket").stop().fadeToggle(500)
});
$("#need_basket").click(function () {
    $("#need_basket").stop().fadeOut(500);
    $("#view_basket").stop().slideUp(500);
});