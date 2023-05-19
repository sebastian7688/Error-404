<link href="css/style.css" rel="stylesheet">
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php" class="link-info" style="text-decoration: none;">Inicio</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a class="link-dark" style="text-decoration: none;">Usuarios</a></li>
        </ol>
    </nav>
</div>
<br>
<div class="container">
    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" > Filtros<span class="caret"></span></button>&nbsp;&nbsp;
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="list_user.php">Usuarios</a></li>
        <li><a class="dropdown-item" href="list_mod.php">Moderador</a></li>
        <li><a class="dropdown-item" href="list_admin.php">Administradores</a></li>
        <li><a class="dropdown-item" href="lista_usu.php">Todos</a></li>

    </ul>

</div>


<br>
<div class="container">
    <table class="table table-dark table-striped">
        <tr>
            <th> ID </th>
            <th><i class="fa-solid fa-user"></i> Usuario </th>
            <th><i class="fa-solid fa-envelope"></i> Correo </th>
            <th><i class="fa-solid fa-ranking-star"></i> Rango </th>
            <th><i class="fa-solid fa-sun"></i> Fecha Alta </th>
            <th><i class="fa-solid fa-moon"></i> Fecha Baja </th>


            <th><i class="fa-solid fa-screwdriver-wrench" ></i> Opciones </th>
        </tr>
        <tbody>
            <?php foreach ($list_usser as $usser) {
                if ($_SESSION['usuario']['rol'] > 1) {
            ?>
                    <tr>
                        <th><?php echo $usser['id']; ?></th>
                        <th><?php echo $usser['user_name']; ?></th>
                        <th><?php echo $usser['email']; ?></th>
                        <th><?php echo $usser['rol']; ?></th>
                        <th><?php echo $usser['fecha_alta']; ?></th>
                        <th><?php echo $usser['fecha_baja']; ?></th>


                        <td>
                            <a class="btn btn-danger <?php echo $usser['rol'] == "administrador" ? 'disabled' : '' ?>" href="listas_opciones_usu.php?id=<?php echo $usser['id'] ?>" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="fa-solid fa-user-slash" ></i></a>
                            <a class="btn btn-success <?php echo $usser['rol'] == "moderador" ? 'disabled' : '' ?><?php echo $usser['rol'] == "administrador" ? 'disabled' : '' ?>" href="listas_opciones_usu.php?mod=<?php echo $usser['id'] ?>" data-toggle="tooltip" data-placement="top" title="Asender"><i class="fas fa-edit" ></i></a>
                            <a class="btn btn-warning <?php echo $usser['rol'] == "administrador" ? 'disabled' : '' ?><?php echo $usser['rol'] == "usuario" ? 'disabled' : '' ?>" href="listas_opciones_usu.php?id_reset=<?php echo $usser['id'] ?>" data-toggle="tooltip" data-placement="top" title="Desender"><i class="fa-solid fa-user-minus"></i></a>
                        </td>
                <?php }
            } ?>
                    </tr>
        </tbody>
    </table>
</div>

