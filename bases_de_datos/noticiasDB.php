<?php

require_once("conexion.php");
require_once("formato_fecha.php");

$link = Conect();
$array = array();

$sql_noticias = "SELECT * FROM noticias  where id_inmobiliaria2 = 6 order by id desc";
$result = $link->prepare( $sql_noticias );
$result->execute();

$resultado = $result->fetchAll( );

foreach ( $resultado as $key => $field ) {
    $nombre = $field['nombre'];
    $id = $field['id'];
    $descripcion = $field['descripcion'];
    $imagen = $field['imagen'];
    $noticia = $field['noticia'];
    $fecha = $field['fecha'];
    $noticias_array[] = array(
        'titulo' => $nombre,
        'id' => $id,
        'descripcion' => $descripcion,
        'imagen' => 'admin-medina/admin/'.$imagen,
        'noticia' => $noticia,
        'fecha' => $fecha
    );
}

function modelo_ultima_noticia($r){
    if(count($r) > 2){
        $cantidad_noticias = 2;
    }else{
        $cantidad_noticias = count($r);
    }
    for($i=0; $i<$cantidad_noticias; $i++){
       $fecha = fecha_es($r[$i]['fecha'], "d M"); 

        $descripcion = $r[$i]['noticia'];
        $limite_de_cadena = 100;
        // recortar cadena
        if (strlen($descripcion) >= $limite_de_cadena) {
            $descripcion = substr($descripcion, 0, $limite_de_cadena) . '...';
        } else {
            $descripcion = $descripcion . '...';
        }
    echo'
    <div class="col-lg-6 col-md-6">
        <div class="row blog-3">
            <div class="col-lg-5 col-md-12 col-pad ">
                <div class="photo">
                    <img src="'.$r[$i]['imagen'].'" alt="blog-6" class="img-fluid">
                    <div class="date-box">
                        '.$fecha.'
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 col-pad align-self-center">
                <div class="detail" style="word-break:break-all;">
                    <h3>
                        <a href="detalle-publicacion.php?co='.$r[$i]['id'].'"> '.$r[$i]['titulo'].'</a>
                    </h3>

                    <p>'.$descripcion.'</p>
                </div>
            </div>
        </div>
    </div>';
    }
}

function modelo_noticia($r){
    for($i=0; $i<count($r); $i++){
    $fecha = fecha_es($r[$i]['fecha'], "d M"); 
        $descripcion = $r[$i]['noticia'];
        $limite_de_cadena = 100;
        // recortar cadena
        if (strlen($descripcion) >= $limite_de_cadena) {
            $descripcion = substr($descripcion, 0, $limite_de_cadena) . '...';
        } else {
            $descripcion = $descripcion . '...';
        }
    echo '
    <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="blog-1">
            <img src="'.$r[$i]['imagen'].'" alt="blog" class="img-fluid">
            <div class="detail" style="word-break:break-all;">
            <div class="date-box" style="color: #fff;">
                   <span> '.$fecha.' <span>
                </div>
                <h3>
                <a href="detalle-publicacion.php?co='.$r[$i]['id'].'"> '.$r[$i]['titulo'].'</a>
                </h3>
                    <p>'.$descripcion.'</p>
            </div>
        </div>
    </div>';
    }
}
?>