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
          <li class="rectangle <?= ($BLOCK['page'] === 'cases' ? ' selected-rectangle' : "") ?>" ><a href="/charts/cases">See number of casses per state</a></li>
          <li class="rectangle <?= ($BLOCK['page'] === 'severity' ? ' selected-rectangle' : "") ?>" ><a href="/charts/severity">See the severity chart</a></li>
          <li class="rectangle <?= ($BLOCK['page'] === 'timeline' ? ' selected-rectangle' : "") ?>" ><a href="/charts/timeline">See the timeline of accidents</a></li>
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