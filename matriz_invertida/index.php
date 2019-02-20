<?php

//Matriz Invertida version 1.0 - Anderson Ch.

//ingresamos cuantos datos deseamos, si necesitamos
//m@s debemos aumentar los arrays tambien en el proceso.
//este proceso es para conocer como el programa serviría.

//Matriz 3x3

$columna1 = array(7,-5,1);
$columna2 = array(6,1,5);
$columna3 = array(3,4,9);

//Desarrollo multiplicativo de la determinante por regla de Cramer.

//Multiplicacion hacia abajo positivos
//para nuevos determinantes $determinante = $columna [] * $columna [] * $columna [];
$determinante1 = $columna1 [0] * $columna2 [1] * $columna3 [2];
$determinante2 = $columna1 [1] * $columna2 [2] * $columna3 [0];
$determinante3 = $columna1 [2] * $columna2 [0] * $columna3 [1];

//Multiplicacion hacia arriba negativos
//para nuevos determinantes $determinante = $columna [] * $columna [] * $columna [];
$determinante4 = $columna1 [2] * $columna2 [1] * $columna3 [0];
$determinante5 = $columna1 [0] * $columna2 [2] * $columna3 [1];
$determinante6 = $columna1 [1] * $columna2 [0] * $columna3 [2];

//Sumar determinantes
$determinantef1 = $determinante1 + ($determinante2)+ ($determinante3);
$determinantef2 = ($determinante4) + ($determinante5) + ($determinante6);

//Valor final determinante
$valordeterminante = ($determinantef1) - ($determinantef2);

//Valores de columna1
//Val A11
$valtab1 = $columna2 [2] * $columna3[1];
$valtab2 = $columna2 [1] * $columna3[2];
$valtabf1 = ($valtab1) - ($valtab2);
//Val A21 este es negativo
$valtab3 = $columna1 [1] * $columna3[2];
$valtab4 = $columna3 [1] * $columna1[2];
$valtabf2 = ($valtab3) - ($valtab4);
$valtabfin1 = -1 * $valtabf2;
//Val A31
$valtab5 = $columna1 [1] * $columna2[2];
$valtab6 = $columna2 [1] * $columna1[2];
$valtabf3 = ($valtab5) - ($valtab6);
//B12
$valtab7 = $columna2 [0] * $columna3 [2];
$valtab8 = $columna3 [0] * $columna2 [2];
$valtabf4 = ($valtab7) - ($valtab8);
$valtabfin2 = -1 * $valtabf4; 
//B22
$valtab9 = $columna1 [0] * $columna3 [2];
$valtab10 = $columna1 [2] * $columna3 [0];
$valtabf5 = ($valtab9) - ($valtab10);
//B32
$valtab11 = $columna1 [0] * $columna2 [2];
$valtab12 = $columna2 [0] * $columna1 [2];
$valtabf6 = ($valtab11) - ($valtab12);
$valtabfin3 = -1 * $valtabf6;
//B13
$valtab13 = $columna2 [0] * $columna3 [1];
$valtab14 = $columna3 [0] * $columna2 [1];
$valtabf7 = ($valtab13) - ($valtab14);
//B23
$valtab15 = $columna1 [0] * $columna3 [1];
$valtab16 = $columna1 [1] * $columna3 [0];
$valtabf8 = ($valtab15) - ($valtab16);
$valtabfin4 = -1 * $valtabf8; 
//B33
$valtab17 = $columna1 [0] * $columna2 [1];
$valtab18 = $columna1 [1] * $columna2 [0];
$valtabf9 = ($valtab17) - ($valtab18);

//Creacion de nuevo vector
$mfinal = array($valtabf1,$valtabfin1,$valtabf3);
$mfina2 = array($valtabfin2,$valtabf5,$valtabfin3);
$mfina3 = array($valtabf7,$valtabfin4,$valtabf9);





?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<!--Ingreso de compatibilidad dispositivos-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<!--Ingreso de bootratp y librerias-->
<link rel="stylesheet" href="../lib/boot/css/bootstrap.min.css">
<link rel="stylesheet" href="../lib/shard/css/shards.min.css">

<!--Ingreso de css a php-->
<link rel="stylesheet" href="../estilos/estilo1.css"/>
<!--Ingreso de tipografias-->
<link href="https://fonts.googleapis.com/css?family=Montserrat:900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
<!--titulo-->
<title>MAGS</title>
</head>
<body>
<!--contenedor de elementos-->
<div class="container">
	<!--reglas bootstrap se trabaja por filas-->
	<!--La distribucion de las columnas de bootrap va desde el mas bajo col hasta col-xl-->
	<!--row=filas-->
	<!--tratare de hacer la distribucion lo mas exacta posible-->
	<!--FILA1/columna 12/-->
	<div class="row">
		<!--dentro de filas columnas-->
		<!--col=columnas-->
		<!--Header y navbar-->
		<div class="seis col-12-full-box col-sm-12-full-box col-md-12-full-box  col-lg-12-full-box col-xl-12-full-box">

		</div>
	</div>
	<!--FILA4/columna 12/-->
	<div class="row">
		<!--dentro de filas columnas-->
		<!--col=columnas-->
		<div class="seis col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
		</div>
	</div>
	<!--FILA5/columna 12/-->
	<div class="row">
		<!--dentro de filas columnas-->
		<!--col=columnas-->
		<div class="seis col-12 col-sm-12 col-md-12  col-lg-12 col-xl-12">
			<br>
			<h1>Proyecto Álgebra Lineal</h1><br>
			<h1>Desarrollo de una Matriz Invertida.</h1>
        </div>
	</div>
	<!--FILA6/columna 12/-->
	<div class="row">
		<!--dentro de filas columnas-->
		<!--col=columnas-->
		<div class="dos col-12 col-sm-12 col-md-12  col-lg-12 col-xl-12">
			<br>
			<h1>Desarrollo</h1>
            <br>           
            <h1>Matriz 3 x 3</h1>
            
            <h1><?php echo $columna1[0] . "  "; echo $columna2[0]. "  "; echo $columna3[0]. "  "; ?> <br></h1>
            <h1><?php echo $columna1[1] . "  "; echo $columna2[1]. "  "; echo $columna3[1]. "  "; ?> <br></h1>
            <h1><?php echo $columna1[2] . "  "; echo $columna2[2]. "  "; echo $columna3[2]. "  "; ?> <br></h1>
			<br>

		</div>
	</div>
	<!--FILA7/columna 12/-->
	<div class="row">
		<!--dentro de filas columnas-->
		<!--col=columnas-->
		<div class="seis col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			<br>
			<h1>Multiplicacion Determinantes</h1><br>

            <h1><?php echo $columna1[0] . "  "; echo $columna2[0]. "  "; echo $columna3[0]. "  "; ?> <br></h1>
            <h1><?php echo $columna1[1] . "  "; echo $columna2[1]. "  "; echo $columna3[1]. "  "; ?> <br></h1>
            <h1><?php echo $columna1[2] . "  "; echo $columna2[2]. "  "; echo $columna3[2]. "  "; ?> <br></h1>
            <h1><?php echo $columna1[0] . "  "; echo $columna2[0]. "  "; echo $columna3[0]. "  "; ?> <br></h1>
            <h1><?php echo $columna1[1] . "  "; echo $columna2[1]. "  "; echo $columna3[1]. "  "; ?> <br></h1>
			<br>
            
		</div>
	</div>
    <!--FILA7/columna 12/-->
	<div class="row">
		<!--dentro de filas columnas-->
		<!--col=columnas-->
		<div class="uno col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			<br>
			<h1>Multiplicaciones de determinantes</h1><br>
		</div>
	</div>
    <!--FILA1/columna 6-6/-->
	<div class="row">
		<!--dentro de filas columnas-->
		<!--col=columnas-->
		<div class="uno col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
        <br>       
        <p>
            
            <?php echo $columna1 [0] . "  x " . $columna2 [1] ." x " . $columna3 [2] . " = " . $determinante1 . '<br>' ?>
            <?php echo $columna1 [1] . "  x " . $columna2 [2] ." x " . $columna3 [0] . " = " . $determinante2 . '<br>' ?>
            <?php echo $columna1 [2] . "  x " . $columna2 [0] ." x " . $columna3 [1] . " = " . $determinante3 . '<br>' ?>

            <?php echo $columna1 [2] . "  x " . $columna2 [1] ." x " . $columna3 [0] . " = " . $determinante4 . '<br>' ?>        
            <?php echo $columna1 [0] . "  x " . $columna2 [2] ." x " . $columna3 [1] . " = " . $determinante5 . '<br>' ?>
            <?php echo $columna1 [1] . "  x " . $columna2 [0] ." x " . $columna3 [2] . " = " . $determinante6 . '<br>' ?>

        </p>

		</div>
		<div class="dos col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">

            <p>Suma de determinante para encontrar el valor de la determinante: <br></p>
            <p><?php echo "( " . $determinante1 . " )" . " + " . "( " . $determinante2 . " )" . " + " . "( " . $determinante3 . " )" . " - " . " (" . "( " . $determinante4 . " )" . " + " . "( " . $determinante5 . " )" . " + " . "( " . $determinante6 . " )" . " )"?></p>
			<p><?php echo $valordeterminante ?></p>
        </div>
	</div>
	<!--FILA7/columna 12/-->
	<div class="row">
		<!--dentro de filas columnas-->
		<!--col=columnas-->
		<div class="seis col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			<br>
			<h1>Matriz Transpuesta</h1><br>

			<h1><?php echo $columna1[0] . "  "; echo $columna1[1] . "  "; echo $columna1[2]. "  "; ?> <br></h1>
			<h1><?php echo $columna2[0] . "  "; echo $columna2[1] . "  "; echo $columna2[2]. "  "; ?> <br></h1>
			<h1><?php echo $columna3[0] . "  "; echo $columna3[1] . "  "; echo $columna3[2]?></h1>
			<br>

		</div>
	</div>
	<!--FILA7/columna 12/-->
	<div class="row">
		<!--dentro de filas columnas-->
		<!--col=columnas-->
		<div class="uno col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			<br>
			<h1>Proceso Cofactor de matriz Transpuesta.</h1>
			<br>
		</div>
	</div>
	<!--FILA5/columna 12/-->
	<div class="row">
		<!--dentro de filas columnas-->
		<!--col=columnas-->
		<div class="uno col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
			<br>
			<h1>Valor Columna 1</h1><br><br>

			<p>
			<?php echo $columna2 [1] . "  "; echo $columna2 [2]?><br>
			<?php echo $columna3 [1] . "  "; echo $columna3 [2]?><br><br>
			
			<?php echo "( " . $columna2 [2] . " * " . $columna3 [1] . " )" ." - " . " ( " . $columna2 [1] . " * " . $columna3 [2] . " )" . " = " . $valtabf1;?>
			<br><br>

			<?php echo $columna1 [1] . " "; echo $columna1 [2]; ?><br>
			<?php echo $columna3 [1] . " "; echo $columna3 [2]; ?><br><br>

			<?php echo "( " . $columna1 [1] . " * " . $columna3 [2] . " )" ." - " . " ( " . $columna3 [1] . " * " . $columna1 [2] . " )" . " = " . $valtabfin1;?>
			<br><br>

			<?php echo $columna1 [1] . " "; echo $columna1 [2];?><br>
			<?php echo $columna2 [1] . " "; echo $columna2 [2];?><br><br> 
			
			<?php echo "( " . $columna1 [1] . " * " . $columna2 [2] . " )" ." - " . " ( " . $columna2 [1] . " * " . $columna1 [2] . " )" . " = " . $valtabf3;?>
			<br>

			</p>

		</div>
		<div class="uno col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
			<br>
			<h1>Valor Columna 2</h1><br><br>

			<p>
			<?php echo $columna2 [0] . "  "; echo $columna2 [2]?><br>
			<?php echo $columna3 [0] . "  "; echo $columna3 [2]?><br><br>
			
			<?php echo "( " . $columna2 [0] . " * " . $columna3 [2] . " )" ." - " . " ( " . $columna3 [0] . " * " . $columna2 [2] . " )" . " = " . $valtabfin2;?>
			<br><br>

			<?php echo $columna1 [0] . " "; echo $columna1 [2]; ?><br>
			<?php echo $columna3 [0] . " "; echo $columna3 [2]; ?><br><br>

			<?php echo "( " . $columna1 [0] . " * " . $columna3 [2] . " )" ." - " . " ( " . $columna1 [2] . " * " . $columna3 [0] . " )" . " = " . $valtabf5;?>
			<br><br>

			<?php echo $columna1 [0] . " "; echo $columna1 [2];?><br>
			<?php echo $columna2 [0] . " "; echo $columna2 [2];?><br><br> 
			
			<?php echo "( " . $columna1 [0] . " * " . $columna2 [2] . " )" ." - " . " ( " . $columna2 [0] . " * " . $columna1 [2] . " )" . " = " . $valtabfin3;?>
			<br>

			</p>

		</div>
		<div class="uno col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
			<br>
			<h1>Valor columna 3</h1><br><br>

			<p>
			<?php echo $columna2 [0] . "  "; echo $columna2 [1]?><br>
			<?php echo $columna3 [0] . "  "; echo $columna3 [1]?><br><br>
			
			<?php echo "( " . $columna2 [0] . " * " . $columna3 [1] . " )" ." - " . " ( " . $columna3 [0] . " * " . $columna2 [1] . " )" . " = " . $valtabf7;?>
			<br><br>

			<?php echo $columna1 [0] . " "; echo $columna1 [1]; ?><br>
			<?php echo $columna3 [0] . " "; echo $columna3 [1]; ?><br><br>

			<?php echo "( " . $columna1 [0] . " * " . $columna3 [1] . " )" ." - " . " ( " . $columna1 [1] . " * " . $columna3 [0] . " )" . " = " . $valtabfin4;?>
			<br><br>

			<?php echo $columna1 [0] . " "; echo $columna1 [1];?><br>
			<?php echo $columna2 [0] . " "; echo $columna2 [1];?><br><br> 
			
			<?php echo "( " . $columna1 [0] . " * " . $columna2 [1] . " )" ." - " . " ( " . $columna1 [1] . " * " . $columna2 [0] . " )" . " = " . $valtabf9;?>
			<br>

			</p>

		</div>
	</div>
    <!--FILA7/columna 12/-->
	<div class="row">
		<!--dentro de filas columnas-->
		<!--col=columnas-->
		<div class="seis col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			<br>
			<h1>Division y multiplicacion de la matriz invertida</h1>
		</div>
	</div>
    <!--FILA5/columna 12/-->
	<div class="row">
	<!--dentro de filas columnas-->
	<!--col=columnas-->
	<div class="seis col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
		<h1><?php echo "1/" . $valordeterminante ?></h1>
	</div>
	<div class="seis col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
		<p>Se multiplica por los valores dados de el proceso de el cofactor ya realizado.</p>
		<p><?php 

		echo $mfinal [0] . "  "; echo $mfina2 [0] . "  "; echo $mfina3 [0] . "<br>";
		echo $mfinal [1] . "  "; echo $mfina2 [1] . "  "; echo $mfina3 [1] . "<br>";
		echo $mfinal [2] . "  "; echo $mfina2 [2] . "  "; echo $mfina3 [2] . "<br>";
		
		?></p>
	</div>
	</div>
	<!--FILA7/columna 12/-->
	<div class="row">
		<!--dentro de filas columnas-->
		<!--col=columnas-->
		<div class="seis col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
		<h1>Resultado de multiplicacion invertida: </h1><br>
			<p><?php echo 1/$valordeterminante * $mfinal [0] . "  │   " . 1/$valordeterminante * $mfina2 [0] . "   │   "  . 1/$valordeterminante * $mfina3 [0]?><br></p>
			<p><?php echo 1/$valordeterminante * $mfinal [1] . "  │   " . 1/$valordeterminante * $mfina2 [1] . "   │   "  . 1/$valordeterminante * $mfina3 [1]?><br></p>
			<p><?php echo 1/$valordeterminante * $mfinal [2] . "  │   " . 1/$valordeterminante * $mfina2 [2] . "   │   "  . 1/$valordeterminante * $mfina3 [2]?></p>
		</div>
	</div>
	<!--FILA1/columna 6-6/-->
	<div class="row">
		<!--dentro de filas columnas-->
		<!--col=columnas-->
		<div class="uno col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
			<p>Lic. Geovanny P</p>
		</div>
		<div class="dos col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
			<p>Desarrollado por: Anderson Ch. V 1.0</p>
		</div>
	</div>
	
	<!--Aqui termina mi contenedor-->
</div>
<!--Ingreso de jquery-->
<script src="../lib/boot/js/jquery-3.2.1.min.js"></script>
<script src="../lib/boot/js/bootstrap.min.js"></script>
</body>
</html>