<?php
require_once "includes/config.php";

$sql = "SELECT * FROM `productos` ORDER BY fecha_alta DESC";
$res = mysqli_query($conn, $sql);
if (!$res) {
    'Fallo de Consulta: ' . mysqli_error($conn);
    die();
}
$productos = mysqli_fetch_all($res, MYSQLI_ASSOC);
$num_registros =  mysqli_num_rows($res);
//paginnation resource
$registros = 8;
$paginas = $num_registros / $registros;
$paginas = ceil($paginas);
$iniciar = ($_GET['pagina'] - 1) * $registros;

//fixed bugs of paggination
if (!$_GET['pagina']) {
    header('location: shop.php?pagina=1');
}
if ($_GET['pagina'] <= 0) {
    header('location: shop.php?pagina=1');
}
if ($_GET['pagina'] > $paginas) {
    header("location: shop.php?pagina=1");
}

//paginador y filtros
if (isset($_GET['sport_id'])) {

    if ($_GET['sport_id'] == 28) {
        header("location: shop.php?pagina=1");
    }
    $sql2 = "SELECT * FROM productos WHERE id_deporte = '" . $_GET['sport_id'] . "' ORDER BY fecha_alta DESC LIMIT $iniciar,$registros";

    $res2 = mysqli_query($conn, $sql2);
    $productos_nuevos = mysqli_fetch_all($res2, MYSQLI_ASSOC);
    $total_registros =  mysqli_num_rows($res);
} else {
    $sql2 = "SELECT * FROM productos ORDER BY fecha_alta DESC LIMIT $iniciar,$registros";

    $res2 = mysqli_query($conn, $sql2);
    $productos_nuevos = mysqli_fetch_all($res2, MYSQLI_ASSOC);
    $total_registros =  mysqli_num_rows($res);
}
//adding sports for filters

$instance = "SELECT*FROM deportes";
$query = mysqli_query($conn, $instance);
$deportes = mysqli_fetch_all($query, MYSQLI_ASSOC);
if(isset($_GET['sport_id'])){
    $id = $_GET['sport_id'];
}
$section = "views/shop";
require_once "views/layout.php";
