<?php
require_once '../controllers/usercontroller.php';
?>
<!Doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/Estilo.css" /> 
    <title>Buscar Usuario</title>
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
    <div>
        <div class="mensaje-buscarUser">
          <h1>¿Quieres buscar un usuario?</h1>
          <p>Para buscar un Usuario, ingresa su número de identificación.</p>
        </div>
      <form class="Buscar" action="../controllers/userController.php" method="POST">
        <input type="text" name="numero_identificacion" placeholder="Número de identificación"/>
        <input type="hidden" name="action" value="find" />
        <input type="submit" value="BUSCAR" name="buscar"/>
      </form>
    </div>
    
    <script src="../guardar.php"></script>
   
  </body>
</html>


