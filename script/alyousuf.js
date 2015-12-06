/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function(){
    
    initialize() /* initializing the map */
    
    /* To make the landing page fix the screen */
    var x = $(window).height();
    $('.landing-page').css({
        'height': +x+"px"
    });
    
    /* On sign in show msg */
    $('.sign-inup').click(function(){
        $('.sign-inup').hide();
        $('.signin-msg').show();
    });
    
    /* Tabs */
//    $('.nav-items').on('click',function(){
//        
//        $('.nav-items').removeClass('nav-selected');
//        $(this).addClass('nav-selected');
//        
//        var panel_to_show = $( this).attr('data-name');
//        $('.panels').hide();
//        $('.'+panel_to_show).show();
//    });
	
    /* tabs for shipments */
    $('.tab-items').on('click',function(){
        
        $('.tab-items').removeClass('tab-selected');
        $(this).addClass('tab-selected');
        
        var panel_to_show = $( this).attr('data-name');
        $('.panels1').hide();
        $('.'+panel_to_show).show();
    });
	
    /* tabs for make payments */
    $('.payment-options').on('click',function(){
        
        $('.payment-options').removeClass('tab-selected');
        $(this).addClass('tab-selected');
        
        var panel_to_show = $( this).attr('data-name');
        $('.panels2').hide();
        $('.'+panel_to_show).show();
    });
	// $('.cancel').click(function(){
		// alert('cancel');
		// var nameRow = $( this).attr('data-name');
		// $('.'+nameRow).slideUp(1000);
	// });
	
    $('.edit-click , .upload-design , .cancel').click(function(){
        var nameRow = $( this).attr('data-name');
        //alert(nameRow);
        $('.'+nameRow).slideToggle(1000);
        //$('.'+nameRow).animate({
         //   height:'200px'
        //}).fadeIn(1000);
    });
	/* upload design */
     $('.upload-head').click(function(){
        $('.upload-body').slideToggle(1000);
    });
	//$(".upload-design").click(function(){
	//  $(".row0").animate({
     //       height:'150px'
     //   }).show();
	//});
    /* tabs for make my-account page */
    //    $('.tab3').on('click',function(){
    //        
    //        $('.tab3').removeClass('tab3-selected');
    //        $(this).addClass('tab3-selected');
    //        
    //        var panel_to_show = $( this).attr('data-name');
    //        $('.panel-profile').hide();
    //        $('.'+panel_to_show).show();
    //    });
    /* tabs to show track popup */
    $('.round-track').on('click',function(){
        
        var panel_to_show = $( this).attr('data-name');
        $('.ts-trackpop').hide();
        $('.'+panel_to_show).show();
    });
        
        
    $('.edit').on('click',function(){
        $('.profile-saved').hide();
        $('.profile-information form').show();
    });
    $('.save').on('click',function(){
        $('.profile-saved').show();
        $('.profile-information form').hide();
    });
        
    /* Pop up */
    $(".show-popup").on("click",function(e) {
       
        $(".popup-container").show();
    //alert("nitsd");
    });
    $(".popup-inner").click(function(e) {
        e.stopPropagation(); //stops click event from reaching document
    });
    $(".popup-container").click(function() {
        $(".popup-container").hide(); //click came from somewhere else
    });
    

    /* height of the header */
    var headerHeight = $('header').height();
    $('.margin-extra').css({
        'marginTop': +headerHeight+"px"
    })
    
    
});

$(window).scroll(function () { 
    //alert('hello');
    $('.main-slider').css({
        'top' : +($(this).scrollTop()/1.5)+"px"
    }); 
    
}); 

/*********************** Google Map ***************************/
var marker;
var map;

function initialize() {

    var mapProp = {
        //center:new google.maps.LatLng(22.528610, 88.365451), //bangalore
        zoom: 14,
        mapTypeControl: false,
	scrollwheel: false,	
        //scaleControl: false,
        panControl: false,
        streetViewControl: false,
        zoomControl: false,
        //navigationControl: false,
        styles: [
        {
            "stylers": [
            {
                "hue": "#D9B13B"
            },
            {
                "invert_lightness": true
            },
            {
                "saturation": -100
            },
            {
                "lightness": 33
            },
            {
                "gamma": 0.5
            }
            ]
        },
        {
            "featureType": "water",
            "elementType": "geometry",
            "stylers": [
            {
                "color": "#2D333C"
            }
            ]
        }
        ]
    };

    map = new google.maps.Map(document.getElementById("map"), mapProp);

    marker = new google.maps.Marker({
        position: new google.maps.LatLng(25.395187, 55.466800),
        animation: google.maps.Animation.DROP,
        mapTypeControl: false
    });

    marker.setMap(map);
    map.panTo(marker.position);

    google.maps.event.addListener(marker, "click", function () {

        });

}

function changeMarkerPos(lat, lon) {
    myLatLng = new google.maps.LatLng(lat, lon)
    marker.setPosition(myLatLng);
    map.panTo(myLatLng);
}

