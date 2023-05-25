<?php
require_once "includes/config.php";

$sql="SELECT * FROM `noticias` ORDER BY fecha_alta DESC LIMIT 8";
$res = mysqli_query($conn , $sql);
if(!$res){
    'Fallo de Consulta: '. mysqli_error($conn);
    die();
}
$noticias = mysqli_fetch_all($res , MYSQLI_ASSOC);
$sql = "SELECT * FROM `productos` ORDER BY fecha_alta DESC LIMIT 3;";
$res = mysqli_query($conn , $sql);
if(!$res){
    'Fallo de Consulta: '. mysqli_error($conn);
    die();
}
$productos_nuevos = mysqli_fetch_all($res , MYSQLI_ASSOC);
//funcion para limitar tecto
function limitar_cadena($cadena, $limite, $sufijo){
    if(strlen($cadena) > $limite){
        return substr($cadena, 0, $limite) . $sufijo;
    }
return $cadena;
}
require_once "views/layout.php";
$section = "views/home.php";
