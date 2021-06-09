<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, minimal-ui"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="icon" type="image/png" href="./../assets/favicon/logo.ico"/>

    <title> Database Editor - USA Accidents Smart Visualizer</title>
    <link href="../../assets/css/index.css" media="all" rel="stylesheet" type="text/css"/>
    <link href="../../assets/css/header.css" media="all" rel="stylesheet" type="text/css"/>
    <link href="../../assets/css/account.css" media="all" rel="stylesheet" type="text/css"/>
    <link href="../../assets/css/maintenancemode.css" media="all" rel="stylesheet" type="text/css"/>
    <script src="../../assets/js/loginpanel.js"></script>
    <script src="../../assets/js/account.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js"></script>
</head>

<body onload="verifier('adminpanel'), addToArray()">
<?php
require_once __DIR__ . '/Layout/Admin.php';
?>
<main class="flex-all flex-column main" id="admin-panel">
    <h2>Add account</h2>
    <input type="text" id="addName" placeholder="Username">
    <input type="text" id="addPassword" placeholder="Password">
    <input onclick="addAccount()" id="sub" type="submit" value="Submit">
    <h2>Edit Account</h2>
    <select class="drop" name="Names" id="editNames">
    </select>
    <input type="text" id="editName" placeholder="New password">
    <input onclick="editAccount()" id="sub2" type="submit" value="Submit">
    <h2>Remove Account</h2>
    <select class="drop" name="Names" id="accNames">
    </select>
    <input onclick="removeAccount()" id="sub3" type="submit" value="Submit">

    <p id="message"></p>
</main>
</body>

</html>