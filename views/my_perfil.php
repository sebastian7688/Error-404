<link rel="stylesheet" href="css/my_perfil.css">
<link href="css/style.css" rel="stylesheet">


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
    integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk"
    crossorigin="anonymous"></script>

<script src="js/cargar.js"></script>
<div class="container">
    <?php foreach ($usser as $usu) { ?>
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
                    <img src="img/usuarios/<?php echo $usu['foto']?>" alt="imagen portada">
                    <button type="file" class="boton-avatar"><i class="fa-solid fa-image"></i></button>
                </div>
            </div>
        </div>
        <div class="list-group list-group-horizontal-sm text-md-center" style="height:40px; width:200px;">
            <a class="list-group-item list-group-item-action active" id="home-list-item" data-bs-toggle="list"
                href="#home">Info</a>
            <a class="list-group-item list-group-item-action" id="profile-list-item" data-bs-toggle="list"
                href="#profile">Editar</a>
        </div><br>
        <div class="tab-content profile-tab" id="myTabContent">
            <div class="tab-pane fade show active" id="home"style="margin-right: -110px">
                <div class="user-body">
                    <div class="user-desc">
                        <h3 class="titulo">
                            <?php if ($status == 1) { ?>
                                <br>

                                <br>
                            <?php } ?>
                            <ul class="list-inline">
                                <?php echo $usu['user_name'] ?>
                            </ul>
                        </h3>
                        <ul class="list-inline">
                            <p class="list-inline-item">
                                <?php echo $usu['descrip'] ?>
                            </p>
                        </ul>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    </div>
                    <div class="user-info">
                        <div class="user-datos">
                            <p>Nombre de usuario:
                                <?php echo $usu['user_name'] ?>
                            </p>
                            <ul class="list-inline">
                                <p class="list-inline-item">Email:
                                    <?php echo $usu['email'] ?>
                                </p>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>

    </section>

    <div class="tab-pane fade" id="profile"style="margin-right: -110px">








    <section class="perfil-user">
            <form method="POST">

                <div class="user-body">
                    <div class="user-desc" >
                        <?php if ($status == 1) { ?>
                            <br>
                            <div class='alert alert-danger alert-dismissible fade show' role='alert' style='margin:50px;'>
                                El nombre de usuario o el correo ya fueron registrados.
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>
                            <br>
                        <?php } ?>
                        <h1>Editar perfil</h1>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                        <?php foreach ($usser as $usu) { ?>

                            <div class="input-group mb-3" style="border-bottom:1px solid #aaa; padding-bottom:2%;">
                                <label class="input-group mb-3" style="color:#5f5f5f; font-weight:700;">Nombre de usuario:</label>
                                <input type="text" name="name" value="<?php echo $usu['user_name']?>" class="form-control" style="border-radius:5px; background:#ebebeb;" id="input">
                            </div>

                            <div class="input-group mb-3" style="border-bottom:1px solid #aaa; padding-bottom:2%;">
                                <label class="input-group mb-3" class="input-group mb-3" style="color:#5f5f5f; font-weight:700;">Descripción:</label>
                                <input type="text" name="des" value="<?php echo $usu['descrip']?>" class="form-control" style="border-radius:5px; background:#ebebeb;" id="input">
                            </div>

                            <div class="input-group mb-3" style="border-bottom:1px solid #aaa; padding-bottom:2%;">
                                <label class="input-group mb-3" style="color:#5f5f5f; font-weight:700;">Mail:</label>
                                <input type="text" name="email"value="<?php echo $usu['email']?>" class="form-control" style="border-radius:5px; background:#ebebeb;" id="input">
                            </div>

                            <div class="input-group mb-3" style="border-bottom:1px solid #aaa; padding-bottom:2%;">
                                <label class="input-group mb-3" style="color:#5f5f5f; font-weight:700;">Contraseña:</label>
                                <input type="password" name="contra"value="<?php echo $usu['contra']?>" class="form-control" style="border-radius:5px; background:#ebebeb;" id="input">
                            </div>

                            <div class="div-avatar" style="color:#00bfff; background:#ffff; border:3px solid #00bfff; padding:1%;" onMouseover="this.style.background='#e3e3e3'" onMouseout="this.style.background='#ffff'">
                                <p style="margin-bottom:0%;">Cambiar avatar</p>
                                <input type="file" name="foto" class="btn-editar">
                            </div>

                            <div class="div-avatar" style="color:#ffffff; padding:1%; margin-left:auto; margin-right:auto; margin-top:5%;" onMouseover="this.style.background='#00a9e1'" onMouseout="this.style.background='#00bfff'">
                                <p style="margin-bottom:0%;">Aplicar cambios</p>
                                <input type="submit" href="my_perfil.php" value="Guardar Cambios" class="btn-editar">
                            </div>

                    </div>
                    <?php }
        ?>
                </div>
    </div>
    </form>
    </section>
    </div>
<?php } ?>
<script>
    function mostrar() {
        document.getElementById('formulario').style.display = 'block';
    }

    function desaparecer() {
        document.getElementById('formulario').style.display = 'none';
    }

    function mostrarN() {
        document.getElementById('formu').style.display = 'block';
    }

    function desaparecerN() {
        document.getElementById('formu').style.display = 'none';
    }

    function mostrarE() {
        document.getElementById('form').style.display = 'block';
    }

    function desaparecerE() {
        document.getElementById('form').style.display = 'none';
    }
</script>
<style>
    #formulario {
        display: none;
    }

    #formu {
        display: none;
    }

    #form {
        display: none;
    }

    .input {
        font-size: 20px;
        width: 100%;
        padding: 10px;
        border: none;
    }

    .input-contenedor {
        margin-bottom: 10px;
        border: 1px solid #aaa;
        border-radius: 5px;
        border: none;
    }

    .btn-secondary {
        color: white;
        background: #0382aa;
    }

    .btn-secondary:hover {
        color: white;
        background: #0382aa;
        text-decoration: none;
    }

    .btn-register {
        border: none;
        width: 100%;
        color: white;
        font-size: 18px;
        background: #343a40;
        padding: 15px 20px;
        border-radius: 5px;
        cursor: pointer;
    }


    .register {
        text-align: center;
        background: #0382aa;
        padding: 3px;
        margin-bottom: 10px;
        margin-left: 200px;
        margin-right: 200px;
        border-radius: 10px;
    }
</style>