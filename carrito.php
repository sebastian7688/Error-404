<?php
require_once "includes/config.php";

if (isset($_POST['agregar'])) {
    $sql = "SELECT*FROM productos WHERE id = '". $_POST['id'] ."'";
    $query = mysqli_query($conn , $sql);
    $m = mysqli_fetch_array($query , MYSQLI_ASSOC);
   
    $producto_id = $_POST['id'];
    $producto_nombre = $m['nombre_prod'];
    $producto_precio = $m['precio'] * $_POST['cant'];
    $cant = $_POST['cant'];
    $_SESSION['carrito'][$producto_id] = [
        'nombre_prod' => $producto_nombre,
        'precio' => $producto_precio,
        'cantidad' => $cant
    ];
}

$section = "views/carrito";
require_once "views/layout.php";
