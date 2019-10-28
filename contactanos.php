<?php $page = 'contacto' ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contáctanos</title>
    <?php include 'layout/archivosheader.php'; ?>
</head>

<body>
    <!-- Menu -->
    <?php include 'layout/menu.php'; ?>

    <div class="container-fluid body">
        <div class="contact-1 content-area-7">
            <div class="container">
                <div class="row">

                    <div class="col-lg-7 col-md-7 col-md-7">
                        <div class="main-title">
                            <h1 class="title-blue">Escríbenos</h1>
                        </div>
                        <form action="email/enviarCorreo.php" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group name">
                                        <input type="text" name="name" class="form-control" placeholder="Nombre" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group email">
                                        <input type="email" name="email" class="form-control" placeholder="Correo Electrónico" required>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group number">
                                        <input type="text" name="phone" class="form-control" placeholder="Teléfono required" required>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group number">
                                        <input type="text" name="asunto" class="form-control" placeholder="Asunto" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group message">
                                        <textarea class="form-control" name="message" placeholder="Escribe tu Mensaje" required></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                        <label class="form-check-label" for="exampleCheck1">Confimo que he leído, entendido y acepto la <a href="">política de tratamiento de datos personales.</a></label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                    <div class="send-btn">
                                        <button type="submit" class="btn btn-color btn-md btn-message" required>Enviar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class=" offset-lg-1 col-lg-4 offset-md-0 col-md-5">
                        <div class="contact-info">
                            <h3 class="title-blue">Datos de Contacto</h3>
                            <div class="media">
                                <i class="<?php echo $datos_contacto['direccion']['icono']; ?> title-blue"></i>
                                <div class="media-body">
                                    <h5 class="mt-0">Dirección</h5>
                                    <p><?php echo $datos_contacto['direccion']['direccion']; ?></p>
                                </div>
                            </div>
                            <div class="media">
                                <i class="fa fa-phone title-blue"></i>
                                <div class="media-body">
                                    <h5 class="mt-0">Teléfonos</h5>
                                    <p><a href="tel:<?php echo $datos_contacto['telefono_fijo']['link']; ?>"> <?php echo $datos_contacto['telefono_fijo']['imprimir']; ?></a> </p>
                                    <p>Móvil: <a href="tel:<?php echo $datos_contacto['celular']['link']; ?>">: <?php echo $datos_contacto['celular']['imprimir']; ?></a> </p>
                                </div>
                            </div>
                            <div class="media">
                                <i class="fa fa-envelope title-blue"></i>
                                <div class="media-body">
                                    <h5 class="mt-0">Correos</h5>
                                    <p><a href="mailto:<?php echo $datos_contacto['correo']['link']; ?>"><?php echo $datos_contacto['correo']['correo']; ?></a></p>
									<p><a href="mailto:<?php echo $datos_contacto['correo2']['link']; ?>"><?php echo $datos_contacto['correo2']['correo']; ?></a></p>
                                </div>
                            </div>
                            <div class="media mrg-btn-0">
                                <i class="fa fa-calendar title-blue"></i>
                                <div class="media-body">
                                    <h5 class="mt-0">Horarios</h5>
                                    <span>Lunes a Viernes</span><br>
                                    <span>8:00 a.m. a 1:00 p.m.</span><br>
									<span>2:00 p.m. a 6:00 p.m.</span><br>
                                    <span>Sabados</span><br>
                                    <span>8:30am a 12:30pm</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid p-0 mt-4 overflow-hidden">
        <div class="row">
            <div class="col-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.1503230495023!2d-74.09455178573675!3d4.743922342603393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f84f6fabbf0ef%3A0xee72626fb3668d89!2sOrganizaci%C3%B3n+Inmobiliaria+Medina+Santos!5e0!3m2!1ses!2sco!4v1565876918788!5m2!1ses!2sco" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <?php include 'layout/footer.php'; ?>

    <script>
        var pagina = false;
    </script>

    <?php include 'layout/archivosfooter.php'; ?>
</body>

</html>