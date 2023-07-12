<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" href="css/read_more.css">
<script src="//assets.jumpseller.com/public/jquery-3.3.1.min.js"></script>
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php" class="link-info" style="text-decoration: none;">Inicio</a>
            </li>
            <li class="breadcrumb-item"><a href="shop.php" class="link-info" style="text-decoration: none;">Tienda</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page"><a style="text-decoration: none;">Comentar</a>
            </li>
        </ol>
    </nav>
</div>
<?php foreach ($productos as $producto) {
    ?>
    <div class="container" style="box-shadow: 0px 0px 15px #aaa;">
        
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-6 mb-4" >
                <div class="" >
                        <div id="product-carousel" class="carousel slide">
                            <div class="main-product-image space" >
                                <div class="carousel-inner" role="listbox" >
                                    <div class="carousel-item active imagen">
                                        <br>
                                        <?php
                                        if (file_exists('img/productos/' . $producto['id'] . '/principal.jpg')) { ?>
                                            <img id="first-image" alt="" class="img-fluid" style="width:90%; height:60%;" 
                                            src="img/productos/<?php echo $producto['id']; ?>/principal.jpg" >
                                        <?php } ?>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#product-carousel" role="button" data-slide="prev" style="color: #aaa;">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                            <i class="fa-solid fa-chevron-left"></i>
                        </a>
                        <a class="carousel-control-next" href="#product-carousel" role="button" data-slide="next" style="color: #aaa;">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                            <i class="fa-solid fa-chevron-right"></i>
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

            <div class="col-lg-6" style="padding:3%;">
                <form class="form-horizontal" action="/cart/add/224300" method="post" enctype="multipart/form-data"
                    name="buy" style="border-bottom:1px solid #aaa; margin-bottom:15px;">

                    <!-- Product Price  -->
                    <div class="row">
                        <div class="col-12">
                            <h3 class="page-header">
                                <?php echo $producto['nombre_prod'] ?>
                            </h3>
                        </div>
                     </div>

                    <div class="form-group price_elem row">
                        <div class="col-sm-8 col-md-9">
                            <span class="product-form-price" id="product-form-price" style="font-size:250%; color: #000;;">$
                                <?php echo $producto['precio'] ?>
                            </span>
                        </div>
                    </div>

                    <div class="form-group row ">
                        <div class="col-sm-8 col-md-9 description">
                            <p>
                                <?php echo $producto['texto'] ?>
                            </p>
                        </div>
                    </div>

                    <form action="shopping_cart.php" method="get">
                        <div class="col-sm-8 col-sm-offset-3 col-md-9 col-md-offset-3">

                        </div>
                    </form>
                    <?php $name = $_GET['id'] ?>
                    <form action="shopping_cart.php" method="post">
                        <div class="form-group row">
                            <div class="col-sm-8 col-md-9">
                                <input type="number" class="qty form-control" name="cant" id="input-qty" name="qty"
                                    max="<?php echo $producto['cantidad'] ?>" min="1" placeholder="Cantidades" style="border-radius:5px;">
                            </div>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" />
                        <div style="display:flex;">
                            <input type="submit" class="btn" style="width:100%; background: #00BFFF; border: 1px solid #00BFFF; border-radius:5px 0px 0px 5px; color:#3D464D; color: #fff;" value="Compra Ahora" onMouseover="this.style.background='rgb(0 172 229)'" onMouseout="this.style.background='#00BFFF'">
                            <input type="submit" Class="btn" style="width:100%; background: #e1e1e1; border: 1px solid #e1e1e1; border-radius:0px 5px 5px 0px; color:#3D464D; color: #000;" value="Agregar al carito" onMouseover="this.style.background='#cdcccc'" onMouseout="this.style.background='#e1e1e1'">
                        </div>

                    </form>
                        <form class="form-horizontal" action="/cart/add/224300" method="post" enctype="multipart/form-data"
                    name="buy" style="border-top:1px solid #aaa; margin-top:15px; padding-top:3%;">
                    <a class="btn btn-info text-light" href="editar_producto.php" style="border-radius:5px;" title="Editar"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a class="btn btn-success text-light" style="border-radius:5px;" title="Descuento"><i class="fa-solid fa-percent"></i></a>
                    <a class="btn btn-danger text-light" style="border-radius:5px;" title="Borrar"><i class="fa-solid fa-trash"></i></a>
                    </form>
                </form>
            </div>
        </div>
        <div class="container" style="border-top:1px solid #aaa; border-bottom:1px solid #aaa; padding-top:2%;">
            <div class="form-group row ">
                <div class="col-sm-8 col-md-9 description">
                    <h3 class="page-header">Descripción</h3>                
                    <p>
                        <?php echo $producto['texto'] ?>
                    </p>
                </div>
            </div>                            
        </div>
        <div class="container">
            <div class="row comentarios justify-content-center">
                <div class="col-12">
                    <form action="" class="form_comentarios d-flex justify-content-end flex-wrap">
                        <textarea name="" id="" placeholder="Comentario"></textarea>                
                        <button class="btn" type="button" onMouseover="this.style.color='white'">Comentar</button>
                    </form>
                    <div class="media">
                        <img src="img/group/mike.jpg" width="64" height="64" alt="">
                        <div class="media-body">
                            <p class="nombre">Nombre</p>
                            <p class="comentario">Comentario</p>
                            <div class="botones text-right">
                                <a href="">Responder</a>
                                <a href="">Editar</a>
                                <a href="">Borrar</a>
                            </div>
                        </div>
                        
                    </div>
                    <div class="media">
                        <img src="img/group/seba.jpg" width="64" height="64" alt="">
                        <div class="media-body">
                            <p class="nombre">Nombre</p>
                            <p class="comentario">Comentario</p>
                            <div class="botones text-right">
                                <a href="">Responder</a>
                                <a href="">Editar</a>
                                <a href="">Borrar</a>
                            </div>
                            <div class="media">
                        <img src="img/group/eve.jpg" width="64" height="64" alt="">
                        <div class="media-body">
                            <p class="nombre">Nombre</p>
                            <p class="comentario">Comentario</p>
                            <div class="botones text-right">
                                <a href="">Responder</a>
                                <a href="">Editar</a>
                                <a href="">Borrar</a>
                            </div>
                        </div>
                    </div>
                        </div>
                    </div>
                    <div class="media">
                        <img src="img/group/eve.jpg" width="64" height="64" alt="">
                        <div class="media-body">
                            <p class="nombre">Nombre</p>
                            <p class="comentario">Comentario</p>
                            <div class="botones text-right">
                                <a href="">Responder</a>
                                <a href="">Editar</a>
                                <a href="">Borrar</a>
                            </div>
                        </div>
                    </div>
                </div>                                
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('#product-carousel').carousel({
                interval: false
            });
            $('.thumbs').click(function (e) {
                e.preventDefault();
                $("#product-carousel").carousel(parseInt($(this).attr('data-image')) - 1);
            });
            $("#product-link").click(function () {
                $(this).select();
            });
        });
    </script>
<?php } ?>


