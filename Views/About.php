<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, minimal-ui" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="icon" type="image/png" href="./../assets/favicon/logo.ico" />

  <title> About - USA Accidents Smart Visualizer</title>
  <link href="../../assets/css/index.css" media="all" rel="stylesheet" type="text/css" />
  <link href="../../assets/css/header.css" media="all" rel="stylesheet" type="text/css" />
  <link href="../../assets/css/about.css" media="all" rel="stylesheet" type="text/css" />
</head>

<body>
  <?php
  require_once __DIR__ . '/Layout/Header.php';
  ?>
  <main id="about-page">
    <div class="image-presentation">
      <img alt="about-img" class="box-shadow-re-use" src="./../assets/images/about-image.jpg" />
    </div>
    <div class="page-content">
      <h1> About our project!</h1>
      <p class="text-box-shadow-light-re-use">Our project it's using a countrywide car accident dataset who was collected in real-time using Traffic APIs. </p>
      <p class="text-box-shadow-light-re-use">Base on this we created a map who show to our users all the details about these accidents across 49 states from USA.</p>
      <p class="text-box-shadow-light-re-use">We provide to our users statistics with charts who can be exported in CSV, WebP and SVG.</p>
      <p class="text-box-shadow-light-re-use">From this dataset we are using a multi-criteria for search on incident reports.</p>
      <h2> Inspiration!</h2>
      <p class="text-box-shadow-light-re-use">In USA accidents are numerous, but there are not many statistics with charts to show how many monthly, or what's the most common accident</p>
      <p class="text-box-shadow-light-re-use">This project can be used to show to our users the impact of some accidents in deaths and make them more carefull in those situations.</p>
    </div>
  </main>
</body>

</html>