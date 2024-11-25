<?php
require_once "../php/main.php";
require_once "../php/usuario.Model.php";


class UsuarioControlador {
    private $modelo;
    private $modeloVentury;

    public function __construct() {
        $this->modelo = new Usuario(); // Instancia del modelo Usuario
        $this->modeloVentury = new Login(); // Instancia del modelo Login
    }

    public function inicio() {
        require_once "vista/login.php"; // Cargar la vista de inicio de sesión
    }

    public function nuevo() {
        require_once "vista/registrar_usuario.php"; // Cargar la vista de registro
    }

    public function guardar() { 
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Recibir datos del formulario
            $usuario_nombre = $_POST['usuario_nombre'];
            $documento = $_POST['cedula'];
            $rol = $_POST['rol'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $password_2 = $_POST['password_2'];
        
            // Verificar que las contraseñas coincidan
            if ($password !== $password_2) {
                die("Las contraseñas no coinciden.");
            }
        
            // Crear objeto Usuario y establecer propiedades
            $user = new Usuario();
            $user->set_nombre($usuario_nombre);
            $user->set_documento($documento);
            $user->set_rol($rol);
            $user->set_email($email);
            
            // Encriptar la contraseña antes de guardarla
            $user->set_password(password_hash($password, PASSWORD_DEFAULT));
        
            // Intentar insertar el usuario en la base de datos
            if ($this->modelo->Insertar($user)) {
                header("Location: ../index.php?mensaje=Usuario registrado exitosamente");
                exit; // Asegúrate de salir después del redireccionamiento
            } else {
                die("Error al registrar el usuario.");
            }
        } else {
            die("Método no permitido.");
        }
        
    }

    
}