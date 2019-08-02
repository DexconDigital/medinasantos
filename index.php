<?php require 'variables/variables.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include 'layout/archivosheader.php' ?>
    <title><?php echo $nombre_inmobiliaria; ?></title>
</head>

<body>
    <?php include 'layout/menu.php' ?>
    <div class="container-fluid-body">


        <section id="hero">
            <div class="bd-example">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/slide1.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Gran oferta de Inmuebles</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/slide2.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Encuentra tu inmueble soñado</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/slide3.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Pensamos en tus necesidades de vivienda o negocio</h5>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </section>

        <section id="buscador">
            <div class="contenedor_buscador">
                <div class="container">
                    <div class="segundo_contenedor_buscador">
                        <div class="contenedor_contenido">
                            <div class="posicion_busador">

                                <div class="form-group style_camposbuscar rounded-0;">
                                    <div>
                                        <select id="tipo_gestion_buscar" class="form-control">
                                            <option class="bs-title-option" value="">Tipo de Gestión</option>
                                            <option value="1">...</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group rounded-0 style_camposbuscar ">
                                    <div>
                                        <select id="tipo_inmueble_buscar" class="form-control inmueble">
                                            <option class="bs-title-option" value="">Tipo de Inmueble</option>
                                            <option value="1">...</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group rounded-0 style_camposbuscar">
                                    <div>
                                        <select id="ciudad_buscar" class="form-control ciudad">
                                            <option class="bs-title-option" value="0">Ciudad</option>
                                            <option value="">...</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group rounded-0 style_camposbuscar">
                                    <div>
                                        <select id="barrio_buscar" class="form-control zona">
                                            <option>Barrio</option>
                                        </select>
                                    </div>
                                </div>

                                <div id="style_codigo_buscador" class=" form-group rounded-0  float: left">
                                    <input id="codigo_buscar" class="form-control" placeholder="Código">
                                </div>

                                <div id="precio_buscar" class="form-group style_precio_buscador">
                                    <span class="">Precio</span>
                                    <div class="linea_buscador">
                                        <div class="">
                                            <div id="precio_minimo_buscar">
                                                <div>
                                                    <div class="tooltip"><span>$900.000</span></div>
                                                </div>
                                            </div>
                                            <div id="precio_minimo_buscar">
                                                <div class="">
                                                    <div class="tooltip"><span>$1.500.000.000</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="style_boton_buscador">
                                <button id="boton_buscar" class="btn btn-dark rounded-0 col-12">Buscar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</body>


<!--<?php include 'layout/footer.php'; ?>!>
<?php include 'layout/archivosfooter.php';
ss ?>

</body>

</html>