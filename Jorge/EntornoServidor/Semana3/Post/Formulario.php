<!DOCTYPE html>
<html lang = "es">
	<head>
		<Title>Formularios </Title>
		<meta charset="UTF-8"/>
		<meta name="author" content="Jorge Martín García"/>
	</head>
	<body>
		<?php
		//DECLARACIÓN DE FUNCIONES
		function filtrado($datos){
			$datos = trim($datos);//elimina espacios antes y después de los datos
			$datos = stripslashes($datos);//elimina Backslashes
			$datos = htmlspecialchars($datos);//traduce caracteres especiales en entidades html;
			return $datos;
		}

		//A PARTIR DE AQUÍ
		$validado = false;
		if (isset($_POST['enviar'])){ //Con esto comprobamos si hemos enviado ya el formulario o es la primera vez
			/*
				Validar los datos solamente si se ha enviado y activas
				un flag.
			*/

			/*
				Aquí comprobar que se han enviado todos los datos y decir cuantos faltan
			*/ 
			echo "Todo validado";
			echo "<br>";
			$validado = true;
		} //Endif POST[enviar]

		if (isset($_POST['enviar']) && $validado){
		$cadena = filtrado($_REQUEST['cadcar']);
		print ($cadena);
		print ("<br>");
		$sexo = $_REQUEST['genero'];
		print ($sexo);
		print ("<br>");
		$pleonasmos = $_REQUEST['pleonasmos'];
		foreach($pleonasmos as $pleonasmo)
			print ("$pleonasmo <br>");
		$armadura = $_REQUEST['armadura'];
		print ($armadura);
		print ("<br>");
		
	} //endif ISSET && errores


	else{ //Si no está enviado y tiene algún error
		?>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
			<input type="text" name="cadcar" placeholder="Nombre personaje" size="20">
			<br><br>
			<input type="radio" name="genero" value="M" >Mujer
			<input type="radio" name="genero" value="H" >Hombre
			<input type="radio" name="genero" value="N" >NB
			<br><br>
			<input type="checkbox" name="pleonasmos[]" value="Omnia" > Omnia
			<input type="checkbox" name="pleonasmos[]" value="Vincit"> Vincit
			<input type="checkbox" name="pleonasmos[]" value="Amor"> Amor
			<br><br>
			<select name ="armadura">
				<option value="pesada" selected>Pesada</option>
				<option value="ligera">Ligera</option>
				<option value="vestimenta">Vestimenta</option>
			</select>
			<br><br>
			<input type="submit" name="enviar" value="Procesar">
		</form>
		<?php
	} //endelse

		?>
	</body>
</html>
