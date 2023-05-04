<?php
require_once "includes/config.php";

if ($_POST) {
    $sql = "INSERT INTO noticias VALUES(null , '" . $_POST['title'] . "' , '" . $_POST['desc'] . "'
     , '" . $_POST['info'] . "' , '" . date("Y-m-d h:i:s", time()) . "' , '". $_FILES['principal_img']."')";
    $res = mysqli_query($conn, $sql);
    header('Location: index.php');
    if (!$res) {
        'Fallo de consulta: ' . mysqli_error($conn);
        die();
    }
  
    $noticias = mysqli_insert_id($conn);
    if ($_FILES['principal_img']['type'] == 'image/jpeg/png' || $_FILES['principal_img']['type'] == 'image/png' && $_FILES['principal_img']['error'] == 0) {
        if (!is_dir('img/noticias/' . $noticias)) {
            mkdir('img/noticias/' . $noticias);
        }
        move_uploaded_file($_FILES['principal_img']['tmp_name'], 'img/noticias/' . $noticias . '/principal.jpg');
    }
    header("Location: index.php");
}


$section = "views/add_notice";
require_once "views/layout.php";
