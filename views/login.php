
<div class="container text-center">
    <form class="form-control" method="post">
        <h1 class="h3 mb-3 fw-normal border-bottom">Iniciar Sesión</h1>
        <?php if ($stats == 1) { ?>
            <br>
            <div class='alert alert-danger alert-dismissible fade show' role='alert' style='margin:0;'>
                Algo anda mal, ingresa bien los datos
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            <br>
        <?php } ?>

    
        <input type="text" name="usu">
        <label>Nombre de Usuario</label>

        <br>

        <br>
      
        <input type="password" name="pass">
        <label>Contraseña</label>
        <br>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button href="index.php" class="w-100 btn btn-lg btn-primary" type="submit" >Registrarse</button><br>
        <a href="index.php" class="mt-5 mb-3 text-muted text-decoration-none">Volver al inicio / </a>
        <a href="register.php" class="mt-5 mb-3 text-muted text-decoration-none">Registrarse</a>
    </form>
    </main>
</div>