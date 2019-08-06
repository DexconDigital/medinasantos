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
        <?php include 'layout/banner.php'; ?>
    </section>

    <section>
        <div class="col-12">
            <div class="col-12 p-4  ">
                <h2 class="main-title text-center">Escríbenos</h2>
            </div>
            <div class="col-12 border border-secondary row ">
                <div class="col-8 border border-secondary row">
                    <div class="col-6  border border-secondary">
                        <div class="" style="margin-bottom: 0rem;">
                            <input type="text" class="form-control" placeholder=" Nombre y Apellido">
                        </div>
                    </div>
                    <div class="col-6  border border-secondary">
                    <div class="" style="margin-bottom: 0rem;">
                            <input type="text" class="form-control" placeholder="Teléfono/móvil">
                        </div>
                        
                        
                        <div>
                        </div>
                    </div>
                    <div class="container " >
                    <div class="" style="margin-bottom: 2rem;">
                            <input type="text" class="form-control" placeholder=" Correo Electrónico">
                        </div>
                    </div>
                    <div class="col-12 magen_formulario">
                    <div >
                      <textarea name="" id="" cols="46" rows="6" placeholder="Mensaje"></textarea>
                       </div>
                            <div class="form-check magen_formulario">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Confirmando la lectura de la
                                    política de datos (colocar el documento descargable de la política de datos)
                                </label>
                            </div>
                            <div>
                            </div>
                        </div>
                    
                    <div class="col-4">
                        <button id="" type="button" class="btn btn-dark rounded-0 col-12 booton_footer" name=""><span>Enviar</span></button>
                    </div>
                </div>
                <div class="col-4 border border-secondary">
                    <div class=" p-4 " style="margin-left: 8.333333%;">

                        <div>
                            <h3 class="main-title">Datos de Contacto</h3>
                            <div class="row contenedor_contac">
                                <i  class="far fa-comment li_style_contac"></i>
                                <div>
                                    <h5>Dirección</h5>
                                    <p>dirección</p>
                                </div>
                            </div>
                            <div class="row contenedor_contac">
                                 <i  class="far fa-comment li_style_contac"></i>
                                <div>
                                    <h5>Teléfono</h5>
                                    <p>teléfono</p>
                                </div>
                            </div>
                            <div class="row contenedor_contac">
                                 <i  class="far fa-comment li_style_contac"></i>
                                <div>
                                    <h5>Celular</h5>
                                    <p>celular</p>
                                </div>
                            </div>
                            <div class="row contenedor_contac">
                                 <i  class="far fa-comment li_style_contac"></i>
                                <div>
                                    <h5>WhatsApp</h5>
                                    <p>whatsApp</p>
                                </div>
                            </div>
                            <div class="row contenedor_contac">
                                 <i  class="far fa-comment li_style_contac"></i>
                                <div>
                                    <h5>Correo</h5>
                                    <p>correo</p>
                                </div>
                            </div>

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