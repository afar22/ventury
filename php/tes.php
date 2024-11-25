
<?php
require_once "../php/main.php"; // Ajusta la ruta según sea necesario

try {
    $db = Database::Conectar();
    echo "Conexión exitosa a la base de datos.";
} catch (Exception $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>