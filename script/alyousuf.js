/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$(window).scroll(function () { 
    //alert('hello');
     $('.main-slider').css({
        'top' : +($(this).scrollTop()/1.5)+"px"
    }); 
    
    var headerHeight = $('.main-header').height();
    var height = $(window).scrollTop();
    var screenHeight = $( window ).height();
    if(height  > 200) {
       // alert('done it');
       $(".main-header").addClass("main-header-anime");
//       $('.brand-logo-anime').css({
//            'height' : headerHeight + "px"
//        });
    } else if ( height  < 200 ){
        $(".main-header").removeClass("main-header-anime");
    }
});
$(document).ready(function(){
    
    /* height of the header */
    var headerHeight = $('header').height();
    $('.margin-extra').css({
        'marginTop': +headerHeight+"px"
    })
    
    /* To make the landing page fix the screen */
    var x = $(window).height();
    var y = x -headerHeight;
    $('.landing-page').css({
        'height': +y+"px"
    });
});


