<!Doctype html>
<html leng="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/EstiloInd.css">
    <title>Registro - SONIPROYECCION</title>
    <link href="registro_usuario.php" rel="stylesheet">
    <link href="prueba.php" rel="stylesheet">
    <link href="Buscar.html" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,700;1,600&family=Raleway:wght@700&family=Syne:wght@600&display=swap" rel="stylesheet">

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


    <div class="container-form sign-up">
        <div class="welcome-back">
            <div class="mensaje">
                <h1>Bienvenido a SONIPROYECCION</h1>
                <p>Si ya tienes cuenta, por favor inicia sesión aquí</p>
                <button class="sign-up-btn">Iniciar Sesión</button>
            </div>
        </div>
        <form class="formulario" action="registro_usuario.php" method="POST">
            <form class="formulario" action="Buscar_usuario.php" method="POST">
                <form class="formulario" action="Editar_usuario.php" method="POST">
                    <h2 class="create-account">Crea una cuenta de usuario</h2>
                    <input type="text" name="nombre" placeholder="Ingrese su Nombre" required="true">
                    <input type="text" name="lastname" placeholder="Ingrese su Apellido" required="true">

                    <label name="tipo_documento"></label>
                    <select name="op1">
                        <option value="Cedula">Cedula de Ciudadanía</option> &nbsp;
                        <option value="Tarjeta_identidad">Tarjeta de Identidad</option> &nbsp;
                        <option value="Pasaporte">Pasaporte</option> &nbsp;
                    </select>
                    </br>
                    <input type="text" name="numero_identificacion" placeholder="Número de identificación" required="true">
                    <input type="int" name="phone" placeholder="Ingrese su número de Teléfono" required="true">
                    <input type="text" name="Direccion" placeholder="Direccion de residencia" required="true">
                    <input type="email" name="email" placeholder="Correo electrónico" required="true">
                    <input type="password" name="pass" placeholder="Ingrese una Contraseña" required="true">

                    <input type="submit" value="Registrarse">
                    </br>
                </form>
            </form>
        </form>
    </div>
    <div class="container-form sign-in">
        <form class="formulario" action="prueba.php" method="POST">
            <h2 class="create-account">Iniciar sesión</h2>
            <label name="email">Correo:</label>
            <input type="email" placeholder="Correo electrónico" name="email" id="email" required="true">
            <label for="password">Contraseña:</label>
            <input type="password" placeholder="Ingrese una Contraseña" name="pass" id="password" required="true">
            <input type="submit" value="Inicia sesión">
        </form>

        <div class="welcome-back">
            <div class="mensaje">
                <h1>Bienvenido a SONIPROYECCION</h1>
                <p>Si aún no tienes cuenta, por favor registrate aquí</p>
                <button class="sign-in-btn">Registrarse</button>
            </div>
        </div>
    </div>

    <script src="Registro.js"></script>
</body>

    <footer id="footer">
        <p>Creado por SONIPROYECCION &copy;<?=date('Y')?></p>
    </footer>

</html>

<?php

?>
