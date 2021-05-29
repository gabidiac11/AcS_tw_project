<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, minimal-ui"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="icon" type="image/png" href="./../assets/favicon/logo.ico"/>

    <title> AdminPanel - USA Accidents Smart Visualizer</title>
    <link href="../../assets/css/index.css" media="all" rel="stylesheet" type="text/css"/>
    <link href="../../assets/css/header.css" media="all" rel="stylesheet" type="text/css"/>
    <link href="../../assets/css/adminpanel.css" media="all" rel="stylesheet" type="text/css"/>
    <script src="../../assets/js/loginpanel.js"></script>
</head>

<body onload="verification()">
<?php
require_once __DIR__ . '/Layout/Admin.php';

?>

<a class="parent" href="/maintenancemode">
    <img id="mmode" src="../../assets/images/mmode.png" alt="Image not found!"/>
</a>
<p class="description">Maintenance Mode description</p>

<a class="parent" href="/chartseditor">
    <img id="ceditor" src="../../assets/images/ceditor.png" alt="Image not found!" />
</a>
<p class="description">Charts Editor Description</p>

<a class="parent" href="/databaseeditor">
    <img id="deditor" src="../../assets/images/deditor.png" alt="Image not found!" />
</a>
<p class="description">Database Editor Description</p>
</body>

</html>