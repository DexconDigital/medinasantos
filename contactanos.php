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
                <div class="main-title">
                    <h1>Escríbenos</h1>
                </div>

                <div class="row">
                    <div class="col-lg-7 col-md-7 col-md-7">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group name">
                                        <input type="text" name="name" class="form-control" placeholder="Nombre">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group subject">
                                        <input type="text" name="subject" class="form-control" placeholder="Apellido">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group email">
                                        <input type="email" name="email" class="form-control" placeholder="Correo Electrónico">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group number">
                                        <input type="text" name="phone" class="form-control" placeholder="Teléfono">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group message">
                                        <textarea class="form-control" name="message" placeholder="Escribe tu Mensaje"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Confimo que he leído, entendido y acepto la política de tratamiento de datos personales.</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                    <div class="send-btn">
                                        <button type="submit" class="btn btn-color btn-md btn-message">Enviar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class=" offset-lg-1 col-lg-4 offset-md-0 col-md-5">
                        <div class="contact-info">
                            <h3>Datos de Contacto</h3>
                            <div class="media">
                                <i class="<?php echo $datos_contacto['direccion']['icono'];?>"></i>
                                <div class="media-body">
                                    <h5 class="mt-0">Dirección</h5>
                                    <p><?php echo $datos_contacto['direccion']['direccion'];?></p>
                                </div>
                            </div>
                            <div class="media">
                                <i class="fa fa-phone"></i>
                                <div class="media-body">
                                    <h5 class="mt-0">Teléfonos</h5>
                                    <p><a href="tel:<?php echo $datos_contacto['telefono_fijo']['link'];?>"> <?php echo $datos_contacto['telefono_fijo']['imprimir'];?></a> </p>
                                    <p>Móvil: <a href="tel:<?php echo $datos_contacto['celular']['link'];?>">: <?php echo $datos_contacto['celular']['imprimir'];?></a> </p>
                                </div>
                            </div>
                            <div class="media mrg-btn-0">
                                <i class="fa fa-envelope"></i>
                                <div class="media-body">
                                    <h5 class="mt-0">Correo</h5>
                                    <p><a href="mailto:<?php echo $datos_contacto['correo']['correo'];?>"><?php echo $datos_contacto['correo']['correo'];?></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid p-0 mt-4">
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