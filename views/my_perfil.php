<link rel="stylesheet" href="css/my_perfil.css">
<link href="css/style.css" rel="stylesheet">


<script src="js/cargar.js"></script>
<div class="container">
    <?php foreach ($usser as $usu) { ?>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php" class="link-info" style="text-decoration: none;">Inicio</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page"><a class="link-dark" style="text-decoration: none;">Perfil</a></li>
            </ol>
        </nav>
</div>

<section class="perfil-user">
    <div class="user-header">
        <div class="user-portada">
            <div class="user-avatar">
                <img src="img/group/user.png" alt="imagen portada">
                <button type="file" class="boton-avatar"><i class="fa-solid fa-image"></i></button>
            </div>
        </div>
    </div>
    <div class="user-body">
        <div class="user-desc">
            <h3 class="titulo">
                <?php if ($status == 1) { ?>
                    <br>
                    <div class='alert alert-danger alert-dismissible fade show' role='alert' style='margin:0;'>
                        El nombre de usuario o el correo ya fueron registrados.
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>
                    <br>
                <?php } ?>
                <ul class="list-inline">
                    <?php echo $usu['user_name'] ?>
                </ul>
            </h3>

            <!-- /*FORMULARIO NOMBRE
            <div id="formu">
                <form class="register-perfil" method="post">

                    <div class="input-contenedor">
                        <input type="text" name="name" class="input" placeholder="Cambiar Nombre" >
                    </div>

                    <button name="subir" class="btn-register" type="submit">Enviar</button>
                    <a onclick="desaparecerN();" style="color:white; text-decoration:none;">Cancelar</a>
                </form>
            </div>*/ -->

            <ul class="list-inline">
                <p class="list-inline-item"><?php echo $usu['descrip'] ?></p>
            </ul>
            <!-- FORMULARIO DESCRIPCION
            <div id="formulario">
                <form class="register-perfil" method="post">

                    <div class="input-contenedor">
                        <input type="text" name="descrip" class="input" placeholder="Cambiar descripcion">
                    </div>

                    <button name="submit" class="btn-register" type="submit">Enviar</button>
                    <a onclick="desaparecer();" style="color:white; text-decoration:none;">Cancelar</a>
                </form>
            </div> -->
        </div>

        <div class="user-info">
            <div class="user-datos">
                <p>Nombre de usuario:
                    <?php echo $usu['user_name'] ?>
                </p>
                <ul class="list-inline">
                    <p class="list-inline-item">Email: <?php echo $usu['email'] ?></p>
                </ul>

                <!-- FORMULARIO EMAIL
                <div id="form">
                    <form class="register-perfil" method="post">

                        <div class="input-contenedor">
                            <input type="email" name="email" class="input" placeholder="Cambiar correo">
                        </div>

                        <button name="subir" class="btn-register" type="submit">Enviar</button>
                        <a onclick="desaparecerE();" style="color:white; text-decoration:none;">Cancelar</a>
                    </form>
                </div> -->

                    <a type="botton" class="btn btn-secondary btn-lg" style="background-color:rgb(59 79 87);" onMouseover="this.style.color='White'" onMouseout="this.style.color='Deepskyblue'" href="edit_profile.php"><i class="fa-solid fa-user-pen"></i> Editar Perfil</a>

                    <!-- <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <a class="dropdown-item text-dark" onclick="env_c('usuarios')">Cargar Usuarios</a>

                        <a class="dropdown-item text-dark" onclick="env_c('noticias')">Cargar Noticias</a>
                        <a class="dropdown-item text-dark" href="in_progress.php">Cargar Productos</a>
                    </div> -->
                
            </div>


        </div>
    </div>
    </div>
</section>
<?php } ?>

