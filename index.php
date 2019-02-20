<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<!--Ingreso de compatibilidad dispositivos-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<!--Ingreso de bootratp y librerias-->
<link rel="stylesheet" href="lib/boot/css/bootstrap.min.css">
<link rel="stylesheet" href="lib/shard/css/shards.min.css">
<link rel="stylesheet" href="lib/uikit/css/uikit.min.css"/>
<script src="lib/uikit/js/uikit.min.js"></script>
<script src="lib/uikit/js/uikit-icons.min.js"></script>

<!--Ingreso de css a php-->
<link rel="stylesheet" href="estilos/estilo1.css"/>

<!--Ingreso de tipografias-->
<link href="https://fonts.googleapis.com/css?family=Montserrat:900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 


<!--titulo-->
<title>Método de Gauss</title>
</head>

<body>
	
<!--contenedor de elementos-->
<div class="container-fluid">
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

		<div class="uk-position-relative">
    
	<div class="uk-animation-fade">
		<div id="carouselExampleControls " class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
			<img class="d-block w-100 uk-animation-kenburns" src="img/04.jpg" alt="First slide" >
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
								<li class="logo"><a href="#"><img src="img/logo.png"></a></li>
							</ul>
						</div>
						<div class="uk-navbar-right">
							
							<ul class="uk-navbar-nav">
								<li><a href="#"><h1>ÁLGEBRA LINEAL</h1></button></a> </li>
							</ul>
						</div>
					</nav>

				 </div>
			</div>
		 </div>
</div>

		</div>
	</div>
	<!--FILA4/columna 12/-->
	<div class="row">
		<div class="uno col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
		<br>
		<h1>Instituto Superior Tecnológico de Turismo y Patrimonio" Yavirac "</h1><br>
		</div>
	</div>
	<!--FILA4/columna 12/-->
	<div class="row">
		<!--dentro de filas columnas-->
		<!--col=columnas-->
		<div class="dos col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
		<br>
		<h1><img src="http://yavirac.edu.ec/ignug/images/logoYavirac.png" alt=""></h1><br><br>
		</div>
	</div>
	<!--FILA4/columna 12/-->
	<div class="row">
		<div class="uno col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
		<br>
		</div>
	</div>
	<!--FILA4/columna 12/-->
	<div class="row">
		<!--dentro de filas columnas-->
		<!--col=columnas-->
			<div class="uno col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
				<br>
				<h1>Proyecto: Álgebra Lineal</h1><br>
			</div>
		<div class="uno col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
			<br>
			<h1>ING. GEOVANNY PAZMIÑO</h1>
		</div>
	</div>
	<!--FILA4/columna 12/-->
	<div class="row">
		<!--dentro de filas columnas-->
		<!--col=columnas-->
		<div class="seis col-12 col-sm-12 col-md-12 col-lg-6-full-box col-xl-6">
		<h2>Integrantes: <br><br> Gixon Andrade <br>Anderson Chanchay</h2>
		<h2>Curso: 2do Desarrollo de Software</h2>
		<h2>Tema: Sistema de Ecuaciones por Método de GAUSS.</h2>

		</div>
		<div class="tres col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6-full-box">
		
		</div>
	</div>
	<!--FILA7/columna 12/-->
	<div class="row">
		<div class="uno col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			<br>
			<h1>¿ Qué es un Sistema de Ecuaciones Lineales ?</h1><br>
		</div>
	</div>
	<!--FILA7/columna 12/-->
	<div class="row">
		<div class="dos col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			<br>
			<h1>Un sistema de m ecuaciones lineales con n incógnitas (SEL) y coeficientes en un cuerpo K (como los reales o los complejos) es</h1>
			<h1><img src="https://www.matesfacil.com/matrices/sistemas1.png" width="500" height="500" alt=""></h1>
			<h1>donde</h1>
			<h1><img src="https://www.matesfacil.com/matrices/sistemas2.png" width="300" height="300" alt=""></h1>
			<h1>a los elementos ai , j se les denomina coeficientes del SEL y a los bi términos independientes. <br> Un ejemplo de un SEL de dos ecuaciones y dos incógnitas es</h1>
			<h1><img src="https://www.matesfacil.com/matrices/sistemas3.png" width="300" height="300" alt=""></h1>
		</div>
	</div>
	<!--FILA4/columna 12/-->
	<div class="row">
		<!--dentro de filas columnas-->
		<!--col=columnas-->
			<div class="siete col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
				<h2>El sistema de la definición lo podemos expresar matricialmente como</h2>
				<h1><img src="https://www.matesfacil.com/matrices/sistemas4-1.png" width="300" height="300" alt=""></h1>
				<h2>donde</h2>
			<h1><img src="https://www.matesfacil.com/matrices/sistemas4.png" width="500" height="500" alt=""></h1>
			</div>
		<div class="cinco col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
			<h2>Llamamos matriz de coeficientes a la matriz A, matriz de términos independientes a b y matriz incógnita a X.
				Definimos la matriz ampliada (o completa) del sistema como la matriz compuesta por la matriz A a la izquierda y la b a la derecha, es decir</h2>
				<h1><img src="https://www.matesfacil.com/matrices/sistemas5.png" width="500" height="500" alt=""></h1>
				<h2>Veamos un ejemplo:</h2>
				<h1><img src="https://www.matesfacil.com/matrices/sistemas6.png" width="900" height="900" alt=""></h1><br>
		</div>
	</div>
	<!--FILA7/columna 12/-->
	<div class="row">
		<div class="uno col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			<br>
			<h1>Tipos de soluciones de un sistema de ecuaciones.</h1><br>
		</div>
	</div>
	<!--FILA7/columna 12/-->
	<div class="row">
		<div class="ocho col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			<br>
			<h2>Distinguimos tres tipos de sistemas según el conjunto de soluciones que tiene:

			<br><br> Sistema incompatible (SI): el sistema no tiene solución. No existen valores para las incógnitas de modo que se verifiquen todas y cada una de las ecuaciones que conforman el SEL.
			<br><br> Sistema compatible (SC): existe al menos una solución que verifica todas las ecuaciones del SEL. Pero distinguimos dos casos:
     		<br><br> Sistema compatible determinado (SCD): existe una solución y es única, es decir, sólo hay una.
				En el caso de los SEL homogéneos, la única solución es la trivial (todas las incógnitas valen 0). Esto se debe a que la solución trivial siempre es solución del SEL homogéneo. De este modo, un SEL homogéneo nunca será incompatible.
			<br>Sistema compatible indeterminado (SCI): existe más de una solución. En este caso, existen infinitas soluciones (ya que el conjunto de soluciones de un SEL es un espacio vectorial). Alguna variable (o todas) dependerán de un (o más) parámetros.
</h2><br>
		</div>
	</div>
	<!--FILA4/columna 12/-->
	<div class="row">
		<div class="uno col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			<br>
		<h1>¿ Qué es el método de Gauss Jordan ?</h1>
		<br>
		</div>
	</div>
	<!--FILA5/columna 12/-->
	<div class="row">
		<!--dentro de filas columnas-->
		<!--col=columnas-->
		<div class="cuatro col-12 col-sm-12 col-md-12  col-lg-12 col-xl-12">
		<h2>La eliminación de Gauss, llamada así debido a Carl Friedrich Gauss, es un algoritmo del álgebra lineal para determinar las soluciones de un sistema de ecuaciones lineales, encontrar matrices e inversas. Un sistema de ecuaciones se resuelve por el método de Gauss cuando se obtienen sus soluciones mediante la reducción del sistema dado a otro equivalente en el que cada ecuación tiene una incógnita menos que la anterior. El método de Gauss transforma la matriz de coeficientes en una matriz triangular superior. El método de Gauss-Jordan continúa el proceso de transformación hasta obtener una matriz diagonal. <br><br> Sabemos que el método de Gauss para resolver un sistema de ecuaciones modifica el sistema de ecuaciones original para conseguir eliminar ciertos coeficientes. El mismo proceso puede realizarse matricialmente, siguiendo exactamente los mismos pasos, pero sin tener que escribir las incognitas. Ésta es la única ventaja del método de Gauss utilizando matrices. </h2>
        </div>
	</div>
    <!--FILA4/columna 12/-->
	<div class="row">
		<div class="uno col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			<br>
		<h1>¿ Cómo funciona la eliminación con el método de Gauss ?</h1>
		<br>
		</div>
	</div>
	<!--FILA4/columna 12/-->
	<div class="row">
		<!--dentro de filas columnas-->
		<!--col=columnas-->
			<div class="cinco col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
				<br>
				<h2>La eliminación de GAUSS consiste en realizar operaciones elementales (Suma, Resta, Multiplicación) de la fila a la matriz ampliada del Sistema de Ecuaciones Lineales hasta obtener su forma escalonada reducida. <br>
				<br> Gauss y Gauss - Jordan: <br><br> La diferencia entre los métodos de Gauss y de Gauss-Jordan es que el primero finaliza al obtener un sistema equivalente en forma escalonada, mientras que el segundo finaliza al obtener un sistema equivalente en forma escalonada reducida.
			</h2><br>
			</div>
		<div class="cinco col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
			<br>
				<h2> Método de resolución: <br><br>

					Aplicamos el método de eliminación de Gauss-Jordan:

					obtener la forma escalonada reducida de la matriz ampliada del sistema de ecuaciones mediante operaciones elementales fila (o columna).

					Una vez tenemos la matriz en forma escalonada reducida, la obtención de la solución es inmediata. <br><br>

					Aplicaremos el Teorema de Rouché-Frobenius para determinar el tipo de sistema:

					Sea A·X = B un sistema de m ecuaciones lineales con n incógnitas (sobre un cuerpo en general), siendo m y n naturales (no nulos):
						A·X = B es compatible si, y sólo si, rango( A ) = rango ( A | B ).
						A·X = B es compatible determinado si, y sólo si, rango( A ) = n = rango( A | B ).
					</h2>
		</div>
	</div>
	 <!--FILA4/columna 12/-->
	 <div class="row">
		<div class="nueve col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			<br>
		<h1>Desarrollo </h1>
		<br>
		</div>
	</div>
	<!--EJERCICIO-->
	<!--FILA4/columna 12/-->
	<div class="row">
		<!--dentro de filas columnas-->
		<!--col=columnas-->
			<div class="siete col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
				<h2>Ejercicio :</h2>
			<h1><img src="https://www.matesfacil.com/matrices/SEL-G-1.png" width="500" height="500" alt=""></h1>
			</div>
		<div class="cinco col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
			<h2>La matriz ampliada del sistema es</h2>
			<h1><img src="https://www.matesfacil.com/matrices/SEL-G-1-1.png" width="500" height="500" alt=""></h1>
		</div>
	</div>
	<!--FILA4/columna 12/-->
	<div class="row">
		<div class="nueve col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			<br>
		<h1>de la misma dimensión que el sistema (2x3). La línea vertical separa la matriz de coeficientes del vector de términos independientes.
			Realizamos operaciones elementales fila para obtener la matriz en forma escalonada reducida</h1>
		<br>
		</div>
	</div>
	<!--FILA4/columna 12/-->
	<div class="row">
		<!--dentro de filas columnas-->
		<!--col=columnas-->
			<div class="cinco col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
				<h2>Multiplicamos la primera fila por 1/5 y la segunda por 1/3</h2>
				<h1><img src="https://www.matesfacil.com/matrices/SEL-G-1-2.png" width="500" height="500" alt=""></h1>
			</div>
		<div class="siete col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
		<h2>Sumamos a la segunda fila la primera</h2>
			<h1><img src="https://www.matesfacil.com/matrices/SEL-G-1-3.png" width="500" height="500" alt=""></h1>
		</div>
	</div>
	<!--FILA4/columna 12/-->
	<div class="row">
		<!--dentro de filas columnas-->
		<!--col=columnas-->
			<div class="siete col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
			<h2>Multiplicamos la segunda fila por 5/7</h2>
				<h1><img src="https://www.matesfacil.com/matrices/SEL-G-1-4.png" width="500" height="500" alt=""></h1>
			</div>
		<div class="cinco col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
		<h2>Sumamos a la primera fila la segunda fila multiplicada por -2/5</h2>
				<h1><img src="https://www.matesfacil.com/matrices/SEL-G-1-5.png" width="500" height="500" alt=""></h1>
		</div>
	</div>
	<!--FILA4/columna 12/-->
	<div class="row">
		<!--dentro de filas columnas-->
		<!--col=columnas-->
			<div class="cinco col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
			<h2>Esta última matriz equivalente ya tiene forma escalonada reducida y nos permite ver rápidamente los rangos de la matriz de coeficientes y de la ampliada.

			<br><br> Calculamos los rangos de la matriz coeficientes y de la matriz ampliada</h2>
				<h1><img src="https://www.matesfacil.com/matrices/SEL-G-1-6.png" width="500" height="500" alt=""></h1>
			</div>
		<div class="siete col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
		<h2>Por el Teorema de Rouché-Frobenius, el sistema es compatible determinado. La matriz obtenida representa el sistema</h2>
				<h1><img src="https://www.matesfacil.com/matrices/SEL-G-1-7.png" width="250" height="250" alt=""></h1>
				<h2>que son las soluciones del sistema inicial.</h2>
		</div>
	</div>
	<!--FILA7/columna 12/-->
	<div class="row">
		<div class="uno col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			<br>
			<h1>Desarróllo en Lenguaje PHP</h1><br>
		</div>
	</div>
	<!--FILA4/columna 12/-->
	<div class="row">
		<!--dentro de filas columnas-->
		<!--col=columnas-->
			<div class="ocho col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
<br><br>
						<div class="card">
			<div class="card-body">
				<div align="center">
											<form action="gauss/gauss.php" method="post">
									<fieldset>
									<legend><h1>Sistema de Ecuaciónes <br> Método Gauss - Jordan</h1></legend>
									<table>
										<tr>
										<td><h1>Ingrese filas : </h1></td>
										<td><h1><input  name="Matriz[filas]" class="uk-form-width-medium uk-form-large"/></h1></td>
										</tr>
										<tr>
										<td><h1>Ingrese columnas :     </h1></td>
										<td><h1><input name="Matriz[columnas]" class="uk-form-width-medium uk-form-large"/></h1></td>
										</tr>
										<tr>
										<td colspan="2">
											<h1><input class="btn btn-success btn-block btn-lg" type="submit" value=" CREAR MATRIZ "></h1>
										</td>
										</tr>
									</table>
									</fieldset>
								</form>
								</div>
					</div>
					</div>
				<br><br>
			</div>
	</div>
	<!--FILA7/columna 12/-->
	<div class="row">
		<div class="once col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
			<br>
			<h3>MAS PROYECTOS DESARROLLADOS</h3><br>
		</div>
		<div class="dos col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
			<br>
			<h3><a href="matriz_invertida/index.php/#">MATRIZ INVERSA<br> 3X3</a></h3><br>
		</div>
		<div class="once col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
			<br>
			<h3><a href="https://vectorcalk.tumblr.com/">Módulo de un <br>
				VECTOR</h3></a><<br>
		</div>
		
	</div>
	<!--FILA7/columna 12/-->
	<div class="row">
		<div class="uno col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			<br>
			<h4>Interfaz realizada por Gixon Andrade, Anderson Chanchay - V0.3</h4><br>
		</div>
	</div>
	

	<!--Aqui termina mi contenedor-->
</div>
<!--Ingreso de jquery-->
<script src="lib/boot/js/jquery-3.2.1.min.js"></script>
<script src="lib/boot/js/bootstrap.min.js"></script>
</body>
</html>