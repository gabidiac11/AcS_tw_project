<?php
    require_once __DIR__.'/Layout/Head.php';
    
    require_once __DIR__.'/Layout/Header.php';
?>
    <main></main>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, minimal-ui" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title> Map - USA Accidents Smart Visualizer</title>
  <link href="../../assets/css/index.css" media="all" rel="stylesheet" type="text/css" />
  <!-- Pointer events polyfill for old browsers, see https://caniuse.com/#feat=pointer -->
  <script src="https://unpkg.com/elm-pep"></script>
  <link href="../../assets/css/about.css" media="all" rel="stylesheet" type="text/css" />
</head>
  <body>
   <h1> About our project!</h1>
   <p>Our project it's using a countrywide car accident dataset who was collected in real-time using Traffic APIs. </p>
   <p>Base on this we created a map who show to our users all the details about these accidents across 49 states from USA.</p>
   <p>We provide to our users statistics with charts who can be exported in CSV, WebP and SVG.</p>
   <p>From this dataset we are using a multi-criteria for search on incident reports.</p>
   <h2> Inspiration!</h2>
   <p>In USA accidents are numerous, but there are not many statistics with charts to show how many monthly, or what's the most common accident</p>
    <p>This project can be used to show to our users the impact of some accidents in deaths and make them more carefull in those situations.</p>
  </body>
</html>