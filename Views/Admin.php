<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, minimal-ui"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="icon" type="image/png" href="./../assets/favicon/logo.ico"/>

    <title> Admin - USA Accidents Smart Visualizer</title>
    <link href="../../assets/css/index.css" media="all" rel="stylesheet" type="text/css"/>
    <link href="../../assets/css/header.css" media="all" rel="stylesheet" type="text/css"/>
    <link href="../../assets/css/admin.css" media="all" rel="stylesheet" type="text/css"/>
    <script src="../../assets/js/login.js"></script>
</head>

<body>
<?php
require_once __DIR__ . '/Layout/Header.php';
?>
<main id="admin-page">
    <?php
    if (isset($BLOCK['success'])) {
        ?>
        <script>validate( <?= $BLOCK['success'] ?>)</script>
        <?php
    }
    ?>

    <div class="login" style="margin-top: 150px;">
        <h1>Admin Panel</h1>
        <form id="login" method="POST" action="/admin/send">
            <input id="name" type="text" name="user" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <p class="remember_me">
                <label>
                    <input type="checkbox" name="remember_me" id="remember_me">
                    Remember me
                </label>
            </p>
            <p class="submit"><input type="submit" value="Login"></p>
        </form>
    </div>
</main>
</body>

</html>