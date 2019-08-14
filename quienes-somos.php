<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    <?php include 'layout/archivosheader.php'; ?>
</head>

<body>
    <!-- Menu -->
    <?php include 'layout/menu.php'; ?>
    <!-- Fin de Menu -->
    <div class="container-fluid body">
        <section id="description_quienes_somos">
            <div class="about-us content-area-7">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="properties-service-v quienes-somos">
                                <img src="images/quienes_somos.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 align-self-center">
                            <div class="about-text">
                                <h3><?php echo $texto_quienes_somos['proyeccion']['titulo'] ?></h3>
                                <p> <b><?php echo $texto_quienes_somos['proyeccion']['subtitulo'] ?></b></p>
                                <?php for ($i = 0; $i < count($texto_quienes_somos['proyeccion']['parrafos']); $i++) {
                                    echo '<p>' . $texto_quienes_somos['proyeccion']['parrafos'][$i] . '<p>';
                                } ?>
                            </div>
                        </div>
                    </div>
                    <!-- Mision -->
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="about-text">
                                <h3><?php echo $texto_quienes_somos['mision']['titulo'] ?></h3>
                                <?php echo '<p>' . $texto_quienes_somos['mision']['parrafo'] . '<p>'; ?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="properties-service-v mision">
                                <img src="images/mision.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- vision -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="properties-service-v mision">
                                <img src="images/vision.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 align-self-center">
                            <div class="about-text">
                                <h3><?php echo $texto_quienes_somos['vision']['titulo'] ?></h3>
                                <?php echo '<p>' . $texto_quienes_somos['vision']['parrafo'] . '<p>'; ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section id="counter">
            <div class="counters overview-bgi" style="background-image: url(images/bg-photo-2.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="counter-box">
                                <h1 class="counter Starting">500</h1>
                                <h5>Años de Experiencia</h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="counter-box">
                                <i class="flaticon-badge"></i>
                                <h1 class="counter Starting">254</h1>
                                <h5>Total Inmuebles Disponibles</h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="counter-box">
                                <i class="flaticon-call-center-agent"></i>
                                <h1 class="counter Starting">510</h1>
                                <h5>Inmuebles en Arriendo</h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="counter-box">
                                <i class="flaticon-job"></i>
                                <h1 class="counter Starting">94</h1>
                                <h5>Inmuebles en Venta</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Banner -->


    <?php include 'layout/footer.php'; ?>
    <script>
        var pagina = false;
    </script>
    <?php include 'layout/archivosfooter.php'; ?>
</body>

</html>