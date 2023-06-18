<?php 
require_once "includes/config.php";
$sql3="SELECT * FROM `productos` inner join carito on productos.id = carito.id_producto WHERE carito.id_usuario=".$_SESSION['usuario']['id'];
$res3=mysqli_query($conn,$sql3);
if(!$res3){
    $mes=1;
    'Fallo de consulta: '. mysqli_error($conn);
    die();
}
$caritos = mysqli_fetch_all($res3 , MYSQLI_ASSOC);
$section = "views/carito";
require_once "views/layout.php";
?>