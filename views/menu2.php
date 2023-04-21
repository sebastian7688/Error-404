<nav class="navbar navbar-dark bg-secondary" aria-label="Dark offcanvas navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>

    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarDark" aria-controls="offcanvasNavbarDark">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbarDark" aria-labelledby="offcanvasNavbarDarkLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarDarkLabel"><img src="..." alt="" width="250px"></h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body title">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

        <li class="nav-item link">
            <a class="nav-link" aria-current="page" href="index.php"><i class="fa-sharp fa-solid fa-house-chimney"></i> INICIO</a>
          </li>
        <?php
          if (isset($_SESSION['usuario'])) {
          ?>
            <ul class="navbar-nav">
              <li class="nav-item dropdown link">
                <a class="nav-link dropdown-toggle title" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fa-regular fa-user"></i> <?php echo $_SESSION['usuario']['user_name']; ?>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark">

                  <li><a class="dropdown-item link-info title" href="my_perfil.php">Perfil</a></li>
                  <li><a class="dropdown-item link-info title" href="logout.php">Cerrar Sesion</a></li>

                </ul>
              </li>
            </ul>


          <?php } else { ?>

            <li class="nav-item link">
              <a class="nav-link" href="register.php"><i class="fa-solid fa-user-plus"></i> REGISTRARSE</a>
            </li>

            <li class="nav-item link">
              <a class="nav-link" href="login.php"><i class="fa-regular fa-user"></i> INICIAR SESION</a>
            </li>

          <?php } ?>
        </ul>
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
          <button class="btn btn-info" type="submit">Buscar</button>
        </form>
      </div>
    </div>
  </div>
</nav>