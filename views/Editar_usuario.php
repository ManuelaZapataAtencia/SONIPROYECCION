<?php
require_once '../controllers/usercontroller.php';
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
                <form class="formulario" action="../controllers/usercontroller.php" method="POST">
                    <h2 class="create-account">Editar una cuenta de usuario</h2>
                    <?php
                    session_start(); ?>
                    <input value= <?php echo $_SESSION["Nombre"] ?> type="text" name="nombre" placeholder="Ingrese su Nombre" required="true">
                    <input value= <?php echo $_SESSION["Apellidos"] ?> type="text" name="lastname" placeholder="Ingrese su Apellido" required="true">

                    <label for="tipo_documento"></label>
                    <select name="tipo_documento">
                        <option value="Cedula">Cedula de Ciudadanía</option> &nbsp;
                        <option value="Tarjeta_identidad">Tarjeta de Identidad</option> &nbsp;
                        <option value="Pasaporte">Pasaporte</option> &nbsp;
                    </select>
                    </br>
                    </br>
                    <input value="<?php echo $_SESSION["Cedula"] ?>" type="text" name="cedula" placeholder="Número de identificación" disabled>
                    <input type="hidden" value="<?php echo $_SESSION["Cedula"] ?>" type="text" name="numero_identificacion" placeholder="Número de identificación">
                    <input value="<?php echo $_SESSION["Telefono"] ?>" type="int" name="phone" placeholder="Ingrese su número de Teléfono" required="true">
                    <input value="<?php echo $_SESSION["Direccion"] ?>" type="text" name="Direccion" placeholder="Direccion de residencia" required="true">
                    <input value="<?php echo $_SESSION["Email"] ?>" type="email" name="email" placeholder="Correo electrónico" required="true">
                    <input value="<?php echo $_SESSION["Pass"]  ?>" type="password" name="pass" id="password" placeholder="Ingrese una Contraseña" required="true">
                    <label for="mostrar">Mostrar Contraseña</label><input type="checkbox" class="mostrar" id="mostrar" onclick="mostrarContrasena()">
                    <input type="hidden" name="action" value="edit" />
                    <input type="submit">
                    </br>
                </form>
            </div>

            <script src="../Registro.js"></script>
            
        </body>

        </html>


