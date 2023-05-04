
<html>
  <head>
  <link rel="icon" href="img/icon.ico">
  <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/9817c2b4db.js" crossorigin="anonymous"></script>
  </head>
  <body>
  <header>
  
  <?php require_once "navbar.php"; ?>
</header>

<?php
$section = (isset($section)) ? $section : 'home';
require_once $section.'.php';
?>

<footer style="margin-top: 20%">
  <?php require_once "footer.php"; ?>
</footer>

  </body>
</html>