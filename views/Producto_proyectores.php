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
          <div class="productos_proyector">
            <div class="row1 center-xs">
              <div class="col-xs-10 col-sm-6 col-md-4 producto "> 
                <div class="card">
                    <img src="../views/Img/02-proyector-m1minuplus-ultra-portable-blanco-side.jpg" alt="Proyector miniplus">
                    <h3>Proyector miniplus</h3>
                    <p>$200.000</p>
                </div>
              </div> 
              <div class="col-xs-10 col-sm-6 col-md-4 producto"> 
                <div class="card">
                    <img src="../views/Img/Proyector LCD-1920x5000.jpg" alt="Proyector LCD">
                    <h3>Proyector LCD</h3>
                    <p>$150.000</p>
                </div>
              </div> 
            </div>
            <div class="row2 center-xs">
              <div class="col-xs-10 col-sm-6 col-md-4 producto"> 
                <div class="card">
                    <img src="../views/Img/Proyector LSP3B Samsung.jpg" alt="Proyector LSP3B ">
                    <h3>Proyector LSP3B Samsung</h3>
                    <p>$500.000</p>
                </div>
              </div> 
              <div class="col-xs-10 col-sm-6 col-md-4 producto"> 
                <div class="card">
                    <img src="../views/Img/proyector-laser-epson-eh-ls1200b.jpg" alt="Proyector-laser-epson">
                    <h3>Proyector laser EPSON</h3>
                    <p>$250.000</p>
                </div>  
              </div>  
            </div>  
            <div class="row3 center-xs">
              <div class="col-xs-10 col-sm-6 col-md-4 producto"> 
                <div class="card">
                    <img src="../views/Img/Acer-X1228I.jpg" alt="Acer-X1228I">
                    <h3>Proyector Acer-X1228I</h3>
                    <p>$300.000</p>
                </div>
              </div> 
              <div class="col-xs-10 col-sm-6 col-md-4 producto"> 
                <div class="card">
                    <img src="../views/Img/MINI_PROYECTOR LED.jpg" alt="MINI_PROYECTOR LED">
                    <h3>Mini Proyector LED</h3>
                    <p>$100.000</p>
                </div>  
              </div>  
            </div>  
          </div>
          <script src="../guardar.php"></script>
        
    </body>

</html>
