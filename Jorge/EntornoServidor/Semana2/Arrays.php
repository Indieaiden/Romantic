<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=php, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$array = array ( 
"España"  => array ( 
    "Madrid",
    "Barcelona", 
    "Sevilla", 
    "Valencia", 
    "Murcia"   
),
"Francia" => array ( 
    "París",
    "Niza",
    "Burdeos",
    "Tolouse"
),
"Alemania" => array (
    "Berlín",
    "Munich",
    "Hamburgo",
    "Bremen",
    "Colonia",
    "Dresde"
),
"Reino Unido" => array (
    "Londres",
    "Manchester",
    "Oxford"
),
"Italia" => array (
    "Roma",
    "Florencia",
    "Venecia",
    "Milan"
)
) //Fin Array primero

?>



<form action="Arrays.php" method="get">
<?php 
    foreach ($array as $key => $value) {
        echo "<div> <p>" . $key . "</p> </div>";
        echo "<select name=\"". $key ."\">";
        echo "<option selected> ---Ninguno--- </option>";
        for ($j=0; $j < count($value); $j++) { 
            echo "<option value=\"".$j."\">". $value[$j] ."</option>";
        }
    echo "</select>";
    } 
?>

</form>
</body>
</html>