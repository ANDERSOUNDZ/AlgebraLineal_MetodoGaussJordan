<?php

try{

    //si el problema depende de la coneccion en mamp el usuario es : password es : root
    //coneccion, base de datos, usuario, contraseña.
    $conexion = new PDO('mysql:host=localhost;dbname=mngservices', 'root', '12345');
    echo "conexion excitosa putito!";

}catch(PDOException $e) {

    echo "ERROR: " . $e->getMessage();

}

?>