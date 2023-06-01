<?php
require_once '../controllers/userController.php';
?>
<!Doctype html>
<html leng="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/EstiloInd.css">
    <title>Registro - SONIPROYECCION</title>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,700;1,600&family=Raleway:wght@700&family=Syne:wght@600&display=swap" rel="stylesheet">
    <style>
        body{
            background-image: url("Img/Lld-proyector-destacada.jpg");
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
        <form class="formulario" action="../controllers/userController.php" method="POST">
                <h2 class="create-account">Crea una cuenta de usuario</h2>
                <input type="text" name="nombre" placeholder="Ingrese su Nombre" required="true">
                <input type="text" name="lastname" placeholder="Ingrese su Apellido" required="true">

                <label for="tipo_documento"></label>
                <select name="tipo_documento">
                    <option value="Cedula">Cedula de Ciudadanía</option> &nbsp;
                    <option value="Tarjeta_identidad">Tarjeta de Identidad</option> &nbsp;
                    <option value="Pasaporte">Pasaporte</option> &nbsp;
                </select>
                </br>
                <input type="text" name="numero_identificacion" placeholder="Número de identificación" required="true">
                <input type="int" name="phone" placeholder="Ingrese su número de Teléfono" required="true">
                <input type="text" name="Direccion" placeholder="Direccion de residencia" required="true">
                <input type="email" name="email" placeholder="Correo electrónico" required="true">                
                <input type="password" name="pass" placeholder="Ingrese una Contraseña" required="true"  id="password">
                <label for="mostrar">Mostrar Contraseña</label><input type="checkbox" class="mostrar" id="mostrar" onclick="mostrarContrasena()">
                <input type="hidden" name="action" value="register"/>
                <input type="submit" onclick="validarPassword()" class="btn-submit" value="Registrar">
                </br>
                
        </form>
    </div>
    <div class="container-form sign-in">
        <form class="formulario" action="../controllers/userController.php" method="POST">
            <h2 class="create-account">Iniciar sesión</h2>
            <label name="email">Correo:</label>
            <input type="email" placeholder="Correo electrónico" name="email" id="email" required="true">
            <label for="password">Contraseña:</label>
            <input type="password" placeholder="Ingrese una Contraseña" name="pass" id="password_login" required="true">
            <label for="mostrar">Mostrar Contraseña</label><input type="checkbox" class="mostrar" id="mostrar" onclick="mostrarContrasena('password_login')">
            <input type="hidden" name="action" value="login" />
            <input type="submit" onclick="validarPassword()" class="btn-submit" value="Inicia sesión">
        </form>

        <div class="welcome-back">
            <div class="mensaje">
                <h1>Bienvenido a SONIPROYECCION</h1>
                <p>Si aún no tienes cuenta, por favor registrate aquí</p>
                <button class="sign-in-btn">Registrarse</button>
            </div>
        </div>
    </div>

    <script src="../Registro.js"></script>
    <script>
        function validarPassword(password){
        const segura = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;

            if (password.value.match(segura)) {
                alert("La contraseña es segura")
            }else{
                alert("La contraseña debe tener:  \nMinimo un carácter especial. \nMinimo una mayúscula. \nMinimo una minúscula. \nNumeros. ")  
            }
        }   

    </script>
    
   
</body>

</html>