<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, minimal-ui" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="icon" type="image/png" href="./../assets/favicon/logo.ico" />

  <title> Charts - USA Accidents Smart Visualizer</title>
  <link href="../../assets/css/index.css" media="all" rel="stylesheet" type="text/css" />
  <link href="../../assets/css/charts.css" media="all" rel="stylesheet" type="text/css" />
  <link href="../../assets/css/header.css" media="all" rel="stylesheet" type="text/css" />
</head>

<body>
  <?php
  require_once __DIR__ . '/Layout/Header.php';
  ?>
  <main class="flex-column">
    <div class="rectangle"><a href="/charts/Chart1">Chart based on casualties</a></div>
    <div class="rectangle"><a href="/charts/Chart2">Chart based on time period</a></div>
    <div class="rectangle"><a href="/charts/Chart3">Chart based on gender</a></div>
  </main>
  <canvas id="myChart" width="400" height="400"></canvas>
</body>

</html>