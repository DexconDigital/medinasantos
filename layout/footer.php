<footer class="footer">
    <div class="container footer-inner">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item">
                    <h4>Datos de contacto:</h4>

                    <ul class="contact-info">
                        <li>
                            <i class="<?php echo $datos_contacto['direccion']['icono'];?> mr-2"></i> <?php echo $datos_contacto['direccion']['direccion']; ?>
                        </li>
                        <li>
                            <i class="<?php echo $datos_contacto['correo']['icono'];?> mr-2"></i> <a href="mailto:<?php echo $datos_contacto['correo']['correo'] ?>"><?php echo $datos_contacto['correo']['correo'] ?></a>
                        </li>
                        <li>
                            <i class="<?php echo $datos_contacto['telefono_fijo']['icono'];?> mr-2"></i> <a href="<?php echo  $datos_contacto['telefono_fijo']['link'] ?>"><?php echo $datos_contacto['telefono_fijo']['imprimir'] ?></a>
                        </li>
                        <li>
                            <i class="<?php echo $datos_contacto['celular']['icono'];?> mr-2"></i> <a href="<?php echo $datos_contacto['celular']['link'] ?>"><?php echo $datos_contacto['celular']['imprimir'] ?></a>
                        </li>
                    </ul>

                    <ul class="social-list clearfix">
                        <li><a href="" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="" class="twitter"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="" class="instagram"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="" class="whatsapp"><i class="fab fa-whatsapp"></i></a></li>
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
                    <h4>Ubicanos</h4>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.146475749351!2d-74.09479368573668!3d4.744590342597737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f84f6585f3987%3A0x7c83b0f50ed44598!2sCentro+Comercial+Fiesta+Suba!5e0!3m2!1ses!2sco!4v1565647532423!5m2!1ses!2sco" frameborder="0" style="border:0; width: 100%; height:258px" allowfullscreen></iframe>
                    <div class="form-group mt-2">
                        <a href="https://goo.gl/maps/ZKB5vgpJ3tL3dCLz8" name="submitNewsletter" class="btn btn-block btn-color">
                            Como llegar
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item">
                    <h4>Contactanos</h4>
                    <div class="Subscribe-box">
                        <form action="" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-contact" name="email" placeholder="Nombre">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-contact" name="email" placeholder="Correo">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-contact" name="email" placeholder="Telefono">
                            </div>
                            <div class="form-group">
                                <textarea class="form-contact" name="email" style="height:80px;" placeholder="Mensaje"></textarea>
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
                <p class="copy">Copyright © 2019 <a href="http://dexcondigital.com"></a> Dexcon Digital. Todos los derechos reservados.</p>
            </div>
        </div>
    </div>
</footer>