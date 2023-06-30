<?php
require_once "includes/config.php";

$sql = "SELECT * FROM `productos` ORDER BY fecha_alta DESC";
$res = mysqli_query($conn , $sql);
if(!$res){
    'Fallo de Consulta: '. mysqli_error($conn);
    die();
}
$productos = mysqli_fetch_all($res , MYSQLI_ASSOC);
$num_registros =  mysqli_num_rows($res);
//paginnation resource
$registros = 8;
$paginas = $num_registros / $registros;
$paginas= ceil($paginas);
$iniciar = ($_GET['pagina']-1)*$registros;

//fixed bugs of paggination
if(!$_GET['pagina']){
    header('location: shop.php?pagina=1');
}
if($_GET['pagina'] <= 0){
    header('location: shop.php?pagina=1');
}
if($_GET['pagina'] > $paginas){
    header("location: shop.php?pagina=1");
}

//paginador
$sql2 = "SELECT * FROM productos ORDER BY fecha_alta DESC LIMIT $iniciar,$registros";

$res2= mysqli_query($conn , $sql2);
$productos_nuevos = mysqli_fetch_all($res2,MYSQLI_ASSOC);
$total_registros =  mysqli_num_rows($res);

$section = "views/shop";
require_once "views/layout.php";