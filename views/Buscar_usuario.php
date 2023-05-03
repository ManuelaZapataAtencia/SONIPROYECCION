<?php
require_once '../controllers/usercontroller.php';
require_once 'layout/header.php';
?>

<html>
<head>
  
</head>

<body>
  <div class="container-form editar">
  <a href="Buscar.html"><button>Regresar</button></a>  
    <div class="mensaje"><h2>Datos del usuario: </h2></div>
      <form class="Buscar" action="controllers/usercontroller.php" method="POST">
        <?php
         require_once 'controllers/usercontroller.php';
          if (mysqli_num_rows($sqlFind) > 0) {
            while($fila = mysqli_fetch_array($sqlFind) ){
                echo "Tipo de documento: ",$fila['Tipo_Documento'], "<br>";
                echo "Numero de identificación: ", $fila['Cedula'],"<br>";
                echo "Nombre: ", $fila['Nombre'], "<br>";
                echo "Apellidos: ", $fila['Apellidos'], "<br>";
                echo "Telefono: ", $fila['Telefono'], "<br>";
                echo "Direccion: ", $fila['Direccion'], "<br>";
                echo "Email: ", $fila['Email'], "<br>";
              }

            exit;
        } else {
            echo "Usuario NO existe, por favor verifique los datos"; 
            exit;
        }
        
        ?>
      </form>
  </div> 
</body>

</html>
