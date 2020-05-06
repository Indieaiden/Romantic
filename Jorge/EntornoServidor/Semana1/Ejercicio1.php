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
        <tr>
            <td> <?php echo("a=$ent, b=$flot");?></td>
            <td> <?php echo($ent+$flot); ?> </td>
            <td> <?php echo($ent . $flot); ?> </td>
            <td> <?php echo($ent>$flot); ?> </td>
        </tr>
        <tr>
            <td><?php echo("a=$ent, b=$caden");?></td>
            <td><?php echo($ent + $caden);?></td>
            <td><?php echo($ent.$caden);?></td>
            <td><?php echo($ent>$caden);?></td>
        </tr>
        <tr>
            <td><?php echo("a=$ent, b=$bulea");?></td>
            <td><?php echo($ent+$bulea);?></td>
            <td><?php echo($ent . $bulea);?></td>
            <td><?php echo($ent>$bulea);?></td>
        </tr>
        <tr>
            <td><?php echo("a=$ent, b=$und");?></td>
            <td><?php echo($ent+$und);?></td>
            <td><?php echo($ent . $und);?></td>
            <td><?php echo($ent>$und);?></td>
        </tr>
        <tr>
            <td><?php echo("a=$caden, b=$bulea");?></td>
            <td><?php echo($caden+$bulea);?></td>
            <td><?php echo($caden.$bulea);?></td>
            <td><?php echo($caden>$bulea);?></td>
        <tr>
            <td><?php echo("a=$caden, b=$und");?></td>
            <td><?php echo($caden+$und);?></td>
            <td><?php echo($caden.$und);?></td>
            <td><?php echo($caden>$und);?></td>
        </tr>
        <tr>
            <td><?php echo("a=$bulea, b=$und");?></td>
            <td><?php echo($bulea+$und);?></td>
            <td><?php echo($bulea.$und);?></td>
            <td><?php echo($bulea>$und);?></td>
        </tr>
    </table>
</body>
</html>