<link href="css/noticias.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">


<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php" class="link-info" style="text-decoration: none;">Inicio</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page"><a style="text-decoration: none;">Noticias</a>
            </li>
        </ol>
    </nav>
</div>
<br>

<h1 align="center">Noticias </h1>
<br>
<?php
if (isset($_SESSION['usuario'])) {
    if ($_SESSION['usuario']['rol'] > 1) {
        ?>
        <div align="center">
            <button class="btn btn-primary me-md-2" type="button"><a href="add_notices.php" a>Agrega tus noticas</button>
            <button class="btn btn-primary" type="button"><a href="noticias.php" a>Mira tus noticias</button>
        </div>
        <br>
        <br>
    <?php }
} ?>
<!-- Carousel Start -->

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
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown"
                                style="letter-spacing: 3px;">Spa & Beauty Center</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">Noticias del dia</h3>
                            <p class="mx-md-5 px-5">La mejor forma de empezar tu dia es con un buen cafecito :3</p>
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp"
                                href="#">Noticias positivas</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="min-height: 80vh;">
                    <img class="position-absolute w-100 h-100" src="img/home/caru-2.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown"
                                style="letter-spacing: 3px;">Spa & Beauty Center</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">Noticias noticiosas</h3>
                            <p class="mx-md-5 px-5">¿Ques mejor el helado de chocolate o el de chocolate marroc?</p>
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp"
                                href="#">clikea para averiguarlo</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="min-height: 80vh;">
                    <img class="position-absolute w-100 h-100" src="img/home/caru-3.png" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown"
                                style="letter-spacing: 3px;">Spa & Beauty Center</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">Noticas debatientes</h3>
                            <p class="mx-md-5 px-5">¿Quien es mejor Maradora o Messi?</p>
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp"
                                href="#">clikea para averiguarlo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->
    <br>
    <br>
    <div style="margin-right: 20px">
    <!---start cards1-->
    <div class="row g-1">
        <div class="col-md-9">
            <div class="container-fluid pt-5 pb-3">
                <h2 style="margin-left: 50px; margin-top: -38px">Noticias destacadas
                </h2>
                <div class="row px-xl-5">
                    <div class="col-lg-12 col-md-6 col-sm-6 pb-36">
                        <div class="product-item bg-light mb-4">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/home/noti-6.jpg" alt="">
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" href="news_read_more.php">
                                    <h5>NOTICIA</h5>
                                </a>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the
                                        bulk of the card's content.</p>
                                </div>
                                <br>
                                <a href="news_read_more.php" class="btn btn-info" style="color: white">Leer mas ></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <!-----End card1---->

            <!---Start cards2-->
            <div class="container-fluid pt-1 pb-9" style="margin-left: -50px;">
                <h2 style="margin-left: 50px;">Noticias :333</h2>
                <br>
                <div style="margin-left: 60px;" class="row px-xl-5">
                    <div class="col-lg-5 col-md-4 col-sm-6 pb-1">
                        <div class="product-item bg-light mb-4">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/home/noti-6.jpg" alt="">
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" href="news_read_more.php">
                                    <h5>NOTICIA</h5>
                                </a>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the
                                        bulk of the card's content.</p>
                                </div>
                                <br>
                                <a href="news_read_more.php" class="btn btn-info" style="color: white">Leer mas ></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-4 col-sm-6 pb-1">
                        <div class="product-item bg-light mb-4">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/home/noti-8.jpg" alt="">
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" href="news_read_more.php">
                                    <h5>NOTICIA</h5>
                                </a>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the
                                        bulk of the card's content.</p>
                                </div>
                                <br>
                                <a href="news_read_more.php" class="btn btn-info" style="color: white">Leer mas ></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="margin-left: 60px;" class="row px-xl-5">
                    <div class="col-lg-5 col-md-4 col-sm-6 pb-1">
                        <div class="product-item bg-light mb-4">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/home/noti-6.jpg" alt="">
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" href="news_read_more.php">
                                    <h5>NOTICIA</h5>
                                </a>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the
                                        bulk of the card's content.</p>
                                </div>
                                <br>
                                <a href="news_read_more.php" class="btn btn-info" style="color: white">Leer mas ></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-4 col-sm-6 pb-1">
                        <div class="product-item bg-light mb-4">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/home/noti-8.jpg" alt="">
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" href="news_read_more.php">
                                    <h5>NoOTICIA</h5>
                                </a>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the
                                        bulk of the card's content.</p>
                                </div>
                                <br>
                                <a href="news_read_more.php" class="btn btn-info" style="color: white">Leer mas ></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!---End cards2-->
            <br>
            <br>
            <br>
            <!---Start cards3-->
            <div class="container-fluid pt-5 pb-3">
                <h2 style="margin-left: 50px;">Noticias :3</h2>
                <div class="row px-xl-5">
                    <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                        <div class="product-item bg-light mb-4">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/home/noti-6.jpg" alt="">
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" href="news_read_more.php">
                                    <h5>NOTICIA</h5>
                                </a>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the
                                        bulk of the card's content.</p>
                                </div>
                                <br>
                                <a href="news_read_more.php" class="btn btn-info" style="color: white">Leer mas ></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                        <div class="product-item bg-light mb-4">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/home/noti-8.jpg" alt="">
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" href="news_read_more.php">
                                    <h5>NOTICIA</h5>
                                </a>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the
                                        bulk of the card's content.</p>
                                </div>
                                <br>
                                <a href="news_read_more.php" class="btn btn-info" style="color: white">Leer mas ></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                        <div class="product-item bg-light mb-4">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/home/noti-6.jpg" alt="">
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" href="news_read_more.php">
                                    <h5>NOTICIA</h5>
                                </a>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the
                                        bulk of the card's content.</p>
                                </div>
                                <br>
                                <a href="news_read_more.php" class="btn btn-info" style="color: white">Leer mas ></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                        <div class="product-item bg-light mb-4">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/home/noti-8.jpg" alt="">
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" href="news_read_more.php">
                                    <h5>NOTICIA</h5>
                                </a>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the
                                        bulk of the card's content.</p>
                                </div>
                                <br>
                                <a href="news_read_more.php" class="btn btn-info" style="color: white">Leer mas ></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!---End cards3-->
                <br>

            </div>
        </div>
        <aside class="sidebar" id="sidebar-1" style="background-color: lightgray; padding: 15px;"
            title="Información adicional">
            <h3>Artículos relacionados</h3>
            <ul>
                <li><a href="#">Artículo 1</a></li>
                <li><a href="#">Artículo 2</a></li>
                <li><a href="#">Artículo 3</a></li>
            </ul>
            <img style="height: 190px;" src="img/home/noti-8.jpg" alt="">
            <br><br>
            <h3>Artículos relacionados</h3>
            <ul>
                <li><a href="#">Artículo 1</a></li>
                <li><a href="#">Artículo 2</a></li>
                <li><a href="#">Artículo 3</a></li>
            </ul>
            <img style="height: 190px;" src="img/home/noti-1.jpg" alt="">
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <h3>Artículos relacionados</h3>
            <ul>
                <li><a href="#">Artículo 1</a></li>
                <li><a href="#">Artículo 2</a></li>
                <li><a href="#">Artículo 3</a></li>
            </ul>
            <img style="height: 190px;" src="img/home/noti-1.jpg" alt="">
            <br><br><br><br><br>
            <h3>Artículos relacionados</h3>
            <ul>
                <li><a href="#">Artículo 1</a></li>
                <li><a href="#">Artículo 2</a></li>
                <li><a href="#">Artículo 3</a></li>
            </ul>
            <img style="height: 190px;" src="img/home/noti-8.jpg" alt="">
            <br><br><br><br><br><br><br><br><br><br><br><br><br>
            <h3>Artículos relacionados</h3>
            <ul>
                <li><a href="#">Artículo 1</a></li>
                <li><a href="#">Artículo 2</a></li>
                <li><a href="#">Artículo 3</a></li>
            </ul>
            <img style="height: 190px;" src="img/home/noti-8.jpg" alt="">
            <br><br><br><br><br><br><br>
            <h3>Artículos relacionados</h3>
            <ul>
                <li><a href="#">Artículo 1</a></li>
                <li><a href="#">Artículo 2</a></li>
                <li><a href="#">Artículo 3</a></li>
            </ul>
            <img style="height: 190px;" src="img/home/noti-8.jpg" alt="">
        </aside>

    </div>

</div>

<!-- Startsilde
    <br>
    <div class="col-md-3">
        <div class="container">
            <div class="col-md-4">
            <div class="col-lg-2 col-md-2 col-sm-9 pb-8">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/home/noti-1.jpg" alt="">
                        </div>
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/home/noti-1.jpg" alt="">
                        </div>
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/home/noti-1.jpg" alt="">
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="">
                                <h5>NOTICIA</h5>
                            </a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.<br>yyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy<br>vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv<br>fffffffffffffffffffffffffffffffffff<br>ccccccccccccccccccccccccccccccc<br>cccccccccccccccccccccccccccccccccc<br>cccccccccccccccccccccccccccccccccccccccccccv<br>fffffffffffffffffffffffffffff<br>dddddddddddddddefreertyhtghtddddddddddddddddd<br></p>
                            </div>
                            <br>
                            <a href="#" class="btn btn-info" style="color: white">Leer mas ></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

 --slider End--->



<!-- Carousel infinito start 
  <div class="slider">
    <link rel="stylesheet" href="css/noticias.css">
    <div class="slide-track">
        <div class="slide">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250" alt="" />
        </div>
        <div class="slide">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250" alt="" />
        </div>
        <div class="slide">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250" alt="" />
        </div>
        <div class="slide">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250" alt="" />
        </div>
        <div class="slide">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250" alt="" />
        </div>
        <div class="slide">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250" alt="" />
        </div>
        <div class="slide">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250" alt="" />
        </div>
        <div class="slide">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250" alt="" />
        </div>
        <div class="slide">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250" alt="" />
        </div>
        <div class="slide">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250" alt="" />
        </div>
        <div class="slide">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250" alt="" />
        </div>
        <div class="slide">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250" alt="" />
        </div>
        <div class="slide">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250" alt="" />
        </div>
        <div class="slide">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250" alt="" />
        </div>
    </div>
 </div>
 -carusel infinito fin-->
<br>
<!-- PAGINADOR -->
<div class="container">
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item">

                <a class="page-link" href="">
                    <FONT color="#17a2b8">Anterior</FONT>
                </a>
            </li>
            <li class="page-item "><a class="page-link" href="">
                    <FONT color="#17a2b8">1</FONT>
                </a></li>


            <li class="page-item"><a class="page-link" href=" ">
                    <FONT color="#17a2b8">Siguiente</FONT>
                </a></li>
        </ul>
    </nav>
</div>

<!-- TERMINA EL PAGINADOR -->