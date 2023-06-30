<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link href="css/editar_producto.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">

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
  <form action="" class="formulario">
    <h1 class="formulario_titulo">Edita tu producto</h1>
    <input type="text" class="formulario_input">
    <label for ="" class="formulario_label">Nombre del producto:</label>
    <textarea class="formulario_input" maxlength="250" required></textarea>
    <label for ="" class="formulario_label">Descripción del producto:</label>
    <textarea class="formulario_input" maxlength="250" required></textarea>
    <label for ="" class="formulario_label">Informacion del producto:</label>
    <div class="btn-group">
           <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
              <font color="#f8f8f8">Categoria del producto</font>
            </button>

            <div class="dropdown-menu">
            <a  id=miBoton class="dropdown-item"><i class="fa-solid fa-futbol" alt=""></i> Futbol </a>
            <a  id=miBoton class="dropdown-item"><i class="fa-solid fa-volleyball" alt=""></i> Voley</a>
            <a  id=miBoton class="dropdown-item"><i class="fa-solid fa-basketball" alt=""></i> Basquet</a>
            <a  id=miBoton class="dropdown-item"><i class="fa-solid fa-football" alt=""></i> Rugby </a>
            <a  id=miBoton class="dropdown-item"><img src="img/home/boxing-glove.png" alt="">Boxeo </a>
            <a  id=miBoton class="dropdown-item"><i class="fa-solid fa-golf-ball-tee" alt=""></i> Golf</a>
            <a  id=miBoton class="dropdown-item"><i class="fa-solid fa-person-swimming" alt=""></i>Natacion</a>
            <a  id=miBoton class="dropdown-item"><img src="img/home/tennis-ball.png" alt="">Tenis </a>
            <a  id=miBoton class="dropdown-item"><img src="img/home/surf-board.png" alt=""> Surf</a>
            </div>
        </div>
        <br><br><br>
        <div class="input-group mb-3">
        <label for="" class="formulario_g" >Añadir el precio del producto:</label>
            <span class="input-group-text">$</span>
            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
            <span class="input-group-text">.00</span>
        </div><br>
        <label for="" class="formulario_f">Añadir la foto del producto:</label>
        <input type="file" class="form-control border-dark" id="inputGroupFile01" name="principal_img" id="principal_img">
        <br>
    <input type="submit" class="formulario_submit">
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