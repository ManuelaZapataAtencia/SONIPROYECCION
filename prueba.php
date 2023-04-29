<?php
require_once 'db.php';
  $email = $_POST['email'];
  $pass = $_POST['pass'];

 
$sql = "SELECT email , pass FROM usuarios WHERE email = '".$email."' and pass = '".$pass."'";
$result = Database::connect()->query($sql);


if (mysqli_num_rows($result) > 0) {
    $_SESSION['nombre'] = $email; 
    echo '
        <script>
             window.location = "../soni/navegacion.html";
        </script>';
    exit;
} else {
    echo '
        <script>
             alert("Usuario NO existe, por favor verifique los datos");
             window.location = "../soni";
        </script>';
    exit;
}
Database::connect()->close();
?>