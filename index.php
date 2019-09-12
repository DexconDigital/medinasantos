<?php require 'controllers/indexController.php';
require 'bases_de_datos/indexDB.php';
require 'bases_de_datos/noticiasDB.php';
$page= 'inicio'?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    <!-- Carousel -->
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">
    <!-- Incluir documento donde se encuentra el resto de archivos -->
    <?php include 'layout/archivosheader.php'; ?>
</head>

<body>
    <!-- Menu -->
    <?php include 'layout/menu.php'; ?>
    <!-- Fin de Menu -->
    <div class="container-fluid body">
        <div class="banner" id="banner">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <?php
					while ($res = mysqli_fetch_array($sql)) {
							echo '
							<div class="carousel-item">
                                <img  class="d-block w-100" src="admin-medina/admin/' . $res["ruta_imagen"] . '" alt="'.$res['alt_imagen'].'"/>
                                <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                                    <div class="carousel-content container">
                                        <div class="t-center">
                                            <h1 data-animation="animated fadeInUp delay-05s" class="">'.$res['texto-banner'].'</h1>
                                    </div>
                            </div>
                        </div>
							</div>
					';
					}
					?>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <!-- Fin de Banner -->

        <!-- Buscador -->
        <?php include 'layout/buscador.php' ?>
        <!-- Fin de Buscador -->

        <section id="destacadas" class="content-area-20 bg-white">
            <div class="container-fluid">
                <div class="main-title">
                    <h1>Propiedades Destacadas</h1>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 d-flex justify-content-center">
                        <?php if(is_array($api)):?>
                            <div class="owl-carousel owl-theme" id='owl_propertys'>
                                <?php inmuebles_destacados($api) ;?>
                            </div>
                        <?php endif;?>
                        <?php if(!is_array($api)):?>
                            <h5 class="text-center">No Tiene Inmuebles Destacados</h5>
                        <?php endif;?>
                    </div>
                    </div>
                </div>
        </section>

        <section id="descripcion" class="content-area-20">
            <div class="container">
                <div class="main-title">
                    <h1>Inmobiliaria Medina Santos</h1>
                </div>
                <div class="row justify-content-center">
                    <div class="col-11 col-lg-6 col-pad wow fadeInLeft delay-04s d-flex align-items-center" style="visibility: visible; animation-name: fadeInLeft;">
                        <div class="pr-lg-4 mr-lg-3 text-justify">
                            <p><?php echo $texto_quienes_somos['proyeccion']['parrafos'][0]; ?></p>
                            <p><?php echo $texto_quienes_somos['proyeccion']['parrafos'][1]; ?></p>
                        </div>
                    </div>
                    <div class="col-11 col-lg-6 col-pad wow fadeInRight delay-04s" style="visibility: visible; animation-name: fadeInRight;">
                        <img src="images/popular-places-2.jpg" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>

        <section id="services">
            <div class="services content-area-20 bg-white">
                <div class="container">
                    <div class="main-title">
                        <h1>Nuestros Servicios</h1>
                    </div>
                    <div class="row">
                        <!-- item -->
                        <div class="col-sm-6 services-info-3 s-brd-2 wow fadeInLeft delay-04s" style="visibility: visible; animation-name: fadeInLeft;">
                            <i class="<?php echo $iconos_servicios['arrendamientos'] ?>"></i>
                            <h5><?php echo $texto_servicios['arrendamientos']['titulo'] ?></h5>
                        </div>
                        <!-- item -->
                        <div class="col-md-6 col-sm-6 services-info-3 s-brd-1 wow fadeInUp delay-04s" style="visibility: visible; animation-name: fadeInUp;">
                            <i class="<?php echo $iconos_servicios['ventas'] ?>"></i>
                            <h5><?php echo $texto_servicios['ventas']['titulo'] ?></h5>
                        </div>
                        <!-- item -->
                        <div class="col-md-6 col-sm-6 services-info-3 wow fadeInRight delay-04s" style="visibility: visible; animation-name: fadeInRight;">
                            <i class="<?php echo $iconos_servicios['avaluos'] ?>"></i>
                            <h5><?php echo $texto_servicios['avaluos']['titulo'] ?></h5>
                        </div>
                        <!-- item -->
                        <div class="col-md-6 col-sm-6 services-info-3 s-brd-2 wow fadeInLeft delay-04s" style="visibility: visible; animation-name: fadeInLeft;">
                            <i class="<?php echo $iconos_servicios['servicios_locativos'] ?>"></i>
                            <h5><?php echo $texto_servicios['servicios_locativos']['titulo'] ?></h5>
                        </div>
                        <!-- *********************** Ocultando estos servicios
                        <div class="col-lg-4 col-md-6 col-sm-6 services-info-3 s-brd-1 wow fadeInDown delay-04s" style="visibility: visible; animation-name: fadeInDown;">
                            <i class="<?php echo $iconos_servicios['creditos_hipotecarios'] ?>"></i>
                            <h5><?php echo $texto_servicios['creditos_hipotecarios']['titulo'] ?></h5>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 services-info-3 wow fadeInRight delay-04s" style="visibility: visible; animation-name: fadeInRight;">
                            <i class="<?php echo $iconos_servicios['seguros'] ?>"></i>
                            <h5><?php echo $texto_servicios['seguros']['titulo'] ?></h5>
                        </div> 
                        -->
                    </div>
                </div>
            </div>
        </section>

        <section id="aliados">
            <div class="services content-area-20">
                <div class="container">
                    <div class="main-title">
                        <h1>Nuestros Aliados</h1>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-12 row wow fadeInDown delay-04s justify-content-center" style="visibility: visible; animation-name: fadeInDown;">
                            <?php
                            for ($i = 0; $i < count($logos_aliados); $i++) {
                                echo '<div class="col-12 col-md-6 col-lg-4 text-center">
                                            <img src="' . $logos_aliados[$i] . '" alt="">
                                    </div>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="last-news">
            <div class="blog content-area-2 bg-white">
                <div class="container">
                    <div class="main-title">
                        <h1>Últimas Publicaciones</h1>
                    </div>
                    <div class="row wow fadeInUp delay-04s" style="visibility: visible; animation-name: fadeInUp;">
                        <?php if(isset($noticias_array) && is_array($noticias_array)){
                            modelo_ultima_noticia($noticias_array);
                        }?>
                    </div>
                </div>
            </div>
        </section>

        <section id="consignar">
            <div class="intro-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-7 col-sm-12">
                            <div class="intro-text">
                                <h3>¿Deseas vender o arrendar tu inmueble?</h3>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-12">
                            <a data-toggle="modal" href="#consigna" class="btn btn-md sn">Consigna tu inmueble</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Banner -->


    <?php include 'layout/footer.php'; ?>
    <script>
        var pagina = true;
    </script>
    <?php include 'layout/archivosfooter.php'; ?>
    <!-- Conexion API -->
    <script src="conexion_api/token_api.js"></script>
    <script src="conexion_api/validadores.js"></script>
    <script src="conexion_api/buscador.js"></script>
    <script>
        $('.carousel-inner div:first-child').addClass('active');
    </script>


</body>

</html>