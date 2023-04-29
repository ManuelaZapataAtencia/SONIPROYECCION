<?php
require_once 'db.php';


$nombre = $_POST['nombre'];
$lastname = $_POST['lastname'];
$tipo_documento = $_POST['op1'];
$numero_identificacion = $_POST['numero_identificacion'];
$phone = $_POST['phone'];
$Direccion = $_POST['Direccion'];
$email = $_POST['email'];
$pass = $_POST['pass'];

$sql = "UPDATE usuarios SET Tipo_Documento = '$tipo_documento', Nombre = '$nombre', Apellidos = '$lastname', Telefono='$phone', Direccion='$Direccion', Email='$email', Pass='$pass' WHERE Cedula = '$numero_identificacion'";

$ejecutar = Database::connect()->query($sql);

   if ($ejecutar) {
      echo "hola".$id;
      echo ' 
            <script>
               alert("Usuario almacenado");
               window.location = "../soni/navegacion.html"
            </script>
            ';
   }
   else {
      echo '
         <script>
            alert("Usuario no almacenado, intentelo nuevamente");
            window.location = "../soni"
         </script>
         ';
   }
mysqli_close(Database::connect());
?>