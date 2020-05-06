<!DOCTYPE html>
<html lang = "es">
	<head>
		<Title> Sesion contador</Title>
		<meta charset="UTF-8"/>
		<meta name="author" content="Jorge Martin"/>
	</head>
	<body>
	<?php

	function filtrado($datos){
			$datos = trim($datos);//elimina espacios antes y después de los datos
			$datos = stripslashes($datos);//elimina Backslashes
			$datos = htmlspecialchars($datos);//traduce caracteres especiales en entidades html;
			return $datos;
		}

	?>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">
					Pon un número <input type="text" name="numero" placeholder="3.1283" size="20" required="required">
					<br><br>
					<input type="submit" name="enviar" value="Enviar">
			</form>
		<?php
		if (isset($_GET['enviar'])){
            $numero = $_GET['numero'];
            if (is_numeric($numero)) {
                echo "<p>El numero: ". $numero ."</p>";
                echo "<p>El en binario: ". decbin($numero) ."</p>";
                echo "<p>El en octal: ". decoct($numero) ."</p>";
                echo "<p>El en hexadecimal: ". dechex($numero) ."</p>";
                $flotante = floatval($numero);
                echo "<p>Redondeado dos cifras: ". round($flotante, 2) ."</p>";
            }
            else {
                echo "<p>El valor debe ser numérico</p>";
            }
		}
		?>
	</body>
</html>