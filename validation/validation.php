<?php
session_start();
error_reporting(0);
include("../connection/connection.php");

$user = $_POST['user'];
$password = $_POST['password'];

$_SESSION['user'] = $user;

$consult = "SELECT * FROM usuarios WHERE nomb_usuario = '$user' and passw_usuario = '$password'";
$result = mysqli_query($conexion, $consult);

$rows = mysqli_fetch_array($result);

if ($rows['rol_usuario'] == 'Propietario') { //proietario de vehiculo
    header("location:../propietarios.php");
} else
if ($rows['rol_usuario'] == 'Conductor') { //conductor de vehiculo
    header("location:../conductores.php");
} else 
    if ($rows['rol_usuario'] == 'Admin') { //administrador de app
        header("location:../admin.php");
    } else {echo "<script>alert('" .'Usuario o Contraseña no Validas' . "' );</script>";
       
?>
   
    <?php
    echo "<script>window.location = '/acme_app/index.html';</script>";
    ?>

<?php
}
mysqli_free_result($result);
mysqli_close($conexion);
?>