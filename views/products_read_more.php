<link href="css/style.css" rel="stylesheet">
<script src="//assets.jumpseller.com/public/jquery-3.3.1.min.js"></script>
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php" class="link-info" style="text-decoration: none;">Inicio</a>
            </li>
            <li class="breadcrumb-item"><a href="shop.php" class="link-info" style="text-decoration: none;">Tienda</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page"><a style="text-decoration: none;">Producto</a>
            </li>
        </ol>
    </nav>
</div>
<?php foreach ($productos as $producto) { ?>
    <div class="container border-top">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-12">
                <br><br>
                <h3 class="page-header"><?php echo $producto['nombre_prod'] ?></h3>
            </div>
        </div>
        
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-6 mb-4">

                <div class="">
                    <div class="main-product-image space">
                        <div id="product-carousel" class="carousel slide">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <br>
                                    <?php
                                    if (file_exists('img/productos/' . $producto['id'] . '/principal.jpg')) { ?>
                                        <img id="first-image" alt="" class="img-fluid" style="width:90%; height:60%;" src="img/productos/<?php echo $producto['id']; ?>/principal.jpg">
                                    <?php
                                    } ?>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#product-carousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#product-carousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <!-- Thumb Images -->
                <!--<div class="col-sm-12 product-page-thumbs space mt-3">

                    <a class="thumbs" data-image="1" href="#"><img src="https://cdnx.jumpseller.com/bootstrap/image/429444/thumb/120/150?1614272621" alt="Wacom Bamboo Tablet" /></a>

                    <a class="thumbs" data-image="2" href="#"><img src="https://cdnx.jumpseller.com/bootstrap/image/1072447/thumb/120/150?1614272621" alt="Wacom Bamboo Tablet" /></a>

                    <a class="thumbs" data-image="3" href="#"><img src="https://cdnx.jumpseller.com/bootstrap/image/14896546/thumb/120/150?1614272621" alt="Wacom Bamboo Tablet" /></a>

                </div>-->

            </div>

            <div class="col-lg-6">
                <form class="form-horizontal" action="/cart/add/224300" method="post" enctype="multipart/form-data" name="buy">

                    <!-- Product Price  -->
                    <div class="form-group price_elem row">
                        <label class="col-sm-3 col-md-3 form-control-label nopaddingtop">Precio:</label>
                        <div class="col-sm-8 col-md-9">
                            <span class="product-form-price" id="product-form-price">$<?php echo $producto['precio'] ?></span>


                        </div>
                    </div>







                    <div class="form-group row">
                        <label for="Quantity" class="col-sm-3 col-md-3 form-control-label">Cantidad:</label>
                        <div class="col-sm-8 col-md-9">

                            <input type="number" class="qty form-control" id="input-qty" name="qty" maxlength="5" value="1">
                        </div>
                    </div>



                    <div class="form-group row ">
                        <label class="col-sm-3 col-md-3 form-control-label">Description:</label>
                        <div class="col-sm-8 col-md-9 description">
                            <p><?php echo $producto['texto'] ?></p>
                        </div>
                    </div>


                    <div class="form-group row ">
                        <label class="col-sm-3 col-md-3 form-control-label">Detalles:</label>
                        <div class="col-sm-9 col-md-9">

                            <p><?php echo $producto['descripcion'] ?></p>

                        </div>
                    </div>
                    <div class="form-group product-stock product-available row visible">
                        <label class="col-sm-3 col-md-3 form-control-label"></label>
                        <div class="col-sm-8 col-sm-offset-3 col-md-9 col-md-offset-3">
                            <input type="submit" class="btn text-dark" style="background-color:rgb(3 158 207);" value="Añadir al carro de la compra" />
                        </div>
                        <div class="col-sm-8 col-sm-offset-3 col-md-9 col-md-offset-3">
                            <input type="submit" class="btn text-dark" style="background-color:rgb(3 158 207);" value="Compra Ahora" />
                        </div>
                    </div>
                    <a class="btn btn-info text-light" href="editar_producto.php">Editar</a>
                    <a class="btn btn-success text-light">Descuento</a>
                    <a class="btn btn-danger text-light">Eliminar producto</a>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#product-carousel').carousel({
                interval: false
            });
            $('.thumbs').click(function(e) {
                e.preventDefault();
                $("#product-carousel").carousel(parseInt($(this).attr('data-image')) - 1);
            });
            $("#product-link").click(function() {
                $(this).select();
            });
        });
    </script>

<?php } ?>