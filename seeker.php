<?php
//cadena de conexion






$busqueda = $_POST['busqueda'];
// DEBO PREPARAR LOS TEXTOS QUE VOY A BUSCAR si la cadena existe
if ($busqueda <> '  ') {
    //CUENTA EL NUMERO DE PALABRAS
    $trozos = explode(" ", $busqueda);
    $numero = count($trozos);
    if ($numero == 1) {
        //SI SOLO HAY UNA PALABRA DE BUSQUEDA SE ESTABLECE UNA INSTRUCION CON LIKE
        $cadbusca = "SELECT id, nombre_prod, imagen, precio FROM productos WHERE nombre_prod LIKE '$busqueda%' ";
    } else if ($busqueda == '') {
        $cadbusca = "SELECT id,nombre_prod,imagen,precio FROM `productos` WHERE 1;";

    } else if ($busqueda == ' ') {
        $cadbusca = "SELECT id,nombre_prod,imagen,precio FROM `productos` WHERE 1;";
    }

    $result = mysqli_query($conn, $cadbusca);
    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
    ?>

    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/shop.css">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li class="breadcrumb-item"><a href="index.php" class="link-info"
                    style="text-decoration: none;">Inicio</a>
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
            <div class="modal-content" style="border:2px solid darkgrey; border-radius: 100px; height:75px;">
                <div class="modal-header border-0">
                    <h4>Resultados de la busqueda: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"
                        <?php echo $busqueda; ?>"
                    </h4>
                    <h2><span><a href="shop.php" data-toggle="tooltip" data-placement="top" title="Eliminar búsqueda"> <i
                                    class="fa-solid fa-circle-xmark" style="color:maroon; margin-top:0.5%;"></i></a></span>
                    </h2>
                </div>
            </div>
        </div>
        <br>

        <div class="row px-xl-5">
            <?php $x = 0;
            foreach ($row as $rowss) {
                $x++;
            }
            echo "<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Productos Encontrados:", $x, " </h2><br>"; ?>

            
            </div>
            <br>
            <div class="row px-xl-5">
        <?php foreach ($row as $nuevos) { ?>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-5">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">

                        <?php
                        if (file_exists('img/productos/' . $nuevos['id'] . '/principal.jpg')) { ?>
                            <img class="img-fluid" style="width: 400px; height:300px"
                                src="img/productos/<?php echo $nuevos['id']; ?>/principal.jpg">
                            <?php
                        } ?>

                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square" href="products_read_more.php?id=<?php echo $nuevos['id']?>" style="background-color:rgb(3 158 207);"
                                style="color:rgb(3 158 207);"><i class="fa fa-search"></i></a>
                        </div>
                    </div>

                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="products_read_more.php?id=<?php echo $nuevos['id']?>">
                            <?php echo $nuevos['nombre_prod'] ?>

                            <div align="center" &nbsp;&nbsp;>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a>
                                    <i class="fa-solid fa-heart" style="color:red;"></i> </a></div>
                        </a>

                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>$
                                <?php echo $nuevos['precio'] ?>
                            </h5>
                            </h6>
                        </div>
                        <div align="center">
                            <FONT COLOR="#15b83b">20% Descuento</FONT>
                        </div>
                    </div>
                    <div align="center">
                        <form>
                            <p class="clasificacion">
                                <input id="radio1" type="radio" name="estrellas" value="5"><!--
    --><label for="radio1">★</label><!--
    --><input id="radio2" type="radio" name="estrellas" value="4"><!--
    --><label for="radio2">★</label><!--
    --><input id="radio3" type="radio" name="estrellas" value="3"><!--
    --><label for="radio3">★</label><!--
    --><input id="radio4" type="radio" name="estrellas" value="2"><!--
    --><label for="radio4">★</label><!--
    --><input id="radio5" type="radio" name="estrellas" value="1"><!--
    --><label for="radio5">★</label>
                            </p>
                        </form>
                    </div>

                </div>
            </div>
        <?php } ?>
    </div>
<?php }

?>
    </div>