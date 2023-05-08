<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php" class="link-info" style="text-decoration: none;">Inicio</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page"><a class="link-dark"
                    style="text-decoration: none;">Tienda</a></li>
        </ol>
    </nav>
</div>
<br>
<br>
<div class="Body">
    <div class="rov">
        <div align="baseline">
            <h1 align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TIENDA</h1>
        </div>
        <main class="Main" style=" margin: 50px">
            <form action="/browse" method="get" style=" margin: 60px">
                <div class="filters" style="margin-bottom: 20px;">
                    <span class="multiselect-native-select">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                        <div class="btn-group">
                            <button type="button" class="multiselect dropdown-toggle btn btn-sm btn-default"
                                data-toggle="dropdown" title="None selected">
                                <span class="multiselect-selected-text">
                                    <b>Deportes:</b> Todos
                                </span>
                                <b class="caret"></b>
                            </button>
                            <ul class="multiselect-container genres-select dropdown-menu">
                                <li> &nbsp;<a tabindex="0"><label class="checkbox"><input type="checkbox" value="voley">
                                            &nbsp;Voley</label></a></li>
                                <li>&nbsp;<a tabindex="0"><label class="checkbox"><input type="checkbox"
                                                value="artes-marciales"> &nbsp;Artes Marciales</label></a></li>
                                <li>&nbsp;<a tabindex="0"><label class="checkbox"><input type="checkbox"
                                                value="tenis">&nbsp;Tenis</label></a></li>
                                <li>&nbsp;<a tabindex="0"><label class="checkbox"><input type="checkbox"
                                                value="ciclismo">&nbsp;Ciclismo</label></a></li>
                                <li>&nbsp;<a tabindex="0"><label class="checkbox"><input type="checkbox"
                                                value="futbol">&nbsp;Futbol</label></a></li>
                                <li>&nbsp;<a tabindex="0"><label class="checkbox"><input type="checkbox"
                                                value="basket">&nbsp;Basket</label></a></li>
                                <li>&nbsp;<a tabindex="0"><label class="checkbox"><input type="checkbox"
                                                value="rugby">&nbsp;Rugby</label></a></li>
                                <li>&nbsp;<a tabindex="0"><label class="checkbox"><input type="checkbox"
                                                value="boxeo">&nbsp;Boxeo</label></a></li>
                                <li>&nbsp;<a tabindex="0"><label class="checkbox"><input type="checkbox"
                                                value="golf">&nbsp;Golf</label></a></li>
                                <li>&nbsp;<a tabindex="0"><label class="checkbox"><input type="checkbox"
                                                value="natacion">&nbsp;Natacion</label></a></li>
                                <li>&nbsp;<a tabindex="0"><label class="checkbox"><input type="checkbox"
                                                value="surf">&nbsp;Surf</label></a></li>
                                <li>&nbsp;<a tabindex="0"><label class="checkbox"><input type="checkbox"
                                                value="pink ponk">&nbsp;Pink Ponk</label></a></li>
                                <li>&nbsp;<a tabindex="0"><label class="checkbox"><input type="checkbox"
                                                value="handbal">&nbsp;Handbal</label></a></li>

                            </ul>
                        </div>
                    </span>
                    <span class="multiselect-native-select">
                        <div class="btn-group">
                            <button type="button" class="multiselect dropdown-toggle btn btn-sm btn-default"
                                data-toggle="dropdown" title="None selected">
                                <span class="multiselect-selected-text">
                                    <b>Año:</b> Todos
                                </span>
                                <b class="caret"></b>
                            </button>
                            <ul class="multiselect-container year-select dropdown-menu">
                                <li>&nbsp;<a tabindex="0"><label class="checkbox"><input type="checkbox" name="xd"
                                                value="mas nuevo"> Nuevo a viejo </label></a></li>
                                <li>&nbsp;<a tabindex="0"><label class="checkbox"><input type="checkbox" name="xd"
                                                value="mas viejo"> Viejo a nuevo </label></a></li>
                            </ul>
                        </div>
                    </span>
                    <span class="multiselect-native-select">
                        <div class="btn-group"><button type="button"
                                class="multiselect dropdown-toggle btn btn-sm btn-default" data-toggle="dropdown"
                                title="None selected">
                                <span class="multiselect-selected-text"><b>Precio:</b> Todos</span> <b
                                    class="caret"></b>
                            </button>
                            <ul class="multiselect-container dropdown-menu">
                                <li>&nbsp;<a tabindex="0"><label class="checkbox"><input type="checkbox"
                                                value="mayor precio"> Mayor a menor </label></a>
                                </li>
                                <li>&nbsp;<a tabindex="0"><label class="checkbox"><input type="checkbox"
                                                value="menor precio"> Menor a mayor </label></a>
                                </li>
                            </ul>
                        </div>
                    </span>
                    <button type="submit" class="btn btn-sm btn-info">
                        <span class="fa fa-filter" aria-hidden="true"></span> Filtrar.
                    </button>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="misproductos" style="margin-left:100px margin-above:100px" class="btn btn-info"></i><i
                            class="fa-solid fa-basket-shopping"></i> Mis productos </a>&nbsp;&nbsp;
                    <a href="micarrito" style="margin-left:100px margin-above:100px" class="btn btn-info"></i> <i
                            class="fa-solid fa-cart-shopping"></i> Mi carrito </a>&nbsp;&nbsp;
                    <?php
                    if (isset($_SESSION['usuario'])) {
                        ?>
                        <a href="add_product_shop.php" style="margin-left:100px margin-above:100px"
                            class="btn btn-info"></i> Añadir Producto <i class="fa-solid fa-plus"></i></a>
                    <?php } ?>

                </div>
            </form>
        </main>
    </div>
</div>
<!-- Products Start -->
<div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3"> Productos
            en racha. </span></h2>
    <div class="row px-xl-5">
        <?php foreach ($productos_nuevos as $nuevos) { ?>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">

                        <?php
                        if (file_exists('img/productos/' . $nuevos['id'] . '/principal.jpg')) { ?>
                            <img class="card-img-top" height="200rem"
                                src="img/productos/<?php echo $nuevos['id']; ?>/principal.jpg">
                            <?php
                        } ?>

                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square" href="" style="background-color:rgb(3 158 207);"
                                style="color:rgb(3 158 207);"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="">
                            <?php echo $nuevos['nombre_prod'] ?>
                        </a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>$
                                <?php echo $nuevos['precio'] ?>
                            </h5>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
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