<?php
require_once "includes/config.php";

$sql= "SELECT * FROM usuarios INNER JOIN roles ON usuarios.rol = roles.id_rol";
$res = mysqli_query($conn, $sql);
if (!$res) {
    die("Fallo de consulta: " . mysqli_error($conn));
}
$list_usser = mysqli_fetch_all($res, MYSQLI_ASSOC);

$section = "views/lista_usu";
require_once "views/layout.php";