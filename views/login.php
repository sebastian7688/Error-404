<link rel="stylesheet" href="css/register.css">

<form class="register" method="post">
    <div class="contenedor">
        <h1> Inicia sesión </h1>
        <?php if ($stats == 1) { ?>
            <br>
            <div class='alert alert-danger alert-dismissible fade show' role='alert' style='margin:0;'>
                Algo anda mal, ingresa bien los datos. 
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            <br>
        <?php } ?>

        <div class="input-contenedor">
        <input type="text" name="usu" class="input" placeholder="Nombre de usuario">
        </div>
        
        <div class="input-contenedor">
        <input type="password" name="pass" class="input" placeholder="Constraseña">
        </div>
        
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Recordarme
            </label>
        </div>
        <button href="index.php" class="btn-register" type="submit" > Iniciar sesión </button><br><br>
        <a href="register.php" class="btn-secondary"> ¿No tienes una cuenta? </a>
    </div>
</form>
</main>


