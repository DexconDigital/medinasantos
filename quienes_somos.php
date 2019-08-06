<?php require 'variables/variables.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include 'layout/archivosheader.php'; ?>
    <title>Quienes somos</title>
</head>

<body>
    <section>
        <?php include 'layout/menu.php'; ?>
    </section>

    <section id="banner">
    <?php include 'layout/banner.php'; ?> 
    </section>

    <section>
        <div class="container p-5 border border-secondary">

            <div class="row col-12 border border-secondary">
                <div class="col-5 border border-secondary height: 100%">
                    <img class="img_quienesomos" src="images/no_image.png" alt="">
                </div>
                <div class="col-7  titulo_publicaciones border border-secondary">
                    <div>
                        <h3> Bienvenido a Inmobiliaria Medina Santos</h3>
                    </div>
                    <div class="p-2">
                        <b>es simplemente el texto de relleno de las imprentas y archivos de texto.
                            Lorem Ipsum ha sido el texto</b>
                    </div>
                    <div class="p-2">
                        <p>es simplemente el texto de relleno de las imprentas y archivos de texto.
                            Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500,
                            cuando un impresor (N. del T. persona que se dedica a la imprenta)</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="banner_estadísticas">
        <div class="banner_estadi border border-secondary">
            <div class="container border border-secondary contenedor_banner">
                <div class="row  border border-secondary border border-secondary p-5">
                    <div class="col-3 text-center">
                        <div>
                        <i class="far fa-address-card tamaño_icono_banner"></i>
                            <h1>100</h1>
                            <h5> Experiencia</h5>
                        </div>
                    </div>
                    <div class="col-3 text-center">
                        <div>
                        <i class="far fa-address-card tamaño_icono_banner"></i>
                            <h1>100</h1>
                            <h5>Total Inmuebles</h5>
                        </div>
                    </div>
                    <div class="col-3 text-center">
                        <div>
                        <i class="far fa-address-card tamaño_icono_banner"></i>
                            <h1>100</h1>
                            <h5>Inmuebles en arriendo</h5>
                        </div>
                    </div>
                    <div class="col-3 text-center">
                        <div>
                        <i class="far fa-address-card tamaño_icono_banner"></i>
                            <h1>100</h1>
                            <h5>Inmuebles en venta</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <footer>
        <?php include 'layout/footer.php'; ?>
    </footer>

    <!-- scripts -->
    <?php include 'layout/archivosfooter.php'; ?>
</body>

</html>