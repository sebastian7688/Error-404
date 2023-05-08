<?php
//cadena de conexion






$busqueda = $_POST['busqueda'];
// DEBO PREPARAR LOS TEXTOS QUE VOY A BUSCAR si la cadena existe
if ($busqueda <> '') {
    //CUENTA EL NUMERO DE PALABRAS
    $trozos = explode(" ", $busqueda);
    $numero = count($trozos);
    if ($numero == 1) {
        //SI SOLO HAY UNA PALABRA DE BUSQUEDA SE ESTABLECE UNA INSTRUCION CON LIKE
        $cadbusca = "SELECT id, nombre_prod, imagen, precio FROM productos WHERE nombre_prod LIKE '$busqueda%' ";
    }    else{
        $cadbusca = "SELECT id,nombre_prod,imagen,precio FROM `productos` WHERE 1;";

    }

    $result = mysqli_query($conn, $cadbusca);
    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
    ?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li class="breadcrumb-item"><a href="index.php" class="link-info" style="text-decoration: none;">Inicio</a>
            </li>
            <li class="breadcrumb-item active" href="shop.php" aria-current="page"><a class="link-dark"
                    style="text-decoration: none;">Tienda</a></li>
            <li class="breadcrumb-item active" href="shop.php" aria-current="page"><a class="link-dark"
                    style="text-decoration: none;"><?php echo $busqueda; ?> <i class="fa-solid fa-magnifying-glass"
                        style="font-size: 13px;"></i></a></li>
        </ol>
    </nav>
    <div class="rov">
        <div align="baseline">
            <h1 align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TIENDA</h1><br>
        </div>
        <div class="col-lg-8">
            <div class="modal-content" style="border:2px solid darkgrey; border-radius: 25px; height:65px;">
                <div class="modal-header border-0">
                    <h4>ㅤResultados de la busqueda "
                        <?php echo $busqueda; ?>"
                    </h4>
                    <h2><span><a href="index.php" data-toggle="tooltip" data-placement="top" title="Eliminar búsqueda"> <i
                                    class="fa-solid fa-circle-xmark" style="color:maroon; margin-top:0.5%;"></i></a></span>
                    </h2>
                </div>
            </div>
        </div>
        <br>
                        
        <div class="row px-xl-5">
            <?php foreach ($row as $rows) { ?>
        
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                        
                            <?php
                            $i = $rows['id'];
                            if (file_exists('img/productos/' . $i . '/principal.jpg')) { ?>
                                <img class="card-img-top" height="200rem"
                                    src="img/productos/<?php echo $rows['id']; ?>/principal.jpg">
                                <?php
                            } ?>

                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="" style="background-color:rgb(3 158 207);"
                                    style="color:rgb(3 158 207);"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="">
                                <?php echo $rows['nombre_prod'] ?>
                            </a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5>$
                                    <?php echo $rows['precio'] ?>
                                </h5>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>



            <?php }
}

?>
    </div>