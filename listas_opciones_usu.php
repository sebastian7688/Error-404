<?php
require_once "includes/config.php";
if(!isset($_SESSION['usuario'])){
    header('Location: index.php');
}
$sql= "DELETE FROM usuarios WHERE id = '". $_GET['id'] ."' ";
$res = mysqli_query($conn , $sql);
if(!$res){
    'Fallo de Consulta: '. mysqli_error($conn);
    die();
}
$sql2 = "UPDATE usuarios SET rol = 3 WHERE id = '". $_GET['mod'] ."'";
$query = mysqli_query($conn , $sql2);
if(!$query){
    'Fallo de Consulta: '. mysqli_error($conn);
    die();
}
$sql3 = "UPDATE usuarios SET rol = 1 WHERE id = '". $_GET['id_reset'] ."'";
$query2 = mysqli_query($conn , $sql3);
if(!$query2){
    'Fallo de consulta: '. mysqli_error($conn);
    die();
}
header('Location: lista_usu.php');