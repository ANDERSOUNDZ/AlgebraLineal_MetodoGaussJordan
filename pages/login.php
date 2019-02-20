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
<link rel="stylesheet" href="../lib/uikit/css/uikit.min.css"/>
<script src="../lib/uikit/js/uikit.min.js"></script>
<script src="../lib/uikit/js/uikit-icons.min.js"></script>

<!--Ingreso de css a php-->
<link rel="stylesheet" href="../estilos/estilo1.css"/>

<!--Ingreso de tipografias-->
<link href="https://fonts.googleapis.com/css?family=Montserrat:900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
<!--titulo-->
<title>LOG IN!</title>
</head>
<body>
<!--contenedor de elementos-->
<div class="container">
	<!--reglas bootstrap se trabaja por filas-->
	<!--La distribucion de las columnas de bootrap va desde el mas bajo col hasta col-xl-->
	<!--row=filas-->
	<!--tratare de hacer la distribucion lo mas exacta posible-->
	<!--FILA1/columna 6-6/-->
	<div class="row">
		<!--dentro de filas columnas-->
		<!--col=columnas-->
		<div class="tres col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
			<!--<p>Indices 1</p>-->
		</div>
		<div class="tres col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
			<!--<p>Indices 2</p>-->
		</div>
	</div>
	<!--FILA2/columna 10-2/-->
	<div class="row">
		<div class="tres col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			<!--<h1>Emergente1</h1>-->
			<?php include '../funciones/funlogin.php';?>
		</div>
	</div>
	<!--FILA1/columna 6-6/-->
	<div class="row">
		<!--dentro de filas columnas-->
		<!--col=columnas-->
		<div class="uno col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
			<p>Pie 1</p>
		</div>
		<div class="dos col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
			<p>Pie 2</p>
		</div>
	</div>
	
	<!--Aqui termina mi contenedor-->
</div>
<!--Ingreso de jquery-->
<script src="../lib/boot/js/jquery-3.2.1.min.js"></script>
<script src="../lib/boot/js/bootstrap.min.js"></script>
</body>
</html>