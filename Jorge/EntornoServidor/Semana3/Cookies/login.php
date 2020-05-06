<!DOCTYPE html>
<?php
    // VARIABLES Y COOKIES
    //Tiene que estar antes de la etiqueta HTML
   if(isset($_POST['enviar'])){
            $codigo = $_POST['codigo'];
            $nombre = $_POST['nombre'];
    setcookie("nombre", $nombre, time()+60, "localhost"); //El directorio no lo especifico porque por defecto es el actual
    setcookie("codigo", $codigo, time()+60, "localhost"); //El directorio no lo especifico porque por defecto es el actual
    header("Location: procesa.php");
    exit;
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
			<input type="text" name="codigo" placeholder="12345" size="20">
			<br><br>
            <input type="text" name="nombre" placeholder="Nombre" size="20">
			<br><br>
			<input type="submit" name="enviar" value="Procesar">
		</form>
</body>
</html>