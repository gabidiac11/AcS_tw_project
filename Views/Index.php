<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, minimal-ui" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="icon" type="image/png" href="./../assets/favicon/logo.ico" />

    <title> Welcome - USA Accidents Smart Visualizer</title>
    <link href="../../assets/css/index.css" media="all" rel="stylesheet" type="text/css" />
    <link href="../../assets/css/header.css" media="all" rel="stylesheet" type="text/css" />
    <link href="../../assets/css/home.css" media="all" rel="stylesheet" type="text/css" />
</head>

<body>
    <?php
    require_once __DIR__ . '/Layout/Header.php';
    ?>
    <main id="home-page">
        <div class="page-content">
            <?php
            $i = 1;
            while ($i < 20) {
            ?>

                <a href="/accidents/<?= ($i) ?>" class="home-page-item box-shadow-re-use overwrite-achor<?= $i % 2 == 0 ? " item-right" : "" ?>">
                    <img src="./../assets/images/not-found.jpg" />
                    <div class="content-item">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
                    </div>
                </a>


            <?php
                $i++;
            }
            ?>

        </div>
    </main>
</body>

</html>