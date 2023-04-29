
<?php
require_once 'db.php';

$numero_identificacion = $_POST['numero_identificacion'];

$sql = "SELECT Cedula, Tipo_Documento, Nombre, Apellidos, Telefono, Direccion, Email FROM usuarios WHERE Cedula = '".$numero_identificacion."'";
$result = Database::connect()->query($sql);

if (mysqli_num_rows($result) > 0) {
    while($fila = mysqli_fetch_array( $result ) ){
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