<?php
error_reporting(0);

    include("./connection/connection.php");

    $placa = $_POST['placa'];

    $consulta = "SELECT id_vehiculo,color_vehiculo,marca_vehiculo,tipo_vehiculo,
    concat(Pnomb_conductor,' ',Snomb_conductor,' ',apell_conductor) AS Conductor
    FROM vehiculos
    inner join conductores
    on vehiculos.idcond_vehiculo = conductores.id_conductor
    WHERE id_vehiculo = '$placa'";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Propietarios</title>
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./js/logic.js">
    <link rel="shortcut icon" href="./imagenes/favicon.ico" type="image/x-icon">
</head>
<body>
    <header class="cont_head">
        <div class="cont_logo">
            <img src="./imagenes/logo.png" alt="">
        </div>
        <div class="cont_titulo">
            <h1>Vehicle History Administration</h1>
        </div>
        <nav class="cont_login">
            <button onclick="ab_login()">
                <a href="index.html"><img src="./imagenes/home (2).png" title="Home"></a>
            </button>
        </nav>
    </header>
    <section class="cont_inicial2">
            <form method="POST" action="propietarios.php" class="cont_menu"> 
                <input name="placa" type="text" placeholder="New Search">
                <button class="btn_busq" onclick="location.reload()"><img src="./imagenes/search (1).png" title="Search">
            </button>
            </form>
            <main class="cont-box">
                <header class="t_head">
                  <button>Placa</button>
                  <button>Color</button>
                  <button>Marca</button>
                  <button>Tipo</button>
                  <button>Conductor</button>
                </header>
                 <section class="cont-tabla">
                   <table class="table-1">
<?php  
$resultado = mysqli_query($conexion, $consulta);
        while($row =mysqli_fetch_array($resultado)){
?>
                     <tr>
                        <td><?php echo $row["id_vehiculo"] ?></td>
                        <td><?php echo $row["color_vehiculo"] ?></td>
                        <td><?php echo $row["marca_vehiculo"] ?></td>
                        <td><?php echo $row["tipo_vehiculo"] ?></td>
                        <td><?php echo $row["Conductor"] ?></td>    
                     </tr>
<?php   } mysqli_free_result($resultado);    ?> 
                   </table>
                 </section>
              </main>
    </section>

    <script src="./logical_folder/logic.js"></script>
</body>
</html>