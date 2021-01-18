$(".sl65").click(function () {
    var id=$(this).attr('id');
});
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:4
        },
        600:{
            items:4
        },
        1000:{
            items:5
        },
        1380:{
            items:7
        },
    }
});