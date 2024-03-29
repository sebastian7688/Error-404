<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link href="css/editar_producto.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="lib/animates/SuperTux.min.css" rel="stylesheet">
<link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
<link href="css/naruto.css" rel="stylesheet">
<link href="img/favicon.ico" rel="icon">
<link href="css/styles.min.css" rel="stylesheet">
<link href="img/favicon.ico" rel="icon">
<link rel="icon" href="img/icon.ico">
<script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/9817c2b4db.js" crossorigin="anonymous"></script>
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php" class="link-info" style="text-decoration: none;">Inicio</a>
            </li>
            <li class="breadcrumb-item"><a href="shop.php" class="link-info" style="text-decoration: none;">Tienda</a>
            </li>
            <li class="breadcrumb-item"><a href="products_read_more.php" class="link-info" style="text-decoration: none;">Productos</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page"><a style="text-decoration: none;">Editar Producto</a>
            </li>
        </ol>
    </nav>
</div>

<body>
    <form action="" class="formulario" style="background: #3D464D;">

        <h1 class="formulario_titulo">Edita tu producto</h1><br>

        <div>
            <input type="text" class="formulario_input" placeholder="Nombre del producto:" style="color: #fff;">
        </div>

        <textarea class="formulario_input" maxlength="25" placeholder="Descripción del producto:" style=""></textarea>

        <textarea class="formulario_input" maxlength="250" placeholder="Informacion del producto:" style="" ></textarea>

        <select class="form-select" aria-label="Default select example" style="padding:5px; width:100%;">
            <option selected >Categoría del producto</option>
            <option value="1" class="formulario_option"><i class="fa-solid fa-futbol" alt=""></i> Futbol </option>
            <option value="2" class="formulario_option"><i class="fa-solid fa-volleyball" alt=""></i> Voley</option>
            <option value="3" class="formulario_option"><i class="fa-solid fa-basketball" alt=""></i> Basquet</option>
            <option value="4" class="formulario_option"><i class="fa-solid fa-football" alt=""></i> Rugby</option>
            <option value="5" class="formulario_option"><img src="img/home/boxing-glove.png" alt="">Boxeo</option>
            <option value="6" class="formulario_option"><i class="fa-solid fa-golf-ball-tee" alt=""></i> Golf</option>
            <option value="7" class="formulario_option"><i class="fa-solid fa-person-swimming" alt=""></i>Natacion</option>
            <option value="8" class="formulario_option"><img src="img/home/tennis-ball.png" alt="">Tenis</option>
            <option value="9" class="formulario_option"><img src="img/home/surf-board.png" alt=""> Surf</option>
        </select>

        <br><br>

        <div class="input-group mb-3">
            <span class="input-group-text" style="background:#3D464D; color:#fff; border-radius:0px;">$</span>
            <input type="text" class="formulario_precio" placeholder="A&ntilde;adir el precio del producto" style="">
        </div>

        <br>

        <div id="div_file">
            <p id="texto">A&ntilde;adir la foto de portada</p>
            <input type="file" class="form-control border-dark" id="btn_file" name="principal_img" id="principal_img">
        </div>
       
        <br>

        <div align="center">
            <button type="submit" class="btn btn-success " style="background:#00bfff; border-color:#00bfff; border-radius:3px; box-shadow: 1px 1px 3px #000;">
                Enviar
            </button>&nbsp;
            <a href="index.php" class="btn btn-danger" style="Background:#343a40; border-color:#343a40; border-radius:3px; box-shadow: 1px 1px 3px #000;">Cancelar</a>
        </div>

        <!---input type="submit" class="formulario_submit"--->
    </form>

</body>


<!-----
<div class="container"  >
    <h2></h2>
    <form action="editar_producto.php" method="POST">
        <div class="form-group">
            <label for="nombre"></label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>

        <div class="form-group">
            <label for="descripccion"></label>
            <textarea class="form-control" id="descripccion" name="descripccion" maxlength="250" required></textarea>
        </div>

        <div class="form-group">
            <label for="mensaje "></label>
            <textarea class="form-control" id="mensaje" name="mensaje" required></textarea>
        </div>

        

      

        
        <button type="button" class="btn btn-primary"><font color="#f8f8f8">Enviar</font></button>
    </form>
</div>
--->