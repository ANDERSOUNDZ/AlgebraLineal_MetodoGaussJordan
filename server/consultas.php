<?php

/* $id = $_GET['idUsuario']; */

try{

    //si el problema depende de la coneccion en mamp el usuario es : password es : root
    $conexion = new PDO('mysql:host=localhost;dbname=mngservices', 'root', '12345');
    //echo "conexion excitosa putito!";


        //Primera forma

            //ejecucion de consulta desde la tabla de base de datos
            $resultados = $conexion->query('SELECT * FROM MNG_USUARIO_TB2');

            
            //recorre todo el espacio de el array, siendo este que es los resultados de mi tabla
            foreach ($resultados as $fila) {
                echo $fila [nombre].' '. $fila[apellido] . '<br>';
            }
            
            
        //Segunda forma 
            
        /*
            //para conocer que tipo son los datos de mi base de datos
            foreach ($resultados as $fila) {
                print_r($fila);
            }
        */

        //Tercera forma con pedido de datos desde url

        /*
        //funciona con comillas dobles por el lenguaje de base de datos.
        $resultados = $conexion->query("SELECT * FROM MNG_USUARIO_TB2 WHERE idUsuario = $id");

            foreach ($resultados as $fila) {
                echo $fila ['idUsuario'] . ' ' . $fila['nombre'];
            }
        */

}catch(PDOException $e) {

    echo "ERROR: " . $e->getMessage();

}


?>