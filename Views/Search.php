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
        <div class="left-side" style="width: 300px; height: 100vh; background-color: black;"> 
        </div>
        <div class="right-side flex-all" style="flex:1; flex-wrap:wrap; justfiy-content:space-between;">

        <?php
            for($i = 0; $i < 30; $i++) {
                ?>

            <div  style="width: 300px; min-height: 120px; max-width: 100%; padding: 30px; background-color: red; margin: 10px;">
                Test 
            </div>

                <?php

            }
        ?>

        </div>
    </div>
  </main>
</body>

</html>