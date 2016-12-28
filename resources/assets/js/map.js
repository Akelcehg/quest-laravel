function initMap() {
    var styles = [
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
    ];
    var styledMap = new google.maps.StyledMapType(styles,
        {name: "Styled Map"});
    var mapOptions = {
        zoom: 18,
        scrollwheel: false,
        center: new google.maps.LatLng(46.465481, 30.735212),
        mapTypeControlOptions: {
            mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
        }
    };
    var map = new google.maps.Map(document.getElementById('map'), mapOptions);

    var marker = new google.maps.Marker({
        position: {lat: 46.465481, lng: 30.735212},
        map: map,
        title: 'Hello World!'
    });

    map.mapTypes.set('map_style', styledMap);
    map.setMapTypeId('map_style');

}