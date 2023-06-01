<?php
require_once '../controllers/usercontroller.php';
?>

<!DOCTYPE html>
<html lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/Estilo.css" /> 
    <title>Editar Usuario</title>
    <style>
       body {
        background-image: url("Img/Lld-proyector-destacada.jpg");
       }
        
    </style>
    <body>
        <div>
            <div class="mensaje-EditarUser">
              <h1>¿Quieres Editar un usuario?</h1>
              <p>Para buscar al usuario que deseas editar, ingresa su número de identificación.</p>
            </div>
            <form class="Buscar" action="../controllers/userController.php" method="POST">
                <input type="text" name="numero_identificacion" placeholder="Número de identificación" />
                <input type="hidden" name="action" value="find_edit" />
                <input type="submit" value="BUSCAR" name="buscar"/>
            </form>
        </div>

        <script src="../guardar.php"></script>
    </body>
</html>
