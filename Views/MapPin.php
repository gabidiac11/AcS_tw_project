<!DOCTYPE html>
<html lang="en">

<head>

  <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1, minimal-ui" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title> Map - USA Accidents Smart Visualizer</title>

  <link rel="icon" type="image/png" href="./../assets/favicon/logo.ico" />
  <link href="../../assets/css/index.css" media="all" rel="stylesheet" type="text/css" />
  <link href="../../assets/css/header.css" media="all" rel="stylesheet" type="text/css" />
  <link href="../../assets/css/map.css" media="all" rel="stylesheet" type="text/css" />
</head>

<body>
  <?php
  require_once __DIR__ . '/Layout/Header.php';
  ?>
  <main id="map-page-pin">
    <div id="map" style="height: 600px;" class="map box-shadow-re-use"></div>

    <div class="map-bottom">
      <div class="legend-section">
        <p>
          Click any pin to see more.
        </p>
      </div>
    </div>

    <div id="popup" class="ol-popup box-shadow-re-use">
      <a href="#" id="popup-closer" class="ol-popup-closer"></a>
      <div id="popup-content"></div>
    </div>
  </main>

</body>

<script type="module" src="../assets/js/map-pin.js"></script>
</body>

</html>