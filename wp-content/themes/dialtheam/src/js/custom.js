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
    /* START------  FE Form envio*/
    $('#submit').click(function(){
        var name        = $("#name").val();
        var lastName    = $("#lastname").val();
        var email       = $("#email").val();
        var validacion_email = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
        var phone       = $("#phone").val();
        var city       = $("#city").val();
        var message       = $("#message").val();

        if(name == "" || lastName == "" || email == "" || phone == "" || city == "" || message == ""){
            if(name == ""){
                $(".name + label > span.input__label-content").addClass("i");
                $("#name").focus();
                return false;
            }else{
                $(".name + label > span.input__label-content").removeClass("i");
            }
            if(lastName == ""){
                $(".lastname + label > span.input__label-content").addClass("i");
                $("#lastname").focus();
                return false;
            }else{
                $(".lastname + label > span.input__label-content").removeClass("i");
            }
            if(email == "" || !validacion_email.test(email)){
                $(".email + label > span.input__label-content").addClass("i");
                $("#email").focus();
                return false;
            }else{
                $(".email + label > span.input__label-content").removeClass("i");
            }
            if(phone == ""){
                $(".phone + label > span.input__label-content").addClass("i");
                $("#phone").focus();
                return false;
            }else{
                $(".phone + label > span.input__label-content").removeClass("i");
            }
            if(city == ""){
                $(".city + label > span.input__label-content").addClass("i");
                $("#city").focus();
                return false;
            }else{
                $(".city + label > span.input__label-content").removeClass("i");
            }
            if(message == ""){
                $(".message + label > span.input__label-content").addClass("i");
                $("#message").focus();
                return false;
            }else{
                $(".message + label > span.input__label-content").removeClass("i");
            }
        }else{
            $(".message + .input__label-content").removeClass("i");
            var datos = '&name=' + name +
                '&lastName=' + lastName +
                '&email=' + email +
                '&phone=' + phone +
                '&city=' + city +
                '&message=' + message;
            $.ajax({
                method:"Post",
                url:"<?php echo esc_url( home_url( '/' ) ); ?>contact.php",
                dataType:"json",
                data:datos,
            }).done(function( msg ){
                if(msg.success){
                    $('.alert small').fadeIn("slow");
                    $('.alert small').html('Muchas Gracias por contáctarnos, pronto nos estaremos comunicando contigo.');
                    $('#name').val("");
                    $('#lastname').val("");
                    $('#email').val("");
                    $('#phone').val("");
                    $('#city').val("");
                    $('#message').val("");
                }else{
                    $('.alert small').fadeIn("slow");
                    $('.alert small').html('Error, intente más tarde por favor.');
                }
            });
            return false;
        }
    });
    /* END------  FE Form envio*/
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
