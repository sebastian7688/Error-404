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
                    <img class="position-absolute w-100 h-100" src="img/progress.jpg" style="object-fit: cover;">
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
                    <img class="position-absolute w-100 h-100" src="img/progress.jpg" style="object-fit: cover;">
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
                    <img class="position-absolute w-100 h-100" src="img/progress.jpg" style="object-fit: cover;">
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
                    <img class="img-fluid" src="img/principal.png" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3">Special Offer</h3>
                        <a href="" class="btn text-dark" style="background-color:rgb(3 158 207);">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="img/principal.png" alt="">
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
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="pr-3" style="border-left:5px solid #00BFFF; padding-left:5px;">Categorias</span></h2>
        <div class="row px-xl-5 pb-3"  style="margin-right:400px; ">
            <?php foreach ($categories as $categorie) { ?>
                <div class="ag-format-container">
                    <div class="ag-courses_box">
                        <div class="ag-courses_item">
                            <a class="ag-courses-item_link" href="index.php?id_cat=<?php echo $categorie['id_deporte'] ?>">
                                <div class="ag-courses-item_bg"></div>
                                <div>
                                    <h6 class="ag-courses-item_title"><?php echo $categorie['deporte'] ?></h6>
                                </div>
                                <div class="ag-courses-item_date-box">
                                    Productos disponibles:
                                    <span class="ag-courses-item_date">
                                        04.11.2022
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <!-- Categories End -->
    <!----inicio css categorias------->
    <style>
        .ag-format-container {
            width: 250px;
            margin-left:100px;
        }
        

        .ag-courses_box {
            display: flex;
            justify-content: center;
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            width:1000px;
            height: 180;
            padding: 30px 0;
        }

        .ag-courses_item {
            -ms-flex-preferred-size: calc(33.33333% - 30px);
            flex-basis: calc(33.33333% - 30px);

            

            overflow: hidden;

            border-radius: 28px;
        }

        .ag-courses-item_link {
            display: block;
            padding: 30px 20px;
            background-color: #3d464d;

            overflow: hidden;

            position: relative;
        }

        .ag-courses-item_link:hover,
        .ag-courses-item_link:hover .ag-courses-item_date {
            text-decoration: none;
            color: #FFF;
        }

        .ag-courses-item_link:hover .ag-courses-item_bg {
            -webkit-transform: scale(10);
            -ms-transform: scale(10);
            transform: scale(10);
        }

        .ag-courses-item_title {
            font-weight: bold;
            font-size: 20px;
            color: #FFF;

            z-index: 2;
            position: relative;
        }

        .ag-courses-item_date-box {
            font-size: 15px;
            color: #FFF;

            z-index: 2;
            position: relative;
        }

        .ag-courses-item_date {
            font-weight: bold;
            color: #00BFFF;

            -webkit-transition: color .5s ease;
            -o-transition: color .5s ease;
            transition: color .5s ease
        }

        .ag-courses-item_bg {
            height: 128px;
            width: 128px;
            background-color: #00BFFF;

            z-index: 1;
            position: absolute;
            top: -75px;
            right: -75px;

            border-radius: 50%;

            -webkit-transition: all .5s ease;
            -o-transition: all .5s ease;
            transition: all .5s ease;
        }

        .ag-courses_item:nth-child(2n) .ag-courses-item_bg {
            background-color: #00BFFF;
        }

        /*.ag-courses_item:nth-child(3n) .ag-courses-item_bg {
  background-color: #e44002;
}
.ag-courses_item:nth-child(4n) .ag-courses-item_bg {
  background-color: #952aff;
}
.ag-courses_item:nth-child(5n) .ag-courses-item_bg {
  background-color: #cd3e94;
}
.ag-courses_item:nth-child(6n) .ag-courses-item_bg {
  background-color: #4c49ea;
}*/

        @media only screen and (max-width: 979px) {
            .ag-courses_item {
                -ms-flex-preferred-size: calc(50% - 30px);
                flex-basis: calc(50% - 30px);
            }

            .ag-courses-item_title {
                font-size: 24px;
            }
        }

        @media only screen and (max-width: 767px) {
            .ag-format-container {
                width: 96%;
            }

        }

        @media only screen and (max-width: 639px) {
            .ag-courses_item {
                -ms-flex-preferred-size: 100%;
                flex-basis: 100%;
            }

            .ag-courses-item_title {
                min-height: 72px;
                line-height: 1;

                font-size: 50px;
            }

            .ag-courses-item_link {
                padding: 22px 40px;
            }

            .ag-courses-item_date-box {
                font-size: 16px;
            }
        }
    </style>
    <!----categories css fin----->

    <!-- Noticias Start -->
    <div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="pr-3" style="border-left:5px solid #00BFFF; padding-left:5px;">Noticias</span></h2>
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
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate">

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
                            <a href="news_read_more.php?id=<? echo $noticia['id']?>"class="btn btn-primary">Leer mas</a>
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
                    <img class="img-fluid" src="img/principal.png" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3">Special Offer</h3>
                        <a href="" class="btn text-dark" style="background-color:rgb(3 158 207); ">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="img/principal.png" alt="">
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
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="pr-3" style="border-left:5px solid #00BFFF; padding-left:5px;"> Productos en racha </span></h2>
        <a href="qwe.php"></a>
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
                                <a class="btn btn-outline-primary btn-square" style="border-radius:50px;"href="products_read_more.php?id=<?php echo $nuevos['id'] ?>" style="background-color:#ffffff"><i class="fa fa-search"></i></a>
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


                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>