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
    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown"> Filtros<span class="caret"></span></button>&nbsp;&nbsp;
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="">Usuarios</a></li>
        <li><a class="dropdown-item" href="">Administradores</a></li>
    </ul>
</div>
<br>
<div class="container">
    <table class="table table-dark table-striped">
        <tr>
            <th>ID</th>
            <th>Usuario</th>
            <th>Correo</th>
            <th>Cargo</th>
            <th>Opciones</th>
        </tr>
        <tbody>
        <?php foreach ($list_usser as $usser) { 
            if($_SESSION['usuario']['rol'] == 2){
            ?>
            <tr>
                        <th><?php echo $usser['id']; ?></th>
                        <th><?php echo $usser['user_name']; ?></th>
                        <th><?php echo $usser['email']; ?></th>
                        <th><?php echo $usser['rol']; ?></th>   
                        <td>
                <a class="btn btn-danger <?php echo $usser['rol'] == "administrador" ? 'disabled' : '' ?>" href="lista_delete_usu.php?id=<?php echo $usser['id']?>"><i class="fa-solid fa-user-slash"></i></a>
                <a class="btn btn-success <?php echo $usser['rol'] == "administrador" ? 'disabled' : ''?>" href=""><i class="fas fa-edit"></i></a>
                <a class="btn btn-warning <?php echo $usser['rol'] == "administrador" ? 'disabled' : '' ?>" href=""><i class="fa-solid fa-user-minus"></i></a>
            </td>    
        <?php } } ?>
            </tr>
        </tbody>
    </table>
</div>