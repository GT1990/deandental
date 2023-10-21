<!-- CSS -->
<link rel="stylesheet" href="css/google-maps.css" />



<!-- Google Map -->
<section class="maps__container">
      <iframe
        class="maps__iframe"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2913.2363300039865!2d-89.35055742334131!3d43.09954808806256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88065476c14e9473%3A0x43b886fbd01e01ed!2s2534%20Winnebago%20St%2C%20Madison%2C%20WI%2053704%2C%20USA!5e0!3m2!1sen!2sca!4v1697859510241!5m2!1sen!2sca"
        style="border: 0"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
      ></iframe>
      <button id="maps__get-directions">Get Directions</button>
      <div id="maps__dialog-container" class="maps__dialog-container hidden" >
        <div class="maps__dialog">
          <h2>Open directions in: </h2>
          <div class="maps__img-container">
            <img id="google-maps" class="maps__icon" src="img/googleMapsIcon.jpg" />
            <img id="internet-browser" class="maps__icon"  src="img/internetBrowserIcon.jpg" />
            <img id="apple-maps" class="maps__icon"  src="img/appleMapsIcon.jpg" />
          </div>
          <button id="maps__close-dialog">close</button>
        </div>
      </div>
    </section>


    <!-- JS -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // This code will only run after the document is fully loaded.

            // close map directions dialog
            document.getElementById("maps__close-dialog").addEventListener("click", function(e) {
              e.preventDefault();
              let dialogContainer = document.getElementById("maps__dialog-container");
              if (dialogContainer) {
                dialogContainer.classList.remove("show");
                dialogContainer.classList.add("hidden");
              }
            })

            // open map directions dialog in mobile 
            // open map directions in default internet browser in desktop
            document.getElementById("maps__get-directions").addEventListener("click",
            function(e){
              e.preventDefault();
              if (window.innerWidth <= 768 && window.innerHeight <= 768) {
                // mobile device
                let dialogContainer = document.getElementById("maps__dialog-container");
              if (dialogContainer) {
                dialogContainer.classList.remove("hidden");
                dialogContainer.classList.add("show");
              }
              } else {
                // desktop or tablet
                // Try to open Default internet browser
                var destination = "2534 Winnebago St, Madison, WI 53704"; // Your destination address
                window.open(`https://www.google.com/maps/dir/?api=1&destination=${destination.replace(/ /g, "+")}`, '_blank');
              }
              
            })

            // get directions in google maps
            document.getElementById("google-maps").addEventListener("click",
            function(e){
              e.preventDefault();
              var destination = "2534 Winnebago St, Madison, WI 53704"; // Your destination address
                var lat = 43.099125; // Latitude for the address
                var lng = -89.343760; // Longitude for the address

                // Try to open Google Maps app
                window.location.href = `comgooglemaps://?q=${lat},${lng}(${destination.replace(/ /g, "+")})`;
            })
            // get directions in internet browser
            document.getElementById("internet-browser").addEventListener("click",
            function(e){
              e.preventDefault();
              var destination = "2534 Winnebago St, Madison, WI 53704"; // Your destination address
                var lat = 43.099125; // Latitude for the address
                var lng = -89.343760; // Longitude for the address

                // Try to open Default internet browser
                window.open(`https://www.google.com/maps/dir/?api=1&destination=${destination.replace(/ /g, "+")}`, '_blank');

            })
            // get directions in apple maps
            document.getElementById("apple-maps").addEventListener("click",
            function(e){
              e.preventDefault();
              var destination = "2534 Winnebago St, Madison, WI 53704"; // Your destination address
                var lat = 43.099125; // Latitude for the address
                var lng = -89.343760; // Longitude for the address

                // Try to open Apple Maps app
                window.location.href = `http://maps.apple.com/?q=${destination.replace(/ /g, "+")}&ll=${lat},${lng}`;
            })
            
        });
    </script>