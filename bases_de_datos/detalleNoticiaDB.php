<?php
require_once( 'conexion.php' );
require_once( "formato_fecha.php" );
$codigo = 0;
$codigo = $_GET['co'];

$link = Conect();

$sql = "SELECT * FROM noticias WHERE id = $codigo";
$result = $link->prepare( $sql );
$result->execute();
$resultado = $result->fetchAll();

foreach ( $resultado as $key => $field ) {
    $nombre = $field['nombre'];
    $id = $field['id'];
    $descripcion = $field['descripcion'];
    $imagen = $field['imagen'];
    $archivo = $field['archivo'];
    $noticia = $field['noticia'];
    $fecha_complete = $field['fecha'];
}

$fecha = fecha_es( $fecha_complete, "d M" );
$comparador = './admin-medina/admin/';
$ruta_imagen = './admin-medina/admin/'.$imagen;
$ruta_archivo = $comparador.$archivo;

?>