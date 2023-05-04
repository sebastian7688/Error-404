<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Always Sporting</title>
    <link rel="icon" href="../img/icon.png">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <link href="img/favicon.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>


<!-- Topbar Start -->
<div class="container-fluid">
    <div class="row  py-3 px-xl-5 d-none d-lg-flex">
        <div class="col-lg-10">
            <a href="index.php" class="text-decoration-none">
                <span class="h1   bg-dark px-2" style="color:rgb(3, 130, 170);">Always</span>
                <span class="h1  text-dark  px-2 ml-n1" style="background-color:rgb(3, 130, 170);">SPORTING</span>
            </a>
        </div>
        <br>
        
    </div>
</div>
<div class="col-lg-4  text-left" >
            <form action=""style='text-align:right'>
                <div class="input-group">
                    <input type="text" algin="text-left" class="form-control" placeholder="Buscar Productos">
                    <div class="input-group-append">
                        <span class="input-group-text bg-transparent text-primary">
                            <i class="fa fa-search" style="color:rgb(3, 130, 170);"></i>
                        </span>
                    </div>
                </div>
            </form>
        </div>
        <br>
<!-- Topbar End -->


<!-- Navbar Start -->
<div class="container-fluid bg-dark mb-30 ">
    <div class="row xl-2">
        <div class="col-lg-3 ">
            <a class="btn d-flex  justify-content-between  " style="background-color:rgb(3, 130, 170);" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px; " style="background-color:rgb(3, 130, 170);">
                <h6 class="text-dark md-10"><i class="fa fa-bars mr-2"></i>Categories</h6>
                <i class="fa fa-angle-down text-dark"></i>
            </a>
            <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                <div class="navbar-nav w-100">
                    <a href="" class="nav-item nav-link">Futbol</a>
                    <a href="" class="nav-item nav-link">Voley</a>
                    <a href="" class="nav-item nav-link">Basquet</a>
                    <a href="" class="nav-item nav-link">Rugby</a>
                    <a href="" class="nav-item nav-link">Boxeo</a>
                    <a href="" class="nav-item nav-link">Golf</a>
                    <a href="" class="nav-item nav-link">Natacion</a>
                    <a href="" class="nav-item nav-link">Tenis</a>
                    <a href="" class="nav-item nav-link">Surf</a>
                </div>
            </nav>
        </div>
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                <a href="" class="text-decoration-none d-block d-lg-none">
                    <span class="h1   bg-dark px-2" style="color:rgb(3, 130, 170);">ALWAYS</span>
                    <span class="h1  text-dark  px-2 ml-n1" style="background-color:rgb(3, 130, 170);">SPORTING</span>

                </a>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="index.php" class="nav-item nav-link text-white">Casa</a>
                        <a href="shop.php" class="nav-item nav-link text-white">Tienda</a>
                        <a href="add_notices.php" class="nav-item nav-link text-white">Noticias</a>
                        <a href="about_us.php" class="nav-item nav-link text-white">Otros</a>
                    </div>

                </div>

                <?php
                if (isset($_SESSION['usuario'])) {
                ?>
                    <!-- Esta Iniciado-->
                    <div class="nav-item dropdown col-lg-2">
                        <a href="#" class="nav-link dropdown-toggle " style="color:rgb(3 158 207);" data-toggle="dropdown"><i class="user"></i> <?php echo $_SESSION['usuario']['user_name']; ?> </a>
                        <div class="dropdown-menu  rounded-10 border-0 m-10" style="background-color:rgb(3 158 207);">
                            <a href="my_perfil.php" class="dropdown-item">Mi perfil</a>
                            <?php if($_SESSION['usuario']['rol'] > 1){ ?>
                                <a href="lista_usu.php" class="dropdown-item">Usuario</a>
                            <?php }?>
                            <a href="logout.php" class="dropdown-item">Cerrar Sección </a>
                        </div>
                    </div>
                    <!-- Esta Iniciado-->
                    <!-- No esta Iniciado-->
                <?php } else { ?>
                    <div class="nav-item dropdown col-lg-2">
                        <a href="#" class="nav-link dropdown-toggle " style="color:rgb(3 158 207);" data-toggle="dropdown">Mi cuenta <i class="fa fa-angle-down mt-1"></i></a>
                        <div class="dropdown-menu  rounded-10 border-0 m-10" style="background-color:rgb(3 158 207);">
                            <a href="login.php" class="dropdown-item">Ininicar sesión</a>
                            <a href="register.php" class="dropdown-item">Registrarse</a>
                        </div>

                    </div>
                <?php } ?>
                <!-- No esta Iniciado-->

            </nav>
        </div>
    </div>
</div>
<!-- Navbar End -->