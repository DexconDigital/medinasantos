<?php
require_once( "conexion.php" );
$id = $_GET["id"];
$con = Conect();
$consulta = "SELECT * FROM slide_inicio WHERE id = '$id'";
$result = $con->prepare( $consulta );
$result->execute();
$resultado = $result->fetch();

$imagen = $field['ruta_imagen'];
unlink( $imagen );

$qry = "DELETE FROM slide_inicio WHERE id ='$id'  ";
$result = $con->prepare( $qry );
$result->execute();

if ( !$result ) {
    echo 'No se logro realizar la peticion';
} else {
    header( "Location: lista-imagenes.php" );
}
?>
