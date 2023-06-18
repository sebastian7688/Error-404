<link rel="stylesheet" href="css/add.css">
<link href="css/style.css" rel="stylesheet">

<div class="container">
    <form class="add" action="" method="post" enctype="multipart/form-data">
        <h1 class="titulo_1">Agregar Producto</h1>
        <div class="input-container">
            <label for="inputEmail4" class="titulo_2">Nombre del Producto</label>
            <input type="text" class="input" name="name_prod">
            <br>
            <label for="inputEmail4" class="titulo_2">Añadir una descripcion</label>
            <textarea type="text" class="input" maxlength="500" name="desc"></textarea>
            <br>
            <label for="inputEmail4" class="titulo_2">Agrega informacion del producto</label>
            <textarea class="input" name="info"></textarea>
            <br>
            <label for="inputEmail4" class="titulo_2">Categoria</label>
            <input type="text" class="input" name="sport">
            <br>
            <label for="inputEmail4" class="titulo_2">Precio</label>
            <input type="text" class="input" name="precio">
            <br>
            <label for="inputEmail4" class="titulo_2">Cantidad</label>
            <input type="number" name="cant" class="input"name="cantidad">
            <br>
            <label for="inputEmail4" class="titulo_2">Adjuntar foto</label>
            <div class="input-group mb-3">
            <input type="file" class="form-control border-dark" id="inputGroupFile01" name="principal_img" id="principal_img">
            </div>
        </div>
        <br>
        
        <button type="submit" class="btn btn-success">
            Enviar
        </button>
        <a href="index.php" class="btn btn-danger">Cancelar</a>
    </form>
    <div><img href="img/productos/21/principal.jpg" name="qwe"alt=""></div>
</div>