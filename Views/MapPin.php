<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, minimal-ui" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title> Map - USA Accidents Smart Visualizer</title>
  <link href="../../assets/css/index.css" media="all" rel="stylesheet" type="text/css" />
  <!-- Pointer events polyfill for old browsers, see https://caniuse.com/#feat=pointer -->
  <script src="https://unpkg.com/elm-pep"></script>
  <link rel="stylesheet" href="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/css/ol.css" type="text/css">

</head>

<body>

  <body>
    <div id="map" style="height: 600px;" class="map"></div>
    Legend:
    <div><img id="legend" /></div>

    <div id="popup" class="ol-popup">
      <a href="#" id="popup-closer" class="ol-popup-closer"></a>
      <div id="popup-content"></div>
    </div>
  </body>

  <script>
    //  By default, the popup will open if you click on the marker. If you want the popup to open automatically when the map is loaded, you can add

    //  content.innerHTML = '<b>Hello world!</b><br />I am a popup.';
    //  overlay.setPosition(ol.proj.fromLonLat([4.35247, 50.84673]));
  </script>

  <script type="module" src="../assets/js/map-pin.js"></script>
</body>

</html>