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
    <div id="address_map" class="contact-column">
        <div id="address">
            <img id="map_bg" src="images/map_bg.svg">
            <div id="address-text">
                <div class="address-text">
                    <p>Community</p>
                    <p>Science Museum</p>
                </div>
                <div class="address-text">
                    <p>Fantasyroad 22</p>
                    <p>4838 Arendal</p>
                </div>
                <a href="#">Get Directions</a>
            </div>

        </div>
        <div id="map"></div>
    </div>

    <script>
        // Initialize and add the map
        function initMap() {
            // The location of Uluru
            var arendal = {lat: 58.459, lng: 8.767};
            // The map, centered at Uluru
            var map = new google.maps.Map(
                document.getElementById('map'), {zoom: 18, center: arendal});
            // The marker, positioned at Uluru
            var marker = new google.maps.Marker({position: arendal, map: map});
        }
    </script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpB6i-UkErVldaaC4c6cGet4plZ9ZSyXA&callback=initMap">
    </script>
</section>

<?php endblock() ?>
