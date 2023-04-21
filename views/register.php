<link rel="stylesheet" href="css/register.css">
<br><br>
<div class="container text-center">
        <form class="form-control" method="post">
            <h1 class="h3 mb-3 fw-normal border-bottom">Registrate</h1>

            <?php if ($status == 1) { ?>
            <br>
            <div class='alert alert-danger alert-dismissible fade show' role='alert' style='margin:0;'>
                El nombre de usuario o el correo ya fueron registrados
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            <br>
        <?php } ?>

            <div class="form-floating">
                <input type="text" class="form-control" placeholder="Nombre" name="usu">
                <label for="floatingInput">Nombre de Usuario</label>
            </div>

            <br>
               
            <div class="form-floating">
                <input type="email" class="form-control" placeholder="Nombre" name="correo">
                <label for="floatingInput">Correo Electronico</label>
            </div>

            <br>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="pass">
                <label for="floatingPassword">Contraseña</label>
            </div>
                <br>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Registrarse</button><br>
            <a href="index.php" class="mt-5 mb-3 text-muted text-decoration-none">Volver al inicio / </a>
            <a href="login.php" class="mt-5 mb-3 text-muted text-decoration-none">Iniciar Sesion</a>
        </form>
    </main>
</div>