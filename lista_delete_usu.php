<?php
require_once "includes/config.php";
if(!isset($_SESSION['usuario'])){
    header('Location: index.php');
}
$sql= "DELETE FROM usuarios WHERE id =". $_GET['id'];
$res = mysqli_query($conn , $sql);
if(!$res){
    'Fallo de Consulta: '. mysqli_error($conn);
    die();
}
header('Location: lista_usu.php');