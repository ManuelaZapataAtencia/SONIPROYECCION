<?php
require_once 'models/db.php';

class userManage{

    private $nombre;
    private $lastname;
    private $tipo_documento ;
    private $numero_identificacion;
    private $phone ;
    private $Direccion ;
    private $email ;
    private $pass ;

    private $conexion;

    public function ___construct()
    {
        $this->conexion = Database::connect();
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function getApellido()
    {
        return $this->lastname;
    }
    public function setApellidos($lastname)
    {
        $this->lastname = $lastname;
    }
    public function getTipoDocumento()
    {
        return $this->tipo_documento;
    }

    public function setTipoDocumento($tipo_documento)
    {
        $this->tipo_documento = $tipo_documento;
    }
    public function getsetNumeroIdentificacion()
    {
        return $this->numero_identificacion;
    }

    public function setNumeroIdentificacion($numero_identificacion)
    {
        $this->numero_identificacion = $numero_identificacion;
    }

    public function getPhone ()
    {
        return $this->phone;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
    
    public function getDireccion ()
    {
        return $this->Direccion;
    }

    public function setDireccion($Direccion)
    {
        $this->Direccion = $Direccion;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getPassword()
    {
        return $this->pass;
    }
    public function setPassword($pass)
    {
        $this->pass = $pass;
    }

    //FUNCIONES

    // registro_usuario.php
    public function register(){
        $sqlReg = "INSERT INTO usuarios (Cedula, Tipo_Documento, Nombre, Apellidos, Telefono, Direccion, Email , Pass)
          VALUES ('{$this->numero_identificacion}', '{$this->getTipoDocumento()}', '{$this->getNombre()}', 
          '{$this->getApellido()}', '{$this->getPhone()}', '{$this->getDireccion()}','{$this->getEmail()}',
          '{$this->getPassword()}')";
        $ejecutarReg = $this->conexion->query($sqlReg);
        return $ejecutarReg;        
    }
 // Editar.php
    public function edit(){
        $sqlEdit = "UPDATE usuarios SET Tipo_Documento = '{$this->getTipoDocumento()}', Nombre = '{$this->getNombre()}', 
                Apellidos = '{$this->getApellido()}', Telefono='{$this->getPhone()}', Direccion='{$this->getDireccion()}', 
                Email='{$this->getEmail()}', Pass='{$this->getPassword()}' 
                WHERE Cedula = '{$this->numero_identificacion}'";
        $ejecutarEdit = $this->conexion->query($sqlEdit);
        return $ejecutarEdit;
    }
   

 //prueba.php
 // Comprobar existencia de usuario
    public function login(){ 
        $email = $this->email;
        $pass = $this->pass;
        $sql_login = "SELECT email , pass FROM usuarios WHERE email = '$email' and pass = '$pass'";
        $sql_login= $this->conexion->query($sql_login);

    }

    //Buscar_usuario.php
    public function find(){ 
        $numero_identificacion=$this->numero_identificacion;
        $sqlFind = "SELECT Cedula, Tipo_Documento, Nombre, Apellidos, Telefono, Direccion, Email 
                FROM usuarios 
                WHERE Cedula = '$numero_identificacion'";
         $sqlFind = $this->conexion->query($sqlFind);

       

    }
}


?>