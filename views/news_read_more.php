<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" href="css/read_more.css">
<script src="//assets.jumpseller.com/public/jquery-3.3.1.min.js"></script>
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php" class="link-info" style="text-decoration: none;">Inicio</a>
            </li>
            <li class="breadcrumb-item"><a href="noticias.php" class="link-info" style="text-decoration: none;">Noticias</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page"><a style="text-decoration: none;">Comentar</a>
            </li>
        </ol>
    </nav>
</div>

<div class="container" style="box-shadow:0px 0px 15px #aaa;">
<?php foreach($noticias as  $noticia){ ?>
    <div class="col-12">
        <h1 style="text-align:center; margin-bottom:25px; padding-top:25px; font-size:350%; color:rgb(21, 30, 36);"><?php echo $noticia['titulo']; ?></h1>
        <div class="containerImagen">
        <?php
        if (file_exists('img/noticias/' . $noticia['id'] . '/principal.jpg')) { ?>
       <img  class="imgfluid" src="img/noticias/<?php echo $noticia['id']; ?>/principal.jpg">
                                    <?php } ?>
        </div>
        <h2 style="margin-top:15px; margin-bottom:20px; border-left:5px solid #00BFFF; padding-left:5px; color:#1e1e1e;"><?php echo $noticia['descripcion']; ?></h2>
    </div>
    
    <div class="col-12" >
        <div class="media" style="padding-top:15px; padding-bottom:15px; border-bottom:1px solid #bfbfbf;">
            <img src="img/group/eve.jpg" width="64" height="64" alt="">
            <div class="media-body">
                <p class="nombre">fecha</p>
                <p class="comentario">Autor: "nombre"</p>
            </div>   
        </div>
    </div>                              
    <input type="hidden" name="id" value="<?php echo $noticia['id']?>">
     <div class="col-12">
        <div class="container" style="padding-top:1%; padding-bottom:1%; border-bottom:1px solid #bfbfbf;">
            <div class="form-group row">
                <div class="col-sm-8 col-md-12">              
                    <p class="text" style="font-size:25px; letter-spacing:0; "><?php echo $noticia['texto']; ?>
                    </p>
                </div>
            </div>                            
        </div>
    </div>
    <div class="container" >
            <div class="row comentarios justify-content-center" >
                <div class="col-12">
                    <form action="" class="form_comentarios d-flex justify-content-end flex-wrap">
                        <textarea name="" id="" placeholder="Comentario"></textarea>
                        <button class="btn" type="button" onMouseover="this.style.color='white'">Comentar</button>
                    </form>
                    <div class="media">
                        <img src="img/group/mike.jpg" width="64" height="64" alt="">
                        <div class="media-body">
                            <p class="nombre">Nombre</p>
                            <p class="comentario">Comentario</p>
                            <div class="botones text-right">
                                <a href="">Responder</a>
                                <a href="">Editar</a>
                                <a href="">Borrar</a>
                            </div>
                        </div>

                    </div>
                    <div class="media">
                        <img src="img/group/seba.jpg" width="64" height="64" alt="">
                        <div class="media-body">
                            <p class="nombre">Nombre</p>
                            <p class="comentario">Comentario</p>
                            <div class="botones text-right">
                                <a href="">Responder</a>
                                <a href="">Editar</a>
                                <a href="">Borrar</a>
                            </div>
                            <div class="media">
                                <img src="img/group/eve.jpg" width="64" height="64" alt="">
                                <div class="media-body">
                                    <p class="nombre">Nombre</p>
                                    <p class="comentario">Comentario</p>
                                    <div class="botones text-right">
                                        <a href="">Responder</a>
                                        <a href="">Editar</a>
                                        <a href="">Borrar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="media">
                        <img src="img/group/eve.jpg" width="64" height="64" alt="">
                        <div class="media-body">
                            <p class="nombre">Nombre</p>
                            <p class="comentario">Comentario</p>
                            <div class="botones text-right">
                                <a href="">Responder</a>
                                <a href="">Editar</a>
                                <a href="">Borrar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php }?>
    </div>
