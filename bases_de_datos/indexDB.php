<?php 
require_once("conexion.php");

// Consulta Imagenes
$con = Conect();
$qry = "SELECT * FROM `slide_inicio` where `id_inmobiliaria5`= 6";
$result = $con->prepare( $qry );
$result->execute();
$sql = $result->fetchAll();
