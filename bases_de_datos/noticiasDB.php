<?php

require_once("conexion.php");

$link = Conect();
$array = array();

    $sql = "SELECT * FROM noticias  where id_inmobiliaria2 = 6 order by id desc";
    $result = mysqli_query($link, $sql) or die(mysqli_error($link));
    while ($field = mysqli_fetch_array($result)) {
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
    $cantidad_noticias = 3;
    for($i=0; $i<$cantidad_noticias; $i++){
    echo'
    <div class="col-lg-6 col-md-6">
        <div class="row blog-3">
            <div class="col-lg-5 col-md-12 col-pad ">
                <div class="photo">
                    <img src="'.$r['imagen'].'" alt="blog-6" class="img-fluid">
                    <div class="date-box">
                        <span>03</span>May
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 col-pad align-self-center">
                <div class="detail">
                    <h3>
                        <a href="http://storage.googleapis.com/themevessel-products/xero/blog-single-sidebar-right.html">Buying
                            a Home</a>
                    </h3>
                    <div class="post-meta">
                        <span><a href="http://storage.googleapis.com/themevessel-products/xero/index.html#"><i class="fa fa-user"></i>John Antony</a></span>
                        <span><a href="http://storage.googleapis.com/themevessel-products/xero/index.html#"><i class="fa fa-clock-o"></i>7 Comment</a></span>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem
                        Ipsum has been the industrys standard dummy text ever since the 1500s, when
                        an
                        unknown printer took a</p>
                </div>
            </div>
        </div>
    </div>';
    }
}

function modelo_noticia($r){
    for($i=0; $i<count($r); $i++){
    $ruta_imagen= "./admin-noticias/admin/".$r[$i]['imagen'];
    echo '
    <div class="col-12 col-md-6">
        <div class="card mb-3">
            <div class="img-container">
                <img src="'.$ruta_imagen.'" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
                <h5 class="card-title">'.$r[$i]['titulo'].'</h5>
                <p class="card-text">'.$r[$i]['descripcion'].'</p>
                <div class="w-100 d-flex justify-content-center">
                    <a href="./detalle-noticia.php?co='.$r[$i]['id'].'" class="btn btn-primary text-center">Ver más</a>
                </div>
                <p class="card-text"><small class="text-muted">Publicado el: '.$r[$i]['fecha'].'</small></p>
            </div>
        </div>
    </div>';
    }
}
?>