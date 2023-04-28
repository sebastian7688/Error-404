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