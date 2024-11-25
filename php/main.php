<?php
class Database {
   const SERVIDOR = "localhost";
   const USER = "root";
   const CLAVE = "";
   const DB ="ventury";

   public static function Conectar(){
        try{
            $conexion = new PDO("mysql:host=".self::SERVIDOR.";dbname=".self::DB.";charset=utf8",self::USER,self::CLAVE);
            $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $conexion;
        }catch(PDOException $e){
            return "Fallo: ".$e->getMessage();
        }
    }



}



?>

























