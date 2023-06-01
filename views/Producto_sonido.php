
<!DOCTYPE html>
<html lang="en">
   <head>
    <meta charset="utf-8">
        <link type="text/css" rel="stylesheet" href="css/EstiloNav.css">
        <link type="text/css" rel="stylesheet" href="css/Productos.css">
        <link type="text/css" href="../guardar.php" rel="stylesheet">
        <link type="text/php" href="navegacion.php" rel="stylesheet">
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
                <li><a href="#Servicios">Servicios</a>
                  <ul class="submenu"> 
                  <li><a href="#Alquiler_equipos">Alquiler de equipos</a> 
                      <ul class="submenu2"> 
                        <li><a href="Producto_sonido.php">Sonido</a>
                        </li>
                        <li><a href="Producto_proyectores.php">Proyectores</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
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
          <div class="productos_sonido">
            <div class="row1 center-xs">
              <div class="col-xs-10 col-sm-6 col-md-4 producto "> 
                <div class="card">
                    <img src="../views/Img/ALTAVOZ INALAMBRICO SONY SRSXB13B.CE7.jpg" alt="Bafle pequeño 1">
                    <h3>Altavoz inalambrico SONY</h3>
                    <p>$100.000</p>
                </div>
              </div> 
              <div class="col-xs-10 col-sm-6 col-md-4 producto "> 
                <div class="card">
                    <img src="../views/Img/Mini parlante.jpg" alt="Mini parlante">
                    <h3>Mini parlante</h3>
                    <p>$50.000</p>
                </div>
              </div> 
            </div>
            <div class="row2 center-xs">
              <div class="col-xs-10 col-sm-6 col-md-4 producto "> 
                <div class="card">
                    <img src="../views/Img/Parlante Indigo Party Move Luz Led FG206-07.jpg" alt="Parlante Indigo Party">
                    <h3>Parlante Indigo Party</h3>
                    <p>$600.000</p>
                </div>
              </div> 
              <div class="col-xs-10 col-sm-6 col-md-4 producto "> 
                <div class="card">
                    <img src="../views/Img/Parlante X-View.jpg" alt="Parlante X-View">
                    <h3>Parlante X-View</h3>
                    <p>$290.000</p>
                </div>  
              </div>  
            </div>  
            <div class="row3 center-xs">
              <div class="col-xs-10 col-sm-6 col-md-4 producto "> 
                <div class="card">
                    <img src="../views/Img/t-parlante-portable-street61-c7fe4ed148db2f1dce16146935188902-640-0.jpg" alt="parlante-portable-street61">
                    <h3>Parlante portable street61 </h3>
                    <p>$500.000</p>
                </div>
              </div> 
              <div class="col-xs-10 col-sm-6 col-md-4 producto "> 
                <div class="card">
                    <img src="../views/Img/AIWA Parlante Portátil Recargable 1000W.jpg" alt="Parlante Portátil Recargable 1000W">
                    <h3>Parlante con microfono</h3>
                    <p>$155.000</p>
                </div>  
              </div>  
            </div>  
          </div>
          <script src="../guardar.php"></script>
        
    </body>

</html>
