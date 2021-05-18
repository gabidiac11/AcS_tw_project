<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, minimal-ui" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="icon" type="image/png" href="./../assets/favicon/logo.ico" />

  <title> Search - USA Accidents Smart Visualizer</title>
  <link href="../../assets/css/index.css" media="all" rel="stylesheet" type="text/css" />
  <link href="../../assets/css/header.css" media="all" rel="stylesheet" type="text/css" />
  <link href="../../assets/css/ui/search-input.css" media="all" rel="stylesheet" type="text/css" />
  <link href="../../assets/css/ui/filter.css" media="all" rel="stylesheet" type="text/css" />
  <link href="../../assets/css/ui/modal.css" media="all" rel="stylesheet" type="text/css" />
  <link href="../../assets/css/ui/list.css" media="all" rel="stylesheet" type="text/css" />
  <link href="../../assets/css/search.css" media="all" rel="stylesheet" type="text/css" />
</head>

<body>
  <?php
  require_once __DIR__ . '\Layout\Header.php';
  require_once __DIR__ . '\Reusables\Button\Button.php';
  require_once __DIR__ . '\Reusables\Svg\LoadSvg.php';
  ?>
  <main class="flex-all" page-width>
    <div class="page-wrapper page-content-search flex-all" style="align-items: flex-start; flex-wrap:wrap;">
      <div class="flex-start top-search">
        <div id="search-results" class="search-bar-container">
          <button class="flex-all icon-c cursor-pointer search-icon-cont" search-btn><?= displaySvg("search-line") ?></button>
          <input value="" placeholder="Search" />
          <button class="flex-all icon-c cursor-pointer filter-ic-cont" filter-btn active="true"><?= displaySvg("filter-line") ?></button>
          <button class="flex-all icon-c cursor-pointer x-ic-cont" delete-btn><?= displaySvg("close-line") ?></button>
        </div>
        <div class="flex-all sort-select">
          <select id="sort-select">
            <option selected="">Sort By</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
        <button class="btn-primary" id="export-btn">
          Export
        </button>

      </div>


      <div id="search-filters" class="filters-c">
        <div style="display: none;" class="filters-applied"></div>
        <div id="filter-edit-c" class="generic-box-shadow">
          <div filters-append>
          </div>
          <div class="flex-all" btn-bottom-panel>
            <button btn-cancel class="btn-secondary">Cancel</button>
            <button btn-confirm class="btn-primary">Apply</button>
          </div>
        </div>
      </div>

      <div id="list-results" class="list-wrapper">
        <div class="list-content" list-container style="display: none">
          <?php
          for ($index = 0; $index < 100; $index++) {
          ?>

            <div list-item style="display: none" class="list-item">
              <!-- /** general info */ -->
              <div>item-date: <span item-date> - </span> </div>
              <div>item-severity: <span item-severity> - </span> </div>
              <div>item-id: <span item-id> - </span> </div>
              <div>item-city: <span item-city> - </span> </div>
              <div>item-state: <span item-state> - </span> </div>
              <div>item-description: <span item-description> - </span> </div>
              <div>item-location: <span item-location> - </span> </div>

              <!-- /** weather stats */ -->
              <div>item-weather: <span item-weather-condition> - </span> </div>
              <div>item-temperature: <span item-temperature> - </span> </div>
              <div>item-humidity: <span item-humidity> - </span> </div>
              <div>item-visibility: <span item-visibility> - </span> </div>
              <div>item-wind: <span item-wind-direction> - </span> </div>
              <div>item-wind: <span item-wind-speed> - </span> </div>
              <div>item-wind: <span item-wind-windChill> - </span> </div>
              <div>item-precipitation: <span item-precipitation> - </span> </div>
              <div>item-pressure: <span item-pressure> - </span> </div>

              <!-- /** circumstances */ -->
              <div>item-amenity: <span item-amenity>*****</span> </div>
              <div>item-bump: <span item-bump>*****</span> </div>
              <div>item-crossing: <span item-crossing>*****</span> </div>
              <div>item-giveAway: <span item-giveAway>*****</span> </div>
              <div>item-Junction: <span item-Junction>*****</span> </div>
              <div>item-No_Exit: <span item-No_Exit>*****</span> </div>
              <div>item-Railway: <span item-Railway>*****</span> </div>
              <div>item-Roundabout: <span item-Roundabout>*****</span> </div>
              <div>item-Station: <span item-Station>*****</span> </div>
              <div>item-Stop: <span item-Stop>*****</span> </div>
              <div>item-Traffic_Calming: <span item-Traffic_Calming>*****</span> </div>
              <div>item-Traffic_Signal: <span item-Traffic_Signal>*****</span> </div>
              <div>item-Turning_Loop: <span item-Turning_Loop>*****</span> </div>
            </div>


          <?php
          }
          ?>
        </div>

        <div list-loader class="flex-all loader" style="display: flex">
          <img class="loader-img" />
        </div>
      </div>

      <?php
      require_once __DIR__ . "/temp.php";
      ?>
    </div>
  </main>
  <div class="flex-all flex-wrap" id="modal">
    <div class="box-shadow-re-use content-wrapper">
      <p modal-title> Title </p>
      <div modal-content>
          <div map-content style="width: 100%;" show="false">
                <div id="map"></div>
                <div class="latitude-long-indicator">
                    <input id="long-input" disabled value="Lat: ${this.lat}">
                    <input id="lat-input" disabled value="Long: ${this.long}">
                </div>
          </div>
          <div general-content style="width:100%; flex: 1;" show="false">
          </div>
      </div>
      <div class="modal-bottom">
        <button modal-confirm class="btn-primary">Apply</button>
        <button modal-cancel class="btn-secondary">Cancel</button>
      </div>
    </div>

  </div>
  <script src="./../assets/js/index.js"></script>
  <script src="./../assets/js/ui/CheckBox.js"></script>
  <script src="./../assets/js/ui/RangeInput.js"></script>
  <script src="./../assets/js/ui/DateInput.js"></script>
  <script src="./../assets/js/ui/modal.js"></script>
  <script src="./../assets/packages/olmap/build/ol.js"></script>
  <script src="./../assets/js/ui/MapPicker.js"></script>
  <script src="./../assets/js/search.js"></script>
</body>

</html>