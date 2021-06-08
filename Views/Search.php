<!DOCTYPE html>
<html lang="en" itemscope>

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
  <link href="../../assets/css/ui/modal-map-preview.css" media="all" rel="stylesheet" type="text/css" />
  <link href="../../assets/css/ui/list.css" media="all" rel="stylesheet" type="text/css" />
  <link href="../../assets/css/search.css" media="all" rel="stylesheet" type="text/css" />
  <link href="../../assets/css/ui/list-item.css" media="all" rel="stylesheet" type="text/css" />
  <link href="../../assets/css/ui/dropdown.css" media="all" rel="stylesheet" type="text/css" />
</head>

<body>
  <?php
  require_once __DIR__ . '/Layout/Header.php';
  require_once __DIR__ . '/Reusables/Button/Button.php';
  require_once __DIR__ . '/Reusables/Svg/LoadSvg.php';
  ?>
  <main class="flex-all">
    <div class="page-wrapper page-content-search flex-all" style="align-items: flex-start; flex-wrap:wrap;">

      <div class="flex-start top-search">
        <!-- SEARCH INPUT AND BUTTONS -->
        <div id="search-results" class="search-bar-container">
          <button class="flex-all icon-c cursor-pointer search-icon-cont" itemprop="search-btn" disabled><?= displaySvg("search-line") ?></button>
          <input disabled value="" placeholder="Search by description or id" />
          <button class="flex-all icon-c cursor-pointer filter-ic-cont" itemprop="filter-btn" disabled><?= displaySvg("filter-line") ?></button>
          <button class="flex-all icon-c cursor-pointer x-ic-cont" itemprop="delete-btn" disabled><?= displaySvg("close-line") ?></button>
        </div>

        <!-- SORT SELECT -->
        <div class="flex-all sort-select">
          <select disabled id="sort-select">
            <option selected value="default">Sort By</option>
            <option value="STATE"> STATE </option>
            <option value="LOCATION"> LOCATION </option>
            <option value="SEVERITY"> SEVERITY </option>
            <option value="TIME"> TIME </option>
            <option value="DISTANCE"> DISTANCE </option>
            <option value="TEMPERATURE"> TEMPERATURE </option>
            <option value="WIND_CHILL"> WIND CHILL </option>
            <option value="HUMIDITY"> HUMIDITY </option>
            <option value="PRESSURE"> PRESSURE </option>
            <option value="VISIBILITY"> VISIBILITY </option>
            <option value="WIND_SPEED"> WIND SPEED </option>
            <option value="PRECIPITATION"> PRECIPITATION </option>
            <option value="WIND_DIRECTION"> WIND DIRECTION </option>
            <option value="WEATHER_CONDITION"> WEATHER CONDITION </option>
          </select>
          <label for="sort-dir-check">
            Desc
            <input id="sort-dir-check" type="checkbox">
          </label>
        </div>

        <!-- RIGHT SIDE BUTTONS -->
        <div id="export-csv-wrapper"></div>
        <button class="btn-primary" id="map-btn-preview">
          MAP PREVIEW
        </button>
        <button class="btn-primary" id="import-btn">
          Import CSV
        </button>
      </div>

      <div id="search-filters" class="filters-c">
        <div style="display: none;" class="filters-applied"></div>
        <div id="filter-edit-c" class="generic-box-shadow">

          <!-- FILTER BUTTONS APPLY/CANCEL -->
          <div class="flex-all" itemprop="btn-bottom-panel">
            <button itemprop="btn-reset-all" class="btn-secondary"> <span> Reset </span> <?= displaySvg('reset') ?></button>
            <button itemprop="btn-cancel" class="btn-secondary">Cancel</button>
            <button itemprop="btn-confirm" class="btn-primary">Apply</button>
          </div>

          <!-- CONTAINER NODE FOR FILTERS - where filters are appended -->
          <div itemprop="filters-append">
            <p>Loading filters...</p>
          </div>
        </div>
      </div>

      <div itemscope id="list-results" class="list-wrapper">
        <div class="list-content more-than-one-result-false" itemprop="list-container" style="display: none">
          <?php
          for ($index = 0; $index < 50; $index++) {
          ?>

            <!-- DRAW HIDDEN NODES OF A GENERIC RESULTS (these are to be populated based on a JS object) -->
            <div itemscope itemprop="list-item" style="display: none" class="list-item box-shadow-re-use">
              <div> <span itemprop="item-date">8 February 2016, Night</span></div> <!-- Date, time of the day -->
              <div> Severity: <span itemprop="item-severity"> III</span></div> <!-- Severity -->
              <div> ID: <span itemprop="item-id">A-1 </span> | City: <span itemprop="item-city"> Dayton</span> | State: <span itemprop="item-state">OH</span></div> <!-- ID, City, State -->
              <div class="description-item">Description: <br /><span itemprop="item-description">Right lane blocked due to accident on l-70 Eastbound</span></div> <!-- Description -->
              <div> Location: <br /><span itemprop="item-location">l-70 E, Dayton, OH, 45424, 39.865147, -84.05872</span></div> <!-- Location -->

              <!-- weather stats -->
              <ul>
                <li>Weather Condition: <span itemprop="item-weather-condition">Ligh Rain</span></li>
                <li>Temperature(F): <span itemprop="item-temperature">36.9</span>;</li>
                <li>Humidity(%): <span itemprop="item-humidity">91</span>;</li>
                <li>Visibility(mi): <span itemprop="item-visibility">10</span>;</li>
                <li>Wind Direction: <span itemprop="item-wind-direction">Calm</span>;</li>
                <li>Wind Speed(mph): <span itemprop="item-wind-speed"> - </span></li>
                <li>Wind Chill(F): <span itemprop="item-wind-windChill"> - </span></li>
                <li>Precipitation(in): <span itemprop="item-precipitation">-</span>;</li>
                <li>Pressure(in): <span itemprop="item-pressure"> - </span></li>
                <li>Distance(mi): <span itemprop="item-distance"> - </span></li>
              </ul>
              <hr>
              <ul class="conditions-met">
                <!-- Circumstances -->
                <li itemprop="item-amenity"> <span><?= displaySvg("check") ?></span>Amenity</li>
                <li itemprop="item-bump"> <span><?= displaySvg("check") ?></span>Bump</li>
                <li itemprop="item-crossing"> <span><?= displaySvg("check") ?></span>Crossing</li>
                <li itemprop="item-giveAway"> <span><?= displaySvg("check") ?></span>Give_Way</li>
                <li itemprop="item-Junction"> <span><?= displaySvg("check") ?></span>Junction</li>
                <li itemprop="item-No_Exit"> <span><?= displaySvg("check") ?></span>No_Exit</li>
                <li itemprop="item-Railway"> <span><?= displaySvg("check") ?></span>Railway</li>
                <li itemprop="item-Roundabout"> <span><?= displaySvg("check") ?></span>Roundabout</li>
                <li itemprop="item-Station"> <span><?= displaySvg("check") ?></span>Station</li>
                <li itemprop="item-Stop"> <span><?= displaySvg("check") ?></span>Stop</li>
                <li itemprop="item-Traffic_Calming"> <span><?= displaySvg("check") ?></span>Traffic Calming</li>
                <li itemprop="item-Traffic_Signal"> <span><?= displaySvg("check") ?></span>Traffic Signal</li>
                <li itemprop="item-Turning_Loop"> <span><?= displaySvg("check") ?></span>Turning Loop</li>
              </ul>
              <hr>
            </div>

          <?php
          }
          ?>

          <div itemprop="empty-indicator">No items found.</div>
        </div>

        <!-- LIST LOADER -->
        <div itemprop="list-loader" class="flex-all loader" style="display: flex; height: calc(100vh - 235px);">
          <img src="./../assets/images/loader.gif" alt="loader-gif" class="loader-img" />
        </div>

        <!-- PAGINATION -->
        <div class="pagination" itemprop="pagination-content">
          <div class="pagination-inner">
            <button disabled class="pagination-btn" itemprop="pagination-prev">
              &lt; </button>

            <?php
            for ($index = 0; $index < 10; $index++) {
            ?>

              <button disabled value="<?= $index + 1 ?>" class="pagination-btn" itemprop="pagination-number"> <?= $index + 1 ?> </button>

            <?php
            }
            ?>

            <button disabled class="pagination-btn" itemprop="pagination-next"> > </button>

            <span class="pag-select-c">
              <label for="select-per-page"> Per page: </label>
              <select id="select-per-page" itemprop="result-per-page" disabled>
                <option value="10" selected>10</option>
                <option value="20">20</option>
                <option value="30">30</option>
                <option value="50">50</option>
              </select>
            </span>
          </div>

        </div>

      </div>
    </div>
  </main>
  <!-- MODAL WITH THE CHECKBOXES AND THE MAP (where lat and long is pinned by mouse and can be used for filtering by location) -->
  <div class="flex-all flex-wrap generic-modal" id="modal">
    <div class="box-shadow-re-use content-wrapper">
      <p itemprop="modal-title"> Title </p>
      <div itemprop="modal-content">
        <div itemprop="map-content" style="width: 100%;">
          <div id="map" class="generic-map"></div>
          <div class="latitude-long-indicator">
            <input id="long-input" disabled value="Lat: ${this.lat}">
            <input id="lat-input" disabled value="Long: ${this.long}">
          </div>
        </div>
        <div itemprop="general-content" style="width:100%; flex: 1;">
        </div>
      </div>
      <div class="modal-bottom">
        <button itemprop="modal-confirm" class="btn-primary">Apply</button>
        <button itemprop="modal-cancel" class="btn-secondary">Cancel</button>
      </div>
    </div>
  </div>

  <!-- MODAL with the all the locations pins from the filtered list -->
  <div class="flex-all flex-wrap generic-modal" id="modal-map">
    <div class="box-shadow-re-use content-wrapper">
      <div itemprop="map-content" style="width: 100%;height: 100%;">
        <div id="map2" class="generic-map"></div>
      </div>
      <div class="modal-bottom">
        <p>The dots represent the results from the page, and are colored based on severity. Click on a dot to see information about the accident.</p>
        <button itemprop="modal-export-svg" class="btn-primary">Export SVG</button>
        <button itemprop="modal-export-webp" class="btn-primary">Export WEBP</button>
        <button itemprop="modal-close" class="btn-secondary">Close</button>
      </div>

      <!-- POPUP THAT IS SHOWN AT A GIVEN DOT -->
      <div id="popup" class="ol-popup">
        <a href="#" id="popup-closer" class="ol-popup-closer"></a>
        <div id="popup-content"></div>
      </div>
    </div>
  </div>

  <script src="./../assets/js/index.js"></script>
  <script src="./../assets/js/ui/CheckBox.js"></script>
  <script src="./../assets/js/ui/RangeInput.js"></script>
  <script src="./../assets/js/ui/DateInput.js"></script>
  <script src="./../assets/js/ui/modal.js"></script>
  <script src="./../assets/packages/olmap/build/ol.js"></script>
  <script src="./../assets/packages/canvas2svg/canvas2svg.js"></script>
  <script src="./../assets/js/ui/MapPicker.js"></script>
  <script src="./../assets/js/ui/ModalMapPreview.js"></script>
  <script src="./../assets/js/ui/DropdownButton.js"></script>
  <script src="./../assets/js/search.js"></script>

</body>

</html>