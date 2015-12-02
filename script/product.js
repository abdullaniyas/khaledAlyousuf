/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


/* Category Slider */
$(function() {
    $(".widget .carousel").jCarouselLite({
        btnNext: ".widget .next",
        btnPrev: ".widget .prev",
        visible: 3,
        circular: false
    });
    $(".widget img").click(function() {
        $(".widget .mid img").attr("src", $(this).attr("src"));
    });
});
$(function() {
    $(".scrollMore .carousel1").jCarouselLite({
        btnNext: ".scrollMore .next1",
        btnPrev: ".scrollMore .prev1",
        scroll: 1
    });
});
