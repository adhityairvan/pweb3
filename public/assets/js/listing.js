$(document).ready(function () {
    $(".tab-content").hide();
    $(".ps4").click(function(){
        $("#ps4").show();
        $("#xbox").hide();
    });
    $(".xbox").click(function(){
        $("#xbox").show();
        $("#ps4").hide();
    });
    $(".close").click(function(){
        $(".close").parent().hide();
    });
});