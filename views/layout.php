<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Always Sporting</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Free HTML Templates" name="keywords">
  <meta content="Free HTML Templates" name="description">

  <!-- Favicon -->
  <link href="css/seeker.css" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="lib/animates/SuperTux.min.css" rel="stylesheet">
  <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
  <link href="css/naruto.css" rel="stylesheet">
  <link href="img/favicon.ico" rel="icon">
  <link href="css/styles.min.css" rel="stylesheet">
  <link href="css/xd.css" rel="stylesheet">
  <link href="img/favicon.ico" rel="icon">
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
  require_once $section . '.php';
  ?>

  <footer>
    <?php require_once "footer.php"; ?>
  </footer>
</body>

</html>