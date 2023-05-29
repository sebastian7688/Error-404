<?php
require_once "includes/config.php";

//view notices
$sql = "SELECT * FROM `noticias` ORDER BY fecha_alta DESC LIMIT 8";
$res = mysqli_query($conn, $sql);
if (!$res) {
    'Fallo de Consulta: ' . mysqli_error($conn);
    die();
}
$noticias = mysqli_fetch_all($res, MYSQLI_ASSOC);

//view products
if (!$_GET) {
    $sql = "SELECT * FROM `productos` ORDER BY fecha_alta DESC LIMIT 8;";
    $res = mysqli_query($conn, $sql);
    if (!$res) {
        'Fallo de Consulta: ' . mysqli_error($conn);
        die();
    }
    $productos_nuevos = mysqli_fetch_all($res, MYSQLI_ASSOC);
}

//view categories
$sql2 = "SELECT * FROM deportes";
$res2 = mysqli_query($conn, $sql2);
if (!$res2) {
    'Fallo de Consulta' . mysqli_error($conn);
    die();
}
$categories = mysqli_fetch_all($res2, MYSQLI_ASSOC);

//categories function
if ($_GET) {
    if($_GET['id_cat'] < 1){
        header("Location: index.php");
    }
    $sql = "SELECT * FROM `productos` WHERE id_deporte = '" . $_GET['id_cat'] . "' ORDER BY fecha_alta DESC LIMIT 8";
    $res = mysqli_query($conn, $sql);
    if (!$res) {
        'Fallo de Consulta: ' . mysqli_error($conn);
        die();
    }
    $productos_nuevos = mysqli_fetch_all($res, MYSQLI_ASSOC);
}



//funcion para limitar tecto
function limitar_cadena($cadena, $limite, $sufijo)
{
    if (strlen($cadena) > $limite) {
        return substr($cadena, 0, $limite) . $sufijo;
    }
    return $cadena;
}
require_once "views/layout.php";
$section = "views/home.php";
