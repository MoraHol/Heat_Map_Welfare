<!DOCTYPE html>
<html>

<head>
  <title>Simple Map</title>
  <meta name="viewport" content="initial-scale=1.0">
  <meta charset="utf-8">
  <link rel="stylesheet" href="../css/stars.css">
  <style>
    /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
    #map {
      height: 100%;
    }

    /* Optional: Makes the sample page fill the window. */
    html,
    body {
      height: 100%;
      margin: 0;
      padding: 0;
    }
  </style>
</head>

<body>
  <div id="map"></div>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC1owdVkFpPp1fFWCm4VfRVfKXZfrnazzQ&libraries=places&language=es&region=CO"></script>
  <script src="../resources/js/heatmap.min.js"></script>
  <script src="../resources/js/gmaps-heatmap.js"></script>
  <script src="js/globalVariables.js"></script>
  <script src="js/cIndex.js">
  </script>
  <script>
    initMap();
  </script>
</body>

</html>