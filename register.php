<?php
require_once "includes/config.php";

$status = 0;
if ($_POST) {
    $usu = $_POST['usu'];
    $correo = $_POST['correo'];
    $sql2 = "SELECT * FROM usuarios WHERE Usuarios.user_name = '" . $usu . "' OR Usuarios.email = '" . $correo . "'";
    $res2 = mysqli_query($conn, $sql2);
    if (!$res2) {
        $status = 1;
    }
    $reg = mysqli_num_rows($res2);
    if ($reg == 0) {
        $pass = md5($_POST['pass']);
        $sql = "INSERT INTO usuarios (id,user_name,contra,email,rol,fecha_alta,foto)VALUES(null ,  '" . $_POST['usu'] . "' , '" . $pass . "' , '" . $_POST['correo'] . "','1' , '". date("Y-m-d h:i:s", time()) ."','perfil.png')";
        $res = mysqli_query($conn, $sql);
        if (!$res) {
            $status = 1;
        }
        if($res){
            header('Location: login.php');
        }
    } else {
        $status = 1;
    }
}

$section = "views/register";
require_once "views/layout.php";
