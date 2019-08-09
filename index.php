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
                                <div>
                                    <h2 class="display-4">Gran oferta de Inmuebles</h2>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/slide2.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <div>
                                    <h2 class="display-4">Encuentra tu inmueble soñado</h2>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/slide3.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <div>
                                    <h2 class="display-4">Pensamos en tus necesidades de vivienda o negocio</h2>
                                </div>
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
            <?php include 'layout/buscador.php'; ?>
        </section>

        <section id="propiedades">
            <div class="row d-flex justify-content-around p-4">
                <div class="col-12 p-4  ">
                    <h2 class="text-center">Propiedades destacadas</h2>
                </div>

                <div class="col-12">
                    <div class="owl-carousel owl-theme" id="propietarios_slide">
                        <div class="card item tamaño_cards">
                            <img src="images/no_image.png" alt="">
                            <span class="style_span_tipo_inmueble">Tipo de inmueble</span>
                            <span class="style_span_precio">Precio:</span>
                            <div class="card-body">
                                <div class="contenido_card">
                                    <h1 class="titulo_cards">
                                        Tipo de Gestión
                                    </h1>
                                    <div class="row">
                                        <div class="col-6 caracteristicas">
                                            <i class="fas fa-bed m-2"></i>Alcobas:
                                        </div>
                                        <div class="col-6 caracteristicas">
                                            <i class="fas fa-archway m-2"></i>Área:
                                        </div>
                                        <div class="col-6 caracteristicas">
                                            <i class="fas fa-map-marker-alt m-2"></i>Ubicacion:
                                        </div>
                                        <div class="col-6 caracteristicas">
                                            <i class="fas fa-bath m-2"></i>Baños:
                                        </div>
                                        <div class="col-6 caracteristicas">
                                            <i class="fas fa-warehouse m-2"></i>Código:
                                        </div>
                                        <div class="col-6 caracteristicas">
                                            <i class="fas fa-warehouse m-2"></i>Parqueaderos:
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card item tamaño_cards">
                            <img src="images/no_image.png" alt="">
                            <span class="style_span_tipo_inmueble">Tipo de inmueble</span>
                            <span class="style_span_precio">Precio:</span>
                            <div class="card-body">
                                <div class="contenido_card">
                                    <h1 class="titulo_cards">
                                        Tipo de Gestión
                                    </h1>
                                    <div class="row">
                                        <div class="col-6 caracteristicas">
                                            <i class="fas fa-bed m-2"></i>Alcobas:
                                        </div>
                                        <div class="col-6 caracteristicas">
                                            <i class="fas fa-archway m-2"></i>Área:
                                        </div>
                                        <div class="col-6 caracteristicas">
                                            <i class="fas fa-map-marker-alt m-2"></i>Ubicacion:
                                        </div>
                                        <div class="col-6 caracteristicas">
                                            <i class="fas fa-bath m-2"></i>Baños:
                                        </div>
                                        <div class="col-6 caracteristicas">
                                            <i class="fas fa-warehouse m-2"></i>Código:
                                        </div>
                                        <div class="col-6 caracteristicas">
                                            <i class="fas fa-warehouse m-2"></i>Parqueaderos:
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card item tamaño_cards">
                            <img src="images/no_image.png" alt="">
                            <span class="style_span_tipo_inmueble">Tipo de inmueble</span>
                            <span class="style_span_precio">Precio:</span>
                            <div class="card-body">
                                <div class="contenido_card">
                                    <h1 class="titulo_cards">
                                        Tipo de Gestión
                                    </h1>
                                    <div class="row">
                                        <div class="col-6 caracteristicas">
                                            <i class="fas fa-bed m-2"></i>Alcobas:
                                        </div>
                                        <div class="col-6 caracteristicas">
                                            <i class="fas fa-archway m-2"></i>Área:
                                        </div>
                                        <div class="col-6 caracteristicas">
                                            <i class="fas fa-map-marker-alt m-2"></i>Ubicacion:
                                        </div>
                                        <div class="col-6 caracteristicas">
                                            <i class="fas fa-bath m-2"></i>Baños:
                                        </div>
                                        <div class="col-6 caracteristicas">
                                            <i class="fas fa-warehouse m-2"></i>Código:
                                        </div>
                                        <div class="col-6 caracteristicas">
                                            <i class="fas fa-warehouse m-2"></i>Parqueaderos:
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card item tamaño_cards">
                            <img src="images/no_image.png" alt="">
                            <span class="style_span_tipo_inmueble">Tipo de inmueble</span>
                            <span class="style_span_precio">Precio:</span>
                            <div class="card-body">
                                <div class="contenido_card">
                                    <h1 class="titulo_cards">
                                        Tipo de Gestión
                                    </h1>
                                    <div class="row">
                                        <div class="col-6 caracteristicas">
                                            <i class="fas fa-bed m-2"></i>Alcobas:
                                        </div>
                                        <div class="col-6 caracteristicas">
                                            <i class="fas fa-archway m-2"></i>Área:
                                        </div>
                                        <div class="col-6 caracteristicas">
                                            <i class="fas fa-map-marker-alt m-2"></i>Ubicacion:
                                        </div>
                                        <div class="col-6 caracteristicas">
                                            <i class="fas fa-bath m-2"></i>Baños:
                                        </div>
                                        <div class="col-6 caracteristicas">
                                            <i class="fas fa-warehouse m-2"></i>Código:
                                        </div>
                                        <div class="col-6 caracteristicas">
                                            <i class="fas fa-warehouse m-2"></i>Parqueaderos:
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card item tamaño_cards">
                            <img src="images/no_image.png" alt="">
                            <span class="style_span_tipo_inmueble">Tipo de inmueble</span>
                            <span class="style_span_precio">Precio:</span>
                            <div class="card-body">
                                <div class="contenido_card">
                                    <h1 class="titulo_cards">
                                        Tipo de Gestión
                                    </h1>
                                    <div class="row">
                                        <div class="col-6 caracteristicas">
                                            <i class="fas fa-bed m-2"></i>Alcobas:
                                        </div>
                                        <div class="col-6 caracteristicas">
                                            <i class="fas fa-archway m-2"></i>Área:
                                        </div>
                                        <div class="col-6 caracteristicas">
                                            <i class="fas fa-map-marker-alt m-2"></i>Ubicacion:
                                        </div>
                                        <div class="col-6 caracteristicas">
                                            <i class="fas fa-bath m-2"></i>Baños:
                                        </div>
                                        <div class="col-6 caracteristicas">
                                            <i class="fas fa-warehouse m-2"></i>Código:
                                        </div>
                                        <div class="col-6 caracteristicas">
                                            <i class="fas fa-warehouse m-2"></i>Parqueaderos:
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="cuadro_descrip">
            <div class="jumbotron rounded-0 ">
                <div class="container">
                    <h1 class="display-4">Inmobiliaria Medina Santos</h1>
                    <p class="lead"><?php echo $texto_quienes_somos['proyeccion']['parrafos'][0] ?></p>
                    <hr class="my-4">
                    <div class="d-flex justify-content-between align-items-center">
                    <p class="lead"><?php echo $texto_quienes_somos['proyeccion']['parrafos'][1] ?></p>
                    </div>
                </div>
            </div>
        </section>

        <section id="servicios">
        <div class="row  p-4">
            <div class="col-12 p-4  ">
                <h2 class="text-center">Nuestros Servicios</h2>
            </div>
            <div class=" row col-12 d-flex justify-content-around">
                <div>
                    <div class="card" style="width: 18rem;">
                        <i id="logos_servicios" class="fas fa-tags"></i>
                        <div class="card-body text-center">
                            <h5 class="card-title">Ventas</h5>
                            <p class="card-text">Breve descripción</p>

                        </div>
                    </div>
                </div>
                <div>
                    <div class="card" style="width: 18rem;">
                        <i id="logos_servicios" class="fas fa-sign"></i>
                        <div class="card-body text-center">
                            <h5 class="card-title">Arrendamientos</h5>
                            <p class="card-text">Breve descripción</p>

                        </div>
                    </div>
                </div>
                <div>
                    <div class="card" style="width: 18rem;">
                        <i id="logos_servicios" class="fas fa-handshake"></i>
                        <div class="card-body text-center">
                            <h5 class="card-title">Asesoría Inmobiliaria</h5>
                            <p class="card-text">Breve descripción</p>

                        </div>
                    </div>
                </div>
            </div>
            <div class=" row  col-12 p-3 d-flex justify-content-around">
                <div>
                    <div class="card" style="width: 18rem;">
                        <i id="logos_servicios" class="fas fa-toolbox"></i>
                        <div class="card-body text-center">
                            <h5 class="card-title">Servicios Locativos</h5>
                            <p class="card-text">Breve descripción</p>

                        </div>
                    </div>
                </div>
                <div>
                    <div class="card" style="width: 18rem;">
                        <i id="logos_servicios" class="fas fa-hand-holding-usd"></i>
                        <div class="card-body text-center">
                            <h5 class="card-title">Créditos Hipotecarios</h5>
                            <p class="card-text">Breve descripción</p>

                        </div>
                    </div>
                </div>
                <div>
                    <div class="card" style="width: 18rem;">
                        <i id="logos_servicios" class="fas fa-file-invoice-dollar"></i>
                        <div class="card-body text-center">
                            <h5 class="card-title">Seguros</h5>
                            <p class="card-text">Breve descripción</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>

        <section id="aliados">
            <div class="row d-flex justify-content-around p-4">
                <div class="col-12 p-4  ">
                    <h2 class="main-title text-center">Nuestros Aliados</h2>
                </div>
                <div class="col-12">
                    <div class="owl-carousel owl-theme" id="aliados_slide">
                        <div class="item" style="height: 150px;">
                            <img style="height: 100%; object-fit: contain;" src="images/LOGO PROTECSA.png" alt="">
                        </div>
                        <div class="item" style="height: 150px;">
                            <img style="height: 100%; object-fit: contain;" src="images/LOGO EL LIBERTADOR.png" alt="">
                        </div>
                        <div class="item" style="height: 150px;">
                            <img style="height: 100%; object-fit: contain;" src="images/LOGO SIMI.png" alt="">
                        </div>
                        
                    </div>
                </div>
            </div>


        </section>

        <section id="publicaciones">
            <div class="container">
                <div class="col-12 p-4  ">
                    <h2 class="text-center">Últimas Publicaciones</h2>
                </div>
                <div class="owl-carousel owl-theme publicaciones" id="contenedor_publicaciones">
                    <div class="item row col-12">
                        <div class="col-6">
                            <img style="height: 100%; object-fit:contain;" src="images/no_image.png" alt="">
                        </div>
                        <div class="col-6  titulo_publicaciones">
                            <div>
                                <h3>Titulo</h3>
                            </div>
                            <div class="p-2">
                                <span><i class="fas fa-globe-asia mr-2"> Nombre</i></span>
                                <span><i class="fas fa-globe-asia mr-2"> Nombre</i></span>
                            </div>
                            <div class="p-2">
                                <p>es simplemente el texto de relleno de las imprentas y archivos de texto.
                                    Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500,
                                    cuando un impresor (N. del T. persona que se dedica a la imprenta)</p>
                            </div>
                        </div>
                    </div>
                    <div class="item  row col-12">
                        <div class="col-6 ">
                            <img style="height: 100%; object-fit:contain;" src="images/no_image.png" alt="">
                        </div>
                        <div class="col-6  titulo_publicaciones">
                            <div>
                                <h3>Titulo</h3>
                            </div>
                            <div class="p-2">
                                <span><i class="fas fa-globe-asia mr-2"> Nombre</i></span>
                                <span><i class="fas fa-globe-asia mr-2"> Nombre</i></span>
                            </div>
                            <div class="p-2">
                                <p>es simplemente el texto de relleno de las imprentas y archivos de texto.
                                    Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500,
                                    cuando un impresor (N. del T. persona que se dedica a la imprenta)</p>
                            </div>
                        </div>
                    </div>
                    <div class="item  row col-12">
                        <div class="col-6 ">
                            <img style="height: 100%; object-fit:contain;" src="images/no_image.png" alt="">
                        </div>
                        <div class="col-6  titulo_publicaciones">
                            <div>
                                <h3>Titulo</h3>
                            </div>
                            <div class="p-2">
                                <span><i class="fas fa-globe-asia mr-2"> Nombre</i></span>
                                <span><i class="fas fa-globe-asia mr-2"> Nombre</i></span>
                            </div>
                            <div class="p-2">
                                <p>es simplemente el texto de relleno de las imprentas y archivos de texto.
                                    Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500,
                                    cuando un impresor (N. del T. persona que se dedica a la imprenta)</p>
                            </div>
                        </div>
                    </div>
                    <div class="item   row col-12">
                        <div class="col-6  ">
                            <img style="height: 100%; object-fit:contain;" src="images/no_image.png" alt="">
                        </div>
                        <div class="col-6   titulo_publicaciones">
                            <div>
                                <h3>Titulo</h3>
                            </div>
                            <div class="p-2">
                                <span><i class="fas fa-globe-asia mr-2"> Nombre</i></span>
                                <span><i class="fas fa-globe-asia mr-2"> Nombre</i></span>
                            </div>
                            <div class="p-2">
                                <p>es simplemente el texto de relleno de las imprentas y archivos de texto.
                                    Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500,
                                    cuando un impresor (N. del T. persona que se dedica a la imprenta)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="consignar">
            <div class=" contenedor_consignar">
                <div class="container">
                    <div class="row">
                        <div class="col-4 " style="color:#fff">
                        <?php $r = $logo_empresa;
            echo '
          <img src="' . $r['src'] . '" class="w-100" alt="' . $r['alt'] . '">'; ?>
                        </div>
                        <div class="col-6  frase_consiganr">
                            <p>¿Deseas vender o arrendar tu inmueble?</p>
                        </div>
                        <div class="col-2 ">
                            <a class="boton_consiganar" href="" class="btn"> Consignar</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>


</body>


<?php include 'layout/footer.php'; ?>
<?php include 'layout/archivosfooter.php'; ?>

</body>

</html>