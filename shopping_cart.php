<?php
require_once "includes/config.php";
echo $_POST['id'];
$mes=0;
$sql="INSERT INTO `carito`(`id_producto`, `id_usuario`) VALUES ('".$_POST['id']."','".$_SESSION['usuario']['id']."'); ";
$res=mysqli_query($conn,$sql);
$mes=0;
if(!$res){
    $mes=1;
    'Fallo de consulta: '. mysqli_error($conn);
    die();
}
echo $_POST['cant'];
$sql="UPDATE `productos` SET `cantidad`=(`cantidad`-".$_POST['cant'].") WHERE id=".$_POST['id'];
$res=mysqli_query($conn,$sql);
$mes=0;
if(!$res){
    $mes=1;
    'Fallo de consulta: '. mysqli_error($conn);
    die();
}
$sql3="SELECT * FROM `productos` inner join carito on productos.id = carito.id_producto WHERE carito.id_usuario=".$_SESSION['usuario']['id'];
$res3=mysqli_query($conn,$sql3);
if(!$res){
    $mes=1;
    'Fallo de consulta: '. mysqli_error($conn);
    die();
}
$carito = mysqli_fetch_all($res3 , MYSQLI_ASSOC);
header("location: shop.php");
$section = "product_read_more";
