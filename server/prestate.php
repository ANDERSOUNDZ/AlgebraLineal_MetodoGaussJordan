<?php

$id = $_GET ['idUsuario'];

//como realizar un prepared statement

try{

    //si el problema depende de la coneccion en mamp el usuario es : password es : root
    //coneccion, base de datos, usuario, contraseña.
    $conexion = new PDO('mysql:host=localhost;dbname=mngservices', 'root', '12345');
    

    /*

    //Primera forma: 

    //preparando consulta para pedir datos
    $statement = $conexion->prepare('SELECT * FROM MNG_USUARIO_TB2 WHERE idUsuario = :idUsuario');
    $statement->execute(
        array(':idUsuario' => $id)
    );

    
    //fetch sirve para solamente un solo dato.
    $resultado = $statement->fetch();
    echo "<pre>";
    print_r($resultado);
    echo "</pre>";
    */

    
    /*

    //Segunda forma

    //preparando consulta para pedir datos
    $statement = $conexion->prepare('SELECT * FROM MNG_USUARIO_TB2');
    $statement->execute(
        array(':idUsuario' => $id,':idUsuario2' => 1,
        
    ));

    //fetchAll sirve para traer todos los datos.
    $resultado = $statement->fetchAll();
    foreach ($resultado as $usuario) {  
        echo $usuario['nombre'] . '<br>';
    }

    */

    //tercera forma

    //Insertar Datos a la tabla.

    //preparando consulta para ingresar datos
    $statement = $conexion->prepare('INSERT INTO MNG_USUARIO_TB2 VALUES (04, "Marco", "Ariaz", 1996-06-05, "Octopuz", "OCKS", "", 04, 04, 04, 04)');
    $statement->execute();



    }catch(PDOException $e) {

        echo "ERROR: " . $e->getMessage();

    }

?>