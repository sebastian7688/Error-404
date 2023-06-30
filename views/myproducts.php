<link href="css/myproducts.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<div class="border-top bg-light">

  <div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3 border-bottom border-info">
        Mis Productos
      </span></h2>
    <!----  <div class="row px-xl-5">
      <?php /*foreach ($productos as $misprods) { ?>
        <div class="col-md-4">
          <div class="card product-item bg-light mb-4">
            <div class="product-img position-relative overflow-hidden">
              <?php
              if (file_exists('img/productos/' . $misprods['id'] . '/principal.jpg')) { ?>
                <img class="card-img-top" width="100%" height="250rem" src="img/productos/<?php echo $misprods['id']; ?>/principal.jpg">
              <?php
              } ?>

              <div class="product-action">
                <a class="btn btn-outline-dark btn-square" href="products_read_more.php?id=<?php echo $misprods['id'] ?>" style="background-color:rgb(3 158 207);" style="color:rgb(3 158 207);"><i class="fa fa-search"></i></a>
              </div>
            </div>

            <div class="text-center py-4">
              <a class="card-title text-decoration-none text-truncate" href="products_read_more.php?id=<?php echo $misprods['id'] ?>">
                <?php echo $misprods['nombre_prod'] ?>
              </a>

              <div class="d-flex align-items-center justify-content-center mt-2">
                <h5>$
                  <?php echo $misprods['precio'] ?>
                </h5>
                </h6>
              </div>
              <div align="center">
                <FONT COLOR="#15b83b">20% Descuento</FONT>
              </div>
            </div>
            <a class="btn btn-info text-light">Editar</a>
            <a class="btn btn-success text-light">Descuento</a>
            <a class="btn btn-danger text-light">Eliminar producto</a>
          </div>
        </div>
      <?php }*/ ?>
    </div>
  </div>
</div>----->

    <div class="container">
      <article class="card card--aqua">
        <img class="card__img" src="https://jamesprogramming.github.io/images/pyrenees-351266_1280.jpg" alt="mountains view on a sunny day" />
        <div class="card__img-filter"></div>
        <div class="card__text">
          <h2 class="card__header">
            Aute occaecat labore velit
          </h2>
          <p class="card__details">
            Ad adipiscing qui nisi Duis sint fugiat anim veniam,
            consequat Duis amet, non ad tempor laborum id labore
            laborum ullamco non mollit.
          </p>
          <div class="card__price">
            <div>
              <span class="material-symbols-rounded">
              <i class="fa-solid fa-tag" style="color: #2084cf;"></i>
              </span>
            </div>
            <h3>
                    $255<span class>.99</span>
            </h3>
          </div>
          <a href="#" class="card__button">
            <span>
              Ver<span class="material-symbols-rounded">
              </span>
            </span>
            
          </a>
        </div>
        <div class="card__background-1"></div>
        <div class="card__background-2"></div>
        <div class="card__background-3"></div>
      </article>
    </div>