$(document).ready(function () {


$('.cont-modal').click(function(){
    $('.contact-form').css({
        visibility: 'visible',
        opacity: '1',
        transform: 'scale(0.8)'
    })
    $('.page-mask').css({
        visibility: 'visible',
        opacity: '1'
    })
})

$('#cont-button').click(function(){
    $('.contact-form').css({
        visibility: 'visible',
        opacity: '1',
        transform: 'scale(0.8)'
    })
    $('.page-mask').css({
        visibility: 'visible',
        opacity: '1'
    })
})

$('#contact-close').click(function(){
    $('.contact-form').css({
        visibility: 'hidden',
        opacity: '0',
        transform: 'scale(1)'
    })
    $('.page-mask').css({
        visibility: 'hidden',
        opacity: '0'
    })
})


// HAMBURGER ICON
    $('#nav-icon3').click(function () {
        if ($(this).hasClass('open')) {
            document.getElementById("menu").style.width = "0%";
            $(this).toggleClass('open');
        }
        else {
            $(this).toggleClass('open');
            document.getElementById("menu").style.width = "40%";
        }
    });


})


