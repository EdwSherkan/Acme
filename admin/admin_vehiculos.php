<?php
error_reporting(0);

    include("../connection/connection.php");

   $vehiculo = "SELECT * FROM vehiculos
   GROUP BY id_vehiculo
   ORDER BY id_vehiculo ASC";
?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin. Vehículos</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../js/logic.js">
    <link rel="shortcut icon" href="../imagenes/favicon.ico" type="image/x-icon">
</head>

<body>

    <header class="cont_head">
        <div class="cont_logo">
            <img src="../imagenes/logo.png" alt="">
        </div>
        <div class="cont_titulo">
            <h1>Vehicle History Administration</h1>
        </div>
        <nav class="cont_login">
            <button title="Back">
                <a href="../admin.php"><img src="../imagenes/back.png" alt=""></a></button>
        </nav>
    </header>
    <section class="cont_inicial2">
        <header class="cont_menu-2">
            <button class="btn-menu-2"><a href="../edicion/edit_vehiculo.php">
                        <img class="img_btn" src="../imagenes/edit.png" alt="">Editar Vehículo</a>
            </button>
        </header>
        <section class="contenedor">
            
               <form action="../records/regis_vehiculos.php" method="POST"  class="form_registro" required>
                    <input name="Plate" class="input_form" type="text" placeholder="Placa" required >
                    <input name="Color" class="input_form" type="text" placeholder="Color" required>
                    <input name="Mark" class="input_form" type="text" placeholder="Marca" required>
                    <input name="Type" class="input_form" type="text" placeholder="Tipo" required>
                    <input name="Owner" class="input_form" type="text" placeholder="Propietario" required>
                    <input name="Driver" class="input_form" type="text" placeholder="Conductor" required>
                    <div class="cont-btn">
                        <button class="btn-style color-1" type="submit">Registrar</button>
                    </div>
               </form>
    
               <main class="cont-box-n">
                <header class="t_head">
                  <button class="btn-1">Placa</button>
                  <button class="btn-1">Color</button>
                  <button class="btn-1">Marca</button>
                  <button class="btn-1">Tipo</button>
                  <button class="btn-1">Propietario</button>
                  <button class="btn-1">Conductor</button>
                </header>
                 <section class="cont-tabla">
                  
<?php  
$resultado = mysqli_query($conexion, $vehiculo);
        while($row =mysqli_fetch_array($resultado)){
?> <table class="table-1">
                   <tr>
                        <td class="td-1"><?php echo $row["id_vehiculo"] ?></td>
                        <td class="td-1"><?php echo $row["color_vehiculo"] ?></td>
                        <td class="td-1"><?php echo $row["marca_vehiculo"] ?></td>
                        <td class="td-1"><?php echo $row["tipo_vehiculo"] ?></td>
                        <td class="td-1"><?php echo $row["idprop_vehiculo"] ?></td>
                        <td class="td-1"><?php echo $row["idcond_vehiculo"] ?></td>
                    </tr> 
<?php   } mysqli_free_result($resultado);    ?> 
                   </table>
                 </section>
              </main>
            
            </section>   
</section>
    <script src="../js/logic.js"></script>
</body>

</html>