<!-- Carousel Start -->
<link href="css/style.css" rel="stylesheet">
<div style="margin-right: 0px">
    <div class="container-fluid p-0 mb-1 pb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="min-height: 80vh;">
                    <img class="position-absolute w-100 h-100" src="img/home/caru-1.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">Spa & Beauty Center</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">Massage Treatment</h3>
                            <p class="mx-md-5 px-5">Lorem rebum magna dolore amet lorem eirmod magna erat diam stet. Sadips
                                duo stet amet amet ndiam elitr ipsum labore diam</p>
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Make Appointment</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="min-height: 80vh;">
                    <img class="position-absolute w-100 h-100" src="img/home/caru-2.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">Spa & Beauty Center</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">Facial Treatment</h3>
                            <p class="mx-md-5 px-5">Lorem rebum magna dolore amet lorem eirmod magna erat diam stet. Sadips
                                duo stet amet amet ndiam elitr ipsum labore diam</p>
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Make Appointment</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="min-height: 80vh;">
                    <img class="position-absolute w-100 h-100" src="img/home/caru-3.png" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">Spa & Beauty Center</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">Cellulite Treatment</h3>
                            <p class="mx-md-5 px-5">Lorem rebum magna dolore amet lorem eirmod magna erat diam stet. Sadips
                                duo stet amet amet ndiam elitr ipsum labore diam</p>
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Make Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->
    <div class="container-fluid pt-5 pb-3">
        <div class="row px-xl-5">
            <div class="col-md-6">
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="img/home/sopo-1.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3">Special Offer</h3>
                        <a href="" class="btn text-dark" style="background-color:rgb(3 158 207);">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="img/home/sopo-2.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3">Special Offer</h3>
                        <a href="" class="btn text-dark" style="background-color:rgb(3 158 207);">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories Start -->

    <div class="container-fluid pt-5">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Categorias</span></h2>
            <div class="row px-xl-5 pb-3">
            <?php foreach ($categories as $categorie) { ?>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <a class="text-decoration-none" href="index.php?id_cat=<?php echo $categorie['id_deporte']?>">
                        <div class="cat-item d-flex align-items-center mb-4">
                            <div class="overflow-hidden" style="width: 100px; height: 100px;">
                             <?php if (file_exists('img/categorias/' . $categorie['id_deporte'] . '.png')) { ?>
                                <img class="img-fluid" src="img/categorias/<?php echo $categorie['id_deporte']; ?>.png">
                            <?php }?>
                            </div>
                            <div class="flex-fill pl-3">
                                <h6><?php echo $categorie['deporte'] ?></h6>
                                <small class="text-body"> Más de 100 productos. </small>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
            </div>
    </div>
    <!-- Categories End -->


    <!-- Noticias Start -->
    <div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Noticias
                :3</span></h2>
        <div class="row px-xl-5">
            <?php

            foreach ($noticias as $noticia) { ?>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <?php if (file_exists('img/noticias/' . $noticia['id'] . '/principal.jpg')) { ?>
                                <img class="card-img-top" width="600" height="200" src="img/noticias/<?php echo $noticia['id']; ?>/principal.jpg">
                            <?php
                            } ?>
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="" style="background-color:rgb(3 158 207);" style="color:rgb(3 158 207);"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="">

                                <h5 align="center">
                                    <?php echo limitar_cadena($noticia['titulo'], 25, " ..."); ?>
                                </h5>
                            </a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <p class="card-text">
                                    <?php echo limitar_cadena($noticia['descripcion'], 25, " ...");
                                    $i = 0; ?>.
                                </p>
                            </div>
                            <br>
                            <a href="#" class="btn btn-primary">Leer mas</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <!-- Noticias End -->


    <!-- Offer Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="row px-xl-5">
            <div class="col-md-6">
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="img/home/sopo-1.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3">Special Offer</h3>
                        <a href="" class="btn text-dark" style="background-color:rgb(3 158 207);">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="img/home/sopo-2.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3">Special Offer</h3>
                        <a href="" class="btn text-dark" style="background-color:rgb(3 158 207);">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->
</div>
<div style="margin-right:  100px">
    <div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">
                Productos
                en racha. </span></h2>
        <div class="row px-xl-5">
            <?php foreach ($productos_nuevos as $nuevos) {
                $i = $i + 1;
            ?>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">


                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">

                            <?php
                            if (file_exists('img/productos/' . $nuevos['id'] . '/principal.jpg')) { ?>
                                <img class="card-img-top" width="900" height="200" src="img/productos/<?php echo $nuevos['id']; ?>/principal.jpg">
                            <?php
                            } ?>

                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="products_read_more.php?id=<?php echo $nuevos['id'] ?>" style="background-color:rgb(3 158 207);" style="color:rgb(3 158 207);"><i class="fa fa-search"></i></a>
                            </div>
                        </div>

                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="products_read_more.php?id=<?php echo $nuevos['id'] ?>">
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
                        <br>

                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>