<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- si form enviado
        {
            comprobamos datos
            flag;

            flag = negativa -> Guardar errores en variables
                
            
            flag = positiva -> Enviar sin errores

       }
       
    si no enviado || flag negativa 
        {
            if flag negativa -> Poner en el formulario lo que está mal 
            formulario para rellenar
        } -->

        <?php
		//DECLARACIÓN DE FUNCIONES
		function filtrado($datos){
			$datos = trim($datos);//elimina espacios antes y después de los datos
			$datos = stripslashes($datos);//elimina Backslashes
			$datos = htmlspecialchars($datos);//traduce caracteres especiales en entidades html;
			return $datos;
        }
        
        function validar($datos){

            $bandera = false;
            if(is_string($datos)){
                if (strlen($datos) >= 5){
                    $bandera = true;
                return $bandera;
                }   
            } //Si es una cadena de caracteres, mayor que cinco, devolvemos true   
            if(is_null($datos)){
                return $bandera;
            } //Si es un null devolvemos false
            if(is_numeric($datos)){
                if ($datos >= 0){
                    $bandera = true;
                    return $bandera;
                }
            } //Si es un numérico, tiene que ser mayor que cero

            if (is_array($datos)){
                foreach($datos as $dato){
                    if(!is_null($dato)) {
                        $bandera = true;
                        return $bandera;
                    }
                }
            }
            $bandera = false;
            return $bandera; //Si no es nada de los contemplados, false
        }
        
        //--------------------LÓGICA DE LA PÁGINA---------------------
        
        //Si está enviado, comprobamos y validamos
        
        if (isset($_POST['enviar'])){ 
            
            /*
                Aquí se hacen las validaciones
            */
            
            //Con esto comprobamos si hemos enviado ya el formulario o es la primera vez
            /*
                Cogemos los datos y los guardamos en variables mientras los analizamos.
            */ 

                //Creamos un array con los datos, para ver si existen.
            $array_datos = array(
                'cadcar' => isset($_POST['cadcar']),
                'genero' => isset($_POST['genero']),
                'pleonasmos' => isset($_POST['pleonasmos']),
                'armadura' => isset($_POST['armadura']),
            );
                //Creamos un array validado, para saber cuáles están bien o mal
            $array_validado;

            /*
                Aquí validamos para cada uno de los datos. En caso de que 
                no exista, se pondrá un -2. En caso de que no sea válido un -1
                En caso de que exista ya, lo recordara con el valor.
            */
            foreach ($array_datos as $key => $value) {
                # code...
                if($value){
                    $array_validado[$key] = -1;
                    if(validar($_POST[$key])){
                        $array_validado[$key] = $_POST[$key];
                    }
                }
                else {
                    $array_validado[$key] = -2;
                }
            }
             
			/*
				Aquí convertimos los datos a algo legible para HTML
			*/ 
            $validado = true;
            foreach ($array_validado as $key => $value) {
                if($value == -1){
                    echo ("Introduzca bien los datos"); //En este caso cadena >=5
                    $validado = false;
                }
                if($value == -2){
                    echo ("Introduzca todos los datos"); //Si falta alguno
                    $validado = false;
                }
            }
        } //Endif POST[enviar]

        /*AQUÍ YA MANEJAMOS LOS DATOS Y LOS ENSEÑAMOS POR PANTALLA SI HACE FALTA*/
        
        
		if (isset($_POST['enviar']) && $validado){
            $cadena = filtrado($_REQUEST['cadcar']);
            print ($cadena);
            print ("<br>");
            $sexo = $_REQUEST['genero'];
            print ($sexo);
            print ("<br>");
            $pleonasmos = $_REQUEST['pleonasmos'];
            foreach($pleonasmos as $pleonasmo)
                print ("$pleonasmo <br>");
            $armadura = $_REQUEST['armadura'];
            print ($armadura);
            print ("<br>");
            
        } //endif ISSET && VALIDO
        
        // SI no se ha enviado aún OR validado es FALSE es que aún falta algo por
        // rellenar bien.

        if(!isset($_POST['enviar']) || !$validado){
        ?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
			<input type="text" name="cadcar" placeholder="Nombre personaje" size="20">
			<br><br>
			<input type="radio" name="genero" value="1" >Mujer
			<input type="radio" name="genero" value="2" >Hombre
			<input type="radio" name="genero" value="0" >NB
			<br><br>
			<input type="checkbox" name="pleonasmos[]" value="Omnia" > Omnia
			<input type="checkbox" name="pleonasmos[]" value="Vincit"> Vincit
			<input type="checkbox" name="pleonasmos[]" value="Amor"> Amor
			<br><br>
			<select name ="armadura">
				<option value="pesada" selected>Pesada</option>
				<option value="ligera">Ligera</option>
				<option value="vestimenta">Vestimenta</option>
			</select>
			<br><br>
			<input type="submit" name="enviar" value="Procesar">
		</form>
		
        <?php

	} //endelse

		?>
	</body>
</html>