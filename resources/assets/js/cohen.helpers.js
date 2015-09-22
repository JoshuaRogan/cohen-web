var cohen = cohen || {};
cohen.init_slider = function() {
    $('.banner .owl-carousel').owlCarousel({
        loop: true,
        margin: 0,
        items: 1,
        nav: false
    });
};
/**
 * Initialize all of the sliders on the about page
 * @return {[type]} [description]
 */
cohen.init_about_sliders = function() {
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 0,
        items: 1,
        nav: false, 

    });
};
/**
 * Activate dropdown on hovers
 * @return {[type]} [description]
 */
cohen.init_nav = function() {
    $('.dropdown').hover(function() {
        $(this).addClass('open');
    }, function() {
        $(this).removeClass('open');
    });
};


/**
 * Init the smile Gallery
 * 
 */
cohen.init_smile_gallery = function() {
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 0,
        items: 1,
        nav: true,
        dots: false,
        autoplay: true,

    });
};

/**
 * Initialize the google maps map 
 * @return {[type]} [description]
 */
cohen.init_map = function(selector) {};
/**
 * Clear the request appointment form from formstack
 * 
 */
cohen.clear_formstack_form = function() {
    var options = {
        success: function() {
            console.log("Hello World");
        }
    }
    this.clear_imported_external_styles("//static.formstack.com");
};
/**
 * Clear of the styles in the parent and children
 * of the passed selector
 * @param  String selector Selector to remove
 */
/**
 * Clear all of the styles in external stylesheets from a domain
 * @param  String domain     Domain to check for
 * @param  Interval interval   How often to check for the domain
 * @param  Integer timesToWait How many times to wait max
 * @param  Object callbacks Success, Failure, and Always callbacks
 */
cohen.clear_imported_external_styles = function(domain, interval, timesToWait, callbacks) {
    var DEFAULT_WAIT_TIMES = 1000; //100s 
    var DEFAULT_INTERVAL = 100;
    var timer = (interval === undefined) ? DEFAULT_INTERVAL : 10;
    var times = 0;
    // callbacks = (callbacks === undefined)? callbacks : {callbacks.always = {}, callbacks};
    timesToWait = (Math.floor(timesToWait) == timesToWait && $.isNumeric(timesToWait)) ? timesToWait : DEFAULT_WAIT_TIMES;
    //Create an interval to recheck to see if the style sheet dynamically appears
    var waitToAppear = setInterval(function() {
        // if(callbacks.always !== undefined && typeof(callbacks.always) === "function"){
        //     callbacks.always();
        // }
        var selector = $('link[rel=stylesheet][href^="' + domain + '"]');
        times++;
        if (selector.length) {
            $('link[rel=stylesheet][href^="' + domain + '"]').remove();
            clearTimeout(waitToAppear);
            // if(callbacks.success !== undefined && typeof(callbacks.success) === "function"){
            //     callbacks.success();
            // }
        } else {
            //After so many iterations clear the timeout
            if (timer >= timesToWait) {
                clearTimeout(waitToAppear);
                // if(callbacks.failure !== undefined && typeof(callbacks.failure) === "function"){
                //     callbacks.failure();
                // }
            }
        }
    }, timer);
};

function initMap() {
    var styleArray = [{
        "featureType": "administrative",
        "elementType": "labels.text.fill",
        "stylers": [{
            "color": "#444444"
        }]
    }, {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [{
            "color": "#f2f2f2"
        }]
    }, {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [{
            "visibility": "off"
        }]
    }, {
        "featureType": "road",
        "elementType": "all",
        "stylers": [{
            "saturation": -100
        }, {
            "lightness": 45
        }]
    }, {
        "featureType": "road.highway",
        "elementType": "all",
        "stylers": [{
            "visibility": "simplified"
        }]
    }, {
        "featureType": "road.arterial",
        "elementType": "labels.icon",
        "stylers": [{
            "visibility": "off"
        }]
    }, {
        "featureType": "transit",
        "elementType": "all",
        "stylers": [{
            "visibility": "off"
        }]
    }, {
        "featureType": "water",
        "elementType": "all",
        "stylers": [{
            "color": "#61C5C2"
        }, {
            "visibility": "on"
        }]
    }];
    var offices = [
        ['Scranton', 41.4957293, -75.5872082, "<div> <h2> Scranton Office</h2> <p> 225 Scranton Carbondale Highway, <br/> Scranton, PA 18508 <br/> Across from the Viewmont Mall in The Fashion Mall <br/> <a href='tel:+15703462132'><i class='fa fa-mobile'></i>  570-346-2132</a>  <a href='https://goo.gl/39MCZH' target='_blank' class='pull-right'> <i class='fa fa-map'></i> Directions </a></div> "],
        ['Pittston', 41.323136, -75.79061, "<div> <h2> Pittston Office</h2> <p> 100 Kennedy Boulevard, <br/> Pittston, PA 18640  <br/> Between the Fort Jenkins and Water Street Bridges Next to Rite-Aid <br/> <a href='tel:+15706547117'><i class='fa fa-mobile'></i>  570-654-7117</a>  <a href='https://goo.gl/8qor6P' target='_blank' class='pull-right'> <i class='fa fa-map'></i> Directions </a></div> "],
        ['Wilkes-Barre', 41.2368496, -75.8533314, "<div> <h2> Wilkes-Barre Office</h2> <p> 900 Schechter Drive,  <br/> Wilkes-Barre, PA 18702 <br/> Across from the Mohegan Sun Arena at Casey Plaza <br/> <a href='tel:+15708227700'><i class='fa fa-mobile'></i>  570-822-7700</a>  <a href='https://goo.gl/cpAFqH' target='_blank' class='pull-right'> <i class='fa fa-map'></i> Directions </a></div> "]
    ];
    var center_coords = {
        lat: 41.423136,
        lng: -75.8533314
    };
    // Create a map object and specify the DOM element for display.
    var map = new google.maps.Map(document.getElementById('google-map'), {
        center: center_coords,
        scrollwheel: false,
        zoom: 9,
        styles: styleArray
    });
    for (var i = 0; i < offices.length; i++) {
        // Create a marker and set its position.
        var office = offices[i];
        var marker = new google.maps.Marker({
            map: map,
            position: {
                lat: office[1],
                lng: office[2]
            },
            title: 'Hello World!',
            // animation: google.maps.Animation.DROP,
            icon: {
                path: fontawesome.markers.MAP_MARKER,
                scale: 0.8,
                strokeWeight: 0.3,
                strokeColor: '#fff',
                strokeOpacity: 1,
                fillColor: '#61C5C2',
                fillOpacity: 0.9,
            }
        });
        var infowindow = new google.maps.InfoWindow();
        var content = office[3];
        google.maps.event.addListener(marker, 'click', (function(marker, content, infowindow) {
            return function() {
                infowindow.setContent(content);
                infowindow.open(map, marker);
            };
        })(marker, content, infowindow));
    }
    google.maps.event.addDomListener(window, "resize", function() {
        var center = map.getCenter();
        google.maps.event.trigger(map, "resize");
        map.setCenter(center);
    });
}