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
          <input disabled value="" placeholder="Search by description or id" />
          <button class="flex-all icon-c cursor-pointer filter-ic-cont" filter-btn active="true"><?= displaySvg("filter-line") ?></button>
          <button class="flex-all icon-c cursor-pointer x-ic-cont" delete-btn><?= displaySvg("close-line") ?></button>
        </div>
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
        <button class="btn-primary" id="export-btn">
          Export
        </button>

      </div>


      <div id="search-filters" class="filters-c">
        <div style="display: none;" class="filters-applied"></div>
        <div id="filter-edit-c" class="generic-box-shadow">
          <div class="flex-all" btn-bottom-panel>
            <button btn-cancel class="btn-secondary">Cancel</button>
            <button btn-confirm class="btn-primary">Apply</button>
          </div>

          <div filters-append>
          </div>
          
        </div>
      </div>

      <div id="list-results" class="list-wrapper">
        <div class="list-content" list-container style="display: none" more-than-one-result="false">
          <?php
          for ($index = 0; $index < 50; $index++) {
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
              <span style="color: red;" item-amenity> item-amenity</span>
              <span style="color: red;" item-bump> item-bump</span>
              <span style="color: red;" item-crossing> item-crossing</span>
              <span style="color: red;" item-giveAway> item-giveAway</span>
              <span style="color: red;" item-Junction> item-Junction</span>
              <span style="color: red;" item-No_Exit> item-No_Exit</span>
              <span style="color: red;" item-Railway> item-Railway</span>
              <span style="color: red;" item-Roundabout> item-Roundabout</span>
              <span style="color: red;" item-Station> item-Station</span>
              <span style="color: red;" item-Stop> item-Stop</span>
              <span style="color: red;" item-Traffic_Calming> item-Traffic_Calming</span>
              <span style="color: red;" item-Traffic_Signal> item-Traffic_Signal</span>
              <span style="color: red;" item-Turning_Loop> item-Turning_Loop</span>
            </div>


          <?php
          }
          ?>

          <div empty-indicator>No items found.</div>
          

        </div>


        
        <div list-loader class="flex-all loader" style="display: flex; height: calc(100vh - 235px);">
          <img class="loader-img" />
        </div>

        <div class="pagination" pagination-content>
            <div class="pagination-inner"> 
              <button disabled class="pagination-btn" pagination-prev> < </button>

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
                  <option value="10" selected >10</option>
                  <option value="20" >20</option>
                  <option value="30">30</option>
                  <option value="50">50</option>
              </select>
              </span>
            </div>

          </div> 
      </div>
      
      <?php
       if(!isset($_GET['no'])) {
         require_once __DIR__ . "/temp.php";
       }
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