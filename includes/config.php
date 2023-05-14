<?php

define('DB_SERVER','localhost');
define('DB_USUARIO','root');
define('DB_PASSWORD','');
define('DB_BASE','sports');

$conn = mysqli_connect(DB_SERVER,DB_USUARIO,DB_PASSWORD,DB_BASE);
if(!$conn){
    die('Error de Conexión (' . mysqli_connect_errno() . ') '
        . mysqli_connect_error());
}

 session_start();
 function consulta($query, $conn, $option = false)
{
    $execute = mysqli_query($conn, $query);
    if (!$execute) {
        die("Error: " . mysqli_error($conn));
    }
    if ($option == 1) {
        return mysqli_fetch_assoc($execute);
    } else if ($option == 2) {
        return mysqli_fetch_all($execute, MYSQLI_NUM);
    } else if ($option == 3) {
        return mysqli_num_rows($execute);
    } else if ($option == 4) {
        return;
    } else {
        return mysqli_fetch_all($execute, MYSQLI_ASSOC);
    }
}