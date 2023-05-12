<link rel="stylesheet" href="css/add.css">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<div class="container">
<nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php" class="link-info" style="text-decoration: none;">Inicio</a></li>
            <li class="breadcrumb-item"><a href="shop.php" class="link-info" style="text-decoration: none;">Tienda</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a class="link-dark" style="text-decoration: none;">Noticias</a></li>
           
        </ol>
    </nav>
</div>
<div class="container">   
    <form class="add" action="" method="post" enctype="multipart/form-data">
        <h1 class="titulo_1">Agregar noticia</h1>
        <div class="input-container">
            <label for="inputEmail4" class="titulo_2">Añadir titulo de la noticia</label>
            <input type="text" class="input" name="title">
            <br>
            <label for="inputEmail4" class="titulo_2">Añadir una descripcion</label>
           <textarea type="text" class="input" maxlength="500" name="desc"></textarea>
            <br>
            <label for="inputEmail4" class="titulo_2">Desarolla la Noticia</label>
            <textarea  class="input"  name="info"></textarea>
            <br>
            <label for="inputEmail4" class="titulo_2">Añadir la foto de portada</label>
            <!-- <label class="input-group-text" for="inputGroupFile01">Upload</label> -->
            <input type="file" class="form-control border-dark" id="inputGroupFile01" name="principal_img" id="principal_img">
        </div>
        <br>
        <button type="submit" class="btn btn-success">
            Enviar
        </button>
        <a href="index.php" class="btn btn-danger">Cancelar</a>
    </form>
</div>