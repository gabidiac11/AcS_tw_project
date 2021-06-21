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

              <!-- TODO
              <input type="checkbox" id="st-1" name="st-1">
              <label for="st-1" id="st-1-label">FL</label> -->

              <form>
                <div id="states-form" class="states-container">
                  <input type="checkbox" id="st-1" name="st-1">
                  <label for="st-1" id="st-1-label">FL</label>
                  <input type="checkbox" id="st-2" name="st-2">
                  <label for="st-2" id="st-2-label">SC</label>
                  <input type="checkbox" id="st-3" name="st-3">
                  <label for="st-3" id="st-3-label">AZ</label>
                  <input type="checkbox" id="st-4" name="st-4">
                  <label for="st-4" id="st-4-label">IL</label>
                  <input type="checkbox" id="st-5" name="st-5">
                  <label for="st-5" id="st-5-label">OH</label>
                  <input type="checkbox" id="st-6" name="st-6">
                  <label for="st-6" id="st-6-label">CA</label>
                  <input type="checkbox" id="st-7" name="st-7">
                  <label for="st-7" id="st-7-label">TX</label>
                  <input type="checkbox" id="st-8" name="st-8">
                  <label for="st-8" id="st-8-label">NY</label>
                  <input type="checkbox" id="st-9" name="st-9">
                  <label for="st-9" id="st-9-label">OR</label>
                  <input type="checkbox" id="st-10" name="st-10">
                  <label for="st-10" id="st-10-label">NJ</label>
                  <input type="checkbox" id="st-11" name="st-11">
                  <label for="st-11" id="st-11-label">AL</label>
                  <input type="checkbox" id="st-12" name="st-12">
                  <label for="st-12" id="st-12-label">TN</label>
                  <input type="checkbox" id="st-13" name="st-13">
                  <label for="st-13" id="st-13-label">MI</label>
                  <input type="checkbox" id="st-14" name="st-14">
                  <label for="st-14" id="st-14-label">OK</label>
                  <input type="checkbox" id="st-15" name="st-15">
                  <label for="st-15" id="st-15-label">VA</label>
                  <input type="checkbox" id="st-16" name="st-16">
                  <label for="st-16" id="st-16-label">NC</label>
                  <input type="checkbox" id="st-17" name="st-17">
                  <label for="st-17" id="st-17-label">MA</label>
                  <input type="checkbox" id="st-18" name="st-18">
                  <label for="st-18" id="st-18-label">IA</label>
                  <input type="checkbox" id="st-19" name="st-19">
                  <label for="st-19" id="st-19-label">PA</label>
                  <input type="checkbox" id="st-20" name="st-20">
                  <label for="st-20" id="st-20-label">GA</label>
                  <input type="checkbox" id="st-21" name="st-21">
                  <label for="st-21" id="st-21-label">LA</label>
                  <input type="checkbox" id="st-22" name="st-22">
                  <label for="st-22" id="st-22-label">MO</label>
                  <input type="checkbox" id="st-23" name="st-23">
                  <label for="st-23" id="st-23-label">WA</label>
                  <input type="checkbox" id="st-24" name="st-24">
                  <label for="st-24" id="st-24-label">MD</label>
                  <input type="checkbox" id="st-25" name="st-25">
                  <label for="st-25" id="st-25-label">MN</label>
                  <input type="checkbox" id="st-26" name="st-26">
                  <label for="st-26" id="st-26-label">UT</label>
                  <input type="checkbox" id="st-27" name="st-27">
                  <label for="st-27" id="st-27-label">CO</label>
                  <input type="checkbox" id="st-28" name="st-28">
                  <label for="st-28" id="st-28-label">CT</label>
                  <input type="checkbox" id="st-29" name="st-29">
                  <label for="st-29" id="st-29-label">KY</label>
                  <input type="checkbox" id="st-30" name="st-30">
                  <label for="st-30" id="st-30-label">AR</label>
                  <input type="checkbox" id="st-31" name="st-31">
                  <label for="st-31" id="st-31-label">MS</label>
                  <input type="checkbox" id="st-32" name="st-32">
                  <label for="st-32" id="st-32-label">ID</label>
                  <input type="checkbox" id="st-33" name="st-33">
                  <label for="st-33" id="st-33-label">DC</label>
                  <input type="checkbox" id="st-34" name="st-34">
                  <label for="st-34" id="st-34-label">NE</label>
                  <input type="checkbox" id="st-35" name="st-35">
                  <label for="st-35" id="st-35-label">WI</label>
                  <input type="checkbox" id="st-36" name="st-36">
                  <label for="st-36" id="st-36-label">IN</label>
                  <input type="checkbox" id="st-37" name="st-37">
                  <label for="st-37" id="st-37-label">RI</label>
                  <input type="checkbox" id="st-38" name="st-38">
                  <label for="st-38" id="st-38-label">NV</label>
                  <input type="checkbox" id="st-39" name="st-39">
                  <label for="st-39" id="st-39-label">KS</label>
                  <input type="checkbox" id="st-40" name="st-40">
                  <label for="st-40" id="st-40-label">NM</label>
                  <input type="checkbox" id="st-41" name="st-41">
                  <label for="st-41" id="st-41-label">NH</label>
                  <input type="checkbox" id="st-42" name="st-42">
                  <label for="st-42" id="st-42-label">ME</label>
                  <input type="checkbox" id="st-43" name="st-43">
                  <label for="st-43" id="st-43-label">DE</label>
                  <input type="checkbox" id="st-44" name="st-44">
                  <label for="st-44" id="st-44-label">WV</label>
                  <input type="checkbox" id="st-45" name="st-45">
                  <label for="st-45" id="st-45-label">MT</label>
                  <input type="checkbox" id="st-46" name="st-46">
                  <label for="st-46" id="st-46-label">SD</label>
                  <input type="checkbox" id="st-47" name="st-47">
                  <label for="st-47" id="st-47-label">ND</label>
                  <input type="checkbox" id="st-48" name="st-48">
                  <label for="st-48" id="st-48-label">VT</label>
                  <input type="checkbox" id="st-49" name="st-49">
                  <label for="st-49" id="st-49-label">WY</label>
                </div>
                <br />

                <a id="severity-btn" data-filter="all" href="#" role="button">Severity</a><br />
                <input type="checkbox" id="severity-1" name="severity-1" value="1">
                <label id="severity-1-label" for="severity-1">1</label>
                <input type="checkbox" id="severity-2" name="severity-2" value="2">
                <label id="severity-2-label" for="severity-2">2</label>
                <input type="checkbox" id="severity-3" name="severity-3" value="3">
                <label id="severity-3-label" for="severity-3">3</label>
                <input type="checkbox" id="severity-4" name="severity-4" value="4">
                <label id="severity-4-label" for="severity-4">4</label>
                <br />
                <div class="minmax">
                  <div class="minmax-item"><a id="distance-btn" data-filter="all" href="#" role="button">Distance</a>
                    <label for="distance-min">Min: <span id="distance-min-value">0</span></label>
                    <input type="range" onchange="updateInput(this.id, this.value);" min="0" max="100" value="0" name="DistanceMin" id="distance-min">
                    <label for="distance-max">Max: <span id="distance-max-value">0</span></label>
                    <input type="range" onchange="updateInput(this.id, this.value);" min="0" max="100" value="0" name="DistanceMax" id="distance-max"><br />
                  </div>

                  <div class="minmax-item"><a id="temperature-btn" data-filter="all" href="#" role="button">Temperature(F)</a>
                    <label for="temperature-min">Min: <span id="temperature-min-value">0</span></label>
                    <input type="range" onchange="updateInput(this.id, this.value);" min="-50" max="50" value="-50" name="TemperatureMin" id="temperature-min">
                    <label for="temperature-max">Max: <span id="temperature-max-value">0</span></label>
                    <input type="range" onchange="updateInput(this.id, this.value);" min="0" max="100" value="0" name="TemperatureMax" id="temperature-max"><br />
                  </div>

                  <div class="minmax-item"><a id="wind-chill-btn" data-filter="all" href="#" role="button">Wind chill(F)</a>
                    <label for="wind-chill-min">Min: <span id="wind-chill-min-value">0</span></label>
                    <input type="range" onchange="updateInput(this.id, this.value);" min="0" max="100" value="0" name="WindChillMin" id="wind-chill-min">
                    <label for="wind-chill-max">Max: <span id="wind-chill-max-value">0</span></label>
                    <input type="range" onchange="updateInput(this.id, this.value);" min="0" max="100" value="0" name="WindChillMax" id="wind-chill-max"><br />
                  </div>

                  <div class="minmax-item"><a id="humidity-btn" data-filter="all" href="#" role="button">Humidity(%)</a>
                    <label for="humidity-min">Min: <span id="humidity-min-value">0</span></label>
                    <input type="range" onchange="updateInput(this.id, this.value);" min="0" max="100" value="0" name="HumidityMin" id="humidity-min">
                    <label for="humidity-max">Max: <span id="humidity-max-value">0</span></label>
                    <input type="range" onchange="updateInput(this.id, this.value);" min="0" max="100" value="0" name="HumidityMax" id="humidity-max"><br />
                  </div>

                  <div class="minmax-item"><a id="pressure-btn" data-filter="all" href="#" role="button">Pressure(in)</a>
                    <label for="pressure-min">Min: <span id="pressure-min-value">0</span></label>
                    <input type="range" onchange="updateInput(this.id, this.value);" min="0" max="100" value="0" name="PressureMin" id="pressure-min">
                    <label for="pressure-max">Max: <span id="pressure-max-value">0</span></label>
                    <input type="range" onchange="updateInput(this.id, this.value);" min="0" max="100" value="0" name="PressureMax" id="pressure-max"><br />
                  </div>

                  <div class="minmax-item"><a id="visibility-btn" data-filter="all" href="#" role="button">Visibility(mi)</a>
                    <label for="visibility-min">Min: <span id="visibility-min-value">0</span></label>
                    <input type="range" onchange="updateInput(this.id, this.value);" min="0" max="100" value="0" name="VisibilityMin" id="visibility-min">
                    <label for="visibility-max">Max: <span id="visibility-max-value">0</span></label>
                    <input type="range" onchange="updateInput(this.id, this.value);" min="0" max="100" value="0" name="VisibilityMax" id="visibility-max"><br />
                  </div>

                  <div class="minmax-item"><a id="wind-speed-btn" data-filter="all" href="#" role="button">Wind speed(mph)</a>
                    <label for="wind-speed-min">Min: <span id="wind-speed-min-value">0</span></label>
                    <input type="range" onchange="updateInput(this.id, this.value);" min="0" max="100" value="0" name="WindSpeedMin" id="wind-speed-min">
                    <label for="wind-speed-max">Max: <span id="wind-speed-max-value">0</span></label>
                    <input type="range" onchange="updateInput(this.id, this.value);" min="0" max="100" value="0" name="WindSpeedMax" id="wind-speed-max"><br />
                  </div>

                  <div class="minmax-item"><a id="precipitation-btn" data-filter="all" href="#" role="button">Precipitation(in)</a>
                    <label for="precipitation-min">Min: <span id="precipitation-min-value">0</span></label>
                    <input type="range" onchange="updateInput(this.id, this.value);" min="0" max="100" value="0" name="PrecipitationMin" id="precipitation-min">
                    <label for="precipitation-max">Max: <span id="precipitation-max-value">0</span></label>
                    <input type="range" onchange="updateInput(this.id, this.value);" min="0" max="100" value="0" name="PrecipitationMax" id="precipitation-max"><br />
                  </div>

                  <a>Wind Direction</a><br />
                </div>

                <div class="wind-direction">
                  <input type="checkbox" id="WD-1" name="WD-1" value="nan">
                  <label for="WD-1" id="WD-1-label">nan</label>
                  <input type="checkbox" id="WD-2" name="WD-2" value="East">
                  <label for="WD-2" id="WD-2-label">Eas</label>
                  <input type="checkbox" id="WD-3" name="WD-3" value="SE">
                  <label for="WD-3" id="WD-3-label">SE</label>
                  <input type="checkbox" id="WD-4" name="WD-4" value="West">
                  <label for="WD-4" id="WD-4-label">Wes</label>
                  <input type="checkbox" id="WD-5" name="WD-5" value="NNE">
                  <label for="WD-5" id="WD-5-label">NNE</label>
                  <input type="checkbox" id="WD-6" name="WD-6" value="CALM">
                  <label for="WD-6" id="WD-6-label">CALM</label>
                  <input type="checkbox" id="WD-7" name="WD-7" value="SSW">
                  <label for="WD-7" id="WD-7-label">SSW</label>
                  <input type="checkbox" id="WD-8" name="WD-8" value="NE">
                  <label for="WD-8" id="WD-8-label">NE</label>
                  <input type="checkbox" id="WD-9" name="WD-9" value="W">
                  <label for="WD-9" id="WD-9-label">W</label>
                  <input type="checkbox" id="WD-10" name="WD-10" value="S">
                  <label for="WD-10" id="WD-10-label">S</label>
                  <input type="checkbox" id="WD-11" name="WD-11" value="ENE">
                  <label for="WD-11" id="WD-11-label">ENE</label>
                  <input type="checkbox" id="WD-12" name="WD-12" value="NW">
                  <label for="WD-12" id="WD-12-label">NW</label>
                  <input type="checkbox" id="WD-13" name="WD-13" value="NNW">
                  <label for="WD-13" id="WD-13-label">NNW</label>
                  <input type="checkbox" id="WD-14" name="WD-14" value="WNW">
                  <label for="WD-14" id="WD-14-label">WNW</label>
                  <input type="checkbox" id="WD-15" name="WD-15" value="South">
                  <label for="WD-15" id="WD-15-label">South</label>
                  <input type="checkbox" id="WD-16" name="WD-16" value="E">
                  <label for="WD-16" id="WD-16-label">E</label>
                  <input type="checkbox" id="WD-17" name="WD-17" value="N">
                  <label for="WD-17" id="WD-17-label">N</label>
                  <input type="checkbox" id="WD-18" name="WD-18" value="SW">
                  <label for="WD-18" id="WD-18-label">SW</label>
                  <input type="checkbox" id="WD-19" name="WD-19" value="North">
                  <label for="WD-19" id="WD-19-label">North</label>
                  <input type="checkbox" id="WD-20" name="WD-20" value="SSE">
                  <label for="WD-20" id="WD-20-label">SSE</label>
                  <input type="checkbox" id="WD-21" name="WD-21" value="ESE">
                  <label for="WD-21" id="WD-21-label">ESE</label>
                  <input type="checkbox" id="WD-22" name="WD-22" value="VAR">
                  <label for="WD-22" id="WD-22-label">VAR</label>
                  <input type="checkbox" id="WD-23" name="WD-23" value="WSW">
                  <label for="WD-23" id="WD-23-label">WSW</label>
                  <input type="checkbox" id="WD-24" name="WD-24" value="Variable">
                  <label for="WD-24" id="WD-24-label">Variable</label><br />
                </div>

                <div class="wind-condition">
                  <br />
                  <a class="wind-condition" role="button">Wind Condition</a><br />
                  <input type="checkbox" id="wc-1" name="wc-1" value="Clear">
                  <label for="wc-1" id="wc-1-label">Clear</label>
                  <input type="checkbox" id="wc-2" name="wc-2" value="Mostly Cloudy">
                  <label for="wc-2" id="wc-2-label">Mostly Cloudy</label>
                  <input type="checkbox" id="wc-3" name="wc-3" value="nan">
                  <label for="wc-3" id="wc-3-label">nan</label>
                  <input type="checkbox" id="wc-4" name="wc-4" value="Scattered Clouds">
                  <label for="wc-4" id="wc-4-label">Scattered Clouds</label>
                  <input type="checkbox" id="wc-5" name="wc-5" value="Light Rain">
                  <label for="wc-5" id="wc-5-label">Light Rain</label>
                  <input type="checkbox" id="wc-6" name="wc-6" value="Fair">
                  <label for="wc-6" id="wc-6-label">Fair</label>
                  <input type="checkbox" id="wc-7" name="wc-7" value="Overcast">
                  <label for="wc-7" id="wc-7-label">Overcast</label>
                  <input type="checkbox" id="wc-8" name="wc-8" value="Partly Cloudy">
                  <label for="wc-8" id="wc-8-label">Partly Cloudy</label>
                  <input type="checkbox" id="wc-9" name="wc-9" value="Cloudy">
                  <label for="wc-9" id="wc-9-label">Cloudy</label>
                  <input type="checkbox" id="wc-10" name="wc-10" value="Haze">
                  <label for="wc-10" id="wc-10-label">Haze</label>
                  <input type="checkbox" id="wc-11" name="wc-11" value="Light Snow">
                  <label for="wc-11" id="wc-11-label">Light Snow</label>
                  <input type="checkbox" id="wc-12" name="wc-12" value="Drizzle">
                  <label for="wc-12" id="wc-12-label">Drizzle</label>
                  <input type="checkbox" id="wc-13" name="wc-13" value="Light Drizzle">
                  <label for="wc-13" id="wc-13-label">Light Drizzle</label>
                  <input type="checkbox" id="wc-14" name="wc-14" value="Fog">
                  <label for="wc-14" id="wc-14-label">Fog</label>
                  <input type="checkbox" id="wc-15" name="wc-15" value="Heavy Thunderstor">
                  <label for="wc-15" id="wc-15-label">Heavy Thunderstor</label>
                  <input type="checkbox" id="wc-16" name="wc-16" value="Heavy Rain">
                  <label for="wc-16" id="wc-16-label">Heavy Rain</label>
                  <input type="checkbox" id="wc-17" name="wc-17" value="Snow / Windy">
                  <label for="wc-17" id="wc-17-label">Snow / Windy</label>
                  <input type="checkbox" id="wc-18" name="wc-18" value="Snow">
                  <label for="wc-18" id="wc-18-label">Snow</label>
                  <input type="checkbox" id="wc-19" name="wc-19" value="Blowing Dust">
                  <label for="wc-19" id="wc-19-label">Blowing Dust</label>
                  <input type="checkbox" id="wc-20" name="wc-20" value="Smoke">
                  <label for="wc-20" id="wc-20-label">Smoke</label>
                  <input type="checkbox" id="wc-21" name="wc-21" value="Mostly Cloudy / W">
                  <label for="wc-21" id="wc-21-label">Mostly Cloudy / W</label>
                  <input type="checkbox" id="wc-22" name="wc-22" value="Thunderstorm">
                  <label for="wc-22" id="wc-22-label">Thunderstorm</label>
                  <input type="checkbox" id="wc-23" name="wc-23" value="Rain">
                  <label for="wc-23" id="wc-23-label">Rain</label>
                  <input type="checkbox" id="wc-24" name="wc-24" value="Light Rain with T">
                  <label for="wc-24" id="wc-24-label">Light Rain with T</label>
                  <input type="checkbox" id="wc-25" name="wc-25" value="Patches of Fog">
                  <label for="wc-25" id="wc-25-label">Patches of Fog</label>
                  <input type="checkbox" id="wc-26" name="wc-26" value="Thunder in the Vi">
                  <label for="wc-26" id="wc-26-label">Thunder in the Vi</label>
                  <input type="checkbox" id="wc-27" name="wc-27" value="Cloudy / Windy">
                  <label for="wc-27" id="wc-27-label">Cloudy / Windy</label>
                  <input type="checkbox" id="wc-28" name="wc-28" value="Wintry Mix">
                  <label for="wc-28" id="wc-28-label">Wintry Mix</label>
                  <input type="checkbox" id="wc-29" name="wc-29" value="T-Storm / Windy">
                  <label for="wc-29" id="wc-29-label">T-Storm / Windy</label>
                  <input type="checkbox" id="wc-30" name="wc-30" value="Mist">
                  <label for="wc-30" id="wc-30-label">Mist</label>
                  <input type="checkbox" id="wc-31" name="wc-31" value="Thunder">
                  <label for="wc-31" id="wc-31-label">Thunder</label>
                  <input type="checkbox" id="wc-32" name="wc-32" value="Fair / Windy">
                  <label for="wc-32" id="wc-32-label">Fair / Windy</label>
                  <input type="checkbox" id="wc-33" name="wc-33" value="Light Rain / Wind">
                  <label for="wc-33" id="wc-33-label">Light Rain / Wind</label>
                  <input type="checkbox" id="wc-34" name="wc-34" value="Partly Cloudy / W">
                  <label for="wc-34" id="wc-34-label">Partly Cloudy / W</label>
                  <input type="checkbox" id="wc-35" name="wc-35" value="Light Snow / Wind">
                  <label for="wc-35" id="wc-35-label">Light Snow / Wind</label>
                  <input type="checkbox" id="wc-36" name="wc-36" value="Heavy Snow">
                  <label for="wc-36" id="wc-36-label">Heavy Snow</label>
                  <input type="checkbox" id="wc-37" name="wc-37" value="Light Freezing Fo">
                  <label for="wc-37" id="wc-37-label">Light Freezing Fo</label>
                  <input type="checkbox" id="wc-38" name="wc-38" value="Light Thunderstor">
                  <label for="wc-38" id="wc-38-label">Light Thunderstor</label>
                  <input type="checkbox" id="wc-39" name="wc-39" value="Heavy T-Storm">
                  <label for="wc-39" id="wc-39-label">Heavy T-Storm</label>
                  <input type="checkbox" id="wc-40" name="wc-40" value="Shallow Fog">
                  <label for="wc-40" id="wc-40-label">Shallow Fog</label>
                  <input type="checkbox" id="wc-41" name="wc-41" value="ight Freezing Ra">
                  <label for="wc-41" id="wc-41-label">ight Freezing Ra</label>
                  <input type="checkbox" id="wc-42" name="wc-42" value="Rain / Windy">
                  <label for="wc-42" id="wc-42-label">Rain / Windy</label>
                  <input type="checkbox" id="wc-43" name="wc-43" value="T-Storm">
                  <label for="wc-43" id="wc-43-label">T-Storm</label>
                  <input type="checkbox" id="wc-44" name="wc-44" value="Showers in the Vi">
                  <label for="wc-44" id="wc-44-label">Showers in the Vi</label>
                  <input type="checkbox" id="wc-45" name="wc-45" value="Drizzle and Fog">
                  <label for="wc-45" id="wc-45-label">Drizzle and Fog</label>
                  <input type="checkbox" id="wc-46" name="wc-46" value="Heavy Rain / Wind">
                  <label for="wc-46" id="wc-46-label">Heavy Rain / Wind</label>
                  <input type="checkbox" id="wc-47" name="wc-47" value="Light Freezing Dr">
                  <label for="wc-47" id="wc-47-label">Light Freezing Dr</label>
                  <input type="checkbox" id="wc-48" name="wc-48" value="Thunderstorms and">
                  <label for="wc-48" id="wc-48-label">Thunderstorms and</label>
                  <input type="checkbox" id="wc-49" name="wc-49" value="Light Snow and Sl">
                  <label for="wc-49" id="wc-49-label">Light Snow and Sl</label>
                  <input type="checkbox" id="wc-50" name="wc-50" value="Blowing Snow">
                  <label for="wc-50" id="wc-50-label">Blowing Snow</label>
                  <input type="checkbox" id="wc-51" name="wc-51" value="Snow and Sleet /">
                  <label for="wc-51" id="wc-51-label">Snow and Sleet /</label>
                  <input type="checkbox" id="wc-52" name="wc-52" value="Light Rain Shower">
                  <label for="wc-52" id="wc-52-label">Light Rain Shower</label>
                  <input type="checkbox" id="wc-53" name="wc-53" value="Light Ice Pellets">
                  <label for="wc-53" id="wc-53-label">Light Ice Pellets</label>
                  <input type="checkbox" id="wc-54" name="wc-54" value="Ice Pellets">
                  <label for="wc-54" id="wc-54-label">Ice Pellets</label>
                  <input type="checkbox" id="wc-55" name="wc-55" value="Heavy T-Storm / W">
                  <label for="wc-55" id="wc-55-label">Heavy T-storm / W</label>
                  <input type="checkbox" id="wc-56" name="wc-56" value="Haze / Windy">
                  <label for="wc-56" id="wc-56-label">Haze / Windy</label>
                  <input type="checkbox" id="wc-57" name="wc-57" value="N/A Precipitation">
                  <label for="wc-57" id="wc-57-label">N/A Precipitation</label>
                  <input type="checkbox" id="wc-58" name="wc-58" value="Heavy Snow / Wind">
                  <label for="wc-58" id="wc-58-label">Heavy Snow / Wind</label>
                  <input type="checkbox" id="wc-59" name="wc-59" value="Thunder / Windy">
                  <label for="wc-59" id="wc-59-label">Thunder / Windy</label>
                  <input type="checkbox" id="wc-60" name="wc-60" value="Heavy Drizzle">
                  <label for="wc-60" id="wc-60-label">Heavy Drizzle</label>
                  <input type="checkbox" id="wc-61" name="wc-61" value="Blowing Dust / Wi">
                  <label for="wc-61" id="wc-61-label">Blowing Dust / Wi</label>
                  <input type="checkbox" id="wc-62" name="wc-62" value="Light Drizzle / W">
                  <label for="wc-62" id="wc-62-label">Light Drizzle / W</label>
                  <input type="checkbox" id="wc-63" name="wc-63" value="Blowing Snow / Wi">
                  <label for="wc-63" id="wc-63-label">Blowing Snow / Wi</label>
                  <input type="checkbox" id="wc-64" name="wc-64" value="Smoke / Windy">
                  <label for="wc-64" id="wc-64-label">Smoke / Windy</label>
                  <input type="checkbox" id="wc-65" name="wc-65" value="Rain Showers">
                  <label for="wc-65" id="wc-65-label">Rain Showers</label>
                  <input type="checkbox" id="wc-66" name="wc-66" value="Thunder / Wintry">
                  <label for="wc-66" id="wc-66-label">Thunder / Wintry</label>
                  <input type="checkbox" id="wc-67" name="wc-67" value="Sleet / Windy">
                  <label for="wc-67" id="wc-67-label">Sleet / Windy</label>
                  <input type="checkbox" id="wc-68" name="wc-68" value="Heavy Blowing Sno">
                  <label for="wc-68" id="wc-68-label">Heavy Blowing Snow</label>
                  <input type="checkbox" id="wc-69" name="wc-69" value="Fog / Windy">
                  <label for="wc-69" id="wc-69-label">Fog / Windy</label>
                  <input type="checkbox" id="wc-70" name="wc-70" value="Widespread Dust">
                  <label for="wc-70" id="wc-70-label">Widespread Dust</label>
                  <input type="checkbox" id="wc-71" name="wc-71" value="Snow and Sleet">
                  <label for="wc-71" id="wc-71-label">Snow and Sleet</label>
                  <input type="checkbox" id="wc-72" name="wc-72" value="Sleet">
                  <label for="wc-72" id="wc-72-label">Sleet</label>
                  <input type="checkbox" id="wc-73" name="wc-73" value="Light Snow Shower">
                  <label for="wc-73" id="wc-73-label">Light Snow Shower</label>
                  <input type="checkbox" id="wc-74" name="wc-74" value="Freezing Rain">
                  <label for="wc-74" id="wc-74-label">Freezing Rain</label>
                  <input type="checkbox" id="wc-75" name="wc-75" value="Small Hail">
                  <label for="wc-75" id="wc-75-label">Small Hail</label>
                  <input type="checkbox" id="wc-76" name="wc-76" value="Light Sleet">
                  <label for="wc-76" id="wc-76-label">Light Sleet</label>
                  <input type="checkbox" id="wc-77" name="wc-77" value="Squalls / Windy">
                  <label for="wc-77" id="wc-77-label">Squalls / Windy</label>
                  <input type="checkbox" id="wc-78" name="wc-78" value="Funnel Cloud">
                  <label for="wc-78" id="wc-78-label">Funnel Cloud</label>
                  <input type="checkbox" id="wc-79" name="wc-79" value="Patches of Fog /">
                  <label for="wc-79" id="wc-79-label">Patches of Fog /</label>
                  <input type="checkbox" id="wc-80" name="wc-80" value="Heavy Rain Shower">
                  <label for="wc-80" id="wc-80-label">Heavy Rain Shower</label>
                  <input type="checkbox" id="wc-81" name="wc-81" value="Light Sleet / Win">
                  <label for="wc-81" id="wc-81-label">Light Sleet / Win</label>
                  <input type="checkbox" id="wc-82" name="wc-82" value="Partial Fog">
                  <label for="wc-82" id="wc-82-label">Partial Fog</label>
                  <input type="checkbox" id="wc-83" name="wc-83" value="Rain Shower">
                  <label for="wc-83" id="wc-83-label">Rain Shower</label>
                </div>

                <div class="circumstance">
                  <br />
                  <a class="circumstance" role="button">Circumstance</a><br />
                  <input type="checkbox" id="ccm-1" name="ccm-1" value="Amenityn">
                  <label for="ccm-1" id="ccm-1-label">Amenity</label>
                  <input type="checkbox" id="ccm-2" name="ccm-2" value="Bumpst">
                  <label for="ccm-2" id="ccm-2-label">Bump</label>
                  <input type="checkbox" id="ccm-3" name="ccm-3" value="Crossing">
                  <label for="ccm-3" id="ccm-3-label">Crossing</label>
                  <input type="checkbox" id="ccm-4" name="ccm-4" value="Give Wayst">
                  <label for="ccm-4" id="ccm-4-label">Give Way</label>
                  <input type="checkbox" id="ccm-5" name="ccm-5" value="Junction">
                  <label for="ccm-5" id="ccm-5-label">Junction</label>
                  <input type="checkbox" id="ccm-6" name="ccm-6" value="No Exit">
                  <label for="ccm-6" id="ccm-6-label">No ExitM</label>
                  <input type="checkbox" id="ccm-7" name="ccm-7" value="Railway">
                  <label for="ccm-7" id="ccm-7-label">Railway</label>
                  <input type="checkbox" id="ccm-8" name="ccm-8" value="Roundabout">
                  <label for="ccm-8" id="ccm-8-label">Roundabout</label>
                  <input type="checkbox" id="ccm-9" name="ccm-9" value="Station">
                  <label for="ccm-9" id="ccm-9-label">Stationlabel</label>
                  <input type="checkbox" id="ccm-10" name="ccm-10" value="Stop">
                  <label for="ccm-10" id="ccm-10-label">Stoplabel</label>
                  <input type="checkbox" id="ccm-11" name="ccm-11" value="Traffic Calming">
                  <label for="ccm-11" id="ccm-11-label">Traffic Calming</label>
                  <input type="checkbox" id="ccm-12" name="ccm-12" value="Traffic Signal">
                  <label for="ccm-12" id="ccm-12-label">Traffic Signal</label>
                  <input type="checkbox" id="ccm-13" name="ccm-13" value="Turning Loop">
                  <label for="ccm-13" id="ccm-13-label">Turning Loop</label>
                </div>

                <div class="astrologicalTwilight">
                  <br />
                  <a class="wind-condition" role="button">Astrological Twilight</a><br />
                  <input type="checkbox" id="at-1" name="at-1" value="1">
                  <label id="at-1-label" for="at-1">Day</label>
                  <input type="checkbox" id="at-2" name="at-2" value="2">
                  <label id="at-2-label" for="at-2">Night</label>
                  <input type="checkbox" id="at-3" name="at-3" value="3">
                  <label id="at-3-label" for="at-3">nan</label>
                </div>
                <br />  
                <input type="submit" value="Submit">

              </form><br />
            </div>
          </div>

          <script>
            const toggleFiltersBtn = document.querySelector('#btn-filter');
            const filteredItemsList = document.querySelector('.filter-container');
            const toggleStateList = document.querySelector('#states-btn');
            const stateItemsList = document.querySelector('.states-container');

            const updateInput = (id, value) => {
              const idToUpdate = `${id}-value`;
              const elementToUpdate = document.getElementById(idToUpdate);
              elementToUpdate.innerHTML = value;
            }

            toggleFiltersBtn.addEventListener('click', () => {
              if (filteredItemsList.style.display === 'none') {
                filteredItemsList.style.display = 'block';
                toggleFiltersBtn.innerHTML = 'Hide filters';
              } else {
                filteredItemsList.style.display = 'none';
                toggleFiltersBtn.innerHTML = 'Show filters';
              }
            });
            toggleStateList.addEventListener('click', () => {
              if (stateItemsList.style.display === 'none') {
                stateItemsList.style.display = 'block';
              } else {
                stateItemsList.style.display = 'none';
              }
            });

            // Get Page Form
            const form = document.forms[0];

            // Listen on form submit
            form.addEventListener("submit", function(event) {

              if (filteredItemsList.style.display === 'none') {
                filteredItemsList.style.display = 'block';
                toggleFiltersBtn.innerHTML = 'Hide filters';
              } else {
                filteredItemsList.style.display = 'none';
                toggleFiltersBtn.innerHTML = 'Show filters';
              }

              event.preventDefault();

              // Generate Form data
              const formData = new FormData(this);

              // Form data array
              const entries = formData.entries();

              // Form data object
              const data = Object.fromEntries(entries);

              // Remove range entries that have value the same as defaultValue
              const formDataKeys = Object.keys(data);
              // TODO
              // const state = [];
              const state = [];
              const severity = [];
              const windDirection = [];
              const windCondition = [];
              const circumstance = [];
              const astronomicalTwilight = [];


              for (let i = 0; i < formDataKeys.length; i++) {
                const currentKey = formDataKeys[i];

                if (data[currentKey] === "0" || data[currentKey] === "-50") {
                  delete data[currentKey];
                }

                // Check if the input name contains "st-"
                if (currentKey.indexOf("st-") >= 0) {
                  const inputLabel = document.getElementById(`${currentKey}-label`);
                  const stateValue = inputLabel.innerHTML;
                  state.push(stateValue)
                  delete data[currentKey];
                }

                // Check if the input name contains "severity-"
                if (currentKey.indexOf("severity-") >= 0) {
                  const inputLabel = document.getElementById(`${currentKey}-label`);
                  const severityValue = inputLabel.innerHTML;
                  severity.push(severityValue)
                  delete data[currentKey];
                }

                // Check if the input name contains "WD-"
                if (currentKey.indexOf("WD-") >= 0) {
                  const inputLabel = document.getElementById(`${currentKey}-label`);
                  const windDirectionValue = inputLabel.innerHTML;
                  windDirection.push(windDirectionValue)
                  delete data[currentKey];
                }

                if (currentKey.indexOf("wc-") >= 0) {
                  const inputLabel = document.getElementById(`${currentKey}-label`);
                  const windConditionValue = inputLabel.innerHTML;
                  windCondition.push(windConditionValue)
                  delete data[currentKey];
                }

                if (currentKey.indexOf("ccm-") >= 0) {
                  const inputLabel = document.getElementById(`${currentKey}-label`);
                  const circumstanceValue = inputLabel.innerHTML;
                  circumstance.push(circumstanceValue)
                  delete data[currentKey];
                }

                if (currentKey.indexOf("at-") >= 0) {
                  const inputLabel = document.getElementById(`${currentKey}-label`);
                  const astronomicalTwilightValue = inputLabel.innerHTML;
                  astronomicalTwilight.push(astronomicalTwilightValue)
                  delete data[currentKey];
                }

                // TODO
                // Check if the input name contains "WD-"
                // if (currentKey.indexOf("WD-") >= 0) {
                //   const inputLabel = document.getElementById(`${currentKey}-label`);
                //   const windDirectionValue = inputLabel.innerHTML;
                //   windDirection.push(windDirectionValue)
                //   delete data[currentKey];
                // }
              }

              // TODO
              // if (!!state.length) data.state = state;
              if (!!state.length) data.state = state;
              if (!!severity.length) data.severity = severity;
              if (!!windDirection.length) data.windDirection = windDirection;
              if (!!windCondition.length) data.windCondition = windCondition;
              if (!!circumstance.length) data.circumstance = circumstance;
              if (!!astronomicalTwilight.length) data.astronomicalTwilight = astronomicalTwilight;

              console.log(data);
            });
          </script>
          <?php

          //$query = "SELECT State, count(*) as number FROM accidents";
          //$result = mysqli_query($conn, $query);
          //echo $result; 

          ?>
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