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
        //todo
        if (isset($_POST['descrip'])) {
            
            $sql = "UPDATE `usuarios` SET foto='".$_FILES['foto']."',contra='".$_POST['contra']."',email = '" . $_POST['email'] . "',descrip = '" . $_POST['des'] . "' ,user_name = '" . $_POST['name'] . "'WHERE id = " . $_SESSION['usuario']['id'];
            $res = mysqli_query($conn, $sql);
            if (!$res) {
                'Fallo de COnsulta: ' . mysqli_errno($conn);
                die();
            }
            $no = mysqli_insert_id($conn);
    if ( $_FILES['foto']['type'] == 'image/jpeg' || $_FILES['foto']['type'] == 'image/png' && $_FILES['foto']['error'] == 0) {
        if (!is_dir('img/usuarios/' . $no)) {
            mkdir('img/usuarios/' . $no);
        }
        move_uploaded_file($_FILES['foto'], 'img/usuarios/' . $no . '/principal.jpg');
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
        //descripcion
        if(isset($_POST['des']))
        {
            $sql="UPDATE `usuarios` SET descrip='".$_POST['des']."'WHERE id =" . $_SESSION['usuarios']['id'];
            $res=mysqli_query($conn,$sql);
            if(!$res)
            {
                'Fallo de Consulta: ' . mysqli_errno($conn);
                die();
            }
            header('Location: my_perfil.php');

        }
        //contraseña
        if(isset($_POST['contra']))
        {
            $sql="UPDATE `usuarios` SET contra='".$_POST['contra']."'WHERE id =".$_SESSION['usuarios']['id'];
            $res=mysqli_query($conn,$sql);
            if(!$res)
            {
                'Fallo de Consulta: ' . mysqli_errno($conn);
                die();
            }
            header('Location: my_perfil.php');
        }
        //foto
        if(isset($_POST['foto']))
        {
            $sql="UPDATE `usuarios` SET foto='".$_FILES['foto']."'WHERE id =". $_SESSION['usuarios']['id'];
            $res=mysqli_query($conn,$sql);
            if(!$res)
            {
                'Fallo de Consulta: ' . mysqli_errno($conn);
                die();
            }
            $no = mysqli_insert_id($conn);
    if ( $_FILES['foto']['type'] == 'image/jpeg' || $_FILES['foto']['type'] == 'image/png' && $_FILES['foto']['error'] == 0) {
        if (!is_dir('img/usuarios/' . $no)) {
            mkdir('img/usuarios/' . $no);
        }
        move_uploaded_file($_FILES['foto'], 'img/usuarios/' . $no . '/principal.jpg');
    }
            header('Location: my_perfil.php');
        }
    }else{
        $status = 1;
    }
}
$is=2;
if($is%2==0){
$section = "views/my_perfil";}else if ($is%2!=0){$section="views/edit_profile";}
require_once "views/layout.php";
