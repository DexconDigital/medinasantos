
     <?php
        require_once("conexion.php");
        $id = $_GET["id"];
        $con = Conect();
        $consulta = "SELECT * FROM slide_inicio WHERE id = '$id'";
        $result = mysqli_query($con, $consulta) or die(mysqli_error($con));
        while ($field = mysqli_fetch_array($result)) {
            $imagen = $field['ruta_imagen'];          
        }
        unlink($imagen);

        $qry = "DELETE FROM slide_inicio WHERE id ='$id'  ";
        $sql = mysqli_query($con, $qry);

        if (!$sql) {
            echo 'No se logro realizar la peticion';
        } else {
            header("Location: lista-imagenes.php");
        }
        ?>
    
    
