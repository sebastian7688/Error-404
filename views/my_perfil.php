<link rel="stylesheet" href="css/my_perfil.css">


<section class="perfil-user">
    <div class="user-header">
        <div class="user-portada">
            <div class="user-avatar">
                <img src="img/group/user.png" alt="imagen portada">
                <button type="button" class="boton-avatar"><i class="icon-image"></i></button>
            </div>
        </div>    
    </div>
    <div class="user-body">
        <div class="user-desc">
            <h3 class="titulo"><?php echo $_SESSION['usuario']['user_name']; ?></h3>
            <p>Descripción </p>
        </div>
        <div class="user-info">
          <div class="user-datos">
            <p>Nombre de usuario: <?php echo $_SESSION['usuario']['user_name']; ?></p>
            <p>EMail: <?php echo $_SESSION['usuario']['email']; ?></p>
            <button type="botton" class="boton-editar">Editar</button>
          </div>
        </div>
    </div>
</section>