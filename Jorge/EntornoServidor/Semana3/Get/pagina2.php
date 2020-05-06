<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nombre = urldecode($_GET['nombre']);
        $apellidos = urldecode($_GET['apellidos']);
        $curso = urldecode($_GET['curso']);
        $modulo = urldecode($_GET['modulo']);
    ?>
    
    <p>Esta es la solucion:</p>
    <p>Nombre: <?php echo $nombre; ?></p>
    <p>Apellidos: <?php echo $apellidos; ?></p>
    <p>Curso: <?php echo $curso; ?></p>
    <p>Modulo: <?php echo $modulo; ?></p> 
</body>
</html>