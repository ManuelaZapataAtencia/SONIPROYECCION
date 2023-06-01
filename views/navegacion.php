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
            <title>Pagina principal_Usuario</title>
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
                <li><a href="navegacion.php">Inicio</a></li>
                <!-- <li><a href="Buscar.php">Buscar Usuario</a></li> -->
                <!-- <li><a href="VistaEditar_usuario.php">Editar Usuario</a></li> -->
                <!-- <li><a href="#Contacto">Contacto</a></li> -->
                <li><a href="#Servicios">Servicios</a>
                  <ul class="submenu"> 
                  <li><a href="#Alquiler_equipos">Alquiler de equipos</a> 
                      <ul class="submenu2"> 
                        <li><a href="Producto_sonido.php">Sonido</a>
                          <!-- <ul class="submenu2">
                            <li>
                              <a href="#Cabinas_sonido">Cabinas de sonido</a>
                              <ul class="submenu3">
                                <li>
                                  <a href="#bafle_pequeno">Cabina de sonido de 100W</a>
                                </li>
                                <li> <a href="#cabina">Cabina de sonido de 300W </a>
                                </li>
                              </ul>
                            </li>
                            <li><a href="#Microfonos">Microfonos</a></li>
                            <li><a href="#Consolas">Consolas</a></li>
                          </ul> -->
                        </li>
                        <li><a href="Producto_proyectores.php">Proyectores</a></li>
                      </ul>
                    </li>
                    <!-- <li><a href="#Venta_equipos_Audiovisuales">Venta de equipos Audiovisuales</a>
                      <ul class="submenu2">
                        <li>
                          <a href="#Equipos_nuevos">Equipos nuevos</a>
                          <ul class="submenu2">
                            <li><a href="#Sonido">Sonido</a></li>
                            <li><a href="#Proyectores">Proyectores</a></li>
                          </ul>
                        </li>
                        <li>
                          <a href="#Equipos_Usados">Equipos usados</a>
                          <ul class="submenu2">
                            <li><a href="#Sonido">Sonido</a></li>
                            <li><a href="#Proyectores">Proyectores</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li> -->
                  </ul>
                </li>
                </li>
                
                <!-- <li><a href="#Cotizacion">Cotización</a></li> -->
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
