<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, minimal-ui" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="icon" type="image/png" href="./../assets/favicon/logo.ico" />
  
  <title> Search - USA Accidents Smart Visualizer</title>
  <link href="../../assets/css/index.css" media="all" rel="stylesheet" type="text/css" />
  <link href="../../assets/css/header.css" media="all" rel="stylesheet" type="text/css" />
    <link href="../../assets/css/ui/search-input.css" media="all" rel="stylesheet" type="text/css" />
    <link href="../../assets/css/ui/filter.css" media="all" rel="stylesheet" type="text/css" />
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
            <button class="btn-primary" id="export-btn">
                Export
            </button>
            <div class="flex-all">
                <label for="sort-select"> Sort by </label>
            <select id="sort-select">
                <option selected="">Sort By</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            </div>
        </div>

        <div id="search-filters" class="filters-c">
          <div style="display: none;" class="filters-applied"></div>
          <div id="filter-edit-c" class="generic-box-shadow" show="true">
              <div class="filter-item" filter-key="state" filter-type="pick-list">
                  <div class="filter-name" filter-name>State</div>
                  <div class="flex-start flex-wrap" filter-sub-items>
                      <button class="btn-secondary -delete" filter-item-applied>
                          Export
                          <span class="btn-child-x" btn-remove>
                              x
                          </span>
                      </button>

                      <button class="btn-secondary -delete" filter-item-applied>
                          Export
                          <span class="btn-child-x" btn-remove>
                              x
                          </span>
                      </button>
                      <div expand-list-btn class="flex-all icon-c cursor-pointer position-absolute arrow-expand-c">
                          <?= displaySvg("double-arrow")?>
                      </div>
                  </div>
              </div>
          </div>
        </div>

        <?php
         require_once __DIR__."/temp.php";
        ?>
    </div>
  </main>
</body>

</html>