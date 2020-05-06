<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // begin the session
    session_start();
 
    $separado_comas = implode(",", $_SESSION['idiomas']);
    
    echo "<p>Los idiomas que usted sabe son: </p>";
    echo "<br>";
    echo $separado_comas;

   ?>
</body>
</html>