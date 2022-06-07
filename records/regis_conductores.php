<?php
error_reporting(0);
include("../connection/connection.php");

$Document   = $_POST['Document'];
$Name       = $_POST['Name'];
$Name2      = $_POST["Name2"];
$Lastname   = $_POST['Lastname'];
$Direction  = $_POST['Direction'];
$Phone      = $_POST['Phone'];
$City       = $_POST['City'];

$conductores ="insert into conductores(id_conductor,Pnomb_conductor,Snomb_conductor,
apell_conductor,dir_conductor,tel_conductor,ciudad_conductor)
values ('$Document','$Name','$Name2','$Lastname','$Direction','$Phone','$City')";

$conexion = mysqli_connect("localhost","root","","acme_db");

$result =  mysqli_query($conexion,$conductores);
if(!$result){
    echo "<script>alert('" .'Error en Registro' . "' );</script>";
} else{
    echo "<script>alert('" .'Registro Exitoso' . "' );</script>";
    
}
mysqli_close($conexion);

echo "<script>window.location = '../admin/admin_conductores.php'; </script>";
?>