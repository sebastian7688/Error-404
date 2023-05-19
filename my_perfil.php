<?php
require_once "includes/config.php";

$consulta = "SELECT * FROM usuarios WHERE id = '" . $_SESSION['usuario']['id'] . "'";
$query = mysqli_query($conn, $consulta);
$usser = mysqli_fetch_all($query, MYSQLI_ASSOC);
$status = false;


if ($_POST) {
    $usu = $_POST['name'];
    $correo = $_POST['email'];
    $sql2 = "SELECT * FROM usuarios WHERE Usuarios.user_name = '" . $usu . "' OR Usuarios.email = '" . $correo . "'";
    $res2 = mysqli_query($conn, $sql2);
    if (!$res2) {
        $status = 1;
    }
    $reg = mysqli_num_rows($res2);
    if ($reg == 0) {
        //descripcion
        if (isset($_POST['descrip'])) {
            $sql = "UPDATE `usuarios` SET descrip = '" . $_POST['descrip'] . "' WHERE id = " . $_SESSION['usuario']['id'];
            $res = mysqli_query($conn, $sql);
            if (!$res) {
                'Fallo de COnsulta: ' . mysqli_errno($conn);
                die();
            }
            header('Location: my_perfil.php');
        }

        //nombre
        if (isset($_POST['name'])) {
            $sql = "UPDATE `usuarios` SET user_name = '" . $_POST['name'] . "' WHERE id = " . $_SESSION['usuario']['id'];
            $res = mysqli_query($conn, $sql);
            if (!$res) {
                'Fallo de Consulta: ' . mysqli_errno($conn);
                die();
            }
            header('Location: my_perfil.php');
        }

        //correo
        if (isset($_POST['email'])) {
            $sql = "UPDATE `usuarios` SET email = '" . $_POST['email'] . "' WHERE id = " . $_SESSION['usuario']['id'];
            $res = mysqli_query($conn, $sql);
            if (!$res) {
                'Fallo de Consulta: ' . mysqli_errno($conn);
                die();
            }
            header('Location: my_perfil.php');
        }
    }else{
        $status = 1;
    }
}


$section = "views/my_perfil";
require_once "views/layout.php";
