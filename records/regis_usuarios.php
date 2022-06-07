<?php
error_reporting(0);
include("../connection/connection.php");

$nombuser = $_POST["nombuser"];
$contuser = $_POST["contuser"];
$roluser = $_POST["roluser"];


$insertuser = "insert into usuarios(id_usuario,nomb_usuario,passw_usuario,rol_usuario)
values ('','$nombuser','$contuser','$roluser')";

$conexion = mysqli_connect("localhost","root","","acme_db");

$resultados =  mysqli_query($conexion,$insertuser);
if(!$resultados){
    echo "<script>alert('" .'Error en Registro' . "' );</script>";
} else{
    echo "<script>alert('" .'Registro Exitoso' . "' );</script>";
    
}
mysqli_close($conexion);

echo "<script>window.location = '../admin/admin_usuarios.php'; </script>";

?>