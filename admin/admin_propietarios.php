<?php
error_reporting(0);

    include("../connection/connection.php");

    $propietario = "SELECT id_propietario, concat(Pnomb_propietario,' ',Snomb_propietario,' ',apell_propietario) 
    AS Nombre, dir_propietario, tel_propietario, ciudad_propietario
    FROM propietarios
    ORDER BY apell_propietario ASC;";
?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin. Propietarios</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../js/logic.js">
    <link rel="shortcut icon" href="../imagenes/favicon.ico" type="image/x-icon">
</head>

<body>

    <!--contenedor del encabezado-->
    <header class="cont_head">
        <div class="cont_logo">
            <img src="../imagenes/logo.png" alt="">
        </div>
        <div class="cont_titulo">
            <h1>Vehicle History Administration</h1>
        </div>
        <nav class="cont_login">
            <button>
                <a href="../admin.php"><img src="../imagenes/back.png" alt=""></a></button>
        </nav>
    </header>
    <section class="cont_inicial2">
        <header class="cont_menu-2">
                    <button class="btn-menu-2"><a href="../edicion/edit_cliente.php">
                        <img class="img_btn" src="../imagenes/edit.png">Editar Propietario</a>
                    </button>
        </header>
        <section class="contenedor">
            
               <form action="../records/regis_propietario.php" method="post"  class="form_registro">
                    <input name="Document" class="input_form" type="text" placeholder="Documento" required>
                    <input name="Name" class="input_form" type="text" placeholder="Primer Nombre" required>
                    <input name="Name2" class="input_form" type="text" placeholder="Segundo Nombre" required>
                    <input name="Lastname" class="input_form" type="text" placeholder="Apellido" required>
                    <input name="Direction" class="input_form" type="text" placeholder="Dirección"  required>
                    <input name="Phone" class="input_form" type="text" placeholder="Telefono"  required>
                        <select name="City" id="" class="input_form"  required>
                            <option selected disabled>Ciudad</option>
                            <option value="Arauca">Arauca</option>   *
                            <option value="Armenia">Armenia</option>  *
                            <option value="Barranquilla">Barranquilla</option> *
                            <option value="Bogotá">Bogotá</option>   *
                            <option value="Bucaramanga">Bucaramanga</option>  *
                            <option value="Cali">Cali</option> *
                            <option value="Cartagena de Indias">Cartagena de Indias</option>  *
                            <option value="Cúcuta">Cúcuta</option>   *
                            <option value="Florencia">Florencia</option>    *
                            <option value="Ibague">Ibague</option>  *
                            <option value="leticia">leticia</option> *
                            <option value="Manizales">Manizales</option>   *
                            <option value="Medellín">Medellín</option>    *
                            <option value="Mitú">Mitú</option>    *
                            <option value="Mocoa">Mocoa</option>   *
                            <option value="Montería">Montería</option>    *
                            <option value="Neiva">Neiva</option>   *
                            <option value="Pasto">Pasto</option>   *
                            <option value="Pereira">Pereira</option> *
                            <option value="Popayán">Popayán</option> *
                            <option value="Puerto Carreño">Puerto Carreño</option>  *
                            <option value="Puerto Inírida">Puerto Inírida</option>  *
                            <option value="Quibdó">Quibdó</option>  *
                            <option value="Riohacha">Riohacha</option>    *
                            <option value="San Andrés">San Andrés</option>  *
                            <option value="San José del Guaviare">San José del Guaviare</option>   *
                            <option value="Santa Marta">Santa Marta</option> *
                            <option value="Sincelejo">Sincelejo</option>   *
                            <option value="Tunja">Tunja</option>   *
                            <option value="Valledupa">Valledupar</option>  *
                            <option value="Villavicencio">Villavicencio</option>   *
                            <option value="Yopal">Yopal</option>   *
                            
                        </select>
                    <div class="cont-btn">
                        <button class="btn-style color-1" type="submit">Registrar</button>
                    </div>
                   
               </form>
               <main class="cont-box-n">
                <header class="t_head">
                  <button class="btn-1">Documento</button>
                  <button class="btn-1">Nombre</button>
                  <button class="btn-1">Direccion</button>
                  <button class="btn-1">Telefono</button>
                  <button class="btn-1">Ciudad</button>
                </header>
                 <section class="cont-tabla">
                   <table class="table-1">
<?php  
$resultado = mysqli_query($conexion,$propietario);
        while($row =mysqli_fetch_array($resultado)){
?>
                   <tr>
                        <td class="td-1"><?php echo $row["id_propietario"] ?></td>
                        <td class="td-1"><?php echo $row["Nombre"] ?></td>
                        <td class="td-1"><?php echo $row["dir_propietario"] ?></td>
                        <td class="td-1"><?php echo $row["tel_propietario"] ?></td>
                        <td class="td-1"><?php echo $row["ciudad_propietario"] ?></td>
                    </tr> 
<?php   } mysqli_free_result($resultado);    ?> 
                   </table>
                 </section>
              </main>
            
            </section>   
</section>
    <script src="../logical_folder/logic.js"></script>
</body>

</html>