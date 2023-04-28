
<body>
    

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

            
            <input type="text" name="usu">
            <label>Nombre Usuario</label>


            <br>
               
            
            <input type="text" name="correo">
            <label>Correo eletronico</label>

            <br>
           
            <input type="password" name="pass">
            <label>Contraseña</label>
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
</body>
