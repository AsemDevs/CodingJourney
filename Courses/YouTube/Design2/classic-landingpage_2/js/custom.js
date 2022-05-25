/*global $, alert, console*/

$(function (){

    'use strict';

    //Adjust Header Height automatically

    var myHeader = $('.header');

    myHeader.height($(window).height());

    $(window).resize(function() {
        myHeader.height($(window).height());
        
        $('.slider').each(function() {
            $(this).css('paddingTop', ($(window).height() - $('.slider div').height()) /2);
        });
    });

});