<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=php, initial-scale=1.0">
    <title>Document</title>
    <style>
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg .tg-0lax{text-align:left;vertical-align:top}
</style>
</head>
<body>
<?php
    $ent = 5;
    $flot = 2.5;
    $caden = "hola";
    $bulea = TRUE;
    $und;

    error_reporting(0);

    $array = array($ent,$flot,$caden,$bulea,$und);
?>
<table class="tg">
        <tr>
         <th class="tg-0pky"></th>
         <th class="tg-0pky" colspan="3"><div class="blue">Operaciones</div></th>
        </tr>
        <tr>
            <td><div class="stdong_red">Valores</div></td>
            <td><div class="light_red">a+b</div></td>
            <td><div class="light_red">a.b</div></td>
            <td><div class="light_red">a>b</div></td>
        </tr>

        <?php
            $tamanio = sizeof($array);
            for ($i=0; $i<$tamanio-1; $i++) {

                for ($j=$i+1; $j<sizeof($array) ; $j++) { 
                    if($i!=1){
                    $suma = $array[$i] + $array[$j];
                    $concat = $array[$i] . $array[$j];
                    $mayorque = $array[$i] > $array[$j];
                    echo "<tr>\n";
                    echo "<td> a=" . $array[$i] . ", b=" . $array[$j] . " </td>\n";
                    echo "<td>" . $suma ."</td>\n";
                    echo "<td>". $concat ."</td>\n";
                    echo "<td>". $mayorque ."</td>\n";
                    echo "</tr>";
                }
                }
            }                
        ?>
        
    </table>
</body>
</html>