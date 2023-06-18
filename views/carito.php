<link href="css/myproducts.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" href="css/shop.css">
<div class="border-top bg-light">

    <div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3 border-bottom border-info">
                Mi Carrito
            </span></h2>
        <div class="row px-xl-5">
            <?php foreach ($caritos as $micar) { ?>
                <div class="col-md-4">
                    <div class="card product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <?php
                            if (file_exists('img/productos/' . $micar['id'] . '/principal.jpg')) { ?>
                                <img class="card-img-top" width="100%" height="250rem" src="img/productos/<?php echo $micar['id']; ?>/principal.jpg">
                            <?php
                            } ?>

                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="products_read_more.php?id=<?php echo $micar['id'] ?>" style="background-color:rgb(3 158 207);" style="color:rgb(3 158 207);"><i class="fa fa-search"></i></a>
                            </div>
                        </div>

                        <div class="text-center py-4">
                            <a class="card-title text-decoration-none text-truncate" href="products_read_more.php?id=<?php echo $micar['id'] ?>">
                                <?php echo $micar['nombre_prod'] ?>
                            </a>

                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5>$
                                    <?php echo $micar['precio'] ?>
                                </h5>
                                </h6>
                            </div>
                            <div align="center">
                                <FONT COLOR="#15b83b">20% Descuento</FONT>
                            </div>
                        </div>
                            
                    </div>
                </div>
            <?php } ?>
        </div>
        
                            <a class="btn btn-success text-light">Conprar Carrito</a>
                            <a class="btn btn-danger text-light">Eliminar Carrito</a>
    </div>
</div>