<?php
require_once '../controllers/usercontroller.php';
require_once 'layout/header.php';
?>

<html>
<head>
    <style>
        body {
            background-image: url("Img/Lld-proyector-destacada.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            height: 255vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        div {
          margin: auto;
          margin-right: 0;
          margin-left: 0;
          margin-top: 0;
          position: static;
          text-align: center;
          padding: 10px;
          color: #0339a6;
          display: block;
          max-width: 600px;
      
      }
        .mensaje h2 {
          font-family: 'Montserrat', sans-serif;
          font-size: 45px;
          font-weight:bold;
          color:#f34949;
        }

        .container-form{
          font-family: 'Raleway', sans-serif;
          font-size: 25px;
          text-align: left;
          font-weight:bold; 
          color: #000;
          width: 700px;
          height: 95vh;
          margin: auto;
          margin-right: 0;
          margin-left: 0;
          margin-top: 0;
          padding: 10px;
          background-color: #ffffffae;
        }
        
        button{
          text-align: left;
          font-family: 'Raleway', sans-serif;
          font-size: 25px;
          font-weight:bold;
          padding: 8px;
          font-size: 400;
          background-color:#f34949;
          border-radius: 5px;
          border: none;
          outline: none;
          cursor: pointer;
          font-size: .9rem;
          margin-top: 0px;
          transition: all .2s ease-in;
          color: #fff;
          
        }
        button:hover{
          background-color: #fb6565d3;
          color:#000;
        }
        
    </style>
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
