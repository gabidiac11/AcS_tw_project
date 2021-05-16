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
            <div class="flex-all icon-c cursor-pointer search-icon-cont" search-btn><?= displaySvg("search-line")?></div>
            <input value="" placeholder="Search" />
            <div class="flex-all icon-c cursor-pointer filter-ic-cont" filter-btn active="true" ><?= displaySvg("filter-line")?></div>
            <div class="flex-all icon-c cursor-pointer x-ic-cont" delete-btn ><?= displaySvg("close-line")?></div>
          </div>
            <div class="flex-all sort-select">
                <select id="sort-select">
                    <option selected="">Sort By</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <button class="btn-primary" id="export-btn">
                Export
            </button>

        </div>


        <div id="search-filters" class="filters-c">
          <div style="display: none;" class="filters-applied"></div>
          <div id="filter-edit-c" class="generic-box-shadow" show="true">
          </div>
        </div>

        <?php
         require_once __DIR__."/temp.php";
        ?>
    </div>
  </main>
    <div class="flex-all flex-wrap" id="modal">
        <div class="box-shadow-re-use content-wrapper">
            <p modal-title> Title </p>
            <div modal-content>

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