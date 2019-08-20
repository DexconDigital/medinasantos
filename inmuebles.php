<?php require 'controllers/inmueblesController.php'?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inmuebles</title>
    <?php include 'layout/archivosheader.php'; ?>
</head>

<body>
    <!-- Menu -->
    <?php include 'layout/menu.php'; ?>
    <!-- Fin de Menu -->
    <div class="container-fluid body">
        <!-- Buscador -->
        <?php include 'layout/buscador.php' ?>
        <!-- Fin de Buscador -->

        <section id="inmuebles" class="content-area-20 bg-white">
            <div class="container">
                <div class="main-title">
                    <h1>Lista de Inmuebles</h1>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12"></div>
                    <?php
                        if (is_array($r)) {
                            modelo_inmueble_listar($r['Inmuebles']);
                        } else {
                            echo '<h2>No se encuentran Inmuebles</h2>';
                        } ?>
                </div>

                <!-- Paginador -->
                <div class="row">
                    <div class="col-12 text-center">
                        <?php if (is_array($r)) : ?>
                            <div class="pagination-box text-center">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination align-items-end justify-content-center">
                                        <?php if ($paginator->getPrevUrl()) : ?>
                                            <li class="page-item"><a href="<?php echo $paginator->getPrevUrl(); ?>" class="page-link">&laquo;</a></li>
                                        <?php endif; ?>
                                        <?php foreach ($paginator->getPages() as $page) : ?>
                                            <?php if ($page['url']) : ?>
                                                <li <?php echo $page['isCurrent'] ? 'class="page-item active"' : ''; ?>>
                                                    <a href="<?php echo $page['url']; ?>" class="page-link"><?php echo $page['num']; ?></a>
                                                </li>
                                            <?php else : ?>
                                                <li class="page-item disabled"><span><?php echo $page['num']; ?></span></li>
                                            <?php endif; ?>
                                        <?php endforeach; ?>

                                        <?php if ($paginator->getNextUrl()) : ?>
                                            <li class="page-item"><a href="<?php echo $paginator->getNextUrl(); ?>" class="page-link"> &raquo;</a></li>
                                        <?php endif; ?>
                                    </ul>
                                </nav>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <?php include 'layout/footer.php'; ?>
    <script>
        var pagina = false;
    </script>
    <?php include 'layout/archivosfooter.php'; ?>
    <script src="conexion_api/token_api.js"></script>
    <script src="conexion_api/validadores.js"></script>
    <script src="conexion_api/buscador.js"></script>
</body>

</html>