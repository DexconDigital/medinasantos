<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php include 'layout/archivosheader.php'; ?>
</head>

<body>
    <!-- Menu -->
    <?php include 'layout/menu.php'; ?>
    <!-- Fin de Menu -->

    <!-- Banner -->
    <div class="banner" id="banner">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="./images/slide1.jpg" alt="banner">
                    <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                        <div class="carousel-content container">
                            <div class="t-center">
                                <h1 data-animation="animated fadeInDown delay-05s" class="">Gran oferta
                                    <br>de inmuebles</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./images/slide2.jpg" alt="banner">
                    <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                        <div class="carousel-content container">
                            <div class="t-right">
                                <h1 data-animation="animated fadeInDown delay-05s" class="">
                                    Encuentra tu inmueble soñado
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./images/slide3.jpg" alt="banner">
                    <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                        <div class="carousel-content container">
                            <div class="t-left">
                                <h1 data-animation="animated fadeInUp delay-05s" class="">Pensamos en tus necesidades<br> de vivienda o negocio</h1>
                            </div>
                        </div>
                    </div>
                </div>
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

    <section id="buscador">
        <div class="container">
            <!--buscador-->
            <form>
                <div class="form-row justify-content-center">
                    <div class="col-3 form-group ">
                        <input type="text" id='codigo_buscar' class="form-control rounded-0" placeholder="Código">
                    </div>
                    <div class="col-3 form-group">
                        <select id="ciudad_buscar" class="form-control rounded-0">
                            <option selected value="0">Ciudad</option>
                        </select>
                    </div>
                    <div class="col-3 form-group">
                        <select id="barrio_buscar" class="form-control rounded-0">
                            <option selected value="0">Barrio</option>
                        </select>
                    </div>
                    <div class="col-3 form-group">
                        <select id="tipo_inmueble_buscar" class="form-control rounded-0">
                            <option selected value="0"> Tipo de Inmueble</option>
                        </select>
                    </div>
                    <div class="col-3 form-group">
                        <select id="tipo_gestion_buscar" class="form-control rounded-0">
                            <option selected value="0">Tipo de gestión</option>
                        </select>
                    </div>
                    <div class="col-3 form-group">
                        <input type="text" id='precio_minimo_buscar' class="form-control rounded-0" placeholder="Precio Mínimo">
                    </div>
                    <div class="col-3 form-group">
                        <input type="text" id='precio_maximo_buscar' class="form-control rounded-0" placeholder="Precio Máximo">
                    </div>
                    <div class="col-3 form-group">
                        <button type="button" id="buscar" class="btn btn-dark btn-lg btn-block rounded-0">Buscar</button>
                    </div>
            </form>
        </div>
    </section>


    <?php include 'layout/archivosfooter.php'; ?>
</body>

</html>