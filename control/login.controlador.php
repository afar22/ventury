<?php
  class Login {
    private $con;

    public function __construct() {
        $this->con = Database::Conectar();
    }

    public function autenticar($login_usuario, $login_clave) {
        // Consulta para obtener el usuario por nombre de usuario o correo
        $sql = "SELECT * FROM tUsuario WHERE cNombreUsuario = :usuario OR cGmail = :usuario";
        $sentencia = $this->con->prepare($sql);
        $sentencia->bindParam(':usuario', $login_usuario);
        $sentencia->execute();
        
        $resultado = $sentencia->fetch(PDO::FETCH_ASSOC);

        // Verificar si el usuario existe y si la contraseña es correcta
        if ($resultado && password_verify($login_clave, $resultado['cPassword'])) {
            session_start();
            $_SESSION['usuario_id'] = $resultado['tUsuarioID'];
            $_SESSION['usuario_nombre'] = $resultado['cNombreUsuario'];
            return true; // Autenticación exitosa
        }
        
        return false; // Autenticación fallida
    }

    public function cerrarSesion() {
        session_start();
        session_unset();
        session_destroy();
    }
}