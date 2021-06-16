<?php
require_once ( 'conexion.php' );

$id = $_REQUEST["id"];
$nombre = $_REQUEST["titulo"];
$frase = $_REQUEST["frase"];
$foto = $_FILES["imagen"]["name"];
$ruta = $_FILES["imagen"]["tmp_name"];
$nombre_foto = str_replace( " ", "", $foto );
$destino = "fotos/".$nombre_foto;
$id_inmo = 6;
$comparador_fotos = "fotos/";

if ( $comparador_fotos != $destino ) {
    $con = Conect();
    $qry = ( "UPDATE `slide_inicio` SET `ruta_imagen` = '$destino', `alt_imagen` = '$nombre', `texto-banner` = '$frase' WHERE `slide_inicio`.`id` = $id" );
    $result = $con->prepare( $qry );
    $result->execute();
    if ( !$result ) {
        echo 'No se logro actualizar';
    } else {
        header( "Location: lista-imagenes.php" );
    }
} else {
    $con = Conect();
    $qry = ( "UPDATE `slide_inicio` SET `alt_imagen` = '$nombre', `texto-banner` = '$frase' WHERE `slide_inicio`.`id` = $id" );
    $result = $con->prepare( $qry );
    $result->execute();
    if ( !$result ) {
        echo 'No se logro actualizar';
    } else {
        header( "Location: lista-imagenes.php" );
    }
}
?>