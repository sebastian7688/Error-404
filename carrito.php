<?php
require_once "includes/config.php";

if (isset($_POST['agregar'])) {
    $sql = "SELECT*FROM productos WHERE id = '" . $_POST['id'] . "'";
    $query = mysqli_query($conn, $sql);
    $m = mysqli_fetch_array($query, MYSQLI_ASSOC);

    $producto_id = $_POST['id'];
    $producto_nombre = $m['nombre_prod'];
    $producto_precio = $m['precio'] * $_POST['cant'];
    $producto_incial = $m['precio'];
    $cant = $_POST['cant'];
    $_SESSION['carrito'][$producto_id] = [
        'nombre_prod' => $producto_nombre,
        'precio' => $producto_precio,
        'cantidad' => $cant,
        'inicial' => $producto_incial
    ];
}
$total = 0;
if (isset($_SESSION['carrito'])) {
    foreach ($_SESSION['carrito'] as $precios) {
        $precio = array((int)$precios['precio']);
        for ($i = 0; $i < count($precio); $i++) {
            $total = $total + $precio[$i];
        }
    }
}
if (isset($_POST['eliminar'])) {
    $producto_id = $_POST['producto_id'];

    if (isset($_SESSION['carrito'][$producto_id])) {
        $total = $total - (int)$_SESSION['carrito'][$producto_id]['precio'];
        unset($_SESSION['carrito'][$producto_id]);
    }
}
if(isset($_POST['restar'])){
    $producto_id = $_POST['producto_id'];

    if($_SESSION['carrito'][$producto_id]['cantidad'] > 0){
        --$_SESSION['carrito'][$producto_id]['cantidad'];
        $total = $total - $_SESSION['carrito'][$producto_id]['inicial'];
        $_SESSION['carrito'][$producto_id]['precio'] = $_SESSION['carrito'][$producto_id]['precio'] - $_SESSION['carrito'][$producto_id]['inicial'];
    }
    if($_SESSION['carrito'][$producto_id]['cantidad'] == 0){
        $total = $total - (int)$_SESSION['carrito'][$producto_id]['precio'];
        unset($_SESSION['carrito'][$producto_id]);
    }
}
if(isset($_POST['sumar'])){
    $producto_id = $_POST['producto_id'];
    ++$_SESSION['carrito'][$producto_id]['cantidad'];
    $total = $total + $_SESSION['carrito'][$producto_id]['inicial'];
    $_SESSION['carrito'][$producto_id]['precio'] = $_SESSION['carrito'][$producto_id]['precio'] + $_SESSION['carrito'][$producto_id]['inicial'];
}
if(isset($_POST['vaciar'])){
    unset($_SESSION['carrito']);
    $total = 0;
}

$section = "views/carrito";
require_once "views/layout.php";
