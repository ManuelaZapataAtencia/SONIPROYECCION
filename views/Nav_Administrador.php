<?php
require_once '../controllers/usercontroller.php';



?>

<!DOCTYPE html>
<html lang="en">
   <head>
    <meta charset="utf-8">
        <link type="text/css" rel="stylesheet" href="css/EstiloNav.css">
        <link type="text/css" href="../guardar.php" rel="stylesheet">
        <link type="text/php" href="indexReg.php" rel="stylesheet">
            <title>Pagina principal_Administrador</title>
            <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,700;1,600&family=Raleway:wght@700&family=Syne:wght@600&display=swap" rel="stylesheet">
        <style>
            body{
                background-image: url("Img/Lld-proyector-destacada.jpg");
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                background-attachment: fixed;
            }

        </style>
 
    </head>

    <body>
        <header>
            <nav>
              <h1 class="logo">SONIPROYECCION</h1>
              <ul class="menu">
                    <li><a href="#Inicio">Inicio</a></li>
                    <li><a href="#Usuario">Usuario</a>
                        <ul class="submenu">
                            <li><a href="Buscar.php">Buscar Usuario</a></li>
                            <li><a href="VistaEditar_usuario.php">Editar Usuario</a></li>
                        </ul>
                    </li>
                    <a href="../cerrar_sesion.php">cerrar sesion</a>
                    <h2>
                    <strong>
                        <?php 
                        session_start();
                        echo  $_SESSION["usuarios"] ;
                        ?>
                    </strong>
                   </h2> 
                </ul>
            </nav>
          </header>

          <script src="../guardar.php"></script>
        
    </body>

 
</html>
