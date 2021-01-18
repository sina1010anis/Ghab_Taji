$(".btn_buy").click(function () {
    var id=$(this).attr('id');
    var number=$('input[name=number]').val();
    if (number == '' || number<1 || isNaN(number) || number>=100){
        $("#err_W").show(200);
        $("#need_err").show();
        $("#btn_err").click(function () {
            $("#err_W").hide(200);
            $("#need_err").hide();
        })
    }else {
        $("#ok_W").show(200);
        $("#need_err").show();
        $("#ok_W #btn_err").click(function () {
            $("#ok_W").hide(200);
            $("#need_err").hide();
            $.ajax({
                url:"basket.php",
                type:"POST",
                data:{id:id , number:number}
            }).done(function (msg) {

            });
        });
    }
});