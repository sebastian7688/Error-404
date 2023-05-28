<?php
require_once "includes/config.php";

$sql = "SELECT * FROM productos INNER JOIN deportes
 ON productos.id_deporte = deportes.id_deporte
 WHERE id = ". $_GET['id'];
 $res = mysqli_query($conn , $sql);

if(!$res){
    'Fallo de consulta: '. mysqli_error($conn);
    die();
}
$productos = mysqli_fetch_all($res , MYSQLI_ASSOC);

$section = "views/products_read_more";
require_once "views/layout.php";
?>