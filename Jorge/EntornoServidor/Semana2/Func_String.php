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
					Introduce algo: <input type="text" name="texto" placeholder="En un lugar de la Mancha..." size="30" required="required">
					<br><br>
					<input type="submit" name="enviar" value="Enviar">
			</form>
		<?php
		if (isset($_GET['enviar'])){
            $texto = $_GET['texto'];
            if (is_string($texto)) {

                $agujas = array('a','e','i','o','u'); 

                echo "<p>El texto: ". $texto ."</p>";
                echo "<p>Cantidad de letras: ". strspn($texto, "qwertyuiopasdfghjklñzxcvbnmQWERTYUIOPASDFGHJKLÑZXCVBNM") ."</p>";
                echo "<p>Al revés: ". strrev($texto) ."</p>";
                echo "<p>En minuscula: ". strtolower($texto) ."</p>";
                echo "<p>Todas las vocales por a: ". str_replace($agujas, "a", $texto) ."</p>";
                echo "<p>Sustituyendo caracteres HTML: ". htmlspecialchars($texto) ."</p>"; //No termino de entender esto, pero lo envío
            }
            else {
                echo "<p>El valor debe ser numérico</p>";
            }
		}
		?>
	</body>
</html>