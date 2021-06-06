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
        <p>test</p>
    </div>
    <div id="removeDiv">
        <p>test1</p>
    </div>
    <div id="editDiv">
        <p>test2</p>
    </div>
    <div id="importDiv">
        <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <div class="file-upload">
            <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add
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