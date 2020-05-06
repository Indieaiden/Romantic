<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Formulario</title>
		<meta charset= "utf-8"/>
		<meta name = "description" content="Mi primera página"/>
		<meta name= "author" content= "Jorge Martin Garcia"/>

	</head>
	<body>
		<?php
    //errores empieza vacío???????
            $errores = false;
            session_start();
      /*
        Primero comprobamos si el formulario está enviado. En caso de que sí, entramos
        a hacer las comprobaciones pertinentes de nombre, contraseña etc etc. De esta forma,
        ponemos errores con ALGÚN valor.
      */
			if(isset($_POST['enviar'])){


        /*
          Una vez ya sabemos que el formulario ha sido enviado, comprobamos si hay errores en
          los datos. En caso de que no haya ninguno, es decir (no esté vacío, etc etc), ponemos ERRORES a false
          y en caso de que haya errores, lo ponemos a true. Así, en el siguiente if, solamente lanzaremos la
          aplicación en caso de que NO haya errores
        */

			// } ENDIF Isset($_POST[enviar])


			if(isset($_POST['enviar']) && $errores == false){
        //Aquí se llama a la aplicación en caso de que el formulario esté de puta madre.

				/*----------APLICACIÓN-----------*/
                $_SESSION['idiomas'] = $_POST['idioma'];
                header("Location: procesa_sesiones.php");
                exit;


            }
         } //Endif ISSET && ERRORES (Segunda o primera vez que se envía el formulario)

      else{ //A partir de aquí está el Formulario

        /*Dentro de cada uno de los input, hacemos una comprobación en caso
        de que se haya enviado, y si se ha enviado anteriormente se hace un echo
        con el valor de la variable. De esta forma, al reenviar en formulario no se pierden los
        datos*/
		?>
				<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
					<p>Marca el/los idiomas que conoces: </p>

					<select name= "idioma[]" multiple="multiple">
						<option value="in" <?php
						echo !empty($_POST['idioma']) && in_array("in",$_POST['idioma'])?
							'selected="selected"':"";?>>Ingles</option>
						<option value="es" <?php
						echo !empty($_POST['idioma']) && in_array("es",$_POST['idioma'])?
							'selected="selected"':"";?>>Espaniol</option>
						<option value="fr" <?php
						echo !empty($_POST['idioma']) && in_array("fr",$_POST['idioma'])?
							'selected="selected"':"";?>>Frances</option>
						<option value="al" <?php
						echo !empty($_POST['idioma']) && in_array("al",$_POST['idioma'])?
							'selected="selected"':"";?>>Aleman</option>
						<option value="it" <?php
						echo !empty($_POST['idioma']) && in_array("it",$_POST['idioma'])?
							'selected="selected"':"";?>>Italiano</option>
					</select>

					<br/>

					<input name ="enviar" type="submit" value="Enviar"/>

				</form>
		<?php
        } //Endelse
		?>
	</body>
</html>