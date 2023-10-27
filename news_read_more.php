<?php
require_once "includes/config.php";

$sql = "SELECT * FROM noticias WHERE id = ".$_GET['id'];
$res = mysqli_query($conn, $sql);
if (!$res) {
    'Fallo de Consulta: ' . mysqli_error($conn);
    die();
}
$noticias = mysqli_fetch_all($res, MYSQLI_ASSOC);

$section = "views/news_read_more";
 require_once "views/layout.php";