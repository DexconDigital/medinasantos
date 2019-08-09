<?php require 'variables/variables.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include 'layout/archivosheader.php'; ?>
    <title>Detalle inmueble</title>
</head>

<body>
    <section>
        <?php include 'layout/menu.php'; ?>
    </section>

 

    <section>
        <div class="container p-4">
            <div class="row">
                <div class="col-8">
                    <div>
                        <div style="margin-bottom: 15px;">
                            <div class="row">
                                <div class="col-12 ">
                                    <div class=" style_inmueble">
                                        <h3 class="style_li">Tipo de inmueble</h3>
                                        <p><i class="fas fa-map-marker-alt mr-2"></i>Tipo de gestión</p>
                                    </div>
                                    <div class=" style_precio ">
                                        <h3 class="style_color"> $Precio</h3>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="images/no_image.png" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="images/no_image.png" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="images/no_image.png" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 ">
                    <div class="magen_formulario">
                        <h3 class="titulo_asesor">Contacto con el asesor</h3>
                    </div>
                    <div class="col-12 magen_formulario">
                        <label for="">Nombre y Apellido</label>
                        <input type="text" class="form-control" placeholder="Nombre y Apellido">
                    </div>
                    <div class="col-12 magen_formulario">
                        <label for="">Teléfono/móvil</label>
                        <input type="text" class="form-control" placeholder="Teléfono/móvil">
                    </div>
                    <div class="col-12 magen_formulario">
                        <label for="">Correo Electrónico</label>
                        <input type="email" class="form-control" placeholder=" Correo Electrónico">
                    </div>
                    <div class="col-12 magen_formulario">
                        <label for="">Mensaje</label>
                        <div class="container">
                            <textarea name="" id="" cols="38" rows="4" placeholder="Mensaje"></textarea>
                        </div>
                        <div class="col-12 magen_formulario">
                            <div class="form-check magen_formulario">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                Confimo que he leído, entendido y acepto la política de tratamiento de datos personales.
                                </label>
                            </div>
                            <div>

                            </div>
                            <button id="" type="button" class="btn btn-dark rounded-0 col-12 booton_footer" name=""><span>Enviar</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container ">
            <div class="col-12 row ">
                <div class="col-6  ">
                    <div class="col-12 text-center">
                        <h4>Propiedades</h4>
                    </div>
                    <div class="row">
                        <div class="col-4 ">
                            <h4>Video</h4>
                        </div>
                        <div class="col-8 ">
                            <div class="col-12 ">
                                <p> imprimir ficha</p>
                            </div>
                            <div class="col-12  ">
                                <p> características internas</p>
                            </div>
                            <div class="col-12 ">
                                <p> externas , alrededores</p>
                            </div>
                            <div class="col-12 ">
                                <p> Compartir por redes sociales</p>
                            </div>
                        </div class="col-12 ">
                        <h4>Mapa</h4>
                        <div>
                        </div>
                    </div>

                </div>
                <div class="col-6 ">
                    <div class="col-12">
                        <p>Remplazar por logos aseguradoras</p>
                    </div>
                    <div class="col-12">
                        <p> Remplazar por propiedades similares (por tipo de inmueble y por ciudad) </p>
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