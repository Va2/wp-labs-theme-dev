<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      .mapouter{
        width: 100% !important;
        height: 100% !important;
      }
      .gmap_canvas{
        width: 100% !important;
        height: 100% !important;
      }
      #gmap_canvas{
        width: 100% !important;
        height: 100% !important;
      }
    </style>
  </head>
  <body>
    <div class="mapouter">
    <div class="gmap_canvas">
        <iframe  id="gmap_canvas" src="https://maps.google.com/maps?q=<?= urlencode(get_theme_mod('adresse_map')) ?>&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
    </div>
</div>
  </body>
</html>

