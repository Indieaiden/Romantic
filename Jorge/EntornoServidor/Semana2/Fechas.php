<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Fechas.php" method="get">
        <input type="datetime" name="fecha" id="fechadada">
        <input type="submit" value="Ver fecha" name="submit">
    </form>
    <?php
    $date = new DateTime('now');
    if(isset($_GET["submit"])){
        echo "<p>La fecha: </p>";
        $prueba = $_GET["fecha"];
        echo "<p>".$prueba."</p>";
        echo "<p>".$date."</p>";
        if ($prueba ) {
            echo "<p> No ha pasado </p>";
        } else {
            echo "<p> Sí ha pasado </p>";
        }
        
    }
    ?>
</body>
</html>