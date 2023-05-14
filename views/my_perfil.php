<link rel="stylesheet" href="css/my_perfil.css">
<link href="css/style.css" rel="stylesheet">
<script src="js/cargar.js"></script>
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php" class="link-info" style="text-decoration: none;">Inicio</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page"><a class="link-dark"
                    style="text-decoration: none;">Perfil</a></li>
        </ol>
    </nav>
</div>

<section class="perfil-user">
    <div class="user-header">
        <div class="user-portada">
            <div class="user-avatar">
                <img src="img/group/user.png" alt="imagen portada">
                <button type="button" class="boton-avatar"><i class="fa-solid fa-image"></i></button>
            </div>
        </div>
    </div>
    <div class="user-body">
        <div class="user-desc">
            <h3 class="titulo">
                <?php echo $_SESSION['usuario']['user_name']; ?>
            </h3>
            <p>Descripción </p>
        </div>
        <div class="user-info">
            <div class="user-datos">
                <p>Nombre de usuario:
                    <?php echo $_SESSION['usuario']['user_name']; ?>
                </p>
                <p>Email:
                    <?php echo $_SESSION['usuario']['email']; ?>
                </p>
                <button type="botton" class="boton-editar"><i class="fa-solid fa-pen-to-square"></i> Editar</button>
                <div class="btn-group" role="group">
                    <button type="botton" class="btn btn-secondary btn-lg"style="background-color:rgb(59 79 87);"onMouseover="this.style.color='White'" onMouseout="this.style.color='Deepskyblue'">Opciones de Admin</button>
                    <button type="button" class="btn btn-lg btn-secondary dropdown-toggle dropdown-toggle-split" style="background-color:rgb(59 79 87);"onMouseover="this.style.color='White'" onMouseout="this.style.color='Deepskyblue'"data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">Toggle Dropdown</span>
  </button>    
                    
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <a class="dropdown-item text-dark" onclick="env_c('usuarios')">Caegar Usuarios</a>
                        <a class="dropdown-item text-dark" onclick="env_c('noticias')">Cargar Noticias</a>
                        <a class="dropdown-item text-dark" href="in_progress.php">Cargar Productos</a>

                    </div>
                </div>
            </div>

            
        </div>
    </div>
    </div>
</section>