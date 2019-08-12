<?php 
    // modelo inmueble propiedades destacadas Recibe el array y la cantidad de inmuebles a mostrar
    function modelo_inmueble_destacadas($r, $cantidad_inmuebles){
        // Recorrer el array la cantidad de veces que se le indique
        for ($i = 0; $i < $cantidad_inmuebles; $i++) {

            // validar si existe la imagen, si no existe colocar la imagen de no imagen
            $imagen = existeImagen(($r[$i]['foto1']));

            // Eliminar el id de la inmobiliaria
            $codigo = str_ireplace("813-", "", $r[$i]['Codigo_Inmueble']);

            // a la variable "api" le asignamos el array con la iteraccion
            $api = $r[$i];
            
            // Renombrar variables
            $administracion = $api['Administracion'];
            $alcobas = $api['Alcobas'];
        }
    }
    
    function modelo_inmueble_similares($r, $url){
        for ($i = 0; $i < count($r); $i++) {
            $imagen = existeImagen(($r[$i]['foto1']), $url);
            $codigo = str_ireplace("813-", "", $r[$i]['Codigo_Inmueble']);
            $api = $r[$i];
        }
    }

    function existeImagen($r) {
            if ($r == "") {
                $r = "images/no_image.png";
            }
            return $r;
    }
