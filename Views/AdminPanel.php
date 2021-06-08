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

<body onload=verifier("adminpanel")>
<?php
require_once __DIR__ . '/Layout/Admin.php';

?>

<a class="parent" href="/maintenancemode">
    <img id="mmode" src="../../assets/images/mmode.png" alt="Image not found!"/>
</a>
<p class="description">Maintenance Mode can be used to enable/disable the maintenance mode or to edit the maintenance message.</p>

<a class="parent" href="/adminmanager">
    <img id="amanager" src="../../assets/images/amanager.png" alt="Image not found!" />
</a>
<p class="description">Admin Manager can be used to add/remove admin panel accounts.</p>

<a class="parent" href="/databaseeditor">
    <img id="deditor" src="../../assets/images/deditor.png" alt="Image not found!" />
</a>
<p class="description">Database Editor can be used to add/remove/edit/import elements for the database.</p>
</body>

</html>