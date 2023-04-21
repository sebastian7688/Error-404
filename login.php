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
        session_start();
        $_SESSION['usuario'] = mysqli_fetch_assoc($res);
        header('Location: index.php');
        }else{
            $stats= 1;
        }
        
    }

$section = "views/login";
require_once "views/layout.php";