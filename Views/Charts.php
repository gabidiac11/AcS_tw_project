<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, minimal-ui" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="icon" type="image/png" href="./../assets/favicon/logo.ico" />



  <title> Chart 1 - USA Accidents Smart Visualizer</title>
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
    <section class="main-section">
      <article class="main-section-title">
        <header>
          <h1>
            <?= $BLOCK['title'] ?>
          </h1>
        </header>
        <section>
          <?= $BLOCK['description'] ?>
        </section>
      </article>

      <div class="chart-content" id="chart-wrapper">
        <canvas width="50px" height="50px"></canvas>
        <div loader class="flex-all loader">
          <img class="loader-img" />
        </div>
      </div>

      </article>


    </section>

    <aside>
      <section>
        <h1>Charts to select</h1>
        <ul>
          <li class="rectangle" <?= ($BLOCK['page'] === 'cases' ? 'selected' : "") ?>><a href="/charts/cases">See number of casses per state</a></li>
          <li class="rectangle" <?= ($BLOCK['page'] === 'severity' ? 'selected' : "") ?>><a href="/charts/severity">See the severity chart</a></li>
          <li class="rectangle" <?= ($BLOCK['page'] === 'timeline' ? 'selected' : "") ?>><a href="/charts/timeline">See the timeline of accidents</a></li>
        </ul>
      </section>

      <section export-section>
        <h1>Export</h1>
        <ul>
          <li class="rectangle"> <button> Csv </button> </li>
          <li class="rectangle"> <button> Webp </button> </li>
          <li class="rectangle"> <button> Svg </button> </li>
        </ul>
      </section>
    </aside>
  </main>

  <script src="./../assets/js/index.js"></script>
  <script src="./../assets/js/ui/ChartPage.js"></script>

  <script>
    (() => {
      const eventHandler = () => {
        window.chartPage = new ChartPage({
          page: "<?= $BLOCK['page'] ?>",
          sourcePathname: "<?= $BLOCK['sourcePathname'] ?>"
        });
      };
      if (document.readyState !== "loading") {
        eventHandler();
      } else {
        document.addEventListener("DOMContentLoaded", eventHandler);
      }
    })();
  </script>
</body>

</html>