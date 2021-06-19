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
              <form class="states-container">
                <input type="checkbox" id="st-1" name="st-1">
                <label for="st">FL</label>
                <input type="checkbox" id="st-2" name="st-2">
                <label for="st">SC</label>
                <input type="checkbox" id="st-3" name="st-3">
                <label for="st">AZ</label>
                <input type="checkbox" id="st-4" name="st-4">
                <label for="st">IL</label>
                <input type="checkbox" id="st-5" name="st-5">
                <label for="st">OH</label>
                <input type="checkbox" id="st-6" name="st-6">
                <label for="st">CA</label>
                <input type="checkbox" id="st-7" name="st-7">
                <label for="st">TX</label>
                <input type="checkbox" id="st-8" name="st-8">
                <label for="st">NY</label>
                <input type="checkbox" id="st-9" name="st-9">
                <label for="st">OR</label>
                <input type="checkbox" id="st-10" name="st-10">
                <label for="st">NJ</label>
                <input type="checkbox" id="st-11" name="st-1">
                <label for="st">AL</label>
                <input type="checkbox" id="st-12" name="st-2">
                <label for="st">TN</label>
                <input type="checkbox" id="st-13" name="st-3">
                <label for="st">MI</label>
                <input type="checkbox" id="st-14" name="st-4">
                <label for="st">OK</label>
                <input type="checkbox" id="st-15" name="st-5">
                <label for="st">VA</label>
                <input type="checkbox" id="st-16" name="st-6">
                <label for="st">NC</label>
                <input type="checkbox" id="st-17" name="st-7">
                <label for="st">MA</label>
                <input type="checkbox" id="st-18" name="st-8">
                <label for="st">IA</label>
                <input type="checkbox" id="st-19" name="st-9">
                <label for="st">PA</label>
                <input type="checkbox" id="st-20" name="st-10">
                <label for="st">GA</label>
                <input type="checkbox" id="st-21" name="st-1">
                <label for="st">LA</label>
                <input type="checkbox" id="st-22" name="st-2">
                <label for="st">MO</label>
                <input type="checkbox" id="st-23" name="st-3">
                <label for="st">WA</label>
                <input type="checkbox" id="st-24" name="st-4">
                <label for="st">MD</label>
                <input type="checkbox" id="st-25" name="st-5">
                <label for="st">MN</label>
                <input type="checkbox" id="st-26" name="st-6">
                <label for="st">UT</label>
                <input type="checkbox" id="st-27" name="st-7">
                <label for="st">CO</label>
                <input type="checkbox" id="st-28" name="st-8">
                <label for="st">CT</label>
                <input type="checkbox" id="st-29" name="st-9">
                <label for="st">KY</label>
                <input type="checkbox" id="st-30" name="st-10">
                <label for="st">AR</label>
                <input type="checkbox" id="st-31" name="st-1">
                <label for="st">MS</label>
                <input type="checkbox" id="st-32" name="st-2">
                <label for="st">ID</label>
                <input type="checkbox" id="st-33" name="st-3">
                <label for="st">DC</label>
                <input type="checkbox" id="st-34" name="st-4">
                <label for="st">NE</label>
                <input type="checkbox" id="st-35" name="st-5">
                <label for="st">WI</label>
                <input type="checkbox" id="st-36" name="st-6">
                <label for="st">IN</label>
                <input type="checkbox" id="st-37" name="st-7">
                <label for="st">RI</label>
                <input type="checkbox" id="st-38" name="st-8">
                <label for="st">NV</label>
                <input type="checkbox" id="st-39" name="st-9">
                <label for="st">KS</label>
                <input type="checkbox" id="st-40" name="st-10">
                <label for="st">NM</label>
                <input type="checkbox" id="st-41" name="st-1">
                <label for="st">NH</label>
                <input type="checkbox" id="st-42" name="st-2">
                <label for="st">ME</label>
                <input type="checkbox" id="st-43" name="st-3">
                <label for="st">DE</label>
                <input type="checkbox" id="st-44" name="st-4">
                <label for="st">WV</label>
                <input type="checkbox" id="st-45" name="st-5">
                <label for="st">MT</label>
                <input type="checkbox" id="st-46" name="st-6">
                <label for="st">SD</label>
                <input type="checkbox" id="st-47" name="st-7">
                <label for="st">ND</label>
                <input type="checkbox" id="st-48" name="st-8">
                <label for="st">VT</label>
                <input type="checkbox" id="st-49" name="st-9">
                <label for="st">WY</label>
              </form><br />
              <form>
                <a id="severity-btn" data-filter="all" href="#" role="button">Severity</a><br />
                <input type="checkbox" name="severity">1
                <input type="checkbox" name="severity">2
                <input type="checkbox" name="severity">3
                <input type="checkbox" name="severity">4
              </form><br />
              <div class="minmax">
                <a id="distance-btn" data-filter="all" href="#" role="button">Distance</a>
                Min<input type="range" name="Distance" id="distance">
                Max<input type="range" name="Distance" id="distance"><br />
                <a id="temperature-btn" data-filter="all" href="#" role="button">Temperature(F)</a>
                Min<input type="range" name="Distance" id="temperature">
                Max<input type="range" name="Distance" id="temperature"><br />
                <a id="wind-chill-btn" data-filter="all" href="#" role="button">Wind chill(F)</a>
                Min<input type="range" name="Distance" id="wind-chill">
                Max<input type="range" name="Distance" id="wind-chill"><br />
                <a id="humidity-btn" data-filter="all" href="#" role="button">Humidity(%)</a>
                Min<input type="range" name="Distance" id="humidity">
                Max<input type="range" name="Distance" id="humidity"><br />
                <a id="pressure-btn" data-filter="all" href="#" role="button">Pressure(in)</a>
                Min<input type="range" name="Distance" id="pressure">
                Max<input type="range" name="Distance" id="pressure"><br />
                <a id="visibility-btn" data-filter="all" href="#" role="button">Visibility(mi)</a>
                Min<input type="range" name="Distance" id="visibility">
                Max<input type="range" name="Distance" id="visibility"><br />
                <a id="wind-speed-btn" data-filter="all" href="#" role="button">Wind speed(mph)</a>
                Min<input type="range" name="Distance" id="wind-speed">
                Max<input type="range" name="Distance" id="wind-speed"><br />
                <a id="precipitation-btn" data-filter="all" href="#" role="button">Precipitation(in)</a>
                Min<input type="range" name="Distance" id="precipitation">
                Max<input type="range" name="Distance" id="precipitation"><br />
              </div>
              <div id=>Wind Direction</div>
              <form>
                <input type="checkbox" id="WD-1">nan
                <input type="checkbox" id="WD-2">East
                <input type="checkbox" id="WD-3">SE
                <input type="checkbox" id="WD-4">West
                <input type="checkbox" id="WD-5">NNE
                <input type="checkbox" id="WD-6">CALM
                <input type="checkbox" id="WD-7">SSW
                <input type="checkbox" id="WD-8">NE
                <input type="checkbox" id="WD-9">W
                <input type="checkbox" id="WD-10">S
                <input type="checkbox" id="WD-11">ENE
                <input type="checkbox" id="WD-12">NW
                <input type="checkbox" id="WD-13">NNW
                <input type="checkbox" id="WD-14">WNW
                <input type="checkbox" id="WD-15">South
                <input type="checkbox" id="WD-16">E
                <input type="checkbox" id="WD-17">N
                <input type="checkbox" id="WD-18">SW
                <input type="checkbox" id="WD-19">North
                <input type="checkbox" id="WD-20">SSE
                <input type="checkbox" id="WD-21">ESE
                <input type="checkbox" id="WD-22">VAR
                <input type="checkbox" id="WD-23">WSW
                <input type="checkbox" id="WD-24">Variable
              </form><br />
              <input type="submit" value="Submit">
            </div>
          </div>

          <script>
            const toggleBtn = document.querySelector('#btn-filter');
            const filterItems = document.querySelector('.filter-container');
            const toggleState = document.querySelector('#states-btn');
            const statesItems = document.querySelector('.states-container');

            toggleBtn.addEventListener('click', () => {
              if (filterItems.style.display === 'none') {
                filterItems.style.display = 'block';
                toggleBtn.innerHTML = 'Hide filters';
              } else {
                filterItems.style.display = 'none';
                toggleBtn.innerHTML = 'Show filters';
              }
            });
            toggleState.addEventListener('click', () => {
              if (statesItems.style.diplay === 'none') {
                statesItems.style.diplay = 'block';
              } else {
                statesItems.style.display = 'none';
              }
            })
          </script>

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