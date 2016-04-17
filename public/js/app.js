//alert("Iniciando");

$( document ).ready(function(){})
$(".button-collapse").sideNav();

$('.slider').slider();

$('li > a').click(function() {
    $('li').removeClass();
    $(this).parent().addClass('active');
});