<!-- From https://snazzymaps.com/style/13/neutral-blue -->

<!--This setting specifies that the map should be displayed full-screen and should not be resizable by the user. Note that the iPhone's Safari browser requires this <meta> tag be included within the page's <head> element.-->
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<!-- 
    You need to include this script tag on any page that has a Google Map.

    The following script tag will work when opening this example locally on your computer.
    But if you use this on a localhost server or a live website you will need to include an API key. 
    Sign up for one here (it's free for small usage): 
        https://developers.google.com/maps/documentation/javascript/tutorial#api_key

    After you sign up, use the following script tag with YOUR_GOOGLE_API_KEY replaced with your actual key.
    -->

<script type="text/javascript">
    function detectBrowser() {
      var useragent = navigator.userAgent;
      var mapdiv = document.getElementById("map");

      if (useragent.indexOf('iPhone') != -1 || useragent.indexOf('Android') != -1 ) {
        mapdiv.style.width = '100%';
        mapdiv.style.height = '400px';
      } else {
      
      }
    }

    function initMap() {
        detectBrowser();
        // Basic options for a simple Google Map
        // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: 13,

            //Sofia
            center: {lat: 42.688997, lng: 23.318696},

            // How you would like to style the map. 
            // This is where you would paste any style found on Snazzy Maps.
            styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
        };

        // Get the HTML DOM element that will contain your map 
        // We are using a div with id="map" seen below in the <body>
        var mapElement = document.getElementById('map');

        // Create the Google Map using our element and options defined above
        var map = new google.maps.Map(mapElement, mapOptions);

       // Let's also add a marker while we're at it
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(42.664253, 23.28765),
            map: map,
            title: 'talentFactory!'
        });
    }
</script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVENUDTj9BX8imMCF8fF5FemdALv0w8RA&callback=initMap&language=bg&region=BG" type="text/javascript"></script>
