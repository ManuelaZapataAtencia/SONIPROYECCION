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
$sql = "insert into usuarios (Cedula, Tipo_Documento, Nombre, Apellidos, Telefono, Direccion, Email , Pass)
          values('".$numero_identificacion."', '".$tipo_documento."', '".$nombre."', '".$lastname."', '".$phone."', '".$Direccion."','".$email."','".$pass."')";
$ejecutar = Database::connect()->query($sql);
if ($ejecutar) {
   echo '
           <script>
              alert("Usuario almacenado");
              window.location = "../soni/navegacion.html"
           </script>
           ';
} else {
   echo '
      <script>
         alert("Usuario no almacenado, intentelo nuevamente");
         window.location = "../soni"
      </script>
      ';
}
mysqli_close(Database::connect());

