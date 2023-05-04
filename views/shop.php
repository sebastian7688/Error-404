<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php" class="link-info" style="text-decoration: none;">Inicio</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a class="link-dark" style="text-decoration: none;">Tienda</a></li>
        </ol>
    </nav>
</div>
<br>
<div class="Body">
    <div class="Container">
        <div align="center">
            <h1>TIENDA</h1>
        </div>
        <main class="Main" style=" margin: 50px">
            <form action="/browse" method="get" style=" margin: 60px">
                <div class="filters" style="margin-bottom: 20px;">
                    <span class="multiselect-native-select">
                        <div class="btn-group">
                            <button type="button" class="multiselect dropdown-toggle btn btn-sm btn-default" data-toggle="dropdown" title="None selected">
                                <span class="multiselect-selected-text">
                                    <b>Deportes:</b> Todos
                                </span>
                                <b class="caret"></b>
                            </button>
                            <ul class="multiselect-container genres-select dropdown-menu">
                                <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="voley">Voley</label></a></li>
                                <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="artes-marciales">Artes Marciales</label></a></li>
                                <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="tenis">Tenis</label></a></li>
                                <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="ciclismo">Ciclismo</label></a></li>
                                <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="futbol">Futbol</label></a></li>
                                <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="basket">Basket</label></a></li>
                                <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="rugby">Rugby</label></a></li>
                                <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="boxeo">Boxeo</label></a></li>
                                <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="golf">Golf</label></a></li>
                                <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="natacion">Natacion</label></a></li>
                                <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="surf">Surf</label></a></li>
                                <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="pink ponk">Pink Ponk</label></a></li>
                                <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="handbal">Handbal</label></a></li>

                            </ul>
                        </div>
                    </span>
                    <span class="multiselect-native-select">
                        <div class="btn-group">
                            <button type="button" class="multiselect dropdown-toggle btn btn-sm btn-default" data-toggle="dropdown" title="None selected">
                                <span class="multiselect-selected-text">
                                    <b>Año:</b> Todos
                                </span>
                                <b class="caret"></b>
                            </button>
                            <ul class="multiselect-container year-select dropdown-menu">
                                <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="mas nuevo">Mas nuevo</label></a></li>
                                <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="mas viejo">Mas viejo</label></a></li>
                            </ul>
                        </div>
                    </span>
                    <span class="multiselect-native-select">
                        <div class="btn-group"><button type="button" class="multiselect dropdown-toggle btn btn-sm btn-default" data-toggle="dropdown" title="None selected">
                                <span class="multiselect-selected-text"><b>Precio:</b> Todos</span> <b class="caret"></b>
                            </button>
                            <ul class="multiselect-container dropdown-menu">
                                <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="mayor precio">Mayor precio</label></a>
                                </li>
                                <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="menor precio">Menor precio</label></a>
                                </li>
                            </ul>
                        </div>
                    </span>
                    <button type="submit" class="btn btn-sm btn-info">
                        <span class="fa fa-filter" aria-hidden="true"></span> Filtrar
                    </button>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="misproductos"style="margin-left:100px margin-above:100px" class="btn btn-info"></i> Mis productos</a>&nbsp;&nbsp;
                    <a href="micarrito"style="margin-left:100px margin-above:100px" class="btn btn-info"></i> Mi carrito</a>
                </div>
            </form>
        </main>
    </div>
</div>
<!-- Products Start -->
<div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Productos en Racha</span></h2>
    <div class="row px-xl-5">
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/home/noti-1.jpg" alt="">
                    <div class="product-action">
                        <a class="btn btn-outline-dark btn-square" href="" style="background-color:rgb(3 158 207);" style="color:rgb(3 158 207);"><i class="fa fa-search"></i></a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">Nombre de producto</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>Precio</h5>
                        </h6>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/home/noti-2.jpg" alt="">
                    <div class="product-action">

                        <a class="btn btn-outline-dark btn-square" href="" style="background-color:rgb(3 158 207);" style="color:rgb(3 158 207);"><i class="fa fa-search"></i></a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">Nombre de producto</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>Precio</h5>
                        </h6>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/home/noti-3.jpg" alt="">
                    <div class="product-action">
                        <a class="btn btn-outline-dark btn-square" href="" style="background-color:rgb(3 158 207);" style="color:rgb(3 158 207);"><i class="fa fa-search"></i></a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">Nombre de producto</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>Precio</h5>
                        </h6>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/home/noti-4.jpg" alt="">
                    <div class="product-action">
                        <a class="btn btn-outline-dark btn-square" href="" style="background-color:rgb(3 158 207);" style="color:rgb(3 158 207);"><i class="fa fa-search"></i></a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">Nombre de producto</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>Precio</h5>
                        </h6>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/home/noti-11.jpg" alt="">
                    <div class="product-action">
                        <a class="btn btn-outline-dark btn-square" href="" style="background-color:rgb(3 158 207);" style="color:rgb(3 158 207);"><i class="fa fa-search"></i></a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">Nombre de producto</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>Precio</h5>
                        </h6>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/home/noti-6.jpg" alt="">
                    <div class="product-action">
                        <a class="btn btn-outline-dark btn-square" href="" style="background-color:rgb(3 158 207);" style="color:rgb(3 158 207);"><i class="fa fa-search"></i></a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">Nombre de producto</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>Precio</h5>
                        </h6>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/home/noti-7.jpg" alt="">
                    <div class="product-action">
                        <a class="btn btn-outline-dark btn-square" href="" style="background-color:rgb(3 158 207);" style="color:rgb(3 158 207);"><i class="fa fa-search"></i></a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">Nombre de producto</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>Precio</h5>
                        </h6>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/home/noti-8.jpg" alt="">
                    <div class="product-action">
                        <a class="btn btn-outline-dark btn-square" href="" style="background-color:rgb(3 158 207);" style="color:rgb(3 158 207);"><i class="fa fa-search"></i></a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">Nombre de producto</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>Precio</h5>
                        </h6>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Products End -->



<!-- Offer Start -->
<div class="container-fluid pt-5 pb-3">
<div align="center">    
<h1>OFERTAS</h1>
</div>
<br>
<br>
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