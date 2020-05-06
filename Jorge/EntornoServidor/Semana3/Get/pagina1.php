<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nombre = urlencode("Eva");
        $apellidos = urlencode("Jiménez");
        $curso = urlencode("[2º]");
        $modulo = urlencode("desarrollo de aplicaciones web");
    ?>
    
    <a href="pagina2.php?nombre=<?php echo $nombre?>&apellidos=<?php echo $apellidos?>&curso=<?php echo $curso?>&modulo=<?php echo $modulo?>">Enlace</a>
</body>
</html>