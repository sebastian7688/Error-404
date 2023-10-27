<?php
require_once "includes/config.php";

//$sql = "SELECT * FROM noticias ";
//$res = mysqli_query($conn, $sql);
//if (!$res) {
  //  'Fallo de Consulta: ' . mysqli_error($conn);
    //die();
//}
//$noticias = mysqli_fetch_all($res, MYSQLI_ASSOC);


//function limitar_cadena($cadena, $limite, $sufijo)
//{
    //if (strlen($cadena) > $limite) {
      //  return substr($cadena, 0, $limite) . $sufijo;
    //}
  //  return $cadena;
//}
$section = "views/news_read_more";
 require_once "views/layout.php";