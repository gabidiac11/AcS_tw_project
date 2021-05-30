<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, minimal-ui" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="icon" type="image/png" href="./../assets/favicon/logo.ico" />
  
  <title> Map - USA Accidents Smart Visualizer</title>
  <link href="../../assets/css/index.css" media="all" rel="stylesheet" type="text/css" />
  <link href="../../assets/css/header.css" media="all" rel="stylesheet" type="text/css" />
  <link href="../../assets/css/form.css" media="all" rel="stylesheet" type="text/css" />
  <link href="../../assets/css/contact.css" media="all" rel="stylesheet" type="text/css" />
</head>

<body>
  <?php
  require_once __DIR__ . '/Layout/Header.php';
  ?>
  
  <main class="flex-all flex-wrap" id="contact-page">
    <div class="page-content flex-column">
      
      <form id="form" class="topBefore">
      <h1 class="width-100">Contact form</h1>
        <input class="inset-shadow-re-use" name="Name"id="Name" type="text" placeholder="Name">
        <input class="inset-shadow-re-use" name="Email"id="Email" type="text" placeholder="Email">
        <textarea class="inset-shadow-re-use" name="message"id="message" placeholder="Message"></textarea>
        <div class="flex-end">
          <input class="inset-shadow-re-use" id="send" type="submit" value="Send message">
        </div>
      </form>

    </div>
  </main>


</body>

</html>