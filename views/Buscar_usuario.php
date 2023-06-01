<?php
require_once '../controllers/usercontroller.php';

?>

<html>
<head>
  <title>Buscar usuario</title>
  <link type="text/css" rel="stylesheet" href="css/buscarUsuario.css">
  <style>
        body{
            background-image: url("Img/Lld-proyector-destacada.jpg");
        }
    </style>

</head>

<body>
  <div class="container-form editar">
  <a href="Nav_Administrador.php"><button>Regresar</button></a>  
    <div class="mensaje"><h2>Datos del usuario: </h2></div>
      <form class="Buscar" action="../controllers/userController.php" method="POST">
        <?php
        session_start();

                echo "Tipo de documento: ",$_SESSION["Tipo_Documento"], "<br>";
                echo "Numero de identificación: ", $_SESSION["Cedula"],"<br>";
                echo "Nombre: ", $_SESSION["nombre"] , "<br>";
                echo "Apellidos: ", $_SESSION["Apellidos"] , "<br>";
                echo "Telefono: ", $_SESSION["Telefono"] , "<br>";
                echo "Direccion: ",  $_SESSION["Direccion"] , "<br>"; 
                echo "Email: ", $_SESSION["Email"] , "<br>";  
              

            exit;
       
        ?>
      </form>
  </div> 
</body>

</html>
