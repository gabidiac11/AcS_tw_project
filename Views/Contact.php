<?php
    require_once __DIR__.'/Layout/Head.php';
    
    require_once __DIR__.'/Layout/Header.php';
?>
    <main></main>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, minimal-ui" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title> Map - USA Accidents Smart Visualizer</title>
  <link href="../../assets/css/index.css" media="all" rel="stylesheet" type="text/css" />
  <!-- Pointer events polyfill for old browsers, see https://caniuse.com/#feat=pointer -->
  <script src="https://unpkg.com/elm-pep"></script>
  <link href="../../assets/css/form.css" media="all" rel="stylesheet" type="text/css" />
</head>
  <body>
  <header>Contact form</header>
  <form id="form" class="topBefore">
		
        <input id="Name" type="text" placeholder="Name">
        <input id="Email" type="text" placeholder="Email">
        <textarea id="message" type="text" placeholder="Message"></textarea>
<input id="send" type="send" value="Send message">
</form>
  </body>
</html>