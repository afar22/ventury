<?php

class Usuario {
    private $id;
    private $usuario_nombre;
    private $rol;
    private $documento;
    private $estado;
    private $password;
    private $passwordConfirmacion;
    private $email;
    private $con;


    //metodo
    public function __construct() {
        $this->con = Database::Conectar();
    }
    public function get_id(){
        return $this->id;
    }
    public function set_id($id){
        $this->id = $id;
    }

    public function get_nombre(){
        return $this->usuario_nombre;
    }
    public function set_nombre($usuario_nombre){
        $this->usuario_nombre = $usuario_nombre;
    }
    public function get_rol(){
        return $this->rol;
    }
    public function set_rol($rol){
        $this->rol = $rol;
    }
    public function get_documento(){
        return $this->documento;
    }
    public function set_documento($documento){
        $this->documento = $documento;
    }
    public function get_estado(){
        return $this->estado;
    }
    public function set_estado($estado){
        $this->estado = $estado;
    }
    public function get_password(){
        return $this->password;
    }
    public function set_password($password){
        $this->password = $password;
    }
    public function get_passwordConfirmacion(){
        return $this->passwordConfirmacion;
    }
    public function set_passwordConfirmacion($passwordConfirmacion){
        $this->passwordConfirmacion = $passwordConfirmacion;
    }
    public function get_email(){
        return $this->email;
    }
    public function set_email($email){
        $this->email = $email;
    }


    public function listar(){
        try{
            $sql="select * from tusuario";				
            $sentencia =$this->con->prepare($sql);						
            $sentencia->execute();			
            
            $resultados = $sentencia->fetchAll(PDO::FETCH_ASSOC);					
            return $resultados;
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    public function Insertar(Usuario $usuario) {
        try {
            $nombre = $usuario->get_nombre();
            $rol = $usuario->get_rol();
            $documento = $usuario->get_documento();
            $password = $usuario->get_password(); // Ya encriptada
            $email = $usuario->get_email();
    
            // Consulta SQL corregida (sin cPasswordConfirmacion)
            $sql = "INSERT INTO tUsuario (cNombreUsuario, eRol, nDocumento, cPassword, cGmail) VALUES (:usuario_nombre, :rol, :cedula, :password, :email)";
            
            // Preparar y ejecutar la consulta
            $sentencia = $this->con->prepare($sql);
            $sentencia->bindParam(':usuario_nombre', $nombre);
            $sentencia->bindParam(':rol', $rol);
            $sentencia->bindParam(':cedula', $documento);
            $sentencia->bindParam(':password', $password);
            $sentencia->bindParam(':email', $email);    
            
            return $sentencia->execute(); // Retornar verdadero si se insertó correctamente
            if ($sentencia->execute()) {
                return true; // Retornar verdadero si se insertó correctamente
            } else {
                var_dump($sentencia->errorInfo()); // Mostrar información del error
                return false; // Retornar falso si hubo un error
            }   
        } catch (Exception $e) {
            die("Error: " . $e->getMessage()); // Mostrar mensaje de error si falla la inserción
        }
    }
      
    



  
}


?>
