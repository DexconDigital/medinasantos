<footer class="footer">
    <div class="container-fluid footer-inner">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 d-flex justify-content-center justify-content-md-start">
                <div class="footer-item">
                    <h4>Datos de contacto:</h4>

                    <ul class="contact-info">
                        <li>
                            <i class="<?php echo $datos_contacto['direccion']['icono']; ?> mr-2"></i> <?php echo $datos_contacto['direccion']['direccion']; ?>
                        </li>
                        <li>
                            <i class="<?php echo $datos_contacto['correo']['icono']; ?> mr-2"></i> <a href="mailto:<?php echo $datos_contacto['correo']['link'] ?>"><?php echo $datos_contacto['correo']['correo_espacio'] ?></a>
                        </li>
                        <li>
                            <i class="<?php echo $datos_contacto['telefono_fijo']['icono']; ?> mr-2"></i> <a href="<?php echo  $datos_contacto['telefono_fijo']['link'] ?>"><?php echo $datos_contacto['telefono_fijo']['imprimir'] ?></a>
                        </li>
                        <li>
                            <i class="<?php echo $datos_contacto['celular']['icono']; ?> mr-2"></i> <a href="<?php echo $datos_contacto['celular']['link'] ?>"><?php echo $datos_contacto['celular']['imprimir'] ?></a>
                        </li>
                    </ul>

                    <ul class="social-list clearfix mb-4">
                        <li><a href="<?php echo $redes_sociales['facebook']['link']; ?>" target="blank" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="<?php echo $redes_sociales['twitter']['link']; ?>" target="blank" class="twitter"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="<?php echo $redes_sociales['instagram']['link']; ?>" target="blank" class="instagram"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="<?php echo $datos_contacto['whatsapp']['link']?>" target="blank" class="whatsapp"><i class="fab fa-whatsapp"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item">
                    <h4>
                        Formularios Aseguradoras
                    </h4>
                    <ul class="links">
                        <?php for ($i = 0; $i < count($formularios_aseguradoras); $i++) {
                            $r = $formularios_aseguradoras[$i];
                            echo '<li>
                                    <a href="' . $r['ruta'] . '" target="_blank"><i class="fa fa-angle-right"></i>' . $r['nombre'] . '</a>
                                </li>
                            ';
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="recent-posts footer-item">
                    <h4>Ubícanos</h4>
                    <iframe class="mapa_footer" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.146475749351!2d-74.09479368573668!3d4.744590342597737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f84f6585f3987%3A0x7c83b0f50ed44598!2sCentro+Comercial+Fiesta+Suba!5e0!3m2!1ses!2sco!4v1565647532423!5m2!1ses!2sco" frameborder="0" style="border:0; width: 100%" allowfullscreen></iframe>
                    <div class="form-group mt-2">
                        <a href="https://goo.gl/maps/ZKB5vgpJ3tL3dCLz8" name="submitNewsletter" class="btn btn-block btn-color mt-3 btn-como-llegar">
                            Como llegar
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item">
                    <h4>Contáctanos</h4>
                    <div class="Subscribe-box">
                        <form action="" method="POST">
                            <div class="formularios_height">   
                            <div class="form-group">
                                <input type="text" class="form-contact" name="email" placeholder="Nombre">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-contact" name="email" placeholder="Correo">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-contact" name="email" placeholder="Teléfono">
                            </div>
                            <div class="form-group">
                                <textarea class="form-contact" name="email" style="height:80px;" placeholder="Mensaje"></textarea>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Confimo que he leído, entendido y acepto la política de tratamiento de datos personales.</label>
                            </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="submitNewsletter" class="btn btn-block btn-color">
                                    Enviar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <p class="copy">Copyright © 2019 <a href="http://dexcondigital.com">Dexcon Digital.</a> Todos los derechos reservados.</p>
            </div>
        </div>
    </div>
</footer>

<!-- Boton subir -->
<i class="fas fa-angle-double-up subir"></i>
<!-- Boton subir -->
<?php include 'boton-flotante.php'?>
<!-- LLamado a modales -->
<div class="modal fade" id="consigna" tabindex="-1" role="dialog" aria-labelledby="consigna" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Consignar Inmueble</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form action="email/consignainmueble.php" class="row" method="post">
                        <div class="form-group col-12">
                            <input type="text" placeholder="Nombre" name="nombre" class="form-control" requiered>
                        </div>
                        <div class="form-group col-12">
                            <input type="mail" placeholder="Correo" name="email" class="form-control" required>
                        </div>
                        <div class="form-group col-12">
                            <input type="Telefono" placeholder="Teléfono" name="telefono" class="form-control" requiered>
                        </div>
                        <div class="form-group col-12">
                            <select class="form-control" name="transaccion" requiered>
                                <option selected disabled>Tipo de Transacción</option>
                                <option value="arriendo">Arriendo</option>
                                <option value="arriendo/venta">Arriendo/venta</option>
                                <option value="venta">Venta</option>
                                <option value="avaluos">avalúos</option>
                            </select>
                        </div>
                        <div class="form-group col-12">
                            <select class="form-control" id="tipo_inm" name="tipo_inm" requiered>
                                <option selected disabled>Tipo de Inmueble</option>
                                <option value="Apartamento">Apartamento</option>
                                <option value="Casa">Casa</option>
                                <option value="Consultorio">Consultorio</option>
                                <option value="Oficina">Oficina</option>
                                <option value="Local">Local</option>
                                <option value="Bodega">Bodega</option>
                                <option value="Lote">Lote</option>
                                <option value="Finca">Finca</option>
                                <option value="Parqueadero">Parqueadero</option>
                                <option value="Edificio">Edificio</option>
                                <option value="Apartaestudio">Apartaestudio</option>
                                <option value="Hotel">Hotel</option>
                            </select>
                        </div>
                        <div class="form-group col-12">
                            <input type="number" placeholder="Valor" name="valor" class="form-control" requiered>
                        </div>
                        <div class="form-group col-12">
                            <input type="number" placeholder="Área" name="area" class="form-control" requiered>
                        </div>
                        <div class="form-group col-12">
                            <input type="text" placeholder="Ciudad" name="ciudad" class="form-control" requiered>
                        </div>
                        <div class="form-group col-12">
                            <input type="text" placeholder="Dirección" name="direccion" class="form-control" requiered>
                        </div>
                        <div class="form-group col-12">
                            <textarea name="mensaje" placeholder="Mensaje" name="mensaje" class="form-control" id="mensaje" rows="6" requiered></textarea>
                        </div>
                        <div class="form-group col-12">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" requiered>
                                <label class="form-check-label" for="exampleCheck1">Confimo que he leído, entendido y acepto <a href="./PROTECCION DE DATOS.pdf" class="a-terminos">la política de tratamiento de datos personales.</a></label>
                            </div>
                        </div>
                        <div class="form-group col-12">
                            <button type="submit" class="btn btn-color btn-sm btn-block">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>