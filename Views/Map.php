<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, minimal-ui" />
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
  <main id="map-per-state">
    <div id="map" style="height: 600px;" class="map box-shadow-re-use"></div>
    <div class="map-bottom">
      <div class="legend-section">
        <p>
          Legend:
        </p>
        <div>
          <img id="legend" />
        </div>
      </div>
      <div class="controls-section">
        <select value="frequency">
          <option value="fatality">By fatality</option>
          <option value="frequency">By frequency</option>
        </select>
      </div>
    </div>

    <div class="flex-end width-100 link-to-pin-container">
      <a href="/maps/pin"> Visualize each accident -> </a>
    </div>
  </main>
  <script type="module" src="../assets/js/map.js"></script>
</body>

</html>