<!DOCTYPE html>
<html lang = "es">
	<head>
		<Title> Sesion contador</Title>
		<meta charset="UTF-8"/>
		<meta name="" content=""/>
	</head>
	<body>
	<?php
	session_start();
	function filtrado($datos){
			$datos = trim($datos);//elimina espacios antes y después de los datos
			$datos = stripslashes($datos);//elimina Backslashes
			$datos = htmlspecialchars($datos);//traduce caracteres especiales en entidades html;
			return $datos;
		}
	// get date te da una array con todos los satos de la fecha actual guardados es las distintas partes del array fecha actual ej seconds[tal] minutes[tal] etc
	// $FechaActual=getdate();
	//la funcion time te devuelve la fecha actual en formato unix
	$fechaActual=time();
	//echo "$FechaActual";
	//la funcion soretime sirve pra convertir una fecha, en formato string si los caracteres son aceptados, en una fecha formato unix
	// $fechaActualUnix = strtotime($FechaActual);

		//MOSTRAR
	?>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">
					Pon una Fecha: <input type="date" name="fecha1" value="2020-04-25" size="20" required="required">
					<br><br>
					Pon una Hora: <input type="time" name="hora1" value="11:45:00" size="10" required="required">
					<br><br>
					<input type="submit" name="enviar" value="Enviar">
			</form>
		<?php
		if (isset($_GET['enviar'])){

			$fecha1 = $_GET["fecha1"];
			$hora1 = $_GET["hora1"];
			$fechaUnix = strtotime($fecha1);
			$horaUnix = strtotime($hora1);
			$fechaReal = $fechaUnix;
			//echo "$fechaReal";
		}

		if ($fechaReal < $fechaActual) {
			echo "El futuro está aquí";
		}
		else {
			echo "Aun no ha llegado el futuro <br>";
		}
		?>
	</body>
</html>