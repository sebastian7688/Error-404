<link href="css/layout.css" rel="stylesheet">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="..." alt="" width="150px" height="70px"></a>

        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
            <ul class="navbar-nav">

            <?php
                session_start();
                if (isset($_SESSION['usuario'])) {
                    if($_SESSION['usuario']['rol'] == 2){
                ?>

                        <li class="nav-item link">
                            <a class="nav-link link-info title" href="#">USUARIOS</a>
                        </li>

                <?php } ?>

                    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown link">
                                <a class="nav-link dropdown-toggle link-info title" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php echo $_SESSION['usuario']['user_name']; ?>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark">

                                    <li><a class="dropdown-item link-info title" href="about_us.php">Acerca de nosotros </a></li>
                                    <li><a class="dropdown-item link-info title" href="my_perfil.php">Perfil</a></li>
                                    <li><a class="dropdown-item link-info title" href="logout.php">Cerrar Sesión</a></li>

                                </ul>
                            </li>
                        </ul>
                    </div>

                <?php } else { ?>
                    <li class="nav-item link">
                        <a class="nav-link link-info title" href="register.php">REGISTRARSE</a>
                    </li>
                    <li class="nav-item link">
                        <a class="nav-link link-info title" href="login.php">INICIAR SESIÓN</a>
                    </li>
                    <li class="nav-item link">
                        <a class="nav-link link-info title" href="about_us.php">ACERCA DE NOSOTROS</a>
                    </li>
                <?php } ?>

            </ul>
        </div>
    </div>
</nav>
