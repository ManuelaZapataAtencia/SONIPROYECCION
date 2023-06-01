<?php

require_once '../models/userManage.php';

class UserController{
    private $error_pass;
    private $error_email;

    public function getErrorPass()
    {
        return $this->error_pass;
    }

    public function setErrorPass($error_pass)
    {
        $this->error_pass = $error_pass;
    }

    public function getErrorEmail()
    {
        return $this->error_email;
    }

    public function setErrorEmail($error_email)
    {
        $this->error_email = $error_email;
    }

    function load_current_user() {
        $user = new userManage();
        $user->setNumeroIdentificacion($_POST['numero_identificacion']);
        $user->setTipoDocumento($_POST['tipo_documento']);
        $user->setNombre($_POST['nombre']);
        $user->setApellidos($_POST['lastname']);
        $user->setPhone($_POST['phone']);
        $user->setDireccion($_POST['Direccion']);
        $user->setEmail($_POST['email']);
        $user->setPassword($_POST['pass']);

        return $user;

    }

    function concat_user_data($user){
        $_SESSION["usuarios"] = $user -> getNombre()." ".$user -> getApellidos();
    }

    function validar_email($email){

        if(preg_match('`@`', $email)){
            $separador = "@";
            $separada = explode($separador, $email);
            $lenEmail = strlen($separada[1]);

            if($lenEmail<5){
                $this->setErrorEmail("Error, email debe tener un dominio con mas de 5 caracteres: ".$lenEmail);
                return false;
            }
            $error_email = "";
            return true;
        }
        else{
            $this->setErrorEmail("Error, correo no válido");
            return false;
        }
        
    }

    function validar_pass($pass){
       
        if(strlen($pass) < 8){
           //$error_pass = "La clave debe tener al menos 8 caracteres";
           $this->setErrorPass("La clave debe tener al menos 8 caracteres");
           return false;
        }
        //$pattern = '/^[\s\-\_\@\#\$\%\&\+\*\=\[\]\{\}\(\)\<\>\?\!\;\:\.\,\/\|\^\~\`\"]$/';
        //$p="+*-_!#$%&/()=?¡¿'´{}][.,;:^<>°|¬";
        $p="+,*,-,_";
        if(!preg_match($p, $pass)){
          // $error_pass = "La clave debe contener al menos un caracter especial";
           $this->setErrorPass("La clave debe contener al menos un caracter especial");
           return false;
        }
        if (!preg_match('`[a-z]`',$pass)){
         //  $error_pass = "La clave debe tener al menos una letra minúscula";
           $this->setErrorPass("La clave debe tener al menos una letra minúscula");
           return false;
        }
        if (!preg_match('`[A-Z]`',$pass)){
          // $error_pass = "La clave debe tener al menos una letra mayúscula";
           $this->setErrorPass("La clave debe tener al menos una letra mayúscula");
           return false;
        }
        if (!preg_match('`[0-9]`',$pass)){
          // $error_pass = "La clave debe tener al menos un caracter numérico";
           $this->setErrorPass("La clave debe tener al menos un caracter numérico");
           return false;
        }
        $error_pass = "";
        return true;
     }
    public function register(){


            $numero_identificacion = isset($_POST['numero_identificacion']) ? $_POST['numero_identificacion']: false;
            $tipo_documento = isset($_POST['tipo_documento']) ? $_POST['tipo_documento']: false;
            $nombre = isset($_POST['nombre']) ? $_POST['nombre']: false;
            $lastname = isset($_POST['lastname']) ? $_POST['lastname']: false;
            $phone  = isset($_POST['phone']) ? $_POST['phone']: false;
            $Direccion   = isset($_POST['Direccion']) ? $_POST['Direccion']: false;
            $email  = isset($_POST['email']) ? $_POST['email']: false;
            $pass = isset($_POST['pass']) ? $_POST['pass']: false;

            $IsValidEmail = $this-> validar_email($email);
            $IsValid = $this-> validar_pass($pass);
            
            if ($IsValidEmail==false){
                echo '
                                    <script>
                                        alert("error: '.$this->getErrorEmail().'"); 
                                        window.location = "../views/indexReg.php"
                                        </script>
                                    ';
            }

            if ($IsValid==false){
                echo '
                                    <script>
                                        alert("error: '.$this->getErrorPass().'"); 
                                        window.location = "../views/indexReg.php"
                                        </script>
                                    ';
            } //
                else{

                

                    if ($numero_identificacion && $tipo_documento && $nombre && $lastname  
                    && $phone && $Direccion  &&  $email && $pass ) {
                        $user =  $this -> load_current_user();
                        
                        $ejecutarReg = $user->register();
        
                        if ($ejecutarReg) {
                            echo '
                                    <script>
                                        alert("Usuario almacenado");
                                        window.location = "../views/indexReg.php"
                                    </script>
                                    ';
                                        exit;
                            } else {
                            echo '
                                <script>
                                    alert("Usuario no almacenado, intentelo nuevamente");
                                    window.location = "../views/indexReg.php"
                                </script>
                                ';
                                exit;
                        }
                }
            }
    }
    public function find_edit(){
        session_start();
      
        $numero_identificacion = isset($_POST['numero_identificacion']) ? $_POST['numero_identificacion']: false;
        

        if ($numero_identificacion) {
            $user = new userManage();
            $user->setNumeroIdentificacion($_POST['numero_identificacion']);
            $user->find(true);

            
            $_SESSION["Tipo_Documento"] = $user -> getTipoDocumento();
            $_SESSION["Cedula"] = $user -> getsetNumeroIdentificacion();
            $_SESSION["Nombre"] = $user -> getNombre();
            $_SESSION["Apellidos"] = $user -> getApellidos();
            $_SESSION["Telefono"] = $user -> getPhone();
            $_SESSION["Direccion"] = $user -> getDireccion();
            $_SESSION["Email"] = $user -> getEmail();
            $_SESSION["Pass"] = $user -> getPassword();

          
            if ($user -> getsetNumeroIdentificacion()== $numero_identificacion) {
                echo '
                <script>
                    window.location = "../views/Editar_usuario.php";
                </script>';
            exit;
               
            }else{
                echo '
                <script>
                     alert("Usuario NO existe, por favor verifique el número de identificación");
                     window.location = "../views/VistaEditar_usuario.php";
                </script>';
            exit;
    
            }
        }
    }

    public function edit(){
        session_start();

            $numero_identificacion = isset($_POST['numero_identificacion']) ? $_POST['numero_identificacion']: false;
                   
            if ($numero_identificacion){
                $user = $this -> load_current_user();
                $is_success = $user -> edit();
                if(!$is_success){
                    echo '
                    <script>
                        alert("Error al actualizar el usuario, intente de nuevo.");
                        window.location = "../views/Editar_usuario.php";
                    </script>';
                }

                $user -> find(true);

                $_SESSION["Cedula"] = $user -> getsetNumeroIdentificacion();
                $_SESSION["Tipo_Documento"] = $user -> getTipoDocumento();
                $_SESSION["Nombre"] = $user -> getNombre();
                $_SESSION["Apellidos"] = $user -> getApellidos();
                $_SESSION["Telefono"] = $user -> getPhone();
                $_SESSION["Direccion"] = $user -> getDireccion();
                $_SESSION["Email"] = $user -> getEmail();
                $_SESSION["Pass"] = $user -> getPassword();

            
                echo '
                    <script>
                        alert("Usuario almacenado");
                        window.location = "../views/Nav_Administrador.php";
                    </script>';
                exit;
        }
      
 
    }

    public function login(){ 

        $user = new userManage();
        $user->setEmail($_POST['email']);
        $user->setPassword($_POST['pass']);

        $ejecutarLogin = $user->login();

        if (mysqli_num_rows($ejecutarLogin) > 0) {
            
            $data_user = $ejecutarLogin -> fetch_assoc();
            $user -> setNombre($data_user['Nombre']);
            $user -> setApellidos($data_user['Apellidos']);
            $user -> setPerfil($data_user['Perfil']);
            $this -> sesion($user);

            $location = '../views/navegacion.php';
            if ($user -> getPerfil() == 'ADMINISTRADOR'){
                $location = '../views/Nav_Administrador.php';
            }

            echo    "<script>
                        window.location = '$location';
                    </script>";
            exit;
        } else {
            echo '
                <script>
                     alert("Usuario NO existe, por favor verifique los datos");
                     window.location = "../views";
                </script>';
            exit;
        }
        return $user;
        
    }

    public function find(){
        session_start();
      
        $numero_identificacion = isset($_POST['numero_identificacion']) ? $_POST['numero_identificacion']: false;
        

        if ($numero_identificacion) {
            $user = new userManage();
            $user->setNumeroIdentificacion($_POST['numero_identificacion']);
            $user->find();

            
            $_SESSION["Tipo_Documento"] = $user -> getTipoDocumento();
            $_SESSION["Cedula"] = $user -> getsetNumeroIdentificacion();
            $_SESSION["nombre"] = $user -> getNombre();
            $_SESSION["Apellidos"] = $user -> getApellidos();
            $_SESSION["Telefono"] = $user -> getPhone();
            $_SESSION["Direccion"] = $user -> getDireccion();
            $_SESSION["Email"] = $user -> getEmail();
            $_SESSION["Pass"] = $user -> getPassword();

            if ($user -> getsetNumeroIdentificacion()== $numero_identificacion) {
                echo '
                <script>
                    window.location = "../views/Buscar_usuario.php";
                </script>';
               
            }else{
                echo '
                <script>
                     alert("Usuario NO existe, por favor verifique el número de identificación");
                     window.location = "../views/Buscar.php";
                </script>';
            exit;

            }
             
            
        }
        
    }
    public function sesion($user){
        session_start();
        $this -> concat_user_data($user);
    }

    public function inactividad()
    {
        $inactividad = 300;
                  // Comprobar si $_SESSION["timeout"] está establecida
    if(isset($_SESSION["timeout"])){
                      // Calcular el tiempo de vida de la sesión (TTL = Time To Live)
        $sessionTTL = time() - $_SESSION["timeout"];
        if($sessionTTL > $inactividad){
            session_destroy();
            header("Location: /SONIPROYECCION");
        }
    }
                  // El siguiente key se crea cuando se inicia sesión
    $_SESSION["timeout"] = time();
    }

    public function cerrarSesion()
    {
        session_start();
        unset($_SESSION["usuarios"]);
        echo '
                <script>
                    window.location = "../SONIPROYECCION/indexReg.php"";
                </script>';

    }


   

}

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $controller = new UserController();
    
    echo $_POST['action'];


    if(isset($_POST['action']) && $_POST['action'] == 'register'){
        $controller -> register();
     }
    if(isset($_POST['action']) && $_POST['action'] == 'find_edit'){
        $controller -> find_edit();
     }
     if(isset($_POST['action']) && $_POST['action'] == 'edit'){
        $controller -> edit();
     }

    if(isset($_POST['action']) && $_POST['action'] == 'login'){
       $controller -> login();
    }

    if(isset($_POST['action']) && $_POST['action'] == 'find'){
        $controller -> find();
     }
    
    
}
