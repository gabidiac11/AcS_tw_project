<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, minimal-ui" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="icon" type="image/png" href="./../assets/favicon/logo.ico" />

  <title> Charts - USA Accidents Smart Visualizer</title>
  <link href="../../assets/css/index.css" media="all" rel="stylesheet" type="text/css" />
  <link href="../../assets/css/header.css" media="all" rel="stylesheet" type="text/css" />
  <link href="../../assets/css/charts.css" media="all" rel="stylesheet" type="text/css" />
  <link href="../../assets/css/chart-filters.css" media="all" rel="stylesheet" type="text/css" />

  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.1.0/dist/chart.min.js"></script>
</head>

<body>

  <?php
  require_once __DIR__ . '/Layout/Header.php';

  ?>


  <main class="flex-all flex-wrap">
    <?php
    //die(json_encode($BLOCK)); 
    ?>
    <div class="main-section">
      <article class="main-section-title">
        <header>
          <h1>
            <?= $BLOCK['title'] ?>
          </h1>
        </header>
        <div>
          <?= $BLOCK['description'] ?>

          <div class="chart-filter">
            <button type="button" id="btn-filter">Show filters</button>
            <div class="filter-container">
              <a id="states-btn" data-filter="all" href="#" role="button">States</a><br />

              <!-- TODO
              <input type="checkbox" id="st-1" name="st-1">
              <label for="st-1" id="st-1-label">FL</label> -->
                
              <form id="states-form" class="states-container">
                <input type="checkbox" id="st-1" name="st-1">
                <label for="st-1" id="st-1-label">FL</label>
                <input type="checkbox" id="st-2" name="st-2">
                <label for="st-2" id="st-2-label">SC</label>
                <input type="checkbox" id="st-3" name="st-3">
                <label for="st-3" id="st-3-label">AZ</label>
                <input type="checkbox" id="st-4" name="st-4">
                <label for="st-4" id="st-4-label">IL</label>
                <input type="checkbox" id="st-5" name="st-5">
                <label for="st-5" id="st-5-label">OH</label>
                <input type="checkbox" id="st-6" name="st-6">
                <label for="st-6" id="st-6-label">CA</label>
                <input type="checkbox" id="st-7" name="st-7">
                <label for="st-7" id="st-7-label">TX</label>
                <input type="checkbox" id="st-8" name="st-8">
                <label for="st-8" id="st-8-label">NY</label>
                <input type="checkbox" id="st-9" name="st-9">
                <label for="st-9" id="st-9-label">OR</label>
                <input type="checkbox" id="st-10" name="st-10">
                <label for="st-10" id="st-10-label">NJ</label>
                <input type="checkbox" id="st-11" name="st-11">
                <label for="st-11" id="st-11-label">AL</label>
                <input type="checkbox" id="st-12" name="st-12">
                <label for="st-12" id="st-12-label">TN</label>
                <input type="checkbox" id="st-13" name="st-13">
                <label for="st-13" id="st-13-label">MI</label>
                <input type="checkbox" id="st-14" name="st-14">
                <label for="st-14" id="st-14-label">OK</label>
                <input type="checkbox" id="st-15" name="st-15">
                <label for="st-15" id="st-15-label">VA</label>
                <input type="checkbox" id="st-16" name="st-16">
                <label for="st-16" id="st-16-label">NC</label>
                <input type="checkbox" id="st-17" name="st-17">
                <label for="st-17" id="st-17-label">MA</label>
                <input type="checkbox" id="st-18" name="st-18">
                <label for="st-18" id="st-18-label">IA</label>
                <input type="checkbox" id="st-19" name="st-19">
                <label for="st-19" id="st-19-label">PA</label>
                <input type="checkbox" id="st-20" name="st-20">
                <label for="st-20" id="st-20-label">GA</label>
                <input type="checkbox" id="st-21" name="st-21">
                <label for="st-21" id="st-21-label">LA</label>
                <input type="checkbox" id="st-22" name="st-22">
                <label for="st-22" id="st-22-label">MO</label>
                <input type="checkbox" id="st-23" name="st-23">
                <label for="st-23" id="st-23-label">WA</label>
                <input type="checkbox" id="st-24" name="st-24">
                <label for="st-24" id="st-24-label">MD</label>
                <input type="checkbox" id="st-25" name="st-25">
                <label for="st-25" id="st-25-label">MN</label>
                <input type="checkbox" id="st-26" name="st-26">
                <label for="st-26" id="st-26-label">UT</label>
                <input type="checkbox" id="st-27" name="st-27">
                <label for="st-27" id="st-27-label">CO</label>
                <input type="checkbox" id="st-28" name="st-28">
                <label for="st-28" id="st-28-label">CT</label>
                <input type="checkbox" id="st-29" name="st-29">
                <label for="st-29" id="st-29-label">KY</label>
                <input type="checkbox" id="st-30" name="st-30">
                <label for="st-30" id="st-30-label">AR</label>
                <input type="checkbox" id="st-31" name="st-31">
                <label for="st-31" id="st-31-label">MS</label>
                <input type="checkbox" id="st-32" name="st-32">
                <label for="st-32" id="st-32-label">ID</label>
                <input type="checkbox" id="st-33" name="st-33">
                <label for="st-33" id="st-33-label">DC</label>
                <input type="checkbox" id="st-34" name="st-34">
                <label for="st-34" id="st-34-label">NE</label>
                <input type="checkbox" id="st-35" name="st-35">
                <label for="st-35" id="st-35-label">WI</label>
                <input type="checkbox" id="st-36" name="st-36">
                <label for="st-36" id="st-36-label">IN</label>
                <input type="checkbox" id="st-37" name="st-37">
                <label for="st-37" id="st-37-label">RI</label>
                <input type="checkbox" id="st-38" name="st-38">
                <label for="st-38" id="st-38-label">NV</label>
                <input type="checkbox" id="st-39" name="st-39">
                <label for="st-39" id="st-39-label">KS</label>
                <input type="checkbox" id="st-40" name="st-40">
                <label for="st-40" id="st-40-label">NM</label>
                <input type="checkbox" id="st-41" name="st-41">
                <label for="st-41" id="st-41-label">NH</label>
                <input type="checkbox" id="st-42" name="st-42">
                <label for="st-42" id="st-42-label">ME</label>
                <input type="checkbox" id="st-43" name="st-43">
                <label for="st-43" id="st-43-label">DE</label>
                <input type="checkbox" id="st-44" name="st-44">
                <label for="st-44" id="st-44-label">WV</label>
                <input type="checkbox" id="st-45" name="st-45">
                <label for="st-45" id="st-45-label">MT</label>
                <input type="checkbox" id="st-46" name="st-46">
                <label for="st-46" id="st-46-label">SD</label>
                <input type="checkbox" id="st-47" name="st-47">
                <label for="st-47" id="st-47-label">ND</label>
                <input type="checkbox" id="st-48" name="st-48">
                <label for="st-48" id="st-48-label">VT</label>
                <input type="checkbox" id="st-49" name="st-49">
                <label for="st-49" id="st-49-label">WY</label>
                <br />

                <a id="severity-btn" data-filter="all" href="#" role="button">Severity</a><br />
                <input type="checkbox" id="severity-1" name="severity-1" value="1">
                <label id="severity-1-label" for="severity-1">1</label>
                <input type="checkbox" id="severity-2" name="severity-2" value="2">
                <label id="severity-2-label" for="severity-2">2</label>
                <input type="checkbox" id="severity-3" name="severity-3" value="3">
                <label id="severity-3-label" for="severity-3">3</label>
                <input type="checkbox" id="severity-4" name="severity-4" value="4">
                <label id="severity-4-label" for="severity-4">4</label>
                <br />
                <div class="minmax">
                  <div class="minmax-item"><a id="distance-btn" data-filter="all" href="#" role="button">Distance</a>
                    <label for="distance-min">Min: <span id="distance-min-value">0</span></label>
                    <input type="range" onchange="updateInput(this.id, this.value);" min="0" max="100" value="0" name="DistanceMin" id="distance-min">
                    <label for="distance-max">Max: <span id="distance-max-value">0</span></label>
                    <input type="range" onchange="updateInput(this.id, this.value);" min="0" max="100" value="0" name="DistanceMax" id="distance-max"><br />
                  </div>
                  <div class="minmax-item"><a id="temperature-btn" data-filter="all" href="#" role="button">Temperature(F)</a>
                    <label for="temperature-min">Min: <span id="temperature-min-value">0</span></label>
                    <input type="range" onchange="updateInput(this.id, this.value);" min="-50" max="50" value="-50" name="TemperatureMin" id="temperature-min">
                    <label for="temperature-max">Max: <span id="temperature-max-value">0</span></label>
                    <input type="range" onchange="updateInput(this.id, this.value);" min="0" max="100" value="0" name="TemperatureMax" id="temperature-max"><br />
                  </div>

                  <div class="minmax-item"><a id="wind-chill-btn" data-filter="all" href="#" role="button">Wind chill(F)</a>
                    <label for="wind-chill-min">Min: <span id="wind-chill-min-value">0</span></label>
                    <input type="range" onchange="updateInput(this.id, this.value);" min="0" max="100" value="0" name="WindChillMin" id="wind-chill-min">
                    <label for="wind-chill">Max: <span id="wind-chill-max-value">0</span></label>
                    <input type="range" onchange="updateInput(this.id, this.value);" min="0" max="100" value="0" name="WindChillMax" id="wind-chill-max"><br />
                  </div>

                  <div class="minmax-item"><a id="humidity-btn" data-filter="all" href="#" role="button">Humidity(%)</a>
                    <label for="humidity-min">Min: <span id="humidity-min-value">0</span></label>
                    <input type="range" onchange="updateInput(this.id, this.value);" min="0" max="100" value="0" name="HumidityMin" id="humidity-min">
                    <label for="humidity-max">Max: <span id="humidity-max-value">0</span></label>
                    <input type="range" onchange="updateInput(this.id, this.value);" min="0" max="100" value="0" name="HumidityMax" id="humidity-max"><br />
                  </div>

                  <div class="minmax-item"><a id="pressure-btn" data-filter="all" href="#" role="button">Pressure(in)</a>
                    <label for="pressure-min">Min: <span id="pressure-min-value">0</span></label>
                    <input type="range" onchange="updateInput(this.id, this.value);" min="0" max="100" value="0" name="PressureMin" id="pressure-min">
                    <label for="pressure-max">Max: <span id="pressure-max-value">0</span></label>
                    <input type="range" onchange="updateInput(this.id, this.value);" min="0" max="100" value="0" name="PressureMax" id="pressure-max"><br />
                  </div>

                  <div class="minmax-item"><a id="visibility-btn" data-filter="all" href="#" role="button">Visibility(mi)</a>
                    <label for="visibility-min">Min: <span id="visibility-min-value">0</span></label>
                    <input type="range" onchange="updateInput(this.id, this.value);" min="0" max="100" value="0" name="VisibilityMin" id="visibility-min">
                    <label for="visibility-max">Max: <span id="visibility-max-value">0</span></label>
                    <input type="range" onchange="updateInput(this.id, this.value);" min="0" max="100" value="0" name="VisibilityMax" id="visibility-max"><br />
                  </div>

                  <div class="minmax-item"><a id="wind-speed-btn" data-filter="all" href="#" role="button">Wind speed(mph)</a>
                    <label for="wind-speed-min">Min: <span id="wind-speed-min-value">0</span></label>
                    <input type="range" onchange="updateInput(this.id, this.value);" min="0" max="100" value="0" name="WindSpeedMin" id="wind-speed-min">
                    <label for="wind-speed-max">Max: <span id="wind-speed-max-value">0</span></label>
                    <input type="range" onchange="updateInput(this.id, this.value);" min="0" max="100" value="0" name="WindSpeedMax" id="wind-speed-max"><br />
                  </div>

                  <div class="minmax-item"><a id="precipitation-btn" data-filter="all" href="#" role="button">Precipitation(in)</a>
                    <label for="precipitation-min">Min: <span id="precipitation-min-value">0</span></label>
                    <input type="range" onchange="updateInput(this.id, this.value);" min="0" max="100" value="0" name="PrecipitationMin" id="precipitation-min">
                    <label for="precipitation-max">Max: <span id="precipitation-max-value">0</span></label>
                    <input type="range" onchange="updateInput(this.id, this.value);" min="0" max="100" value="0" name="PrecipitationMax" id="precipitation-max"><br />
                  </div>

                  <a>Wind Direction</a><br />
                </div>

                <label for="WD-1" id="WD-1-label">nan</label>
                <input type="checkbox" id="WD-1" name="WD-1" value="nan">
                <label for="WD-2" id="WD-2-label">Eas</label>
                <input type="checkbox" id="WD-2" name="WD-2" value="East">
                <label for="WD-3" id="WD-3-label">SE</label>
                <input type="checkbox" id="WD-3" name="WD-3" value="SE">
                <label for="WD-4" id="WD-4-label">Wes</label>
                <input type="checkbox" id="WD-4" name="WD-4" value="West">
                <label for="WD-5" id="WD-5-label">NNE</label>
                <input type="checkbox" id="WD-5" name="WD-5" value="NNE">
                <label for="WD-6" id="WD-6-label">CAL</label>
                <input type="checkbox" id="WD-6" name="WD-6" value="CALM">
                <label for="WD-7" id="WD-7-label">SSW</label>
                <input type="checkbox" id="WD-7" name="WD-7" value="SSW">
                <label for="WD-8" id="WD-8-label">NE</label>
                <input type="checkbox" id="WD-8" name="WD-8" value="NE">
                <label for="WD-9" id="WD-9-label">W</label>
                <input type="checkbox" id="WD-9" name="WD-9" value="W">
                <label for="WD-10" id="WD-10-label">S</label>
                <input type="checkbox" id="WD-10" name="WD-10" value="S">
                <label for="WD-11" id="WD-11-label">ENE</label>
                <input type="checkbox" id="WD-11" name="WD-11" value="ENE">
                <label for="WD-12" id="WD-12-label">NW</label>
                <input type="checkbox" id="WD-12" name="WD-12" value="NW">
                <label for="WD-13" id="WD-13-label">NNW</label>
                <input type="checkbox" id="WD-13" name="WD-13" value="NNW">
                <label for="WD-14" id="WD-14-label">WNW</label>
                <input type="checkbox" id="WD-14" name="WD-14" value="WNW">
                <label for="WD-15" id="WD-15-label">South</label>
                <input type="checkbox" id="WD-15" name="WD-15" value="South">
                <label for="WD-16" id="WD-16-label">E</label>
                <input type="checkbox" id="WD-16" name="WD-16" value="E">
                <label for="WD-17" id="WD-17-label">N</label>
                <input type="checkbox" id="WD-17" name="WD-17" value="N">
                <label for="WD-18" id="WD-18-label">SW</label>
                <input type="checkbox" id="WD-18" name="WD-18" value="SW">
                <label for="WD-19" id="WD-19-label">North</label>
                <input type="checkbox" id="WD-19" name="WD-19" value="North">
                <label for="WD-20" id="WD-20-label">SSE</label>
                <input type="checkbox" id="WD-20" name="WD-20" value="SSE">
                <label for="WD-21" id="WD-21-label">ESE</label>
                <input type="checkbox" id="WD-21" name="WD-21" value="ESE">
                <label for="WD-22" id="WD-22-label">VAR</label>
                <input type="checkbox" id="WD-22" name="WD-22" value="VAR">
                <label for="WD-23" id="WD-23-label">WSW</label>
                <input type="checkbox" id="WD-23" name="WD-23" value="WSW">
                <label for="WD-24" id="WD-24-label">Variable</label>
                <input type="checkbox" id="WD-24" name="WD-24" value="Variable"><br />
                <input type="submit" value="Submit">
              </form><br />
            </div>
          </div>

          <script>
            const toggleFiltersBtn = document.querySelector('#btn-filter');
            const filteredItemsList = document.querySelector('.filter-container');
            const toggleStateList = document.querySelector('#states-btn');
            const stateItemsList = document.querySelector('.states-container');

            const updateInput = (id, value) => {
              const idToUpdate = `${id}-value`;
              const elementToUpdate = document.getElementById(idToUpdate);
              elementToUpdate.innerHTML = value;
            }

            toggleFiltersBtn.addEventListener('click', () => {
              if (filteredItemsList.style.display === 'none') {
                filteredItemsList.style.display = 'block';
                toggleFiltersBtn.innerHTML = 'Hide filters';
              } else {
                filteredItemsList.style.display = 'none';
                toggleFiltersBtn.innerHTML = 'Show filters';
              }
            });
            toggleStateList.addEventListener('click', () => {
              if (stateItemsList.style.display === 'none') {
                stateItemsList.style.display = 'block';
              } else {
                stateItemsList.style.display = 'none';
              }
            });

            // Get Page Form
            const form = document.forms[0];

            // Listen on form submit
            form.addEventListener("submit", function(event) {
              event.preventDefault();

              // Generate Form data
              const formData = new FormData(this);

              // Form data array
              const entries = formData.entries();

              // Form data object
              const data = Object.fromEntries(entries);

              // Remove range entries that have value the same as defaultValue
              const formDataKeys = Object.keys(data);
              // TODO
              // const state = [];
              const state = [];
              const severity = [];
              const windDirection = [];

              for (let i = 0; i < formDataKeys.length; i++) {
                const currentKey = formDataKeys[i];

                if (data[currentKey] === "0" || data[currentKey] === "-50") {
                  delete data[currentKey];
                }

                // Check if the input name contains "st-"
                if (currentKey.indexOf("st-") >= 0) {
                  const inputLabel = document.getElementById(`${currentKey}-label`);
                  const stateValue = inputLabel.innerHTML;
                  state.push(stateValue)
                  delete data[currentKey];
                }

                // Check if the input name contains "severity-"
                if (currentKey.indexOf("severity-") >= 0) {
                  const inputLabel = document.getElementById(`${currentKey}-label`);
                  const severityValue = inputLabel.innerHTML;
                  severity.push(severityValue)
                  delete data[currentKey];
                }

                // Check if the input name contains "WD-"
                if (currentKey.indexOf("WD-") >= 0) {
                  const inputLabel = document.getElementById(`${currentKey}-label`);
                  const windDirectionValue = inputLabel.innerHTML;
                  windDirection.push(windDirectionValue)
                  delete data[currentKey];
                }

                // TODO
                // Check if the input name contains "WD-"
                // if (currentKey.indexOf("WD-") >= 0) {
                //   const inputLabel = document.getElementById(`${currentKey}-label`);
                //   const windDirectionValue = inputLabel.innerHTML;
                //   windDirection.push(windDirectionValue)
                //   delete data[currentKey];
                // }
              }

              // TODO
              // if (!!state.length) data.state = state;
              if (!!state.length) data.state = state;
              if (!!severity.length) data.severity = severity;
              if (!!windDirection.length) data.windDirection = windDirection;

              console.log(data);
            });
          </script>
          <?php

          //$query = "SELECT State, count(*) as number FROM accidents";
          //$result = mysqli_query($conn, $query);
          //echo $result; 

          ?>
          <!-- DRAW SELECT NODE if chart page has a selection ***********************************************************-->
          <!-- PHP  -->
          <?php

          if (isset($BLOCK['selection'])) {
          ?>
            <!-- PHP  END -->
            <label for="select-type"><?= $BLOCK['selection']['label'] ?></label>
            <select id="select-type">


              <!-- PHP -->
              <?php
              foreach ($BLOCK['selection']['options'] as $key => $value) {
              ?>
                <!-- PHP  END -->

                <option value="<?= ($value) ?>" <?= ($BLOCK['selection']['value'] === $value ? "selected" : "") ?>>
                  <?= $value ?>
                </option>


                <!-- PHP -->
              <?php
              }
              ?>
              <!-- PHP  END -->

            </select>

            <!-- PHP -->
          <?php
          }
          ?>
          <!-- PHP END -->
          <!-- DRAW SELECT NODE ****END ***********************************************************-->

        </div>
      </article>

      <div class="chart-content" id="chart-wrapper">
        <canvas width="50px" height="50px"></canvas>
        <div id="loader" class="flex-all loader">
          <img src="./../assets/images/loader.gif" alt="loader-img" class="loader-img" />
        </div>
      </div>

      </article>
    </div>


    <aside itemscope>
      <section>
        <h2 class="heading">Charts to select</h2>
        <ul>
          <li class="rectangle <?= ($BLOCK['page'] === 'cases' ? ' selected-rectangle' : "") ?>"><a href="/charts/cases">See number of casses per state</a></li>
          <li class="rectangle <?= ($BLOCK['page'] === 'severity' ? ' selected-rectangle' : "") ?>"><a href="/charts/severity">See the severity chart</a></li>
          <li class="rectangle <?= ($BLOCK['page'] === 'timeline' ? ' selected-rectangle' : "") ?>"><a href="/charts/timeline">See the timeline of accidents</a></li>
        </ul>
      </section>

      <section class="export-section" itemprop="export-container">
        <h2 class="heading">Export</h2>
        <ul>
          <li class="rectangle"> <button name="Csv"> Csv </button> </li>
          <li class="rectangle"> <button name="Webp"> Webp </button> </li>
          <li class="rectangle"> <button name="Svg"> Svg </button> </li>
        </ul>
      </section>
    </aside>
  </main>

  <script src="./../assets/packages/canvas2svg/canvas2svg.js"></script>
  <script src="./../assets/js/index.js"></script>
  <script src="./../assets/js/ui/ChartPage.js"></script>


  <?php
  /**
   * CHOOSE TO USE chart with selection
   */
  if (isset($BLOCK['selection'])) {
  ?>

    <!-- HTML  -->
    <script>
      (() => {
        const eventHandler = () => {
          window.chartPage = new ChartPageSelection({
            page: "<?= $BLOCK['page'] ?>",
            selectedKey: "<?= $BLOCK['selection']['value'] ?>",
          });

          window.chartPage.init();
        };
        if (document.readyState !== "loading") {
          eventHandler();
        } else {
          document.addEventListener("DOMContentLoaded", eventHandler);
        }
      })();
    </script>
    <!-- HTML  END-->


  <?php
  } else {

    /**
     * LOAD GENERAL CHART
     */
  ?>

    <!-- HTML  -->
    <script>
      (() => {
        const eventHandler = () => {
          window.chartPage = new ChartPage({
            page: "<?= $BLOCK['page'] ?>"
          });

          window.chartPage.init();
        };
        if (document.readyState !== "loading") {
          eventHandler();
        } else {
          document.addEventListener("DOMContentLoaded", eventHandler);
        }
      })();
    </script>
    <!-- HTML  END-->

  <?php
  }

  ?>

</body>

</html>