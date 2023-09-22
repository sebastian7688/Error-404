<link href="css/style.css" rel="stylesheet">
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php" class="link-info" style="text-decoration: none;">Inicio</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page"><a class="link-dark" style="text-decoration: none;">Tienda</a></li>
        </ol>
    </nav>
    <link rel="stylesheet" href="css/shop.css">

</div>
<br>
<br>

<div style="margin-right:  40px">
    <div class="Body">
        <div class="rov">
            <div align="baseline">
                <h1 style="margin-left:120px">
                    TIENDA
                </h1>
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
                                    <?php foreach ($deportes as $deporte) { ?>
                                        <li>&nbsp;
                                            <a href="shop.php?pagina=1&&sport_id=<?php echo $deporte['id_deporte'] ?>">
                                                <label onMouseover="this.style.color='Deepskyblue'" onMouseout="this.style.color='black'">
                                                    <?php echo $deporte['deporte'] ?>
                                                </label>
                                            </a>
                                        </li>
                                    <?php } ?>
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
                                    <li>&nbsp;
                                        <a href="shop.php?pagina=1">
                                            <label onMouseover="this.style.color='Deepskyblue'" onMouseout="this.style.color='black'">
                                                Nuevo a viejo
                                            </label>
                                        </a>
                                    </li>
                                    <li>&nbsp;
                                        <a href="shop.php?pagina=1&&get=1">
                                            <label onMouseover="this.style.color='Deepskyblue'" onMouseout="this.style.color='black'">
                                                Viejo a nuevo
                                            </label>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </span>
                        <span class="multiselect-native-select">
                            <div class="btn-group"><button type="button" class="multiselect dropdown-toggle btn btn-sm btn-default" data-toggle="dropdown" title="None selected">
                                    <span class="multiselect-selected-text"><b>Precio:</b> Todos</span> <b class="caret"></b>
                                </button>
                                <ul class="multiselect-container dropdown-menu">
                                    <li>&nbsp;
                                        <a href="shop.php?pagina=1&&radi=1">
                                            <label onMouseover="this.style.color='Deepskyblue'" onMouseout="this.style.color='black'">
                                                Mayor a menor
                                            </label>
                                        </a>
                                    </li>
                                    <li>&nbsp;
                                        <a href="shop.php?pagina=1&&radi=2">
                                            <label onMouseover="this.style.color='Deepskyblue'" onMouseout="this.style.color='black'">
                                                Menor a mayor
                                            </label>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </span>

                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;
                        <a href="carito.php" style="margin-left:100px margin-above=100px" class="btn btn-info"></i> <i class="fa-solid fa-cart-shopping"></i> Mi carrito </a>&nbsp;&nbsp;
                        <?php
                        if (isset($_SESSION['usuario'])) {
                        ?>
                            <a href="myproducts.php" style="margin-left:100px margin-above=100px" class="btn btn-info"></i><i class="fa-solid fa-basket-shopping"></i> Mis productos </a>&nbsp;&nbsp;
                            <a href="add_product_shop.php" style="margin-left:100px margin-above=100px" class="btn btn-info"></i> Añadir Producto <i class="fa-solid fa-plus"></i></a>
                        <?php } ?>

                    </div>
                </form>
            </main>
        </div>
    </div>
    <form action="wewi_wawo.php" method="post">
        <div class="container">
            <style>
                body,
                html {
                    height: 100%;
                    width: 100%;
                    margin: 0;
                    padding: 0;
                    background: White !important;
                }

                .searchbar {
                    margin-bottom: auto;
                    margin-top: auto;
                    height: 60px;
                    background-color: #353b48;
                    border-radius: 30px;
                    padding: 10px;
                }

                .search_input {
                    color: white;
                    border: 0;
                    outline: 0;
                    background: none;
                    width: 0;
                    caret-color: transparent;
                    line-height: 40px;
                    transition: width 0.4s linear;
                }

                .searchbar:hover>.search_input {
                    bottom: -20px;
                    padding: 0 10px;
                    /*height: 100;*/
                    width: 200px;
                    caret-color: Deepskyblue;
                    transition: width 0.4s linear;
                }

                .searchbar:hover>.search_icon {
                    background: white;
                    color: Deepskyblue;
                }

                .search_icon {
                    height: 40px;
                    width: 40px;
                    float: right;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    border-radius: 50%;
                    color: white;
                    text-decoration: none;
                }
            </style>
            <div class="d-flex justify-content-center">
                <div class="searchbar">
                    <input class="search_input" type="text" name="busqueda" placeholder="Search...">
                    <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
                </div>
            </div>
        </div>
    </form>

    <!-- Products Start -->
    <div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4" id="titulo">
            <span class=" pr-3" style="border-left:5px solid #00BFFF; padding-left:5px;">Productos en racha</span>
        </h2>
        <div class="row px-xl-5">
            <?php foreach ($productos_nuevos as $nuevos) { ?>

                <div class="col-lg-3 col-md-4 col-sm-6 pb-5">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">

                            <?php
                            if (file_exists('img/productos/' . $nuevos['id'] . '/principal.jpg')) { ?>
                                <img class="card-img-top" src="img/productos/<?php echo $nuevos['id']; ?>/principal.jpg">
                            <?php
                            } ?>

                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="products_read_more.php?id=<?php echo $nuevos['id'] ?>" style="background-color:rgb(3 158 207);" style="color:rgb(3 158 207);"><i class="fa fa-search"></i></a>
                            </div>
                        </div>

                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="products_read_more.php?id=<?php echo $nuevos['id'] ?>">
                                <?php echo $nuevos['nombre_prod'] ?>

                                <div style="margin-left:200px">
                                    <i class="fa-solid fa-heart" style="color:red;"></i>
                            </a>
                        </div>
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
    <!-- PAGINADOR -->

    <?php if (isset($_GET['sport_id'])) { ?>
        <div class="container">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item <?php echo $_GET['pagina'] <= 1 ? 'disabled' : '' ?>"><a class="page-link" href="shop.php?pagina=<?php echo $_GET['pagina'] - 1; ?>&&sport_id=<?php echo $id ?>#titulo">Anterior</a></li>

                    <?php for ($i = 0; $i < $paginas; $i++) { ?>
                        <li class="page-item <?php echo $_GET['pagina'] == $i + 1 ? 'active' : '' ?>"><a class="page-link" href="shop.php?pagina=<?php echo $i + 1 ?>&&sport_id=<?php echo $id ?>#titulo"><?php echo $_GET['pagina'] ?></a></li>
                    <?php break;
                    } ?>

                    <li class="page-item <?php echo $_GET['pagina'] >= $paginas ? 'disabled' : '' ?>"><a class="page-link" href="shop.php?pagina=<?php echo $_GET['pagina'] + 1; ?>&&sport_id=<?php echo $id ?>#titulo">Siguiente</a></li>
                </ul>
            </nav>
        </div>
        <?php } else {
        if (isset($_GET['pagina']) && isset($_GET['get'])) {
        ?>
            <div class="container">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item <?php echo $_GET['pagina'] <= 1 ? 'disabled' : '' ?>"><a class="page-link" href="shop.php?pagina=<?php echo $_GET['pagina'] - 1; ?>&&get=1#titulo">Anterior</a></li>

                        <?php for ($i = 0; $i < $paginas; $i++) { ?>
                            <li class="page-item <?php echo $_GET['pagina'] == $i + 1 ? 'active' : '' ?>"><a class="page-link" href="shop.php?pagina=<?php echo $i + 1 ?>&&get=1#titulo"><?php echo $_GET['pagina'] ?></a></li>
                        <?php break;
                        } ?>

                        <li class="page-item <?php echo $_GET['pagina'] >= $paginas ? 'disabled' : '' ?>"><a class="page-link" href="shop.php?pagina=<?php echo $_GET['pagina'] + 1; ?>&&get=1#titulo">Siguiente</a></li>
                    </ul>
                </nav>
            </div>
        <?php } else { 
            if (isset($_GET['pagina']) && isset($_GET['radi'])) {
                if($_GET['radi'] == 1){
            ?>
            <div class="container">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item <?php echo $_GET['pagina'] <= 1 ? 'disabled' : '' ?>"><a class="page-link" href="shop.php?pagina=<?php echo $_GET['pagina'] - 1; ?>&&radi=1#titulo">Anterior</a></li>

                        <?php for ($i = 0; $i < $paginas; $i++) { ?>
                            <li class="page-item <?php echo $_GET['pagina'] == $i + 1 ? 'active' : '' ?>"><a class="page-link" href="shop.php?pagina=<?php echo $i + 1 ?>&&radi=1#titulo"><?php echo $_GET['pagina'] ?></a></li>
                        <?php break;
                        } ?>

                        <li class="page-item <?php echo $_GET['pagina'] >= $paginas ? 'disabled' : '' ?>"><a class="page-link" href="shop.php?pagina=<?php echo $_GET['pagina'] + 1; ?>&&radi=1#titulo">Siguiente</a></li>
                    </ul>
                </nav>
            </div>
    <?php }
    if($_GET['radi'] == 2){
?>
<div class="container">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item <?php echo $_GET['pagina'] <= 1 ? 'disabled' : '' ?>"><a class="page-link" href="shop.php?pagina=<?php echo $_GET['pagina'] - 1; ?>&&radi=2#titulo">Anterior</a></li>

                        <?php for ($i = 0; $i < $paginas; $i++) { ?>
                            <li class="page-item <?php echo $_GET['pagina'] == $i + 1 ? 'active' : '' ?>"><a class="page-link" href="shop.php?pagina=<?php echo $i + 1 ?>&&radi=2#titulo"><?php echo $_GET['pagina'] ?></a></li>
                        <?php break;
                        } ?>

                        <li class="page-item <?php echo $_GET['pagina'] >= $paginas ? 'disabled' : '' ?>"><a class="page-link" href="shop.php?pagina=<?php echo $_GET['pagina'] + 1; ?>&&radi=2#titulo">Siguiente</a></li>
                    </ul>
                </nav>
            </div>
        <?php
    }}else{?>
<div class="container">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item <?php echo $_GET['pagina'] <= 1 ? 'disabled' : '' ?>"><a class="page-link" href="shop.php?pagina=<?php echo $_GET['pagina'] - 1; ?>#titulo">Anterior</a></li>

                        <?php for ($i = 0; $i < $paginas; $i++) { ?>
                            <li class="page-item <?php echo $_GET['pagina'] == $i + 1 ? 'active' : '' ?>"><a class="page-link" href="shop.php?pagina=<?php echo $i + 1 ?>#titulo"><?php echo $_GET['pagina'] ?></a></li>
                        <?php break;
                        } ?>

                        <li class="page-item <?php echo $_GET['pagina'] >= $paginas ? 'disabled' : '' ?>"><a class="page-link" href="shop.php?pagina=<?php echo $_GET['pagina'] + 1; ?>#titulo">Siguiente</a></li>
                    </ul>
                </nav>
            </div>
    <?php }
            
        }
    } ?>
</div>



<!-- Offer Start -->
<div class="container-fluid pt-3 pb-3">
    <div align="center">
        <h1>OFERTAS</h1>
    </div>
    <br>
    <br>
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
<!-- Offer End -->