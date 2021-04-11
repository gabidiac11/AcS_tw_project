<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, minimal-ui" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="icon" type="image/png" href="./../assets/favicon/logo.ico" />
  
  <title> Search - USA Accidents Smart Visualizer</title>
  <link href="../../assets/css/index.css" media="all" rel="stylesheet" type="text/css" />
  <link href="../../assets/css/header.css" media="all" rel="stylesheet" type="text/css" />
  <link href="../../assets/css/search.css" media="all" rel="stylesheet" type="text/css" />
</head>

<body>
  <?php
  
  require_once __DIR__ . '/Layout/Header.php';
  ?>
  <main>
    <div class="page-content-search flex-all" style="align-items: flex-start; flex-wrap:wrap;"> 
        <div class="left-side" style="width: 300px; height: 100vh; background-color: #903749;"> 
            <p style="color: #2B2E4A; font-size: 30px; padding-left: 10px;">Filter</p>
            <p style="color: white; font-size: 15px; padding-left: 10px;">- State</p>
            <p style="color: white; font-size: 15px; padding-left: 40px;">- County</p>
            <p style="color: white; font-size: 15px; padding-left: 40px;">- City</p>
            <p style="color: white; font-size: 15px; padding-left: 10px;">+ Severity</p>
            <p style="color: white; font-size: 15px; padding-left: 10px;">+ Temperature</p>
            <p style="color: white; font-size: 15px; padding-left: 10px;">+ Airport Code</p>
            <p style="color: white; font-size: 15px; padding-left: 10px;">+ Side</p>

        </div>
        <div class="right-side flex-all" style="flex:1; flex-wrap:wrap; justfiy-content:space-between; background-color: #2B2E4A;">

        <?php
            for($i = 0; $i < 30; $i++) {
                ?>

            <div  class="flex-all box-shadow-re-use" style="width: 300px; min-height: 120px; max-width: 100%; padding: 30px; background-color: #903749; margin: 10px; color: white;">
                <p style="text-align: center;"> Accident on Brice Rd at Tussing Rd. Expect delays. </p>
            </div>

                <?php

            }
        ?>

        </div>
    </div>
  </main>
</body>

</html>