$(document).ready(function () {
    $('#ps4-btn').click(function () {
        $('html, body').animate({
            scrollTop: $('#ps4').offset().top
            } ,1000);
        });
    $('#xbox-btn').click(function () {
        $('html, body').animate({
            scrollTop: $('#xbox').offset().top
        } ,1000);
    });
    $('#login').click(function (){
        $('#id01').show();
    });

    $('#register').click(function (){
        $('#id02').show();
    });

});