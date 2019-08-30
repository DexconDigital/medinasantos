<?php $page="blog";
require 'bases_de_datos/detalleNoticiaDB.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalle Publicacion</title>
    <?php include 'layout/archivosheader.php'; ?>
</head>

<body>
    <!-- Menu -->
    <?php include 'layout/menu.php'; ?>
    <!-- Fin de Menu -->
    <div class="container-fluid body">
    <div class="blog-section content-area-13">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12">
                    <!-- Blog grid box start -->
                    <div class="blog-1">
                        <img class="blog-theme img-fluid" src="<?php echo $ruta_imagen?>" alt="blog-3">
                        <div class="detail">
                            <div class="date-box">
                                <h5><?php echo $fecha;?></h5>
                            </div>
                            <h2>
                                <?php echo $nombre;?>
                            </h2>
                                <?php echo $noticia;?>
                            <br>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php include 'layout/footer.php'; ?>
    <script>
        var pagina = false;
    </script>
    <?php include 'layout/archivosfooter.php'; ?>
</body>

</html>