<?php
require_once "includes/config.php";
if(!isset($_SESSION['usuario'])){
    header('Location: index.php');
}
$sql= "SELECT * FROM usuarios INNER JOIN roles ON usuarios.rol = roles.id_rol WHERE roles.id_rol =2";
$res = mysqli_query($conn, $sql);
if (!$res) {
    die("Fallo de consulta: " . mysqli_error($conn));
}
$list_usser = mysqli_fetch_all($res, MYSQLI_ASSOC);

$section = "views/lista_usu";
require_once "views/layout.php";