<?php include 'layout.php' ?>

<?php startblock('content') ?>

<section id="contact" class="container contact">
    <div class="contact-column">
        <div id="contact-us">
            <h2>Contact Us</h2>
            <svg height="8" width="500">
                <line x1="0" y1="0" x2="500" y2="0" />
            </svg>
            <p>Community Science Museum wants to hear of any inquiry you might have,</p>
            <p>answer any question you might need answered. We are here for you to grow and learn.</p>
        </div>
        <div class="contact-info">
            <p>Send us an  email:</p>
            <p class="contact-bg">info@communitysciencemuseum.com</p>
        </div>
        <div class="contact-info">
            <p>Call us:</p>
            <p class="contact-bg">(973)925-9393</p>
        </div>
    </div>
    <div id="map" class="contact-column"></div>

    <script>
        // Initialize and add the map
        function initMap() {
            // The location of Uluru
            var uluru = {lat: -25.344, lng: 131.036};
            // The map, centered at Uluru
            var map = new google.maps.Map(
                document.getElementById('map'), {zoom: 4, center: uluru});
            // The marker, positioned at Uluru
            var marker = new google.maps.Marker({position: uluru, map: map});
        }
    </script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQXmD2R8443tmPDJOuxRUYmbQ9oDY9aq8&callback=initMap">
    </script>
</section>

<?php endblock() ?>
