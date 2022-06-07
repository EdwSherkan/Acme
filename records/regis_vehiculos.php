<?php
error_reporting(0);
include("../connection/connection.php");

$Plate  = $_POST['Plate'];
$Color  = $_POST['Color'];
$Mark   = $_POST['Mark'];
$Type   = $_POST['Type'];
$Owner  = $_POST['Owner'];
$Driver = $_POST['Driver'];


$insertar = "INSERT INTO vehiculos(id_vehiculo,color_vehiculo,marca_vehiculo,tipo_vehiculo,
idprop_vehiculo,idcond_vehiculo)
VALUES ('$Plate','$Color','$Mark','$Type','$Owner','$Driver')";

$conexion = mysqli_connect("localhost","root","","acme_db");

$result =  mysqli_query($conexion,$insertar);
if(!$result){
    echo "<script>alert('" .'Error en Registro' . "' );</script>";
} else{
    echo "<script>alert('" .'Registro Exitoso' . "' );</script>";
    
}
mysqli_close($conexion);

echo "<script>window.location = '../admin/admin_vehiculos.php'; </script>";
?>