<?php
require_once "includes/config.php";

$sql="SELECT * FROM `noticias` ORDER BY fecha_alta DESC LIMIT 8";
$res = mysqli_query($conn , $sql);
if(!$res){
    'Fallo de Consulta: '. mysqli_error($conn);
    die();
}
$noticias = mysqli_fetch_all($res , MYSQLI_ASSOC);

require_once "views/layout.php";
$section = "views/home.php";
