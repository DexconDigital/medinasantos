<?php require 'variables/variables.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include 'layout/archivosheader.php'; ?>
    <title>Servicios</title>
</head>

<body>
    <section>
        <?php include 'layout/menu.php'; ?>
    </section>

    <section>
        <?php include 'layout/banner.php'; ?>
    </section>

    <section>
        <div class="row d-flex justify-content-around p-4">
            <div class="col-12 p-4  ">
                <h2 class="text-center">Nuestros Servicios</h2>
            </div>
            <div class=" row col-12 d-flex justify-content-center">
                <div>
                    <div class="card" style="width: 18rem;">
                        <i id="logos_servicios" class="far fa-address-book"></i>
                        <div class="card-body text-center">
                            <h5 class="card-title">Ventas</h5>
                            <p class="card-text">Breve descripción</p>

                        </div>
                    </div>
                </div>
                <div>
                    <div class="card" style="width: 18rem;">
                        <i id="logos_servicios" class="far fa-address-book"></i>
                        <div class="card-body text-center">
                            <h5 class="card-title">Arrendamientos</h5>
                            <p class="card-text">Breve descripción</p>

                        </div>
                    </div>
                </div>
                <div>
                    <div class="card" style="width: 18rem;">
                        <i id="logos_servicios" class="far fa-address-book"></i>
                        <div class="card-body text-center">
                            <h5 class="card-title">Asesoría Inmobiliaria</h5>
                            <p class="card-text">Breve descripción</p>

                        </div>
                    </div>
                </div>
            </div>
            <div class=" row  col-12 p-3 d-flex justify-content-center">
                <div>
                    <div class="card" style="width: 18rem;">
                        <i id="logos_servicios" class="far fa-address-book"></i>
                        <div class="card-body text-center">
                            <h5 class="card-title">Servicios Locativos</h5>
                            <p class="card-text">Breve descripción</p>

                        </div>
                    </div>
                </div>
                <div>
                    <div class="card" style="width: 18rem;">
                        <i id="logos_servicios" class="far fa-address-book"></i>
                        <div class="card-body text-center">
                            <h5 class="card-title">Créditos Hipotecarios</h5>
                            <p class="card-text">Breve descripción</p>

                        </div>
                    </div>
                </div>
                <div>
                    <div class="card" style="width: 18rem;">
                        <i id="logos_servicios" class="far fa-address-book"></i>
                        <div class="card-body text-center">
                            <h5 class="card-title">Seguros</h5>
                            <p class="card-text">Breve descripción</p>

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