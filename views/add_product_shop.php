<link rel="stylesheet" href="css/register.css">
<div class="container">

    <form class="register" action="" method="post" enctype="multipart/form-data">
    <u style="color: white"><h1>Agregar Producto</h1></u>
        <label for="inputEmail4" class="form-control bg-dark text-light text-center">Nombre del Producto</label>
        <input type="text" class="form-control border-dark" name="name_prod">
        <br>
        <label for="inputEmail4" class="form-control bg-dark text-light text-center">Añadir una descripcion</label>
        <textarea type="text" class="form-control border-dark" maxlength="500" name="desc"></textarea>
        <br>
        <label for="inputEmail4" class="form-control bg-dark text-light text-center">Agrega informacion del producto</label>
        <textarea class="form-control border-dark" name="info"></textarea>
        <br>
        <label for="inputEmail4" class="form-control bg-dark text-light text-center">Categoria</label>
        <input type="text" class="form-control border-dark" name="sport">
        <br>
        <label for="inputEmail4" class="form-control bg-dark text-light text-center">Precio</label>
        <input type="text" class="form-control border-dark" name="precio">
        <br>
        <label for="inputEmail4" class="form-control bg-dark text-light text-center">Adjuntar foto</label>
        <div class="input-group mb-3">
            <input type="file" class="form-control border-dark" id="inputGroupFile01" name="principal_img" id="principal_img">
        </div>
        <button type="submit" class="btn btn-success">
            Enviar
        </button>
        <a href="index.php" class="btn btn-danger">Cancelar</a>
    </form>
</div>