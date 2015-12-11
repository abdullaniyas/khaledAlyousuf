
$(document).ready(function () {
    initialize();
    var screenHeight = $( window ).height();
    $( ".contact-map" ).css({
        height: +screenHeight+'px'
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
                "hue": "#ff1a00"
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
        position: new google.maps.LatLng(25.387741, 55.458906),
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

// For Demo purposes only (show hover effect on mobile devices)
//[].slice.call( document.querySelectorAll('a[href="#"') ).forEach( function(el) {
//    el.addEventListener( 'click', function(ev) {
//        ev.preventDefault();
//    } );
//} );
/*********************** Google Map Ends Here ***************************/
