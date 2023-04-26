<?php
require_once "includes/config.php";
require_once "views/navbar.php";

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
        $sql = "INSERT INTO usuarios 
    VALUES(null ,  '" . $_POST['usu'] . "' , '" . $pass . "' , '" . $_POST['correo'] . "','1')";
        $res = mysqli_query($conn, $sql);
        if (!$res) {
            $status = 1;
        }
        
    } else {
        $status = 1;
    }
}

require_once "views/register.php";
echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
 require_once "views/footer.php";
