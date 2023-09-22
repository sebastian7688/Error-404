<ul>
        <?php foreach ($_SESSION['carrito'] as $producto_id => $producto) : ?>
            <li>
                <?php echo $producto['nombre_prod']; ?> - $<?php echo $producto['precio']; ?>
                <form action="carrito.php" method="POST">
                    <input type="hidden" name="producto_id" value="<?php echo $producto_id; ?>">
                    <input type="submit" name="eliminar_del_carrito" value="Eliminar del carrito">
                </form>
            </li>
        <?php endforeach; ?>
    </ul>