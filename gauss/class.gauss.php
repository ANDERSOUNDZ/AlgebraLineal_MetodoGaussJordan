<?php 

class Gauss {
 
	private $filas;
	private $columnas;
	private $matriz;
 
	/**
	 * Constructor. Establace la matriz a resolver, obtiene numero de filas y columnas.
	 * @param array matriz
	 * @return void
	 */
	public function __construct($m){
		$this->matriz = $m;
		$this->filas = count($m);
		$this->columnas = count($m['1']);
	}

	/**
	 * Obtiene la solución de la matriz por el método de Gauss
	 * @param void
	 * @return void
	 */
	public function getGaussSolution(){
		$this->mostrarMatriz();
		for($x = 1; $x <= $this->filas; $x++){
			$pivote = $this->matriz[$x][$x];
			for($i = $x; $i <= $this->filas; $i++ ){
				for($j = $x; $j <= $this->columnas; $j++ ){
					if($i == $x) {
						$this->matriz[$i][$j] /= $pivote;
						continue;
					} elseif($j == $x && $i != $x){
						$aux = $this->matriz[$i][$j] * (-1);
					}
					$this->matriz[$i][$j] =	$this->matriz[$x][$j] * $aux + $this->matriz[$i][$j];
				}
				$this->mostrarMatriz();
			}
		}
		for($x = 4; $x > 0; $x--){
			$pivote = $this->matriz[$x][$x];
			for($i = $x-1; $i > 0; $i-- ){
				for($j = $x; $j <= $this->columnas; $j++ ){
					if($j == $x){
						$aux = $this->matriz[$i][$j] * (-1);
					}
					$this->matriz[$i][$j] =	$this->matriz[$x][$j] * $aux + $this->matriz[$i][$j];
				}
				$this->mostrarMatriz();
			}
		}
	}
	/**
	 * Imprime la matriz en una tabla
	 * @param void
	 * @return void
	 */


	 
	private function mostrarMatriz(){
	
		echo '<table border="11">';
		
		for($i = 1; $i <= $this->filas; $i++ ){
			echo '<tr>';
			for($j = 1; $j <= $this->columnas; $j++ ){
				echo '<td>';
				echo '<h1>'.round($this->matriz[$i][$j], 2).'</h1>';
				echo '</td>';
			}
			echo '</tr>';
		}
		echo '</table>';
		echo '<style>table{margin-bottom:10px;} table tr td {width:780px;}</style>';
		
		
	}

	

}

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
								<li><a href="../#"><h1>ÁLGEBRA LINEAL</h1></a> </li>
								<li><a href="../#">  <button type="button" class="btn btn-warning btn-squared">PAGINA PRINCIPAL</button></a> </li>
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
		<div class="uno col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
			<br>
			
			<h1>El resultado es: </h1>

		</div>
		<div class="uno col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
			<br>
			
			<h1>El resultado es: </h1>

		</div>
	</div>

<!--fincontenedor-->
</div>

<!--Ingreso de jquery-->
<script src="../lib/boot/js/jquery-3.2.1.min.js"></script>
<script src="../lib/boot/js/bootstrap.min.js"></script>
</body>
</html>
