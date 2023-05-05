<?php
require_once "includes/config.php";
$id = $_SESSION['usuario']['id'];
if ($_POST) {
    $sql = "INSERT INTO productos VALUES(null , '" . $_POST['name_prod'] . "' , '" . $_POST['desc'] . "'
    , '" . $_POST['info'] . "' , '" . $_POST['sport'] . "', '". $_POST['precio'] ."' 
    , '" . date("Y-m-d h:i:s", time()) . "' , '" . $id . "' , '" . $_FILES['principal_img'] . "')";
   
    $res = mysqli_query($conn, $sql);
    header('Location: shop.php');
    if (!$res) {
        'Fallo de consulta: ' . mysqli_error($conn);
        die();
    }
    $noticias = mysqli_insert_id($conn);
    if ( $_FILES['principal_img']['type'] == 'image/jpeg' || $_FILES['principal_img']['type'] == 'image/png' && $_FILES['principal_img']['error'] == 0) {
        if (!is_dir('img/productos/' . $noticias)) {
            mkdir('img/productos/' . $noticias);
        }
        move_uploaded_file($_FILES['principal_img']['tmp_name'], 'img/productos/' . $noticias . '/principal.jpg');
    }
    header("Location: shop.php");
}


$section = "views/add_product_shop";
require_once "views/layout.php";
