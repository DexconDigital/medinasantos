<?php require 'variables/variables.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include 'layout/archivosheader.php'; ?>
    <title>Contactenos</title>
</head>

<body>
    <section>
        <?php include 'layout/menu.php'; ?>
    </section>

  
    <section>
        <div class="container" style="    margin-bottom: 22px;">
        <div class=" col-12 ">
            <div class="col-12 p-4  ">
                <h2 class="main-title text-center">Escríbenos</h2>
            </div>
            <div class="col-12  row ">
                <div class="col-8  row">
                    <div class="col-6  ">
                        <div class="" style="margin-bottom: 0rem;">
                            <input type="text" class="form-control" placeholder=" Nombre y Apellido">
                        </div>
                    </div>
                    <div class="col-6  ">
                        <div class="" style="margin-bottom: 0rem;">
                            <input type="text" class="form-control" placeholder="Teléfono/móvil">
                        </div>


                        <div>
                        </div>
                    </div>
                    <div class="container ">
                        <div class="">
                            <input type="text" class="form-control" placeholder=" Correo Electrónico">
                        </div>
                    </div>
                    <div class="col-12">
                        <div>
                            <textarea name="" id="" class="col-12" rows="6" placeholder="Mensaje"></textarea>
                        </div>
                        <div class="form-check magen_formulario">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                            Confimo que he leído, entendido y acepto la política de tratamiento de datos personales.
                            </label>
                        </div>
                        <div>
                        </div>
                    </div>
                    <div class="col-4">
                        <button id="" type="button" class="btn btn-dark rounded-0 col-12 booton_footer" name=""><span>Enviar</span></button>
                    </div>
                </div>
                <div class="col-4 ">
                    <div class="" style="margin-left: 8.333333%;">
                        <h3>Datos de Contacto</h3>
                        <div>
                           
                            <div class="row contenedor_contac d-flex align-items-center">
                                <i class="fas fa-map-marker-alt li_style_contac"></i>
                                <div class="">
                                  
                                    <p> <?php echo $datos_contacto['direccion']['direccion'] ?> </p>
                                </div>
                            </div>
                            <div class="row contenedor_contac d-flex align-items-center">
                                <i class="fas fa-phone-alt li_style_contac"></i>
                                <div>
                                  
                                    <p><?php echo $datos_contacto['telefono_fijo']['imprimir'] ?> </p>
                                </div>
                            </div>
                            <div class="row contenedor_contac">
                                <i class="fas fa-mobile-alt li_style_contac"></i>
                                <div>
                                   
                                    <p><?php echo $datos_contacto['celular']['imprimir'] ?> </p>
                                </div>
                            </div>
                            <div class="row contenedor_contac d-flex align-items-center">
                                <i class="fab fa-whatsapp li_style_contac"></i>
                                <div>
                                  
                                    <p><?php echo $datos_contacto['whatsapp']['imprimir'] ?> </p>
                                </div>
                            </div>
                            <div class="row contenedor_contac d-flex align-items-center">
                                <i  class="far fa-envelope li_style_contac"></i>
                                <div>
                                 
                                    <p><?php echo $datos_contacto['correo']['correo'] ?> </p>
                                </div>
                            </div>
                            <div class="row contenedor_contac">
                                <i class="fas fa-calendar-alt li_style_contac"></i>
                                <div>
                                   
                                    <p><?php echo $datos_contacto['horario']['horario'] ?> </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section>
        <div class=" maps">
        </div>
    </section>

    <footer>
        <?php include 'layout/footer.php'; ?>
    </footer>

    <!-- scripts -->
    <?php include 'layout/archivosfooter.php'; ?>
</body>

</html>