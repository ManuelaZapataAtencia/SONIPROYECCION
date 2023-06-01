<?php
require_once 'db.php';

class userManage{

    private $nombre;
    private $lastname;
    private $tipo_documento ;
    private $numero_identificacion;
    private $phone ;
    private $Direccion ;
    private $email ;
    private $pass ;

    private $perfil;

    private $conexion;

    public function __construct()
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
    public function getApellidos()
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

    public function setPerfil($perfil){
        $this -> perfil = $perfil;
    }

    public function getPerfil(){
        return $this -> perfil;
    }

    //FUNCIONES

    // registro_usuario.php
    public function register(){

        $sqlReg = "INSERT INTO usuarios (Cedula, Tipo_Documento, Nombre, Apellidos, Telefono, Direccion, Email , Pass)
          VALUES ('{$this->numero_identificacion}', '{$this->getTipoDocumento()}', '{$this->getNombre()}', 
          '{$this->getApellidos()}', '{$this->getPhone()}', '{$this->getDireccion()}','{$this->getEmail()}',
          '{$this->getPassword()}')";
          echo $sqlReg , '<br>';
        $sqlReg  = $this->conexion->query($sqlReg);
        return  $sqlReg; 
    }
 // Editar.php
    public function edit(){
        $numero_identificacion=$this->numero_identificacion;
        $sqlEdit =  "UPDATE usuarios SET Tipo_Documento='{$this->getTipoDocumento()}', Nombre='{$this->getNombre()}',
         Apellidos='{$this->getApellidos()}' , Telefono='{$this->getPhone()}', Direccion='{$this->getDireccion()}', 
         Email='{$this->getEmail()}', Pass='{$this->getPassword()}'
                WHERE Cedula = '$numero_identificacion'"; 
        
        return $this->conexion->query($sqlEdit);
    }
   

 //prueba.php
 // Comprobar existencia de usuario
    public function login(){ 
        $email = $this->email;
        $pass = $this->pass;
        $sql_login = "SELECT Nombre, Apellidos, Perfil FROM usuarios WHERE email = '$email' and pass = '$pass'";
        $sql_login= $this->conexion-> query($sql_login);

        return $sql_login;
    }

    //Buscar_usuario.php
    public function find($includePwd=false){ 
        $additionalFields = "";
        if($includePwd){
            $additionalFields = ", Pass";
        }
        $numero_identificacion=$this->numero_identificacion;
        $sqlFind = "SELECT Cedula, Tipo_Documento, Nombre, Apellidos, 
        Telefono, Direccion, Email, Perfil $additionalFields
                FROM usuarios 
                WHERE Cedula = '$numero_identificacion'";
         $sqlFind = $this->conexion->query($sqlFind);

        $user_data = $sqlFind -> fetch_assoc();
        $this -> setTipoDocumento($user_data['Tipo_Documento']);        
        $this -> setNumeroIdentificacion($user_data['Cedula']);        
        $this -> setNombre($user_data['Nombre']);        
        $this -> setApellidos($user_data['Apellidos']);        
        $this -> setPhone($user_data['Telefono']);        
        $this -> setDireccion($user_data['Direccion']);        
        $this -> setEmail($user_data['Email']);  
        $this -> setPerfil($user_data['Perfil']);  
        
        if($includePwd){
            $this -> setPassword($user_data['Pass']);
        }
    
    }

   
}


?>