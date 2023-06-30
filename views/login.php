<link rel="stylesheet" href="css/register.css">
<link href="css/style.css" rel="stylesheet">


<head>
  <title>Always Sporting</title>
  <link rel="icon" href="img/icon.ico">
</head>


<form class="register" method="post">
    <div class="contenedor">
            <h1 class="m-0 " color="Deepskyblue" style="font-size:50px;"><span class="text-dark">Always</span>
                    <font color="00BFFF">Sporting</font>
            </h1>
        <h2 class="titulo_2"> Iniciar sesión </h2>
        <?php if ($stats == 1) { ?>
            <br>
            <div class='alert alert-danger alert-dismissible fade show' role='alert' style='margin:0;'>
                Algo anda mal, ingresa bien los datos.
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            <br>
        <?php } ?>


        <div class="input-contenedor">
        <input type="text" name="usu" class="input" placeholder="Nombre de usuario" value= "<?php echo (isset($_COOKIE['nombre'])) ? $_COOKIE['nombre'] : '' ?>">
        </div>
       
        <div class="input-contenedor">
        <input type="password" name="pass" class="input" placeholder="Constraseña" value= "<?php echo (isset($_COOKIE['pass'])) ? $_COOKIE['pass'] : '' ?>">
        </div>
       
        <div class="checkbox">
            <label style="color:#3D464D;">
                <input type="checkbox" value="true" name="cookies" <?php echo (isset($_COOKIE['cookie']))? 'checked' : '' ?>> Recuerdame
            </label>
        </div>
        <button href="index.php" class="btn-register" type="submit" > Iniciar sesión </button><br><br>
        <a href="register.php" class="btn-secondary" style="background:white; color:#3D464D;"> ¿No tienes una cuenta? </a>
    </div>
</form>
</main>


