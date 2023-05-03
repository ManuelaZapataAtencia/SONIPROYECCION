<?php
require_once '../models/db.php';
$numero_identificacion = $_POST['numero_identificacion'];?>
<!DOCTYPE html>
<html lang="en">
    <meta charset="utf-8">
    <body>
        <form class="Buscar" action="sesion.php" method="POST">
            <input type="text" name="numero_identificacion" placeholder="Número de identificación" required="true">
            <input type="submit" value="BUSCAR">
        </form>
                
        <script src="guardar.php"></script>
    </body>
</html>
<?php


require_once '../controllers/userController.php';



$sql = "SELECT Cedula, Tipo_Documento, Nombre, Apellidos, Telefono, Direccion, Email FROM usuarios WHERE Email = '".$email."' and Pass = '".$pass."'";
$result = Database::connect()->query($sql);

if (mysqli_num_rows($result) > 0) {
    while($fila = mysqli_fetch_array( $result ) ){
        session_start();
        $_SESSION["usuarios"] = $fila['Nombre']." " .$fila['Apellidos'];
        ?>
        <a href="segundo.php">Segundo!</a><?php
        
    }
        
    exit;
} else {
    echo "Usuario NO existe, por favor verifique los datos"; 
    exit;
}
?>
    <!--<!Doctype html>
        <html leng="es">
        
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link type="text/css" rel="stylesheet" href="Estilo.css">
            <title>Registro - SONIPROYECCION</title>
            <link href="Index.php" rel="stylesheet">
        </head>

        <body>
                <form class="formulario" action="Index.php" method="POST">

        </body>

    </html>
<?php
session_start();
    // Establecer tiempo de vida de la sesión en segundos
    $inactividad = 300;
    // Comprobar si $_SESSION["timeout"] está establecida
    if(isset($_SESSION["timeout"])){
        // Calcular el tiempo de vida de la sesión (TTL = Time To Live)
        $sessionTTL = time() - $_SESSION["timeout"];
        if($sessionTTL > $inactividad){
            session_destroy();
            header("Location: /soni");
        }
    }
    // El siguiente key se crea cuando se inicia sesión
    $_SESSION["timeout"] = time();

?>