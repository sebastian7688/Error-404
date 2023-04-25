<?php
require_once "includes/config.php";
require_once "views/navbar.php";

$stats = 0;
if (isset($_POST['usu']) && isset($_POST['pass'])) {
    $usurio = $_POST['usu'];
    $sql = "SELECT * FROM usuarios WHERE user_name = '" . $usurio . "'
    AND contra = '" . md5($_POST['pass']) . "'";
    $res = mysqli_query($conn, $sql);
    if (!$res) {
        $stats = 1;
    }
    $filas = mysqli_num_rows($res);
    if ($filas == 1) {
        
        $_SESSION['usuario'] = mysqli_fetch_assoc($res);
        
        }else{
            $stats= 1;
        }
        
    }
require_once "views/login.php";
echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
require_once "views/footer.php";