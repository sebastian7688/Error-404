    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
            <a href="index.php" class="navbar-brand ml-lg-3">
                <h1 class="m-0 " color="Deepskyblue"><span class="text-dark">Always</span>
                    <font color="00BFFF">Sporting</font>
                </h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav m-auto py-0">

                    <a href="index.php" onMouseover="this.style.color='Deepskyblue'" onMouseout="this.style.color='Dimgray'" class="nav-link "><i class="fa-solid fa-house"></i>Inicio</a>
                    <a href="shop.php" onMouseover="this.style.color='Deepskyblue'" onMouseout="this.style.color='Dimgray'" class=" nav-link "><i class="fa-solid fa-cart-shopping"></i> Tienda</a>
                    <a href="noticias.php" onMouseover="this.style.color='Deepskyblue'" onMouseout="this.style.color='Dimgray'" class=" nav-link "><i class="fa-solid fa-newspaper"></i> Mis noticias</a>

                        <a href="add_notices.php" onMouseover="this.style.color='Deepskyblue'" onMouseout="this.style.color='Dimgray'" class=" nav-link "><i class="fa-solid fa-newspaper"></i> Noticias</a>
                        <a href="about_us.php" onMouseover="this.style.color='Deepskyblue'" onMouseout="this.style.color='Dimgray'" class=" nav-link "><i class="fa-solid fa-users"></i>
                            Sobre Nosotros</a>
                        <div class="nav-item dropdown">
                            <a href="#" onMouseover="this.style.color='Deepskyblue'" onMouseout="this.style.color='gray'" class="nav-link  dropdown-toggle" data-toggle="dropdown">Categorias <i class="fa fa-angle-down text-dark"></i>
                            </a>
                            <style>
                                #miBoton {
                                    background: light-gray;
                                    color: black;
                                }

                                #miBoton:hover {
                                    background: Deepskyblue;
                                    color: white;
                                }

                                #miBoton:active {
                                    background: gray;
                                    color: white;
                                }
                            </style>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="" id=miBoton class="dropdown-item"><i class="fa-solid fa-futbol"></i> Futbol </a>
                                <a href="" id=miBoton class="dropdown-item"><i class="fa-solid fa-volleyball"></i> Voley
                                </a>
                                <a href="" id=miBoton class="dropdown-item"><i class="fa-solid fa-basketball"></i> Basquet
                                </a>
                                <a href="" id=miBoton class="dropdown-item"><i class="fa-solid fa-football"></i> Rugby </a>
                                <a href="" id=miBoton class="dropdown-item"><img src="img/home/boxing-glove.png" alt="">
                                    Boxeo </a>
                                <a href="" id=miBoton class="dropdown-item"><i class="fa-solid fa-golf-ball-tee"></i> Golf
                                </a>
                                <a href="" id=miBoton class="dropdown-item"><i class="fa-solid fa-person-swimming"></i>
                                    Natacion</a>
                                <a href="" id=miBoton class="dropdown-item"><img src="img/home/tennis-ball.png" alt="">
                                    Tenis </a>
                                <a href="" id=miBoton class="dropdown-item"><img src="img/home/surf-board.png" alt=""> Surf
                                </a>
                            </div>
                        </div>
                </div>

                <?php
                if (isset($_SESSION['usuario'])) {
                ?>
                    <!-- Esta Iniciado-->
                    <div class="nav-item dropdown col-lg-2">
                        <a href="#" onMouseover="this.style.color='Deepskyblue'" onMouseout="this.style.color='gray'" class="nav-link text-dark dropdown-toggle" data-toggle="dropdown"><i class="fa-regular fa-circle-user"></i>
                            <?php echo $_SESSION['usuario']['user_name']; ?>
                        </a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a id=miBoton href="my_perfil.php" class="dropdown-item">Mi Perfil</a>
                            <?php if ($_SESSION['usuario']['rol'] > 1) { ?>
                                <a id=miBoton href="lista_usu.php" class="dropdown-item">Listado de Usuarios</a>
                            <?php } ?>
                            <a id=miBoton href="logout.php" class="dropdown-item">Cerrar Secion</a>

                        </div>
                    </div>

                <?php } else { ?>
                    <a href="login.php" class="btn  " style="background-color:rgb(0 192 255);" onMouseover="this.style.color='black'" onMouseout="this.style.color='Dimgray'">Iniciar Secion</a>
                    <a href="register.php" class="btn  " style="background-color:rgb(0 192 255);" onMouseover="this.style.color='black'" onMouseout="this.style.color='Dimgray'">Crear Cuenta</a>

                <?php } ?>
            </div>
        </nav>
    </div>