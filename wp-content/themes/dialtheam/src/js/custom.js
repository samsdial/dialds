/*
var name = "Sergio Andres";
console.log(name);*/
var $ = jQuery;
$(document).ready(function(){
    //- input animate 2
    //var inputFocus = $('span.input--madoka input');
    var inputFocusName = $('input.name');
    var inputFocusLastName = $('input.lastname');
    var inputFocusEmail = $('input.email');
    var inputFocusPhone = $('input.phone');
    var inputFocusCity = $('input.city');
    var inputFocusMessage = $('input.message');
    /*  START --input name focus*/
    inputFocusName.focus(function () {
        $('span.inputName').addClass('input--filled');
    });
    inputFocusName.focusout(function () {
        $('span.inputName').removeClass('input--filled');
    });
    /*  END --input name focus*/
    /*  START --input Lastname focus*/
    inputFocusLastName.focus(function () {
        $('span.inputLastName').addClass('input--filled');
    });
    inputFocusLastName.focusout(function () {
        $('span.inputLastName').removeClass('input--filled');
    });
    /*  END --input lastname focus*/
    /*  START -- Input Mail focus */
    inputFocusEmail.focus(function () {
        $('span.inputEmail').addClass('input--filled');
    });
    inputFocusEmail.focusout(function () {
        $('span.inputEmail').removeClass('input--filled');
    });
    /*  END -- Input Mail focus */
    /*  START -- Input Phone focus */
    inputFocusPhone.focus(function () {
        $('span.inputPhone').addClass('input--filled');
    });
    inputFocusPhone.focusout(function () {
        $('span.inputPhone').removeClass('input--filled');
    });
    /*  END -- Input Mail focus */

    /*  START -- Input city focus */
    inputFocusCity.focus(function () {
        $('span.inputCity').addClass('input--filled');
    });
    inputFocusCity.focusout(function () {
        $('span.inputCity').removeClass('input--filled');
    });
    /*  END -- Input Mail focus */

    /*  START -- Input Message focus */
    inputFocusMessage.focus(function () {
        $('span.inputMessage').addClass('input--filled');
    });
    inputFocusMessage.focusout(function () {
        $('span.inputMessage').removeClass('input--filled');
    });
    /*  END -- Input Mail focus */

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
