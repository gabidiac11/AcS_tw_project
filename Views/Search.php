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
  <link href="../../assets/css/ui/modal-map-preview.css" media="all" rel="stylesheet" type="text/css" />
  <link href="../../assets/css/ui/list.css" media="all" rel="stylesheet" type="text/css" />
  <link href="../../assets/css/search.css" media="all" rel="stylesheet" type="text/css" />
  <link href="../../assets/css/ui/list-item.css" media="all" rel="stylesheet" type="text/css" />
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
        <!-- SEARCH INPUT AND BUTTONS -->
        <div id="search-results" class="search-bar-container">
          <button class="flex-all icon-c cursor-pointer search-icon-cont" search-btn><?= displaySvg("search-line") ?></button>
          <input disabled value="" placeholder="Search by description or id" />
          <button class="flex-all icon-c cursor-pointer filter-ic-cont" filter-btn active="true"><?= displaySvg("filter-line") ?></button>
          <button class="flex-all icon-c cursor-pointer x-ic-cont" delete-btn><?= displaySvg("close-line") ?></button>
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
        </div>

        <!-- RIGHT SIDE BUTTONS -->
        <button class="btn-primary" id="export-btn">
          Export CSV
        </button>
        <button class="btn-primary" id="map-btn-preview">
          MAP PREVIEW
        </button>
      </div>

      <div id="search-filters" class="filters-c">
        <div style="display: none;" class="filters-applied"></div>
        <div id="filter-edit-c" class="generic-box-shadow">

          <!-- FILTER BUTTONS APPLY/CANCEL -->
          <div class="flex-all" btn-bottom-panel>
            <button btn-cancel class="btn-secondary">Cancel</button>
            <button btn-confirm class="btn-primary">Apply</button>
          </div>

          <!-- CONTAINER NODE FOR FILTERS - where filters are appended -->
          <div filters-append>
          </div>
        </div>
      </div>

      <div id="list-results" class="list-wrapper">
        <div class="list-content" list-container style="display: none" more-than-one-result="false">
          <?php
          for ($index = 0; $index < 50; $index++) {
            ?>

            <!-- DRAW HIDDEN NODES OF A GENERIC RESULTS (these are to be populated based on a JS object) -->
            <div list-item style="display: none" class="list-item box-shadow-re-use">
              <div> <span item-date>8 February 2016, Night</span></div> <!-- Date, time of the day -->
              <div> Severity: <span item-severity> III</span></div> <!-- Severity -->
              <div> ID: <span item-id>A-1 </span> | City: <span item-city> Dayton</span> | State: <span item-state>OH</span></div> <!-- ID, City, State -->
              <div class="description-item" >Description: <br /><span item-description>Right lane blocked due to accident on l-70 Eastbound</span></div> <!-- Description -->
              <div> Location: <br /><span item-location>l-70 E, Dayton, OH, 45424, 39.865147, -84.05872</span></div> <!-- Location -->

              <!-- weather stats -->
              <ul>
                <li>Weather Condition: <span item-weather-condition>Ligh Rain</span></li>
                <li>Temperature(F): <span item-temperature>36.9</span>;</li>
                <li>Humidity(%): <span item-humidity>91</span>;</li>
                <li>Visibility(mi): <span item-visibility>10</span>;</li>
                <li>Wind Direction: <span item-wind-direction>Calm</span>;</li>
                <li>Wind Speed(mph): <span item-wind-speed> - </span></li>
                <li>Wind Chill: <span item-wind-windChill> - </span></li>
                <li>Traffic Calming: <span item-Traffic_Calming> - </li>
                <li>Precipitation(in): <span item-precipitation>-</span>;</li>
                <li>Pressure: <span item-pressure> - </span></li>
              </ul>
              <hr>
              <div class="condtions-met">
                <!-- Circumstances -->
                <div item-amenity> <span><?= displaySvg("check") ?></span>Amenity</div>
                <div item-bump> <span><?= displaySvg("check") ?></span>Bump</div>
                <div item-crossing> <span><?= displaySvg("check") ?></span>Crossing</div>
                <div item-giveAway> <span><?= displaySvg("check") ?></span>Give_Way</div>
                <div item-Junction> <span><?= displaySvg("check") ?></span>Junction</div>
                <div item-No_Exit> <span><?= displaySvg("check") ?></span>No_Exit</div>
                <div item-Railway> <span><?= displaySvg("check") ?></span>Railway</div>
                <div item-Roundabout> <span><?= displaySvg("check") ?></span>Roundabout</div>
                <div item-Station> <span><?= displaySvg("check") ?></span>Station</div>
                <div item-Stop> <span><?= displaySvg("check") ?></span>Stop</div>
                <div itrm-Traffic_Calming> <span><?= displaySvg("check") ?></span>Traffic Calming</div>
                <div item-Traffic_Signal> <span><?= displaySvg("check") ?></span>Traffic Signal</div>
                <div item-Turning_Loop> <span><?= displaySvg("check") ?></span>Turning Loop</div>
              </div>
              <hr>
            </div>

          <?php
          }
          ?>

          <div empty-indicator>No items found.</div>
        </div>

        <!-- LIST LOADER -->
        <div list-loader class="flex-all loader" style="display: flex; height: calc(100vh - 235px);">
          <img class="loader-img" />
        </div>

          <!-- PAGINATION -->
        <div class="pagination" pagination-content>
          <div class="pagination-inner">
            <button disabled class="pagination-btn" pagination-prev>
              < </button>

                <?php
                for ($index = 0; $index < 10; $index++) {
                ?>

                  <button disabled value="<?= $index + 1 ?>" class="pagination-btn" pagination-number> <?= $index + 1 ?> </button>

                <?php
                }
                ?>

                <button disabled class="pagination-btn" pagination-next> > </button>

                <span class="pag-select-c">
                  <label for="select-per-page"> Per page: </label>
                  <select id="select-per-page" result-per-page disabled>
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
      <p modal-title> Title </p>
      <div modal-content>
        <div map-content style="width: 100%;" show="false">
          <div id="map" class="generic-map"></div>
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

  <!-- MODAL with the all the locations pins from the filtered list -->
  <div class="flex-all flex-wrap generic-modal" id="modal-map" show="false">
    <div class="box-shadow-re-use content-wrapper">
      <div map-content style="width: 100%;height: 100%;">
        <div id="map2" class="generic-map"></div>
      </div>
      <div class="modal-bottom">
        <p>The dots represent the results from the page, and are colored based on severity. Click on a dot to see information about the accident.</p>
        <button modal-export-svg class="btn-primary">Export SVG</button>
        <button modal-export-webp class="btn-primary">Export WEBP</button>
        <button modal-close class="btn-secondary">Close</button>
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
  <script src="./../assets/js/search.js"></script>

</body>

</html>