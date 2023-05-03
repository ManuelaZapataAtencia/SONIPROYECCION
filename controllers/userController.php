<?php

require_once '../models/userManage.php';


class UserController{
    private $conexion;

    public function ___construct()
    {
        $this->conexion = Database::connect();
        mysqli_close($this->conexion);
    }

    public function Index()
    {
        require_once 'views/layout/header.php';
        require_once 'views/Index.php';
        require_once 'views/navegacion.php';
        require_once 'views/navegacion.php';
        require_once 'views/layout/footer.php';
        
    }

    public function register(){
        $user = new userManage();
            $user->setNumeroIdentificacion($_POST['$numero_identificacion']);
            $user->setTipoDocumento($_POST['$tipo_documento']);
            $user->setNombre($_POST['nombre']);
            $user->setApellidos($_POST['lastname']);
            $user->setPhone($_POST['phone']);
            $user->setDireccion($_POST['Direccion']);
            $user->setEmail($_POST['email']);
            $user->setPassword($_POST['pass']);

            $ejecutarReg = $user->register();

        if ($ejecutarReg) {
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

    }

    public function edit(){
        $numero_identificacion = $_REQUEST['numero_identificacion'];
        $ejecutarEdit = "SELECT Cedula, Tipo_Documento, Nombre, Apellidos, Telefono, Direccion, Email, Pass 
        FROM usuarios WHERE Cedula = '".$numero_identificacion."'";

        if (isset($_POST)) {
            $user = new userManage();
            $user->setNumeroIdentificacion($_POST['$numero_identificacion']);
            $user->setTipoDocumento($_POST['$tipo_documento']);
            $user->setNombre($_POST['nombre']);
            $user->setApellidos($_POST['lastname']);
            $user->setPhone($_POST['phone']);
            $user->setDireccion($_POST['Direccion']);
            $user->setEmail($_POST['email']);
            $user->setPassword($_POST['pass']);

            $ejecutarEdit = $user->edit();

            if ($ejecutarEdit && is_object($ejecutarEdit)) {
                $_SESSION['ejecutarEdit']=$ejecutarEdit;
               
            }
            if ($ejecutarEdit) {
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
        }
       
    }

    public function login(){ 
        if (isset($_POST)) {
            $user = new userManage();
            $user->setEmail($_POST['email']);
            $user->setPassword($_POST['pass']);

             $ejecutarLogin = $user->login();

            
        }
        if (mysqli_num_rows($ejecutarLogin) > 0) {
            
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
        
    }

    public function find(){
        $user = new userManage();
        $user->setNumeroIdentificacion($_POST['numero_identificacion']);
        $user->setTipoDocumento($_POST['tipo_documento']);
        $user->setNombre($_POST['nombre']);
        $user->setApellidos($_POST['lastname']);
        $user->setPhone($_POST['phone']);
        $user->setDireccion($_POST['Direccion']);
        $user->setEmail($_POST['email']);
        $user->setPassword($_POST['pass']);
        $EjecutarFind = $user->find();
        return $EjecutarFind;
        
    }

}

?>