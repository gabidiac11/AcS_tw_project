<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, minimal-ui"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="icon" type="image/png" href="../../assets/favicon/logo.ico"/>

    <title> Database Editor - USA Accidents Smart Visualizer</title>
    <link href="../../assets/css/index.css" media="all" rel="stylesheet" type="text/css"/>
    <link href="../../assets/css/header.css" media="all" rel="stylesheet" type="text/css"/>
    <link href="../../assets/css/databaseeditor.css" media="all" rel="stylesheet" type="text/css"/>
    <script src="../../assets/js/loginpanel.js"></script>
    <script src="../../assets/js/databaseeditor.js"></script>
    <script src="../../assets/js/index.js"></script>
    <script src="../../assets/js/import.js"></script>
</head>

<body onload="loadPage()">
<?php
require_once __DIR__ . '/Layout/Admin.php';
?>
<main class="flex-all flex-column main" id="admin-panel">

    <div class="topnav" id="myTopnav">
        <a id="add" onclick="displayAdd()">Add</a>
        <a id="remove" onclick="displayRemove()"">Remove</a>
        <a id="edit" onclick="displayEdit()">Edit</a>
        <a id="import" onclick="displayImport()">CSV Import</a>
        <i class="fa fa-bars"></i>
        </a>
    </div>
    <div id="addDiv">
        <h2 id="acct">Accident Details</h2>
        <div class="principalDetails">
            <input class="item" type="text" placeholder="Id" id="idDb" >
            <input class="item" type="number" placeholder="Severity" id="severityDb">
            <input class="item" type="text" placeholder="Time" id="timeDb">
            <input class="item" type="datetime-local" placeholder="Date" id="dateDb">
            <input class="item" type="number" placeholder="Latitude" id="latitudeDb">
            <input class="item" type="number" placeholder="Longitude" id="longitudeDb">
            <input class="item" type="number" placeholder="Distance" id="distanceDb">
            <input class="description" type="text" placeholder="Description" id="descriptionDb">
        </div>
        <h2 id="address">Address</h2>
        <div class="address">
            <input class="item2" type="text" placeholder="Street" id="streetDb" >
            <input class="item2" type="text" placeholder="Number" id="numberDb">
            <input class="item2" type="text" placeholder="City" id="cityDb">
            <input class="item2" type="text" placeholder="State" id="stateDb">
            <input class="item2" type="text" placeholder="Zip Code" id="zipCodeDb">
        </div>
        <h2 id="weather">Weather</h2>
        <div class="address">
            <input class="item2" type="number" placeholder="Temperature" id="temperatureDb" >
            <input class="item2" type="number" placeholder="Wind Chill" id="windChillDb">
            <input class="item2" type="number" placeholder="Humidity" id="humidityDb">
            <input class="item2" type="number" placeholder="Pressure" id="pressureDb">
            <input class="item2" type="number" placeholder="Visibility" id="visibilityDb">
            <input class="item2" type="text" placeholder="Wind Direction" id="windDirectionDb">
            <input class="item2" type="number" placeholder="Wind Speed" id="windSpeedDb">
            <input class="item2" type="number" placeholder="Precipitation" id="precipitationDb">
            <input class="item2" type="text" placeholder="General Condition" id="generalConditionDb">
        </div>
        <h2 id="circumstances">Accident Circumstances</h2>
        <div class="circumstances">
            <label class="checkbox"><input type="checkbox" id="amenityDb" >Amenity</label>
            <label class="checkbox"><input type="checkbox" id="bumpDb" >Bump</label>
            <label class="checkbox"><input type="checkbox" id="crossingDb" >Crossing</label>
            <label class="checkbox"><input type="checkbox" id="giveAwayDb" >GiveAway</label>
            <label class="checkbox"><input type="checkbox" id="JunctionDb" >Junction</label>
            <label class="checkbox"><input type="checkbox" id="noExitDb" >No Exit</label>
            <label class="checkbox"><input type="checkbox" id="railwayDb" >Railway</label>
            <label class="checkbox"><input type="checkbox" id="roundAboutDb" >Round About</label>
            <label class="checkbox"><input type="checkbox" id="stationDb" >Station</label>
            <label class="checkbox"><input type="checkbox" id="stopDb" >Stop</label>
            <label class="checkbox"><input type="checkbox" id="trafficCalmingDb" >Traffic Calming</label>
            <label class="checkbox"><input type="checkbox" id="trafficSignalDb" >Traffic Signal</label>
            <label class="checkbox"><input type="checkbox" id="trafficLoopDb" >Traffic Loop</label>
        </div>
        <input id = "sub" type="submit" value="Submit">
    </div>
    </div>
    <div id="removeDiv">
        <p>test1</p>
    </div>
    <div id="editDiv">
        <div class="circumstances">
            </div>
    </div>
    <div id="importDiv">
        <div class="file-upload">
<<<<<<< HEAD
            <button id="input-upload" class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add
=======
            <button class="file-upload-btn" type="button" onclick="document.querySelector('.file-upload-input').click()">Add
>>>>>>> 4a7259eb9a5284c11d66a2d199b8f92a3069fb45
                File
            </button>

            <div class="image-upload-wrap">
                <input class="file-upload-input" type='file' onchange="readURL(this)"/>
                <div class="drag-text">
                    <h3>Drag and drop a file or select add File</h3>
                </div>
            </div>
            <div class="file-upload-content">
                <div class="image-title-wrap">
                    <button type="button" onclick="removeUpload()" class="remove-image">Remove <span
                                class="image-title">Uploaded File</span></button>
                </div>
            </div>
        </div>
    </div>
</main>
</body>

</html>