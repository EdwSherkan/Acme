<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./js/logic.js">
    <link rel="shortcut icon" href="./imagenes/favicon.ico" type="image/x-icon">
</head>

<body>

    <!--contenedor del encabezado-->
    <header class="cont_head">
        <div class="cont_logo">
            <img src="./imagenes/logo.png" alt="">
        </div>
        <div class="cont_titulo">
            <h1>Vehicle History Administration</h1>
        </div>
        <nav class="cont_login">
            <button title="Home">
                <a href="index.html"><img src="./imagenes/home (2).png" alt=""></a></button>
        </nav>
    </header>

    <!--contenedor inicial-->
    <section class="cont_inicial2">
        <header class="cont_menu2">
            <div class="menu">
                <button class="btn_menu"><img src="./imagenes/menu.png" alt=""></button>
                <div class="cont_btns">
                    <button><a href="./admin/admin_vehiculos.php">
                        <img class="img_btn" src="./imagenes/favicon.ico" alt="">Admin. Vehículos</a>
                    </button>
                    <button><a href="./admin/admin_propietarios.php">
                        <img class="img_btn" src="./imagenes/usuarios.png" alt="">Admin. Propietarios</a>
                    </button>
                    <button><a href="./admin/admin_conductores.php">
                        <img class="img_btn" src="./imagenes/driver.png" alt="">Admin. Conductores</a>
                    </button>
                    <button><a href="./admin/admin_usuarios.php">
                        <img class="img_btn" src="./imagenes/user_1.png" alt="">Admin. Usuarios</a>
                    </button>
                    <button><a href="./informes/informes.php">
                            <img class="img_btn" src="./imagenes/pdf.png" alt="">Informes</a>
                        </button>
                </div>
            </div>
            
        </header>
    </section>
    <script src="../logical_folder/logic.js"></script>
</body>

</html>