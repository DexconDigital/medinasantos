<?php 
    // modelo inmueble propiedades destacadas Recibe el array y la cantidad de inmuebles a mostrar
    function modelo_inmueble_destacadas($r, $cantidad_inmuebles){
        // Recorrer el array la cantidad de veces que se le indique
        for ($i = 0; $i < $cantidad_inmuebles; $i++) {

            // validar si existe la imagen, si no existe colocar la imagen de no imagen
            $imagen = existeImagen(($r[$i]['foto1']));

            // Eliminar el id de la inmobiliaria
            $codigo = str_ireplace("254-", "", $r[$i]['Codigo_Inmueble']);

            // a la variable "api" le asignamos el array con la iteraccion
            $api = $r[$i];

            // Renombrar variables
			$ciudad = $api['Ciudad'];
			$barrio = $api['Barrio'];
			$gestion = $api['Gestion'];
			$tipo_inmueble = $api['Tipo_Inmueble'];
			$alcobas = $api['Alcobas'];
			$banios = $api['banios'];
			$garaje = $api['garaje'];
			$area_construida = $api ['AreaConstruida'];
			$area_privada = $api['AreaLote'];
			$administracion = $api['Administracion'];
			$canon = $api['Canon'];
			$edad_inmueble =$api['EdadInmueble'];
			$estrato = $api['Estrato'];
            $venta = $api['Venta'];
            
            echo '
            <div class="item">
                <div class="property-box mx-auto" style="width: 18rem;" >
                <div class="property-thumbnail">
                    <a href="" class="property-img" tabindex="-1">
                        <div class="tag button alt featured">'.$gestion.'</div>
                        <div class="price-ratings-box">
                            <p class="price">
                                '.price_validate($api).'
                            </p>
                        </div>
                        <img src="'.$imagen.'" alt="Imagen propiedad" class="img-fluid">
                    </a>
                    <div class="property-overlay">
                    </div>
                </div>
                <div class="detail">
                    <h1 class="title">
                        <a href=""> '.$tipo_inmueble.'</a>
                    </h1>
                    <div class="location">
                        <a href="" tabindex="-1">
                            <i class="fas fa-map-marker-alt"></i>
                            '.$barrio.', '.$ciudad.'
                        </a>
                    </div>
                    <ul class="facilities-list clearfix">
                        <li>
                            <i class="fas fa-bath"></i> '.$banios.' 
                        </li>
                        <li>
                            <i class="fas fa-bed"></i> '.$alcobas.'
                        </li>
                        <li>
                            <i class="fas fa-ruler-combined"></i> '-$area_construida.' m<sup>2<sup>
                        </li>
                        <li>
                            <i class="fas fa-car"></i> '.$garaje.'
                        </li>
                    </ul>
                </div>
                <div class="footer">
                </div>
            </div>
            ';
        }
    }


    function modelo_inmueble_listar($r){
        // Recorrer el array la cantidad de veces que se le indique
        for ($i = 0; $i < count($r); $i++) {

            // validar si existe la imagen, si no existe colocar la imagen de no imagen
            $imagen = existeImagen(($r[$i]['foto1']));
            
            // Eliminar el id de la inmobiliaria
            $codigo = str_ireplace("254-", "", $r[$i]['Codigo_Inmueble']);

            // a la variable "api" le asignamos el array con la iteraccion
            $api = $r[$i];
            $precio = price_validate($api);
            // Renombrar variables
			$ciudad = $api['Ciudad'];
			$barrio = $api['Barrio'];
			$gestion = $api['Gestion'];
			$tipo_inmueble = $api['Tipo_Inmueble'];
			$alcobas = $api['Alcobas'];
			$banios = $api['banios'];
			$garaje = $api['garaje'];
			$area_construida = $api ['AreaConstruida'];
			$area_privada = $api['AreaLote'];
			$administracion = $api['Administracion'];
			$canon = $api['Canon'];
			$edad_inmueble =$api['EdadInmueble'];
			$estrato = $api['Estrato'];
            $venta = $api['Venta'];
            
            echo '
            <div class="col-4">
                        <div class="property-box">
                            <div class="property-thumbnail">
                                <a href="" class="property-img" tabindex="-1">
                                    <div class="tag button alt featured">'.$gestion.'</div>
                                    <div class="price-ratings-box">
                                        <p class="price">
                                            '.$precio.'
                                        </p>
                                    </div>
                                    <img src="'.$imagen.'" alt="Imagen propiedad" class="img-fluid">
                                </a>
                                <div class="property-overlay">
                                </div>
                            </div>
                            <div class="detail">
                                <h1 class="title">
                                    <a href=""> '.$tipo_inmueble.'</a>
                                </h1>
                                <div class="location">
                                    <a href="" tabindex="-1">
                                        <i class="fas fa-map-marker-alt"></i>
                                        '.$barrio.', '.$ciudad.'
                                    </a>
                                </div>
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="fas fa-bath"></i> '.$banios.' 
                                    </li>
                                    <li>
                                        <i class="fas fa-bed"></i> '.$alcobas.'
                                    </li>
                                    <li>
                                        <i class="fas fa-ruler-combined"></i> '.$area_construida.' m<sup>2<sup>
                                    </li>
                                    <li>
                                        <i class="fas fa-car"></i> '.$garaje.'
                                    </li>
                                </ul>
                            </div>
                            <div class="footer">    
                            </div>
                        </div>
                    </div>
            ';
        }
    }


    function modelo_inmueble_similares($r, $url){
        for ($i = 0; $i < count($r); $i++) {
            $imagen = existeImagen(($r[$i]['foto1']), $url);
            $codigo = str_ireplace("813-", "", $r[$i]['Codigo_Inmueble']);
            $api = $r[$i];
        }
    }

    // Funciones para los modelos de propiedades
    function existeImagen($r) {
            if ($r == "") {
                $r = "images/no_image.png";
            }
            return $r;
    }

    function price_validate($r){
        $precio = '';
        if($r['Gestion'] == 'Arriendo'){
            $precio =  '$'.$r['Canon'];
        }else if($r['Gestion'] == 'Venta'){
            $precio = '$'.$r['Venta'];
        }else{
            $precio = '$'.$r['Canon'].'/ $'.$r['ValorVenta'];
        }
        return $precio;
    }
    
