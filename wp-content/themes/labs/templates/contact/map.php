<?php
$google_map_address = get_theme_mod('gmaps-address');
?>

<!-- Google map -->
<!-- <div class="map" id="map-area"></div> -->

<div class="mapouter">
    <div class="gmap_canvas">
        <iframe  id="gmap_canvas" src="https://maps.google.com/maps?q=<?= $google_map_address ?>&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
    </div>
</div>