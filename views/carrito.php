<div class="container">
    <nav aria-label="breadcrumb" style="background-color: black">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php" class="link-info" style="text-decoration: none;">Inicio</a></li>
            <li class="breadcrumb-item"><a href="shop.php" class="link-info" style="text-decoration: none;">Tienda</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a class="link-dark" style="text-decoration: none;">Mi carrito</a></li>

        </ol>
    </nav>
</div>

<br>
<h2 style="border-left:5px solid #00BFFF; margin-left:400px;">Carrito</h2>

<br>
<div class="container">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Producto</th>
                <th scope="col">Precio</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($_SESSION['carrito'])) {
                foreach ($_SESSION['carrito'] as $producto_id => $producto) :
            ?>
                    <tr class="table-info">
                        <th><?php echo $producto['nombre_prod']; ?> </th>
                        <th>$<?php echo $producto['precio'] ?></th>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <th>
                            <form action="carrito.php" method="POST">
                                <?php echo $producto['cantidad'] ?>
                                <input type="hidden" name="producto_id" value="<?php echo $producto_id; ?>">
                                <button type="submit" class="btn btn-info" style="background: #0382aa" name="restar"><i class="fa-solid fa-minus"></i></button>&nbsp;&nbsp;
                                <button type="submit" class="btn btn-info" style="background: #0382aa" name="sumar"><i class="fa-solid fa-plus"></i></button>
                            </form>
                        </th>
                        <th>
                            <form action="carrito.php" method="POST">
                                <input type="hidden" name="producto_id" value="<?php echo $producto_id; ?>">
                                <button type="submit" class="btn btn-danger" style="background: #b60903" name="eliminar"><i class="fa-regular fa-trash-can"></i></button>&nbsp;&nbsp;
                            </form>
                        </th>
                    </tr>
            <?php endforeach;
            } ?>
        </tbody>
    </table>
    <table class="table table-active">
        <thead class="thead-light">
            <tr>
                <th scope="col">Precio Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                <th></th>
                <th></th>
                <th>$$$ <?php echo $total ?></th>
            </tr>
        </thead>
    </table>

    <form action="carrito.php" method="post">
            <button type="submit" class="btn btn-danger" style="background: #b60903" name="vaciar">Vaciar Carrito</button>
    </form>
</div>