<?php $page="servicios";?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Servicios</title>
    <?php include 'layout/archivosheader.php'; ?>
</head>

<body>
    <!-- Menu -->
    <?php include 'layout/menu.php'; ?>
    <!-- Fin de Menu -->
    <div class="container-fluid body">
        <section id="services">
            <div class="services content-area-20 bg-white">
                <div class="container">
                    <div class="main-title">
                        <h1>Nuestros Servicios</h1>
                    </div>
                    <div class="row">
                        <!-- item -->
                        <div class="col-lg-4 col-md-6 col-sm-6 services-info-3 s-brd-2 wow fadeInLeft delay-04s" style="visibility: visible; animation-name: fadeInLeft;">
                            <i class="<?php echo $iconos_servicios['arrendamientos'] ?>"></i>
                            <h5><?php echo $texto_servicios['arrendamientos']['titulo'] ?></h5>
							<p style="text-align: justify"><?php echo $texto_servicios['arrendamientos']['parrafos'] ?></p>
                        </div>
                        <!-- item -->
                        <div class="col-lg-4 col-md-6 col-sm-6 services-info-3 s-brd-1 wow fadeInUp delay-04s" style="visibility: visible; animation-name: fadeInUp;">
                            <i class="<?php echo $iconos_servicios['ventas'] ?>"></i>
                            <h5><?php echo $texto_servicios['ventas']['titulo'] ?></h5>
							<p style="text-align: justify"><?php echo $texto_servicios['ventas']['parrafos'] ?></p>
                        </div>
                        <!-- item -->
                        <div class="col-lg-4 col-md-6 col-sm-6 services-info-3 wow fadeInRight delay-04s" style="visibility: visible; animation-name: fadeInRight;">
                            <i class="<?php echo $iconos_servicios['avaluos'] ?>"></i>
                            <h5><?php echo $texto_servicios['avaluos']['titulo'] ?></h5>
							<p style="text-align: justify"><?php echo $texto_servicios['avaluos']['parrafos'] ?></p>
                        </div>
                        <!-- item -->
                        <div class="col-lg-4 col-md-6 col-sm-6 services-info-3 s-brd-2 wow fadeInLeft delay-04s" style="visibility: visible; animation-name: fadeInLeft;">
                            <i class="<?php echo $iconos_servicios['servicios_locativos'] ?>"></i>
                            <h5><?php echo $texto_servicios['servicios_locativos']['titulo'] ?></h5>
							<p style="text-align: justify"><?php echo $texto_servicios['servicios_locativos']['parrafos'] ?></p>
                        </div>
                        <!-- item -->
                        <div class="col-lg-4 col-md-6 col-sm-6 services-info-3 s-brd-1 wow fadeInDown delay-04s" style="visibility: visible; animation-name: fadeInDown;">
                            <i class="<?php echo $iconos_servicios['creditos_hipotecarios'] ?>"></i>
                            <h5><?php echo $texto_servicios['creditos_hipotecarios']['titulo'] ?></h5>
							<p style="text-align: justify"><?php echo $texto_servicios['creditos_hipotecarios']['parrafos'] ?></p>
                        </div>
                        <!-- item -->
                        <div class="col-lg-4 col-md-6 col-sm-6 services-info-3 wow fadeInRight delay-04s" style="visibility: visible; animation-name: fadeInRight;">
                            <i class="<?php echo $iconos_servicios['seguros'] ?>"></i>
                            <h5><?php echo $texto_servicios['seguros']['titulo'] ?></h5>
							<p style="text-align: justify"><?php echo $texto_servicios['seguros']['parrafos'] ?></p>
                        </div>
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
</body>

</html>