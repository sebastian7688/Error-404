<link rel="stylesheet" href="css/register.css">
<link href="css/style.css" rel="stylesheet">


<head>
  <title>Always Sporting</title>
  <link rel="icon" href="img/icon.ico">
</head>
<body>
   
<form class="register" method="post">
    <div class="contenedor">
            <h1 class="m-0 " color="Deepskyblue" style="font-size:50px;"><span class="text-dark">Always</span>
                    <font color="00BFFF">Sporting</font>
            </h1>
            <h2 class="titulo_2">Registrate</h2>
            <?php if ($status == 1) { ?>
            <br>
            <div class='alert alert-danger alert-dismissible fade show' role='alert' style='margin:0;'>
                 El nombre de usuario o el correo ya fueron registrados.
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            <br>
        <?php } ?>


            <div class="input-contenedor">
            <input type="text" name="usu" class="input" placeholder="Nombre de usuario">
            </div>
           
            <div class="input-contenedor">
            <input type="text" name="correo" class="input" placeholder="Correo eletronico">          
            </div>
               
            <div class="input-contenedor">
            <input type="password" name="pass" class="input"  placeholder="Contraseña">
            </div>


            <div class="checkbox" style="color:#3D464D;">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="btn-register" type="submit"> Registrarse. </button><br><br>
            <p> Al registrarte aceptas nuestras condiciones de uso y politica de privacidad. </p>
            <!-- <p algin="center"> Cuestión aceptas darnos tus datos personales y ubicación en tiempo real. </p> -->
            <a href="login.php" class="btn-secondary"> ¿Ya tienes una cuenta? </a>
            </div>
        </form>
    </main>


