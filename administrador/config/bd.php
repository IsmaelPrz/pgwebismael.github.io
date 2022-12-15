<?php
$host="localhost";
$bd="id20018621_sitio";
$usuario="id20018621_ismael";
$contrasenia="*1TFiJ4<F6VD|)vu";

try {
    $conexion=new PDO("mysql:host=$host;dbname=$bd",$usuario,$contrasenia);
    // if($conexion){ echo "conectado... a sistema :)";}
} catch ( Exception $ex) {
    echo $ex->getMessage()."<br/>";
}
?>