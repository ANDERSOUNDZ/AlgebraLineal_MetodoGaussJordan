<?php
$filas = $_POST['Matriz']['filas'];
$columnas = $_POST['Matriz']['columnas'];
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
<link rel="stylesheet" href="../lib/uikit/css/uikit.min.css"/>
<script src="../lib/uikit/js/uikit.min.js"></script>
<script src="../lib/uikit/js/uikit-icons.min.js"></script>

<!--Ingreso de css a php-->
<link rel="stylesheet" href="../estilos/estilo1.css"/>

<!--Ingreso de tipografias-->
<link href="https://fonts.googleapis.com/css?family=Montserrat:900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 
</head>

<body>
	
<!--contenedor de elementos-->
<div class="container-fluid">


<!--FILA1/columna 12/-->
<div class="row">
		<!--dentro de filas columnas-->
		<!--col=columnas-->
		<!--Header y navbar-->
		<div class="seis col-12-full-box col-sm-12-full-box col-md-12-full-box  col-lg-12-full-box col-xl-12-full-box">

		<div class="uk-position-relative">
    
	<div class="uk-animation-fade">
		<div id="carouselExampleControls " class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
			<img class="d-block w-100 uk-animation-kenburns" src="../img/04.jpg" alt="First slide" >
			<div class="carousel-caption d-none d-md-block">
			<div class="uk-animation-slide-top-medium">
					<br><br>
				</div>
			</div>
			</div>
		</div>
		
		</div>
	</div>

<div class="uk-position-top">
	<div uk-sticky="animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; cls-inactive: uk-navbar-transparent uk-light; top: 200">
		<div class="uk-animation-slide-bottom">

					<nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
						<div class="uk-navbar-left">
							<ul class="uk-navbar-nav">
								<li class="logo"><a href="../#"><img src="../img/logo.png"></a></li>
							</ul>
						</div>
						<div class="uk-navbar-right">
							
							<ul class="uk-navbar-nav">
								<li><a href="galeria/listado.php"><h1>ÁLGEBRA LINEAL</h1></button></a> </li>
							</ul>
						</div>
					</nav>

				 </div>
			</div>
		 </div>
</div>

		</div>
	</div>

<!--FILA7/columna 12/-->
<div class="row">
		<div class="cuatro col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
		<div align="center">
			<h2>INGRESE VALORES PARA CADA CAJON</h2>
		</div>
		</div>
	</div>

<!--FILA7/columna 12/-->
<div class="row">
		<div class="diez col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			<div align="center">
					<br>

					<div class="card">
					<div class="card-body">
					<form action="gaussiana.php" method="post">
							<td><h1>Ingrese valores para todos los campos: </h1></td>
								<table>
								<?php for($i = 1; $i <= $filas; $i++ ) { ?>
									<tr>
									<?php for($j = 1; $j <= $columnas; $j++ ) { ?>
										<td>
										<input class="uk-form-width-medium uk-form-large" placeholder="Ingrese un valor." type="text" name="A[<?php echo  $i ?>][<?php echo $j ?>]"/>
										</td>
									<?php } ?>
									</tr>
								<?php } ?>
									<tr>
										<td colspan="<?php echo $columnas ?>"><br>
											<p><input class="btn btn-success btn-block btn-lg" type="submit" class="submit" value=" Resolver matriz"/></p>
										</td>
									</tr>
								</table>
								<input type="hidden" name="filas" value="<?php echo $filas ?>"/>
								<input type="hidden" name="columnas" value="<?php echo $columnas ?>"/>
							</form>
							</div>
							</div>								
					</div> 
					<br>
			</div>
	</div>

	<!--FILA7/columna 12/-->
	<div class="row">
		<div class="uno col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			<br>
			<h1>Multiplicaciones de determinantes</h1><br>
		</div>
	</div>

<!--fincontenedor-->
</div>

<!--Ingreso de jquery-->
<script src="../lib/boot/js/jquery-3.2.1.min.js"></script>
<script src="../lib/boot/js/bootstrap.min.js"></script>
</body>
</html>