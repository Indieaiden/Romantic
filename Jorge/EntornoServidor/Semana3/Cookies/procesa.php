<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (count($_COOKIE)>0) {
            
            $nombre = $_COOKIE['nombre'];;
            $codigo = $_COOKIE['codigo'];;
        }
        else {
            echo "<p> No cookie available </p>";
        }
   ?>
    
    <p>Esta es la solucion:</p>
    <p>Nombre: <?php echo $nombre; ?></p>
    <p>Codigo: <?php echo $codigo; ?></p>
</body>
</html>