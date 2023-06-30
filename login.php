<?php
require_once "includes/config.php";

$stats = 0;
if (isset($_POST['usu']) && isset($_POST['pass'])) {
    $usurio = $_POST['usu'];
    $sql = "SELECT * FROM usuarios WHERE user_name = '" . $usurio . "'
    AND contra = '" . md5($_POST['pass']) . "'";
    $res = mysqli_query($conn, $sql);
    if (!$res) {
        $stats = 1;
    }
    $filas = mysqli_num_rows($res);
    if ($filas == 1) {

        $_SESSION['usuario'] = mysqli_fetch_assoc($res);
        header('location: index.php');
    } else {
        $stats = 1;
    }

    if (isset($_POST['cookies']) && $_POST['cookies'] == "true") {
        setcookie('nombre', $_POST['usu']);
        setcookie('pass', $_POST['pass']);
        setcookie('cookie', $_POST['cookies']);
        $_COOKIE = $_POST;
    } else if (isset($_POST['usu']) && $_POST['cookies'] != "true") {
        setcookie('nombre', '');
        setcookie('pass', '');
        setcookie('cookie', '');
        unset($_COOKIE);
    }
}
require_once "views/login.php";
