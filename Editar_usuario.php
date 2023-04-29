<?php
require_once 'db.php';
$numero_identificacion = $_POST['numero_identificacion'];

$sql = "SELECT Cedula, Tipo_Documento, Nombre, Apellidos, Telefono, Direccion, Email, Pass FROM usuarios WHERE Cedula = '".$numero_identificacion."'";
$result = Database::connect()->query($sql);


if (mysqli_num_rows($result) > 0) {
    while($fila = mysqli_fetch_array( $result ) ){?>

        <!Doctype html>
        <html leng="es">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link type="text/css" rel="stylesheet" href="css/Estilo.css" /> 
            <link type="text/css" rel="stylesheet" href="css/EstiloInd.css" /> 
            <title>Editar usuario - SONIPROYECCION</title>
            <link href="Editar.php" rel="stylesheet">
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
            h2{
                font-family: 'Montserrat', sans-serif;
                color: white;
                text-align: center;
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
<?php

    }
        
    exit;
} else {
    echo "Usuario NO existe, por favor verifique los datos"; 
    exit;
}

mysqli_close(Database::connect()); ?>