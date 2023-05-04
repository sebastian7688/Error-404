<div class="container">
    <h1 class="text-center bordr-bottom">Agregar noticia</h1>
    <form action="" method="post" enctype="multipart/form-data">

        <label for="inputEmail4" class="form-control bg-dark text-light text-center">Añadir titulo de la noticia</label>
        <input type="text" class="form-control border-dark" name="title">
        <br>
        <label for="inputEmail4" class="form-control bg-dark text-light text-center">Añadir una descripcion</label>
        <textarea type="text" class="form-control border-dark" maxlength="500" name="desc"></textarea>
        <br>
        <label for="inputEmail4" class="form-control bg-dark text-light text-center">Desarolla la Noticia</label>
        <textarea  class="form-control border-dark"  name="info"></textarea>
        <br>
        <label for="inputEmail4" class="form-control bg-dark text-light text-center">Añadir la foto de portada</label>
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupFile01">Upload</label>
            <input type="file" class="form-control border-dark" id="inputGroupFile01" name="principal_img" id="principal_img">
        </div>
        <button type="submit" class="btn btn-success">
            Enviar
        </button>
        <a href="index.php" class="btn btn-danger">Cancelar</a>
    </form>
</div>