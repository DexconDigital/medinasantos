<?php 
require 'conexion.php';

// Consulta Imagenes
$con = Conect();
$qry = "SELECT * FROM slide_inicio";
$sql = mysqli_query($con, $qry);