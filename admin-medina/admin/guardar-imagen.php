<?php
require_once 'conexion.php';

$nombre=$_REQUEST["titulo"];
$frase=$_REQUEST["frase"];
$foto=$_FILES["imagen"]["name"];
$ruta=$_FILES["imagen"]["tmp_name"];
$nombre_foto = str_replace(" ","",$foto);
$destino="fotos/".$nombre_foto;
$id_inmo = 6;


$con = Conect();
    copy($ruta,$destino);

        mysqli_query($con, "INSERT INTO `slide_inicio` (`id`, `ruta_imagen`, `alt_imagen`, `texto-banner`, `id_inmobiliaria_5`) VALUES (NULL, '$destino', '$nombre', '$frase', '$id_inmo')");
        header("Location: lista-imagenes.php");
?>