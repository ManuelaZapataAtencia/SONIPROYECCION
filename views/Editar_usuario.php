<?php
require_once '../controllers/usercontroller.php';
require_once 'inactividad.php';
?>

    <!Doctype html>
        <html leng="es">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link type="text/css" rel="stylesheet" href="css/Estilo.css" /> 
            <link type="text/css" rel="stylesheet" href="css/EstiloInd.css" /> 
            <title>Editar usuario - SONIPROYECCION</title>
            <style>
            body {
                background-image: url("Img/Lld-proyector-destacada.jpg");
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                background-attachment: fixed;
                height: 180vh;
                display: flex;
                align-items: center;
                justify-content: center;
            } 
          
            </style>
        </head>

        <body>
                <form class="formulario" action="Editar.php" method="POST">
                    <h2 class="create-account">Editar una cuenta de usuario</h2>
                    <input value= <?php echo $fila['Nombre'] ?> type="text" name="nombre" placeholder="Ingrese su Nombre" required="true">
                    <input value= <?php echo $fila['Apellidos'] ?> type="text" name="lastname" placeholder="Ingrese su Apellido" required="true">

                    <label name="tipo_documento"></label>
                    <select name="op1">
                        <option value="Cedula">Cedula de Ciudadanía</option> &nbsp;
                        <option value="Tarjeta_identidad">Tarjeta de Identidad</option> &nbsp;
                        <option value="Pasaporte">Pasaporte</option> &nbsp;
                    </select>
                    </br>
                    </br>
                    <input value= <?php echo $fila['Cedula'] ?> type="text" name="numero_identificacion" placeholder="Número de identificación">
                    <input value= <?php echo $fila['Telefono'] ?> type="int" name="phone" placeholder="Ingrese su número de Teléfono" required="true">
                    <input value= <?php echo $fila['Direccion'] ?> type="text" name="Direccion" placeholder="Direccion de residencia" required="true">
                    <input value= <?php echo $fila['Email'] ?> type="email" name="email" placeholder="Correo electrónico" required="true">
                    <input value= <?php echo $fila['Pass'] ?> type="password" name="pass" placeholder="Ingrese una Contraseña" required="true">

                    <input type="submit" value="Modificar Registro">
                    </br>
                </form>
            </div>

            <script src="Registro.js"></script>
            
        </body>

        </html>


