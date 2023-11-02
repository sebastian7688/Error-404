<head>
<link rel="stylesheet" href="css/register.css">
<link rel="stylesheet" href="css/add.css">
<link rel="stylesheet" href="css/qwe.css">
<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="lib/animates/SuperTux.min.css" rel="stylesheet">
  <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
  <link href="css/naruto.css" rel="stylesheet">
  <link href="img/favicon.ico" rel="icon">
  <link href="css/styles.min.css" rel="stylesheet">
  <link href="img/favicon.ico" rel="icon">
  <link rel="icon" href="img/icon.ico">
  <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/9817c2b4db.js" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"></head>
<body>
    <div class="container">
<nav aria-label="breadcrumb"style="background-color: black">
        <ol class="breadcrumb" >
            <li class="breadcrumb-item"><a href="index.php" class="link-info" style="text-decoration: none;">Inicio</a></li>
            <li class="breadcrumb-item"><a href="noticias.php" class="link-info" style="text-decoration: none;">Noticias</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a class="link-dark" style="text-decoration: none;">Tus Noticias</a></li>
           
        </ol>
    </nav>
</div>
<div class="container">  
<form class="add" action="" method="post" enctype="multipart/form-data">


        <div>
            <h1 class="titulo_1" style="text-align:center; padding-right:13%;"><img src="img/icon.ico" alt="" style="width:150px; ">Agregar noticia</h1>
        </div>
        <div class="input-container"><br>
            <h3>A&ntilde;adir título de la noticia</h3>
            <input type="text" class="input" name="title" placeholder="Aqui pondras el título principal de la noticia" required>
            <br><br>
            <div>
               
            </div>
            <div id="div_file" onMouseover="this.style.background='#00b6f3'" onMouseout="this.style.background='#00BFFF'">
                <p id="texto">A&ntilde;adir la foto de portada</p>
                <input type="file" class="form-control border-dark" id="btn_file" name="principal_img" id="principal_img" required> 
            </div>
            <br>
            <h3 >A&ntilde;adir una descripción</h3>
            <textarea type="text" class="input" maxlength="500" name="desc" placeholder="Aquí se verá sobre qué se trata la noticia" required></textarea>
            <br><br>
            <h3>Desarrolla la Noticia</h3>
            <textarea  class="input"  name="info" placeholder="Aquí escribirás todo lo que quieras contar sobre tu noticia" required></textarea>
            <br>
        </div>
       
        <br>
        <div align="center" >
        <button type="submit" class="btn btn-success" style="background:#00bfff; border-color:#00bfff; border-radius:3px; box-shadow: 1px 1px 3px #000;" onMouseover="this.style.background='#009ed3'" onMouseout="this.style.background='#00BFFF'">
            Enviar
        </button>
        <a href="index.php" class="btn btn-danger" style="Background:#343a40; border-color:#343a40; border-radius:3px; box-shadow: 1px 1px 3px #000;" onMouseover="this.style.background='#3f3f3f'" onMouseout="this.style.background='#343a40'">Cancelar</a>
</div>
    </form>


</div></body>