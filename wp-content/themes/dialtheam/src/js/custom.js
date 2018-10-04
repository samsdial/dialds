/*
var name = "Sergio Andres";
console.log(name);*/
var $ = jQuery;
$(document).ready(function(){
    //- input animate 2
    //var inputFocus = $('span.input--madoka input');
    var inputFocusName = $('input.name');
    var inputFocusLastName = $('input.lastname');
    var inputSpan = $('span.inputName');
    /*inputFocus.focus(function () {
        inputSpan.addClass('input--filled');
    });*/
    inputFocusLastName.focus(function () {
        inputSpan.addClass('input--filled');
    });
    inputFocusName.focus(function () {
        inputSpan.addClass('input--filled');
    });
    inputFocusName.focusout(function () {
        inputSpan.removeClass('input--filled');
    });
    //-- menu open
    var btnOpen = $('#trigger-overlay');
    var btnClose = $('.overlay_close');
    var menu = $('.overlay_contentpush');
    btnOpen.on('click', function (e) {
        e.preventDefault();
        menu.addClass('open');
    });
    btnClose.on('click', function (e) {
        e.preventDefault();
        menu.removeClass('open');
    });
    $('.slider_intro').slick({
        arrows: false,
        fade: true
    });
   $('.slider_customer').slick({
       infinite: true,
       slidesToShow: 3,
       slidesToScroll: 2,
       autoplay: true,
       arrows: false,
       autoplaySpeed: 12000,
       adaptiveHeight: true,
       responsive: [
           {
               breakpoint: 1024,
               settings: {
                   slidesToShow: 3,
                   slidesToScroll: 3,
                   infinite: true,
                   dots: true
               }
           },
           {
               breakpoint: 992,
               settings: {
                   slidesToShow: 2,
                   slidesToScroll: 2
               }
           },
           {
               breakpoint: 768,
               settings: {
                   slidesToShow: 1,
                   slidesToScroll: 1
               }
           }
       ]
   });
});
/* Animation */
AOS.init();
