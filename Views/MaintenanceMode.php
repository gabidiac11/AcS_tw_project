<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, minimal-ui" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="icon" type="image/png" href="./../assets/favicon/logo.ico" />

    <title> AdminPanel - USA Accidents Smart Visualizer</title>
    <link href="../../assets/css/index.css" media="all" rel="stylesheet" type="text/css" />
    <link href="../../assets/css/header.css" media="all" rel="stylesheet" type="text/css" />
    <link href="../../assets/css/maintenancemode.css" media="all" rel="stylesheet" type="text/css" />
    <link href="../../assets/css/ui/button.css" media="all" rel="stylesheet" type="text/css" />
    <script src="../../assets/js/loginpanel.js"></script>
    <script src="../../assets/js/mmode.js"></script>
    <script src="../../assets/js/ui/button.js"></script>
</head>

<body onload="verifier('adminpanel'),getStatus(), getText()">
    <?php
    require_once __DIR__ . '/Layout/Admin.php';
    ?>
    <main class="flex-all flex-column main" id="admin-panel">
            <label for="message">Message Text:</label>
            <textarea wrap="off" id="message" name="message">

  </textarea>
            <br><br>
            <input onclick="updateText()" class="button" type="submit" value="Submit">
        <h2>Maintenance Mode Status</h2>
        <label class="container">Enabled
            <input id="enabled" type="radio" name="radio">
            <span class="checkmark"></span>
        </label>
        <label class="container">Disabled
            <input id="disabled" type="radio" name="radio">
            <span class="checkmark"></span>
        </label>
        <button onclick="updateStatus()" class="button">Submit</button>

    </main>
</body>

</html>