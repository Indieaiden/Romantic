<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TituloProvisional</title>
    <style media="screen">
      table{
      width: 50%;
      height: 50%;
      }
      table, td, tr {
        border: 1px solid black;
      }

      img {
        height: 400px;
        width: 250px;
      }
    </style>
  </head>
  <body>
    <?php
    function recogerFotos ($directorio, &$cociente) {

      //Quizá aquí habría que usar glob para los jpg?
       // $fotos = glob($directorio."\*.jpg");  
     // $fotos = scandir($directorio, 1);
      $fotos = glob("fotos/*.jpg");
        //Entrar en el directorio fotos y contar cuantas hay. Dividir entre dos (num columnas)
        //y poner al primer el bucle
        //el cociente
        $num_fotos = sizeof($fotos)-2; //Le quitamos el . y el ..
        $cociente = $num_fotos/2;
        $cociente = ceil($cociente); //En caso de que sea decimal, sumamos uno

        return $fotos;
    }

    /*
      Hacemos el programa, el cociente es una variable dinámica que pasamos para
      ver cuántas filas necesitamos en la tabla.
    */

    $cociente = 0;
    //Con esto cogemos la direccion actual y le sumamos fotos
    $ruta = getcwd()."/fotos";

    if (file_exists($ruta)) {
      // code...
      $fotos = recogerFotos($ruta, $cociente); //Lo hago con una funcion porque habra que hacer comprobaciones más adelante

      print_r($fotos);

      $control = 0;

      echo "<table>";
      for ($i=0; $i<$cociente ; $i++) { //Bucle que mira cuántas filas tiene la tabla
          echo "<tr>";
        for ($j=0; $j<2; $j++) {
          //Pintar las columnas (siempre 2);
          echo "<td><img src=\""."./". $fotos[$control] ."\" alt=\"NohayImagen\"></td>";
          if ($control < sizeof($fotos)-2){
            $control++;
          }
        }
        echo "</tr>";
      }
    echo "</table>";

    } else {
      echo "<p> El directorio no existe </p>";
    }
    ?>
  </body>
</html>
