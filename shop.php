<?php
require_once "includes/config.php";

$sql = "SELECT * FROM `productos` ORDER BY fecha_alta DESC LIMIT 3;";
$res = mysqli_query($conn , $sql);
if(!$res){
    'Fallo de Consulta: '. mysqli_error($conn);
    die();
}
$productos_nuevos = mysqli_fetch_all($res , MYSQLI_ASSOC);

$section = "views/shop";
require_once "views/layout.php";