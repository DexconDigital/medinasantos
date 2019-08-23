<?php 
require 'bases_de_datos/noticiasDB.php';
$page="blog";?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <?php include 'layout/archivosheader.php'; ?>
</head>

<body>
    <!-- Menu -->
    <?php include 'layout/menu.php'; ?>
    <!-- Fin de Menu -->
    <div class="container-fluid body">
        <div class="blog-section content-area-2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="main-title">
                            <h1>Nuestros Blog</h1>
                        </div>
                    </div>
                    <?php if(isset($noticias_array) && is_array($noticias_array)){
                            modelo_noticia($noticias_array);
                        }?>
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